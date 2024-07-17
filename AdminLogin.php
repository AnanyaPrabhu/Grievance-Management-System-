<?php
require("Connection.php");


?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin login page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- <link rel="stylesheet" type="text/css" href="mycss.css">-->

    <style>
        .container{
            background-color:#fff;
            border-radius:30px;
            width:450px;
            height:400px;
            
            display:block !important;
            justify-content:center !important;
           margin-top:100px !important;
           margin-left:550px !important;
            
        }
        body{
            background-color:lightblue;
        }
        .btn{
            display:flex;
            justify-content:center !important;
            text-transform:uppercase!important;
            font-weight:600;

        }
        .nm{
            margin-top:25px !important;
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
    <table align="center">
    <div class="container mt-5">
        <br><h1>ADMIN LOGIN</h1><br>
        <form action="AdminLogin.php" method="POST" >

            <div class="form-field md-6">
                <!--<i class="fas fa-user"></i>-->
                <label>Admin Name</label>
                <input type="text" class="form-control" placeholder="Admin Name" name="AdminName">
</div>

            <div class="form-field  nm md-6">
                <i class="fas fa-user"></i>
                <label>Admin Password</label>
                <input type="password" class="form-control" placeholder="Password" name="AdminPassword">
</div>
<br><button type="submit" class="btn btn-primary mx-auto" name="Signin">Sign In</button> 
<!--<div class="extra">
    <a href="#">Forgot Password ?</a>
</div>-->
</form>
</div>

<?php
if(isset($_POST['Signin']))
{
    $query="SELECT * FROM admin_login WHERE Admin_Name='$_POST[AdminName]' AND Admin_Password='$_POST[AdminPassword]'";
   $result=mysqli_query($con,$query);
   if(mysqli_num_rows($result)==1)
   {
     session_start();
     $_SESSION['AdminLoginId']=$_POST['AdminName'];
     header('location:http://localhost/WLCM/Adminindex.html');
   }
   else{
    echo "<script>alert('Incorrect Password');</script>";
   }
}

?>


</body>
</html>