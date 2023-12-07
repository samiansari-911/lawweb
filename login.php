<?php
include("config.php");

// session_start();

// if (isset($_SESSION['useremail'])) {
//     header("location:index.php");
// }


// login work

if (isset($_POST['submit'])) {
  $log_email=$_POST['login_email'];
  $log_pass=$_POST['login_pass'];

  $select="SELECT *from `register` where email='$log_email'";
  $run=mysqli_query($connection,$select);

  if ($run) {
    if (mysqli_num_rows($run)>0) {
      $data=mysqli_fetch_assoc($run);

      $db_pass=$data['password'];
      
      $pass_decrypt = password_verify($log_pass, $db_pass);

      if ($pass_decrypt) {
        $_SESSION['useremail'] =$data['email'];

        echo "<script> alert('login successfully')
                window.location.href='index.php';
               </script>";
      }else{
        echo "<script> alert(login unsuccessfully)</script>";
      }
    }else{
      echo "<script>alert(invailed password)</script>";
    }
  }else{
    echo "(query failed)";
  }
}




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .bg-image-vertical {
position: relative;
overflow: hidden;
background-repeat: no-repeat;
background-position: right center;
background-size: auto 100%;
}

@media (min-width: 1025px) {
.h-custom-2 {
height: 100%;
}
}
    </style>
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
      <!-- boostrap -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body style="background-color: rgb(212, 218, 222);">
  <!-- Section: Design Block -->
  <div class="container mt-5">
<section class=" text-center text-lg-start">
    <style>
      .rounded-t-5 {
        border-top-left-radius: 0.5rem;
        border-top-right-radius: 0.5rem;
      }
  
      @media (min-width: 992px) {
        .rounded-tr-lg-0 {
          border-top-right-radius: 0;
        }
  
        .rounded-bl-lg-5 {
          border-bottom-left-radius: 0.5rem;
        }
      }
    </style>
    <div class="card mb-3">
      <div class="row g-0 d-flex align-items-center">
        <div class="col-lg-4 d-none d-lg-flex">
          <img src="img/login.jpg" alt="Trendy Pants and Shoes"
            class="w-100 rounded-t-5 rounded-tr-lg-0 rounded-bl-lg-5" />
        </div>
        <div class="col-lg-8">
          <div class="card-body py-5 px-md-5">
            <h1 style="text-align: center;font-family: sans-serif;">LOGIN</h1>
            <!-- form -->
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
              <!-- Email input -->
              <div class="form-outline mb-4">
                  <label class="form-label" for="form2Example1">Email address</label>
                <input type="email" id="form2Example1" name="login_email" class="form-control" />
              </div>
  
              <!-- Password input -->
              <div class="form-outline mb-4">
                  <label class="form-label" for="form2Example2">Password</label>
                <input type="password" id="form2Example2" name="login_pass" class="form-control" />
              </div>
  
              <!-- 2 column grid layout for inline styling -->
              <div class="row mb-4">
                <div class="col d-flex justify-content-center">
                  <!-- Checkbox -->
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                    <label class="form-check-label" for="form2Example31"> Remember me </label>
                  </div>
                </div>
  
                <div class="col">
                  <!-- Simple link -->
                  <a href="#!">Forgot password?</a>
                </div>
              </div>
  
              <!-- Submit button -->
             <input type="submit" value="Login" class="btn btn-primary w-100 mb-3" name="submit">
  
              <a href="register.php"><h5 style="text-align: center;">Don't have account</h5></a>
            </form>
  
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
  <!-- Section: Design Block -->
</body>
</html>