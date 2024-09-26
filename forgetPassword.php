<?php
session_start();
$con=mysqli_connect("localhost","root","","amudb");
if(!$con)
{
    echo "connetion faild";
}
if(isset($_POST['submit']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];
    $sql="select * from user where username='$username' and password='$password'";
    $result=mysqli_query($con,$sql);
    $row=mysqli_fetch_array($result);
    
   if($row>0)
   {

    if($row["usertype"]=="admin")
    {
        $_SESSION["username"]=$username;
        header("Location:admin.php");
    }
    elseif($row["usertype"]=="teacher")
    {
        $_SESSION["username"]=$username;
        header("Location:teacher.php");
    }
    elseif($row["usertype"]=="student")
    {
        $_SESSION["username"]=$username;
        header("Location:student.php");
    }
  }

    else
    {
        echo "<script>alert('Incorrect username or password')</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forget Password</title>

    <link rel="shortcut icon" href="Department Head/assets/img/Forget Password.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&amp;display=swap">

    <link rel="stylesheet" href="Department Head/assets/plugins/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="Department Head/assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="Department Head/assets/plugins/fontawesome/css/all.min.css">

    <link rel="stylesheet" href="Department Head/assets/css/style.css">
</head>

<body>

    <div class="main-wrapper login-body">
        <div class="login-wrapper">
            <div class="container">
                <div class="loginbox">
                    <div class="login-left">
                        <img class="img-fluid" src="Department Head/assets/img/Forget Password.png" alt="Logo">
                    </div>

                    <div class="login-right">
                        <div class="login-right-wrap">
                            <h2 class="text-center" style="font-family: cambria;">Please contact registrar office to reset your password.
                            </h2>
                            <div class="text-center bg-info dont-have"><a href="Login.html">Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="Department Head/assets/js/jquery-3.6.0.min.js"></script>

    <script src="Department Head/assets/js/popper.min.js"></script>
    <script src="Department Head/assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <script src="Department Head/assets/js/script.js"></script>
</body>

</html>