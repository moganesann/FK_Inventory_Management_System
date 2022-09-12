<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>FKIMS</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: eBusiness - v4.2.0
  * Template URL: https://bootstrapmade.com/ebusiness-bootstrap-corporate-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
<style>
input[type=submit] 
{
  background-color: RoyalBlue;
  border-color: white;
  height: 50px;
  width: 100px;
  color: white; 
  border-radius: 5px;
  font-weight: bold;
  font-size: 20px; 
  margin: auto; 
}

input[type=submit]:hover 
{
  background-color: Red;
}

input[type=reset]
{
  background-color: green;
  border-color: white;
  height: 50px;
  width: 100px;
  color: white; 
  border-radius: 5px;
  font-weight: bold;
  font-size: 20px; 
  margin: auto; 
}

input[type=reset]:hover 
{
  background-color: MediumSpringGreen;
}

input[type=button] 
{
  background-color: #006666;
  border: 2px solid black;
  border-color: black;
  color: white; 
  height: 50px;
  width: 400px;
  border-radius: 5px;
  font-weight: bold;
  font-size: 20px; 
  margin: auto; 
  box-shadow: 15px 15px black;
}

input[type=button]:hover 
{
  background-color:#00cccc;
  border: 2px solid black;
}

table, th, td {
  border: 5px solid tan;
  border-collapse: outset;
  text-align: left;
  background-color:#fff;
  color: #fff;
  font-weight: bold;
  font-size: 20px; 
}
th{
	border: 5px solid black;
	border-left:5px solid crimson;
	border-right-color: 5px solid white;
	padding:15px;
	background-color:#08405e;
}
td{
	border: 3px solid black;
	padding:15px;
	background-color:#08405e;
}
input
{
	background-color:#f0f0f5;
	height:28px;
}
.error {
	background-color:#DC143C;
	border: 1px solid black;
   color: white;
   font-weight: bold;
   font-size: 20px;
   width:60%;
   border-radius: 5px;
   margin: 20px auto;
}
</style>

<script type="text/javascript"> 
	  
	  function addItem() 
	  {

				alert("Item Register to Database");
	  }

	  
	</script>
	
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex justify-content-between">

      <div class="logo">
        <h1><a href="../ManageLogin/Login.php"><span>f</span>KIMS</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
      <ul>
			<li><a href="../ManageLogin/denyPage.php">Manage Store</a></li>
			<li class="dropdown"><a class="active" href="../ManageRequest/staffRequest.php"><span>Request</span><i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="../ManageLogin/denyPage.php">Manage Request</a></li>
            </ul>
          </li>
			<li><a href="../ManageLogin/denyPage.php">Vendor</a></li>
			<li><a href="../ManageLogin/denyPage.php"><span>Register</span></a></li>
			<li><a href="../ManageLogin/denyPage.php">Dispense</a></li>
			<li><a href="../ManageLogin/denyPage.php">Report</a></li>
			<li><a style="font-weight:bold;font-style:italic;" href="../ManageLogin/Login.php">Log Out</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
 </header><!-- End Header -->
  
 <main id="main">
  
    <!-- ======= Blog Header ======= -->
    <div class="header-bg page-area">
      <div class="container position-relative">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="slider-content text-center">
              <div class="header-bottom">
                <div class="layer2">
                  <h1 class="title2">FK INVENTORY MANAGEMENT SYSTEM </h1>
                </div>
                <div class="layer3">
                  <h2 class="title3">Manage Your Items Easily</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Blog Header -->
	

  	  <!-- ======= About Section ======= -->
    <div id="about" class="about-area area-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>Request Item</h2>
			  <br>
			  <a href="checkAvailable.php"><input  type="button" name="View" value="View Item List" ></a>
			  <br>
			  <br>
			  <br>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- single-well start-->
		  
 <center> 

				
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

			<form name="addRequest" action="../../Controller/RequestController/Requestcontroller.php" method="post">
			<center>
			<table>
				<tr>
				<th><label for="staffID">Staff ID : </label></th>
				<td><input type="text" id="staffID" name="staffID" placeholder="Enter Staff ID"><br></td>
				</tr>
				<tr>
				<th><label for="itemID">Item ID : </label></th>
				<td><input type="text" id="itemID" name="itemID" placeholder="Enter Item ID"><br></td>
				</tr>
				<tr>
				<th><label for="itemQuantity">Item Request Quantity :</label></th>
				<td><input type="number" id="itemQuantity" name="itemQuantity" placeholder="Enter Item Quantity"><br></td>
				</tr>
				<tr>
				<th><label for="dateRetrieve">Date to Retrieve Requested Item : </label></th>
				<td><input type="date" id="dateRetrieve" name="dateRetrieve" placeholder="Enter Pickup Date"><br></td>
				</tr>
				<tr>
				<th><label for="timeRetrieve"></label>Comment</th>
				<td><input type="text" id="comment" name="comment" placeholder="Enter Comment"><br></td>
				</tr>
				<tr>
				<th><label for="stat"></label>Status</th>
				<td><input type="text" id="stat" name="stat" value="Pending" disabled><br></td>
				</tr>
			</center>
			</table>
			
			<center>
				<br>
				<br>
				<input type="submit" value="Submit" name="Confirm">
				<input type="reset">
				</form> 
				
				
					</div>
				</div>
			</div>
		</center>  
   

    
    


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer>
    <div class="footer-area-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="copyright text-center">
              <p>
                &copy; Copyright <strong>genesys</strong>. All Rights Reserved
              </p>
            </div>
            <div class="credits">
              <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=eBusiness
            -->
              Designed by <a>Genesys</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>