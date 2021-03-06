                    <?php echo $this->session->flashdata('message'); ?>
                    <form method="POST" action="<?php echo base_url(); ?>login/login" class="needs-validation" novalidate="">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <!-- <input type="username" name="username" placeholder="Masukkan Nama Anda" required/><br> -->
                        <input id="email" type="email" class="form-control" name="username" tabindex="1" placeholder="Example: udinushebat@technopreneur.com" required autofocus>
                        <div class="invalid-feedback">
                            Please fill in your email
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="d-block">
                        <label for="password" class="control-label">Password</label>
                        </div>
                        <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                        <div class="invalid-feedback">
                            please fill in your password
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
                        <button type="submit" class="btn btn-primary btn-lg btn-icon icon-right" tabindex="6">
                            Login
                        </button>
                    </div>

                    <div class="mt-5 text-center">
                        <?php $this->session->sess_destroy();?>
                        Don't have an account? <a href="<?php echo base_url(); ?>register">Create new one</a>
                    </div>
                    </form>
