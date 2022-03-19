<?php

//To Handle Session Variables on This Page
session_start();


//Including Database Connection From db.php file to avoid rewriting in all files
require_once("db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <title>Finding & Hiring Jobs Website</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

      <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
  
      <link rel="stylesheet" href="assets/css/style.css">
      <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Custom -->
    <link rel="stylesheet" href="css/custom.css">
    <style>
        .container2{
            display: flex;
            border: 0px;
            padding: 0px;
            margin: 0px;
            color: white;
            background-image: url('banner1.jpg');
            height: 400px;
            margin: -8px;
        }
        .glow {
  font-size: 20px;
  color: rgb(255, 255, 255);
  margin-left: 15px;
  animation: glow 1s ease-in-out infinite alternate;
}

@-webkit-keyframes glow {
  from {
    text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #e60073, 0 0 40px #e60073, 0 0 50px #e60073, 0 0 60px #e60073, 0 0 70px #e60073;
  }
  
  to {
    text-shadow: 0 0 20px #fff, 0 0 30px #ff4da6, 0 0 40px #ff4da6, 0 0 50px #ff4da6, 0 0 60px #ff4da6, 0 0 70px #ff4da6, 0 0 80px #ff4da6;
  }
}
.card1 {
    background: #333;
    border-radius: 10px;
    border-color: rgb(240, 102, 22);
    display: inline-block;
    height: 100px;
    margin: 10px;
    position: relative;
    margin-top: -8px;
    margin-left: 10px;
    width: 300px;
  }
  #mainbox1{
    position: relative;
    font-family: calibri;
    box-sizing: border-box;
    justify-content: center;
    display: flex;
    flex-wrap: wrap;
    margin-top: 2px;
    height: 100px;
  }

  .label1 {
    color: white;
    padding: 10px;
    font-size:13px;
}
.card1:hover{
  border-color: rgba(0, 0, 0, 0.3);
}

select.input-sm {
  width: 200px !important;
  height: 27px !important;
}

.form-control {
  width: 81% !important;
}

.form-control:focus {

  background-color:rgba(0, 0, 0, 0) !important;
}

.form-control {
  
    color: #b1abab !important;
  border:0px;
  box-shadow: 0px 1px 2px 0 rgba(0, 0, 0, 0);
  border-color:rgba(0, 0, 0, 0);
  background-color:rgba(0, 0, 0, 0) !important;
}

.btn-wrap-go a {
  background: rgb(240, 102, 22);
  color: #FFF;
  position: relative;
  margin-left: 10%;
  /* margin-bottom: -10%; */
  padding: 15px;
  font-weight: 900 !important;
  text-transform: uppercase;
  border-radius: 5px;
  font: 14px lato;
  opacity: 0.8;
  letter-spacing: 1px;
  text-decoration: none;
}

.links a {
  background: rgb(59, 65, 63);
  color: #FFF;
  position: relative;
  text-align: center;
  /* margin-bottom: -10%; */
  padding: 15px;
  font-weight: 900 !important;
  text-transform: uppercase;
  border-radius: 5px;
  font: 14px lato;
  opacity: 0.8;
  letter-spacing: 1px;
  text-decoration: none;
}

.btn-top a{
  background: rgb(2, 2, 2);
  color: #FFF;
  position: relative;
  margin-left: 10%;
  /* margin-bottom: -10%; */
  padding: 15px;
  font-weight: 900 !important;
  text-transform: uppercase;
  border-radius: 5px;
  font: 14px lato;
  opacity: 1;
  letter-spacing: 1px;
  text-decoration: none;
}

.jobsearch h1{
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

.jobsearch{
    text-align: center;
    margin-top: -10px;
}

.container1 {
    display: block;
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
}



    </style>

</head>
<body>
    <div>
        
      <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <a href="index.php" class="logo">Job<em> zzzz</em></a>
                        <ul class="nav">
                            
          <?php if(empty($_SESSION['id_user']) && empty($_SESSION['id_company'])) { ?>
          <li>
            <a href="login.php">Login</a>
          </li>
          <li>
            <a href="sign-up.php">Sign Up</a>
          </li>  
          <?php } else { 

            if(isset($_SESSION['id_user'])) { 
          ?>        
          <li>
            <a href="user/index.php">Dashboard</a>
          </li>
          <?php
          } else if(isset($_SESSION['id_company'])) { 
          ?>        
          <li>
            <a href="company/index.php">Dashboard</a>
          </li>
          <?php } ?>
          <li>
            <a href="logout.php">Logout</a>
          </li>
          <?php } ?>
                            
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <div class="main-banner" id="top">
        
            <img src="assets/images/banner1.jpg" style="width: 100%;" />
       
  
        <div class="video-overlay header-text">
            <div class="caption">
                <h6>Welcome </h6>
                <h2>Find the  <em>Job</em></h2>
                <div class="main-button">
                    <a href="contact.php">Contact Us</a>
                </div>
            </div>
        </div>
    </div>


        <div class="links" style="margin: 20px; font-size: 20px; margin-top: 40px; margin-bottom: 2px; height: 80px;">
            <center>
                <a href="index.php">Home</a>&ensp;&ensp;
                <a href="imggal.php">Top Recruiters</a>&ensp;&ensp;
                <a href="register_company.php">Post Jobs</a>&ensp;&ensp;
                <a href="aboutus.php">About Us</a>&ensp;&ensp;
                <a href="contact.php">Contact Us</a>&ensp;&ensp;
            </center>
        </div>
        <div style="background-color: antiquewhite; height: 218px;"> 
            <div class="jobsearch" style=" margin-bottom: 30px;">
                <br><br><h1>Search Jobs</h1>
            </div>
            <div id="mainbox1" >
                <div class="card1">
                <div class="label1">KEYWORD?</div>
                <input class="form-control input-sm" placeholder="Enter job title, position..."  type="text">
                </div>
                
                <div class="card1">
                <div class="label1">WHERE?</div>
                <select class="form-control input-sm">
                <option>All locations</option>
                <option>Mumbai</option>
                <option>Kolkata</option>
                <option>Chennai</option>
                <option>Pune</option>
                <option>Nasik</option>
                </select>
                </div>
                
                <div class="card1">
                <div class="label1">CATEGORIES?</div>
                <select class="form-control input-sm">
                  <option>All Categories</option>
                  <option>I.T.</option>
                  <option>CAT1</option>
                  <option>CAT2</option>
                  <option>CAT3</option>
                </select>
                </div>
                
                <div class="btn-wrap-go" style="margin-top: 50px;">
                  <a href="login.html">Go!</a>
                  </div>
                </div>
        </div>
        <section id="candidates" class="content-header">
            <div class="container1">
              <div class="row">
                <div class="col-md-12 text-center latest-job margin-bottom-20" style="margin-top: 20px;" >
                  <h1>Candidates</h1>
                  <p>Finding a job just got easier. Create a profile and apply with single mouse click.</p>            
                </div>
              </div>
              <div class="row">
                <div class="col-sm-4 col-md-4">
                  <div class="thumbnail candidate-img">
                    <img src="img/browse.jpg" alt="Browse Jobs">
                    <div class="caption">
                      <h3 class="text-center">Browse Jobs</h3>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4 col-md-4">
                  <div class="thumbnail candidate-img">
                    <img src="img/interviewed.jpeg" alt="Apply & Get Interviewed">
                    <div class="caption">
                      <h3 class="text-center">Apply & Get Interviewed</h3>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4 col-md-4">
                  <div class="thumbnail candidate-img">
                    <img src="img/career.jpg" alt="Start A Career">
                    <div class="caption">
                      <h3 class="text-center">Start A Career</h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
      
          <section id="company" class="content-header">
            <div class="container1">
              <div class="row">
                <div class="col-md-12 text-center latest-job margin-bottom-20">
                  <h1>Companies</h1>
                  <p>Hiring? Register your company for free, browse our talented pool, post and track job applications</p>            
                </div>
              </div>
              <div class="row">
                <div class="col-sm-4 col-md-4">
                  <div class="thumbnail company-img">
                    <img src="img/postjob.png" alt="Browse Jobs">
                    <div class="caption">
                      <h3 class="text-center">Post A Job</h3>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4 col-md-4">
                  <div class="thumbnail company-img">
                    <img src="img/manage.jpg" alt="Apply & Get Interviewed">
                    <div class="caption">
                      <h3 class="text-center">Manage & Track</h3>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4 col-md-4">
                  <div class="thumbnail company-img">
                    <img src="img/hire.png" alt="Start A Career">
                    <div class="caption">
                      <h3 class="text-center">Hire</h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
    </div>
    
</body>
</html>