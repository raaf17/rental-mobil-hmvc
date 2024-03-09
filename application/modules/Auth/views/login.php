<section class="section">
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                <div class="card card-primary">
                    <div class="card-header">
                        <h4>Login</h4>
                    </div>

                    <div class="card-body">
                        <?php if ($this->session->flashdata('pesan')) : ?>
                            <div class="alert alert-danger alert-dismissible show fade">
                                <div class="alert-body">
                                    <button class="close" data-dismiss="alert">
                                        <span>&times;</span>
                                    </button>
                                    <?= $this->session->flashdata('pesan'); ?>
                                </div>
                            </div>
                        <?php endif; ?>
                        <form class="form" action="<?= site_url('auth/loginAction') ?>" method="POST">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input id="username" type="username" class="form-control" name="username" tabindex="1" autofocus>
                                <div class="invalid-feedback">
                                    Please fill in your username
                                </div>
                                <?= form_error('username', '<div class="text-sm text-danger">', '</div>') ?>
                            </div>
                            <div class="form-group">
                                <label for="password" class="control-label">Password</label>
                                <input id="password" type="password" class="form-control" name="password" tabindex="2">
                                <div class="invalid-feedback">
                                    please fill in your password
                                </div>
                                <?= form_error('password', '<div class="text-sm text-danger">', '</div>') ?>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                    Login
                                </button>
                            </div>
                        </form>
                        <div class="mt-5 text-muted text-center">
                            Don't have an account? <a href="<?= site_url('auth/register') ?>">Create One</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>