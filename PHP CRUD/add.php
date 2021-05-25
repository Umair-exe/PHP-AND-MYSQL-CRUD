<?php
// include database connection file
include("connection.php");


// Check If form submitted, insert form data into users table.
if (isset($_POST['submit'])) {
    $fname = $_POST['fullname'];
    $id = $_POST['id'];
    $username = $_POST['username'];

    // Insert user data into table
    $result = mysqli_query($conn, "INSERT INTO employeedata(id,username,firstName) VALUES('$id','$username','$fname')");
    if ($result) {
        header("location:index.php");
    } else {
        echo "not inserted!<br>";
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
    <div class="container p-5">
        <form action="" method="POST" name="form1">
            <table>
                <div class="form-group">
                    <label>ID</label>
                    <input type="number" disabled class="form-control" name="id">
                </div>
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control" name="username">
                </div>
                <div class="form-group">
                    <label>FullName</label>
                    <input type="text" class="form-control" name="fullname">
                </div>
                <div style="display: flex; justify-content:center;">
                    <button type="submit" name="submit" class="btn btn-success m-1">Submit</button>
                    <input type="reset" name="cancel" class="btn btn-success m-1">
                </div>
        </form>
    </div>

</body>

</html>