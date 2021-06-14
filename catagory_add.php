<?php

require_once('./isAuthenticate.php');

?>


<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_sidebar.css">
</head>

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


<?php include_once('sidebar.php') ?>

<div class="content">

<h3>Add Catagory</h3>

  <form method="post">
    <label>Name</label>
    <input type="text" name="catagory_name" placeholder="Enter catagory.." required="true">

    <label>Alias</label>
    <input type="text" name="catagory_alias" placeholder="Enter catagory alias..">

    <label>Status</label>
    <select name="catagory_status">
      <option value="1">Active</option>
      <option value="0">Inactive</option>
    </select>
  
    <input type="submit" name="catagory_submit_btn" value="Save" formaction="./catagory_submit.php">
  </form>
</div>

</body>
</html>