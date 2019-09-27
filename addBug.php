
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
      

      <input type="submit" value="Valider" />
    </form>
    <?php }
else{
  require('bugManager.php');
  $manager = new bugManager();
  $manager->addBug($_POST);
  header("Location:liste.php");

} ?>

  </body>
  </html>
