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
                                            <label>Title</label>
                                            <input type="text" placeholder="Masukkan Judul Artikel" class="form-control" required="">
                                            <div class="invalid-feedback">
                                                Please fill in the Title Article
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-12 col-12">
                                            <label>Title</label>
                                            <input type="text" placeholder="Masukkan Penulis" class="form-control" required="">
                                            <div class="invalid-feedback">
                                                Please fill in the Author Article
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-12 col-12">
                                            <label>Tulis Artikel</label>
                                            <textarea class="form-control" rows="10" name="isi" id="isi" placeholder="Tulis isi artikel"><?= set_value('isi'); ?></textarea>
                                            <script>
                                                CKEDITOR.replace('isi');
                                                </script>
                                            <div class="invalid-feedback">
                                                Please fill in the Text Article
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-12 col-12">
                                            <label>Kategori</label>
                                            <input type="text" placeholder="Masukkan Kategori Article" class="form-control" required="">
                                            <div class="invalid-feedback">
                                                Please fill in the Category Article
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-right">
                                    <button class="btn btn-primary">Make Article</button>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </section>
            </div>