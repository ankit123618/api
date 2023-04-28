<?php

class connection{

   
    function __construct($host,$name,$password,$database){
        
        $this->$host = $host;
        $this->$name = $name;
        $this->$password = $password;
        $this->$database = $database;
      
        $connection = mysqli_connect($host,$name,$password,$database);
        return $connection;

    }

    // function __destruct(){

    //     mysqli_close($connection);
    // }

    function api($data){
       return($data);
    }
}


$host = "localhost";
$user = "root";
$password = "";
$database = "ai_form";
$connection = new connection($host,$user,$password,$database);
var_dump($connection);
$data = $connection->api($_POST);
var_dump($data);
?>