<!doctype html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Dashboard - Admin</title>

    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="/vendors/bootstrap/css/bootstrap.css">
    <!-- Style CSS (White)-->
    <link rel="stylesheet" href="/css/White.css">
    <!-- Style CSS (Dark)-->
    <link rel="stylesheet" href="/css/Dark.css">
    <!-- FontAwesome CSS-->
    <link rel="stylesheet" href="/vendors/fontawesome/css/all.css">
    <!-- Icon LineAwesome CSS-->
    <link rel="stylesheet" href="/vendors/lineawesome/css/line-awesome.min.css">

</head>

<body>

    <!--Topbar -->
    <div class="topbar transition">
        <div class="bars">
            <button type="button" class="btn transition" id="sidebar-toggle">
                <i class="las la-bars"></i>
            </button>
        </div>
        <div class="logo-topbar ml-4">
            <h2 style="font-size: 34px;"><strong>SIKM </strong><span style="font-size: 24px;">(Sistem Informasi Kegiatan Mahasiswa)</span> </h2>
        </div>
        <div class="menu">

            <ul>

                <li>
                    <div class="theme-switch-wrapper">
                        <label class="theme-switch" for="checkbox">
                            <span>Dark mode</span>
                            <input type="checkbox" id="checkbox" title="Dark Or White" />
                            <div class="slider round"></div>
                        </label>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <!--Sidebar-->
    <div class="sidebar transition overlay-scrollbars">
        <div class="logo">
            <h2 style="font-weight: 700;" class="mb-0">----</h2>
        </div>

        <div class="sidebar-items">
            <div class="accordion" id="sidebar-items">
                <ul>

                    <p class="menu">Apps</p>

                    <li>
                        <a href="index" class="items">
                            <i class="fa fa-tachometer-alt"></i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('pages') ?>/skmku" class="items">
                            <i class="fa la-file-alt"></i>
                            <span>SKMku</span>
                        </a>
                    </li>
                    <li>
                        <a href="input_sertifikat" class="items">
                            <i class="fa la-user-alt"></i>
                            <span>Input Sertifikat</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('pages') ?>/pkl" class="items">
                            <i class="fa fa-chart-line"></i>
                            <span>PKL</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('auth') ?>" class="items signout">
                            <i class="las la-sign-out-alt"></i>
                            <span>Logout</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="sidebar-overlay"></div>

    <?= $this->renderSection('konten'); ?>

    <!-- Footer -->
    <div class="footer transition">
        <hr>
        <p>
            &copy; 2021 All Right Reserved by Kelompok 2 - IESI C
        </p>
    </div>

    <!-- Loader -->
    <div class="loader">
        <div class="spinner-border text-light" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>

    <div class="loader-overlay"></div>

    <!-- Library Javascipt-->
    <script src="/vendors/bootstrap/js/jquery.min.js"></script>
    <script src="/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/vendors/bootstrap/js/popper.min.js"></script>
    <script src="/js/script.js"></script>
</body>

</html>