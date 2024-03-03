<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>All Users</h2>
<a class="btn2" href="form2.php">Add New</a>

<table class="table">
    <th>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>Action</th>
        </tr>
    </th>
    <tbody>
        <?php
        include "connection.php";
        $s_sql= "SELECT * FROM users ";
        $result = $con->query($s_sql);

        if($result->num_rows > 0){
            while ($row = $result->fetch_assoc()){

        ?>

            <tr>
                <td><?php echo $row['id'];?></td>
                <td><?php echo $row['name'];?></td>
                <td><?php echo $row['email'];?></td>
                <td><?php echo $row['address'];?></td>
                <td><a class="btn btn-info" href="edit_form.php?id=<?php echo $row['id']; ?>">Update</a>&nbsp;<a class="btn btn-danger" href="delete_form.php?id=<?php echo $row['id']; ?>">Delete</a></td>
            </tr>

            <?php
            }
        }

        ?>
    </tbody>
</table>
    

</body>
</html>