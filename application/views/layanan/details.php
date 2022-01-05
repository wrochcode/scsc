

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="<?= base_url();?>">Home</a></li>
          <li><a href="<?= base_url().strtolower($link);?>" ><?= $link;?></a></li>
        </ol>
        <h2>Detail Produk</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row">

          <div class="col-lg-8">
            <h2 class="portfolio-title"><?= $detail[0]['name']; ?></h2>
            <img src="<?=base_url();?>assets/home/img/portfolio/<?= $detail[0]['photo'];?>" class="img-fluid" alt="">
          </div>

          <div class="col-lg-4 portfolio-info">
            <h3>Project information</h3>
            <ul>
              <li><strong>Category</strong>: <?= $detail[0]['category'];?></li>
              <li><strong>Kondisi</strong>: <?= $detail[0]['condition'];?></li>
              <li><strong>Stok</strong>: <?= $detail[0]['supply'];?></li>
              <?php $hasil_rupiah = "Rp " . number_format($detail[0]['price'],2,',','.');?>
              <li><strong>Harga</strong>: <a href="#"><?= $hasil_rupiah;?></a></li>
            </ul>

            <p>
            <?= $detail[0]['description'];?>
            </p>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

 