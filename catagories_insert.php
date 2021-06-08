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

<h3>Add Catagory</h3>

<div>
  <form method="post">
    <label>Name</label>
    <input type="text" name="catagory_name" placeholder="Your name.." required="true">

    <label>Alias</label>
    <input type="text" name="catagory_alias" placeholder="Your alias..">

    <label>Status</label>
    <select name="catagory_status">
      <option value="1">Active</option>
      <option value="0">Inactive</option>
    </select>
  
    <td> <input type="submit" name="catagory_submit_btn" value="Save" formaction="./submit_catagory.php"> </td>
  </form>
</div>

</body>
</html>




<!-- <html>

    <body>

        <form method="post">

            <table>

                <tr>

                    <td> Name </td>
                    <td> <input type="text" name="catagory_name" placeholder="Enter Name" required="true" >  </td>

                </tr>

                <tr>

                    <td> Alias </td>
                    <td> <input type="text" name="catagory_alias" placeholder="Enter Alias"> </td>

                </tr>

                <tr>

                    <td> Status </td>
                    <td>
                        <select name="catagory_status">
                            <option value="1"> Active </option>
                            <option value="0"> Inactive </option>
                        </select> 
                    </td>

                </tr>

                <tr>
                    
                    <td> <input type="submit" name="catagory_submit_btn" value="Save" formaction="./submit_catagory.php"> </td>
                    
                </tr>

            </table>

        </form>

    </body>

</html> -->