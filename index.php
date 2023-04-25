<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link href="style.css" rel="stylesheet">

  </head>

    <title>Login form</title>
</head>
<body>
    <div class="container my-5">
        <div class="row">
        <div class="col-md-6 col-xm-12">

            <h1 class="text-center">Sign Up</h1>


    <form action="signup.php" method="post">
            <div class="form-group">
                <label for="username" class="my-2">UserName</label>
                <input type="text" class="form-control" id="username" placeholder="Enter UserName" autocomplete="off" name="username">

            </div>



            <div class="form-group">
                <label for="password" class="my-2">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Enter Your Password" autocomplete="off" name="password">

            </div>



            <div class="form-group">
                <label for="cpassword" class="my-2">Confirm Password</label>
                <input type="password" class="form-control" id="cpassword" placeholder="Confirm Your Password" autocomplete="off" name="cpassword">

            </div>
                    <button type="submit" class="btn btn-success w-100 my-5" name="signup">Sign Up</button>
</form>
</div>

        <div class="col-md-6 col-xm-12 my-5">

<h1 class="text-center">Log In</h1>


<form action="login.php" method="post">
<div class="form-group">
    <label for="username" class="my-2">UserName</label>
    <input type="text" class="form-control" id="username" placeholder="Enter UserName" autocomplete="off" name="username">

</div>
<div class="form-group">
    <label for="password" class="my-2">Password</label>
    <input type="password" class="form-control" id="password" placeholder="Enter Your Password" autocomplete="off" name="password">

</div>
<button type="submit" class="btn btn-dark w-100 my-5" name="login">Log In</button>
</form>
</div>

    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
