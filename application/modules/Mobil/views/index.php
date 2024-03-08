<div class="page-heading">
    <div class="page-title mt-2">
        <div class="row">
            <div class="d-flex justify-content-between my-2 align-center item-center">
                <h3><?= $title; ?></h3>
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end mt-2">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="">Data Master</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?= $title; ?></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <?php if ($this->session->flashdata('pesan')) : ?>
        <div class="alert alert-success alert-dismissible show fade">
            <?= $this->session->flashdata('pesan'); ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>

    <section class="section">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-end gap gap-2">
                    <a href="<?= site_url('mobil/tambahMobil') ?>" class="btn btn-primary btn-sm">
                        Tambah Data
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover table-striped table-bordered" id="table1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Gambar</th>
                                <th>Type</th>
                                <th>Merk</th>
                                <th>No. Plat</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach ($data_mobil as $data) : ?>
                                <tr>
                                    <td width="5%"><?= $no++; ?>.</td>
                                    <td class="text-center"><img width="60px" src="
                                    <?= site_url('assets/upload/' . $data->gambar) ?>" alt="..."></td>
                                    <td><?= $data->kode_tipe; ?></td>
                                    <td><?= $data->merk; ?></td>
                                    <td><?= $data->no_plat; ?></td>
                                    <td class="text-center">
                                        <?php if ($data->status == "0") {
                                            echo "<span class='badge bg-danger'>Tidak Tersedia</span>";
                                        } else {
                                            echo "<span class='badge bg-primary'>Tersedia</span>";
                                        } ?>
                                    </td>
                                    <td width="15%" class="text-center">
                                        <a href="<?= site_url('mobil/detailMobil/' . $data->id_mobil) ?>" class="btn btn-primary btn-sm"><i class="bi bi-eye"></i></a>
                                        <a href="<?= site_url('mobil/editMobil/' . $data->id_mobil) ?>" class="btn btn-warning btn-sm"><i class="bi bi-pencil-square"></i></a>
                                        <a href="<?= site_url('mobil/hapusMobil/' . $data->id_mobil) ?>" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer small text-muted p-0 px-4 py-3">Updated at <?php $zone = 3600 * +7;
                                                                                $date = gmdate("l, d F Y H:i a", time() + $zone);
                                                                                echo "$date"; ?>
            </div>
        </div>

    </section>
</div>