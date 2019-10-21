<?php


include("bugManager.php");


$id=$_GET['id'];

$bugManager = new bugManager();
$bug = $bugManager->find($id);

//var_dump($bug);

?>﻿

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" >
<link rel="stylesheet" href="feuillestyle.css"/>

<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <title><?=$bug->getTitre();?></title>
  <meta charset="utf-8" />
</head>
<body>

  <h1>Bug </br><?=$bug->getTitre();?></h1>

  <div id="corps">

    <?=$bug->getDescription();?><br>

    <?php if ($bug->getStatut()==="0"){?>
      <div id="nt">non traiter</div>
    <?php }
    else{ ?>
      <div id="r">résolut</div>
    <?php } ?>

  </div>
  <form action="liste.php" method="">
  </br> <div id="bouton"><button type="submit" class="btn btn-success"><i class="fas fa-arrow-circle-left fa-5x"></i></button></div>
  </form>

</body>
</html>
