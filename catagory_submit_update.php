<?php

require_once('./isAuthenticate.php');
require_once('./dbconnection.php');

if(isset($_POST['catagory_id']) && !empty($_POST['catagory_id'])){
    
    $date = date('Y-m-d H:i:s');

    $sql = "update catagories set name=?, alias=?, status=?, updated_at=? where id=?";
    $stmt= $conn->prepare($sql);
    $stmt->execute([$_POST['catagory_name'], $_POST['catagory_alias'], $_POST['catagory_status'], $date, $_POST['catagory_id']]);
    header("Location: ./catagory_list.php");

    $conn = null;
    // print_r($_POST);
    // echo "<br>";

}

?>