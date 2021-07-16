<?php
  session_start();

  require __DIR__ . "/vendor/autoload.php";
  require "app/init.php";


header("Content-Type: application/json");
  
$data = file_get_contents("php://input");

// echo "Hello $data->id, your email is $data->email";
// echo gettype($data);
// var_dump($_POST);
$array=json_decode($data, true);

// $vab = json_encode($array);

// var_dump($data);
// echo strval($array);
// echo ($array);
// echo gettype($array);
// var_dump($vab);
// var_dump($array);
// var_dump($array['id']);
// print_r($array['id']);
$idList= implode("," , $array['id']);
// foreach($array['id'] as $key => $value) {
//     $new_arr[$key]=$value->__toString();
// }
// $a=$new_arr;
// echo $a; 
$db = new liw\app\core\Database();

$products = $db->delete($idList);
// $idToDelete = json_decode($data, true);
  
// var_dump($idToDelete);
  
?>
