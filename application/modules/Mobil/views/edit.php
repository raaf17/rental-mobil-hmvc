<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><?= $title; ?></h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Master Data</a></div>
                <div class="breadcrumb-item active"><a href="#">Data Customer</a></div>
                <div class="breadcrumb-item"><?= $title; ?></div>
            </div>
        </div>

        <div class="section-body">
            <div class="card card-primary">
                <div class="card-header">
                    <h4 class="card-title"><?= $title; ?></h4>
                </div>
                <div class="card-body">
                    <?php foreach ($mobil as $mb) : ?>
                        <form class="form" action="<?= site_url('mobil/updateMobil') ?>" enctype="multipart/form-data" method="POST">
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="kode_tipe">Tipe Mobil</label>
                                        <input type="hidden" name="id_mobil" value="<?= $mb->id_mobil; ?>">
                                        <select name="kode_tipe" id="kode_tipe" class="form-control select2">
                                            <option value="<?= $mb->kode_tipe; ?>"><?= $mb->kode_tipe; ?></option>
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
                                        <input type="text" id="merk" class="form-control" name="merk" placeholder="Merk" value="<?= $mb->merk; ?>">
                                        <?= form_error('merk', '<div class="text-sm text-danger">', '</div>') ?>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="no_plat">No. Plat</label>
                                        <input type="text" id="no_plat" class="form-control" name="no_plat" placeholder="No. Plat" value="<?= $mb->no_plat; ?>">
                                        <?= form_error('no_plat', '<div class="text-sm text-danger">', '</div>') ?>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="warna">Warna</label>
                                        <input type="text" id="warna" class="form-control" name="warna" placeholder="Warna" value="<?= $mb->warna; ?>">
                                        <?= form_error('warna', '<div class="text-sm text-danger">', '</div>') ?>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="tahun">Tahun</label>
                                        <input type="text" id="tahun" class="form-control" name="tahun" placeholder="Tahun" value="<?= $mb->tahun; ?>">
                                        <?= form_error('tahun', '<div class="text-sm text-danger">', '</div>') ?>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="status">Status</label>
                                        <select name="status" id="status" class="form-control select2">
                                            <option <?php if ($mb->status == "1") {
                                                        echo "selected='selected'";
                                                    }
                                                    echo $mb->status; ?> value="1">Tersedia</option>
                                            <option <?php if ($mb->status == "0") {
                                                        echo "selected='selected'";
                                                    }
                                                    echo $mb->status; ?> value="0">Tidak Tersedia</option>
                                        </select>
                                        <?= form_error('status', '<div class="text-sm text-danger">', '</div>') ?>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="gambar">Gambar</label>
                                        <div class="custom-file" name="gambar">
                                            <input type="file" name="gambar" class="custom-file-input" id="gambar" value="<?= $mb->gambar; ?>">
                                            <label class="custom-file-label" name="gambar" for="customFile">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex justify-content-end mt-2">
                                    <a href="<?= site_url('mobil') ?>" class="btn btn-secondary">Kembali</a>
                                    <button type="submit" class="btn btn-primary ml-2">Simpan</button>
                                </div>
                            </div>
                        </form>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
</div>