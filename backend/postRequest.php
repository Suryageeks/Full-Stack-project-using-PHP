<?php

require_once "server.php";
require_once "addProduct.php";

if($_SERVER["REQUEST_METHOD"] === "POST"){
    
    $jsonData = file_get_contents("php://input");

    $connectDB = new Database($host,$username,$password,$dbName);
    $connectDB->connect();

    

    $product = new addProduct($connectDB->getConnection());

    $product->add($jsonData);

    $productID = $product->getProductID();


    $connectDB->closeConnection();

}

?>
