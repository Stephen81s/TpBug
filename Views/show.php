<?php


//include("./Models/bugManager.php");



$bug = $params['bug'];
//$bug = $bugManager->find($id);

//var_dump($bug);

?>﻿

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" >
<link rel="stylesheet" href="../feuillestyle.css"/>

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
<!-- <button type="submit" >Envoyer le message</button> -->
      <!-- <div id="nt">non traiter</div> -->
      <button type="submit" ><div id="nt">non traiter</div></button>
    <?php }
    else{ ?>
      <!-- <div id="r">résolut</div> -->
        <button type="submit" ><div id="r">résolut</div></button>
    <?php } ?>

  </div>

<a class="btn btn-success" href="../list"><i class="fas fa-arrow-circle-left fa-5x"></i></a>
</body>
<script type="text/javascript" src ="app.js"></script>
</html>
