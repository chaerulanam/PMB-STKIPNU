<?= $this->include('panel/partials/head-main') ?>

<head>

    <?= $title_meta ?>

    <link href="<?= base_url(); ?>/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css"
        rel="stylesheet" type="text/css" />

    <?= $this->include('panel/partials/head-css') ?>

</head>

<?= $this->include('panel/partials/body') ?>

<!-- Begin page -->
<div id="layout-wrapper">

    <?= $this->include('panel/partials/menu') ?>

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <?= $page_title ?>
                <?php if (in_groups("mahasiswa")) : ?>
                <div class="row">
                    <div class="col-lg-12 d-flex justify-content-center mb-3">
                        <h1>SELAMAT DATANG PEMUDA DAN PEMUDI TERBAIK
                        </h1>
                    </div>

                    <div class="col-lg-12 d-flex justify-content-center mb-3">
                        <h2>DI PMB STKIP NU INDRAMAYU
                        </h2>
                    </div>

                    <div class="col-lg-12 d-flex justify-content-center mb-3">
                        <H5>Terimakasih telah memilih STKIP NU INDRAMAYU sebagai teman untuk mengantarmu menggapai
                            cita-citamu.
                        </H5>
                    </div>

                    <?php if ($status_bayar == "settlement") : ?>
                    <div class="col-lg-12 d-flex justify-content-center mb-3">
                        <h5>
                            Sistem telah mendeteksi anda sudah melakukan pembayaran, silakan mengisi formulir untuk
                            melanjutkan.
                        </h5>
                    </div>
                    <div class="col-lg-12 d-flex justify-content-center">
                        <a href="/pendaftar/formulir" type="button"
                            class="btn btn-info waves-effect btn-label waves-light"><i
                                class="bx bx-font-family label-icon"></i> Isi Formulir</a>
                    </div>
                    <?php else : ?>
                    <div class="col-lg-12 d-flex justify-content-center mb-3">
                        <h5>
                            Untuk melanjutkan pendaftaran silakan melakukan pembayaran registrasi dengan mengikuti
                            petunjuk yang ada.
                        </h5>
                    </div>
                    <div class="col-lg-12 d-flex justify-content-center">
                        <a href="/pendaftar/pembayaran" type="button"
                            class="btn btn-info waves-effect btn-label waves-light"><i
                                class="bx bx-money label-icon"></i> Bayar Registrasi</a>
                    </div>
                    <?php endif; ?>

                </div>
                <?php else : ?>
                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <!-- card -->
                        <div class="card card-h-100">
                            <!-- card body -->
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <span class="text-muted mb-3 lh-1 d-block text-truncate">Uang Masuk</span>
                                        <h4 class="mb-3">
                                            Rp<span class="counter-value"
                                                data-target="<?= $uang_masuk->nominal / 1000; ?>">0</span>k
                                        </h4>
                                    </div>

                                    <div class="col-6">
                                        <div id="mini-chart1" data-colors='["#5156be"]' class="apex-charts mb-2"></div>
                                    </div>
                                </div>
                                <div class="text-nowrap">
                                    <span class="badge bg-soft-success text-success">+$20.9k</span>
                                    <span class="ms-1 text-muted font-size-13">Since last week</span>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->

                    <div class="col-xl-3 col-md-6">
                        <!-- card -->
                        <div class="card card-h-100">
                            <!-- card body -->
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <span class="text-muted mb-3 lh-1 d-block text-truncate">Total Pendaftar</span>
                                        <h4 class="mb-3">
                                            <span class="counter-value" data-target="<?= $total_pendaftar; ?>">0</span>
                                        </h4>
                                    </div>
                                    <div class="col-6">
                                        <div id="mini-chart2" data-colors='["#5156be"]' class="apex-charts mb-2"></div>
                                    </div>
                                </div>
                                <div class="text-nowrap">
                                    <span class="badge bg-soft-danger text-danger">-29 Trades</span>
                                    <span class="ms-1 text-muted font-size-13">Since last week</span>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col-->

                    <div class="col-xl-3 col-md-6">
                        <!-- card -->
                        <div class="card card-h-100">
                            <!-- card body -->
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <span class="text-muted mb-3 lh-1 d-block text-truncate">Pendaftar Lulus</span>
                                        <h4 class="mb-3">
                                            <span class="counter-value" data-target="<?= $pendaftar_lulus; ?>">0</span>
                                        </h4>
                                    </div>
                                    <div class="col-6">
                                        <div id="mini-chart3" data-colors='["#5156be"]' class="apex-charts mb-2"></div>
                                    </div>
                                </div>
                                <div class="text-nowrap">
                                    <span class="badge bg-soft-success text-success">+ $2.8k</span>
                                    <span class="ms-1 text-muted font-size-13">Since last week</span>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->

                    <div class="col-xl-3 col-md-6">
                        <!-- card -->
                        <div class="card card-h-100">
                            <!-- card body -->
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <span class="text-muted mb-3 lh-1 d-block text-truncate">Pendaftar Tidak
                                            Lulus</span>
                                        <h4 class="mb-3">
                                            <span class="counter-value"
                                                data-target="<?= $total_pendaftar - $pendaftar_lulus; ?>">0</span>
                                        </h4>
                                    </div>
                                    <div class="col-6">
                                        <div id="mini-chart4" data-colors='["#5156be"]' class="apex-charts mb-2"></div>
                                    </div>
                                </div>
                                <div class="text-nowrap">
                                    <span class="badge bg-soft-success text-success">+2.95%</span>
                                    <span class="ms-1 text-muted font-size-13">Since last week</span>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->
                </div><!-- end row-->
                <?php endif; ?>
            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        <?= $this->include('panel/partials/footer') ?>
    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->

<?= $this->include('panel/partials/right-sidebar') ?>

<?= $this->include('panel/partials/vendor-scripts') ?>

<!-- apexcharts -->
<script src="<?= base_url(); ?>/assets/libs/apexcharts/apexcharts.min.js"></script>

<!-- Plugins js-->
<script src="<?= base_url(); ?>/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?= base_url(); ?>/assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js">
</script>
<!-- dashboard init -->
<script src="<?= base_url(); ?>/assets/js/pages/dashboard.init.js"></script>

<!-- App js -->
<script src="<?= base_url(); ?>/assets/js/app.js"></script>
</body>

</html>