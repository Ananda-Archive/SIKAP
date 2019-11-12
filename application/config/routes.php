<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'login';
$route['regis'] = 'regis';
$route['tudosen'] = 'tudosen';

// Pages
$route['register'] = 'pages/register';
$route['tu'] = 'pages/TUIndex';
$route['dosbing'] = 'pages/TUDosen';
$route['addDosbing'] = 'pages/TUDosen_add';


$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
