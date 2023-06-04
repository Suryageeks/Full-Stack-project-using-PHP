<?php

require_once  "addProduct.php";

class dvd extends addProduct{
    protected function getFeature(){
        return ["size" => "size" ];
    }
}


?>