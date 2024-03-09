<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><?= $title; ?></h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Master Data</a></div>
                <div class="breadcrumb-item active"><a href="#">Data Tipe</a></div>
                <div class="breadcrumb-item"><?= $title; ?></div>
            </div>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h4 class="card-title"><?= $title; ?></h4>
                        </div>
                        <div class="card-body">
                            <?php foreach ($tipe as $tp) : ?>
                                <form class="form" action="<?= site_url('tipe/updateTipe') ?>" method="POST">
                                    <div class="form-group">
                                        <label for="kode_tipe">Kode Tipe</label>
                                        <input type="hidden" value="<?= $tp->id_tipe; ?>">
                                        <input type="text" id="kode_tipe" class="form-control" name="kode_tipe" placeholder="Kode Tipe" value="<?= $tp->kode_tipe; ?>">
                                        <?= form_error('kode_tipe', '<div class="text-sm text-danger">', '</div>') ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="nama_tipe">Nama Tipe</label>
                                        <input type="text" id="nama_tipe" class="form-control" name="nama_tipe" placeholder="Nama Tipe" value="<?= $tp->nama_tipe; ?>">
                                        <?= form_error('nama_tipe', '<div class="text-sm text-danger">', '</div>') ?>
                                    </div>
                                    <div class="d-flex justify-content-end mt-2">
                                    <a href="<?= site_url('tipe') ?>" class="btn btn-secondary">Kembali</a>
                                    <button type="submit" class="btn btn-primary ml-2">Simpan</button>
                                </div>
                                </form>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>