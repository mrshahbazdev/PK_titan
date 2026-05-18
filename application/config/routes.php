<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'home';
$route['customerservicelist/get_user_data/(:num)'] = 'customerservicelist/get_user_data/$1';
$route['member/orderReset/(:num)'] = 'member/orderReset/$1';
$route['member/reset/(:num)'] = 'member/reset/$1';
$route['mall/malldelete/(:num)'] = 'mall/malldelete/$1';
$route['mall/get_mall_data/(:num)'] = 'mall/get_mall_data/$1';
$route['mall/get_bulletin_data/(:num)'] = 'mall/get_bulletin_data/$1';
$route['mall/get_category_data/(:num)'] = 'mall/get_category_data/$1';
$route['mall/get_product_data/(:num)'] = 'mall/get_product_data/$1';
$route['systems/get_role_data/(:num)'] = 'systems/get_role_data/$1';
$route['systems/get_users_data/(:num)'] = 'systems/get_users_data/$1';
$route['systems/changeStatusUser/(:num)'] = 'systems/changeStatusUser/$1';
$route['member/bankdetail/(:num)'] = 'member/bankdetail/$1';
$route['systems/get_support_data/(:num)'] = 'systems/get_support_data/$1';
$route['member/get_member_list/(:num)'] = 'member/get_member_list/$1';
$route['member/get_grade_data/(:num)'] = 'member/get_grade_data/$1';
$route['member/bankdetail/(:num)'] = 'member/bankdetail/$1';
$route['member/depositMoney/(:num)'] = 'member/depositMoney/$1';
$route['member/changeStatusUser/(:num)'] = 'member/changeStatusUser/$1';
$route['custormerservicelist/changeStatus/(:any)'] = 'custormerservicelist/changeStatus/$1';


$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
