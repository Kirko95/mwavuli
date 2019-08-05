<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'pages/view';
$route['(:any)'] = 'pages/view/$1';
$route['products/(:any)'] = 'products/view/$1';
$route['products/pension/(:any)'] = 'products/pension/$1';
<<<<<<< HEAD
$route['search'] = 'products/search';
$route['subscribe'] = 'pages/subscribe';
=======
>>>>>>> 4635bf7af6aef90ba6c194c63a6f92b4e5a3f688
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
