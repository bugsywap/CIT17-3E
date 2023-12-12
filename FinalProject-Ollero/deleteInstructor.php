<?php
include 'config.php';
if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];

    $sql = "DELETE From `Instructor` where id = $id";
    $result = mysqli_query($con, $sql);
    if ($result) {
        header('location:displayInstructor.php');
    } else {
        die(mysqli_error($con));
    }
}
