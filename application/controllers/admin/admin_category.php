<?php

class Admin_category extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->model('News_category_model', 'news_category_model');
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
		@$category->id_parent = '';
        $category->id_news_category="";
		$category->name = '';
        $category->link_rewrite = '';
        $category->meta_title = '';
        $category->meta_description = '';
        $category->meta_keywords = '';
        $category->active = 'true';
        $data['new_item'] = $category;
		$this->load->view('panel/home', $data);
	}

    function save() {
        if (isset($_POST['save'])) {
            @$id_news_category = $this->input->post('id_news_category');
            
            @$object->id_language = 1;
            $object->id_news_category = $this->input->post('id_news_category');
            $object->name = $this->input->post('name');
            $object->id_parent = $this->input->post('id_parent');
            $object->link_rewrite = $this->input->post('link_rewrite');
            
            if (!$this->form_validation->run()) {
                echo 2; die;
                $data['Cname'] = $this->download_category_model->read_list_id_and_name();
                $data['icons'] = $this->_build_icon_list();
                $data['new_item'] = $download_input;
                $data['error'] = validation_errors();
                $this->load->view('panel/home', $data);
            } else {
                $id_news_category = $this->input->post('id_news_category');

                @$object['id_news_category'] = $this->input->post('id_news_category');
                $object['name'] = $this->input->post('name');
                $object['meta_title'] = $this->input->post('meta_title');
                $object['meta_description'] = $this->input->post('meta_description');
                $object['meta_keywords'] = $this->input->post('meta_keywords');
                $object['link_rewrite'] = $this->input->post('link_rewrite');
                
                $active = $this->input->post('active');
                if (trim($active) === '') {
                    $active = FALSE;
                } else {
                    $active = TRUE;
                }
                $object['active'] = $active;

                echo 2; die;
                $result;
                if (isset($id_news_category) && trim($id_news_category) !== "") {
                    echo 2; die;
                    $this->news_model->update($object);
                    redirect(base_url('panel/admin_category'));
                } else {
                    $result = $this->News_category_model->add($object);
                    echo 1; die;
                    if (is_numeric($result)) {
                        redirect(base_url('panel/admin_category/edit/'.$result));
                    } else {
                        show_error($result);
                    }
                }
            }
        } else {
            redirect(base_url('panel/admin_category'));
        }
    }
}