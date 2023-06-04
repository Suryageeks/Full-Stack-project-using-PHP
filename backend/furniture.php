<?php

require_once  "addProduct.php";

class furniture extends addProduct{
    protected function getFeature(){
        return [
            "length" => "length",
            "width" => "width",
            "height" => "height"
        ];
    }
}

?>
