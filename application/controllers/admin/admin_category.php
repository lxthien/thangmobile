<?php

class Admin_category extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->model('Banner_model', 'banner_model');
        $this->load->library('form_validation');
        $this->load->helper(array('form', 'text'));
        $this->form_validation->set_rules('title', 'Description', 'xss_clean');
        $this->form_validation->set_rules('url', 'Link', 'xss_clean');
    }

	function index() {
		//$data['list_items'] = $this->_get_list_banners();
		$data['title'] = "Quản lí danh mục";
		$this->load->view('panel/home', $data);
	}

	function add() {
		@$category->parentcat_id = '';
		$category->name = '';
        $category->url = '';
        $category->image = '';
        $category->seo_title = '';
        $category->seo_description = '';
        $category->seo_keyword = '';
        $category->active = 'true';
        $data['new_item'] = $category;
		$this->load->view('panel/home', $data);
	}
}