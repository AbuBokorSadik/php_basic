<?php

require_once('./dbconnection.php');

if(isset($_GET['product_id']) && !empty($_GET['product_id'])){
    
    $stmt = $conn->query("select * from products where id = $_GET[product_id]");
    $data = $stmt->fetch();
    $stmt2 = $conn->query("select id,name from catagories");
    // $conn = null;
    // echo $data['description'];
    // print_r($data);
    
}
?>

<!DOCTYPE html>
<html>
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
  border-radius: 5px;
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

<h3>Update Product</h3>

<div>
  <form method="post">

    <input type="hidden" name="product_id" value="<?php echo $_GET['product_id'] ?>">

    <label>Product Name</label>
    <input type="text" name="product_name" value="<?php echo $data['name'] ?>" placeholder="Enter product name..." required="true">

    <label>Catagory</label>
    <select name="catagory_id">

        <?php        
            while($data2 = $stmt2->fetch()){
        ?>
        <option type="number" value="<?php echo $data2['id'] ?>" <?php if($data2['id'] == $data['catagory_id']) {echo "selected";} ?>><?php echo $data2['name'] ?></option>
        <?php } $conn = null;?>

    </select>

    <label>Unit price</label>
    <input type="number" step="0.001" name="product_unit_price" value="<?php echo $data['unit_price']; ?>" placeholder="Enter unit price..." min="0" required="true">

    <label>Height</label>
    <input type="number" step="0.001" name="product_height" value="<?php echo $data['height']; ?>" placeholder="Enter height..." min="0" required="true">

    <label>Width</label>
    <input type="number" step="0.001" name="product_width" value="<?php echo $data['width']; ?>" placeholder="Enter width..." min="0" required="true">

    <label>Weigth</label>
    <input type="number" step="0.001" name="product_weight" value="<?php echo $data['weight']; ?>" placeholder="Enter weight..." min="0" required="true">

    <label>Size</label>
    <input type="number" step="0.001" name="product_size" value="<?php echo $data['size']; ?>" placeholder="Enter size..." min="0" required="true">

    <label>Status</label>
    <select name="product_status">
      <option value="1" <?php if($data["status"]==1) echo "selected";   ?>>Active</option>
      <option value="0" <?php if($data["status"]==0) echo "selected";   ?>>Inactive</option>
    </select>

    <label>Image</label><br><br>
    <img src="" alt="" style="width:150px"><br>
    <input type="file" id="" name="product_image"><br><br>

    <label>Description</label> <br><br>
    <textarea rows="10" name="product_description"  placeholder="Enter text here..."><?php echo $data['description']; ?></textarea>
  
    <input type="submit" name="product_submit_btn" value="Save" formaction="./product_submit_update.php">
  </form>
</div>

</body>
</html>