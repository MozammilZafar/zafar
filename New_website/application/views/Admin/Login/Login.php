<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <!-- <meta name="description" content="<?= $basic_details->meta_content; ?>">
        <meta name="keyword" content="<?= $basic_details->meta_key; ?>"> -->

        <title><?= $basic_details->site_name; ?></title>

        <!-- Theme icon -->
        <link rel="shortcut icon" href="<?= base_url($basic_details->icon); ?>">

        <!-- Theme Css -->
        <link href="<?= base_url('assets/admin/') ?>css/bootstrap.min.css" rel="stylesheet">
        <link href="<?= base_url('assets/admin/') ?>css/slidebars.min.css" rel="stylesheet">
        <link href="<?= base_url('assets/admin/') ?>css/icons.css" rel="stylesheet">
        <link href="<?= base_url('assets/admin/') ?>css/menu.css" rel="stylesheet" type="text/css">
        <link href="<?= base_url('assets/admin/') ?>css/style.css" rel="stylesheet">
    </head>

    <body class="sticky-header">
        <section class="bg-login">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-sm-12">
                        <div class="wrapper-page">
                            <div class="account-pages">
                                <div class="account-box">
                                    <div class="card m-b-30">
                                        <div class="card-body">
                                            <div class="card-title text-center">
                                                <img src="<?= base_url($basic_details->logo); ?>" height="70px" alt="" class="">
                                                <h5 class="mt-3"><b>Welcome to <?= ($basic_details->site_name); ?></b></h5>
                                                <p><?= $this->session->flashdata('msg') ?></p>
                                            </div>  
                                            <form class="form mt-5 contact-form" method="post" action="<?= base_url('Login/verifylogin') ?>">
                                                <div class="form-group ">
                                                    <div class="col-sm-12">
                                                        <input class="form-control form-control-line" name="username" type="text" placeholder="Username" required="required">
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="col-sm-12">
                                                        <input class="form-control form-control-line" name="password" type="password" placeholder="Password" required="required">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="col-12">
                                                        <!--<label class="cr-styled">
                                                            <input type="checkbox" checked>
                                                            <i class="fa"></i> 
                                                            Remember me
                                                        </label>-->
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group">
                                                    <div class="col-sm-12 mt-4">
                                                        <button class="btn btn-primary btn-block" type="submit">Log In</button>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="col-sm-12 mt-4 text-center">
                                                       <!-- <a href="recoverpw.html"><i class="fa fa-lock m-r-5"></i> Forgot password?</a>-->
                                                    </div>
                                                </div>

                                                
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- jQuery -->
        <script src="<?= base_url('assets/admin/') ?>js/jquery-3.2.1.min.js"></script>
        <script src="<?= base_url('assets/admin/') ?>js/popper.min.js"></script>
        <script src="<?= base_url('assets/admin/') ?>js/bootstrap.min.js"></script>
        <script src="<?= base_url('assets/admin/') ?>js/jquery-migrate.js"></script>
        <script src="<?= base_url('assets/admin/') ?>js/modernizr.min.js"></script>
        <script src="<?= base_url('assets/admin/') ?>js/jquery.slimscroll.min.js"></script>
        <script src="<?= base_url('assets/admin/') ?>js/slidebars.min.js"></script>
        

        <!--app js-->
        <script src="<?= base_url('assets/admin/') ?>js/jquery.app.js"></script>
    </body>

<!-- Mirrored from mannatthemes.com/syntra/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 30 Mar 2018 16:53:44 GMT -->
</html>
