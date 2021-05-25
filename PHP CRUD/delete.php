<?php
include('connection.php');
$user_id=$_GET['id'];

$query=mysqli_query($conn,"DELETE FROM employeedata where id='$user_id'");

if($query){
header("location:index.php?message=deleted successfully");
}
else {
        header('location:index.php?message="not deleted"');
        
}
?>