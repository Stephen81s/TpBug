<!DOCTYPE html>
<?php

require('conn.php');

    class Bug{
        public $id;
        public $titre;
        public $description;
        public $statut;

        // public function __construct() {
        // }

        public function __construct($id, $titre, $description, $statut) {
            $this->id = $id;
            $this->titre = $titre;
            $this->description = $description;
            $this->istatutd = $statut;
        }

        function getId() {
            return $this->id;
        }

        function getTitre() {
            return $this->titre;
        }

        function getDescription() {
            return $this->description;
        }

        function getStatut() {
            return $this->statut;
        }

        function setId($id) {
            $this->id = $id;
        }

        function setTitre($titre) {
            $this->titre = $titre;
        }

        function setDescription($description) {
            $this->description = $description;
        }

        function setStatut($statut) {
            $this->statut = $statut;
        }

        function load($id){
            $bdd = connexionBdd();
            $sth = $bdd->query("SELECT * FROM bug WHERE id = $id",PDO::FETCH_ASSOC);
            //var_dump($sth);
            while ($donnee=$sth->fetch()){

                $this->setId($donnee["id"]);
                $this->setTitre($donnee["titre"]);
                $this->setDescription($donnee["description"]);
                $this->setStatut($donnee["statut"]);


            }
        }

  }

?>
