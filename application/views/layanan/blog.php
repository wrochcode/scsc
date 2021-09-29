
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="<?= base_url();?>">Home</a></li>
          <li><a href="<?= base_url().strtolower($link);?>" ><?= $link;?></a></li>
        </ol>
        <h2><?= $sublink;?></h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container">

        <div class="row">

          <div class="col-lg-8 entries">

            <?php foreach($articles as $article):?>
              <article class="entry">

                <div class="entry-img">
                  <img src="<?= base_url();?>assets/home/img/blog/<?= $article['picture'];?>" alt="" class="img-fluid">
                </div>

                <h2 class="entry-title">
                  <a href="<?= base_url().'artikel/detail/'.$article['slug'];?>"><?= $article['title'];?></a>
                </h2>

                <div class="entry-meta">
                  <ul>
                    <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="blog-single.html"><?= $article['author'];?></a></li>
                    <!-- <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">Jan 1, 2020</time></a></li> -->
                    <!-- <li class="d-flex align-items-center"><i class="icofont-comment"></i> <a href="blog-single.html">12 Comments</a></li> -->
                  </ul>
                </div>

                <div class="entry-content">
                  <p>
                    <?= $article['text'];?>
                  </p>
                  <div class="read-more">
                    <a href="<?= base_url().'artikel/detail/'.$article['slug'];?>">Read More</a>
                  </div>
                </div>
              </article><!-- End blog entry -->
            <?php endforeach;?>

            <div class="blog-pagination">
              <ul class="justify-content-center">
                <li class="disabled"><i class="icofont-rounded-left"></i></li>
                <li><a href="#">1</a></li>
                <li class="active"><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#"><i class="icofont-rounded-right"></i></a></li>
              </ul>
            </div>

          </div><!-- End blog entries list -->

          

  