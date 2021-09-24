                    <?php echo $this->session->flashdata('message'); ?>
                    <form method="POST" action="<?php echo base_url(); ?>Register/register" class="needs-validation" novalidate="">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <!-- <input type="username" name="username" placeholder="Masukkan Nama Anda" required/><br> -->
                            <input id="email" type="email" class="form-control" name="username" tabindex="1" autocomplete="off" placeholder="Example: udinushebat@technopreneur.com" required autofocus>
                            <div class="invalid-feedback">
                                Please fill in your email
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-6">
                                <div class="d-block">
                                    <label for="password" class="control-label">Password</label>
                                </div>
                                <input id="password" type="password" class="form-control" name="password" tabindex="2" requireda utofocus>
                                <div class="invalid-feedback">
                                    please fill in your password
                                </div>
                            </div>
                            <div class="form-group col-6">
                                <div class="d-block">
                                    <label for="password2" class="control-label">Password Confirmation</label>
                                </div>
                                <input id="password2" type="password" class="form-control" name="password2" tabindex="3" required autofocus>
                                <div class="invalid-feedback">
                                    please fill in your password confirmation
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                            <input type="checkbox" name="remember" class="custom-control-input" tabindex="5" id="remember-me">
                            <label class="custom-control-label" for="remember-me">Remember Me</label>
                            </div>
                        </div>

                        <div class="form-group text-right">
                            <a href="auth-forgot-password.html" class="float-left mt-3">
                                Forgot Password?
                            </a>
                            <button type="submit" class="btn btn-primary btn-lg btn-icon icon-right" tabindex="4">
                                Register
                            </button>
                        </div>

                        <div class="mt-5 text-center">
                            <?php $this->session->sess_destroy();?>
                            Already have an account? <a href="<?php echo base_url(); ?>login">Log in</a>
                        </div>
                    </form>
