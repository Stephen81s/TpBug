
<?php
include('bug.php');
class bugManager{
private $bug = [];


function __construct() {

}


function getBug() {
    return $this->bug;
}

 function setBug($bug) {
    $this->bug = $bug;
}

function load(){
    $bdd = connexionBdd();
    $bugs = $bdd->query('SELECT * FROM `bug` ORDER BY `id`',PDO::FETCH_ASSOC);

    while ($donnee=$bugs->fetch()){
        $bug = new Bug($donnee['id'], $donnee['titre'], $donnee['description'], $donnee['statut']);
        array_push($this->bug,$bug);
    }
}
}
?>
