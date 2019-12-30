<?php
  ini_set('display_errors', 1); 
  error_reporting(E_ALL);
  
  define('MAX_PATH', dirname(__FILE__));
  define('CORE_PATH', MAX_PATH . '/core/');

  require_once(CORE_PATH . 'init_variables.php');
  require_once(CORE_PATH . 'functions.php');
?>