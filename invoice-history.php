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
 

    <title> Salon Elegant | Invoice History</title>

    
   
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

<script src="assets/js/jquery-3.3.1.min.js"></script> 

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
            <h1 class="display-3 text-white text-uppercase mb-3 animated slideInDown">Invoice History</h1>
            
        </div>
    </div>

<section class="w3l-contact-info-main" id="contact">
    <div class="contact-sec	">
        <div class="container">

            <div>
                <div class="cont-details">
                   <div class="table-content table-responsive cart-table-content">
                    <h4 style="padding-bottom: 20px;text-align: center;color: blue;">Invoice History</h4>
                        <table class="table" border="1">
                            <thead >
                                <tr> 
                                <th>#</th> 
                                <th>Invoice Id</th> 
                                <th>Customer Name</th>
                                <th>Customer Mobile Number</th>
                                <th>Invoice Date</th> 
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                               
                                <tr>
                                    <?php
                                   $userid= $_SESSION['bpmsuid'];
 $query=mysqli_query($con,"select distinct tbluser.ID as uid, tbluser.FirstName,tbluser.LastName,tbluser.Email,tbluser.MobileNumber,tblinvoice.BillingId,date(tblinvoice.PostingDate) as PostingDate  from  tbluser   
    join tblinvoice on tbluser.ID=tblinvoice.Userid where tbluser.ID='$userid'order by tblinvoice.ID desc");
$cnt=1;
              while($row=mysqli_fetch_array($query))
              { ?>
               <tr> 
                            <th scope="row"><?php echo $cnt;?></th> 
                            <td><?php  echo $row['BillingId'];?></td>
                            <td><?php  echo $row['FirstName'];?> <?php  echo $row['LastName'];?></td>
                            <td><?php  echo $row['MobileNumber'];?></td>
                            <td><?php  echo $row['PostingDate'];?></td> 
                                <td><a href="view-invoice.php?invoiceid=<?php  echo $row['BillingId'];?>" class="btn btn-info">View</a></td> 

                          </tr><?php $cnt=$cnt+1; } ?>
                             
                            </tbody>
                        </table>
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
                            <span class="fa fa-map-marker"></span>
                        </div>
                        <span>No.121, Gonagampala rd, Pilapitiya, Kelaniya.</span>
                    </div>
                    <div class="d-flex align-items-center mb-2">
                        <div class="btn-square bg-dark flex-shrink-0 me-3">
                            <span class="fa fa-phone "></span>
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
                    <a class="btn btn-link text-colour" href="about.php">About Us</a>
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
                   
                </div>
            </div>
        </div>
    </div>
<!-- go top -->
<a href="#" class="btn btn-lg-square btn-arrow back-to-top"><i class="btn-arrow btn-danger bi bi-arrow-up"></i></a>
</body>

</html><?php } ?>