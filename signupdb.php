<?php

            //mysqli_connect("servername", "username", "user password", "database name");
    $con = mysqli_connect("localhost", "root", "usbw", "edsa");

    if($con){
        //Insert data into database
        // $insert = "INSERT INTO staff(firstName, lastName, email, password)
        // VALUES('Esther', 'Kamara', 'ekamara@gmail.com', 'assfr');
        // ";

        $insert = "INSERT INTO staffs(firstName, lastName, email, password)
        VALUES('".$_POST['firstname']."', '".$_POST['lastname']."', '".$_POST['email']."', '".$_POST['password']."');
        ";

        $query = mysqli_query($con, $insert);

        if($query){

            // echo "<h1>INSERT SUCCESSFUL</h1>";

        }else{

            echo "<h1>PROBLEM WITH QUERY</h1>";

        }

    }else{
        echo "<h1>CONNECTION UNSUCCESSFUL</h1>";
        die();
    }

?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">

    <title>CODEINE.WEBDEV.SL · |DRUG SEARCH</title>

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

<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

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
    <link href="dashboard.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#">CODEINE.WEBDEV.SL</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
 
</nav>
<body>


    <div class="container">
       <h2>YOU LOGGED ON SUCCESSFULLY</h2>
       <H4><a href="dosagelists.php">CONTINUE TO MAIN PAGE</a></H4>


    </div>
</body>
</html>