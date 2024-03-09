<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title><?= $title; ?> &mdash; RentGo</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/stisla') ?>/node_modules/jqvmap/dist/jqvmap.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/stisla') ?>/node_modules/weathericons/css/weather-icons.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/stisla') ?>/node_modules/weathericons/css/weather-icons-wind.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/stisla') ?>/node_modules/summernote/dist/summernote-bs4.css">
    <link rel="stylesheet" href="<?= base_url('assets/stisla') ?>/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/stisla') ?>/node_modules/datatables.net-select-bs4/css/select.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/stisla') ?>/node_modules/select2/dist/css/select2.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/stisla') ?>/node_modules/selectric/public/selectric.css">
    <link rel="stylesheet" href="<?= base_url('assets/stisla') ?>/assets/css/style.css">
    <link rel="stylesheet" href="<?= base_url('assets/stisla') ?>/assets/css/components.css">
</head>

<body>
    <div id="app">
        <div class="main-wrapper">
            <div class="navbar-bg"></div>
            <?= $this->load->view('partials/navbar'); ?>
            <?= $this->load->view('partials/sidebar'); ?>
            <?= $this->load->view($content); ?>
            <?= $this->load->view('partials/footer'); ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="<?= base_url('assets/stisla') ?>/assets/js/stisla.js"></script>
    <script src="<?= base_url('assets/stisla') ?>/node_modules/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="<?= base_url('assets/stisla') ?>/node_modules/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?= base_url('assets/stisla') ?>/node_modules/datatables.net-select-bs4/js/select.bootstrap4.min.js"></script>
    <script src="<?= base_url('assets/stisla') ?>/node_modules/simpleweather/jquery.simpleWeather.min.js"></script>
    <script src="<?= base_url('assets/stisla') ?>/node_modules/chart.js/dist/Chart.min.js"></script>
    <script src="<?= base_url('assets/stisla') ?>/node_modules/jqvmap/dist/jquery.vmap.min.js"></script>
    <script src="<?= base_url('assets/stisla') ?>/node_modules/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="<?= base_url('assets/stisla') ?>/node_modules/summernote/dist/summernote-bs4.js"></script>
    <script src="<?= base_url('assets/stisla') ?>/node_modules/chocolat/dist/js/jquery.chocolat.min.js"></script>
    <script src="<?= base_url('assets/stisla') ?>/assets/js/scripts.js"></script>
    <script src="<?= base_url('assets/stisla') ?>/assets/js/custom.js"></script>
    <script src="<?= base_url('assets/stisla') ?>/assets/js/page/index-0.js"></script>
    <script src="<?= base_url('assets/stisla') ?>/node_modules/select2/dist/js/select2.full.min.js"></script>
    <script src="<?= base_url('assets/stisla') ?>/node_modules/selectric/public/jquery.selectric.min.js"></script>
    <script src="<?= base_url('assets/stisla') ?>/assets/js/page/modules-datatables.js"></script>
    <script src="<?= base_url('assets/stisla') ?>/assets/js/page/forms-advanced-forms.js"></script>
</body>

</html>