
 <?php 

$server="localhost";
$username ="root";
$password = "usbw";
$db = "testdosagelist";

mysql_connect($server, $username, $password) or die("could not connect");
mysql_select_db($db) or die("could not find database");
$output='';
$outputLabel= '';
//collect

if (isset($_POST['search'])) {
	$searchquery = $_POST['search'];

	//alternate
	$searchquery = preg_replace("#[^0-9a-z]#i", "", $searchquery);

	$query=mysql_query("SELECT * FROM lists WHERE medicine LIKE '%$searchquery%' OR dosage LIKE '%$searchquery%'") or die("cud not search");//can be limited to the number of fields, if there are lots of fields you just put the 'select * from tablename and not following the fields'

	$count = mysql_num_rows($query);

	if ($count ==0) {
		$output='there was no search results';

		}else{
			while ($row = mysql_fetch_array($query)) {
				$ID = $row['id'];
				$MEDICINE = $row['medicine'];
				$DOSAGE = $row['dosage'];
				$DATE = $row['date'];
				$outputLabel .= '<div>'. "ID"  . '--' . "MEDICINE" . '--' . 'DOSAGE'. '--' . "DATE".'</div>';
				$output .= '<div>'. $ID  . '--' . $MEDICINE . '--' . $DOSAGE. '--' . $DATE.'</div>';
			}
		}
	}

 ?>



<!doctype html>
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

    <!-- Bootstrap core CSS -->
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

  
    <form action="dosagelists.php" method="POST" class="form-inline">
      <input class="form-control form-control-dark w-90" type="text" placeholder="Search" aria-label="Search" name="search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="search">Search</button>
    </form>
 
</nav>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="sidebar-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="dosagelists.php">
              <span data-feather="home"></span>
              Dosage Lists <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="medicine.php">
              <span data-feather="file"></span>
              Medicine
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Notifications.php">
              <span data-feather="shopping-cart"></span>
              Notifications
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="dosages.php">
              <span data-feather="users"></span>
              Dosages
            </a>
          </li>
          
          
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Contacts</span>
          <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle"></span>
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              About
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Call
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Chat with us
            </a>
          </li>
          
        </ul>
      </div>
    </nav>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        
        <!-- <h1 class="h2">SEARCH</h1> -->
      
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search" name="overall search">
     
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">DRUGS</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">PRISCRIPTIONS</button>
          </div>
        </div>
      </div>

    <div class="container">
              <div class="jumbotron">
                <h1>Medicines</h1>
              </div>
           <h2>Dosage lists</h2>
           <p>search for your drugs on the search icon at the top right</p>
      <canvas class="my-4 w-100" id="myChart" width="900" height="100"></canvas>


      <h2>Section title</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>Id-Drugs-dosage-Date Taken</th>
              
            </tr>
          </thead>
          <tbody>
          
            <tr>
              <td>
              	<?php 
					           print("$output");
 				         ?>
              </td>
            </tr>
            
          </tbody>
        </table>
      </div>
  
  </div>
</main>
</div>

<p class="mt-5 mb-3 text-muted text-center">CODEINE.WEBDEV.SL &copy; 2020-2021</p>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
        <script src="dashboard.js"></script></body>
</html>
