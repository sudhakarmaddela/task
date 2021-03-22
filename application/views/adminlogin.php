<!DOCTYPE html>
<html lang="en">
    
<head>
        <meta charset="utf-8" />
        <title>Log In</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="https://coderthemes.com/highdmin/layouts/assets/images/favicon.ico">

		<!-- App css -->
		<link href="<?php echo base_url();?>public/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
		<link href="<?php echo base_url();?>public/assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-default-stylesheet" />

		<link href="<?php echo base_url();?>public/assets/css/bootstrap-dark.min.css" rel="stylesheet" type="text/css" id="bs-dark-stylesheet" />
		<link href="<?php echo base_url();?>public/assets/css/app-dark.min.css" rel="stylesheet" type="text/css" id="app-dark-stylesheet" />

		<!-- icons -->
		<link href="<?php echo base_url();?>public/assets/css/icons.min.css" rel="stylesheet" type="text/css" />

    </head>

    <body class="auth-fluid-pages loading pb-0">

        <div class="auth-fluid" style="background-image: url(<?php echo base_url();?>public/assets/images/bg-auth.jpg);">
            <!--Auth fluid left content -->
            <div class="auth-fluid-form-box">
                <div>
                    <div class="card-body">

                        <!-- Logo -->
                        <div class="auth-brand text-center">
                            <div class="auth-logo">
                                <a href="index.html" class="logo auth-logo-dark">
                                    <span class="logo-lg">
                                        <img src="<?php echo base_url();?>public/assets/images/logo-dark.png" alt="" height="26">
                                    </span>
                                </a>
            
                                <a href="index.html" class="logo auth-logo-light">
                                    <span class="logo-lg">
                                        <img src="<?php echo base_url();?>public/assets/images/logo-light.png" alt="" height="26">
                                    </span>
                                </a>
                            </div>
                        </div>

                        <!-- title-->
                        <div class="text-center pt-3">
                            <h4 class="mt-0">Sign In</h4>
                            <p class="text-muted mb-4">Enter your email address and password to access account.</p>
                        </div>
                        <?php if($this->session->flashdata('success') != "") { ?>
                        <div class="alert alert-success alert-dismissible mb-3" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                            </button> 
                            <strong><?php echo $this->session->flashdata('success'); ?></strong>
                        </div>
                        <?php  } ?>
                        <?php if($this->session->flashdata('danger') != "") { ?>
                        <div class="alert alert-danger alert-dismissible mb-3" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                            </button> 
                            <strong><?php echo $this->session->flashdata('danger'); ?></strong>
                        </div>
                        <?php  } ?>
                        <!-- form -->
                        <form method="post" action="<?= base_url();?>Admin/adminlogincheck">
                            <div class="form-group">
                                <label for="admin_email">Email address</label>
                                <input class="form-control" type="email" id="admin_email" name="admin_email" required="" placeholder="">
                            </div>
                            <div class="form-group">
                                <a href="#" class="text-muted float-right"><small>Forgot your password?</small></a>
                                <label for="admin_password">Password</label>
                                <input type="password" id="admin_password" name="admin_password" class="form-control" placeholder="">
                            </div>
                            
                            <div class="form-group mb-3">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="checkbox-signin">
                                    <label class="custom-control-label" for="checkbox-signin">Remember me</label>
                                </div>
                            </div>

                            <div class="form-group mb-0">
                                <div class="custom-control">
                                    <input type="submit" value="Sign In" class="btn btn-primary btn-block" id="">
                                </div>
                            </div>
                            
                            <div class="text-center mt-4">
                                <p class="text-muted">Don't have an account? <a href="pages-register.html" class="text-dark ml-1">Sign Up</a></p>
                            </div>
                        </form>
                        <!-- end form-->

                        <!-- Footer-->
                        <footer class="footer footer-alt">
                            <p class="text-muted"><script>document.write(new Date().getFullYear())</script> &copy; Highdmin theme by <a href="#">Coderthemes</a></p>
                        </footer>

                    </div> <!-- end .card-body -->
                </div>
            </div>
            <!-- end auth-fluid-form-box-->

        </div>
        <!-- end auth-fluid-->

        <!-- Vendor js -->
        <script src="<?php echo base_url();?>public/assets/js/vendor.min.js"></script>

        <!-- App js -->
        <script src="<?php echo base_url();?>public/assets/js/app.min.js"></script>
        
    </body>

</html>