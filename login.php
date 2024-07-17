<?php
//$success=0;
//$user=0;
$login=0;
$invalid=0;
if($_SERVER['REQUEST_METHOD']=='POST')
{
    include 'connect.php';
    $username=$_POST['username'];
    $password=$_POST['password'];


    $sql="SELECT * from registrations where username='$username' and password='$password'";
    $result=mysqli_query($con,$sql);
    if($result)
    {
        $num=mysqli_num_rows($result);
        if($num>0)
        {
          //  echo "User already exist";
         // $user=1;
        // echo "Login successful";
        $login=1;
        session_start();
        $_SESSION['username']=$username;
        header('location:http://localhost/WLCM/index.html');
        }
        else
        {
              //echo "Invalid data";
              $invalid=1;

            


        }
    }
}
?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Login page</title>
    <style>
        .container
        {
            background-color:#fff;
            border-radius:30px;
            width:400px;
            height:400px;
            display:block;
            justify-content:center;
           margin-top:100px !important;
        }
        
        body
        {
            background-color:lightblue;
        }

        .btn
        {
            display:flex;
            justify-content:center;
            text-transform:uppercase!important;
            font-weight:600;

        }
        
        .nm
        {
            margin-top:20px;
        }

        h1
        {
            text-align:center;
            padding:10px;
            color:#687EFF;
            font-weight:700;
        }
        
        label
        {
            color:#687EFF;
            font-weight:600;
            font-size:20px; 

        }
        
        input
        {
            border-radius: 20px !important;
            height:40px !important;
        }
    
    </style>
  </head>
  <body>
  <?php
    if($login)
    {
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success </strong> You are successfully logged in.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
    }
    
  ?> 
  <?php
    if($invalid)
    {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error </strong> Invalid credentials.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
    }
    
  ?>
  
  
<table align="center">
  <div class="container mt-5">
        <br><h1>LOGIN</h1>
    <form action="login.php" method="post">
        
        
      <div class="form-group nm md-6">
        <label>Name</label>
          <input type="text" class="form-control"  placeholder="Enter your name" name="username" required>
            <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
  </div>
  <div class="form-group md-6">
       <label for="exampleInputPassword1">Password</label>
         <input type="password" class="form-control"  placeholder="Enter your password" name="password" required>
  </div>
    <button type="submit" class="btn btn-primary mx-auto">Login</a></button>
  

     </form>

  </div>
</table>
  </body>
</html>