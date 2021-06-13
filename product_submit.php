<?php

require_once('./dbconnection.php');

if(isset($_POST['product_submit_btn']) && !empty($_POST['product_submit_btn']) && $_POST['product_submit_btn'] == "Save"){

    $image_path ="./images/".$_POST['product_image'];
    $date = date('Y-m-d H:i:s');
    $sql = "insert into products (created_by_id, catagory_id, name, description, unit_price, image, height, width, weight, size, status, created_at, updated_at) values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([1,$_POST['catagory_id'], $_POST['product_name'], $_POST['product_description'], $_POST['product_unit_price'], $image_path, $_POST['product_height'], $_POST['product_width'], $_POST['product_weight'], $_POST['product_size'], $_POST['product_status'], $date, $date]);
    $conn = null;
    header("Location: ./product_list.php");

}
?>