<?php
  class Db {
    private static $instance = NULL;

    private function __construct() {}

    private function __clone() {}

    public static function getInstance() {
      if (!isset(self::$instance)) {
        $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
        self::$instance = new PDO('mysql:host=us-cdbr-iron-east-05.cleardb.net;dbname=heroku_43d912ec9eab9c4', 'ba39226bd59afa', '69ccb870', $pdo_options);
      }
      return self::$instance;
    }
  }
?>