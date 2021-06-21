<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>|sign up</title>
    <link rel="stylesheet" href="index.css" type="text/css">
</head>
<body>
    
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

    <!-- Sign Up Form -->
   

    <div style="height: 100px;">
  
</div>

<div class="container">

      <form class="form-signin" action="signupdb.php" method="POST">
    <div class="text-center mb-4">
      <img class="mb-4" src="../assets/brand/bootstrap-solid.svg" alt="IMAGE" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">SIGN IN</h1>
    </div>

    <div class="form-label-group">
      <input type="text" id="inputFirstName" class="form-control" placeholder="First Name" required autofocus name="firstname">
      <label for="inputfirstname">First Name</label>
    </div>

    <div class="form-label-group">
      <input type="text" id="inputLastName" class="form-control" placeholder="last Name" required autofocus name="lastname">
      <label for="inputlastname">Last Name</label>
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
    </div>
    <center><p>Already have an account<a href="index.php">Sign in</a></p></center>
    <br>
    <input class="btn btn-lg btn-primary btn-block" type="submit" value="save">
    

    <br>
  
  
</form>

<p class="mt-5 mb-3 text-muted text-center">CODEINE.WEBDEV.SL &copy; 2020-2021</p>


</body>
</html>