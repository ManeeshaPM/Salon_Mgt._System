<?php 
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['bpmsuid']==0)) {
  header('location:logout.php');
  } else{

if(isset($_POST['submit']))
  {

    $uid=$_SESSION['bpmsuid'];
    $adate=$_POST['adate'];
    $atime=$_POST['atime'];
    $msg=$_POST['message'];
    $aptnumber = mt_rand(100000000, 999999999);
  
    $query=mysqli_query($con,"insert into tblbook(UserID,AptNumber,AptDate,AptTime,Message) value('$uid','$aptnumber','$adate','$atime','$msg')");

    if ($query) {
$ret=mysqli_query($con,"select AptNumber from tblbook where tblbook.UserID='$uid' order by ID desc limit 1;");
$result=mysqli_fetch_array($ret);
$_SESSION['aptno']=$result['AptNumber'];
 echo "<script>window.location.href='thank-you.php'</script>";  
  }
  else
    {
      echo '<script>alert("Something Went Wrong. Please try again")</script>';
    }

  
}
?>
<!doctype html>
<html lang="en">
  <head>
    

    <title>  Salon Elegant | Appointment </title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    
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

<!-- apt date stp -->
<script>
    $(document).ready(function(){
    var dtToday = new Date();
    var month = dtToday.getMonth() + 1;
    var day = dtToday.getDate();
    var year = dtToday.getFullYear();
    if(month < 10)                                                          
        month = '0' + month.toString();
    if(day < 10)
        day = '0' + day.toString();

    var maxDate= year + '-' + month + '-' + day;

    $('#adate').attr('min', maxDate);
});
</script>

<!--  Header -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-3 text-white text-uppercase mb-3 animated slideInDown">Appointment</h1>
            
        </div>
    </div>

<section class="w3l-contact-info-main" id="contact">
    <div class="contact-sec	">
        <div class="container">

            <div class="d-grid contact-view">
                <div class="cont-details">
                    <?php

$ret=mysqli_query($con,"select * from tblpage where PageType='contactus' ");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
                    <div class="cont-top">
                        <div class="cont-left text-center">
                            <span class="fa fa-phone"></span>
                        </div>
                        <div class="cont-right">
                            <h6>Call Us</h6>
                            <p class="para"><a href="tel:+44 99 555 42">+<?php  echo $row['MobileNumber'];?></a></p>
                        </div>
                    </div>
                    <div class="cont-top margin-up">
                        <div class="cont-left text-center">
                            <span class="fa fa-envelope-o"></span>
                        </div>
                        <div class="cont-right">
                            <h6>Email Us</h6>
                            <p class="para"><a href="mailto:example@mail.com" class="mail"><?php  echo $row['Email'];?></a></p>
                        </div>
                    </div>
                    <div class="cont-top margin-up">
                        <div class="cont-left text-center">
                            <span class="fa fa-map-marker"></span>
                        </div>
                        <div class="cont-right">
                            <h6>Address</h6>
                            <p class="para"> <?php  echo $row['PageDescription'];?></p>
                        </div>
                    </div>
                    <div class="cont-top margin-up">
                        <div class="cont-left text-center">
                        </div>
                        <div class="cont-right">
                        </div>
                    </div>
               <?php } ?> </div>
                <div class="map-content-9 mt-lg-0 mt-4">
                    <form method="post">
                        <div style="padding-top: 30px;">
                            <label>Appointment Date</label>
                            
                            <input type="date" class="form-control appointment_date" placeholder="Date" name="adate" id='adate' required="true"></div>
                        <div style="padding-top: 30px;">
                            <label>Appointment Time</label>
                            
                            <input type="time" class="form-control appointment_time" placeholder="Time" name="atime" id='atime' required="true"></div>

                        <div style="padding-top: 30px;">
                        <textarea class="form-control" id="message" name="message" placeholder="Service Code & Message" required=""></textarea></div>
                        <br><br>
                        <button type="submit" class="btn btn-danger" name="submit">Make an Appointment</button>
                    </form>
                </div>
    </div>
   
    </div></div>

<!-- Working Hours  -->
<div class="container-xxl py-5">
        <div class="container">
            <div class="row g-0">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="h-100">
                        <img class="img-fluid h-100" src="img/WH11.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="bg-color bg-secondary h-100 d-flex flex-column justify-content-center p-5">
                        <p class="text-colour font py-1 px-lg-4">Working Hours</p>
                        <h1 class="text-colour mb-4">We Are Waiting For You</h1>
                        <div>
                            <div class="d-flex justify-content-between border-bottom py-2">
                                <h6 class="text-uppercase mb-0">Monday</h6>
                                <span class="text-colour text-uppercase">08 AM - 09 PM</span>
                            </div>
                            <div class="d-flex justify-content-between border-bottom py-2">
                                <h6 class="text-uppercase mb-0">Tuesday</h6>
                                <span class="text-colour text-uppercase">08 AM - 09 PM</span>
                            </div>
                            <div class="d-flex justify-content-between border-bottom py-2">
                                <h6 class="text-uppercase mb-0">Wednesday</h6>
                                <span class="text-colour text-uppercase">08 AM - 09 PM</span>
                            </div>
                            <div class="d-flex justify-content-between border-bottom py-2">
                                <h6 class="text-uppercase mb-0">Thursday</h6>
                                <span class="text-colour text-uppercase">08 AM - 09 PM</span>
                            </div>
                            <div class="d-flex justify-content-between border-bottom py-2">
                                <h6 class="text-uppercase mb-0">Friday</h6>
                                <span class="text-colour text-uppercase">08 AM - 09 PM</span>
                            </div>
                            <div class="d-flex justify-content-between border-bottom py-2">
                                <h6 class="text-uppercase mb-0">Weekend</h6>
                                <span class="text-colour text-uppercase ">08 AM - 01 PM</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


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