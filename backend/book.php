<?php

require_once  "addProduct.php";

class book extends addProduct{
    protected function getFeature(){
        return [ "weight" => "weight" ];
    }
}


?>
