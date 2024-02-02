<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
error_reporting(0);

if(isset($_POST['submit']))
  {
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $message=$_POST['message'];
     
    $query=mysqli_query($con, "insert into tblcontact(FirstName,LastName,Phone,Email,Message) value('$fname','$lname','$phone','$email','$message')");
    if ($query) {
   echo "<script>alert('Your message was sent successfully!.');</script>";
echo "<script>window.location.href ='contact.php'</script>";
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

  
   
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

   
    <link href="assest/css/animate.min.css" rel="stylesheet">
    <link href="assest/css/owl.carousel.min.css" rel="stylesheet">


    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:400,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

    <title>Salon Elegant | Gallery </title>
 
   
    <link rel="stylesheet" href="assets/css/style-starter.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">


    

    
    
   

    


  </head>
  <body id="home">
<?php include_once('includes/header.php');?>

<script src="assets/js/jquery-3.3.1.min.js"></script> <!-- Common jquery plugin -->
<!--bootstrap working-->
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
            <h1 class="display-3 text-white text-uppercase mb-3 animated slideInDown">INDIAN</h1>
            
        </div>
    </div>

</section>


<div class="gallery-section">
        <div class="gallery-wrap">
            <div class="gallery-images">
                <div class="gallery">
                    <div class="image-section">
                        <a href="images/img1.jpeg" data-lightbox="models">
                        <img src="images/img1.jpeg">
                    </div>
                </a>
                </div>
                <div class="gallery">
                    <div class="image-section">
                        <a href="images/img2.jpeg" data-lightbox="models">
                        <img src="images/img2.jpeg">
                    </div>
                </a>
                </div>
                <div class="gallery">
                    <div class="image-section">
                        <a href="images/img3.jpeg" data-lightbox="models">
                        <img src="images/img3.jpeg">
                    </div>
                </a>
                </div>
                <div class="gallery">
                    <div class="image-section">
                        <a href="images/img4.jpeg" data-lightbox="models">
                        <img src="images/img4.jpeg">
                    </div>
                </a>
                </div>
                <div class="gallery">
                    <div class="image-section">
                        <a href="images/i3.jpg" data-lightbox="models">
                        <img src="images/i3.jpg">
                    </div>
                </a>
                </div>
                <div class="gallery">
                    <div class="image-section">
                        <a href="images/imge11.png" data-lightbox="models">
                        <img src="images/imge11.png">
                    </div>
                </a>
                </div>
                
                <div class="gallery">
                    <div class="image-section">
                        <a href="images/i2.jpg" data-lightbox="models">
                        <img src="images/i2.jpg">
                    </div>
                </a>
                </div>
                <div class="gallery">
                    <div class="image-section">
                        <a href="images/imge12.jpg" data-lightbox="models">
                        <img src="images/imge12.jpg">
                    </div>
                </a>
                </div>
               
                <div class="gallery">
                    <div class="image-section">
                        <a href="images/i1.jpg" data-lightbox="models">
                        <img src="images/i1.jpg">
                    </div>
                </a>
                </div>
                <div class="gallery">
                    <div class="image-section">
                        <a href="images/imge9.jpg" data-lightbox="models">
                        <img src="images/imge9.jpg">
                    </div>
                </a>
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

</html>