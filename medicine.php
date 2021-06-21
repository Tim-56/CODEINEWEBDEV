
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
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
  var actions = $("table td:last-child").html();
  // Append table with add row form on add new button click
    $(".add-new").click(function(){
    $(this).attr("disabled", "disabled");
    var index = $("table tbody tr:last-child").index();
        var row = '<tr>' +
            '<td><input type="text" class="form-control" name="fmedicineName" id="name"></td>' +
            '<td><input type="text" class="form-control" name="Millegram" id="department"></td>' +
            '<td><input type="text" class="form-control" name="Frequency" id="phone"></td>' +
      '<td>' + actions + '</td>' +
        '</tr>';
      $("table").append(row);   
    $("table tbody tr").eq(index + 1).find(".add, .edit").toggle();
        $('[data-toggle="tooltip"]').tooltip();
    });
  // Add row on add button click
  $(document).on("click", ".add", function(){
    var empty = false;
    var input = $(this).parents("tr").find('input[type="text"]');
        input.each(function(){
      if(!$(this).val()){
        $(this).addClass("error");
        empty = true;
      } else{
                $(this).removeClass("error");
            }
    });
    $(this).parents("tr").find(".error").first().focus();
    if(!empty){
      input.each(function(){
        $(this).parent("td").html($(this).val());
      });     
      $(this).parents("tr").find(".add, .edit").toggle();
      $(".add-new").removeAttr("disabled");
    }   
    });
  // Edit row on edit button click
  $(document).on("click", ".edit", function(){    
        $(this).parents("tr").find("td:not(:last-child)").each(function(){
      $(this).html('<input type="text" class="form-control" value="' + $(this).text() + '">');
    });   
    $(this).parents("tr").find(".add, .edit").toggle();
    $(".add-new").attr("disabled", "disabled");
    });
  // Delete row on delete button click
  $(document).on("click", ".delete", function(){
        $(this).parents("tr").remove();
    $(".add-new").removeAttr("disabled");
    });
});
</script>

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      body {
    color: #404E67;
    background: #F5F7FA;
    font-family: 'Open Sans', sans-serif;
}
.table-wrapper {
    width: 700px;
    margin: 30px auto;
    background: #fff;
    padding: 20px;  
    box-shadow: 0 1px 1px rgba(0,0,0,.05);
}
.table-title {
    padding-bottom: 10px;
    margin: 0 0 10px;
}
.table-title h2 {
    margin: 6px 0 0;
    font-size: 22px;
}
.table-title .add-new {
    float: right;
    height: 30px;
    font-weight: bold;
    font-size: 12px;
    text-shadow: none;
    min-width: 100px;
    border-radius: 50px;
    line-height: 13px;
}
.table-title .add-new i {
    margin-right: 4px;
}
table.table {
    table-layout: fixed;
}
table.table tr th, table.table tr td {
    border-color: #e9e9e9;
}
table.table th i {
    font-size: 13px;
    margin: 0 5px;
    cursor: pointer;
}
table.table th:last-child {
    width: 100px;
}
table.table td a {
    cursor: pointer;
    display: inline-block;
    margin: 0 5px;
    min-width: 24px;
}    
table.table td a.add {
    color: #27C46B;
}
table.table td a.edit {
    color: #FFC107;
}
table.table td a.delete {
    color: #E34724;
}
table.table td i {
    font-size: 19px;
}
table.table td a.add i {
    font-size: 24px;
    margin-right: -1px;
    position: relative;
    top: 3px;
}    
table.table .form-control {
    height: 32px;
    line-height: 32px;
    box-shadow: none;
    border-radius: 2px;
}
table.table .form-control.error {
    border-color: #f50000;
}
table.table td .add {
    display: none;
}
</style>
    <!-- <link href="dashboard.css" rel="stylesheet"> -->
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
            <a class="nav-link " href="dosagelists.php">
              <span data-feather="home"></span>
              Dosage Lists 
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
            <a class="nav-link active" href="dosages.php">
              <span data-feather="users"></span>
              Dosages <span class="sr-only">(current)</span>
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
           <h2>Add to Medicine lists</h2>

</div>

  <form class="form-signin" action="signupdb.php" method="POST">
    
    <div class="form-label-group">
      <input type="text" id="inputFirstName" class="form-control" placeholder="Medicine Name" required autofocus name="fmedicineName">
      <label for="inputfirstname">Medicine Name</label>
    </div>


    <div class="form-label-group">
      <input type="text" id="inputEmail" class="form-control" placeholder="Millegram" required autofocus name="Millegram">
      <label for="inputEmail">Millegram</label>
    </div>

    <div class="form-label-group">
      <input type="text" id="inputPassword" class="form-control" placeholder="Password" required name="Frequency">
      <label for="inputPassword">Frequency</label>
    </div>

    
    <input class="btn btn-lg btn-primary btn-block" type="submit" value="save">
    


  
  
</form>


      <canvas class="my-4 w-100" id="myChart" width="900" height="100"></canvas>


           <h2>Medicine lists</h2>
      <!-- <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>#</th>
              <th>Medicine Name</th>
              <th>Dosage</th>
              <th>Milligram</th>
              <th>Frequency</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>PANADOL</td>
              <td>2 TABS</td>
              <td>250 MG</td>
              <td>2 PER DAY</td>
            </tr>
            <tr>
              <td>2</td>
              <td>ASPIRIN</td>
              <td>1 TABS</td>
              <td>500 MG</td>
              <td>2 PER DAILY</td>
            </tr>
            
          </tbody>
        </table>
          
                <br>
        <div class="container-lg">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>Employee <b>Details</b></h2></div>
                    <div class="col-sm-4">
                        <button type="button" class="btn btn-info add-new"><i class="fa fa-plus"></i> Add New</button>
                    </div>
                </div>
            </div> -->
            <table class="table table-bordered">
                <thead>
                    <tr>
              
              <th>Medicine Name</th>
              <th>Milligram</th>
              <th>Frequency</th>
              
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <tr>
              
              <td>PANADOL</td>
              <td>250 MG</td>
              <td>2 PER DAY</td>
            </tr>
                        <td>
                            <a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
                            <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                        </td>
                    </tr>
                    <tr>
              <td>ASPIRIN</td>
              <td>500 MG</td>
              <td>2 PER DAILY</td>
                        <td>
                            <a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
                            <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                        </td>
                    </tr>
                    <tr>
              <td>chrafenicol</td>
              <td>500 MG</td>
              <td>2 PER DAILY</td>
                        <td>
                            <a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
                            <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                        </td>
                    </tr>      
                </tbody>
            </table>
        </div>
    </div>
</div>     

             

    <p class="mt-5 mb-3 text-muted text-center">CODEINE.WEBDEV.SL &copy; 2020-2021</p>

</main>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
        <script src="dashboard.js"></script></body>
</html>
