  <!-- ======= Footer ======= -->
  <footer id="footer">
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
            <h4>Layanan kami</h4>
            <ul>
              <?php foreach($services as $service):?>
                <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url()?>service/serviceitem/<?= $service['name'];?>"><?= $service['name']; ?></a></li>
              <?php endforeach;?>
              <!-- <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li> -->
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Kontak kami</h4>
            <p>
              <?= $alamat; ?>
              <!-- A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br> -->
              <br><br>
              <strong>Phone:</strong> <?= $telp; ?><br>
              <strong>Email:</strong> <a href="mailto:<?= $email; ?>" target="_blank" class="text-white"><?= $email; ?></a><br>
            </p>

          </div>

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>Tentang <?= $singkatan;?></h3>
            <p><?= ucfirst($tentang);?></p>
            <div class="social-links mt-3">
              <a href="<?= $twitter; ?>" target="_blank" class="twitter"><i class="icofont-twitter"></i></a>
              <a href="<?= $facebook; ?>" target="_blank" class="facebook"><i class="icofont-facebook"></i></a>
              <a href="<?= $instagram; ?>" target="_blank" class="instagram"><i class="icofont-instagram"></i></a>
              <a href="<?= $skype; ?>" target="_blank" class="skype"><i class="icofont-skype"></i></a>
              <a href="<?= $linkedin; ?>" target="_blank" class="linkedin"><i class="icofont-linkedin"></i></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span><?= $singkatan; ?></span></strong>. All Rights Reserved
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