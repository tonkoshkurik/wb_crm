<?php
$host = 'http://' . $_SERVER['HTTP_HOST']; 
define('__HOST__', $host);
define('_MAIN_DOC_ROOT_', __DIR__);
define( 'DB_HOST', 'localhost' );
define( 'DB_USER', 'root' );
define( 'DB_PASS', 'jdhexfyty' );
define( 'DB_NAME', 'whiteboard' );
define( 'SEND_ERRORS_TO', '' );
define('UPLOAD_DIR', dirname(__FILE__).'/downloads');
//define( 'DISPLAY_DEBUG', false );
//define( 'SITENAME', '' );
define( 'ADMINEMAIL', 'sergiy.tonkoshkuryk@jointoit.com' );
date_default_timezone_set('Europe/Kiev');
