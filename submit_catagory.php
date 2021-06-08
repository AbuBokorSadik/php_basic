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

if(isset($_POST['catagory_submit_btn']) && !empty($_POST['catagory_submit_btn']) && $_POST['catagory_submit_btn'] == "Save"){
    $date = date('Y-m-d H:i:s');

    $sql = "insert into catagories(name, alias, status, created_at, updated_at) values('{$_POST[catagory_name]}', '{$_POST[catagory_alias]}', '{$_POST[catagory_status]}', '$date', '$date')";
    $res = $conn->exec($sql);
    $conn = null;
    header("Location: ./catagories.php");
    // echo "<br>" . $res;
}


?>