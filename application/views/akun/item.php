            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="row mt-sm-4">
                        <div class="col-12 col-md-12 col-lg-12">
                            <div class="card">
                            <form method="post" class="needs-validation" novalidate="">
                                <div class="card-header justify-content-between">
                                        <div class="col-4">
                                            <h4>Teknisi</h4>
                                        </div>
                                        <div class="col-4">
                                            <div class="text-right">
                                                <button class="btn btn-success">Tambah Produk Hardware</button>
                                            </div>
                                        </div>
                                    
                                </div>
                                <div class="card-body">
                                    <table class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Kategori</th>
                                            <th scope="col">Deskripsi</th>
                                            <th scope="col">Kondisi</th>
                                            <th scope="col">Status Tampil</th>
                                            <th scope="col">Jumlah Stok</th>
                                            <th scope="col">Harga</th>
                                            <th scope="col">Status Barang</th>
                                            <th scope="col">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $nomor = 1;
                                            foreach($products as $sevice):?>
                                            <tr>
                                                <th scope="row"><?= $nomor; $nomor++;?></th>
                                                <td><?= $sevice['name'];?></td>
                                                <td><?= $sevice['category'];?></td>
                                                <td><?= $sevice['description'];?></td>
                                                <td><?= $sevice['condition'];?></td>
                                                <td><?= $sevice['ready'];?></td>
                                                <td><?= $sevice['supply'];?></td>
                                                <td><?= $sevice['price'];?></td>
                                                <td><?= $sevice['status'];?></td>
                                                <td><button class="btn btn-success">Edit</button></td>
                                            </tr>
                                            <?php endforeach;?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="card-footer text-right">
                                    <button class="btn btn-primary">Save Changes</button>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </section>
            </div>