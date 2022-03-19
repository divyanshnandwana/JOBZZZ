<?php 

session_start();

if(isset($_SESSION['id_user']) || isset($_SESSION['id_company'])) { 
  header("Location: index.php");
  exit();
}

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Job Portal</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="css/AdminLTE.min.css">
  <link rel="stylesheet" href="css/_all-skins.min.css">
  <!-- Custom -->
  <link rel="stylesheet" href="css/custom.css">
  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
        <style>
            body{
                overflow: hidden;
            }
            .signup h1{
    background:rgb(240, 102, 22);
    display: inline;
  color:#FFF;
  position:relative;
text-align: center;
  padding:15px;
  font-weight:900 !important;
  border-radius:5px;
  font-size: 30px;
}

.signup{
    text-align: center;
    margin-top: -10px;
}
        </style>
</head>
<body class="hold-transition skin-green sidebar-mini">
<div class="wrapper" style="overflow: hidden;">

  
  <div class="content-wrapper" style="margin-left: 0px;">

    <section class="content-header">
      <div class="container" style="background-image: url('banner2.jpg'); height: 760px; width: 1540px; overflow-y: hidden; margin: -18px;">
        <br><br>
        <br><br><br><br>
        <br><br><br>
        <div class="row latest-job margin-top-50 margin-bottom-20 bg-black" style="margin: 20px;">
            <br><br> 
          <h1 class="signup">Sign Up</h1>
          <div class="col-md-6 latest-job ">
            <div class="small-box bg-yellow padding-5">
              <div class="inner">
                <h3 class="text-center">Candidates Registration</h3>
              </div>
              <a href="register-candidates.php" class="small-box-footer">
                Login <i class="fa fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <div class="col-md-6 latest-job ">
            <div class="small-box bg-red padding-5">
              <div class="inner">
                <h3 class="text-center">Company Registration</h3>
              </div>
              <a href="register_company.php" class="small-box-footer">
                Login <i class="fa fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  </div></body></html>