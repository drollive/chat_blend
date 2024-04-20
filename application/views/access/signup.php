<body>

    <div class="auth-page-wrapper pt-5">
        <!-- auth page bg -->
        <div class="auth-one-bg-position auth-one-bg" id="auth-particles">
            <div class="bg-overlay"></div>
            <div class="shape">
                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1440 120">
                    <path d="M 0,36 C 144,53.6 432,123.2 720,124 C 1008,124.8 1296,56.8 1440,40L1440 140L0 140z"></path>
                </svg>
            </div>
        </div>

        <!-- auth page content -->
        <div class="auth-page-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center mt-sm-5 mb-4 text-white-50">
                            <div>
                                <a href="<?= base_url() ?>" class="d-inline-block auth-logo">
                                    <h1 class="display-7 fw-medium mb-4 lh-base text-white"><img src="<?php echo base_url('public/assets') ?>/images/svg/blender.svg" alt="" width="40px" height="30px">Chat<span>Blend</span></h1>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card mt-4">
                            <div class="card-body p-4">
                                <div class="text-center mt-2">
                                    <h5 class="text-primary">Create New Account</h5>
                                    <p class="text-muted">Get your free ChatBlend account now.</p>
                                </div>
                                <div class="p-2 mt-4">
                                    <form class="needs-validation" novalidate action="create" method="POST">
                                        <div class="mb-3">
                                            <label for="full_name" class="form-label">Full Name <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="full_name" name="full_name" placeholder="Enter Full Name" required>
                                            <div class="invalid-feedback">
                                                Please enter Full Name
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="email_address" class="form-label">Email Address <span class="text-danger">*</span></label>
                                            <input type="email" class="form-control" id="email" name="email_address" placeholder="Enter Email Address" required>
                                            <div class="invalid-feedback">
                                                Please enter Email Address
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <div class="col-lg-12">
                                                <label for="language" class="form-label">Language <span class="text-danger">*</span></label>
                                                <select class="form-select js-example-basic-single" id="language" name="language" data-choices data-choices-search-false required>
                                                    <option value="" selected disabled>Select your language</option>
                                                    <option value="English">English</option>
                                                    <option value="Chinese">Chinese</option>
                                                    <option value="Italian">Italian</option>
                                                    <option value="Spanish">Spanish</option>
                                                    <option value="Filipino">Filipino</option>
                                                </select>
                                                <div class="invalid-feedback">
                                                    Please select your language
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="password">Password <span class="text-danger">*</span></label>
                                            <div class="position-relative auth-pass-inputgroup mb-3">
                                                <input type="password" class="form-control pe-5 password-input" onpaste="return false" name="password" placeholder="Enter password" id="password-input" aria-describedby="passwordInput" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
                                                <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted shadow-none password-addon" type="button" id="password-addon"><i class="bi bi-eye-slash" id="togglePassword"></i></button>
                                                <div class="invalid-feedback">
                                                    Please create a Password
                                                </div>
                                            </div>
                                            <label class="form-label" for="password">Confirm Password <span class="text-danger">*</span></label>
                                            <div class="position-relative auth-pass-inputgroup mb-3">
                                                <input type="password" class="form-control pe-5 password-input" name="confirm_password" placeholder="Confirm Password" id="confirm-password-input" name="confirm_password" required>
                                                <button class=" btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted shadow-none password-addon" type="button" id="confirm-password-addon"><i class="bi bi-eye-slash" id="togglePassword"></i></button>
                                                <div class="invalid-feedback" id="invalid-password">
                                                    Password do not match!
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-4">
                                            <p class="mb-0 fs-13 text-muted fst-italic">By registering you agree to the ChatBlend <a href="#" class="text-primary text-decoration-underline fst-normal fw-semibold"> Terms of Use</a></p>
                                        </div>

                                        <div id="password-contain" class="p-1 bg-light mb-2 rounded">
                                            <h5 class="fs-13">Password must contain:</h5>
                                            <p id="pass-length" class="invalid fs-13 mb-2 pl-2">Minimum <b>8 characters</b></p>
                                            <p id="pass-lower" class="invalid fs-13 mb-2">At <b>lowercase</b> letter (a-z)</p>
                                            <p id="pass-upper" class="invalid fs-13 mb-2">At least <b>uppercase</b> letter (A-Z)</p>
                                            <p id="pass-number" class="invalid fs-13 mb-0">A least <b>number</b> (0-9)</p>
                                        </div>

                                        <div class="mt-4">
                                            <button class="btn btn-success w-100" type="submit">Sign Up</button>
                                        </div>

                                        <div class="mt-4 text-center">
                                            <div class="signin-other-title">
                                                <h5 class="fs-14 mb-4 title text-muted">Create account with</h5>
                                            </div>

                                            <div>
                                                <button type="button" class="btn btn-primary btn-icon waves-effect waves-light"><i class="ri-facebook-fill fs-16"></i></button>
                                                <button type="button" class="btn btn-danger btn-icon waves-effect waves-light"><i class="ri-google-fill fs-16"></i></button>
                                                <button type="button" class="btn btn-dark btn-icon waves-effect waves-light"><i class="ri-github-fill fs-16"></i></button>
                                                <button type="button" class="btn btn-info btn-icon waves-effect waves-light"><i class="ri-twitter-fill fs-16"></i></button>
                                            </div>
                                        </div>
                                    </form>

                                    <?php if ($this->session->flashdata('error')) {
                                    ?>
                                        <?= $this->session->flashdata('error') ?>
                                    <?php }
                                    ?>
                                </div>
                            </div>
                            <div class="mt-5 text-center" id="acc">
                                <p class="mb-0">Already have an account ? <a href="<?php echo base_url() ?>signin" class="fw-bold text-primary text-decoration-underline"> Signin </a> </p>
                            </div>
                            <!-- end card body -->
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end auth page content -->
        <!-- footer -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <p class="mb-0 text-muted">&copy;
                                <script>
                                    document.write(new Date().getFullYear())
                                </script> ChatBlend
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->
    </div>
    <!-- end auth-page-wrapper -->
</body>

</html>