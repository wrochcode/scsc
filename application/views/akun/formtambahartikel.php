            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="row mt-sm-4">
                        <div class="col-12 col-md-12 col-lg-12">
                            <div class="card">
                            <form method="post" class="needs-validation" novalidate="">
                                <div class="card-header">
                                <h4>Tambah Artikel</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="form-group col-md-12 col-12">
                                            <label>Judul Artikel</label>
                                            <input type="text" class="form-control" name="title" placeholder="Masukkan Judul Artikel" required="">
                                            <div class="invalid-feedback">
                                                Please fill in the Title Article
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-12 col-12">
                                            <label>Penulis</label>
                                            <input type="text" class="form-control" name="author" placeholder="Masukkan Nama Penulis" required="">
                                            <div class="invalid-feedback">
                                                Please fill in the Author Article
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-12 col-12">
                                            <label>Teks Artikel</label>
                                            <textarea type="text" class="form-control" cols="30" rows="10" name="text" placeholder="Masukkan Teks Artikel" required=""></textarea>
                                            <!-- <textarea class="form-control" rows="10" name="isi" id="isi" placeholder="Tulis isi artikel"><?= set_value('isi'); ?></textarea> -->
                                            <script>
                                                CKEDITOR.replace('isi');
                                            </script>
                                            <div class="invalid-feedback">
                                                Please fill in the Author Article
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