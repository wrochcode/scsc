
  <main id="main">

<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">

    <ol>
      <li><a href="<?= base_url();?>">Home</a></li>
      <li><a href="<?= base_url().strtolower($link);?>" ><?= $link;?></a></li> 
    </ol>
    <h2><?= $link;?></h2>

  </div>
</section><!-- End Breadcrumbs -->
<main>
    <section id="contact" class="contact">
        <div class="container">
            <?php $a=1 ;
            foreach($keranjang as $barang):?>
            <div class="row">
                <div class="col-12 text-left">
                    <div class="row info-box mb-4">
                        <div class="col-3">
                            <img src="<?=base_url();?>assets/home/img/portfolio/<?= $barang['photo'];?>" class="img-fluid" alt="">
                        </div>
                        <!-- <div class="col-9"> -->
                            <div class="text-left">
                                <h3><?= $barang['product'];?></h3>
                                <p>Catatan : <?= $barang['catatan'];?></p>
                                <p>Jumlah : <?= $barang['jumlah'];?></p>
                                <?php $hasil_rupiah = "Rp " . number_format($barang['price'],2,',','.');?>
                                <p>Total : <?= $hasil_rupiah;?></p>
                                <br><br>
                            </div>
                            <div class="col align-self-end">
                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">Konfirmasi pembayaran</button>
                            </div>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Admin baik</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Sudah Transfer/sudah bayar?<br>
                                    Jika sudah, tunggu dilit, hehe..
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Belum transfer</button>
                                    <a href="https://api.whatsapp.com/send?phone=<?= $adminkonfirmasi;?>&text=Hallo%20min%20saya%20ingin%20melakukan%20pembayaran%20Service Computer Semarang City%0AFormat%20Konfirmasi%20: %0A%0ANama%20 : %0ATanggal%20 %20pesan%20 : %0ANo%20.%20Wa%20 :%0A%0ATerimakasih.">
                                        <button type="button" class="btn btn-success">Konfirmasi pembayaran</button>
                                    </a>
                                </div>
                                </div>
                            </div>
                            </div>
                            
                        <!-- </div> -->
                    </div>
                </div>
            </div>
            <?php endforeach;?>
        </div>
    </section>
</main>


</main><!-- End #main -->
