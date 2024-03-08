<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?> | Rental Mobil</title>
    <link rel="shortcut icon" href="<?= base_url('assets/mazer/dist') ?>/assets/static/images/logo/favicon.png" type="image/x-icon">
    <link rel="stylesheet" crossorigin href="<?= base_url('assets/mazer/dist') ?>/assets/compiled/css/app.css">
    <link rel="stylesheet" crossorigin href="<?= base_url('assets/mazer/dist') ?>/assets/compiled/css/app-dark.css">
    <link rel="stylesheet" crossorigin href="<?= base_url('assets/mazer/dist') ?>/assets/compiled/css/iconly.css">
    <link rel="stylesheet" href="<?= base_url('assets/mazer/dist') ?>/assets/extensions/datatables.net-bs5/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" crossorigin href="<?= base_url('assets/mazer/dist') ?>/assets/compiled/css/table-datatable.css">
    <link rel="stylesheet" crossorigin href="<?= base_url('assets/mazer/dist') ?>/assets/compiled/css/table-datatable-jquery.css">
</head>

<body>
    <script src="<?= base_url('assets/mazer/dist') ?>/assets/static/js/initTheme.js"></script>
    <div id="app">
        <?php $this->load->view('partials/sidebar') ?>
        <div id="main">
            <?php $this->load->view('partials/header') ?>
            <?php $this->load->view($content) ?>
            <?php $this->load->view('partials/footer'); ?>
        </div>
    </div>
    <script src="<?= base_url('assets/mazer/dist') ?>/assets/static/js/components/dark.js"></script>
    <script src="<?= base_url('assets/mazer/dist') ?>/assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="<?= base_url('assets/mazer/dist') ?>/assets/compiled/js/app.js"></script>
    <script src="<?= base_url('assets/mazer/dist') ?>/assets/extensions/apexcharts/apexcharts.min.js"></script>
    <script src="<?= base_url('assets/mazer/dist') ?>/assets/static/js/pages/dashboard.js"></script>
    <script src="<?= base_url('assets/mazer/dist') ?>/assets/extensions/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets/mazer/dist') ?>/assets/extensions/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?= base_url('assets/mazer/dist') ?>/assets/extensions/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>
    <script src="<?= base_url('assets/mazer/dist') ?>/assets/static/js/pages/datatables.js"></script>

</body>

</html>