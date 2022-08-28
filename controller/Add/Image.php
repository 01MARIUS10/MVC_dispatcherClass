<?php
class AddImage extends Controller {
    public $succes;
    public $maxSize;
    public $type;
    public $errorMessage="";

    public $file_name;
    public $file_type;
    public $file_size;
    public $file_tmp_name;

    public function __construct($post,$file)
    {
        $this->succes=false;
        if(isset($post["MAX_FILE_SIZE"])){
            $this->maxSize = $post["MAX_FILE_SIZE"];
        }
        if(isset($post["image_type"])){
            $this->type = $post["image_type"];
        }

        if($file["fileImage"]["error"]!==0){
            $this->errorMessage .= "Erreur du fichier ,reesayer .....";
        }
        else if($file["fileImage"]["size"]>$this->maxSize){
            $this->errorMessage .= "fichier trop volumineux, reesayer.....";
        }
        if($this->errorMessage===""){
            $this->file_name = $file["fileImage"]["name"];
            $this->file_type = $file["fileImage"]["type"];
            $this->file_tmp_name = $file["fileImage"]["tmp_name"];
            $this->file_size = $file["fileImage"]["size"] ;
            $this->debogage();
        }
        
    }
    public function debogage():void{
        
        echo "<br>filename = ".$this->file_name;
        echo "<br>filetype = ".$this->file_type;
        echo "<br>filesize = ".$this->file_tmp_name;
        echo "<br>filesize = ".$this->file_size;
        echo "<br>";
    }
}
?>

