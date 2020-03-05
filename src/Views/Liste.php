<?php
use BugApp\Models\BugManager;
//include("./Models/bugManager.php");
$bugManager = new BugManager();

$bugs = $bugManager->findAll();

?>﻿

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" >
<link rel="stylesheet" href="feuillestyle.css"/>

<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <title>Liste des bugs out</title>
  <meta charset="utf-8" />
</head>
<body>

  <h1>Liste des bugs</h1>

  <a class="btn btn-success" href="add"><i class="fa fa-plus fa-5x "></i></a>
  <div id="scroll">



  <table class="table">
    <caption><h3> Listes des bugs rencontrées</h3><form method="POST" action="checkbox.php">
        <input id = "checkbox" type="checkbox" name="choix[]" value="1" > liste des bug non resolu<br>
    </form></caption>
    <thead>
      <tr>
        <th><h4>Id du bug</h4></th>
        <th>Titre du bug</th>
        <th>Description du bug</th>
        <th>Date de creation</th>
        <th>Statut du bug</th>
        <th>Plus de détails</th>
        <th>Edit</th>

      </tr>
    </thead>
    <tbody class="table-hover">
      <tr>

        <?php foreach($bugs as $bug){ ?>
          <tr>
            <td><?php echo $bug->getId();?></td>
            <td><?php $apercu_titre = substr($bug->getTitre(),0,10);echo $apercu_titre. " ..."?></td>
            <td><?php $apercu_description = substr($bug->getDescription(),0,50);echo $apercu_description . " ..."?> </td>
            <td><?php echo $bug->getCreatedAt();?></td>
            <td><?php
             if ($bug->getStatut()=="0"){?>
              <div class="nt">non traiter</div>
            <?php }
            else{ ?>
              <div class="r">résolu</div>
            <?php } ?> </td>
            <td><a href="show/<?=$bug->getId()?>"><center><i class="fas fa-search fa-2x"></center></a></td>
              <td><a href="edit/<?=$bug->getId()?>"><center><i class="fas fa-edit fa-2x"></center></a></td>
          </tr>
        <?php } ?>
    </tr>
  </table></div>

</body>
<!-- <script type="text/javascript" src ="app.js"></script> -->
</html>
