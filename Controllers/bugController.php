<?php

require('Models/bugManager.php');

class BugController{

    public function Add(){
        if(isset($_POST['titre'])&&isset($_POST['description'])){
            $bugManager = new BugManager();
            $bug = new Bug();
            $bug->setTitre($_POST["titre"]);
            $bug->setDescription($_POST["description"]);
            $bug->setStatut($_POST["statut"]);
            $bug->setCreatedAt($_POST["createdAt"]);
            $bugManager->addBug($bug);
            header('Location: list');
        }
        else{
            $content = $this->render('Views/addBug', []);
            return $this->sendHttpResponse($content, 200);
        }
    }

    public function List(){
        $bugManager = new BugManager();
        $bugs = $bugManager->findAll();
        $content = $this->render('Views/Liste', ['bugs' => $bugs]);

        return $this->sendHttpResponse($content, 200);
    }

    public function Show($id){
        $bugManager = new BugManager();
        $bug = $bugManager->find($id);
        $content = $this->render('Views/show', ['bug' => $bug]);
        return $this->sendHttpResponse($content, 200);
    }

    public function render($templatePath, $params){
        $templatePath = $templatePath . ".php";

        ob_start();
        $params;

        require($templatePath);

        return ob_get_clean();
    }

    public static function sendHttpResponse($content, $code = 200){
        http_response_code($code);

        header('Content-type: text/html');

        echo $content;
    }

    public function update($id){
      $bugManager = new BugManager();
      $bug = $bugManager->find($id);
      if (isset($_POST['statut'])){
        $bug->setStatut($_POST['statut']);
      }
      $bugManager->updateBug($bug);
      http_response_code(200);
      header('Content-type: application/json');
      $response=['success'=> true,'id'=>$bug->getId()];
      $json = json_encode($response);
      echo $json;
    }

    public function edit($id){
      $bugManager = new BugManager();
      $bug = $bugManager->find($id);
      //var_dump($bug);
      $content = $this->render('Views/edit', ['bug' => $bug]);
      return $this->sendHttpResponse($content, 200);
    }
}
?>
