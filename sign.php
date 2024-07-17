<?php
$success=0;
$user=0;

if($_SERVER['REQUEST_METHOD']=='POST')
{
    include 'connect.php';
    $username=$_POST['username'];
    $password=$_POST['password'];

    
    $sql="SELECT * from registrations where username='$username'";
    $result=mysqli_query($con,$sql);
    if($result)
    {
        $num=mysqli_num_rows($result);
        if($num>0)
        {
          //  echo "User already exist";
          $user=1;
        }
        else
        {
            $sql="INSERT into registrations(username,password) values('$username','$password')";
             $result=mysqli_query($con,$sql);
             if($result)
             {
                     //echo "Signup successfull ";
                     $success=1;
                     header('location:login.php');
              }
              else
              {
                     die(mysqli_error($con));
              }


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

    <title>Signup page</title>
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
        body{
            background-color:lightblue;
        }
        .btn{
            display:flex;
            justify-content:center;
            text-transform:uppercase!important;
            font-weight:600;
        }
        .nm{
            margin-top:20px;
        }
        h1{
            text-align:center;
            padding:10px;
            color:#687EFF;
            font-weight:700;
        }
        label{
            color:#687EFF;
            font-weight:600;
            font-size:20px; 

        }
        input{
            border-radius: 20px !important;
            height:40px !important;
        }
    
    </style>
  </head>
  <body>
    <?php
    if($user){
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong></strong> You already have an account
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
    }
    
  ?>

<?php
    if($success){
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success </strong> You are successfully signed up.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
    }
    
  ?>
  
  
  <table align="center">
    <div class="container mt-5">
        <br><h1>SIGN UP</h1>
    <form action="sign.php" method="post">
        
        
  <div class="form-group nm md-6">
    <label>Name</label>
    <input type="text" class="form-control"  placeholder="Enter your name" name="username" required>
    
  </div>
  <div class="form-group md-6">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control"  placeholder="Enter your password" name="password" required>
  </div>
  
  <button type="submit" class="btn btn-primary mx-auto">Sign up</button>
  
</form><h6><b><br>Already have an account ?  <a href="http://localhost/WLCM/login.php">Login now</a></b></h6>

</div>
  </table>
  </body>
</html>