<?php
require 'C:\Apache24\htdocs\index.php';
$sql = "select * from students.student";
$result = mysqli_query($con, $sql);



?>

<html>
<title>student page</title>

<table align=centre border="1px">
    <tr>
        <th align="centre" colspan="5">
            <h2>student</h2>
        </th>

    </tr>


    <t>
        <td>ID</td>
        <td>student_name</td>
        <td>student_number</td>
        <td>student_age</td>


    </t>

    <?php
    while ($rows = mysqli_fetch_array($result, MYSQLI_ASSOC)) { ?>


        <tr>
            <h1>
                <td><?php echo $rows['ID']; ?></td>
            </h1>
            <td><?php echo $rows['student_name']; ?></td>
            <td><?php echo $rows['student_number']; ?></td>
            <td><?php echo $rows['student_age']; ?></td>


        </tr>
    <?php
    }
    ?>
</table>
</div>

</html>