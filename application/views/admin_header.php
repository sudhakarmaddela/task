<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Dashboard | Highdmin - Responsive Admin Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="https://coderthemes.com/highdmin/layouts/assets/images/favicon.ico">


	<!-- App css -->
	<link href="<?php echo base_url();?>public/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
	<link href="<?php echo base_url();?>public/assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-default-stylesheet" />
	
    <!-- third party css -->
    <link href="<?php echo base_url();?>public/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>public/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>public/assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>public/assets/libs/datatables.net-select-bs4/css/select.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <!-- third party css end -->
        
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600&display=swap" rel="stylesheet">
	<!-- icons -->
	<link href="<?php echo base_url();?>public/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
	
	<link href="http://cdn.materialdesignicons.com/5.4.55/css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />

    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" type="text/css" />

    <!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css'?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/jquery.dataTables.css'?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/dataTables.bootstrap4.css'?>"> -->

</head>

    <body class="loading">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left-side-menu">

                <!-- LOGO -->
                <div class="logo-box">
                    <a href="index.html" class="logo logo-dark text-center">
                        <span class="logo-sm">
                            <img src="<?php echo base_url();?>public/assets/images/logo-sm.png" alt="" height="24">
                            <!-- <span class="logo-lg-text-light">Highdmin</span> -->
                        </span>
                        <span class="logo-lg">
                            <img src="<?php echo base_url();?>public/assets/images/logo-dark.png" alt="" height="22">
                            <!-- <span class="logo-lg-text-light">H</span> -->
                        </span>
                    </a>

                    <a href="index.html" class="logo logo-light text-center">
                        <span class="logo-sm">
                            <img src="<?php echo base_url();?>public/assets/images/logo-sm.png" alt="" height="24">
                        </span>
                        <span class="logo-lg">
                            <img src="<?php echo base_url();?>public/assets/images/logo-light.png" alt="" height="22">
                        </span>
                    </a>
                </div>

                <div class="h-100" data-simplebar>

                    <!-- User box -->
                    <div class="user-box text-center">
                        <img src="<?php echo base_url();?>public/assets/images/users/avatar-1.jpg" alt="user-img" title="Mat Helme"
                            class="rounded-circle avatar-md">
                        <div class="dropdown">
                            <a href="#" class="text-dark h5 mt-2 mb-1 d-block">
                            <?php if($this->session->userdata('admin_name') != '')
                                {
                                    echo $this->session->userdata('admin_name');
                                }
                            ?></a>
                        </div>
                        <p class="text-muted">Admin</p>
                    </div>

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">

                        <ul id="side-menu">

                            <li class="menu-title">Navigation</li>

                            <li>
                                <a href="<?php echo base_url();?>">
                                    <i class="fe-airplay"></i>
                                    <span> Dashboard </span>
                                </a>
                            </li>

                            <li>
                                <a href="<?php echo base_url();?>Visitor">
                                    <i class="mdi mdi-account-group-outline"></i>
                                    <span> Visitors </span>
                                </a>
                            </li>
                            <li>
                                <a href="#sidebarApps" data-toggle="collapse">
                                    <i class="fe-layers"></i>
                                    <span> Admin </span>
                                    <span class="menu-arrow"></span>
                                </a>

                                <div class="collapse" id="sidebarApps">
                                    <ul class="nav-second-level">
                                        <li><a href="<?php echo base_url();?>admin/addadmin">Add Admin</a></li>
                                        <li><a href="<?php echo base_url();?>admin/adminlist">Admin's List</a></li>
                                    </ul>
                                </div>
                            </li>

                            <li>
                                <a href="#sidebarApps" data-toggle="collapse">
                                    <i class="fe-layers"></i>
                                    <span> Roles </span>
                                    <span class="menu-arrow"></span>
                                </a>

                                <div class="collapse" id="sidebarApps">
                                    <ul class="nav-second-level">
                                        <li><a href="<?php echo base_url();?>admin/addrole">Add Role</a></li>
                                        <li><a href="<?php echo base_url();?>admin/roleslist">Roles's List</a></li>
                                    </ul>
                                </div>
                            </li>

                            <li>
                                <a href="<?php echo base_url();?>admin/logout">
                                    <i class="fe-share-2"></i>
                                    <span> Logout </span>
                                    <span class="menu-arrow"></span>
                                </a>
                            </li>
                        </ul>

                    </div>
                    <!-- End Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">

                <!-- Topbar Start -->
                <div class="navbar-custom">
                    <div class="container-fluid">

                        <!-- LOGO -->
                        <div class="logo-box">
                            <a href="index.html" class="logo logo-dark text-center">
                                <span class="logo-sm">
                                    <img src="<?php echo base_url();?>public/assets/images/logo-sm.png" alt="" height="24">
                                    <!-- <span class="logo-lg-text-light">Highdmin</span> -->
                                </span>
                                <span class="logo-lg">
                                    <img src="<?php echo base_url();?>public/assets/images/logo-dark.png" alt="" height="22">
                                    <!-- <span class="logo-lg-text-light">H</span> -->
                                </span>
                            </a>

                            <a href="index.html" class="logo logo-light text-center">
                                <span class="logo-sm">
                                    <img src="<?php echo base_url();?>public/assets/images/logo-sm.png" alt="" height="24">
                                </span>
                                <span class="logo-lg">
                                    <img src="<?php echo base_url();?>public/assets/images/logo-light.png" alt="" height="22">
                                </span>
                            </a>
                        </div>
    
                        <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                            <li>
                                <button class="button-menu-mobile waves-effect waves-light">
                                    <i class="fe-menu"></i>
                                </button>
                            </li>

                            <li>
                                <!-- Mobile menu toggle (Horizontal Layout)-->
                                <a class="navbar-toggle nav-link" data-toggle="collapse" data-target="#topnav-menu-content">
                                    <div class="lines">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </a>
                                <!-- End mobile menu toggle-->
                            </li>   
            
                            <li>
                                <div class="page-title-box">
                                    <h4 class="page-title">Dashboard</h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#">Highdmin</a></li>
                                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                        <li class="breadcrumb-item active">Dashboard</li>
                                    </ol>
                                </div>
                            </li>
    
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <!-- end Topbar -->