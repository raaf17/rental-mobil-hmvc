<div class="page-heading">
    <div class="page-title mt-2">
        <div class="row">
            <div class="d-flex justify-content-between my-2 align-center item-center">
                <h3><?= $title; ?></h3>
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end mt-2">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Data Master</a></li>
                        <li class="breadcrumb-item"><a href="index.html">Data Tipe</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?= $title; ?></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <section id="basic-vertical-layouts">
        <div class="row match-height">
            <div class="col-md-6 col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"><?= $title; ?></h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form" action="<?= site_url('tipe/createTipe') ?>" method="POST">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="kode_tipe">Kode Tipe</label>
                                            <input type="text" id="kode_tipe" class="form-control" name="kode_tipe" placeholder="Kode Tipe">
                                            <?= form_error('kode_tipe', '<div class="text-sm text-danger">','</div>') ?>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="nama_tipe">Nama Tipe</label>
                                            <input type="text" id="nama_tipe" class="form-control" name="nama_tipe" placeholder="Nama Tipe">
                                            <?= form_error('nama_tipe', '<div class="text-sm text-danger">','</div>') ?>
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex justify-content-end mt-2">
                                        <a href="<?= site_url('tipe') ?>" class="btn btn-light-secondary me-1">Kembali</a>
                                        <button type="submit" class="btn btn-primary me-1">Simpan</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>