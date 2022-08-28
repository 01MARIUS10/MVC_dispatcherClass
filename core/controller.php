<?php
class Controller{

    public $request;
    public $BindingValue = array();
    public $allPages ;
        

    function __construct($request){
        $this->request=$request;
        $this->allPages = scandir(VIEW.DIRECTORY_SEPARATOR.ucfirst($this->request->controller));
    }

    //charge le model du $name(request->param[0])
    function loadmodel($nameModel){
        $fileModel = MODEL.DIRECTORY_SEPARATOR.$nameModel.".php";
        $allModel= scandir(MODEL);

        if(in_array($nameModel.".php",$allModel)){
            require_once $fileModel;
            return new $nameModel($nameModel);
        }
        else{
            require_once CONTROLLER.DIRECTORY_SEPARATOR."ErrorController.php";
            ErrorController::ErrorModel($nameModel);
            die();
        }
    }
    function setVars($key,$value){
        if(is_array($key)){
            $this->BindingValue +=$key;
        }
        else{
            $this->BindingValue[$key] = $value;
        }
    }
    function render($view){
        $view_controller = ucfirst($this->request->controller);
        $viewfile = VIEW.DIRECTORY_SEPARATOR.$view_controller.DIRECTORY_SEPARATOR.$view.".php";
        
        extract($this->BindingValue);

        ob_start();
        require $viewfile;
        $Content_for_layout = ob_get_clean();
        
        require_once VIEW.DIRECTORY_SEPARATOR."Layout".DIRECTORY_SEPARATOR."Layout.php";
    }
    
}
?>