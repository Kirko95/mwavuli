<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'pages/view';
$route['(:any)'] = 'pages/view/$1';
$route['products/(:any)'] = 'products/view/$1';
$route['products/pension/(:any)'] = 'products/pension/$1';
$route['search'] = 'products/search';
$route['subscribe'] = 'pages/subscribe';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
