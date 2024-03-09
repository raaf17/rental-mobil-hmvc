<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><?= $title; ?></h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Ekstra</a></div>
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
                            <form class="form" action="<?= site_url('auth/changePasswordAction') ?>" method="POST">
                                <div class="form-group">
                                    <label for="new_password">Password Baru</label>
                                    <input type="password" id="new_password" class="form-control" name="new_password" placeholder="Password Baru">
                                    <?= form_error('new_password', '<div class="text-sm text-danger">', '</div>') ?>
                                </div>
                                <div class="form-group">
                                    <label for="repeat_password">Ulangi Password</label>
                                    <input type="password" id="repeat_password" class="form-control" name="repeat_password" placeholder="Ulangi Password">
                                    <?= form_error('repeat_password', '<div class="text-sm text-danger">', '</div>') ?>
                                </div>
                                <div class="d-flex justify-content-end mt-2">
                                    <a href="<?= site_url('auth/gantiPassword') ?>" class="btn btn-secondary">Kembali</a>
                                    <button type="submit" class="btn btn-primary ml-2">Ganti Password</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>