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

  <?php
  if(empty($_POST)){ ?>
    <form action="" method="post">

<div id="conteneur">
        <input class="Titre "type="text" name="titre" value = '' placeholder="Titre du bug"/></br></br>
        <textarea class="Description" type="textarea" cols="40" rows="5" name="description" value = '' placeholder="Description du bug"></textarea></br></br>



        <input type="submit" value="Valider" />
      </form>
</div>

<form action="liste.php" method="">
</br> <div id="bouton"><button type="submit" class="btn btn-success"><i class="fas fa-arrow-circle-left fa-5x"></i></button></div>
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
