<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">

  <title>Book It</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="<?php echo $this->static_base_url; ?>css/bootstrap.css" />
  <!-- font awesome style -->
  <link href="<?php echo $this->static_base_url; ?>css/font-awesome.min.css" rel="stylesheet" />
  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Dosis:500|Poppins:400,600,700&display=swap" rel="stylesheet">
  <!-- Custom styles for $this template -->
  <link href="<?php echo $this->static_base_url; ?>css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="<?php echo $this->static_base_url; ?>css/responsive.css" rel="stylesheet" />
  <style>
    /* .navbar-collapse{ */
    #navbarSupportedContent{
      flex-grow:0 !important;
    }
  </style>
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section ">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container nav">
          <a class="navbar-brand" href="index">
            <span>
              Book It
            </span>
          </a>
          <?php
          
          // echo"<pre>";
          // // // echo"</pre>";
          // print_r($_SESSION);
          //  echo"</pre>";
          
          
          ?>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span></span>
          </button>
          <div class="collapse navbar-collapse ml-auto  " id="navbarSupportedContent">
            <ul class="navbar-nav  ">
              <li class="nav-item ">
                <a class="nav-link" href="index">Home </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="About">About </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Why">Why Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Blog">Blog</a>
              </li>
            </ul>
            <!-- <div class="user_option ">
              <a href="login" class="">
                Login
              </a>
            </div> -->
            <div class=" navbar-collapse" id="navbar-list-4">
              <ul class="navbar-nav">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="image/<?php echo $_SESSION['UserData']->prof_pic ?>" 
                    width="40" height="40" class="rounded-circle">
                    <!-- <img src="https://thumbs.dreamstime.com/b/male-avatar-icon-flat-style-male-user-icon-cartoon-man-avatar-hipster-vector-stock-91462914.jpg" width="40" height="40" class="rounded-circle"> -->
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="editprofile">Edit Profile</a>
                    <a class="dropdown-item" href="index">Log Out</a>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>


      <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-list-4" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button> -->

      </nav>
    </header>
    <!-- end header section -->