<?php
namespace BugApp\Models;
class Bug{
        public $id;
        public $titre;
        public $description;
        public $statut;

        // public function __construct() {
        // }

        public function __construct() {
            // $this->id = $id;
            // $this->titre = $titre;
            // $this->description = $description;
            // $this->statut = $statut;
            // $this->createdAt = $createdAt;

        }

        function getId() {
            return $this->id;
        }

        function getCreatedAt() {
            return $this->createdAt;
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

        function setCreatedAt($createdAt) {
            $this->createdAt = $createdAt;
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

  }

?>
