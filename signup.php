<?php

$user=0;
$success=0;
$match=0;
if($_SERVER['REQUEST_METHOD']=='POST'){

    include'connect.php';

    if(isset($_POST['signup'])){

        $username=$_POST['username'];
        $password=$_POST['password'];
        $cpassword=$_POST['cpassword'];
    

  //  $sql="insert into data (username,password) values('$username','$password')";
    //$result=mysqli_query($con,$sql);
   // if($result){
   //     echo "data is inserted successfully";
    //}
   // else{
   //     die(mysqli_error($con));
  //  }

  $sql="select * from data where username='$username'";
  $result=mysqli_query($con,$sql);
  if($result){
    $num=mysqli_num_rows($result);
    if($num>0){
        //echo "user already exist";
        $user=1;
    }
    else{

        if($password==$cpassword){

            
        $sql="insert into data (username,password) values('$username','$password')";
        $result=mysqli_query($con,$sql);
    
        if($result){
            //echo "signup seccessfully";
            $success=1;
    
        }


        }

    else{
       //echo"password didnot match";
       $match=1;
    } 

    }
}




    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    <?php
if($user){

    echo "
    <div class='alert alert-danger' role='alert'>
        User Already Exists!
  </div>
  
    ";
}
else{
    if($success){
        echo "
        <div class='alert alert-success' role='alert'>
 sign up seccessful;
</div>";

    }
    else{
        if($match){
            echo "
            <div class='alert alert-danger' role='alert'>
     password did not match;
    </div>";
        }
    }
}


?>
    
</body>
</html>
