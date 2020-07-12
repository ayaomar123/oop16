<?php

class Dbh {
  private $host = "localhost";
  private $user = "root";
  private $pwd = "";
  private $dbName = "oppphp16";

  protected function connect(){
  //  $db = new PDO('mysql:host=localhost;root', 'test', '');

    $dsn = 'mysql:host=' . $this->host . ';dbName=' . $this->dbName;
    $pdo = new PDO($dsn,  $this->user,  $this-> pwd);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $pdo;
  }
}
