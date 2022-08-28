<?php
class PagesController extends Controller{
    
    function view($Params){
        // pour le param[0]
        if(empty($Params)){
            $Params[0]="Post";
        }
        
        //passage de notation params() en variable model et parametre
        $theModel= ucfirst($Params[0]);
        $theParam = isset($Params[1]) ? $Params[1]:"";

        //charger le model du request
        $this->$theModel= $this->loadmodel($theModel);
        //charge le donnes coorespondantes au model selon le theParam du request
        $datas = $this->$theModel->find($theParam);

        //take the layout "post_type"
        $post_type= $this->$theModel->findAll("post_type");
        $hidden_postType= $theModel==="Post" ? "":"hidden";

        if(empty($datas)){
            echo "data vide!";
        }
        $this->setVars("isHidden",$hidden_postType);
        $this->setVars($theModel,$datas);
        $this->setVars("post_type",$post_type);


        $this->render($theModel); 
    }
    function Add($Params){
        // pour le param[0]
        if(!empty($Params)){
            //passage de notation params() en variable model et parametre
            $AddModel= ucfirst($Params[0]);

            //charger le model du request
            $this->$AddModel= $this->loadmodel($AddModel);

            //take the layout "post_type"
            $post_type= $this->$AddModel->findAll("Post_type");
            $image_type= $this->$AddModel->findAll("Image_type");
            $hidden_postType="hidden";

            $this->setVars("isHidden",$hidden_postType);
            $this->setVars("post_type",$post_type);
            $this->setVars("image_type",$image_type);

            $a = CONTROLLER.DIRECTORY_SEPARATOR."Add".DIRECTORY_SEPARATOR.$AddModel.".php";
            require_once($a);
            //  require_once CONTROLLER."\/Add/".$AddModel.".php";
            $this->render("Add".$AddModel); 
        }
        else{
            require_once CONTROLLER.DIRECTORY_SEPARATOR."ErrorController.php";
            ErrorController::ErrorModel($nameModel);
            die();
        }
        
    }

} 
?>