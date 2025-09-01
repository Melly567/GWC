<!-- footer -->
<section class="w3l-footer-29-main">
  <div class="footer-29 py-5">
    <div class="container py-lg-4">
      <div class="row footer-top-29">
        <div class="col-lg-4 col-md-6 footer-list-29 footer-1">
          <h6 class="footer-title-29">Contact Info</h6>
          <p>Global Wissen Consult</p>
          <p>Digital Entrepreneurship & Skills</p>
          <p class="my-2"><a href="mailto:info@globalwissen.com">info@globalwissen.com</a></p>
          <p><a href="tel:+1234567890">+123 456 7890</a></p>
        </div>
        <div class="col-lg-4 col-md-6 footer-list-29 footer-2 mt-md-0 mt-4">
          <h6 class="footer-title-29">Our Services</h6>
          <ul>
            <li><a href="#services" class="footer-link-29">Knowledge Programs</a></li>
            <li><a href="#services" class="footer-link-29">Community Building</a></li>
            <li><a href="#services" class="footer-link-29">Resources & Support</a></li>
            <li><a href="courses.php" class="footer-link-29">Professional Skills</a></li>
          </ul>
        </div>
        <div class="col-lg-4 col-md-6 footer-list-29 footer-3 mt-lg-0 mt-4">
          <h6 class="footer-title-29">Quick Links</h6>
          <ul>
            <li><a href="index.php" class="footer-link-29">Home</a></li>
            <li><a href="about.php" class="footer-link-29">About Us</a></li>
            <li><a href="services.php" class="footer-link-29">Services</a></li>
            <li><a href="contact.php" class="footer-link-29">Contact</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- //footer -->

<!-- copyright -->
<section class="w3l-copyright">
  <div class="container">
    <div class="row bottom-copies">
      <p class="col-lg-8 copy-footer-29">© 2024 Global Wissen Consult. All rights reserved.</p>
      <div class="col-lg-4 main-social-footer-29">
        <a href="#facebook" class="facebook"><span class="fab fa-facebook-f"></span></a>
        <a href="#twitter" class="twitter"><span class="fab fa-twitter"></span></a>
        <a href="#linkedin" class="linkedin"><span class="fab fa-linkedin-in"></span></a>
        <a href="#instagram" class="instagram"><span class="fab fa-instagram"></span></a>
      </div>
    </div>
  </div>
  
  <!-- move top -->
  <button onclick="topFunction()" id="movetop" title="Go to top">
    <i class="fas fa-level-up-alt"></i>
  </button>
  <script>
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function () {
      scrollFunction()
    };

    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("movetop").style.display = "block";
      } else {
        document.getElementById("movetop").style.display = "none";
      }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
  </script>
  <!-- /move top -->
</section>
<!-- //copyright -->

<!--//footer-->
<!-- Template JavaScript -->
<script src="assets/js/jquery-3.3.1.min.js"></script>
<script src="assets/js/theme-change.js"></script>
<script src="assets/js/script.js"></script>

<!-- disable body scroll which navbar is in active -->
<script>
  $(function () {
    $('.navbar-toggler').click(function () {
      $('body').toggleClass('noscroll');
    })
  });
</script>

<!--/MENU-JS-->
<script>
  $(window).on("scroll", function () {
    var scroll = $(window).scrollTop();

    if (scroll >= 80) {
      $("#site-header").addClass("nav-fixed");
    } else {
      $("#site-header").removeClass("nav-fixed");
    }
  });

  //Main navigation Active Class Add Remove
  $(".navbar-toggler").on("click", function () {
    $("header").toggleClass("active");
  });
  
  $(document).on("ready", function () {
    if ($(window).width() > 991) {
      $("header").removeClass("active");
    }
    $(window).on("resize", function () {
      if ($(window).width() > 991) {
        $("header").removeClass("active");
      }
    });
  });
</script>
<!--//MENU-JS-->
<script src="assets/js/bootstrap.min.js"></script>

</body>
</html>