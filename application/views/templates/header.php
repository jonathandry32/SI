<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <title><?php echo $title; ?></title>
        <meta content="" name="<?php echo $description; ?>">
        <meta content="" name="<?php echo $keywords; ?>">

        <!-- Favicons -->
        <link href="<?php echo base_url('assets/img/chibi2.png'); ?>" rel="icon">
        <link href="<?php echo base_url('assets/img/apple-touch-icon.png'); ?>" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.gstatic.com" rel="preconnect">
        <link
            href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
            rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/vendor/bootstrap-icons/bootstrap-icons.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/vendor/boxicons/css/boxicons.min.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/vendor/quill/quill.snow.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/vendor/quill/quill.bubble.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/vendor/remixicon/remixicon.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/vendor/simple-datatables/style.css'); ?>" rel="stylesheet">
        <!-- Template Main CSS File -->
        <link href="<?php echo base_url('assets/css/style.css'); ?>" rel="stylesheet">
    </head>
    <body>
        <!-- ======= Header ======= -->
        <header id="header" class="header fixed-top d-flex align-items-center">

            <div class="d-flex align-items-center justify-content-between">
                <a href="#" class="logo d-flex align-items-center">
                    <img src="<?php echo base_url('assets/img/chibi2.png'); ?>" alt="">
                    <span class="d-none d-lg-block">
                        <h4 style="margin-left: 10px; padding-top: 10px;"><?php echo $title; ?></h4>
                    </span>
                </a>
                <i class="bi bi-list toggle-sidebar-btn"></i>
            </div><!-- End Logo -->

            <div class="search-bar">
                <form action="<?php echo base_url("InsertForm/rechercher"); ?>" method="post" class="search-form d-flex align-items-center">
                    <input type="text" name="mot" placeholder="Search" title="Enter search keyword">
                    <button type="submit" title="Search"><i class="bi bi-search"></i></button>
                </form>
            </div>

           <nav class="header-nav ms-auto">
                <ul class="d-flex align-items-center">
                    <li class="nav-item d-block d-lg-none">
                        <a class="nav-link nav-icon search-bar-toggle " href="#">
                            <i class="bi bi-search"></i>
                        </a>
                    </li><!-- End Search Icon-->



                    <li class="nav-item dropdown pe-3">

                        <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#"
                            data-bs-toggle="dropdown">
                            <img src="<?php echo base_url('assets/img/lunette.jpg'); ?>" alt="Profil"
                                class="rounded-circle">
                            <span class="d-none d-md-block dropdown-toggle ps-2">
                                <?php ?>
                            </span>
                        </a><!-- End Profile Iamge Icon -->

                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                            <li class="dropdown-header">
                                <h6>
                                    <?php if($this->session->has_userdata('connected')){ echo $this->session->connected; } ?>
                                </h6>
                                <span>Admin</span>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="<?php echo base_url('login/logout'); ?>">
                                    <i class="bi bi-box-arrow-right"></i>
                                    <span>Deconnexion</span>
                                </a>
                            </li>

                        </ul><!-- End Profile Dropdown Items -->
                    </li><!-- End Profile Nav -->

                </ul>
            </nav><!-- End Icons Navigation -->

        </header><!-- End Header -->

        <!-- ======= Sidebar ======= -->
        <aside id="sidebar" class="sidebar">

            <ul class="sidebar-nav" id="sidebar-nav">

                <li class="nav-item">
                    <a class="nav-link collapsed" href="#">
                        <i class="bi bi-house"></i>
                        <span>Accueil</span>
                    </a>
                </li><!-- End Dashboard Nav -->
                
                <li class="nav-item">
                    <a class="nav-link collapsed" href="<?php echo base_url("Pages/insertDevisEquivalence"); ?>">
                        <i class="bi bi-house"></i>
                        <span>Devis Equivalence</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed"  href="<?php echo base_url("Entreprise/Apropos"); ?>">
                        <i class="bi bi-calculator"></i><span>A propos</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
                      <i class="bi bi-person-plus"></i><span>PCG</span><i class="bi bi-chevron-down ms-auto"></i>
                    </a>
                     <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">   <li class="nav-item">
                        <li>
                        <a class="nav-link collapsed"  href="<?php echo base_url("Pages/insertPCG"); ?>">
                            <i class="bi bi-circle"></i><span>Insert PCG</span>
                        </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link collapsed"  href="<?php echo base_url("Pages/listPCG"); ?>">
                                <i class="bi bi-circle"></i><span>List PCG</span>
                            </a>
                        </li>
                     </ul>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-target="#tables-nav1" data-bs-toggle="collapse" href="#">
                      <i class="bi bi-person-plus"></i><span>Journal</span><i class="bi bi-chevron-down ms-auto"></i>
                    </a>
                     <ul id="tables-nav1" class="nav-content collapse " data-bs-parent="#sidebar-nav">   <li class="nav-item">
                        <li>
                        <a class="nav-link collapsed"  href="<?php echo base_url("Pages/insertJournal"); ?>">
                            <i class="bi bi-circle"></i><span>Insert Journal</span>
                        </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link collapsed"  href="<?php echo base_url("Pages/listJournal"); ?>">
                                <i class="bi bi-circle"></i><span>List Journal</span>
                            </a>
                        </li>
                     </ul>
                </li>
                <!-- End Components Nav -->
                <li class="nav-heading">Admin</li>
            </ul>

        </aside><!-- End Sidebar-->
