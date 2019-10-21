<?php

include("bugManager.php");
$bugManager = new bugManager();
$bugs = $bugManager->findAll();

?>﻿

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" >
<link rel="stylesheet" href="feuillestyle.css"/>

<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <title>Liste des bugs</title>
  <meta charset="utf-8" />
</head>
<body>

  <h1>Liste des bugs</h1>
  <form action="addBug.php" method="">
  </br> <div id="bouton"><button type="submit" class="btn btn-success"><i class="fa fa-plus fa-5x "></i></button></div>
  </form>

  <div id="scroll" style="overflow:scroll; height:70%;">


  <table class="table">
    <caption><h3> Listes des bugs rencontrées</h3></caption>
    <thead>
      <tr>
        <th><h4>Id du bug</h4></th>
        <th>Titre du bug</th>
        <th>Description du bug</th>
        <th>Date de creation</th>
        <th>Statut du bug</th>
        <th>Plus de détails</th>

      </tr>
    </thead>
    <tbody class="table-hover">
      <tr>

        <?php foreach($bugs as $bug){ ?>
          <tr>
            <td><?php echo $bug->getId();?></td>
            <td><?php echo $bug->getTitre();?></td>
            <td><?=$bug->getDescription();?> </td>
            <td><?php echo $bug->getCreatedAt();?></td>
            <td><?php
             if ($bug->getStatut()=="0"){?>
              <div id="nt">non traiter</div>
            <?php }
            else{ ?>
              <div id="r">résolut</div>
            <?php } ?> </td>
            <td><a href="show.php?id=<?=$bug->getId()?>"><center><i class="fas fa-search fa-2x"></center></a></td>
          </tr>
        <?php } ?>
    </tr>
  </table></div>
  <!-- <form action="addBug.php" method="">
  </br> <div id="bouton"><button type="submit" class="btn btn-success"><i class="fa fa-plus fa-5x "></i></button></div>
  </form> -->
</body>
</html>
