<section class="section">
	<div class="container mt-5">
		<div class="row">
			<div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
				<div class="card card-primary">
					<div class="card-header">
						<h4>Register</h4>
					</div>
					<div class="card-body">
						<form class="form" action="<?= site_url('auth/registerAction') ?>" method="POST">
							<div class="row">
								<div class="form-group col-6">
									<label for="nama">Nama</label>
									<input id="nama" type="text" class="form-control" name="nama" autofocus>
									<?= form_error('nama', '<div class="text-sm text-danger">', '</div>') ?>
								</div>
								<div class="form-group col-6">
									<label for="username">Username</label>
									<input id="username" type="text" class="form-control" name="username">
									<?= form_error('username', '<div class="text-sm text-danger">', '</div>') ?>
								</div>
							</div>
							<div class="form-group">
								<label for="alamat">Alamat</label>
								<input id="alamat" type="alamat" class="form-control" name="alamat">
								<?= form_error('alamat', '<div class="text-sm text-danger">', '</div>') ?>
							</div>
							<div class="row">
								<div class="form-group col-6">
									<label for="gender" class="d-block">Gender</label>
									<select name="gender" id="gender" class="form-control select2">
										<option value="">Pilih Gender</option>
										<option value="Pria">Pria</option>
										<option value="Wanita">Wanita</option>
									</select>
									<?= form_error('gender', '<div class="text-sm text-danger">', '</div>') ?>
								</div>
								<div class="form-group col-6">
									<label for="password" class="d-block">Password</label>
									<input id="password" type="password" class="form-control" name="password">
									<?= form_error('password', '<div class="text-sm text-danger">', '</div>') ?>
								</div>
							</div>
							<div class="row">
								<div class="form-group col-6">
									<label for="no_telepon" class="d-block">No. Telepon</label>
									<input id="no_telepon" type="no_telepon" class="form-control" name="no_telepon">
									<?= form_error('no_telepon', '<div class="text-sm text-danger">', '</div>') ?>
								</div>
								<div class="form-group col-6">
									<label for="no_ktp" class="d-block">No. KTP</label>
									<input id="no_ktp" type="no_ktp" class="form-control" name="no_ktp">
									<?= form_error('no_ktp', '<div class="text-sm text-danger">', '</div>') ?>
								</div>
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-primary btn-lg btn-block">
									Register
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>