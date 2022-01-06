            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="row mt-sm-4">
                    <div class="col-12 col-md-12 col-lg-12">
                            <div class="card">
                            <form method="post" class="needs-validation" novalidate="">
                                <div class="card-header justify-content-between">
                                        <div class="col-4">
                                            <h4>Artikel</h4>
                                        </div>
                                        <div class="col-4">
                                            <div class="text-right">
                                                <button class="btn btn-success">Tambah Kategori Artikel</button>
                                            </div>
                                        </div>
                                    
                                </div>
                                <div class="card-body">
                                    <table class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">status</th>
                                            <th scope="col">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $nomor = 1;
                                            foreach($articlecategories as $articlecategorie):?>
                                            <tr>
                                                <th scope="row"><?= $nomor; $nomor++;?></th>
                                                <td><?= $articlecategorie['name'];?></td>
                                                <td><?= $articlecategorie['status'];?></td>
                                                <td><button class="btn btn-success">Edit</button></td>
                                            </tr>
                                            <?php endforeach;?>
                                        </tbody>
                                    </table>
                                    Jumlah Total Artikel : <?= $countarticlecategories;?>
                                </div>
                                <!-- <div class="card-footer text-right">
                                    <button class="btn btn-primary">Save Changes</button>
                                </div> -->
                            </form>
                            </div>
                        </div>
                        <div class="col-12 col-md-12 col-lg-12">
                            <div class="card">
                            <form method="post" class="needs-validation" novalidate="">
                                <div class="card-header justify-content-between">
                                        <div class="col-4">
                                            <h4>Admin</h4>
                                        </div>
                                        <div class="col-4">
                                            <div class="text-right">
                                                <a class="btn btn-success" href="<?php echo base_url(); ?>akunsaya/tambahartikel">Tambah Artikel</a>
                                            </div>
                                        </div>
                                    
                                </div>
                                <div class="card-body">
                                    <table class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Penulis</th>
                                            <th scope="col">Kategori</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $nomor = 1;
                                            foreach($articles as $article):?>
                                            <tr>
                                                <th scope="row"><?= $nomor; $nomor++;?></th>
                                                <td><?= $article['title'];?></td>
                                                <td><?= $article['author'];?></td>
                                                <td><?= $article['category'];?></td>
                                                <td><?= $article['status'];?></td>
                                                <td><button class="btn btn-success">Edit</button></td>
                                            </tr>
                                            <?php endforeach;?>
                                        </tbody>
                                    </table>
                                    Jumlah Total Artikel : <?= $countarticles;?>
                                </div>
                                <!-- <div class="card-footer text-right">
                                    <button class="btn btn-primary">Save Changes</button>
                                </div> -->
                            </form>
                            </div>
                        </div>
                    </div>
                </section>
            </div>