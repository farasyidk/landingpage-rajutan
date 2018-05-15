<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['login'] = 'Login';
$route['Rajutan'] = 'Rajutan/index';
$route['Rajutan/pagination/(:any)'] = 'Rajutan/pagination/$1';
$route['admin'] = 'Admin/index';
$route['admin/(:any)'] = 'Admin/index/$1';
$route['admin/create'] = 'admin/create';

$route['default_controller'] = 'Rajutan';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
