
<?php
include('bug.php');
require('manager.php');

class bugManager extends Manager {
private $bdd;
  function __construct() {
      $this->bdd = $this->connexionBdd();
  }

  function findAll(){
    $bugs = [];
    $datas = $this->bdd->query('SELECT * FROM `bug` ORDER BY `id`',PDO::FETCH_ASSOC);

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
      // var_dump($bdd->query('SELECT * FROM 'bug' WHERE 'id' = "'.$id.'"'));die;
      $sth = $this->bdd->query("SELECT * FROM bug WHERE id = $id");
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
    $req = $this->bdd->prepare('INSERT INTO bug (titre,description) VALUE (:titre,:description)');
    $req->execute (array(
    'titre'=>htmlspecialchars($_POST['titre']),
    'description'=>htmlspecialchars($_POST['description'])));
    $req->closeCursor();
  }
}
?>
