<?php

include("bugManager.php");
$bugManager = new bugManager();
$bugManager->load();

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

  <div id="scroll" style="overflow:scroll; height:70%;">


  <table class="table">
    <caption><h3> Listes des bugs rencontrées</h3></caption>
    <thead>
      <tr>
        <th><h4>Id du bug</h4></th>
        <th>Titre du bug</th>
        <th>Description du bug</th>
        <th>Statut du bug</th>
        <th>Plus de détails</th>

      </tr>
    </thead>
    <tbody class="table-hover">
      <tr>
        <?php foreach($bugManager->getBug() as $bug){ ?>
          <tr>
            <td><?php echo $bug->getId();?></td>
            <td><?php echo $bug->getTitre();?></td>
            <td><?=$bug->getDescription();?> </td>
            <td><?=$bug->getStatut();

             if ($bug->getStatut()==0){?>
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
  <form action="addBug.php" method="">
  </br> <div id="bouton"><button type="submit" class="btn btn-success"><i class="fa fa-plus fa-5x "></i></button></div>
  </form>
</body>
</html>
