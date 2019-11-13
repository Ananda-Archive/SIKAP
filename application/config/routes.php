<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'login';
$route['regis'] = 'regis';

// ======================== CONTROLLER ========================

//TU
$route['tudosen'] = 'tudosen';
$route['tumhs'] = 'tumhs';
$route['tukp'] = 'tukp';

//Dosbing
$route['dosbing'] = 'cdosbing';
$route['koor'] = 'ckoor';

//Mahasiswa


// ============================================================

// ======================== PAGES ========================

$route['register'] = 'pages/register';

//TU
$route['tu'] = 'pages/TUIndex';
$route['dosbing'] = 'pages/TUDosen';
$route['addDosbing'] = 'pages/TUDosen_add';
$route['mhs'] = 'pages/TUMhs';
$route['addMhs'] = 'pages/TUMhs_add';
$route['kerjapraktek'] = 'pages/TUkp';
$route['addKp'] = 'pages/TUkp_add';

//Dosbing
$route['datadosbing'] = 'pages/ReadDosbing';
$route['indexkoordosbing'] = 'pages/KoorDosbingIndex';
$route['koordosbing'] = 'pages/UDosbing';

//Mahasiswa


// =======================================================

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
