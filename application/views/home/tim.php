<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="<?= base_url();?>">Home</a></li>
          <li><a href="<?= base_url();?>about_us" ><?= $link;?></a></li>
        </ol>
        <h2><?= $link;?></h2>

      </div>
    </section><!-- End Breadcrumbs -->

<!-- ======= About Section ======= -->
<section id="about" class="about">
  <div class="container">

    <div class="row">
      <div class="col-lg-6">
        <img src="<?= base_url();?>assets/home/img/company/<?= $photo;?>" class="img-fluid" alt="">
      </div>
      <div class="col-lg-6 pt-4 pt-lg-0 content">
        <h3><?= $title;?></h3>
        <p class="font-italic">
            <?= $tentang;?>
        </p>
      </div>
    </div>

  </div>
</section><!-- End About Section -->

<!-- ======= Counts Section ======= -->
<section id="counts" class="counts">
  <div class="container">

    <div class="row no-gutters">

      <div class="col-lg-4 col-md-6 d-md-flex align-items-md-stretch">
        <div class="count-box">
          <i class="icofont-simple-smile"></i>
          <span data-toggle="counter-up"><?= $totaltestimoni;?></span>
          <p><strong>Testimoni Pelanggan</strong> tersebar diwilayah kota Semarang.</p>
          <!-- <a href="#">Find out more &raquo;</a> -->
        </div>
      </div>

      <div class="col-lg-4 col-md-6 d-md-flex align-items-md-stretch">
        <div class="count-box">
          <i class="icofont-document-folder"></i>
          <span data-toggle="counter-up">69</span>
          <p><strong>Projects</strong> lebih telah diselesaikan</p>
          <!-- <a href="#">Find out more &raquo;</a> -->
        </div>
      </div>

      <!-- <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
        <div class="count-box">
          <i class="icofont-live-support"></i>
          <span data-toggle="counter-up">1,463</span>
          <p><strong>Hours Of Support</strong> aut commodi quaerat. Aliquam ratione</p>
          <a href="#">Find out more &raquo;</a>
        </div>
      </div> -->

      <div class="col-lg-4 col-md-6 d-md-flex align-items-md-stretch">
        <div class="count-box">
          <i class="icofont-users-alt-5"></i>
          <span data-toggle="counter-up">15</span>
          <p><strong>Teknisi berpengalan</strong> lebih dari 3 tahun dalam bidang teknolgi informasi</p>
          <!-- <a href="#">Find out more &raquo;</a> -->
        </div>
      </div>

    </div>

  </div>
</section><!-- End Counts Section -->

<!-- ======= Visi Section ======= -->
<section id="clients" class="clients">
  <div class="container">

    <div class="section-title">
      <h2>Visi</h2>
      <p><?= $visi;?>.</p>
    </div>

  </div>
</section><!-- End Clients Section -->
<!-- ======= Mis Section ======= -->
<section id="clients" class="clients">
  <div class="container">

    <div class="section-title">
      <h2>Misi</h2>
      <p><?= $misi;?>.</p>
    </div>

  </div>
</section><!-- End Clients Section -->

<!-- ======= Testimonials Section ======= -->
<section id="testimonials" class="testimonials">
  <div class="container">

    <div class="section-title">
      <h2>Testimonials</h2>
      <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
    </div>

    <div class="row">

        <?php foreach($testimoni as $t):?>
        <div class="col-lg-6">
            <div class="testimonial-item mt-4">
                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3><?= $t['email'];?></h3>
                <h4><?= $t['job'];?></h4>
                <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                        <?= character_limiter( $t['description'],250);?>
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
            </div>
        </div>
        
        <?php endforeach;?>
    </div>
    
  </div>
</section><!-- End Testimonials Section -->

</main><!-- End #main -->
