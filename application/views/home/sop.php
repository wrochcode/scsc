
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

<!-- ======= Blog Section ======= -->
<section id="blog" class="blog">
  <div class="container">

    <div class="row">

      <div class="col-lg-10 entries">
          <article class="entry">

            <h2 class="entry-title">
                <?= strtoupper($description." ".$singkatan);?>
                <!-- <?= ucwords(strtolower($description." ".$singkatan));?> -->
            </h2>

            <div class="entry-content">
              <p>
                <?= $sop;?>
              </p>
            </div>
          </article><!-- End blog entry -->

      </div><!-- End blog entries list -->
      

        </div>

      </div>
    </section><!-- End Blog Section -->


  </main><!-- End #main -->

      

