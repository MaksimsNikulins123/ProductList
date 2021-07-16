<?php
  session_start();

  require __DIR__ . "/vendor/autoload.php";
  require "app/init.php";


header("Content-Type: application/json");
  
$data = file_get_contents("php://input");

$array=json_decode($data, true);

$idList= implode("," , $array['id']);

$db = new liw\app\core\Database();

$products = $db->delete($idList);

  
?>
