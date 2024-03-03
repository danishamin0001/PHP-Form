<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <title>Update Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Update User's Information</h2>
    
<a class="btn2" href="read_form.php">GO BACK</a>

<?php
include "connection.php";

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $sql = "SELECT * FROM `users` WHERE `id` = '$id'";

    $result = $con->query($sql);

    if($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $name = $row['name'];
        $email = $row['email'];
        $address = $row['address'];
    } else {
        echo "No user found with the given ID.";
    }
}

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];

    $sql = "UPDATE `users` SET `name`='$name',`email`='$email',`address`='$address' WHERE `id`='$id'"; 

    if ($con->query($sql) === TRUE) {
        echo "Record updated successfully";
        header("Location: read_form.php");
    } else {
        echo "Error updating record: " . $con->error;
    }
}
?>

<form action="" method="post">
   <fieldset>
    <legend style="width: 270px;">Please Make Changes</legend>
    Name: <input type="text" name="name" value="<?php echo $name; ?>"><br><br>
    Email: <textarea name="address" cols="30" rows="1">name="email" value="<?php echo $email; ?>"</textarea><br><br>
    Address: <textarea name="address" cols="40" rows="2"> name="address" value="<?php echo $address; ?>"</textarea><br><br>
    <input type="submit" name="submit" value="Update"><br><br>
   </fieldset>
</form>

</body>
</html>

<