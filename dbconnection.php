<?php

 $host = "127.0.0.1";
 $user = "root";
 $pass = "12345";
 $db = "db_test";

 try{

     $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){

    echo $e->getMessage();

}
?>