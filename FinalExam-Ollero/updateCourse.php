<?php
include 'config.php';
$id = $_GET['updateid'];
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $description = $_POST['description'];

    $sql = "UPDATE `Course` SET id=$id,name='$name',description='$description' WHERE id=$id";
    $result = mysqli_query($con, $sql);
    if ($result) {
        header('location: displayCourse.php');
    } else {
        die(mysqli_error($con));
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Student Information System</title>
</head>

<body>
<div class="container">
    <button class="btn btn-success my-5"><a href="home.php" class="text-light">Go to home</a></button>
  </div>
    <div class="container">
        <form method="POST">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Enter course name" name="name" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Description</label>
                <input type="description" class="form-control" placeholder="Enter course description" name="description" autocomplete="off">
            </div>
            <button type="submit" class="btn btn-primary my-3" name="submit">Update</button>
        </form>
    </div>
</body>

</html>