<?php
$host = "localhost";
$user = "root";
$pass = "12345";
$db = "db_test";

try{

    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // $conn->beginTransaction();
    $sql = "insert into student(st_name, st_gender, st_mobile) values('hamba', 'female', 01717111123)";
    $res = $conn->exec($sql);
    // $conn->commit();
    echo $res;
    $conn = null;

}catch(PDOException $e){

    echo $e->getMessage();

}




// <?php
// $host = 'localhost';
// $db   = 'db_test';
// $user = 'root';
// $pass = '12345';
// $charset = 'utf8mb4';

// $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
// $opt = [
//     PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
//     PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
//     PDO::ATTR_EMULATE_PREPARES   => false,
// ];
// $pdo = new PDO($dsn, $user, $pass, $opt);
