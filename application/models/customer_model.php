<?php
	class Customer_model extends MY_Model {
		
		var $primary_table = 'customers';
    	var $fields = array('id', 'name', 'phone');
    	var $required_fields = array('name', 'phone');

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
	        $query = $this->get();
	        return $query->result();
	    }

	    public function delete_by_id($id) {
	        $options = array($this->primary_key => $id);
	        $this->delete($options);
	    }

	    public function getHistoryByNameOrPhone($query) {
            $this->db->select('*');
            $this->db->from($this->primary_table);
            $this->db->where('phone', $query);
            $query = $this->db->get();
	        return $query->result();
        }
	}
?>