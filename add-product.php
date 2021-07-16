<?php
session_start();

require __DIR__ . "/vendor/autoload.php";
require "app/init.php";
// header('Location: http://www.example.com/');
// $app = new liw\app\core\App();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/index.css" type="text/css">
    <title>Product Add</title>
    
</head>
<body>
    <header>
        <div class="header">
            <div class="header_title">Product Add</div>
            <div class="header_buttons">
                <div class="header_button">
                <input type="submit" form="product_form" value="Save"/>
                    <!-- <button>ADD</button> -->
                </div>
                <div class="header_button">
                <input type="reset" form="product_form" onclick='cancel()' value="Cancel"/> 
                    <!-- <button onClick="toggle(this)">MASS DELETE</button> -->
                </div>
            </div>
        </div>
    </header>
    <hr>
    <section>
        <form action="add.php" id="product_form" method="POST">
            
            <table>
                <tr>
                    <td>
                        <label>SKU </label> 
                    </td>
                    <td>
                        <input type="text" name="sku" id="sku" >
                    </td>
                    
                       
                
                </tr>
                
                
                <tr>
                    <td>
                        <label>Name </label>    
                    </td>
                    <td>
                        <input type="text" name="name" id="name" >
                    </td>
                </tr>
                <tr>
                    <td>
                    <label>Price ($) </label> 
                    </td>
                    <td>
                    <input type="text" name="price" id="price" >
                    </td>
                </tr>
            </table>
            <br>
            <div>
            <label>Type Switcher</label> 
            <select id="productType" name="productType" onchange='changeAction(this.value)' >
                <option value="" name="default" ></option>
                <option value="dvd" name="dvd" id="dvd">DVD</option>
                <option value="book" name="book" id="book">Book</option>
                <option value="furniture" name="furniture" id="furniture">Furniture</option>
            </select>
            </div>
            
            <br>
            <div id="selectTable">

            </div>
            
        </form>
        <p class="result" style="color:red"></p>
    </section>
    <footer>
        <div class="footer">
            <hr>
            <div class="footer_title">
                <p>Scandiweb Test assigment</p>
            </div>
        </div>
    </footer>
   <script src="public/js/index.js"></script>
   <script src="public/js/validation.js"></script>
</body>
</html>


