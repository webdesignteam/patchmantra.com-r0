<?php
defined('BASEPATH') OR exit('No direct script access allowed');
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
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'Home';
$route['success/(:any)'] = 'Home/success';
$route['unsubscribe/(:any)' ]      = 'Home/unsubscribe';
$route['success/(:any)/(:any)'] = 'Home/success';
$route['successzoho'] = 'Home/successzoho';
$route['contact-us' ]      = 'Home/contact_us_zoho';
// $route['contact-us-zoho' ]      = 'Home/contact_us_zoho';
$route['about-us' ]      = 'Home/about_us';
$route['why-patches' ]      = 'Home/why_patches';
$route['explore-our-patches' ]      = 'Home/explore_patches';
$route['nitof-nicotine-patches' ]      = 'Home/nitof_product';
$route['nitof-21-mg-nicotine-patch' ]      = 'Home/nitof_product_21';
$route['nitof-14-mg-nicotine-patch' ]      = 'Home/nitof_product_14';
$route['nitof-7-mg-nicotine-patch' ]      = 'Home/nitof_product_7';
$route['hetriva' ]      = 'Home/hetriva_product';
$route['hetriva-27-patch' ]      = 'Home/hetriva_product_27';
$route['hetriva-18-patch' ]      = 'Home/hetriva_product_18';
$route['hetriva-9-patch' ]      = 'Home/hetriva_product_9';
$route['k-plast' ]      = 'Home/k_plast_product';
$route['k-plast-patch' ]      = 'Home/k_plase_product_details';
$route['trans-d' ]      = 'Home/trans_d_product';
$route['trans-d-100-patch' ]      = 'Home/trans_d_product_100';
$route['trans-d-200-patch' ]      = 'Home/trans_d_product_200';
$route['blog' ]      = 'Home/blog';
$route['faqs' ]      = 'Home/faqs';
$route['terms-of-use' ]      = 'Home/terms_of_use';
$route['privacy-policy' ]      = 'Home/privacy_policy';
$route['mantrabot' ]      = 'Home/mantrabot';
// $route['blog/what-is-patch-therapy-a-complete-beginners-guide-to-transdermal-patches' ]      = 'Home/What_is_Patch_Therapy';
// $route['blog/every-cigarette-counts-smoking-risks-quitting-guide' ]      = 'Home/every_cigarette_counts_smoking_risks_quitting_guide';
// $route['blog/transdermal-patches-vs-pills-for-pain-relief' ]      = 'Home/transdermal_patches_vs_pills_for_pain_relief';

$route['404_override'] = 'error';
$route['404_override'] = 'my404';
$route['translate_uri_dashes'] = FALSE;
require_once(BASEPATH .'database/DB'. EXT);
$db =& DB();
$query = $db->get('app_routes');
//$query = $db->query("SELECT * FROM `domains_app_routes` WHERE `domain_id` = 25");
$result = $query->result();
// echo"<pre>";print_r($result);exit;
foreach( $result as $row )
{
    $route[ '(?i)'.$row->slug ]                 = $row->controller;
    $route[ '(?i)'.$row->slug.'/:any' ]         = $row->controller;
    // $route[ $row->controller ]           = 'my404';
    // $route[ $row->controller.'/:any' ]   = 'my404';
}
$route['translate_uri_dashes'] = TRUE;