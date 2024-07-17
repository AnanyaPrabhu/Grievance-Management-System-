<?php
$HOSTNAME='localhost';
$USERNAME='root';
$PASSWORD='';
$DATABASE='admin1';

$con=mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABASE);
?>


    <?php
    $number="CMP-0000001";
    $query="SELECT num from comp2 order by num desc";
    $result=mysqli_query($con,$query);
    $row=mysqli_fetch_array($result);
    // $lastid=$row['num'];
    if ($row !== null) {
        $lastid = $row['num'];
        // Rest of your code
        if (empty($lastid))
        {
            $number="CMP-0000001";
        }   
        else
        {
            $idd=str_replace("CMP-","",$lastid);
            $idd=(int)$idd;
            $id=str_pad($idd + 1,7,0, STR_PAD_LEFT);
            $number='CMP' . $id;
        }
    // } else {
        // Handle the case where no more rows are available
        // echo "No more rows to fetch.";
    }
    
    // if (empty($lastid))
    // {
    //     $number="CMP-0000001";


    // }   
    // else
    // {
    //     $idd=str_replace("CMP-","",$lastid);
    //     $id=str_padd($idd +1,7,0, STR_PAD_LEFT);
    //     $number='CMP' .$id;
    // }
    ?>
    <?php 
    
    if($_SERVER['REQUEST_METHOD']=='POST'){

            // include 'w.php';
            $refnum=$_POST['num'];
            $name=$_POST['username'];
            $mobile=$_POST['mobnum'];
            $email=$_POST['email'];
            $date=$_POST['comdate'];
            $address=$_POST['uaddress'];
            $details=$_POST['comdetails'];
            $upload=$_POST['upload'];
    
    if(!$con){
        die("Connection falied"  .mysqli_connec_error());
    }
    else{
        $sql = "INSERT INTO comp2 (num,username, mobnum, email, comdate, uaddress, comdetails, upload) 
        VALUES ('$refnum','$name', '$mobile', '$email', '$date', '$address', '$details', '$upload')";

    if(mysqli_query($con,$sql)){
        $query="SELECT num from comp2 order by num desc";
    $result=mysqli_query($con,$query);
    $row=mysqli_fetch_array($result);
    if ($row !== null) {
        $lastid = $row['num'];
        // Rest of your code
        if ($lastid == null)
        {
            $number="CMP-0000001";
        }   
        else
        {
            $idd=str_replace("CMP-","",$lastid);
            $idd=(int)$idd;
            $id=str_pad($idd + 1,7,0, STR_PAD_LEFT);
            $number='CMP' . $id;
        }
    } else {
        // Handle the case where no more rows are available
        echo "No more rows to fetch.";
    }

    }
}
}
    



?>






<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!-- <meta http-equiv="refresh" content ="10 url=http://localhost/WLCM/index.html"/> -->
    <title>Water Department</title>
    
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="css/custom.css" />
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    
    <link href="css/styles.css" rel="stylesheet" />
    <style>
        #reference{
            width:370px;
            padding:8px;
        }
        .refnum{
           padding-right:230px;
        }
        </style>
</head>

<body class="d-flex flex-column">

<!-- <body class="d-flex flex-column" onload="myFunction()"> -->
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
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdownBlog" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">Grievance Department</a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownBlog">
                                <li><a class="dropdown-item" href="prac.php">Water</a></li>
                                <li><a class="dropdown-item" href="prac1.php">Electricity</a></li>
                                <li><a class="dropdown-item" href="prac2.php">Infrastructure</a></li>
                                <li><a class="dropdown-item" href="prac3.php">Transport</a></li>
                            </ul>
                        </li>
                       
                        <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                        <li class="nav-item"><a class="nav-link" href="http://localhost/WLCM/front.html">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <form action="<?php echo($_SERVER["PHP_SELF"])?>" method="post">

            <header class="p-3 mb-2 bg-secondary text-white">
                <div class="container1" align="center"><br>
                    <h1><i><u>Grievance Registration Form</u><br></i></h1>

                    <div class="form-group">
                        <label class="refnum">Reference Number</label>
                        <input type="text" class="form-control" id="reference" name="num" value="<?php echo $number; ?>" required>
                    </div>
                    <div class="form-group">
                        <label class="name">Name</label>
                        <input type="text" class="form-control" id="exampleInputName" placeholder="Enter your name"
                            name="username" required>
                    </div>
                    <div class="form-group">
                        <label class="phone">Mobile No</label>
                        <input type="text" class="form-control" id="Mobile" name="mobnum" placeholder="+918765347897"
                            required>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" name="email"
                                placeholder="abc@gmail.com" required>
                            
                        </div>
                        <div class="form-group">
                            <label  for="exampleInputDate"class="date">Complaint Date</label>
                            <input type="date" class="form-control" id="exampleInputDate" name="comdate" max="" min="" value="" required>
                            
                        </div>
                        <div class="form-group">
                            <label class="address">Address</label>
                            <textarea class="form-control" id="exampleAdd" placeholder="Brief your address"
                                name="uaddress" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label class="complaint">Complaint Details</label>
                            <textarea class="form-control" id="exampleCom"
                                placeholder=" Enter the details about your complaint" name="comdetails"
                                rows="3"></textarea>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Upload Files/Audio/Video</label>
                            <input class="form-control" type="file" name="upload" id="formFileMultiple" multiple>
                        </div>


                        
                        <br><button class="btn btn-primary" id="submitButton" type="submit"
                            onclick="message()">Submit</button>
                            <!-- <a class="btn btn-primary" href="http://localhost/WLCM/index.html" role="button"  id="submitButton" type="submit" onclick="message()">Submit</a> -->
                        <div class="message">
                            <div class="success" id="success" > </div>
                            <div class="danger" id="danger"></div>
 

                        <script src="js/button.js"></script>
                        <script>
                    
                         function getCurrentDate(){                    
                             const date=new Date();
                             console.log(date);

                             let d=date.getDate();
                             let m=date.getMonth() + 1;
                             let y=date.getFullYear();

                            if(d<10) d='0'+d;
                            if(m<10) m='0'+m;

                            let CurrDate=y +'-'+ m +'-' + d;
                            return CurrDate;
                        }
                        const exampleInputDate= document.getElementById('exampleInputDate');
                        exampleInputDate.setAttribute('min',getCurrentDate());
                        exampleInputDate.setAttribute('max',getCurrentDate());
                        exampleInputDate.setAttribute('value',getCurrentDate());
        
                       </script>
                        <!-- <script>
                              function myFunction(){
                               window.location.href='http://localhost/WLCM/index.html';
                              }
                        </script> 
      -->


            </header>
        </form>

        <marquee>
            <div class="col-xl-4">
                <div class="card border-0 h-100">
                    <div class="card-body p-4">
                        <div class="text-center">
                            <div class="h6 fw-bolder">
                                <h3>Contact</h3>
                            </div>
                            <p class="text-muted mb-4">
                                For more inquiries, visit us on
                                <br />
                                <a href="#!">www.enquiry.com</a>
                            </p>
                            <div class="h6 fw-bolder">Follow us</div>
                            <a class="fs-5 px-2 link-dark" href="#!"><i class="bi-twitter"></i></a>
                            <a class="fs-5 px-2 link-dark" href="#!"><i class="bi-facebook"></i></a>
                            <a class="fs-5 px-2 link-dark" href="#!"><i class="bi-linkedin"></i></a>
                            <a class="fs-5 px-2 link-dark" href="#!"><i class="bi-youtube"></i></a>
       
             </div>
                  </div>
                      </div>
                           </div>
         </marquee>
        </section>
        
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
    <script src="js/scripts.js">
    </script>
    
   
</body>
</html>
