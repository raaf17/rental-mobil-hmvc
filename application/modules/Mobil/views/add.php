<div class="page-heading">
    <div class="page-title mt-2">
        <div class="row">
            <div class="d-flex justify-content-between my-2 align-center item-center">
                <h3><?= $title; ?></h3>
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end mt-2">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Data Master</a></li>
                        <li class="breadcrumb-item"><a href="index.html">Data Mobil</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?= $title; ?></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <section id="multiple-column-form">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"><?= $title; ?></h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form" action="<?= site_url('mobil/createMobil') ?>" enctype="multipart/form-data" method="POST">
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="kode_tipe">Tipe Mobil</label>
                                            <select name="kode_tipe" id="kode_tipe" class="form-select">
                                                <option value="">Pilih Tipe Mobil</option>
                                                <?php foreach ($data_tipe as $data) : ?>
                                                    <option value="<?= $data->kode_tipe; ?>"><?= $data->nama_tipe; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                            <?= form_error('kode_tipe', '<div class="text-sm text-danger">', '</div>') ?>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="merk">Merk</label>
                                            <input type="text" id="merk" class="form-control" name="merk" placeholder="Merk">
                                            <?= form_error('merk', '<div class="text-sm text-danger">', '</div>') ?>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="no_plat">No. Plat</label>
                                            <input type="text" id="no_plat" class="form-control" name="no_plat" placeholder="No. Plat">
                                            <?= form_error('no_plat', '<div class="text-sm text-danger">', '</div>') ?>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="warna">Warna</label>
                                            <input type="text" id="warna" class="form-control" name="warna" placeholder="Warna">
                                            <?= form_error('warna', '<div class="text-sm text-danger">', '</div>') ?>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="tahun">Tahun</label>
                                            <input type="text" id="tahun" class="form-control" name="tahun" placeholder="Tahun">
                                            <?= form_error('tahun', '<div class="text-sm text-danger">', '</div>') ?>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="status">Status</label>
                                            <select name="status" id="status" class="form-select">
                                                <option value="">Pilih Status</option>
                                                <option value="1">Tersedia</option>
                                                <option value="0">Tidak Tersedia</option>
                                            </select>
                                            <?= form_error('status', '<div class="text-sm text-danger">', '</div>') ?>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="gambar">Gambar</label>
                                            <input type="file" id="gambar" class="form-control" name="gambar" placeholder="Gambar">
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex justify-content-end mt-2">
                                        <a href="<?= site_url('mobil') ?>" class="btn btn-light-secondary me-1">Kembali</a>
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