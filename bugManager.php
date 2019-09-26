
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
/**
 * charcher en memoire notre source de donées
 */
//function loadcsv(){
//
//    //recup le csv
//$fichier = 'data.txt';
//$csv = new SplFileObject($fichier);
//$csv->setFlags(SplFileObject::READ_CSV);
//$csv->setCsvControl(';');
//       //parse le csv ligne a ligne
//// print '<pre>';
//// print_r($csv);
//
// foreach($csv as $ligne){
//	//print_r($ligne);
//        $id=$ligne[0];
//        $description = $ligne[1];
//        // print_r($id,$description);
//        $bug = new Bug($id, $description);
//        $this->add($bug);
//    }
//}
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
