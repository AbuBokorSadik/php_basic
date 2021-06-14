<?php

require_once('./isAuthenticate.php');
require_once('./dbconnection.php');

if(isset($_POST['product_id']) && !empty($_POST['product_id'])){
 
    $image_path ="http://localhost/php_basic/images/".$_POST['product_image'];
    echo $image_path;
    $date = date('Y-m-d H:i:s');
    if(!empty($_POST['product_image'])){

        $sql = "update products set catagory_id=?, name=?, description=?, unit_price=?, image=?, height=?, width=?, weight=?, size=?, status=?, updated_at=? where id=?";
        $stmt= $conn->prepare($sql);
        $stmt->execute([$_POST['catagory_id'], $_POST['product_name'], $_POST['product_description'],  $_POST['product_unit_price'], $image_path, $_POST['product_height'], $_POST['product_width'], $_POST['product_weight'], $_POST['product_size'], $_POST['product_status'], $date, $_POST['product_id']]);

    }else{

        $sql = "update products set catagory_id=?, name=?, description=?, unit_price=?, height=?, width=?, weight=?, size=?, status=?, updated_at=? where id=?";
        $stmt= $conn->prepare($sql);
        $stmt->execute([$_POST['catagory_id'], $_POST['product_name'], $_POST['product_description'],  $_POST['product_unit_price'], $_POST['product_height'], $_POST['product_width'], $_POST['product_weight'], $_POST['product_size'], $_POST['product_status'], $date, $_POST['product_id']]);

    }
    // header("Location: ./product_list.php");

    $conn = null;
    echo $_POST['product_image'];
    // echo "<br>";

}

?>