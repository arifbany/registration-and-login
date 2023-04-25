<?php
session_start();
$login=0;
$invalid=0;

if($_SERVER['REQUEST_METHOD']=='POST'){

    include'connect.php';

    if(isset($_POST['login'])){
        $username=$_POST['username'];
        $password=$_POST['password'];
     

        $sql="select * from data where username='$username' && password='$password'";
        $result=mysqli_query($con,$sql);

        if($result){
            $num=mysqli_num_rows($result);
            if($num>0){
            //echo "login successful";
            $login=1;
            $_SESSION['username']=$username;
            header('location:welcome.php');
                
            }
            else{
                //echo"";
                $invalid=1;
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
if($login){

    echo "
    <div class='alert alert-success' role='alert'>
        User Already Exists!
  </div>
  
    ";
}
else{
    if($invalid){
        echo "
        <div class='alert alert-danger' role='alert'>
        invalid credential;
</div>";

    }
  
}


?>
    
</body>
</html>
