<?php
namespace iepsanluis\config\config;

$url = 'http://localhost/iepsanluis/';

define('URL', $url);

define('URLADMIN', $url.'admin/');
define('URLESTUDIANTES', $url.'estudiantes/');
define('URLDOCENTES', $url.'docentes/');
define('URLMAIN', $url.'main/');

define('COMPANY', 'IEP San Luis');
define('HOST', 'localhost');
define('USER', 'jersson');
define('DB', 'katariDB');
define('PASSWORD', 'jersson');
define('CHATSET', 'utf8');

date_default_timezone_set('America/Lima');