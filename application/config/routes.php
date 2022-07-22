<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['default_controller'] = 'home';
$route['login'] = "paneladmin/login";
$route['works'] = "product/index";
$route['works/(:any)'] = "product/detail/$1";
$route['about'] = "about/index";
$route['reviews'] = "reviews/index";
$route['services'] = "services/index";
$route['services/(:any)'] = "services/detail/$1";
$route['blogs'] = "blogs/index";
$route['blogs/(:any)'] = "blogs/detail/$1";
$route['404_override'] = 'Notfound';
$route['translate_uri_dashes'] = FALSE;
$route['petacrawl\.xml'] = "petacrawl";
