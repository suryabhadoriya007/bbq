

<?php

if($_POST["submit"]) {
    $recipient="suryabhadoriya007@gmail.com";
    
    $sender=$_POST["sender"];
    $senderEmail=$_POST["senderEmail"];
    $message=$_POST["message"];

    $mailBody="Name: $sender\nEmail: $senderEmail\nSubject: $subject   \nMessage: $message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
}

?>
<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Instant &mdash; </title>
    <meta name="description" content="free Bootstrap 4 Theme by uicookies.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
    
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text:400,400i,600|Montserrat:200,300,400, 600, 700" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="assets/fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">

    <link rel="stylesheet" href="assets/fonts/fontawesome/css/font-awesome.min.css">
    
    
    <link rel="stylesheet" href="assets/css/slick.css">

    <link rel="stylesheet" href="assets/css/helpers.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/restaurant.css">
    <link rel="shortcut icon" href="assets/images/fevi.jpg" type="image/x-icon"/>

     <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"
  />
</head>

<body data-spy="scroll" data-target="#pb-navbar" data-offset="200">

 <div class="probootstrap-loader"></div>
    <!-- END loader -->

    <nav class="navbar navbar-expand-lg navbar-light pb_navbar pb_scrolled-light bg-dark" id="pb-navbar">
      <div class="container">
        <a class="navbar-brand d-xl-none d-lg-none d-md-block d-sm-block" href="/">
          <img style="margin-top:5px;height:60px;width:180px; "  src="assets/images/restaurant/log.png" alt="Instant Logo" class="light">
          <img src="assets/images/restaurant/log.png" alt="Instant Logo" class="dark">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#probootstrap-navbar" aria-controls="probootstrap-navbar" aria-expanded="false" aria-label="Toggle navigation">
          <span><i class="ion-navicon"></i></span>
        </button>
        <div class="collapse navbar-collapse justify-content-md-center" id="probootstrap-navbar">
          <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link text-uppercase pb_letter-spacing-2" href="#section-home">Home</a></li>
            <li class="nav-item"><a class="nav-link text-uppercase pb_letter-spacing-2" href="#section-about">About</a></li>
            <li class="nav-item"><a class="nav-link text-uppercase pb_letter-spacing-2" href="#section-menu">Menu</a></li>
            <li class="nav-item logo-center d-xl-block d-lg-block d-md-none d-sm-none d-none">
              <a>
                <img style="margin-top:5px;height:70px;width:180px; " src="assets/images/restaurant/log.png" alt="Instant Logo" class="light">
                <img src="assets/images/restaurant/log.png" alt="Instant Logo" class="dark">
              </a>
            </li>
            <li class="nav-item"><a class="nav-link text-uppercase pb_letter-spacing-2" href="#section-gallery">Gallery</a></li>
            
            
             <li class="nav-item">
               <a class="nav-link text-uppercase pb_letter-spacing-2" href="contact.php">contact</a>
                           </li>
             
          </ul>
        </div>
      </div>
    </nav>



<!-- contact form -->


    <section class="pb_section mt-5 pb-0" id="section-contact">
      <div class="col-md-12 ">
        <div class= "row">

    
        <div class="pb_half py-5">
          <div class="row justify-content-center mb-5 my-3">
            <div class="col-md-10 text-center">
              <h2 class="mb-4 text-uppercase pb_letter-spacing-2">Write us</h2>
            </div>
          </div>
          <div class="row justify-content-md-center">
            <div class="col-md-7">
              <form method="post" action="contact.php">
                <div class="row">
                  <div class="col-md">

                    <div class="form-group">
                      <label for="name">Name</label>
                      <input type="text" class="form-control p-3 rounded-0" id="name" name="sender">
                    </div>
                  </div>
                  <div class="col-md">
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input type="text" class="form-control p-3 rounded-0" id="email" name="senderEmail">
                    </div>
                  </div>
                </div>
                
                <div class="form-group">
                  <label for="message">Message</label>
                  <textarea cols="30" rows="10" class="form-control  p-3 rounded-0" id="message" name="message"></textarea>
                </div>
                <div class="form-group">
                  <input type="submit" class="btn pb_outline-dark pb_font-13 pb_letter-spacing-2  p-3 rounded-0" value="Send Message" name="submit">
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="pb_half" id="map" >
              <iframe class="pt-5" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d159068.2712701961!2d-2.7307999314742175!3d51.46840550136471!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4871836681b3d861%3A0x8ee4b22e4b9ad71f!2sBristol%2C%20UK!5e0!3m2!1sen!2sin!4v1591252223438!5m2!1sen!2sin" width="600" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
      
</div>
</div>

      <script src="https://apps.elfsight.com/p/platform.js" defer></script>
<div class="elfsight-app-cd8abb59-1ba2-4c99-a3cb-d830301b921c"></div>
      
    </section>
</body>

</html>