<?php 
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['bpmsuid']==0)) {
  header('location:logout.php');
  } else{



  ?>
<!doctype html>
<html lang="en">
  <head>
 

    <title> Salon Elegant | Booking History</title>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

   
    <link href="assest/css/animate.min.css" rel="stylesheet">
    <link href="assest/css/owl.carousel.min.css" rel="stylesheet">


    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:400,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

    

    
    <link rel="stylesheet" href="assets/css/style-starter.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:400,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
  </head>
  <body id="home">
<?php include_once('includes/header.php');?>

<script src="assets/js/jquery-3.3.1.min.js"></script> <!-- Common jquery plugin -->

<script src="assets/js/bootstrap.min.js"></script>


<script>
$(function () {
  $('.navbar-toggler').click(function () {
    $('body').toggleClass('noscroll');
  })
});
</script>

<!--  Header -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-3 text-white text-uppercase mb-3 animated slideInDown">Booking History</h1>
            
        </div>
    </div>

<section class="w3l-contact-info-main" id="contact">
    <div class="contact-sec	">
        <div class="container">

            <div>
                <div class="cont-details">
                   <div class="table-content table-responsive cart-table-content m-t-30">
                   <h4 style="padding-bottom: 20px;text-align: center;color: red;">Appointment Details</h4>
                        <?php
$cid=$_GET['aptnumber'];
$ret=mysqli_query($con,"select tbluser.FirstName,tbluser.LastName,tbluser.Email,tbluser.MobileNumber,tblbook.ID as bid,tblbook.AptNumber,tblbook.AptDate,tblbook.AptTime,tblbook.Message,tblbook.BookingDate,tblbook.Remark,tblbook.Status,tblbook.RemarkDate from tblbook join tbluser on tbluser.ID=tblbook.UserID where tblbook.AptNumber='$cid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
                        <table class="table table-bordered">
                            <tr>
    <th>Appointment Number</th>
    <td><?php  echo $row['AptNumber'];?></td>
  </tr>
  <tr>
<th>Name</th>
    <td><?php  echo $row['FirstName'];?> <?php  echo $row['LastName'];?></td>
  </tr>

<tr>
    <th>Email</th>
    <td><?php  echo $row['Email'];?></td>
  </tr>
   <tr>
    <th>Mobile Number</th>
    <td><?php  echo $row['MobileNumber'];?></td>
  </tr>
   <tr>
    <th>Appointment Date</th>
    <td><?php  echo $row['AptDate'];?></td>
  </tr>
 
<tr>
    <th>Appointment Time</th>
    <td><?php  echo $row['AptTime'];?></td>
  </tr>
  
  
  <tr>
    <th>Apply Date</th>
    <td><?php  echo $row['BookingDate'];?></td>
  </tr>

  <tr>
    <th>Service Details</th>
    <td><?php  echo $row['Message'];?></td>
  </tr>
  

<tr>
    <th>Status</th>
    <td> <?php  
if($row['Status']=="")
{
  echo "Not Updated Yet";
}

if($row['Status']=="Selected")
{
  echo "Selected";
}

if($row['Status']=="Rejected")
{
  echo "Rejected";
}

     ;?></td>
  </tr>
                        </table><?php } ?>
                    </div> </div>
                
    </div>
   
    </div></div>
</section>
<!-- Footer -->
<div class="container-fluid bg-secondary text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-colour text-uppercase mb-4">Contact Us</h4>
                    <div class="d-flex align-items-center mb-2">
                        <div class="btn-square bg-dark flex-shrink-0 me-3">
                            <span class="fa fa-map-marker-alt "></span>
                        </div>
                        <span>No.121, Gonagampala rd, Pilapitiya, Kelaniya.</span>
                    </div>
                    <div class="d-flex align-items-center mb-2">
                        <div class="btn-square bg-dark flex-shrink-0 me-3">
                            <span class="fa fa-phone-alt "></span>
                        </div>
                        <span>+94 77 332 49 71</span>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="btn-square bg-dark flex-shrink-0 me-3">
                            <span class="fa fa-envelope-open"></span>
                        </div>
                        <span>nelumlankaes@gmail.com</span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-colour text-uppercase mb-4">Quick Links</h4>
                    <a class="btn btn-link text-colour" href="index.php">Home</a>
                    <a class="btn btn-link text-colour" href="services.php">Services</a>
                    <a class="btn btn-link text-colour" href="book-appointment.php">Appointment</a>
                    <a class="btn btn-link text-colour" href="signup.php">Register Now</a>

                    
                </div>              
                    <div class="position-relative mb-4"></div>
                    <div class="d-flex pt-1 m-n1">
                        <a class="btn btn-lg-square btn-dark  m-1" href="https://www.facebook.com/nelumlankaes"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-lg-square btn-dark  m-1" href="https://www.youtube.com/channel/UCNNLEM0BHZDyZRsn542XDRQ"><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-lg-square btn-dark  m-1" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">Salon Elegant</a>
                    </div>
                    <div class="col-md-6 text-center text-md-end">

                        Designed By <a class="border-bottom" > Group No 16 for SE</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- go top -->
<a href="#" class="btn btn-lg-square btn-arrow back-to-top"><i class="btn-arrow btn-danger bi bi-arrow-up"></i></a>
</body>

</html><?php } ?>