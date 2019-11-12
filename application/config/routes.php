<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'login';
$route['regis'] = 'regis';
$route['tudosen'] = 'tudosen';
$route['tumhs'] = 'tumhs';
$route['tukp'] = 'tukp';

// Pages
$route['register'] = 'pages/register';
$route['tu'] = 'pages/TUIndex';
$route['dosbing'] = 'pages/TUDosen';
$route['addDosbing'] = 'pages/TUDosen_add';
$route['mhs'] = 'pages/TUMhs';
$route['addMhs'] = 'pages/TUMhs_add';
$route['kerjapraktek'] = 'pages/TUkp';
$route['addKp'] = 'pages/TUkp_add';


$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
