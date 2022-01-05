            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="row mt-sm-4">
                        <div class="col-12 col-md-12 col-lg-12">
                            <div class="card">
                            <form method="post" class="needs-validation" novalidate="">
                                <div class="card-header justify-content-between">
                                        <div class="col-4">
                                            <h4>Admin</h4>
                                        </div>
                                        <div class="col-4">
                                            <div class="text-right">
                                                <button class="btn btn-success">Tambah Admin</button>
                                            </div>
                                        </div>
                                    
                                </div>
                                <div class="card-body">
                                    <table class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Posisi</th>
                                            <th scope="col">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $nomor = 1;
                                            foreach($adminarticle as $user):?>
                                            <tr>
                                                <th scope="row"><?= $nomor; $nomor++;?></th>
                                                <td><?= $user['name'];?></td>
                                                <td><?= $user['email'];?></td>
                                                <td>Article creator</td>
                                                <td><?= $user['status'];?></td>
                                            </tr>
                                            <?php endforeach;?>
                                            <?php foreach($admin as $user):?>
                                            <tr>
                                                <th scope="row"><?= $nomor; $nomor++;?></th>
                                                <td><?= $user['name'];?></td>
                                                <td><?= $user['email'];?></td>
                                                <td>Kakak Admin</td>
                                                <td><?= $user['status'];?></td>
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