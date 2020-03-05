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
<title>show des bugs out</title>
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

      <a id="trigger" class="nt" onclick="makeRequest(<?= $bug->getId() ?>)">non traiter</a>
    <?php }
    else{ ?>
        <span id="r" class="r">résolu</span>
    <?php } ?>

  </div>

<a class="btn btn-success" href="../list"><i class="fas fa-arrow-circle-left fa-5x"></i></a>
</body>
<script type="text/javascript" src ="../Resources/app.js"></script>

</html>
