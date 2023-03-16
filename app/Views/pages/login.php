<?= $this->include('layouts/verticalmenu/header'); ?>

</head>

<body class="main-body leftmenu">

    <!-- Loader -->
    <div id="global-loader">
        <img src="<?php echo base_url('assets/img/loader.svg'); ?>" class="loader-img" alt="Loader">
    </div>
    <!-- End Loader -->

    <!-- Page -->
    <div class="page main-signin-wrapper">

        <!-- Row -->
        <div class="row signpages text-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="row row-sm">
                        <div class="col-lg-6 col-xl-5 d-none d-lg-block text-center bg-primary details">
                            <div class="mt-4 pt-6 p-2 pos-absolute">
                                <h5 class="mt-0 text-white">PEMERINTAHAN KOTA MEDAN</h5>
                                <img src="<?php echo base_url('assets/img/logo.png'); ?>" class="header-brand-img mb-0" alt="logo">
                                <h5 class="mt-0 text-white">Badan Pengelola Keuangan dan Aset Daerah</h5>
                                <!-- <span class="tx-white-8 tx-12 mb-5 mt-xl-0 b">Sistem Informasi Manajemen Laporan Posisi Kas Harian (SIM LPKH)</span> -->
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-7 col-xs-12 col-sm-12 login_form ">
                            <div class="container-fluid">
                                <div class="row row-sm">
                                    <div class="card-body mt-2 mb-2">
                                        <img src="<?php echo base_url('assets/img/brand/logo.png'); ?>" class=" d-lg-none header-brand-img text-left float-left mb-4" alt="logo">
                                        <div class="clearfix"></div>
                                        <form>
                                            <h5 class="text-left mb-2">Sistem Informasi Manajemen Laporan Posisi Kas Harian (SIM LPKH)</h5>
                                            <p class="mb-4 text-muted tx-13 ml-0 text-left">Silahkan Login</p>
                                            <div class="form-group text-left">
                                                <label>Username</label>
                                                <input class="form-control" placeholder="Masukkan Username" type="text">
                                            </div>
                                            <div class="form-group text-left">
                                                <label>Password</label>
                                                <input class="form-control" placeholder="Masukkan password" type="password">
                                            </div>
                                            <button class="btn ripple btn-main-primary btn-block">Login</button>
                                        </form>
                                        <div class="text-left mt-5 ml-0">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Row -->

    </div>
    <!-- End Page -->

    <!-- Jquery js-->
    <script src="<?php echo base_url('assets/plugins/jquery/jquery.min.js'); ?>"></script>

    <!-- Bootstrap js-->
    <script src="<?php echo base_url('assets/plugins/bootstrap/js/popper.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/plugins/bootstrap/js/bootstrap.min.js'); ?>"></script>

    <!-- Select2 js-->
    <script src="<?php echo base_url('assets/plugins/select2/js/select2.min.js'); ?>"></script>

    <!-- Custom js -->
    <script src="<?php echo base_url('assets/js/custom.js'); ?>"></script>

</body>

</html>