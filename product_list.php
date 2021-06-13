<?php

require_once('./dbconnection.php');

$stmt = $conn->query("select * from products");
// $stmt2 = $conn->query("select catagory_id from products");
// $data2 = array();
// while($data = $stmt2->fetch()){array_push($data2,$data[0]);}
// $data2 = array_unique($data2);

$stmt2 = $conn->query("select id, name from catagories where id in (select distinct catagory_id from products)");
$catagory_info= array();
while($data = $stmt2->fetch()){
    $catagory_info[$data[1]] = $data[0];
}?>

<html>

<style>

    #btn_product {
        
        font-weight: bold;
        font-size: 15px;
        width: 10%;
        background-color: #4CAF50;
        color: black;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    #custom {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#custom td, #custom th {
  border: 1px solid #ddd;
  padding: 8px;
}

#custom tr:nth-child(even){background-color: #f2f2f2;}

#custom tr:hover {background-color: #ddd;}

#custom th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}

img {
  border: 1px solid #ddd;
  border-radius: 4px;
  padding: 5px;
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 150px;
  height: 120px;
}

img:hover {
  box-shadow: 0 0 2px 2px rgba(0, 140, 186, 0.5);
}

</style>

    <body>

        <div>

            <form action="./product_add.php">

                <input id="btn_product" type="submit" name="add_product" value="Add Product"> 

            </form>

        </div>

        <div>
        <table id="custom">
            <thead>
            <tr>
                <th>Product ID</th>
                <th>Catagory</th>
                <th>Product Name</th>
                <th>Description</th>
                <th>Unit Price</th>
                <th>Image</th>
                <th>Height</th>
                <th>Width</th>
                <th>Weight</th>
                <th>Size</th>
                <th>Status</th>
                <th>Created Time</th>
                <th>Updated Time</th>
                <th>Action</th>
            </tr>
            </thead>

            <tbody>

            <?php
                while($data = $stmt->fetch() ){
                    $product_id = $data[0];
                    // print_r($catagory_name);
            ?>

            <tr>
            <td><?php echo $data["id"]; ?></td>
            <td>
                <?php
                    echo array_search($data['catagory_id'], $catagory_info);
                ?>
            </td>
            <td><?php echo $data["name"]; ?></td>
            <td><?php echo $data["description"]; ?></td>
            <td><?php echo $data["unit_price"]; ?></td>
            <td><img src="<?php echo $data["image"]; ?>" alt="<?php echo $data["image"]; ?>" style="width:150px"></td>
            <td><?php echo $data["height"]; ?></td>
            <td><?php echo $data["width"]; ?></td>
            <td><?php echo $data["weight"]; ?></td>
            <td><?php echo $data["size"]; ?></td>
            <td><?php echo $data["status"] == 1?'Active':'Inactive'; ?></td>
            <td><?php echo date('Y-m-d h:i:s', strtotime($data['created_at'])); ?></td>
            <td><?php echo date('Y-m-d h:i:s', strtotime($data['updated_at'])); ?></td>
            <td> <a href="product_update.php?product_id=<?php echo $product_id; ?>">Update</a> | 
             
            <form method="post" action="./product_submit_delete.php">

            <input type="hidden" name="product_id" value="<?php echo $product_id; ?>">
            <input type="submit" name="product_delete_btn" value="Delete">

            </form>
            </td>
            </tr>

            <?php } ?>

            </tbody>

        </table>
        </div>

    </body>

</html>

