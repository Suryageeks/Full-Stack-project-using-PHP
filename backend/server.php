<?php

class Database{
    public $host;
    public $username;
    public $password;
    public $dbName;
    public $connectdb;

    function __construct($host,$username,$password,$dbName){
        $this->host=$host;
        $this->username=$username;
        $this->password=$password;
        $this->dbName=$dbName;

        $this->connect();
    }

    public function connect() {
        $this->connectdb = new mysqli($this->host, $this->username, $this->password, $this->dbName);
    
        if ($this->connectdb->connect_error) {
            die("Database Connection Failed" . $this->connectdb->connect_error);
        }
        echo "<h2>Database connected successfully</h2>";

    }

    function getConnection(){
        return $this->connectdb;
        
    }

    function closeConnection(){
        $this->connectdb->close();
    }

}

$host = "localhost";
$username = "root";
$password = "";
$dbName = "scandiweb";

$obj = new Database($host,$username,$password,$dbName);
$connectdb = $obj->getConnection();

$obj->closeConnection();



?>