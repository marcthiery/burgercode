<?php

class Database {

  private static $dbHost = "localhost";
  private static $dbName = "burger_code";
  private static $dbUser = "root";
  private static $dbUserPassword = "root";
  private static $options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
  ];
  private static $connection = null;

  public static function connect() {
    try {
      self::$connection = new PDO("mysql:host=" . self::$dbHost ."; dbname=" . self::$dbName, self::$dbUser, self::$dbUserPassword, self::$options);
    
    }
    catch(PDOException $e) {
      die($e->getMessage());
    }
    return self::$connection;


  }

  public static function disconnect() {
    self::$connection = null;
  }
}

