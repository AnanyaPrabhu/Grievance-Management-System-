<?php
require_once('config/db1.php');
$query="SELECT * from comp2";
$result=mysqli_query($con,$query);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Water Department</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="css/custom.css" />
    <!-- <link rel="icon" type="image/x-icon" href="custom.css" /> -->
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <style>
        .clicked{
            background-color:green;
        }
        .press{
            background-color:black;
        }
        </style>
</head>

<body class="d-flex flex-column" style="background-color: aquamarine;">
    <main class="flex-shrink-0">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-info">
            <div class="container px-5">
                <a class="navbar-brand" href="index.html"><b>Grievance Management System</b></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation"><span
                        class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
                        <!-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdownBlog" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">Grievance Department</a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownBlog">
                                <li><a class="dropdown-item" href="prac.php">Water</a></li>
                                <li><a class="dropdown-item" href="blog-post.html">Electricity</a></li>
                                <li><a class="dropdown-item" href="blog-post.html">Infrastructure</a></li>
                                <li><a class="dropdown-item" href="blog-post.html">Transport</a></li>
                            </ul>
                        </li> -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdownBlog" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false" onclick="click">Authorization</a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownBlog">
                                <li><a class="dropdown-item" href="w1.php">Water</a></li>
                                <li><a class="dropdown-item" href="w2.php">Electricity</a></li>
                                <li><a class="dropdown-item" href="w3.php">Infrastructure</a></li>
                                <li><a class="dropdown-item" href="w4.php">Transport</a></li>
                            </ul>
                        </li>

                        <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                        <li class="nav-item"><a class="nav-link" href="http://localhost/WLCM/front.html">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="row mt-2">
                <div class="col">
                    <div class="card mt-2">
                        <div class="card-header">
                            <h2 class="display-6 text-center"><i> List of Complaints</i></h2>
                         </div>
                         <div class="card-body">
                            <table class="table table-bordered text-center">
                                <tr class="bg-dark text-white">
                                    <td>Reference Number</td>
                                    <td>Name</td>
                                    <td>Mobile Number</td>
                                    <td>Email</td>
                                    <td>Complaint date</td>
                                    <td>Address</td>
                                    <td>Complaint details</td>
                                    <!-- <td>Upload</td> -->
                                    <td>Approve</td>
                                    <td>Reject</td>
                                  </tr>
                                  <tr>
                                    <?php
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                      ?>
                                      <td><?php echo $row['num']; ?></td>
                                      <td><?php echo $row['username']; ?></td>
                                      <td><?php echo $row['mobnum']; ?></td>
                                      <td><?php echo $row['email']; ?></td>
                                      <td><?php echo $row['comdate']; ?></td>
                                      <td><?php echo $row['uaddress']; ?></td>
                                      <td><?php echo $row['comdetails']; ?></td>
                                      <!-- <td><?php echo $row['upload']; ?></td> -->
                                      <td><a href="#" class="btn btn-primary" onclick="app(this)">Approve</td>
                                      <td><a href="#" class="btn btn-danger" onclick="re(this)">Reject</td>
                                     </tr>
                                      <?php
                                    }
                                    ?>
                                    
                                  
                             </table>
                         </div>
                                </div>
                                </div>
                                </div>
                                </div>


  <script>
function app(button){
button.classList.add('clicked');
}
function re(button){
    button.classList.add('press')
}
    </script>










    </main>
    
    <!-- Footer-->
    <footer class="bg-dark py-4 mt-auto">
        <div class="container px-5">
            <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                <div class="col-auto">
                    <div class="small m-0 text-white">Copyright &copy; Your Website 2023</div>
                </div>
                <div class="col-auto">
                    <a class="link-light small" href="#!">Privacy</a>
                    <span class="text-white mx-1">&middot;</span>
                    <a class="link-light small" href="#!">Terms</a>
                    <span class="text-white mx-1">&middot;</span>
                    <a class="link-light small" href="#!">Contact</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>

</body>

</html>