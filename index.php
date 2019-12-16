<!DOCTYPE html>

<?php
/*

//up
require('Controllers/bugController.php');
//

$url = '';
echo '<pre>';
// var_dump($_SERVER["REQUEST_URI"])
echo '</pre>';

$url = explode("/", $_SERVER["REQUEST_URI"]);
$url=$url[3]."/".$url[4];
$url2=$url[3]."/".$url[4]."/".$url[5];
echo '<pre>';
var_dump($url);
echo '</pre>';

switch(true)
{
    case ($url == 'TpBug/Liste') :

        return (new bugController())->List();
        break;


    case preg_match("#^TpBug/show/(\d+)$#", $url2, $matches) :
$id=$matches[1];
var_dump($id);
                return (new bugController())->Show($id);
                break;

      case ($url == 'TpBug/add') :

             return (new bugController())->Add();
          break;

    default :

        http_response_code(404);
        echo 'Page non trouvé';

}
*/

require './Controllers/bugController.php';
$controler = new BugController();

$arguments = explode("/", $_SERVER["REQUEST_URI"]);

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
    default:
        require '404.php';
}

?>
