<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AdminNews
 *
 * @author DAU GAU
 */
class Dashboard extends Admin_controller {

    //put your code here
    function __construct() {
        parent::__construct();
        $this->load->model('Admin_menu_model', 'admin_menu');
        $this->load->library('ion_auth');
    }

    function index() {
    	if(!$this->ion_auth->logged_in()){
    		redirect('panel/login');    	
        }else{
        	
	        $this->load->view('panel/home');
        }        
    }

    public function save() {
        $news = array();
//        $news['id_news_category'] = 1;        

        $news['id_language'] = 1;
        $news['meta_title'] = '';
        $news['meta_description'] = '';
        $news['meta_keywords'] = '';
        $news['meta_title'] = '';
        $news['content'] = 'Hello, this is my first news';
        $news['link_rewrite'] = 'first-post';
        $news['active'] = 1;
        $result = $this->newsModel->add($news);

        if (!is_numeric($result)) {
            show_error($result);
        }
    }

    public function delete($id_news) {
        echo $id_news;
        $this->newsModel->delete(array('id_news' => $id_news));
    }

    function _build_admin_menu() {
        $admin_menus = $this->admin_menu->read_list_active();
        $menu_items = array();
        foreach ($admin_menus as $admin_menu) {
            $menu_item = array();
            if (isset($admin_menu->name) && trim($admin_menu->name)) {
                $menu_item['name'] = trim($admin_menu->name);
            } else {
//                if ($admin_menu->is)
            }
        }
        return $menu_item;
    }

}

?>
