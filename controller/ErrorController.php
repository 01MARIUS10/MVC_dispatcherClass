<?php
class ErrorController extends Controller{

    function ErrorPage($Errorview){
        header("HTTP/1.0 404 Not Found");
        $errorMessage = " Pages ".$Errorview." not found";
        $viewErrorfile = VIEW.DIRECTORY_SEPARATOR."Error".DIRECTORY_SEPARATOR."errorLayout.php";
        require_once $viewErrorfile;
    }

    function ErrorMethod($Errorview){
        header("HTTP/1.0 404 Not Found");
        $errorMessage = "Method ".$Errorview[0]." not found";
        $viewErrorfile = VIEW.DIRECTORY_SEPARATOR."Error".DIRECTORY_SEPARATOR."errorLayout.php";
        require_once $viewErrorfile;
    }
    
    static function ErrorModel($Errorview){
        header("HTTP/1.0 404 Not Found");
        $errorMessage = " Model ".$Errorview." not found";
        $viewErrorfile = VIEW.DIRECTORY_SEPARATOR."Error".DIRECTORY_SEPARATOR."errorLayout.php";
        require_once $viewErrorfile;
    }
}