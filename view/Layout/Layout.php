<?php 
  $url= new Request();
  function debugChargingFile($url) : string {
    $i=0;
    $root="";
    for($i=0;$i<substr_count($url->url,"/")-1;$i++){
      $root=$root."../";
    }
    return $root;
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= debugChargingFile($url) ?>public/css/style.css">
    <link rel="stylesheet" href="<?= debugChargingFile($url) ?>public/css/bootstrap.css">
    <title>Document</title>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light p-2  bg-dark ">
        <a class=" navbar-brand jovo" href="#">JOVOBook</a>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link text-white" href="<?= BASE_URL?>/pages/view/post" >Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item ">
                <a class="nav-link text-white" href="<?= BASE_URL?>/pages/view/profil">Profil </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link text-white" href="<?= BASE_URL?>/pages/view/chat">Message </a>
            </li>
            <li <?= $isHidden?>>
              <select class=" nav-item text-white form-control form-control-sm bg-dark mt-1">
                <?php foreach ($post_type as $type) :?>
                  <option> <?=$type->type_name?> </option>
                <?php endforeach; ?>
              </select>
            </li>
            
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>

    <?=$Content_for_layout?>

</body>
</html>