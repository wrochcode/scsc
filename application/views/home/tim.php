<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="<?= base_url();?>">Home</a></li>
          <li><a href="<?= base_url();?>tim" ><?= $link;?></a></li>
        </ol>
        <h2><?= $link;?></h2>

      </div>
    </section>
    <!-- End Breadcrumbs -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container">

        <h2>Top Positions of an Organization</h2>
        <div class="row mt-4">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/img/team/team-1.jpg" alt="">
              <h4><?= ucwords(strtolower($role1));?></h4>
              <span>Chief Executive Officer</span>
              <p>
                <?= $quotes1;?>
              </p>
              <div class="social">
                <a href="<?= $twitter1;?>" title="twitter profile <?= $role1;?>"><i class="icofont-twitter"></i></a>
                <a href="<?= $facebook1;?>" title="facebook profile <?= $role1;?>"><i class="icofont-facebook"></i></a>
                <a href="<?= $instagram1;?>" title="instagram profile <?= $role1;?>"><i class="icofont-instagram"></i></a>
                <a href="<?= $linkedin1;?>" title="linkedin profile <?= $role1;?>"><i class="icofont-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/img/team/team-2.jpg" alt="">
              <h4><?= ucwords(strtolower($role2));?></h4>
              <span>Chief Technology Officer</span>
              <p>
                <?= $quotes2;?>
              </p>
              <div class="social">
                <a href="<?= $twitter2;?>" title="twitter profile <?= $role2;?>"><i class="icofont-twitter"></i></a>
                <a href="<?= $facebook2;?>" title="facebook profile <?= $role2;?>"><i class="icofont-facebook"></i></a>
                <a href="<?= $instagram2;?>" title="instagram profile <?= $role2;?>"><i class="icofont-instagram"></i></a>
                <a href="<?= $linkedin2;?>" title="linkedin profile <?= $role2;?>"><i class="icofont-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/img/team/team-3.jpg" alt="">
              <h4><?= ucwords(strtolower($role3));?></h4>
              <span>Chief Marketing Officer</span>
              <p>
                <?= $quotes3;?>
              </p>
              <div class="social">
                <a href="<?= $twitter3;?>" title="twitter profile <?= $role3;?>"><i class="icofont-twitter"></i></a>
                <a href="<?= $facebook3;?>" title="facebook profile <?= $role3;?>"><i class="icofont-facebook"></i></a>
                <a href="<?= $instagram3;?>" title="instagram profile <?= $role3;?>"><i class="icofont-instagram"></i></a>
                <a href="<?= $linkedin3;?>" title="linkedin profile <?= $role3;?>"><i class="icofont-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>

        <h2 class="mt-5">Amazing Team of an Organization</h2>
        <div class="row mt-4">
          <?php foreach($role4 as $r4):?>
          <div class="col-2 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/img/team/team-3.jpg" alt="">
              <h4><?= ucwords(strtolower($r4['name']));?></h4>
              <span><?= $job4;?></span>
              <div class="social">
                <a href="<?= $r4['twitter'];?>" title="twitter profile <?= $r4['name'];?>"><i class="icofont-twitter"></i></a>
                <a href="<?= $r4['facebook'];?>" title="facebook profile <?= $r4['name'];?>"><i class="icofont-facebook"></i></a>
                <a href="<?= $r4['instagram'];?>" title="instagram profile <?= $r4['name'];?>"><i class="icofont-instagram"></i></a>
                <a href="<?= $r4['linkedin'];?>" title="linkedin profile <?= $r4['name'];?>"><i class="icofont-linkedin"></i></a>
              </div>
            </div>
          </div>
          <?php endforeach;?>

          <?php foreach($role5 as $r5):?>
          <div class="col-2 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/img/team/team-3.jpg" alt="">
              <h4><?= ucwords(strtolower($r5['name']));?></h4>
              <span><?= $job5;?></span>
              <div class="social">
                <a href="<?= $r5['twitter'];?>" title="twitter profile <?= $r5['name'];?>"><i class="icofont-twitter"></i></a>
                <a href="<?= $r5['facebook'];?>" title="facebook profile <?= $r5['name'];?>"><i class="icofont-facebook"></i></a>
                <a href="<?= $r5['instagram'];?>" title="instagram profile <?= $r5['name'];?>"><i class="icofont-instagram"></i></a>
                <a href="<?= $r5['linkedin'];?>" title="linkedin profile <?= $r5['name'];?>"><i class="icofont-linkedin"></i></a>
              </div>
            </div>
          </div>
          <?php endforeach;?>

          <?php foreach($role6 as $r6):?>
          <div class="col-2 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/img/team/team-3.jpg" alt="">
              <h4><?= ucwords(strtolower($r6['name']));?></h4>
              <span><?= $job6;?></span>
              <div class="social">
                <a href="<?= $r6['twitter'];?>" title="twitter profile <?= $r6['name'];?>"><i class="icofont-twitter"></i></a>
                <a href="<?= $r6['facebook'];?>" title="facebook profile <?= $r6['name'];?>"><i class="icofont-facebook"></i></a>
                <a href="<?= $r6['instagram'];?>" title="instagram profile <?= $r6['name'];?>"><i class="icofont-instagram"></i></a>
                <a href="<?= $r6['linkedin'];?>" title="linkedin profile <?= $r6['name'];?>"><i class="icofont-linkedin"></i></a>
              </div>
            </div>
          </div>
          <?php endforeach;?>

        </div>
      </div>
    </section><!-- End Team Section -->

<!-- End Testimonials Section -->

</main><!-- End #main -->
