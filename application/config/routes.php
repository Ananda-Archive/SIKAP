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
$route['cdosbing'] = 'cdosbing';
$route['ckoor'] = 'ckoor';

//Mahasiswa
$route['cmhs'] = 'cmhs';

// ============================================================

// ======================== PAGES ========================

$route['register'] = 'pages/register';

//TU
$route['tu'] = 'pages/TUIndex';
$route['dosbing'] = 'pages/TUDosen';
$route['addDosbing'] = 'pages/TUDosen_add';
$route['updateMhs'] = 'pages/TUMhs_update';
$route['updateDosbing'] = 'pages/TUDosen_update';
$route['mhs'] = 'pages/TUMhs';
$route['addMhs'] = 'pages/TUMhs_add';
$route['kerjapraktek'] = 'pages/TUkp';
$route['addKp'] = 'pages/TUkp_add';

//Dosbing
$route['datadosbing'] = 'pages/ReadDosbing';
$route['indexkoordosbing'] = 'pages/KoorDosbingIndex';
$route['koordosbing'] = 'pages/UDosbing';

//Mahasiswa
$route['datamhsnone'] = 'pages/ReadMhs';
// $route['uploadfilemhs'] = 'pages/UploadFileMhs';
$route['nilaikpmhs'] = 'pages/NilaiKPMhs';
$route['datamhs'] = 'pages.ReadMhsDone';


// =======================================================

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
