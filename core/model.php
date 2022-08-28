<?php 
class Model{
    public $DB;
    public $pdo;
    public $table;
    public $filtre;
    private $fb="razafitsalamAM@#!()$0804011997";

    public function __construct($nomTable){
        $this->table = $nomTable ;

        $conf= new conf();
        $this->DB=$conf->getPDOvars();

        try{$this->pdo = new PDO ($this->DB["db_dns"],$this->DB["db_user"],$this->DB["db_password"]);}
        catch(PDOException $e){ echo 'erreur : '.$e->getMessage();die();}
        return $this->pdo;
    }

    public function find($tmp){
        $sql= $this->table::getSqlRequest($tmp);
        $prepare= $this->pdo->prepare($sql);
        $prepare->execute();
        return $prepare->fetchAll(PDO::FETCH_OBJ);
    }

    public function findAll($table){;
        $sql = "SELECT * FROM ".$table;
        $prepare= $this->pdo->prepare($sql);
        $prepare->execute();
        return $prepare->fetchAll(PDO::FETCH_OBJ);
    }

}
?>