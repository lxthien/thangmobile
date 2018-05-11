<?php
	class Task_model extends MY_Model {
		
		var $primary_table = 'tasks';
    	var $fields = array('id', 'code', 'taskName', 'taskType', 'customer_id', 'phoneType', 'phoneImei', 'notePrivate', 'phonePass', 'phonePrice', 'phoneStatus', 'phoneSim', 'warrantyPeriod', 'warrantyPeriodEnd', 'technicalFinish', 'notificationCustomer', 'quickStatus', 'taskStatus', 'note', 'isCustomerVip', 'timeClosedTask', 'timeWarranty', 'useAccessories', 'created', 'updated');
    	var $required_fields = array('taskType', 'customer_id');

    	var $primary_key = 'id';

    	function __construct() {
	        parent::__construct();
	    }

	    public function read_by_id($id) {
	        $options = array($this->primary_key => $id);
	        $query = $this->get($options);
	        return $query;
	    }

	    public function read_list() {
            $this->db->select('*');
            $this->db->from($this->primary_table);
            $this->db->where('taskType', 1);
            $this->db->where('taskStatus', 0);
            $this->db->order_by("created", "asc");
            $query = $this->db->get();
	        return $query->result();
	    }

        public function readListDoing() {
            $this->db->select('*');
            $this->db->from($this->primary_table);
            $this->db->where('taskType', 1);
            $this->db->where('taskStatus', 0);
            $this->db->where('technicalFinish', 0);
            $this->db->where('notificationCustomer', 0);
            $this->db->order_by("created", "asc");
            $query = $this->db->get();
            return $query->result();
        }

        public function readListFinish() {
            $this->db->select('*');
            $this->db->from($this->primary_table);
            $this->db->where('taskType', 1);
            $this->db->where('taskStatus', 0);
            $this->db->where('technicalFinish', 1);
            $this->db->where('notificationCustomer', 0);
            $this->db->order_by("created", "asc");
            $query = $this->db->get();
            return $query->result();
        }

        public function readListNotifiedCustomer() {
            $this->db->select('*');
            $this->db->from($this->primary_table);
            $this->db->where('taskType', 1);
            $this->db->where('taskStatus', 0);
            $this->db->where('notificationCustomer', 1);
            $this->db->order_by("created", "asc");
            $query = $this->db->get();
            return $query->result();
        }

	    public function delete_by_id($id) {
	        $options = array($this->primary_key => $id);
	        $this->delete($options);
	    }

        public function countRequest($customerID) {
            $this->db->select('*');
            $this->db->from($this->primary_table);
            $this->db->where(array('customer_id'=>$customerID));
            $query = $this->db->get();
            return $query->num_rows();
        }

        public function countPriceCustomerRequest ($customerID) {
            $this->db->select_sum('phonePrice');
            $this->db->from($this->primary_table);
            $this->db->where(array('customer_id'=>$customerID));
            $query = $this->db->get();
            if($query->num_rows() > 0)
                return $query->row()->phonePrice;
            else
                return 0;
        }

        public function customerRequest($customerID) {
            $this->db->select('*');
            $this->db->from($this->primary_table);
            $this->db->where(array('customer_id'=>$customerID));
            $this->db->order_by("created", "desc");
            $query = $this->db->get();
            return $query->result();
        }

	}