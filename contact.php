<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="en">

<head>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-941Z1Y42RL"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-941Z1Y42RL');
</script>

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Global Wissen Limited | Digital Entrepreneiurship | Contact Us</title>
  <!-- google fonts -->
  <link href="//fonts.googleapis.com/css2?family=Kumbh+Sans:wght@300;400;700&display=swap" rel="stylesheet">
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style-starter.css">
  <link rel="icon" type="icon.png" href="assets/image/logo.png">
</head>

<body>
  <!--header-->
    <?php
        include('inc/header.php');
    ?>


<!-- breadcrumb -->
<section class="w3l-about-breadcrumb text-center">
  <div class="breadcrumb-bg breadcrumb-bg-about py-5">
      <div class="container py-lg-5 py-md-4">
        <div class="w3breadcrumb-gids">
          <div class="w3breadcrumb-left text-left">
                    <h2 class="title AboutPageBanner">
                  </h2>
                              <!-- <p class="inner-page-para mt-2">
                                Prevent the Spread
                                Stay at Home, Stay Safe             </p> -->
          </div>
          <!-- <div class="w3breadcrumb-right">
                <ul class="breadcrumbs-custom-path">
                  <li><a href="index">Home</a></li>
                  <li class="active"><span class="fas fa-angle-double-right mx-2"></span> Contact Us</li>
                </ul>
          </div> -->
    </div>
      </div>
      <div class="hero-overlay"></div>
  </div>
</section>
<!--//breadcrumb-->
 <!-- contact-form 2 -->
 <section class="w3l-contact-2 py-5" id="contact">
  <div class="container py-lg-4 py-md-3 py-2">
    <div class="title-content text-center">
      <!-- <span class="title-subw3hny">Get in touch</span> -->
      <h3 class="title-w3l mb-lg-4">SEND US A MESSAGE<br></h3>

    </div>
    <div class="contact-grids d-grid mt-5 mx-lg-5">
      <div class="contact-left">
        <div class="cont-details">
          <!-- <div class="cont-top margin-up">
            <div class="cont-left text-center">
              <span class="fas fa-map-marked-alt"></span>
            </div>
            <div class="cont-right">
              <h6>Our head office address:</h6>
              <p>Lorem ipsum Agency, 343 marketing, #4148 Honey street, NY - 62617.</p>
            </div>
          </div> -->
          <div class="cont-top margin-up">
            <div class="cont-left text-center">
              <span class="fas fa-blender-phone"></span>
            </div>
            <div class="cont-right">
              <h6>CALL US:</h6>
              <p><a href="tel:+234 814 153 3146">+234 814 153 3146</a></p>
              <!-- <p><a href="tel:+1(21) 234 4567">+1(21) 234 557 4568</a></p> -->
            </div>
          </div>
          <div class="cont-top margin-up">
            <div class="cont-left text-center">
              <span class="fas fa-envelope-open-text"></span>
            </div>
            <div class="cont-right">
              <h6>
                MAIL US:</h6>
              <p><a href="mailto:info@globalwissen.com" class="mail">info@globalwissen.com</a></p>
              <!-- <p><a href="mailto:contact@mail.com" class="mail">contact@mail.com</a></p> -->
            </div>
          </div>
        </div>
      </div>
      <div class="contact-right">
        <form action="proc-contact.php" method="post" class="signin-form">
          
 
                 

          <div class="input-grids">
            <input type="text" name="name" placeholder="Your Name*" class="contact-input"
              required="" />
            <input type="email" name="email" placeholder="Your Email*" class="contact-input"
              required="" />
            <input type="text" name="subject" placeholder="Subject*" class="contact-input"
              required="" />
          </div>
          <div class="form-input">
            <textarea name="message" placeholder="Type your message here*" required=""></textarea>
          </div>
          <div class="submit-w3l-button text-lg-right">
              <button class="btn btn-style btn-primary">SEND MESSAGE</button>
          </div>
        </form>
      </div>
    </div>
</section>
<!-- /contact-form-2 -->


<?php
                include('inc/footer.php');
          ?>

</body>

</html>