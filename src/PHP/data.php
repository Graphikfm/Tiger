<?php include_once 'connexiondb.php'  ?>

<?php

class Data extends database {
  private $sql;
  private $req;
  public $data;
  private $column;
  private $table;
  private $details;

  function __construct($column, $table, $details = null) {
    $this->column = $column;
    $this->table = $table;
    $this->details = $details;
  }


  public function getData() {
    database::__construct();
    $this->sql = "SELECT {$this->column} FROM {$this->table} {$this->details}";
    $this->req = $this->connexiondb->prepare($this->sql);
    $this->req->execute();
    $this->data = $this->req->fetchAll(PDO::FETCH_CLASS);

    if($this->req->rowCount() > 0) {
      $json = [];
      $json[$this->table] = [];
      foreach($this->data as $valueIndexCol) {
        $dataI = [];
        foreach($valueIndexCol as $key => $value) {
          $dataI[$key] = $value;
        }
        $json[$this->table][] = $dataI;
      }
      http_response_code(200);
      echo json_encode($json);
    } else echo json_encode(["error" =>"Il n'y a aucun utilisateur dans la base données"]);

  }

}
$datas = new Data('nom, prenom, date_naissance, morphologie, objectif, sexe, pseudo, email, mdp', 'utilisateurs');
$datas->getData();



?>