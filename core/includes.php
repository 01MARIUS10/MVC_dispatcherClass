<?php
    require_once "user.php";
    require_once "constant.php";
    require_once ROOT.DIRECTORY_SEPARATOR."_config".DIRECTORY_SEPARATOR."conf.php";
    require_once "request.php";
    require_once "router.php";
    require_once "controller.php";
    require_once "model.php";
    require_once "dispatcher.php";
    new Dispatcher();
?>