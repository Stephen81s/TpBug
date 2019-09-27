<?php require ("conn.php") ?>
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

  <?php
  if(empty($_POST)){ ?>
    <form action="" method="post">

      <input type="text" name="titre" value = '' placeholder="Titre du bug"/>
      <input type="text" name="description" value = '' placeholder="Description du bug"/>
      <input type="hidden" name="statut" value ="0"/>
      <input type="hidden" name="id" value =""/>

      <input type="submit" value="Valider" />
    </form>
    <?php }
else{
    $bdd = connexionBdd();
  $req = $bdd->prepare('INSERT INTO bug (id,titre,description,statut) VALUE (:id,:titre,:description,:statut)');
  $req->execute (array( 'id'=>$_POST['id'],
                        'titre'=>$_POST['titre'],
                        'description'=>$_POST['description'],
                        'statut'=>$_POST['statut']));
  $req->closeCursor();
  echo '<meta http-equiv="refresh" content="0; URL=liste.php" />';
} ?>

  </body>
  </html>
