<?php

require './Controllers/bugController.php';
$controler = new BugController();

$arguments = explode("/", $_SERVER["REQUEST_URI"]);
//echo( $_SERVER["REQUEST_URI"]);

switch ($arguments[4]) {
    case "":
        header("Location: list");
        break;
    case "list":
        return $controler->list();
        break;
    case "show":
        $id = $arguments[5];
        return $controler->Show($id);
        break;
    case "add":
        return $controler->add();
        break;
    case "update":
        $id = $arguments[5];
        return $controler->update($id);
        break;

    case "edit":
        $id = $arguments[5];
      //  header("Location: views/edit.php");
       return $controler->edit($id);
        break;
    default:
        require '404.php';
}

?>
