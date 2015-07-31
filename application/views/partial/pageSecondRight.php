	 <!--ttin-->	
	 <div class="allboxsp1" style="float:left;">
        <?php        
        if (isset($page_second_right['single_post'])) {
            //Display selected post
            $data['news_item'] = $page_second_right['single_post'];
            
            if (isset($page_second_right['posts_same_category'])) {
                $data['posts_same_category'] = $page_second_right['posts_same_category'];
            }
            @$data['category'] = $page_second_right['category'];
            $this->load->view('partial/news_detail', $data);
        } else if (isset($show_all_news) && $show_all_news == 'true') {
            //Display posts in selected category
            $data = array();
            $this->load->view('partial/display_all_category_news', $data);
        //} else if (isset($page_second_right['selected_company_category_newses'])) {
        } else if (isset($show_category_news) && $show_category_news == 'true') {
            //Display posts in selected category
            $data = array();
            $this->load->view('partial/display_category_news', $data);
        } else if (isset($page_second_right['company_category_newses'])) {
            //Display list of category and latest post for each
            $data = array();
            $data['company_category_newses'] = $page_second_right['company_category_newses'];
            $this->load->view('partial/company_category_newses', $data);
        } else if(isset($services)){
            $this->load->view('partial/services_page', $data);
        }
//         else if (isset($page_second_right['gallery_categories'])) {
//             $data = array();
// //            var_dump($page_second_right['galleries'])
//             if (isset($page_second_right['gallery_categories'])) {
//                 $data['gallery_categories'] = $page_second_right['gallery_categories'];
//             }

//             if (isset($page_second_right['galleries'])) {
//                 $data['galleries'] = $page_second_right['galleries'];
//             }            
//             if (isset($page_second_right['selected_album'])) {
//                 $data['gallery'] = $page_second_right['selected_album'];                
//                 $this->load->view('partial/page_gallery_display', $data);
//             } else {
//                 $this->load->view('partial/page_gallery_list_display', $data);
//             }
//         } 
//         else if (isset($page_second_right['selected_album'])) {
            
//         }
        ?>        

    </div>   

	    