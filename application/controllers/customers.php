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
	    	$data['customers'] = $this->customer_model->read_list();
	    	$data['view'] = 'customer/information/index';
	    	$this->load->view('customer', $data);
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

	}