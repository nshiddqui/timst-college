<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>TIMST Portal</title>
    <meta content="Admin Dashboard" name="description" />
    <meta content="Mannatthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <link rel="shortcut icon" href="/favicon.ico">

    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="/assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="/assets/css/style.css" rel="stylesheet" type="text/css">
    <link href="/assets/plugins/select2/select2.min.css" rel="stylesheet" type="text/css" />

    <link href="/assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <!-- Responsive datatable examples -->
    <link href="/assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />


    <?= $this->fetch('css') ?>

</head>


<body>

    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner"></div>
        </div>
    </div>

    <!-- Navigation Bar-->
    <header id="topnav">
        <div class="topbar-main">
            <div class="container-fluid">

                <!-- Logo container-->
                <div class="logo">
                    <a href="/" class="logo logo-admin"><img src="/img/logo-wide.png" width="200" alt="logo"></a>
                </div>
                <!-- End Logo container-->


                <div class="menu-extras topbar-custom">

                    <ul class="list-unstyled float-right mb-0">
                        <!-- User-->
                        <li class="dropdown notification-list">
                            <a class="nav-link arrow-none waves-effect nav-user" title="Logout" href="/users/logout">
                                <i class="mdi mdi-logout m-r-5 text-muted mdi-24px"></i>
                            </a>
                        </li>
                        <li class="menu-item">
                            <!-- Mobile menu toggle-->
                            <a class="navbar-toggle nav-link">
                                <div class="lines">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                            <!-- End mobile menu toggle-->
                        </li>

                    </ul>
                </div>
                <!-- end menu-extras -->

                <div class="clearfix"></div>

            </div> <!-- end container -->
        </div>
        <!-- end topbar-main -->

        <!-- MENU Start -->
        <div class="navbar-custom">
            <div class="container-fluid">
                <div id="navigation">
                    <!-- Navigation Menu-->
                    <ul class="navigation-menu">

                        <li class="has-submenu">
                            <a href="/dashboard"><i class="dripicons-device-desktop"></i>Dashboard</a>
                        </li>
                        <?php if ($this->Identity->is(1, 'role') || $this->Identity->is(2, 'role')) { ?>
                            <li class="has-submenu">
                                <a href="/students"><i class="dripicons-user"></i>Students</a>
                            </li>
                            <?php if ($this->Identity->is(1, 'role')) { ?>
                                <li class="has-submenu">
                                    <a href="/cources"><i class="fa fa-book"></i>Cources</a>
                                </li>
                                <li class="has-submenu">
                                    <a href="/universities"><i class="dripicons-to-do"></i>Universities</a>
                                </li>
                            <?php } ?>
                        <?php } ?>

                    </ul>
                    <!-- End navigation menu -->
                </div> <!-- end #navigation -->
            </div> <!-- end container -->
        </div> <!-- end navbar-custom -->
    </header>
    <!-- End Navigation Bar-->


    <div class="wrapper">
        <div class="container-fluid">
            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <h4 class="page-title">TIMST</h4>
                        <div class="btn-group mt-2">
                            <ol class="breadcrumb hide-phone p-0 m-0">
                                <li class="breadcrumb-item active"><?= $this->fetch('title') ?></li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <?= $this->Flash->render() ?>
            <!-- end page title end breadcrumb -->
            <?= $this->fetch('content') ?>
        </div> <!-- end container -->
    </div>
    <!-- end wrapper -->


    <!-- Footer -->
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    © 2023 Target Institue of Medical Sciencde & Technology.
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->


    <!-- jQuery  -->
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/popper.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/modernizr.min.js"></script>
    <script src="/assets/js/waves.js"></script>
    <script src="/assets/js/jquery.slimscroll.js"></script>
    <script src="/assets/js/jquery.nicescroll.js"></script>
    <script src="/assets/js/jquery.scrollTo.min.js"></script>

    <!-- KNOB JS -->
    <script src="/assets/plugins/jquery-knob/excanvas.js"></script>
    <script src="/assets/plugins/jquery-knob/jquery.knob.js"></script>

    <script src="/assets/plugins/select2/select2.min.js"></script>

    <!-- Required datatable js -->
    <script src="/assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="/assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Responsive examples -->
    <script src="/assets/plugins/datatables/dataTables.responsive.min.js"></script>
    <script src="/assets/plugins/datatables/responsive.bootstrap4.min.js"></script>

    <!-- App js -->
    <script src="/assets/js/app.js"></script>

    <?= $this->fetch('script') ?>

</body>

</html>