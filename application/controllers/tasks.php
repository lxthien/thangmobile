<?php
    class Tasks extends MY_Controller {
        public function __construct() {
            parent::__construct();
            $this->load->model('task_model', 'task_model');
            $this->load->model('customer_model', 'customer_model');
            $this->load->helper(array('form', 'form'));
            $this->load->helper('myhelper');

            if (!$this->ion_auth->logged_in()) {
                redirect(base_url('auths/authenticate'));
            }
        }

        public function listTask() {
            date_default_timezone_set("Asia/Ho_Chi_Minh");
            $data['tasks'] = $this->task_model->readListDoing();
            $data['tasksFinish'] = $this->task_model->readListFinish();
            $data['tasksNotifiedCustomer'] = $this->task_model->readListNotifiedCustomer();
            $data['tasksCustomerReceived'] = $this->task_model->readListCustomerReceived();
            $data['view'] = 'customer/task/index';
            $this->load->view('customer', $data);
        }

        public function add() {
            $customer_id = $this->uri->rsegment(3);

            $task = new stdClass();
            $task->id = '';
            $task->taskName = '';
            $task->taskType = '';
            $task->customer_id = '';
            
            if (trim($customer_id) !== "")
                $task->customer_id = $customer_id;
            
            $task->phoneType = '';
            $task->phoneImei = '';
            $task->notePrivate = '';
            $task->phonePass = '';
            $task->phonePrice = '';
            $task->phoneStatus = '';
            $task->warrantyPeriod = '';
            $task->warrantyPeriodEnd = '';
            $task->phoneSim = '';
            $task->technicalFinish = '';
            $task->notificationCustomer = '';
            $task->quickStatus = '';
            $task->isCustomerVip = '';
            $task->taskStatus = '';
            $task->timeClosedTask = '';
            $task->timeWarranty = '';
            $task->useAccessories = 0;
            $task->note = '';
            $data['task'] = $task;
            $data['view'] = 'customer/task/add';
            $data['customers'] = $this->customer_model->read_list();
            $this->load->view('customer', $data);
        }

        public function edit() {
            $id = $this->uri->rsegment(3);
            $task = $this->task_model->read_by_id($id);
            $data['customers'] = $this->customer_model->read_list();
            if (!isset($task) || !$task) {
                show_error("Connot find item id " . $id . ' in system');
            } else {
                $data['task'] = $task;
                $data['view'] = 'customer/task/add';
                $this->load->view('customer', $data);
            }
        }

        public function save() {
            if (isset($_POST['action'])) {
                if (isset($_POST['id'])) {
                    $id = $this->input->post('id');
                } else {
                    $id = "";
                }

                $task['taskName'] = $this->input->post('taskName');
                $task['taskType'] = $this->input->post('taskType');
                $task['customer_id'] = $this->input->post('customer_id');
                $task['phoneType'] = $this->input->post('phoneType');
                $task['phoneImei'] = $this->input->post('phoneImei');
                $task['notePrivate'] = $this->input->post('notePrivate');
                $task['phonePass'] = $this->input->post('phonePass');
                $task['phonePrice'] = $this->input->post('phonePrice');
                $task['phoneStatus'] = $this->input->post('phoneStatus');
                $task['phoneSim'] = $this->input->post('phoneSim');
                $task['technicalFinish'] = $this->input->post('technicalFinish');
                $task['notificationCustomer'] = $this->input->post('notificationCustomer');
                $task['quickStatus'] = $this->input->post('quickStatus');
                $task['isCustomerVip'] = $this->input->post('isCustomerVip');
                $task['taskStatus'] = $this->input->post('taskStatus');
                $task['timeWarranty'] = $this->input->post('timeWarranty');
                $task['useAccessories'] = $this->input->post('useAccessories');
                $task['note'] = $this->input->post('note');

                if($this->input->post('warrantyPeriodEnd') != '') {
                    $dateAndTime = $this->input->post('warrantyPeriodEnd').' '.$this->input->post('warrantyPeriodTimeEnd');
                    $warrantyPeriodEnd = new DateTime($dateAndTime);
                    //echo $warrantyPeriodEnd->format('Y-m-d H:i:s'); die;
                    $task['warrantyPeriodEnd'] = $warrantyPeriodEnd->format('Y-m-d H:i:s');
                }

                $result = '';

                if (trim($id) !== "") {
                    $task['code'] = $this->createCode($id, $this->input->post('taskType'), 7);
                    $task['id'] = $id;
                    $task['updated'] = date('Y-m-d H:i:s');
                    if ($this->input->post('taskStatus') == 1) {
                        $task['timeClosedTask'] = date('Y-m-d H:i:s');
                        
                        $dateWarrantyPerios = new DateTime(date('Y-m-d H:i:s', time()));
                        $dateWarrantyPerios->add(new DateInterval('P'.$this->input->post('timeWarranty').'D'));
                        $task['warrantyPeriod'] = $dateWarrantyPerios->format('Y-m-d H:i:s');
                    }
                    $this->task_model->update($task);
                    redirect(base_url().'tasks/listTask');
                } else {
                    // Convert time to UTC
                    $createDate = new DateTime(date('Y-m-d H:i:s'));
                    $createDate->setTimezone(new DateTimeZone('UTC'));
                    $task['created'] = $createDate->format('Y-m-d H:i:s');
                    
                    $result = $this->task_model->add($task);
                    if (is_numeric($result)) {
                        $task['id'] = $result;
                        $task['code'] = $this->createCode($result, $this->input->post('taskType'), 7);
                        $this->task_model->update($task);
                        redirect(base_url('tasks/listTask'));
                    } else {
                        show_error($result);
                    }
                }
            } else {
                redirect(base_url('customers/list'));
            }
        }

        public function printTask() {
            $id = $this->uri->rsegment(3);
            $task = $this->task_model->read_by_id($id);
            $data['task'] = $task;
            $data['view'] = 'customer/task/print';
            $this->load->view('customer', $data);
        }

        private function createCode($id, $typeTask, $number) {
            if($typeTask == 1) {
                $text = 'YMS';
            } else {
                $text = 'YM';
            }

            $count = strlen($id);
            for($i=1; $i <= ($number-$count); $i++) {
                $text .= '0';
            }
            return $text.$id;
        }

        public function delete($id) {
            $id = $this->uri->rsegment(3);
            $this->task_model->delete(array('id' => $id));
            redirect(base_url() . 'tasks/listTask');
        }

    }