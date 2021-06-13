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

if(isset($_GET['catagory_id']) && !empty($_GET['catagory_id'])){

    $sql = "select * from catagories where id=$_GET[catagory_id]";
    $stmt = $conn->query($sql);
    $catagory_data = $stmt->fetch();

    // print_r($catagory_data);
    // echo "<br>";

    $conn = null;
}

?>

<!DOCTYPE html>
<html>
<style>
input[type=text], select {
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
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<body>

<h3>Update Catagory</h3>

<div>
  <form method="post">
    <input type="hidden" name="catagory_id" value="<?php echo $_GET['catagory_id'] ?>">
    <label>Name</label>
    <td> <input type="text" name="catagory_name" value="<?php echo $catagory_data['name'] ?>" placeholder="Enter Name" required="true" >  </td>

    <label>Alias</label>
    <td> <input type="text" name="catagory_alias" value="<?php echo $catagory_data['alias'] ?>" placeholder="Enter Alias"> </td>

    <label>Status</label>
    <select name="catagory_status">
        <option value="1" <?php if($catagory_data["status"]==1) echo "selected";   ?>> Active </option>
        <option value="0" <?php if($catagory_data["status"]==0) echo "selected";   ?>> Inactive </option>
    </select>
  
    <td> <input type="submit" name="catagory_submit_btn" value="Save" formaction="./catagory_submit_update.php"> </td>
  </form>
</div>

</body>
</html>
