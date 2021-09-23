<body>
    <div id="app">
        <section class="section">
            <div class="d-flex flex-wrap align-items-stretch">
                <div class="col-lg-4 col-md-6 col-12 order-lg-1 min-vh-100 order-2 bg-white">
                <div class="p-4 m-3">
                    <img src="<?php echo base_url(); ?>/assets/login/img/stisla-fill.svg" alt="logo" width="80" class="shadow-light rounded-circle mb-5 mt-2">
                    <h4 class="text-dark font-weight-normal">Welcome to <span class="font-weight-bold">SCSC</span></h4>
                    <p class="text-muted">Before you get started, you must login or register if you don't already have an account. Enjoyy..</p>

                    <?php echo $this->session->flashdata('message'); ?>
                    <form method="POST" action="<?php echo base_url(); ?>Register/register" class="needs-validation" novalidate="">
                        <!-- <div class="form-group">
                            <label for="email">Full name</label>
                            <input id="email" type="username" autocomplete="off" class="form-control" name="fullname" tabindex="1" placeholder="Example: Edward Newgate" required autofocus>
                            <div class="invalid-feedback">
                                Please fill in your name
                            </div>
                        </div> -->
                        
                        <div class="form-group">
                            <label for="email">Email</label>
                            <!-- <input type="username" name="username" placeholder="Masukkan Nama Anda" required/><br> -->
                            <input id="email" type="email" class="form-control" name="username" tabindex="1" autocomplete="off" placeholder="Example: udinushebat@technopreneur.com" required autofocus>
                            <div class="invalid-feedback">
                                Please fill in your email
                            </div>
                        </div>

                        <!-- <div class="row">
                            <div class="form-group col-6">
                                <label>Jobs</label>
                                <select class="form-control selectric">
                                    <option>Work</option>
                                    <option>JobSeeker</option>
                                    <option>College Student</option>
                                    <option>High school student</option>
                                    <option>Middle school student</option>
                                    <option>Thailand</option>
                                </select>
                            </div>
                            <div class="form-group col-6">
                                <label>Gender</label>
                                <select class="form-control selectric">
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>
                            </div>
                        </div> -->

                        <!-- <div class="row">
                            <div class="form-group col-6">
                                <label for="password" class="d-block">Password</label>
                                <input id="password" type="password" class="form-control pwstrength" tabindex="3" data-indicator="pwindicator" name="password" required>
                                <div id="pwindicator" class="pwindicator">
                                    <div class="bar"></div>
                                    <div class="label"></div>
                                </div>
                                <div class="invalid-feedback">
                                    please fill in your password
                                </div>
                            </div>
                            <div class="form-group col-6">
                                <label for="password2" class="d-block">Password Confirmation</label>
                                <input id="password2" type="password" class="form-control" tabindex="4" name="password-confirm" required>
                                <div class="invalid-feedback">
                                    please fill in your password confirmation
                                </div>
                            </div>
                        </div>                         -->
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
                            Already have an account? <a href="<?php echo base_url(); ?>Login">Log in</a>
                        </div>
                    </form>
