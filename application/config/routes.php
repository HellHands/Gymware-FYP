<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller']   = 'main';
$route['404_override']         = '';
$route['translate_uri_dashes'] = TRUE;
$route['login']                = 'Login/index';
$route['verifylogin']		   = 'VerifyLogin/index';

$route['pricing']              = 'main/pricing';
$route['contact']              = 'main/contact';
$route['features']             = 'main/features';
$route['how-it-works']         = 'main/howitworks';
$route['register']             = 'Register/index';
