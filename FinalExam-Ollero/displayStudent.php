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
        <button class="btn btn-primary my-5"><a href="student.php" class="text-light">Add Student</a></button>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Address</th>
                    <th scope="col">Operations</th>
                </tr>
            </thead>
            <tbody>

                <?php

                $sql = "SELECT * FROM `Student`";
                $result = mysqli_query($con, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                        $name = $row['name'];
                        $email = $row['email'];
                        $address = $row['address'];

                        echo '<tr>
                    <th scope="row">' . $id . '</th>
                    <td>' . $name . '</td>
                    <td>' . $email . '</td>
                    <td>' . $address . '</td>
                    <td>
                    <button class = "btn btn-primary"><a href="updateStudent.php?updateid=' . $id . '" class = "text-light">Update Student</a></button>
                    <button class = "btn btn-danger"><a href="deleteStudent.php?deleteid=' . $id . '" class = "text-light">Delete Student</a></button>
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