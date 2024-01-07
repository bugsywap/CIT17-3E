<?php
include('config.php');
if (isset($_POST['submit'])) {

  $username = $_POST['username'];
  $password = $_POST['password'];

  $sql = "INSERT into `Users`(username,password)
  VALUES('$username','$password')";
  $result = mysqli_query($con, $sql);
  if ($result) {
    header('location: displayUser.php');
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
        <label>Username</label>
        <input type="text" class="form-control" placeholder="Enter your username" name="username" autocomplete="off">
      </div>
      <div class="form-group">
        <label>Password</label>
        <input type="password" class="form-control" placeholder="Enter your password" name="password" autocomplete="off">
      </div>
      <button type="submit" class="btn btn-primary my-3" name="submit">Submit</button>
    </form>
  </div>
</body>

</html>