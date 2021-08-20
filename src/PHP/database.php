<?php
class database {
  public $dbconnect;
  private $serveurname = 'chair.o2switch.net';
  private $dbname = 'szhf2149_tiger';
  private $username = 'szhf2149_tiger';
  private $password = 'Mw8OfnxGXUfa';

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
