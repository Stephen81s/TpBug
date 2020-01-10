<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" >

<link rel="stylesheet" href="feuillestyle.css"/>

<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <title>Ajout de bug</title>
  <meta charset="utf-8" />
</head>
<body>

  <h1>Ajout de bug</h1>

  <?php
  //var_dump($_POST);
  if(empty($_POST)){ ?>
    <form action="" method="post">

<div id="conteneur">
        <input class="Titre "type="text" name="titre" value = '' placeholder="Titre du bug"/></br></br>
        <textarea class="Description" type="textarea" cols="40" rows="5" name="description" value = '' placeholder="Description du bug"></textarea></br></br>



        <input type="submit" value="Valider" />
      </form>
</div>

<a class="btn btn-success" href="list"><i class="fas fa-arrow-circle-left fa-5x"></i></a>
  <?php }
   ?>

</body>
</html>
