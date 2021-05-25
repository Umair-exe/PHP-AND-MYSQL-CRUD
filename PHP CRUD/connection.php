<?php
$conn=mysqli_connect("localhost","root","","test");
if($conn) {
    echo "connected!<br>";
}
else {
    echo "not connected!<br>";
}
?>