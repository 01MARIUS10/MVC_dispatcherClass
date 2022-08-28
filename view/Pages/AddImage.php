<?php 
  echo "<pre>";
  var_dump($_FILES["fileImage"]);
  echo "</pre>";
  // require_once(BASE_URL."/controller/Add/Image.php");
  $errorMessage="";
  $hide="";
  

  if(isset($_POST) && isset($_FILES)){
    $controller= new AddImage($_POST,$_FILES);
    $errorMessage=$controller->errorMessage;
    echo "ERROR : ".$errorMessage."<br>";
  }
  else{
    $errorMessage="ERROR request .....";
  }
  if($errorMessage==""){
    $hide="hidden";
  }
?>

<div class="newImage">
        <div class=" m-4 ">
          <h2 class="text-center pt-2">add new Image</h2>
          <form method="post"  action="" class="p-2 mb-2" enctype="multipart/form-data">
            <input type="hidden" name="MAX_FILE_SIZE" value="1500" />
            <div class="form-inline row">
              <div class="col-8">
                <select id="inputState" class="form-control w-100 mb-2" name="image_type">
                  <?php foreach ($image_type as $type) :?>
                    <option><?= $type->type_name ?></option>
                  <?php endforeach;?>
                </select>
              </div>
              <div class="col">
                <input type="file" name="fileImage" id="imageInput">
              </div>
              <div class="col">
                <input type="submit" class="btn btn-primary col mb-2" value="Envoyer le fichier" />
              </div>
            </div>
          </form>
          <div class="alert alert-danger" <?=$hide?> ><?= $errorMessage ?> </div>
        </div>
      </div>

      
<?php echo 'webroot= '.WEBROOT ?>