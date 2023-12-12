<?php
include('config.php');
if (isset($_POST['submit'])) {

  $name = $_POST['name'];
  $email = $_POST['email'];
  $specialty = $_POST['specialty'];

  $sql = "INSERT into `Instructor`(name,email,specialty)
  VALUES('$name','$email','$specialty')";
  $result = mysqli_query($con, $sql);
  if ($result) {
    header('location: displayInstructor.php');
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
        <input type="text" class="form-control" placeholder="Enter your name" name="name" autocomplete="off">
      </div>
      <div class="form-group">
        <label>Email</label>
        <input type="email" class="form-control" placeholder="Enter your email" name="email" autocomplete="off">
      </div>
      <div class="form-group">
        <label>Specialty</label>
        <input type="text" class="form-control" placeholder="Enter your specialty" name="specialty" autocomplete="off">
      </div>
      <button type="submit" class="btn btn-primary my-3" name="submit">Submit</button>
    </form>
  </div>
</body>

</html>