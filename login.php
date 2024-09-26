
<?php
session_start();
$con=mysqli_connect("localhost","root","","sis");
if(!$con)
{
    echo "connection failed";
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

    if($row["user type"]=="head")
    {
        $_SESSION["username"]=$username;
        header("Location:Head.php");
    }
    elseif($row["user type"]=="teacher")
    {
        $_SESSION["username"]=$username;
        header("Location:teacher.php");
    }
    elseif($row["user type"]=="student")
    {
        $_SESSION["username"]=$username;
        header("Location:students.php");
    }
    elseif($row["user type"]=="registrar")
    {
        $_SESSION["username"]=$username;
        header("Location:Registerer.php");
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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&amp;display=swap">
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="assets/plugins/fullcalendar/fullcalendar.min.css">

    <title>Login</title>
    <link rel="shortcut icon" href="assets/img/amu_logo.png">
    <link rel="stylesheet" href="assets/style1.css">
</head>

<body class="bg-img font-weight-bold">
    <div class="container-fluid text-white font-weight-bold pad-top">
        <div class="row">
            <div class="col-lg-4">

            </div>
            <div class="col-lg-4 bg-dark round">
                <h1 class="text-center font-weight-bold">Login</h1>
              

				<table class="table text-white">
				<form action="#" method="POST">
                    <tr>
                        <td>Username: </td>
                    </tr>
                    <tr>
                        <td><input type="text" name="username" class="form-control" placeholder="Enter username.."></td>
                    </tr>
                    <tr>
                        <td>Password: </td>
                    </tr>
                    <tr>
                        <td><input type="password"  name="password" class="form-control" placeholder="Enter your password..."></td>
                    </tr>
                    <tr class="text-center">
						<td><button name="submit" class="btn btn-secondary">Login</button></td>
                    </tr>
				</form>
                    <tr>
                        <td>
                            &nbsp;&nbsp;&nbsp;
                            <input type="checkbox" id="check">
                            <label for="check"><abbr style="text-decoration: none;"
                                    title="Another time you come to this page, we add your password directly."
                                    class="rem">
                                    Remember Password</abbr>
                            </label>
                        </td>
                        <td><a href="forgetPassword.php" class="forget">Forget Password?</a></td>
                    </tr>
                </table>
            </div>
            <div class="col-lg-4">
            </div>

        </div>
    </div>
</body>

</html>