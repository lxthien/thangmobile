<?php
/**
 * @name		CodeIgniter Advanced Images
 * @author		Jens Segers
 * @link		http://www.jenssegers.be
 * @license		MIT License Copyright (c) 2012 Jens Segers
 * 
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 * 
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 * 
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */

/**
 * Image
 *
 * Generates a modified image source to work with the advanced images controller
 *
 * @access	public
 * @param	mixed
 * @return	string
 */
if (!function_exists('image')) {
    function image($image_path, $preset,$noimage = "") {
        $ci = &get_instance();
        
        // load the allowed image presets
        if($image_path == "")
        {
            if($noimage == "")
            {
                $image_path = 'assets/images/hinh-dai-dien-2.png';
            }
            else
            {
                if($noimage == "logo")
                {
                    $image_path = 'assets/images/hinh-dai-dien-2.png';
                }
                else
                {
                    $image_path = $noimage;
                }
            }
                
        }
        $ci->load->config("images");
        $sizes = $ci->config->item("image_sizes");
        
        $pathinfo = pathinfo($image_path);
        $new_path = $image_path;
        // check if requested preset exists
        if (isset($sizes[$preset]) ) {
            $new_path = base_url().'media/'.$pathinfo["dirname"] . "/" . $pathinfo["filename"] . "-crop-" . implode("x", $sizes[$preset]) . "." . $pathinfo["extension"];
        }
        
        return $new_path;
    }
}


function getCategory($id) {
    $ci = &get_instance();

    $ci->load->model('News_category_model', 'category_model');
    $category = $ci->category_model->read_by_id($id);

    return $category->link_rewrite;
}

function getCustomerName($customerID) {
    $ci = & get_instance();
    $ci->load->model('customer_model', 'customer_model');
    $customer = $ci->customer_model->read_by_id($customerID);
    if (!isset($customer) && !$customer) {
        return;
    } else {
        return $customer->name;
    }
}

function getCustomerPhone($customerID) {
    $ci = & get_instance();
    $ci->load->model('customer_model', 'customer_model');
    $customer = $ci->customer_model->read_by_id($customerID);
    if (!isset($customer) && !$customer) {
        return;
    } else {
        return $customer->phone;
    }
}

function customerRequest ($customerID) {
    $ci = & get_instance();
    $ci->load->model('task_model', 'task_model');
    $customer = $ci->task_model->countRequest($customerID);
    return $customer;
}

function countPriceCustomerRequest ($customerID) {
    $ci = & get_instance();
    $ci->load->model('task_model', 'task_model');
    $customer = $ci->task_model->countPriceCustomerRequest($customerID);
    return $customer;
}

function formatTime($time, $created = false) {
    if($time == "" || $time == "0000-00-00 00:00:00") return "";
    $date = new DateTime($time, new DateTimeZone('Asia/Ho_Chi_Minh'));
    if($created && date_default_timezone_get() == "Asia/Ho_Chi_Minh") {
        $date->add(new DateInterval("PT420M"));
    }
    return $date->format('d/m/Y H:i:s');
}

function formatDate($time) {
    if($time == "" || $time == "0000-00-00 00:00:00") return "";
    $date = new DateTime($time);
    return $date->format('d/m/Y');
}

function formatTimeInForm($time) {
    if($time == "") return "";
    $date = new DateTime($time);
    return $date->format('Y-m-d');
}

function formatTimeInForm2($time) {
    if($time == "") return "";
    $date = new DateTime($time);
    return $date->format('h:i A');
}

function lastDoing($customerID) {
    $ci = & get_instance();
    $ci->load->model('task_model', 'task_model');
    $lastDoing = $ci->task_model->customerRequest($customerID);
    if(count($lastDoing) > 0) {
        return $lastDoing[0]->phoneType;
    }
    return "";
}