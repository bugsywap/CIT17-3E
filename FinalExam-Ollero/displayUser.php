<?php
include 'config.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Read</title>
</head>

<body>
    <div class="container">
        <button class="btn btn-success my-5"><a href="home.php" class="text-light">Go to home</a></button>
        <button class="btn btn-primary my-5"><a href="users.php" class="text-light">Add User</a></button>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Username</th>
                    <th scope="col">Password</th>
                    <th scope="col">Operations</th>
                </tr>
            </thead>
            <tbody>

                <?php

                $sql = "SELECT * FROM `Users`";
                $result = mysqli_query($con, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                        $username = $row['username'];
                        $password = $row['password'];

                        echo '<tr>
                    <th scope="row">' . $id . '</th>
                    <td>' . $username . '</td>
                    <td>' . $password . '</td>
                    
                    <td>
                    <button class = "btn btn-primary"><a href="updateUser.php?updateid=' . $id . '" class = "text-light">Update User</a></button>
                    <button class = "btn btn-danger"><a href="deleteUser.php?deleteid=' . $id . '" class = "text-light">Delete User</a></button>
                </td>
                </tr>';
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>