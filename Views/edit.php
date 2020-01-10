<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" >

<link rel="stylesheet" href="feuillestyle.css"/>

<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <title>Edition de bug</title>
  <meta charset="utf-8" />
</head>
<body>

  <h1>Edition de bug</h1>

  <?php
  //$bug = $params['bug'];
  if(empty($_POST)){ ?>
    <form action="" method="post">

<div id="conteneur">
        <input class="Id "type="text" name="id" value = "" placeholder="<?= $bug->getId()?>"/></br></br>
        <input class="Titre "type="text" name="titre" value = "" placeholder="<?= $bug->getTitre()?>"/></br></br>
        <textarea class="Description" type="textarea" cols="40" rows="5" name="description" value = '' placeholder="<?= $bug->getDescription()?>"></textarea></br></br>
        <input class="Date de creation" name="date de creation" value = '' placeholder="<?= $bug->getCreatedAt()?>"></br></br>


        <input type="submit" value="Valider" />
      </form>
</div>

<a class="btn btn-success" href="list"><i class="fas fa-arrow-circle-left fa-5x"></i></a>
  <?php }
   ?>

</body>
</html>
