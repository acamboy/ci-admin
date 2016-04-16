<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'home';
$route['404_override'] = 'error_404';
$route['pages/(:any)'] = 'pages/view/$1';
$route['admin/post'] = 'admin/post';