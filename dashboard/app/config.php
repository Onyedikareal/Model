<?php
define('DATABASE_HOST', 'localhost');
define('DATABASE_USER', 'root');
define('DATABASE_NAME', 'model');
define('DATABASE_CODE', 'root');
define('BASE_URL', 'http://localhost:8888/model/dashboard/');
define('PORT', '8888');

  /* Admin credentials and access level */
  $loginArray = array(
    array('superuser', 'qwert'),
    array('admin', 'admin'),
    array('developer', 'trewq')
  );

  $superuserusername = $loginArray[0][0];
  $superuserpassword = $loginArray[0][1];
  $adminusername = $loginArray[1][0];
  $adminpassword = $loginArray[1][1];
  $developerusername = $loginArray[2][0];
  $developerpassword = $loginArray[2][1];

  $sitename = "Ediye";
?>
