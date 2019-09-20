
<?php 
include 'Bugs.php';
class BugsManager{
private $bugs;


function __construct($bugs) {
    $this->bugs = $bugs;
}


function getBugs() {
    return $this->bugs;
}

 function setBugs($bugs) {
    $this->bugs = $bugs;
}
/**
 * charcher en memoire notre source de donées
 */
function load(){

    //recup le csv 
$fichier = 'data.txt';
$csv = new SplFileObject($fichier);
$csv->setFlags(SplFileObject::READ_CSV);
$csv->setCsvControl(';');
       //parse le csv ligne a ligne
 foreach($csv as $ligne){
	print_r($ligne);
        //var_dump($ligne) ;
        //echo $ligne[0]. "+" .$ligne[1]; 
}
  
   //fermer le csv
}

/**
 //ajouter un bug a la liste
 * @param Bugs $bug
 */ 
function add(Bugs $bug){
    $this->bugs[$bug->getid()]=$bug;
}
/**
 * supprimer un bugs de la liste
 * @param type $bug
 */
function remove(Bugs $bug){
    if(in_array( $bug,$this->bugs)) {
        unset($this->bugs[$bug->getId()]);
    }
}

}

?>

