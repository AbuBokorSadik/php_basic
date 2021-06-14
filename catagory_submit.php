<?php

require_once('./isAuthenticate.php');
require_once('./dbconnection.php');

if(isset($_POST['catagory_submit_btn']) && !empty($_POST['catagory_submit_btn']) && $_POST['catagory_submit_btn'] == "Save"){
    $date = date('Y-m-d H:i:s');

    $sql = "insert into catagories(name, alias, status, created_at, updated_at) values('{$_POST[catagory_name]}', '{$_POST[catagory_alias]}', '{$_POST[catagory_status]}', '$date', '$date')";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $conn = null;
    header("Location: ./catagory_list.php");
}


?>