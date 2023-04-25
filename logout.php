<?php
include 'connect.php';
session_start();
if (!isset($_SESSION['username'])) {
    header('location:index.php');
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
        rel="stylesheet">
    <title>Welcome page</title>
</head>
<body>
    <div class="container">


<div class="container mt-3">

  <div class="mt-4 p-5 bg-primary text-white rounded">
    <h1>Welcome <?php echo $_SESSION['username'] ?></h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
         Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
          nisi ut aliquip ex ea commodo consequat..</p>
  <p class="lead">
    <a class="btn btn-danger btn-lg" href="logout.php" role="button">Log Out

    </a>
  </p>

        </div>
</div>

    </div>

</body>
</html>
