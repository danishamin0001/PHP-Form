<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Create a New User</h2>
<a class="btn2" href="read_form.php">View Users</a>

<form action="form2.php" method="post">  
    <fieldset>
        <legend>Enter Details</legend>
        <label for="name">Name:</label>
        <input type="text" name="name" required><br><br>
        <label for="email">Email:</label>
        <textarea name="email" cols="30" rows="1"></textarea><br><br>
        <label for="address">Address:</label>
        <textarea name="address" id="1" cols="40" rows="2"></textarea><br><br>
        <input type="submit" name="submit" value="Submit" ><br><br>

    </fieldset>
</form>

<?php

include "connection.php";
$url ='read_form.php';
$name = $email = $address = 0;

    if(isset($_POST['submit'])){

        $name = $_POST['name'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        // echo 'ok';
    }

    if($sql = "SELECT * FROM `users` == true"){
        // echo "Table Selected";
    }

    $sql = "INSERT INTO `users`(`name`, `email`, `address`) VALUES ('$name','$email','$address')";
    
    if (isset($_POST['submit'])){

        $result = $con->query($sql);
        header("Location: read_form.php");
    }

    

?>

    
</body>
</html>