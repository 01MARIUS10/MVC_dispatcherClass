<?php
class Dispatcher{
    public $request;
    
    function __construct(){

        $this->request= new Request();
        // print_r($this->request) ;
        Router::parse($this->request->url,$this->request);
        
        //charge le controller du request 
        $controller = $this->loadController();
        
        //verifier si la methode du request existe   
        $allmethod = get_class_methods($controller);
        $parentmethod = get_class_methods(get_parent_class($controller));
        $method = array_diff($allmethod,$parentmethod);
        
        
        if(!in_array($this->request->action,$method)){
            //methode vide , afficher la page 404(methode) ,ErrorController->ErrorMethod
            $this->request->setUrl("Error","ErrorMethod",$this->request->action);
            Router::parse($this->request->url,$this->request);
            $controller = $this->loadController();
        }
        // echo "<br><b>bindingValue :</b>    <pre>";
        // print_r($this->request);
        // echo "</pre><b>fin bindingValue</b><br>";

        call_user_func_array(array($controller,$this->request->action),array($this->request->params));
    }

    //retourne soit le controler classic ,soit le ErrorController 
    private function loadController(){
        $allController = scandir(CONTROLLER);
        $nameController = ucfirst($this->request->controller)."Controller";

        if(!in_array($nameController.".php",$allController) && ($this->request->controller!=="")){
            //controller inexistant , charge le ErrorController
            $this->request->setUrl("Error","ErrorPage",$this->request->controller);
            Router::parse($this->request->url,$this->request);
            $nameController=ucfirst($this->request->controller)."Controller";
        }
        if($this->request->controller===""){
            //dossier root ,on affiche quand meme xD [Controller Pages->view($post)]
            $this->request->setUrl("Pages","view");
            Router::parse($this->request->url,$this->request);
            $nameController=ucfirst($this->request->controller)."Controller";
        }
        $fileController = CONTROLLER.DIRECTORY_SEPARATOR.$nameController.".php";
        require $fileController;
        return new $nameController( $this->request);
    }
}


?>