<?php

include_once('./dbconnection.php');
    if($_POST){
        print_r($_POST);
    }

$sql = "insert into student(st_name, st_gender, st_mobile) values('{$_POST[txt1]}', '{$_POST[txt2]}', {$_POST[txt3]})";
$res = $conn->exec($sql);
echo "<br>" . $res;
$conn = null;

?>


<html>

    <body>

        <form method="post">

            <table>

                <tr>

                    <td> Name </td>
                    <td> <input type="text" name="txt1" placeholder="Enter Name" required="true"> </td>

                </tr>

                <tr>

                    <td> Gender </td>
                    <td>
                        <select name="txt2">
                            <option> Male </option>
                            <option> Female </option>
                        </select> 
                    </td>

                </tr>

                <tr>

                    <td> Mobile </td>
                    <td> <input type="text" name="txt3" placeholder="Enter Mobile" required="true"> </td>

                </tr>

                <tr>
                    <td> </td>
                    <td> <input type="submit" value="Insert Record"> </td>
                </tr>

            </table>

        </form>

    </body>

</html>