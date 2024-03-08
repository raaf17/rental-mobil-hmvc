<div class="page-heading">
    <div class="page-title mt-2">
        <div class="row">
            <div class="d-flex justify-content-between my-2 align-center item-center">
                <h3><?= $title; ?></h3>
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end mt-2">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Data Master</a></li>
                        <li class="breadcrumb-item"><a href="index.html">Data Customer</a></li>
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
                            <?php foreach ($data_customer as $data) : ?>
                                <form class="form" action="<?= site_url('customer/updateCustomer') ?>" method="POST">
                                    <input type="hidden" value="<?= $data->id_customer; ?>">
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="nama">Nama</label>
                                                <input type="text" id="nama" class="form-control" name="nama" placeholder="Nama" value="<?= $data->nama; ?>">
                                                <?= form_error('nama', '<div class="text-sm text-danger">', '</div>') ?>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="username">Username</label>
                                                <input type="text" id="username" class="form-control" name="username" placeholder="Username" value="<?= $data->username; ?>">
                                                <?= form_error('username', '<div class="text-sm text-danger">', '</div>') ?>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="alamat">Alamat</label>
                                                <input type="text" id="alamat" class="form-control" name="alamat" placeholder="Alamat" value="<?= $data->alamat; ?>">
                                                <?= form_error('alamat', '<div class="text-sm text-danger">', '</div>') ?>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="gender">Gender</label>
                                                <select name="gender" id="gender" class="form-select">
                                                    <option value="<?= $data->gender; ?>"><?= $data->gender; ?></option>
                                                    <option value="Pria">Pria</option>
                                                    <option value="Wanita">Wanita</option>
                                                </select>
                                                <?= form_error('gender', '<div class="text-sm text-danger">', '</div>') ?>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="no_telepon">No. Telepon</label>
                                                <input type="text" id="no_telepon" class="form-control" name="no_telepon" placeholder="No. Telepon" value="<?= $data->no_telepon; ?>">
                                                <?= form_error('no_telepon', '<div class="text-sm text-danger">', '</div>') ?>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="no_ktp">No. Ktp</label>
                                                <input type="text" id="no_ktp" class="form-control" name="no_ktp" placeholder="No. Ktp" value="<?= $data->no_ktp; ?>">
                                                <?= form_error('no_ktp', '<div class="text-sm text-danger">', '</div>') ?>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="password">Password</label>
                                                <input type="text" id="password" class="form-control" name="password" placeholder="Password" value="<?= $data->password; ?>">
                                                <?= form_error('password', '<div class="text-sm text-danger">', '</div>') ?>
                                            </div>
                                        </div>
                                        <div class="col-12 d-flex justify-content-end mt-2">
                                            <a href="<?= site_url('mobil') ?>" class="btn btn-light-secondary me-1">Kembali</a>
                                            <button type="submit" class="btn btn-primary me-1">Simpan</button>
                                        </div>
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