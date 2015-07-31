<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of tintuc
 *
 * @author DAU GAU
 */
class News extends MY_Controller {

    //put your code here
    var $page_meta = array();
    var $title_character_nr = 80;
    var $content_word_nr = 100;
    var $total_posts;
    var $site_meta_data = array();
    
    public function __construct() {
        parent::__construct();
        $this->load->model('News_model', 'news_model');
        $this->load->model('Page_model', 'page_model');
        $this->load->model('Page_item_model', 'page_item_model');
        $this->load->model('News_category_model', 'category_model');
        $this->load->model('Advertise_model','advertise_model');
        $this->load->model('Banner_model', 'banner_model');
        $this->load->model('Download_model', 'download_model');
        $this->load->model('Mcontact');
    }

    /*
     * Load tat ca tin cho trang tin tuc.
     */
    public function view_post_on_page($page_link_rewrite, $page_nr) {
    	$data = $this->load->get_var('data');
    	$page = $this->_load_page($page_link_rewrite);
    	//        echo 'hello ba con'.$thread_id;
    	if (!$page) {
    		show_404();
    	}
    	$this->_get_meta_data($page);
    	$data['contact'] = $this->Mcontact->listcontact(); 
    	
    	$data['categories'] = $this->_load_categories($page);
    	$data['show_all_news'] = 'true';
    	$data['two_tincongnghe'] = $this->truncate_title_content_posts($this->news_model->get_news_list_by_category_id(2, NULL, LIMIT_SHOW_ALL_NEWS), MAX_DES_TITLE, MAX_DES_CONTENT);
    	$data['two_kinhnghiemsudung'] = $this->truncate_title_content_posts($this->news_model->get_news_list_by_category_id(3, NULL, LIMIT_SHOW_ALL_NEWS), MAX_DES_TITLE, MAX_DES_CONTENT);
    	
    	$data['partners'] = $this->_get_partners();
    	$data['site_meta_data'] = $this->site_meta_data;
    	$data['banners'] = $this->banner_model->get_active_list();
    	$data['home_advertises'] = $this->advertise_model->read_list_by_position(1);
    	$data['latest_downloads'] = $this->get_latest_download();
    	$data['download_menu'] = $this->download_category_model->read_by_parent_id(1);
    	$this->load->view('universalView', $data);
    }

    public function get_latest_download() {
    	$latest_downloads = $this->download_model->_get_latest_download();
    	foreach ($latest_downloads as $download) {
    		$eachCategory = $this->download_category_model->read_by_id($download->category_id);
    		$download->link_rewrite = 'tai-ve/'.$eachCategory->link_rewrite.'/'.$download->id.'-'.$download->link_rewrite.URL_TRAIL;
    
    	}
    	 
    	return $latest_downloads;
    }
    /*
     * Load tin cho 1 sub category cua tin tuc.
    */
    public function view_post_on_category($page_link_rewrite, $category_link_rewrite, $page_nr) {
    	
        $data = $this->load->get_var('data');
        $page = $this->_load_page($page_link_rewrite);
        $page_category = $this->_load_page_by_category($category_link_rewrite);
        $selected_category = $this->_load_selected_category($page, $category_link_rewrite);
        if (!$page) {
        	show_404();
        }
        $this->_get_meta_data($page_category);
        $data['categories'] = $this->_load_categories($page);
        $data['contact'] = $this->Mcontact->listcontact();
        $data['show_category_news'] = 'true';
        
        $offset = $this->_calculate_page_offset($page_nr);
        $category_posts = $this->news_model->get_news_list_by_category_id($selected_category->id_news_category, $offset, MAX_ITEM_PAGINAGION);
        
        $total_record_in_post = $this->news_model->count_postnr_by_category_id($selected_category->id_news_category);
        
        foreach ($category_posts as &$post) {
        	$post->link_rewrite = $selected_category->link_rewrite . '/' . $post->id_news . '-' . $post->link_rewrite . URL_TRAIL;
        	$post = $this->truncate_title_content_post($post, MAX_DES_TITLE, MAX_DES_CONTENT);
        }
        
        $data['all_news'] = $category_posts;
        $data['category_name'] = $selected_category->name;
        
        $this->init_paging($selected_category->link_rewrite, $total_record_in_post);
        
        
        $data['partners'] = $this->_get_partners();
    	$data['site_meta_data'] = $this->site_meta_data;
    	$data['banners'] = $this->banner_model->get_active_list();
    	$data['home_advertises'] = $this->advertise_model->read_list_by_position(1);
    	$data['latest_downloads'] = $this->get_latest_download();
    	$data['download_menu'] = $this->download_category_model->read_by_parent_id(1);
    	$this->load->view('universalView', $data);
    }

    function index($page_link_rewrite, $category_link = NULL, $thread_id = NULL, $page_nr = 0) {
        $data = $this->load->get_var('data');
        $page = $this->_load_page($page_link_rewrite);
//        echo 'hello ba con'.$thread_id;       
        if (!$page) {
            show_404();
        }
        $this->_get_meta_data($page);
        $data['categories'] = $this->_load_categories($page);
        $page_second_left = array();
        $page_second_left['page_categories'] = $this->_load_categories($page);
        $page_second_left['page_name'] = $page->name;
        $page_second_left['advertises'] = array('1' => 1);

        $data['page_second_left'] = $page_second_left;

        $data['page_second_right'] = $this->_load_page_second_right($page, $page_nr, $category_link, $thread_id);
        $data['partners'] = $this->_get_partners();
        
        //get adverties for left menu
        $data['left_advertises'] = $this->advertise_model->read_list_by_position(2);        
        $data['site_meta_data'] = $this->site_meta_data;
        $data['banners'] = $this->banner_model->get_active_list();
        $data['home_advertises'] = $this->advertise_model->read_list_by_position(1);
        $data['latest_downloads'] = $this->get_latest_download();
		$data['contact'] = $this->Mcontact->listcontact(); 
		$data['download_menu'] = $this->download_category_model->read_by_parent_id(1);
        $this->load->view('universalView', $data);
    }

    private function _load_selected_category($page, $category_link) {
        $selected_category = $this->category_model->read_by_link_rewrite($category_link);
        if (isset($selected_category)) {
            $selected_category->link_rewrite = $page->link_rewrite . '/' . $selected_category->link_rewrite;
        }
        return $selected_category;
    }

    private function _load_page_second_right($page, $page_nr, $category_link = NULL, $thread = NULL) {
        $result = array();
        if (isset($category_link)) {
            $selected_category = $this->_load_selected_category($page, $category_link);
            if (isset($selected_category)) {
//              get meta data for current selected category
                $this->_get_meta_data($selected_category);
                if (isset($thread)) {
//                    load nội dung bài viết
                    $post_content = $this->news_model->read_by_id($thread);
                    if (!isset($post_content)) {
                        show_error("Post not found");
                    }
                    $post_content->link_rewrite = $selected_category->link_rewrite . '/' . $post_content->link_rewrite . URL_TRAIL;
//                  get page meta data fo selected post
                    $this->_get_meta_data($post_content);
                    $result['single_post'] = $post_content;
//                    load bài viết cùng loại
                    $same_posts = $this->news_model->getRecordSameCategory($selected_category->id_news_category, $thread, 5);
                    $same_posts_array = $same_posts->result();
                    foreach ($same_posts_array as &$same_post) {
                        $same_post->link_rewrite = $selected_category->link_rewrite . '/' . $same_post->id_news . '-' . $same_post->link_rewrite . URL_TRAIL;
                        $same_post = $this->truncate_title_content_post($same_post, MAX_DES_TITLE, MAX_DES_CONTENT);
                    }
                    $result['category'] = $selected_category;
                    $result['posts_same_category'] = $same_posts_array;
                } else {
// //                    load bài viết cho selected category                    
//                     $offset = $this->_calculate_page_offset($page_nr);
//                     $category_posts = $this->news_model->get_news_list_by_category_id($selected_category->id_news_category, $offset, MAX_ITEM_PAGINAGION);
//                     $total_record_in_post = $this->news_model->count_postnr_by_category_id($selected_category->id_news_category);
//                     foreach ($category_posts as &$post) {
//                         $post->link_rewrite = $selected_category->link_rewrite . '/' . $post->id_news . '-' . $post->link_rewrite . URL_TRAIL;
//                         $post = $this->truncate_title_content_post($post, MAX_DES_TITLE, MAX_DES_CONTENT);
//                     }

//                     $category_news = array();
//                     $category_news['newses'] = $category_posts;
//                     $result['selected_company_category_newses'] = $category_news;
//                     $result['category_name'] = $selected_category->name;
//                     echo "TOTAL: ".$total_record_in_post;
//                     echo "LINK: ".$selected_category->link_rewrite;
//                     echo "PAGA: ".$page_nr;
//                     $this->init_paging($selected_category->link_rewrite, $total_record_in_post, $page_nr);
                    
                }
            } else {
                show_404("Không tìm thấy category này");
            }
        } else {
//             $page_offset = 0;
//             if ($page_nr > 0) {
//                 $page_offset = $page_nr - 1;
//             }
//             $offset = $page_offset * MAX_ITEM_PAGINAGION;
//             $category_news['newses'] = $this->_load_all_post_by_page($page, $offset);
//             $result['selected_company_category_newses'] = $category_news;
//             $total_records = $this->_get_post_number($page);
//             $this->init_paging($page->link_rewrite, $total_records);
//             echo "ALO";
        }

        return $result;
    }

    private function _load_categories($page) {
        // TODO not read data for parent category (has id in $paget_items)
        $page_items = $this->_load_page_item($page->id_page);
        $page_item_map_to_category;
        if (sizeof($page_items) === 0) {
            echo "No page items found";
            die();
        }
        $result = array();

        foreach ($page_items as $page_item) {
            if (isset($page_item->map_to_category)) {
                $page_item_map_to_category = $page_item;
                break;
            }
//            TODO : get all category for page like company_introduce
//            $categories = $this->category_model->read_list_by_parent_id($page_item['id_news_category']);            
//            if (sizeof($categories) > 0){
//                array_push(&$result, $categories);
//                
//            }
            echo "Unhandle this case in news controller";
            die();
        }
        if (isset($page_item_map_to_category)) {
            $result = $this->category_model->read_list_by_parent_id($page_item_map_to_category->map_to_category);
            foreach ($result as &$value) {
                $value->link_rewrite = $page->link_rewrite . '/' . $value->link_rewrite;
            }
        }
        return $result;
    }

    private function _load_page($page_link_rewrite) {
        $page = $this->page_model->read_by_link_rewrite($page_link_rewrite);
        return $page;
    }
    /*
     * _load_page_by_category()
     * load child category of news_category 
     * @params: $category_link_rewrite
     */
	private function _load_page_by_category($category_link_rewrite) {
		$page = $this->category_model->read_by_link_rewrite($category_link_rewrite);
		return $page;
	}
    private function _load_posts_by_category_id($category_id) {
        
    }

    private function _load_page_item($page_id) {

        $page_items = $this->page_item_model->get_page_items_by_page($page_id);

        return $page_items;
    }

    /**
     * Get all post of page with paging
     * @param type $page
     * @param type $page_nr
     * @return type 
     */
//     private function _load_all_post_by_page($page, $page_nr = 0) {
//         $page_items = $this->page_item_model->get_page_items_by_page($page->id_page);
//         $page_category_ids = array();
//         foreach ($page_items as $page_item) {

//             if (isset($page_item->map_to_category)) {
//                 $parent_category = $this->category_model->read_by_id($page_item->map_to_category);

//                 $category_ids = $this->_get_all_category_id($page_category_ids, $parent_category);
//                 array_merge($page_category_ids, $category_ids);
//             } else {
//                 echo "Implement get category from page_item_category";
//             }
//         }
//         $newses = $this->news_model->read_list_by_list_categries($page_category_ids, $page_nr, MAX_ITEM_PAGINAGION);
//         $newses = $this->truncate_title_content_posts($newses, MAX_DES_TITLE, MAX_DES_CONTENT);
//         foreach ($newses as &$news) {
//             $news = $this->_build_link_rewrite($page, $news);
//         }

//         return $newses;
//     }

    /**
     * Fetch all child category of input category then return array of thier ids
     * @param type $page_category_ids
     * @param type $parent_category
     * @return type 
     */
    private function _get_all_category_id(&$page_category_ids, $parent_category) {
        $sub_categories = $this->category_model->read_list_by_parent_id($parent_category->id_news_category);
        if (sizeof($sub_categories)) {
            foreach ($sub_categories as $sub_category) {
                $this->_get_all_category_id($page_category_ids, $sub_category);
            }
        } else {
            array_push($page_category_ids, $parent_category->id_news_category);
        }
        return $page_category_ids;
    }

    /**
     * Truncate title and content of post to display teaser
     * @param type $posts
     * @param type $title_word
     * @param type $content_word
     * @return type 
     */
    public function truncate_title_content_posts($posts, $title_word, $content_word) {
        foreach ($posts as &$post) {
            $post = $this->truncate_title_content_post($post, $title_word, $content_word);
        }
        return $posts;
    }

    public function truncate_title_content_post($post, $title_word, $content_word) {
        $post->title = word_limiter($post->title, $title_word);       
        $content = strip_tags($post->content);        
        $post->content = text_cut($content, $content_word);       
        return $post;
    }

    /**
     * Count all post in this page to init pagination
     * @param type $page
     * @return type 
     */
    private function _get_post_number($page) {
        $page_items = $this->page_item_model->get_page_items_by_page($page->id_page);
        $page_category_ids = array();
        foreach ($page_items as $page_item) {

            if (isset($page_item->map_to_category)) {
                $parent_category = $this->category_model->read_by_id($page_item->map_to_category);

                $category_ids = $this->_get_all_category_id($page_category_ids, $parent_category);
                array_merge($page_category_ids, $category_ids);
            } else {
                echo "Implement get category from page_item_category";
            }
        }
        $newses = $this->news_model->read_list_by_list_categries($page_category_ids, NULL, NULL);
        $newses = $this->truncate_title_content_posts($newses, MAX_DES_TITLE, MAX_DES_CONTENT);
        $this->total_posts = sizeof($newses);

        return $this->total_posts;
    }

    public function init_paging($link, $total_records) {
        $this->load->library('pagination');
        $config['base_url'] = base_url($link);
        $config['total_rows'] = $total_records;
        $config['per_page'] = MAX_ITEM_PAGINAGION;
        $config['use_page_numbers'] = TRUE;
        
        $config['next_link'] = 'Next';
        $config['uri_segment'] = 3;
        
        $config['num_tag_open'] = '<p>';
        $config['num_tag_close'] = '</p>';
        $config['cur_tag_open'] = '<p><a href="#">';
        $config['cur_tag_close'] = '&nbsp;&nbsp;</a></p>';
        $config['next_tag_open'] = '<p>';
        $config['next_tag_close'] = '</p>';
        $config['prev_tag_open'] = '<p>';
        $config['prev_tag_close'] = '</p>';
        $config['first_tag_open'] = '<p>';
        $config['first_tag_close'] = '</p>';
        $config['last_tag_open'] = '<p>';
        $config['last_tag_close'] = '</p>';
        $this->pagination->initialize($config);
    }

    private function _calculate_page_offset($page_nr) {
        $page_offset = 0;
        if (isset($page_nr) && $page_nr > 0) {
            $page_offset = $page_nr - 1;
        }
        $offset = $page_offset * MAX_ITEM_PAGINAGION;
        return $offset;
    }

    /**
     * Build link_rewrite for a post
     * @param type $post 
     */
    private function _build_link_rewrite($page, $post) {
        $category_id = $post->id_news_category;
        //TODO nen de quy de tim tat ca category cha
        $category = $this->category_model->read_by_id($category_id);
        $post->link_rewrite = $page->link_rewrite . '/' . $category->link_rewrite . '/' . $post->id_news . '-' . $post->link_rewrite . URL_TRAIL;
        return $post;
    }
    
    /**
     *Set meta data for page
     * @param type $post 
     */
    function _get_meta_data($post) {
        if (is_array($post)) {
            if (isset($post->title)) {
                $this->site_meta_data['title'] = $post['title'];
            } else if (isset($post->name)) {
                $this->site_meta_data['title'] = $post['name'];
            }
            $this->site_meta_data['meta_title'] = $post['meta_title'];
            $this->site_meta_data['meta_description'] = $post['meta_description'];
            $this->site_meta_data['meta_keywords'] = $post['meta_keywords'];
        } else {
            if (isset($post->title)) {
                $this->site_meta_data['title'] = $post->title;
            } else if (isset($post->name)) {
                $this->site_meta_data['title'] = $post->name;
            }
            $this->site_meta_data['meta_title'] = $post->meta_title;
            $this->site_meta_data['meta_description'] = $post->meta_description;
            if (isset($post->meta_keywords)) {
                $this->site_meta_data['meta_keywords'] = $post->meta_keywords;
            }
        }
    }
    private function _get_partners(){
        $this->load->model('Partner_model','partner_model');
        return $this->partner_model->read_list();
    }
    
    public function servicesDetail($url){
        $this->load->model('Services_model', 'services_model');

        $url = $this->uri->segment(2);
        $page = $this->services_model->getDetail($url);
        
        $this->_get_meta_data($page);
        $data['site_meta_data'] = $this->site_meta_data;


        $data['contact'] = $this->Mcontact->listcontact();
        $data['services'] = $page;
        $data['partners'] = $this->_get_partners();
        $data['banners'] = $this->banner_model->get_active_list();
        $data['home_advertises'] = $this->advertise_model->read_list_by_position(1);
        $data['latest_downloads'] = $this->get_latest_download();
        $data['download_menu'] = $this->download_category_model->read_by_parent_id(1);
        $this->load->view('universalView', $data);
    }
}

?>