<?php

namespace liw\app\core;

class Database
{
    public function db_connect()
    {
        
        $connect = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        
        if(!$connect){
            die('Error to connect to Database!');
        }
        return $connect;
        
    }
    public function read(){

        $query = "SELECT * FROM products";
        $products = mysqli_query($this->db_connect(),  $query);
        mysqli_close($this->db_connect());
        $products = mysqli_fetch_all($products, MYSQLI_ASSOC);
        return $products;
        
    }
    
    public function write($sku, $name, $price, $type, $size, $weight, $height, $width, $length)
    {
        // var_dump($sku, $name, $price, $type, $size, $weight, $height, $width, $length);
        
        $query = "INSERT INTO `products`(`id`, `sku`, `name`, `price`, `type`, `size`, `weight`, `height`, `width`, `length`) VALUES (null,'$sku','$name','$price','$type','$size','$weight','$height','$width','$length')";
        $addProducts = mysqli_query($this->db_connect(), $query);

        if(!$addProducts){
            echo "Cannot write into database";
        }
        mysqli_close($this->db_connect());
    }

    public function delete($data)
    {
        // print_r($data) ;
        // foreach($data as $id)
        // echo ($data);
        $query = "DELETE FROM `products` WHERE id IN ($data)";
        $deleteProducts = mysqli_query($this->db_connect(), $query);
        if(!$addProducts){
            echo "Cannot write into database";
        }
        mysqli_close($this->db_connect());
        
    }
}

