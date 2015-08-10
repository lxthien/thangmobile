<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Admin_Controller
 *
 * @author DAU GAU
 */
class MY_Controller extends CI_Controller {

    //put your code here
    function __construct() {
        parent::__construct();

        $this->load->helper('myhelper');

        if (isset($_SERVER['HTTP_REFERER'])) {
            $this->session->set_userdata('previous_page', $_SERVER['HTTP_REFERER']);
        } else {
            $this->session->set_userdata('previous_page', base_url());
        }
        $this->load->model('Config_model', 'sconfig');
        $this->load->model('Download_category_model', 'download_category_model');
        $this->load->model('news_category_model');
        $data = array();
        $data['header_main_menus'] = $this->_read_pages_list();
        $site_meta_data = array();
        $site_meta_data['site_name'] = $this->sconfig->get_value('site_name');
        $data['site_meta_data'] = $site_meta_data;
        $vars = array();
        $vars['data'] = $data;
        
        // get all service to show in menu
        $this->load->model('Services_model', 'services_model');
        $vars['listService'] = $this->services_model->getAll();
        $vars['menuCategoryService'] = $this->news_category_model->readListByParentId(4);
        
        $this->load->vars($vars);
    }

    private function _read_pages_list() {
        $pages = $this->page_model->read_list();
        foreach($pages as &$page){
            if ($page->link_rewrite ==='home'){
                $page->link_rewrite= '';
                break;
            }
        }
        return $pages;
    }

}

class Admin_controller extends CI_Controller {

    //put your code here
    function __construct() {
        parent::__construct();
        if (!$this->ion_auth->logged_in()) {
            redirect(base_url('panel/login'));
        }
    }
}

?>