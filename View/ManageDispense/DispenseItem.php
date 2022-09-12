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

select {
  // A reset of styles, including removing the default dropdown arrow
  appearance: none;
  // Additional resets for further consistency
  background-color: transparent;
  border: none;
  padding: 0 1em 0 0;
  margin: 0;
  width: 100%;
  font-family: inherit;
  font-size: inherit;
  cursor: inherit;
  line-height: inherit;
  color:black;
}

.options {
    display:none;
    position:absolute;
    top:100%;
    right:0;
    left:0;
    z-index:999;
    margin:0 0;
    padding:0 0;
    list-style:none;
    border:1px solid #ccc;
    background-color:white;
    -webkit-box-shadow:0 1px 2px rgba(0, 0, 0, 0.2);
    -moz-box-shadow:0 1px 2px rgba(0, 0, 0, 0.2);
    box-shadow:0 1px 2px rgba(0, 0, 0, 0.2);
}
</style>

<script type="text/javascript"> 
	  
	  function DispenseItem() 
	  {

				alert("Entering Dispense Item to Database");
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
			<li><a href="../ManageStock/manageMain.php">Manage Store</a></li>
			<li class="dropdown"><a href="../ManageRequest/requestItem.php"><span>Request</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="../ManageRequest/requestMain.php">Manage Request</a></li>
            </ul>
          </li>
			<li><a href="../ManageVendor/managevendor.php">Vendor</a></li>
			<li><a href="../ItemRegistration/ItemRegistration.php"><span>Register</span></a></li>
			<li><a class="active" href="../ManageDispense/DispenseItem.php">Dispense</a></li>
			<li><a href="../GenerateReport/reportMain.php">Report</a></li>
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
              <h2>Dispense Item</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- single-well start-->
		  
 <center> 
 
 <?php
  
    // Connect to database 
    $con = mysqli_connect("localhost","root","","fkims");
         
    // Get all the categories from user table
    $sql = "SELECT * FROM `user` WHERE id LIKE 'AD%';";
    $result = mysqli_query($con,$sql);
	
    $sql2 = "SELECT * FROM `user` WHERE id LIKE 'S%';";
    $result2 = mysqli_query($con,$sql2);
	
	$sql3 = "SELECT * FROM `itemlist` ;";
    $result3 = mysqli_query($con,$sql3);
   
   
    
?>

				
   
		
		<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

					<form name="dispenseitem" action="../../Controller/DispenseController/dispenseController.php" method="post">
					  <center>
					  <table>
					  <tr>
					  <th><label for="adminID">Admin ID:</label></th>
					  <td>
					   <select type="text"  id="adminID" name="adminID" >
            <?php 
             
                while ($user = mysqli_fetch_array($result)):; 
            ?>
                <option value="<?php echo $user["id"];
                   
                ?>">
					<?php echo $user["id"];?>
               
                   
                </option>
            <?php 
                endwhile; 
            ?>
        </select>
					  
					  <br></td>
					  </tr>
					  <tr>
					  <th><label for="itemID">Item ID:</label></th>
					
					<td>
					   <select type="text"  id="itemID" name="itemID" >
            <?php 
             
                while ($user3 = mysqli_fetch_array($result3)):; 
            ?>
                <option value="<?php echo $user3["itemID"];
                   
                ?>">
					<?php echo $user3["itemID"];?>
               
                   
                </option>
            <?php 
                endwhile; 
            ?>
        </select>
					  
					  
					
					
					  </tr>
					  
					  
					  <tr>
						<th><label for="itemQuantity">Item Quantity:</label></th>
						<td><input type="number" id="itemQuantity" name="itemQuantity" ><br></td>
					  </tr>
					  <tr>
					  
					  
					  <th><label for="staffID">Staff ID:</label></th>
					  
					
					  <td>
					   <select type="text"  id="staffID" name="staffID" >
            <?php 
             
                while ($user2 = mysqli_fetch_array($result2)):; 
            ?>
                <option value="<?php echo $user2["id"];
                   
                ?>">
					<?php echo $user2["id"];?>
               
                   
                </option>
            <?php 
                endwhile; 
            ?>
        </select>
					  
					  
					  
					  
					  
					  
					  
					  
					  
					  
					  
					  </tr>
					  <tr>
						<th><label for="date">Date:</label></th>
						<td><input type="Date" id="date" name="date" ><br></td>
					  </tr>
					  <tr>
					  <th><label for="time">Time :</label></th>
					  <td><input type="Time" id="time" name="time" ><br></td>
					  </tr>

					  <br>
					  
					  </center>
					   </table>
					  <center>
					  <br>
					  <br>
					  </form>
					  </form>
						<input type="submit" value="Submit" name="Confirm" onclick="DispenseItem()">
						<input type="reset">
					  </center>
					  
					
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