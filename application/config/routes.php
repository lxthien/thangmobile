<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "home";
$route['panel'] = 'admin/dashboard';
$route['panel/(:any)'] = 'admin/$1';
$route['panel/(:any)/(:any)'] = 'admin/$1/$2';
$route['panel/login'] = 'admin/auth/login';
$route['panel/logout'] = 'admin/auth/logout';
$route['panel/change-password'] = 'admin/auth/change_password';
$route['panel/forgot-password'] = 'admin/auth/forgot_password';
$route['admin/(:any)/([0-9]+)'] = 'admin/admin_news/$1/$2';
$route['contact/(:any)/([0-9]+)']='admin/contact/$1/$2';
//$route['panel/user'] = 'panel/auth';
//$route['panel/user/(:any)'] = 'panel/auth/$1';


$route['media/(:any)']                      = 'media/resize/$1';


$route['404_override'] = '';
$route['home'] = 'home/index';
//$route['tin-tuc/(:any)/(:num)-(:any)'] = 'news/index/$2';
$route['gioi-thieu.html'] = 'company_introduce/index/gioi-thieu-cong-ty';
$route['site-map.html'] = 'company_introduce/index/site-map';
$route['dich-vu-sua-dien-thoai-uy-tin-tai-ba-ria-vung-tau.html'] = 'company_introduce/index/dich-vu-sua-chua';
$route['che-do-bao-hanh.html'] = 'company_introduce/index/che-do-bao-hanh';
//$route['gioi-thieu/(:any)/(:any)/(:num)'] = 'company_introduce/load_pagination/$1/$2/$3';
//$route['gioi-thieu/(:any)/(:any)/(:num)-(:any).html'] = 'company_introduce/index/$1/$2/$3';
//$route['gioi-thieu/(:any)'] = 'company_introduce/index/$1';
//
$route['san-pham/(:any)/(:any)/(:num)-(:any)'] = 'product/view_details/$0/$1/$2/$3';
$route['san-pham/gia-tu-(:num)-trieu-den-(:num)-trieu'] = 'product/view_theo_khoang_gia/$0/$1';
$route['san-pham/duoi-(:num)-trieu'] = 'product/view_theo_khoang_gia/$0/$1';
$route['san-pham/tren-(:num)-trieu'] = 'product/view_theo_khoang_gia/$0/$1';
$route['san-pham/(:any)/(:any)'] = 'product/view_2nd_level_category/$0/$1/$2';
$route['san-pham/(:any)'] = 'product/view_1st_level_category/$0/$1';
//$route['san-pham/(:any)'] = 'product';


$route['tai-ve/(:any)/(:num)-(:any)'] = 'download/view_details/$0/$1/$2';
$route['tai-ve/(:any)'] = 'download/view_download_on_category/$0/$1';
$route['tai-ve'] = 'download';

$route['lien-he'] = 'contact/index';
$route['lien-he/(:any)'] = 'contact/$1';
$route['search/(:any)'] = 'search/index/$1';
$route['search'] = 'search/index';
$route['(:any)/(:any)/(:num)-(:any)'] = 'news/index/$0/$1/$2';

$route['tin-tuc/(:any)'] = 'news/view_post_on_category/$0/$1';
$route['dich-vu/(:any)'] = 'news/servicesDetail/$1';
//$route['(:any)/(:any)/(:num)'] = 'news/view_post_on_category/$0/$1';
// $route['(:any)'] = 'news/view_post_on_page/$0/1';
$route['(:any)'] = 'news/view_post_on_page/$0/1';


/* End of file routes.php */
/* Location: ./application/config/routes.php */