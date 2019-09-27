<?php

    include("bug.php");

    $id=$_GET['id'];
    $bug = new bug("","","","");
    $bug->load($id);
    //var_dump($bug);

?>﻿


<link rel="stylesheet" href="feuillestyle.css"/>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Bug <?=$bug->getTitre();?></title>
	<meta charset="utf-8" />
</head>
<body>

   <h1>Bug <?=$bug->getTitre();?></h1>
<div id="corps">
<?=$bug->getDescription();?><br>

<?php
if ($bug->getStatut()==0){
  echo"non traiter";
}
else{echo "résolut";}
?>
</div>
</body>
</html>
