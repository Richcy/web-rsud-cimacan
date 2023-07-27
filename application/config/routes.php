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

// FE
// (:num) untuk id berbentuk number
// (:any) id selain number
$route['default_controller'] = 'home';
$route['^(en|id)'] = 'home/home/$1';

$route['superior-service.html'] = 'layanan_unggulan';
$route['superior-service-(:any).html'] = 'layanan_unggulan/detail/$1';

$route['profile.html'] = 'profil';
$route['profile-(:any).html'] = 'profil/detail/$1';

$route['sketch.html'] = 'denah';
$route['sketch-(:any).html'] = 'denah/detail/$1';

$route['quality-check.html'] = 'quality_check';

$route['structure.html'] = 'structure';
$route['^(en|id)/structure.html'] = 'structure/language/$1';

$route['directurs-greeting.html'] = 'directurs_greeting';
$route['^(en|id)/directurs-greeting.html'] = 'directurs_greeting/language/$1';

$route['outpatient-installation.html'] = 'instalasi_rawat_jalan';
$route['outpatient-installation-(:any).html'] = 'instalasi_rawat_jalan/detail/$1';

$route['inpatient-installation.html'] = 'instalasi_rawat_inap';
$route['inpatient-installation-(:any).html'] = 'instalasi_rawat_inap/detail/$1';

$route['igd.html'] = 'igd';
$route['igd-(:any).html'] = 'igd/detail/$1';

$route['laboratorium.html'] = 'laboratorium';
$route['laboratorium-(:any).html'] = 'laboratorium/detail/$1';

$route['medical-support.html'] = 'medical_support';
$route['medical-support-(:any).html'] = 'medical_support/detail/$1';

$route['radiology.html'] = 'radiologi';
$route['radiology-(:any).html'] = 'radiologi/detail/$1';

$route['hemodialisis.html'] = 'hemodialisis';

$route['farmasi.html'] = 'farmasi';

$route['medical-rehabilitation.html'] = 'rehab_medik';

$route['ambulance.html'] = 'ambulance';

$route['hak_kewajiban.html'] = 'hak_kewajiban';
$route['maklumat_pelayanan.html'] = 'maklumat_pelayanan';

$route['standard_pelayanan.html'] = 'standard_pelayanan';
$route['standard_pelayanan-(:any).html'] = 'standard_pelayanan/detail/$1';

$route['pengaduan.html'] = 'pengaduan';



// $route['doctor'] = 'doctor';
$route['doctor-(:num)-(:any).html'] = 'doctor/detail/$1/$2';
$route['doctor/(:num)'] = 'doctor/page/$1';

// $route['event'] = 'event';
$route['event-(:num)-(:any).html'] = 'event/detail/$1';
$route['event/(:num)'] = 'event/page/$1';

// $route['article'] = 'news';
$route['article-(:num)-(:any).html'] = 'article/detail/$1';
$route['article/(:num)'] = 'article/page/$1';

//cimanews
$route['cimanews-(:num)-(:any).html'] = 'cimanews/detail/$1';
$route['cimanews/(:num)'] = 'cimanews/page/$1';

$route['career-(:num)-(:any).html'] = 'career/detail/$1';
$route['career/(:num)'] = 'career/page/$1';

$route['contact.html'] = 'contact';

$route['login.html'] = 'login';
$route['register.html'] = 'login/register';
$route['actionregister'] = 'login/actionregister';
$route['verify-user'] = 'login/verify';
$route['forgot-password'] = 'login/forgot';

// SEO Section
$route['sitemap\.xml'] = 'Sitemapseo';
$route['google7e18bca591226ab8.html'] = 'searchconsole';
$route['robots.txt'] = 'robots';

// Admin Section
$route['administrator'] = 'administrator/login';
$route['administrator/login'] = 'administrator/login/loginAdmin';
$route['administrator/logout'] = 'administrator/login/logoutAdmin';

$route['404_override'] = 'redirect_home';
$route['translate_uri_dashes'] = FALSE;


