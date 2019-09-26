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
</body>
</html>
