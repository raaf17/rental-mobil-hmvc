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
                    <form class="form" action="<?= site_url('customer/createCustomer') ?>" enctype="multipart/form-data" method="POST">
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" id="nama" class="form-control" name="nama" placeholder="Nama">
                                    <?= form_error('nama', '<div class="text-sm text-danger">', '</div>') ?>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text" id="username" class="form-control" name="username" placeholder="Username">
                                    <?= form_error('username', '<div class="text-sm text-danger">', '</div>') ?>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" id="alamat" class="form-control" name="alamat" placeholder="Alamat">
                                    <?= form_error('alamat', '<div class="text-sm text-danger">', '</div>') ?>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="gender">Gender</label>
                                    <select name="gender" id="gender" class="form-control select2">
                                        <option value="">Pilih Gender</option>
                                        <option value="Pria">Pria</option>
                                        <option value="Wanita">Wanita</option>
                                    </select>
                                    <?= form_error('gender', '<div class="text-sm text-danger">', '</div>') ?>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="no_telepon">No. Telepon</label>
                                    <input type="text" id="no_telepon" class="form-control" name="no_telepon" placeholder="No. Telepon">
                                    <?= form_error('no_telepon', '<div class="text-sm text-danger">', '</div>') ?>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="no_ktp">No. Ktp</label>
                                    <input type="text" id="no_ktp" class="form-control" name="no_ktp" placeholder="No. Ktp">
                                    <?= form_error('no_ktp', '<div class="text-sm text-danger">', '</div>') ?>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="text" id="password" class="form-control" name="password" placeholder="Password">
                                    <?= form_error('password', '<div class="text-sm text-danger">', '</div>') ?>
                                </div>
                            </div>
                            <div class="col-12 d-flex justify-content-end mt-2">
                                <a href="<?= site_url('customer') ?>" class="btn btn-secondary">Kembali</a>
                                <button type="submit" class="btn btn-primary ml-2">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>