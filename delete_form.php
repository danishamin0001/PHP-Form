<?php
include "connection.php";

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $sql ="DELETE FROM `users` WHERE `id` =  '$id'";

    if($con->query($sql) == true){
        echo "Record Deleted Succesfully";
        header("Location: read_form.php");

    }else{
        echo "ERROR : $sql <br> $con->error";

    }
}
?>