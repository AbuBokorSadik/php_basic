<?php

require_once('./isAuthenticate.php');
require_once('./dbconnection.php');

$stmt = $conn->query("select * from catagories");

?>


<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_sidebar.css">
</head>

    <body>

        <?php include_once('sidebar.php') ?>

        <div class="content">

        <section>
            <nav>
                <div class="nav-link">
                    <ul>
                        <form action="./product_add.php">
                            <input id="btn_catagory" type="submit" name="add_catagory" value="Add Category"> 
                        </form>
                    </ul>
                </div>
            </nav>
        </section>

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

            <td> 
                
                <form method="get" action="./catagory_update.php">
                    <input type="hidden" name="catagory_id" value="<?php echo $catagory_id; ?>">
                    <input id="btn_update" type="submit" name="catagory_update_btn" value="Update">
                </form>
             
                <form method="post" action="./catagory_submit_delete.php">
                    <input type="hidden" name="catagory_id" value="<?php echo $catagory_id; ?>">
                    <input id="btn_update" type="submit" name="catagory_delete_btn" value="Delete">
                </form>
            
            </td>
            </tr>

            <?php } $conn = null; ?>

            </tbody>

        </table>
        </div>

    </body>

</html>

