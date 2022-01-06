            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="row mt-sm-4">
                        <div class="col-12 col-md-12 col-lg-12">
                            <div class="card">
                            <form method="post" class="needs-validation" novalidate="">
                                <div class="card-header justify-content-between">
                                    <div class="col-4">
                                        <h4>Invoice</h4>
                                    </div>
                                    <!-- <div class="col-4">
                                        <div class="text-right">
                                            <button class="btn btn-success">Tambah Admin</button>
                                        </div>
                                    </div> -->
                                </div>
                                <div class="card-body">
                                    <table class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Produk</th>
                                            <th scope="col">Nama Pelanggan</th>
                                            <th scope="col">Alamat</th>
                                            <th scope="col">Jumlah</th>
                                            <th scope="col">Catatan</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Total Biaya</th>
                                            <th scope="col">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if(count($invoices) == 0):?>
                                                <tr>
                                                    <td colspan="9" class="text-center">
                                                        No Data
                                                    </td>
                                                </tr>
                                            <?php endif;?>
                                            <?php $nomor = 1;
                                            foreach($invoices as $invoice):?>
                                            <tr>
                                                <th scope="row"><?= $nomor; $nomor++;?></th>
                                                <td><?= $invoice['product'];?></td>
                                                <td><?= $invoice['name'];?></td>
                                                <td><?= $invoice['address'];?></td>
                                                <td><?= $invoice['jumlah'];?></td>
                                                <td><?= $invoice['catatan'];?></td>
                                                <td><?= $invoice['status'];?></td>
                                                <td><?= $invoice['price'];?></td>
                                                <td><button class="btn btn-success">Edit</button></td>
                                            </tr>
                                            <?php endforeach;?>
                                        </tbody>
                                    </table>
                                    Jumlah Total Invoice : <?= $jumlahtotal;?>
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