<?php

require_once('./dbconnection.php');

$stmt = $conn->query("select * from catagories");

?>


<html>

<style>

    #btn_catagory {

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

    table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

    td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

    tr:nth-child(even) {
            background-color: #dddddd;
        }
</style>

    <body>

        <div>

            <form action="./catagories_add.php">

                <input id="btn_catagory" type="submit" name="add_catagory" value="Add Category"> 

            </form>

        </div>

        <div>
        <table>
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Alias</th>
                <th>Status</th>
                <th>Created Time</th>
                <th>Updated Time</th>
                <th>Action</th>
            </tr>
            </thead>

            <tbody>

            <?php
                while($row = $stmt->fetch()){
                    $catagory_id = $row[0];
            ?>

            <tr>
            <td><?php echo $row["id"]; ?></td>
            <td><?php echo $row["name"]; ?></td>
            <td><?php echo $row["alias"]; ?></td>
            <td><?php echo $row["status"] == 1?'Active':'Inactive'; ?></td>
            <td><?php echo date('Y-m-d h:i:s', strtotime($row['created_at'])); ?></td>
            <td><?php echo date('Y-m-d h:i:s', strtotime($row['updated_at'])); ?></td>
            <td> <a href="catagory_update.php?catagory_id=<?php echo $catagory_id; ?>">Update</a> | 
             
            <form method="post" action="./catagory_submit_delete.php">

            <input type="hidden" name="catagory_id" value="<?php echo $catagory_id; ?>">
            <input type="submit" name="catagory_delete_btn" value="Delete">

            </form>
            </td>
            </tr>

            <?php } $conn = null; ?>

            </tbody>

        </table>
        </div>

    </body>

</html>

