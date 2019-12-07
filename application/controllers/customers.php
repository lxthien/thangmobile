<?php
    class Customers extends MY_Controller {
        public function __construct() {
            parent::__construct();
            $this->load->model('customer_model', 'customer_model');
            $this->load->model('task_model', 'task_model');
            $this->load->helper(array('form', 'form'));
            $this->load->helper('myhelper');

            if (!$this->ion_auth->logged_in()) {
                redirect(base_url('auths/authenticate'));
            }
        }

        public function index() {
            $data['view'] = 'customer/information/index';
            $this->load->view('customer', $data);
        }

        public function customersPage() {
            // Datatables Variables
            $draw = intval($this->input->get("sEcho"));
            $start = intval($this->input->get("iDisplayStart"));
            $length = intval($this->input->get("iDisplayLength"));
            $timeBack = intval($this->input->get("customer_back"));
            $search = $this->input->get("sSearch");
            $customerHasTaskAfterTime = 0;

            $customers = $this->customer_model->read_list($search, $start, $length);
            $customersCount = empty($search) ? $this->customer_model->get_all_customers() : count($customers);
            $data = array();

            foreach($customers as $r) {
                if (empty($timeBack) || $timeBack < 1) {
                    $data[] = array(
                            $r->name . '(<a href="' . base_url().'tasks/add/customer/'.$r->id . '" title="Tạo yêu cầu cho khách hàng này"><i class="fa fa-plus" aria-hidden="true"></i> Tasks</a>)',
                            $r->phone,
                            lastDoing($r->id),
                            customerRequestImei($r->id),
                            customerRequestTimeReceive($r->id),
                            customerRequestPrice($r->id),
                            customerRequestTimeWarranty($r->id),
                            customerRequestNote($r->id),
                            customerRequest($r->id),
                            number_format(countPriceCustomerRequest($r->id)),
                            '<a href="' . base_url().'customers/edit/'.$r->id . '" title="Chỉnh sửa"><i class="fa fa-edit"></i></a>' . '&nbsp;&nbsp;&nbsp;' .
                            '<a href="' . base_url().'customers/histories/'.$r->id. '" title="Lịch sử"><i class="fa fa-history"></i></a>'
                    );
                } else {
                    $takskOfCustomerAfterTime = $this->task_model->getTaskCustomerAfterTime($r->id, $timeBack);
                    if ($takskOfCustomerAfterTime <= 0) {
                        $customerHasTaskAfterTime++;
                        $data[] = array(
                            $r->name . '(<a href="' . base_url().'tasks/add/customer/'.$r->id . '" title="Tạo yêu cầu cho khách hàng này"><i class="fa fa-plus" aria-hidden="true"></i> Tasks</a>)',
                            $r->phone,
                            lastDoing($r->id),
                            customerRequestImei($r->id),
                            customerRequestTimeReceive($r->id),
                            customerRequestPrice($r->id),
                            customerRequestTimeWarranty($r->id),
                            customerRequestNote($r->id),
                            customerRequest($r->id),
                            number_format(countPriceCustomerRequest($r->id)),
                            '<a href="' . base_url().'customers/edit/'.$r->id . '" title="Chỉnh sửa"><i class="fa fa-edit"></i></a>' . '&nbsp;&nbsp;&nbsp;' .
                            '<a href="' . base_url().'customers/histories/'.$r->id. '" title="Lịch sử"><i class="fa fa-history"></i></a>'
                        );
                    }
                }
            }

            $output = array(
                "draw" => $draw,
                "recordsTotal" => $customerHasTaskAfterTime > 0 ? $customerHasTaskAfterTime : $customersCount,
                "recordsFiltered" => $customerHasTaskAfterTime > 0 ? $customerHasTaskAfterTime : $customersCount,
                "data" => $data
            );
           
            echo json_encode($output);
            exit();
        }

        public function add() {
            $customer = new stdClass();
            $customer->id = '';
            $customer->name = '';
            $customer->phone = '';
            $data['customer'] = $customer;
            $data['view'] = 'customer/information/add';
            $this->load->view('customer', $data);
        }

        public function save() {
            if (isset($_POST['action'])) {
                if (isset($_POST['id'])) {
                    $id = $this->input->post('id');
                } else {
                    $id = "";
                }

                $customer['name'] = $this->input->post('name');
                $customer['phone'] = $this->input->post('phone');
                $result = '';

                if (trim($id) !== "") {
                    $customer['id'] = $id;
                    $this->customer_model->update($customer);
                    redirect(base_url().'customers/index');
                } else {
                    $result = $this->customer_model->add($customer);
                    if (is_numeric($result)) {
                        redirect(base_url('tasks/add/customer/'.$result));
                    } else {
                        show_error($result);
                    }
                }
            } else {
                redirect(base_url('customers/index'));
            }
        }

        public function edit() {
            $id = $this->uri->rsegment(3);
            $customer = $this->customer_model->read_by_id($id);
            if (!isset($customer) || !$customer) {
                show_error("Connot find item id " . $id . ' in system');
            } else {
                $data['customer'] = $customer;
                $data['view'] = 'customer/information/add';
                $this->load->view('customer', $data);
            }
        }

        public function delete() {
            $id = $this->uri->rsegment(3);
            $this->customer_model->delete(array('id' => $id));
            redirect(base_url() . 'customers/index');
        }

        public function histories() {
            $customerID = $this->uri->rsegment(3);
            $data['tasks'] = $this->task_model->customerRequest($customerID);
            $data['view'] = 'customer/information/histories';
            $this->load->view('customer', $data);
        }

        function phoneCheckSignup(){
            $phone = $this->input->post('phone');
            $customer = $this->customer_model->read_by_phone($phone);

            if (!isset($customer) || !$customer) {
                echo "true";
            } else {
                echo "false";
            }
            exit;
        }
    }