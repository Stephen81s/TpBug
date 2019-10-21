
<?php
include('bug.php');
include('manager.php');

class bugManager extends Manager {

  function __construct() {

  }

  function findAll(){

    $bugs = [];

    $bdd = $this->connexionBdd();
    $datas = $bdd->query('SELECT * FROM `bug` ORDER BY `id`',PDO::FETCH_ASSOC);

    while ($donnee=$datas->fetch()){
      $bug = new Bug();
      $bug->setId($donnee['id']);
      $bug->setTitre( $donnee['titre']);
      $bug->setDescription($donnee['description']);
      $bug->setCreatedAt($donnee['createdAt']);
      $bug->setStatut( $donnee['statut']);

//$donnee['id'], $donnee['titre'], $donnee['description'],$donnee['createdAt'], $donnee['statut']

      array_push($bugs,$bug);
    }
    return ($bugs);
  }

  function find($id){
      $bdd = $this->connexionBdd();
      $sth = $bdd->query("SELECT * FROM bug WHERE id = $id",PDO::FETCH_ASSOC);
      $donnee=$sth->fetch();
      //var_dump($sth);
      $bug = new Bug();
      $bug->setId($donnee["id"]);
      $bug->setTitre($donnee["titre"]);
      $bug->setDescription($donnee["description"]);
      $bug->setCreatedAt($donnee["createdAt"]);
      $bug->setStatut($donnee["statut"]);

      return $bug;

  }

  function addBug(){
    $bdd = $this->connexionBdd();
    $req = $bdd->prepare('INSERT INTO bug (titre,description) VALUE (:titre,:description)');
    $req->execute (array(
    'titre'=>htmlspecialchars($_POST['titre']),
    'description'=>htmlspecialchars($_POST['description'])));
    $req->closeCursor();
  }
}
?>
