<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Profile</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item">Profile</div>
            </div>
        </div>
        <div class="section-body">
            <h2 class="section-title">Hi, <?= $this->session->userdata('nama'); ?>!</h2>
            <p class="section-lead">
                Lihat Identitas dan Informasi Akun disini.
            </p>
            <div class="row mt-sm-4">
                <div class="col-12 col-md-12 col-lg-5">
                    <div class="card profile-widget">
                        <div class="profile-widget-header">
                            <img alt="image" src="<?= base_url('assets/stisla') ?>/assets/img/avatar/avatar-1.png" class="rounded-circle profile-widget-picture">
                        </div>
                        <div class="profile-widget-description">
                            <div class="profile-widget-name"><?= $this->session->userdata('nama'); ?> <div class="text-muted d-inline font-weight-normal">
                                    <div class="slash"></div> Web Developer
                                </div>
                            </div>
                            Ujang maman is a superhero name in <b>Indonesia</b>, especially in my family. He is not a fictional character but an original hero in my family, a hero for his children and for his wife. So, I use the name as a user in this template. Not a tribute, I'm just bored with <b>'John Doe'</b>.
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-7">
                    <div class="card">
                        <?php foreach ($data as $dt) : ?>
                            <form method="post" class="needs-validation" novalidate="">
                                <div class="card-header">
                                    <h4>Edit Profile</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="form-group col-md-6 col-12">
                                            <label>Nama</label>
                                            <input type="text" class="form-control" value="<?= $dt->nama; ?>" required="">
                                        </div>
                                        <div class="form-group col-md-6 col-12">
                                            <label>Username</label>
                                            <input type="text" class="form-control" value="Maman" required="">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-7 col-12">
                                            <label>Alamat</label>
                                            <input type="email" class="form-control" value="">
                                        </div>
                                        <div class="form-group col-md-5 col-12">
                                            <label>Gender</label>
                                            <select name="gender" id="" class="form-control select2">
                                                <option value=""></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6 col-12">
                                            <label>No. Telepon</label>
                                            <input type="text" class="form-control" value="Ujang" required="">
                                        </div>
                                        <div class="form-group col-md-6 col-12">
                                            <label>No. KTP</label>
                                            <input type="text" class="form-control" value="Maman" required="">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>