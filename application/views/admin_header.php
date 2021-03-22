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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js" rel="stylesheet" type="text/css" />

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
                                <a href="#sidebarEmail" data-toggle="collapse">
                                    <i class="fe-mail"></i>
                                    <span> Email </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebarEmail">
                                    <ul class="nav-second-level">
                                        <li><a href="email-inbox.html">Inbox</a></li>
                                        <li><a href="email-read.html">Read Email</a></li>
                                        <li><a href="email-compose.html">Compose Email</a></li>
                                    </ul>
                                </div>
                            </li>

                            <li>
                                <a href="#sidebarLayouts" data-toggle="collapse">
                                    <i class="fe-sidebar"></i>
                                    <span> Layouts </span>
                                    <span class="menu-arrow"></span>
                                </a>

                                <div class="collapse" id="sidebarLayouts">
                                    <ul class="nav-second-level">
                                        <li><a href="layouts-horizontal.html">Horizontal</a></li>
                                        <li><a href="layouts-preloader.html">Preloader</a></li>
                                    </ul>
                                </div>
                            </li>

                            <li class="menu-title mt-2">Components</li>

                            <li>
                                <a href="#sidebarUielement" data-toggle="collapse">
                                    <i class="fe-briefcase"></i>
                                    <span> UI Elements </span>
                                    <span class="menu-arrow"></span>
                                </a>

                                <div class="collapse" id="sidebarUielement">
                                    <ul class="nav-second-level">
                                        <li><a href="ui-typography.html">Typography</a></li>
                                        <li><a href="ui-cards.html">Cards</a></li>
                                        <li><a href="ui-buttons.html">Buttons</a></li>
                                        <li><a href="ui-dropdowns.html">Dropdowns</a></li>
                                        <li><a href="ui-modals.html">Modals</a></li>
                                        <li><a href="ui-spinners.html">Spinners</a></li>
                                        <li><a href="ui-ribbons.html">Ribbons</a></li>
                                        <li><a href="ui-tooltips-popovers.html">Tooltips &amp; Popover</a></li>
                                        <li><a href="ui-checkbox-radio.html">Checkboxs-Radios</a></li>
                                        <li><a href="ui-tabs-accordions.html">Tabs & Accordions</a></li>
                                        <li><a href="ui-progressbars.html">Progress Bars</a></li>
                                        <li><a href="ui-notifications.html">Notification</a></li>
                                        <li><a href="ui-grid.html">Grid</a></li>
                                        <li><a href="ui-sweet-alert.html">Sweet Alert</a></li>
                                        <li><a href="ui-bootstrap.html">Bootstrap UI</a></li>
                                        <li><a href="ui-range-slider.html">Range Slider</a></li>
                                    </ul>
                                </div>
                            </li>

                            <li>
                                <a href="widgets.html">
                                    <i class="fe-command"></i>
                                    <span>  Widgets  </span>
                                </a>
                            </li>

                            <li>
                                <a href="#sidebarCharts" data-toggle="collapse">
                                    <i class="fe-bar-chart-2"></i>
                                    <span>  Charts  </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebarCharts">
                                    <ul class="nav-second-level">
                                        <li><a href="charts-flot.html">Flot</a></li>
                                        <li><a href="charts-morris.html">Morris</a></li>
                                        <li><a href="charts-chartist.html">Chartist</a></li>
                                        <li><a href="charts-chartjs.html">Chartjs</a></li>
                                        <li><a href="charts-sparkline.html">Sparkline</a></li>
                                        <li><a href="charts-knob.html">Jquery Knob</a></li>
                                    </ul>
                                </div>
                            </li>

                            <li>
                                <a href="#sidebarForms" data-toggle="collapse">
                                    <i class="fe-disc"></i>
                                    <span class="badge badge-info float-right">10</span>
                                    <span> Forms </span>
                                </a>
                                <div class="collapse" id="sidebarForms">
                                    <ul class="nav-second-level">
                                        <li><a href="forms-elements.html">Form Elements</a></li>
                                        <li><a href="forms-advanced.html">Form Advanced</a></li>
                                        <li><a href="forms-validation.html">Form Validation</a></li>
                                        <li><a href="forms-pickers.html">Form Pickers</a></li>
                                        <li><a href="forms-wizard.html">Form Wizard</a></li>
                                        <li><a href="forms-mask.html">Form Masks</a></li>
                                        <li><a href="forms-summernote.html">Summernote</a></li>
                                        <li><a href="forms-quilljs.html">Quilljs Editor</a></li>
                                        <li><a href="forms-x-editable.html">X Editable</a></li>
                                        <li><a href="forms-file-uploads.html">File Upload</a></li>
                                    </ul>
                                </div>
                            </li>

                            <li>
                                <a href="#sidebarIcons" data-toggle="collapse">
                                    <i class="fe-box"></i>
                                    <span>  Icons  </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebarIcons">
                                    <ul class="nav-second-level">
                                        <li><a href="icons-materialdesign.html">Material Design</a></li>
                                        <li><a href="icons-dripicons.html">Dripicons</a></li>
                                        <li><a href="icons-fontawesome.html">Font Awesome</a></li>
                                        <li><a href="icons-feather.html">Feather Icons</a></li>
                                        <li><a href="icons-simpleline.html">Simple Line Icons</a></li>
                                    </ul>
                                </div>
                            </li>

                            <li>
                                <a href="#sidebarTables" data-toggle="collapse">
                                    <i class="fe-file-text"></i>
                                    <span>  Tables  </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebarTables">
                                    <ul class="nav-second-level">
                                        <li><a href="tables-basic.html">Basic Tables</a></li>
                                        <li><a href="tables-datatable.html">Data Tables</a></li>
                                        <li><a href="tables-responsive.html">Responsive Table</a></li>
                                        <li><a href="tables-tablesaw.html">Tablesaw Tables</a></li>
                                        <li><a href="tables-foo.html">Foo Tables</a></li>
                                    </ul>
                                </div>
                            </li>

                            <li class="menu-title">More</li>

                            <li>
                                <a href="#sidebarMaps" data-toggle="collapse">
                                    <i class="fe-map"></i>
                                    <span> Maps </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebarMaps">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="maps-google.html">Google Maps</a>
                                        </li>
                                        <li>
                                            <a href="maps-vector.html">Vector Maps</a>
                                        </li>
                                        <li>
                                            <a href="maps-mapael.html">Mapael Maps</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                
                            <li>
                                <a href="#sidebarAuth" data-toggle="collapse">
                                    <i class="fe-book-open"></i>
                                    <span>  Pages </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebarAuth">
                                    <ul class="nav-second-level">
                                        <li><a href="pages-starter.html">Starter Page</a></li>
                                        <li><a href="pages-login.html">Login</a></li>
                                        <li><a href="pages-register.html">Register</a></li>
                                        <li><a href="pages-logout.html">Logout</a></li>
                                        <li><a href="pages-recoverpw.html">Recover Password</a></li>
                                        <li><a href="pages-lock-screen.html">Lock Screen</a></li>
                                        <li><a href="pages-confirm-mail.html">Confirm Mail</a></li>
                                        <li><a href="pages-404.html">Error 404</a></li>
                                        <li><a href="pages-404-alt.html">Error 404-alt</a></li>
                                        <li><a href="pages-500.html">Error 500</a></li>
                                    </ul>
                                </div>
                            </li>

                            <li>
                                <a href="#sidebarExpages" data-toggle="collapse">
                                    <i class="fe-plus-square"></i>
                                    <span class="badge badge-success float-right">Hot</span>
                                    <span> Extra Pages  </span>

                                </a>
                                <div class="collapse" id="sidebarExpages">
                                    <ul class="nav-second-level">
                                        <li><a href="extras-timeline.html">Timeline</a></li>
                                        <li><a href="extras-profile.html">Profile</a></li>
                                        <li><a href="extras-invoice.html">Invoice</a></li>
                                        <li><a href="extras-faqs.html">FAQs</a></li>
                                        <li><a href="extras-pricing.html">Pricing</a></li>
                                        <li><a href="extras-email-template.html">Email Templates</a></li>
                                        <li><a href="extras-ratings.html">Ratings</a></li>
                                        <li><a href="extras-search-results.html">Search Results</a></li>
                                        <li><a href="extras-gallery.html">Gallery</a></li>
                                        <li><a href="extras-maintenance.html">Maintenance</a></li>
                                        <li><a href="extras-coming-soon.html">Coming Soon</a></li>
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