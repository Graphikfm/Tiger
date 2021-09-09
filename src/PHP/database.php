<?php
class database {
  public $dbconnect;
  private $serveurname = 'localhost';
  private $dbname = 'eracles';
  private $username = 'root';
  private $password = '';

  public function __construct() {
    try {
      $this->dbconnect = new PDO("mysql:host={$this->serveurname};dbname={$this->dbname}", $this->username, $this->password);
      $this->dbconnect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
      echo "Erreur !: " . $e->getMessage() . "<br/>";
    }
  }
}

?>
