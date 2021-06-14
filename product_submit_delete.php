<?php

require_once('./isAuthenticate.php');
require_once('./dbconnection.php');

if(isset($_POST['product_delete_btn']) && !empty($_POST['product_delete_btn']) && $_POST['product_delete_btn'] == "Delete"){
    
    $sql = "delete from products where id=?";
    $stmt= $conn->prepare($sql);
    $stmt->execute([$_POST['product_id']]);
    $conn = null;
    header("Location: ./product_list.php");

}

?>