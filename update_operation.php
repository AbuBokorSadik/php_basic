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

$sql = "update student set st_name=? where st_name=?";
$stmt = $conn->prepare($sql);
$stmt->execute(["Bokor","sadik"]);

echo "statement execute success";

$conn = null;