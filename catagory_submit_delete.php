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

if(isset($_POST['catagory_delete_btn']) && !empty($_POST['catagory_delete_btn']) && $_POST['catagory_delete_btn'] == "Delete"){
    
    $sql = "delete from catagories where id=?";
    $stmt= $conn->prepare($sql);
    $stmt->execute([$_POST['catagory_id']]);
    $conn = null;
    header("Location: ./catagory_list.php");

}

?>