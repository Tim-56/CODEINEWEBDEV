
<?php

  
  $con = mysqli_connect("localhost", "root", "usbw", "edsa");

   $error = "";
   $success = "";


   if (isset($_POST['submit'])) {
       if ($email =="email") {
           

           if ($pass =="password") {

                  $error="";
                  $success ="welcome admin";
                 header("Location: signupdb.php");
           }
           else{
                 $error="invalid entry";
                 $success =" ";
           }

        
       }

}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
       <title>CODEINE.WEBDEV.SL · | MAIN</title>

    <!-- links -->

  <script src="../bootstrap-4.5.2-dist/jquery.min.js"></script>
  <script src="../popper/popper.min.js"></script>
  <script src="../bootstrap-4.5.2-dist/js/bootstrap.min.js"></script>
  
  <link rel="stylesheet" type="text/css" href="css/text.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap-grid.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap-grid.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.min.css">
  <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/dashboard/">

  <style>
        .bd-placeholder-img {
          font-size: 1.125rem;
          text-anchor: middle;
          -webkit-user-select: none;
          -moz-user-select: none;
          -ms-user-select: none;
          user-select: none;
        }

        @media (min-width: 768px) {
          .bd-placeholder-img-lg {
            font-size: 3.5rem;
          }
        }
      </style>
</head>
<body>
<div style="height: 100px;">
  
</div>

<div class="container">

      <form class="form-signin" action="dosagelists.php" method="POST">
    <div class="text-center mb-4">
      <img class="mb-4" src="../assets/brand/bootstrap-solid.svg" alt="IMAGE" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">SIGN IN</h1>
      
    </div>

    <div class="form-label-group">
      <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus name="email">
      <label for="inputEmail">Email address</label>
    </div>

    <div class="form-label-group">
      <input type="password" id="inputPassword" class="form-control" placeholder="Password" required name="password">
      <label for="inputPassword">Password</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
      <p>You don't have an account? <a href="signupindex.php">sign up</a></p>
    </div>
    <input class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Sign in
   

    <br>
  
  
</form>


          <p class="mt-5 mb-3 text-muted text-center">CODEINE.WEBDEV.SL &copy; 2020-2021</p>
</div>
</body>

</html>