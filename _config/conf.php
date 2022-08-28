<?php
class conf{
    public $DB_host = "localhost";
    public $DB_name = "JovoBook";
    public $DB_user = "MARIUS";
    public $DB_password = "marius";

    static $DB= array(
        "host" => "localhost",
        "name" => "JovoBook",
        "user" => "MARIUS",
        "password" => "marius"
    );
    public function getPDOvars(){
        $db=array(
        "db_dns" => "mysql:host=".$this->DB_host.";dbname=".$this->DB_name,
        "db_user" => $this->DB_user,
        "db_password" => $this->DB_password
        );
        return $db;
    }

}


?>