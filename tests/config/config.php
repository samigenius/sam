<?php
// user config
session_start();
error_reporting(E_ALL ^ E_NOTICE);
define("DB_SERVER", "localhost");

define("DB_DATABASE", "test");
define("DB_USERNAME", "root");
define("DB_PASSWORD", "");





//change post data
foreach ($_POST as $key => $value) {
    if(!is_array($value)){
      $_POST[$key] = htmlspecialchars($value, ENT_QUOTES);
    }
}
?>