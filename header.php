<?php
// session_start();

// if (!isset($_SESSION['useremail'])) {
//     header("location:login.php");
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>JUSTICE - Free Lawyer Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&family=Roboto:wght@300;500;700&display=swap"
        rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <style>
     .wts{
        position: fixed;
        bottom:55px;
        right: -3px;
     }
    </style>
</head>

<body>
<!-- whatsapp link start -->
<div class="wts">
    <a href="https://wa.me/03********">
        <img src="img/wts.png" width="80px">
</a>
</div>
<!-- whatsapp link end -->

    <!-- Header Start -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 bg-secondary d-none d-lg-block">
                <a href="index.html"
                    class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">

                </a>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg bg-white navbar-light p-0">
            <a href="index.php" class="navbar-brand d-block d-lg-none">
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarCollapse">
                <a href="index.html"> <img src="img/logo.png" style="height: 100px;" alt=""></a>
                <div class="navbar-nav mx-auto  py-0">
                    <a href="index.php" class="nav-item nav-link active" style="font-size: 20px;">Home</a>
                    <a href="about.php" class="nav-item nav-link" style="font-size: 20px;">About</a>
                    <a href="service.php" class="nav-item nav-link" style="font-size: 20px;">Practice</a>
                    <a href="team.php" class="nav-item nav-link" style="font-size: 20px;">Attorneys</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"
                            style="font-size: 20px;">Cases</a>
                        <div class="dropdown-menu rounded-0 m-0" style="background-color: #B49C73; ">
                            <a href="civillawyer.php" class="dropdown-item">Civil Law</a>
                            <a href="corporatelawyer.php" class="dropdown-item">Corporate Law</a>
                            <a href="divorcelaw.php" class="dropdown-item">Divorce Law</a>
                            <a href="criminallaw.php" class="dropdown-item">Criminal Law</a>
                        </div>
                    </div>
                    <a href="contact.php" class="nav-item nav-link" style="font-size: 20px;">Contact</a>
                </div>
                <a href="lawyer-panel/lawyerRegister.php"  class="btn btn-primary  d-lg-block" style="font-size: 18px;margin-right:5px;">Lawyer Register</a>
                <a href="" class="btn btn-primary   d-lg-block" style="font-size: 18px;">Login</a>
            </div>
        </nav>
    </div>
    </div>
    </div>
    <!-- Header End -->