<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
 
     ?>
<!doctype html>
<html lang="en">
  <head>
   
    <title>Salon Elegant | Home </title>


    <link rel="stylesheet" href="assets/css/style-starter.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">


    
   
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

   
    <link href="assest/css/animate.min.css" rel="stylesheet">
    <link href="assest/css/owl.carousel.min.css" rel="stylesheet">


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


 <!-- Carousel  -->
 <div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/cur11.jpg" alt="Image">
                    <div class="carousel-caption d-flex align-items-center justify-content-center text-start">
                        <div class="mx-sm-5 px-5" style="max-width: 900px;">
                            <h1 class="display-2 text-white text-uppercase mb-4 animated slideInDown">ATTRACTIVE FASHIONS WITH AFFORDABLE PRICES</h1>
                            <h4 class="text-white text-uppercase mb-4 animated slideInDown"><i class="fa text-primary me-3"></i>No.121, Gonagampala rd, Pilapitiya, Kelaniya.</h4>
                            <h4 class="text-white text-uppercase mb-4 animated slideInDown"><i class="fa text-primary me-3"></i>
                                +94 77 332 49 71</h4>
                        </div> 
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/cur22.jpg" alt="Image">
                    <div class="carousel-caption d-flex align-items-center justify-content-center text-start">
                        <div class="mx-sm-5 px-5" style="max-width: 900px;">
                            <h1 class="display-2 text-white text-uppercase mb-4 animated slideInDown">Attractive Fashions with Affordable Prices</h1>
                            <h4 class="text-white text-uppercase mb-4 animated slideInDown"><i class="fa text-primary me-3"></i>No.121, Gonagampala rd, Pilapitiya, Kelaniya.</h4>
                            <h4 class="text-white text-uppercase mb-4 animated slideInDown"><i class="fa text-primary me-3"></i>+94 77 332 49 71</h4>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>


<!-- About -->
<div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="d-flex flex-column">
                        <img class="img-fluid w-75 align-self-end" src="img/T22.jpg" alt="">
                        <div class="w-50 bg-secondary p-5" style="margin-top: -25%;">
                            <h1 class="text-colour text-uppercase  mb-3">12 Years</h1>
                            <h2 class="text-colour text-uppercase mb-0">Experience</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <p class=" text-color font py-1 px-lg-4">About Us</p>
                    <h1 class="text-color  mb-4">More than just a beauty salon</h1>
                    <p>Our salon will consist of hair cutting, styling hair, and beauty .our mission is to provide friendly,
                        personalized styles with outstanding salon services through a team of highly skilled and creative professionals. 
                        At this salon, we aim to provide our clients with a first-class experience and make them feel special in our warm,
                        classic, and sophisticated environment. We have a busy salon with great staff to our client’s satisfaction. Every year,
                        we introduce new hair collections to make sure our crew remains on top of the latest trends and consistently produces high-quality work. 
                        Our customers can unwind knowing that their individual hair and beauty needs are being taken care of by professionals.</p>
                    <p class="mb-4"></p>
                    <div class="row g-4">
                        <div class="col-md-6">
                            <h3 class=" text-color text-uppercase mb-3">Since 2010</h3>
                            <p class="mb-0">In 3 years studied some of the best beauty institutes in the country and in 12 years we have made high progress in this field </p>
                        </div>
                        <div class="col-md-6">
                            <h3 class="text-color text-uppercase mb-3">500+ clients</h3>
                            <p class="mb-0">Booking appointments made easy for customers. Simple booking procedures will give us an excellent first impression on our customers.
                                There is an environment where customers can have a relaxing mood. We chat with our customers very friendly and keep them happy.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Beauticians -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="text-color font py-1 px-lg-4">Our Beauticians</p>
                <h1 class="text-color mb-4">Introducing Our beauticians</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                            <img class="img-fluid" src="img/Te44.jpg" alt="">
                            <div class="team-social">
                                <a class="btn btn-square" href="https://www.facebook.com/nelumlankaes"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-secondary text-center p-4">
                            <h5 class="text-uppercase">Nelum Lanka</h5>
                            <span class="text-colour">Owner</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item">
                            <img class="img-fluid" src="img/Te33.jpg" alt="">
                            <div class="team-social">
                                <a class="btn btn-square" href="https://www.facebook.com/hansisameep.dissanayake"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href="https://www.instagram.com/vandort_hansi/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-secondary text-center p-4">
                            <h5 class="text-uppercase">Vandort Hansi</h5>
                            <span class="text-colour ">Beauty advisor</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid" src="img/Te11.jpg" alt="">
                            <div class="team-social">
                                <a class="btn btn-square" href="https://www.facebook.com/sanduni.bodhinayake.1"><i class="fab fa-facebook-f"></i></a>                              
                                <a class="btn btn-square" href="https://www.instagram.com/sandubodhinayake/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-secondary text-center p-4">
                            <h5 class="text-uppercase">Sandu Bodhinayaka</h5>
                            <span class="text-colour ">beautician</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid" src="img/Te22.jpg" alt="">
                            <div class="team-social">
                                <a class="btn btn-square" href="https://www.facebook.com/dishmi.kurukulasooriya"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href="https://www.instagram.com/dishmi_k/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-secondary text-center p-4">
                            <h5 class="text-uppercase">Dishmi Kurukulasooriya</h5>
                            <span class="text-colour y">Assistant Beauty advisor</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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

</html>