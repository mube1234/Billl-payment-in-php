<?php
include ('config.php');
$id=$_GET['id'];
$delete_user="DELETE FROM users WHERE Id='$id'";

if(mysqli_query($conn,$delete_user)){
    echo "record success deleted";
    header("Location:http://localhost/books/app/user-management.php");
}
else{
    die("error.".mysqli_error($conn));
}
?>