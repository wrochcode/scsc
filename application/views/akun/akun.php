            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="row mt-sm-4">
                        <div class="col-12 col-md-12 col-lg-12">
                            <div class="card">
                            <form method="post" class="needs-validation" novalidate="">
                                <div class="card-header">
                                <h4>Edit Profile</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="form-group col-md-12 col-12">
                                            <label>First Name</label>
                                            <input type="text" class="form-control" value="<?= $user[0]['name'];?>" required="">
                                            <div class="invalid-feedback">
                                            Please fill in the first name
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-7 col-12">
                                            <label>Email</label>
                                            <input type="email" class="form-control" value="<?= $user[0]['email'];?>" required="">
                                            <div class="invalid-feedback">
                                                Please fill in the email
                                            </div>
                                        </div>
                                        
                                        <div class="form-group col-md-5 col-12">
                                            <label>Phone</label>
                                            <input type="tel" class="form-control" value="<?= $user[0]['telp'];?>">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6 col-12">
                                            <label>Gender</label>
                                            <select class="form-control selectric">
                                                <option value="men">Laki-laki</option>
                                                <option value="women">Perempuan</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6 col-12">
                                            <label>Tanggal Lahir</label>
                                            <input type="date" class="form-control" value="<?= $user[0]['email'];?>">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-12">
                                            <label>Alamat</label>
                                            <textarea class="form-control summernote-simple" required=""><?= $user[0]['address'];?></textarea>
                                            <div class="invalid-feedback">
                                                Please fill in the address
                                            </div>
                                        </div>
                                    </div>
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