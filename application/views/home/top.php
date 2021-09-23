<body>
  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-none d-lg-block">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
        <i class="icofont-envelope"></i><a href="mailto:<?= $email; ?>" target="_blank" ><?= $email; ?></a>
        <i class="icofont-phone"></i> <a href="tel:<?= $telp; ?>" target="_blank" ><?= $telp; ?></a>
      </div>
      <div class="social-links">
        <!-- <a href="https://twitter.com/excel_shelby" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="https://www.facebook.com/wahyu.punk.988" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="https://www.instagram.com/w.roch19/" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="#" class="skype"><i class="icofont-skype"></i></a>
        <a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a> -->
        <a href="<?= $twitter; ?>" target="_blank" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="<?= $facebook; ?>" target="_blank" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="<?= $instagram; ?>" target="_blank" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="<?= $skype; ?>" target="_blank" class="skype"><i class="icofont-skype"></i></a>
        <a href="<?= $linkedin; ?>" target="_blank" class="linkedin"><i class="icofont-linkedin"></i></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container d-flex">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="index.html"><span><?= $singkatan; ?></span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.html">Home</a></li>

          <li class="drop-down"><a href="#">About</a>
            <ul>
              <li><a href="about.html">About Us</a></li>
              <li><a href="team.html">Team</a></li>

              <li class="drop-down"><a href="#">Drop Down 2</a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
            </ul>
          </li>

          <li><a href="services.html">Services</a></li>
          <li><a href="portfolio.html">Portfolio</a></li>
          <li><a href="pricing.html">Pricing</a></li>
          <li><a href="blog.html">Blog</a></li>
          <li><a href="contact.html">Contact</a></li>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

