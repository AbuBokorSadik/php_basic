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

if(isset($_POST['catagory_id']) && !empty($_POST['catagory_id'])){
    
    $date = date('Y-m-d H:i:s');

    $sql = "update catagories set name=?, alias=?, status=?, updated_at=? where id=?";
    $stmt= $conn->prepare($sql);
    $stmt->execute([$_POST['catagory_name'], $_POST['catagory_alias'], $_POST['catagory_status'], $date, $_POST['catagory_id']]);
    header("Location: ./catagories.php");

    $conn = null;
    // print_r($_POST);
    // echo "<br>";

}

?>