

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
            <h3>Product information</h3>
            <ul>
              <li><strong>Category</strong>: <?= $detail[0]['category'];?></li>
              <li><strong>Kondisi</strong>: <?= $detail[0]['condition'];?></li>
              <li><strong>Stok</strong>: <?= $detail[0]['supply'];?></li>
              <?php $hasil_rupiah = "Rp " . number_format($detail[0]['price'],2,',','.');?>
              <li><strong>Harga</strong>: <?= $hasil_rupiah;?></li>
              <li><strong>Deskripsi</strong>: <p><?= $detail[0]['description'];?></p></li>
            </ul>
            <br><br>
            <strong class="mt-4">Pesan disini</strong>
            <form action="<?php echo base_url(); ?>AkunSaya/makeinvoice" method="POST" role="form" >
                <div class="form-group mt-3">
                    <input id="jumlah" type="number" placeholder="Masukkan jumlah pesanan anda" class="form-control" name="jumlah" tabindex="1" required>
                </div>
                <div class="form-group mt-3">
                    <input id="catatan" type="text" placeholder="Masukkan catatan jika diperlukan" class="form-control" name="jumlah" tabindex="2" >
                </div>
                <?php if($verified == 0):?>
                  <a href="<?= base_url()?>login;?>"><button type="submit">Masukkan Keranjang</button></a>
                <?php else:?>
                  <div class="text-left"><button type="submit">Masukkan Keranjang</button></div>
                <?php endif;?>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

 