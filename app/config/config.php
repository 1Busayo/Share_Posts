<?php
//DB params
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','shareposts');

//APP ROOT
define ('APPROOT' ,  dirname(dirname( __FILE__)));
//URL Root http://localhost/phpthunder
define('URLROOT', 'http://'.$_SERVER['HTTP_HOST'].'/shareposts');
//Site Name
define('SITENAME', 'SharePosts');
//APP VERSION
define('APPVERSION', '1.0.0');
