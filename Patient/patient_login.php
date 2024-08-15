<?php 
//include("Header.php");
include("dbconnect.php");

error_reporting(0);
session_start();
if(isset($_POST['btn_login']))
{
$username=$_POST["username"];
  $password=$_POST["password"];
  $error="";

        $sql = "select * from tbl_patient_signup where username = '".$username."' and pass_word = '".$password."'";  
        $result = mysqli_query($conn,$sql);  
        $row = mysqli_fetch_array($result);  
        $count = mysqli_num_rows($result);  
        
         if($count == 1){

           $_SESSION['pid']=$row['sign_ID'];
            $_SESSION['pname']=$row['full_name'];
           echo "Login Successfull <script>window.location.href = 'view_docters.php'</script>";

        }  
        else{  
              
              echo "<script>alert('Login Failed... Invalid username Password')</script>";
        }
}

?>
<!DOCTYPE html>
<html lang="zxx">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="Orbitor,business,company,agency,modern,bootstrap4,tech,software">
  <meta name="author" content="themefisher.com">

  <title>SIT HOSPITAL SYSTEAM</title>

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="/images/favicon.ico" />

  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="../plugins/bootstrap/css/bootstrap.min.css">
  <!-- Icon Font Css -->
  <link rel="stylesheet" href="../plugins/icofont/icofont.min.css">
  <!-- Slick Slider  CSS -->
  <link rel="stylesheet" href="../plugins/slick-carousel/slick/slick.css">
  <link rel="stylesheet" href="../plugins/slick-carousel/slick/slick-theme.css">

  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="../css/style.css">
  <script src="validation.js"></script>

<style type="text/css">
  
</style>
</head>

<body id="top">

<header>
  <div class="header-top-bar">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <ul class="top-bar-info list-inline-item pl-0 mb-0">
            <li class="list-inline-item"><a href="mailto:support@gmail.com"><i class="icofont-support-faq mr-2"></i>sithospital@gmail.com</a></li>
            <li class="list-inline-item"><i class="icofont-location-pin mr-2"></i>Address Main Road,Ichalkaranji</li>
          </ul>
        </div>
        <div class="col-lg-6">
          <div class="text-lg-right top-right-bar mt-2 mt-lg-0">
            <a href="tel:+23-345-67890" >
              <span>Call Now : </span>
              <span class="h4">8956231245</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <nav class="navbar navbar-expand-lg navigation" id="navbar">
    <div class="container">
       <a class="navbar-brand" href="../index.html">
          <h1>SIT HOSPITAL</h1>
        </a>

        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain" aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
      <span class="icofont-navigation-menu"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarmain">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
        <a class="nav-link" href="../index.html">Home</a>
        </li>
         <li class="nav-item"><a class="nav-link" href="../about.html">About</a></li>
          <li class="nav-item"><a class="nav-link" href="../service.html">Services</a></li>

         <!--  <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="department.html" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Department <i class="icofont-thin-down"></i></a>
          <ul class="dropdown-menu" aria-labelledby="dropdown02">
            <li><a class="dropdown-item" href="department.html">Departments</a></li>
            <li><a class="dropdown-item" href="department-single.html">Department Single</a></li>
          </ul>
          </li>

          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="doctor.html" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Doctors <i class="icofont-thin-down"></i></a>
          <ul class="dropdown-menu" aria-labelledby="dropdown03">
            <li><a class="dropdown-item" href="doctor.html">Doctors</a></li>
            <li><a class="dropdown-item" href="doctor-single.html">Doctor Single</a></li>
            <li><a class="dropdown-item" href="appoinment.html">Appoinment</a></li>
          </ul>
          </li> -->

         <!-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="blog-sidebar.html" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Blog <i class="icofont-thin-down"></i></a>
          <ul class="dropdown-menu" aria-labelledby="dropdown05">
            <li><a class="dropdown-item" href="blog-sidebar.html">Blog with Sidebar</a></li>

            <li><a class="dropdown-item" href="blog-single.html">Blog Single</a></li>
          </ul>
          </li> -->
         
         <li class="nav-item"><a class="nav-link" href="../contact.html">Contact</a></li> 
         <li class="nav-item"><a class="nav-link" href="../Doctor/doctor_login.php">Doctor Login</a></li>
         <li class="nav-item"><a class="nav-link" href="patient_login.php">Patient Login</a></li>
      </ul>
      </div>
    </div>
  </nav>
</header>


<section class="page-title bg-1">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          
          <h1 class="text-capitalize mb-5 text-lg"> Patient Login</h1>

          <!-- <ul class="list-inline breadcumb-nav">
            <li class="list-inline-item"><a href="index.html" class="text-white">Home</a></li>
            <li class="list-inline-item"><span class="text-white">/</span></li>
            <li class="list-inline-item"><a href="#" class="text-white-50">Book your Seat</a></li>
          </ul> -->
        </div>
      </div>
    </div>
  </div>
</section>

<section class="appoinment section">
  <div class="container">
    <div class="row">
      <div class="col-xl-4">
          <div>
            <div class="feature-icon">
              <img src="img/Login pic.jpg" width="400" height="500">
            </div>
             
          </div>
      </div>

      <div class="col-lg-8">
           <div class="appoinment-wrap mt-5 mt-lg-0 pl-lg-5">
            <h2 class="mb-2 title-color">Login</h2>
            <p class="mb-4">Login Here</p>
               <form id="#" class="appoinment-form" method="post" action="patient_login.php">
                    <div class="row">
                      <div class="col-lg-6">
                            <div class="form-group">
                                <input name="username" id="username" type="text" class="form-control" placeholder="Username" onkeypress="javascript: return isAlphanumric(event)">
                            </div>
                        </div>


                        <div class="col-lg-6">
                            <div class="form-group">
                                <input type="password"  id="Password" name="password" class="form-control" placeholder="Password" onkeypress="javascript: return isAlphanumric(event)">
                            </div>
                        </div>
                      </div>
                    
                      <button type="submit" class="btn btn-main btn-round-full" data-loading-text="Please wait..." name="btn_login">Login<i class="icofont-simple-right ml-2"></i></button>
                   
                    <a href="Patient_Signup.php" class="btn btn-main btn-round-full" >Create A New Account</a>
                </form>
            </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php 
include("Footer.php");

?>