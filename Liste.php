<?php

    include("bugManager.php");
    $bugManager = new bugManager();
    $bugManager->load();

?>﻿


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

<!-- -------------------------------- -->
<table class="table-fill">
<thead>
<tr>
<th class="text-left">Id</th>
<th class="text-left">Titre</th>
<th class="text-left">Description</th>
<th class="text-left">Action</th>


</tr>
</thead>
<tbody class="table-hover">
<tr>

      <?php

            foreach($bugManager->getBug() as $bug){ ?>
             <tr><td><?php
            echo $bug->getId();?></td>
                <td><?php echo $bug->getTitre();?>

                </td>
                <td><a href="show.php?id=<?=$bug->getId()?>">voir plus</a></td>
                <td> </td>
            </tr>

                <?php


            }
           ?>
</tr>


</table>
<!-- -------------------------------------------------------- -->


<ul>

    <?php foreach($bugManager->getBug() as $bug){ ?>
      <a href="show.php?id=<?=$bug->getId();?>">
        <li>Id du bug &nbsp:&nbsp <?=$bug->getId();?>&nbsp&nbsp
           Titre du bug &nbsp:&nbsp<?= $bug->gettitre();?>&nbsp&nbsp
           <!-- Descrption du bug &nbsp:&nbsp<?=$bug->getDescription();?>&nbsp&nbsp -->
           <!-- Statut du bug&nbsp:&nbsp<?=$bug->getstatut();?> -->
       </li>
     </a>

    <?php } ?>
</ul>


     <form action="addBug.php" method="post">
       <input type="submit" value="Ajouter un bug" />
     </form>
</body>
</html>
