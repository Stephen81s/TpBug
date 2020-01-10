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

  function findByStatus(){

      $sth = $this->bdd->query("SELECT * FROM bug WHERE Statut = 0 ");
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

  function addBug($bug){
    $req = $this->bdd->prepare('INSERT INTO bug (titre,description) VALUE (:titre,:description)');
    $req->execute (array(
    'titre'=>$bug->getTitre(),
    'description'=>$bug->getDescription()));
    $req->closeCursor();
  }



  function updateBug($bug){
    $sqlupdate = "update bug set titre =:titre, description=:description, statut =:statut where id=:id";
    $req = $this->bdd->prepare ($sqlupdate);
    $req ->execute(['titre'=> $bug->getTitre(),
                    'description'=> $bug->getDescription(),
                    'statut' => $bug->getStatut(),
                    'id'=> $bug->getId(),]);
    $req->closeCursor();
  }

  // function deleteBug(){
  //   $sqldelete = "delete from bug where id=:id";
  //   $req =$bdd ->prepare ($sqldelete);
  //   $req ->execute(['id'=>htmlspecialchars($_POST['id']]);
  //   $req->closeCursor();
  // }
}
?>
