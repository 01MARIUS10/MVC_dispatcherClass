<?php
// echo "<br><b> constant.php  debut</b> <br>";
    /*
    /les variables 
    */

    //path jusque a webroot
    define("WEBROOT",dirname(__file__));

    //path du racine du projet
    define("ROOT",dirname(WEBROOT));
    define("BASE_URL",dirname(dirname($_SERVER['SCRIPT_NAME'])));

    define("PUBLIC",ROOT.DIRECTORY_SEPARATOR."public");
    define("CORE",ROOT.DIRECTORY_SEPARATOR."core");
    define("CONTROLLER",ROOT.DIRECTORY_SEPARATOR."controller");
    define("MODEL",ROOT.DIRECTORY_SEPARATOR."model");
    define("VIEW",ROOT.DIRECTORY_SEPARATOR."view");

    // echo "<br><b> constant.php  fin </b> <br><br>";
?>  