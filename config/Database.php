<?php
/*
   Developer : Surendra Gupta
   Date : 13-JAN-2020
   OBJECTIVE : DATABASE CONNECTION
*/
  class Database {
    private static $instance = NULL;

    private function __construct() {}

    private function __clone() {}

    public static function getInstance() {
      if (!isset(self::$instance)) {
        $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
        self::$instance = new PDO('mysql:host=localhost;dbname=testflip', 'root', '', $pdo_options);
      }
      return self::$instance;
    }
  }
?>