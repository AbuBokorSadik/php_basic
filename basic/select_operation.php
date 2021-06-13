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

// $stmt = $conn->query("select * from student where st_name = 'sadik'");
// $data = $stmt->fetch();
// print_r($data);

$stmt = $conn->query("select * from student");
while($row = $stmt->fetch()){
    print_r($row["st_name"]);
    echo "<br>";
}

$conn = null;