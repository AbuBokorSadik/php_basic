<?php

require_once('./isAuthenticate.php');
require_once('./dbconnection.php');

if(isset($_POST['catagory_delete_btn']) && !empty($_POST['catagory_delete_btn']) && $_POST['catagory_delete_btn'] == "Delete"){
    
    $sql = "delete from catagories where id=?";
    $stmt= $conn->prepare($sql);
    $stmt->execute([$_POST['catagory_id']]);
    $conn = null;
    header("Location: ./catagory_list.php");

}

?>