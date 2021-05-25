<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>

<body>
    <?php
    include("connection.php");

    $query = "SELECT * FROM employeedata";
    $fetch = mysqli_query($conn, $query);


    ?>
    <div class="container">
        <table class="table table-striped text_center">
            <thead>
                <tr>
                    <th class="icon-arrow-up">ID</th>
                    <th>Username</th>
                    <th>FullName</th>
                    <th colspan="2"></th>
                </tr>
            </thead>
            <tbody>
                <?php while ($res = mysqli_fetch_array($fetch)) { ?>
                    <tr>
                        <td><?php echo $res['id'] ?></td>
                        <td><?php echo  $res['username'] ?></td>
                        <td><?php echo $res['firstName']; ?></td>
                        <td><button class="btn btn-warning"><a href="edit.php?id=<?php echo $res['id'] ?>" style="color:white">Edit</a></button></td>
                        <td><button class="btn btn-danger" onclick="delete_row(<?php echo $res['id'] ?>)">Delete</button></td>
                        
                    </tr>
                <?php } ?>
            </tbody>

        </table>
        <div style="padding:10px; display:flex; justify-content:center;">
            <button class="btn btn-success"><a href="add.php" style="color:white; padding:15px;">Add New</a></button>
        </div><br>
    </div>

    <?php
    if(isset($_GET['message'])) {
        echo '<div style= "background-color:red;color:white;display:flex;justify-content:center;width:400px;margin-left:500px;">
            <strong>' . $_GET['message'].'</strong>
        </div>';
    }
    ?>

    <script>
        function delete_row(id) {
            if (confirm("do you want to delete")) {
                window.location.href = "delete.php?id=" + id;
            }
        }
    </script>

</body>

</html>

