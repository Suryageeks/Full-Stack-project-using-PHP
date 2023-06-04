<?php


abstract class addProduct{
    protected $connect;
    protected $feature;
    protected $productID;

    // public function __construct($connect){
    //     $this->connect=$connect;
    //     $this->feature=$this->getFeature();
    // }
    
    public function __construct($connect) {
        $this->connect = $connect;
        $this->feature = $this->getFeature();
    }

    public function add($jsonData){

        //$data = json_decode($jsonData,true);

        if (json_last_error() === JSON_ERROR_NONE){
            // $sku = $data["sku"];
            // $name = $data["name"];
            // $price = $data["price"];
            // $type = $data["type"];
            // $size = $data["size"];
            // $weight = $data["weight"];
            // $length = $data["length"];
            // $width = $data["width"];
            // $height = $data["height"];

           // $insertQuery = "Insert into product (sku,name,price,type,size,weight,length,width,height";
            //$values = "values ('$sku','$name','$price','$type','$size','$weight','$length','$width','$height'";

            //$insertQuery = "INSERT INTO product (sku, name, price, type, size, weight, length, width, height";
            //$values = "VALUES ('$sku', '$name', '$price', '$type', '$size', '$weight', '$length', '$width', '$height'";

            // foreach($this->feature as $features => $value){
            //     $insertQuery .= ", $features";
            //     $values .= ", '". $data[$value] . "'";
            // }

            // $insertQuery .=") " . $values . ")";

            // foreach ($this->feature as $feature => $value) {
            //     $insertQuery .= ", $feature";
            //     $values .= ", '" . $value . "'";
            // }
            
            //$insertQuery .= ") " . $values . ")";

            $insertQuery .= "INSERT INTO PRODUCT (json_data) VALUES ('$jsonData')";

            if($this->connect->query($insertQuery)===true){
                $this->productID = $this->connect->insert_id;
                echo "Product added successfully with Product ID" . $this->productID;
            }
            else{
                echo "Error occurred while adding product". $this->connect->error;
            }

        }
        else{
            echo "Invalid JSON Data". json_last_error_msg();
        }
    
    }

    public function getProductID(){
        return $this->productID;
    }

    
    abstract protected function getFeature();


}

?>
