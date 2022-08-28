<?php
// echo "<br><b> request.php  debut</b> <br>";

class Request{
    public $url;

    function __construct(){
        $this->url = $_SERVER["PATH_INFO"];
        return $this->url;
    }
    function setUrl($controller,$action,$params=""){
        $this->url="/".$controller."/".$action."/".$params;
    }
}

?>