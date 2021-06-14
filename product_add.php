<?php

require_once('./isAuthenticate.php');
require_once('./dbconnection.php');

$stmt = $conn->query("select * from catagories");

?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_sidebar.css">
</head>

<style>

textarea
{
  width:100%;
}

input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=number], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  align: center;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  /* border-radius: 5px; */
  background-color: #f2f2f2;
  padding: 20px;
}

img {
  border: 1px solid #ddd;
  border-radius: 4px;
  padding: 5px;
  width: 150px;
  height: 120px;
}

img:hover {
  box-shadow: 0 0 2px 2px rgba(0, 140, 186, 0.5);
}
</style>
<body>

<?php include_once('sidebar.php') ?>

<div class="content">

  <h3>Add Product</h3>
  <form method="post" enctype="multipart/form-data">
    <label>Product Name</label>
    <input type="text" name="product_name"  placeholder="Enter product name..." required="true">

    <label>Catagory</label>
    <select name="catagory_id">

        <?php        
            while($data = $stmt->fetch()){
        ?>
        <option type="number" value="<?php echo $data['id'] ?>"><?php echo $data['name'] ?></option>
        <?php } $conn = null;?>

    </select>

    <label>Unit price</label>
    <input type="number" step="0.001" name="product_unit_price" placeholder="Enter unit price..." min="0" required="true">

    <label>Height</label>
    <input type="number" step="0.001" name="product_height" placeholder="Enter height..." min="0" required="true">

    <label>Width</label>
    <input type="number" step="0.001" name="product_width" placeholder="Enter width..." min="0" required="true">

    <label>Weight</label>
    <input type="number" step="0.001" name="product_weight" placeholder="Enter weight..." min="0" required="true">

    <label>Size</label>
    <input type="number" step="0.001" name="product_size" placeholder="Enter size..." min="0" required="true">

    <label>Status</label>
    <select name="product_status">
      <option value="1">Active</option>
      <option value="0">Inactive</option>
    </select><br><br>

    <label>Image</label><br><br>
    <img src="" alt="" style="width:150px"><br>
    <input type="file" id="" name="product_image"><br><br>

    <label>Description</label> <br><br>
    <textarea rows="10" name="product_description" placeholder="Enter text here..."></textarea>
  
    <input type="submit" name="product_submit_btn" value="Save" formaction="./product_submit.php">
  </form>
</div>

</body>
</html>