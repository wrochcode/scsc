  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
          </div>
          <div class="col-lg-6">
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
                <?= $alamat; ?>
              <!-- A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br> -->
              <br><br>
              <strong>Phone:</strong> <?= $telp; ?><br>
              <strong>Email:</strong> <?= $email; ?><br>
            </p>

          </div>

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>About Eterna</h3>
            <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
            <div class="social-links mt-3">
                <a href="<?= $twitter; ?>" class="twitter"><i class="icofont-twitter"></i></a>
                <a href="<?= $facebook; ?>" class="facebook"><i class="icofont-facebook"></i></a>
                <a href="<?= $instagram; ?>" class="instagram"><i class="icofont-instagram"></i></a>
                <a href="<?= $skype; ?>" class="skype"><i class="icofont-skype"></i></a>
                <a href="<?= $linkedin; ?>" class="linkedin"><i class="icofont-linkedin"></i></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Eterna</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/eterna-free-multipurpose-bootstrap-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php echo base_url(); ?>assets/home/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/home/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/home/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/home/vendor/php-email-form/validate.js"></script>
  <script src="<?php echo base_url(); ?>assets/home/vendor/jquery-sticky/jquery.sticky.js"></script>
  <script src="<?php echo base_url(); ?>assets/home/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/home/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/home/vendor/counterup/counterup.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/home/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/home/vendor/venobox/venobox.min.js"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url(); ?>assets/home/js/main.js"></script>

</body>

</html>