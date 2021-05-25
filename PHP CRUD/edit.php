<?php
include("connection.php");

$user_id = $_GET['id'];
$query = ("SELECT * FROM employeedata where id='$user_id'");

$user_data = mysqli_fetch_array(mysqli_query($conn, $query));

if(isset($_POST['submit'])){
    $id=$_POST['id'];
    $username=$_POST['username'];
    $fullname=$_POST['fullname'];

    $query2="UPDATE employeedata set username='$username',firstName='$fullname' where id='$user_id'";

    $update=mysqli_query($conn,$query2);

    if($update) {
        header("location:index.php?message=user updated!<br>");
    }
    else{
        header("location:index.php?message=user has not been updated!<br>");

    }

}


?>





<html>

<head>
    <title>Add Users</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>

<body>
    <div class="container">
        <form action="" method="POST" name="form1">
            <table>
                <input type="hidden" name="user_id" value="<?php echo $user_id ?>">
                <div class="form-group">
                    <label>ID</label>
                    <input type="text" class="form-control" disabled name="id" value="<?php echo $user_data['id'] ?>" id="fname">
                </div>
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control" name="username" value="<?php echo $user_data['username'] ?>" id="lname">
                </div>
                <div class="form-group">
                    <label>FullName</label>
                    <input type="text" class="form-control" name="fullname" value="<?php echo $user_data['firstName'];?>" id="salary">
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</body>

</html>