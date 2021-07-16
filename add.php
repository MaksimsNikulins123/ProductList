<?php

session_start();

require __DIR__ . "/vendor/autoload.php";
require "app/init.php";

header('Location: index.php');

$sku = '';
$name = '';
$price = '';
$size = 0;
$weight = 0;
$height = 0;
$width = 0;
$length = 0;



$sku = $_POST['sku'];
$name = $_POST['name'];
$price = $_POST['price'];
$type = $_POST['productType'];
if($_POST['size'] != null){
    $size = $_POST['size'];
}
if($_POST['weight'] != null){
    $weight = $_POST['weight'];
}
if($_POST['height'] != null){
    $height = $_POST['height'];
}
if($_POST['width'] != null){
    $width = $_POST['width'];
}
if($_POST['length'] != null){
    $length = $_POST['length'];
}

$db = new liw\app\core\Database();

$db->write($sku, $name, $price, $type, $size, $weight, $height, $width, $length);