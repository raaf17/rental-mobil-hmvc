<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><?= $title; ?></h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Master Data</a></div>
                <div class="breadcrumb-item"><?= $title; ?></div>
            </div>
        </div>

        <?php if ($this->session->flashdata('pesan')) : ?>
            <div class="alert alert-success alert-dismissible show fade">
                <div class="alert-body">
                    <button class="close" data-dismiss="alert">
                        <span>&times;</span>
                    </button>
                    <?= $this->session->flashdata('pesan'); ?>
                </div>
            </div>
        <?php endif; ?>

        <div class="section-body">
            <div class="card card-primary">
                <div class="card-header">
                    <h4><?= $title; ?></h4>
                    <div class="card-header-action">
                        <a href="<?= site_url('tipe/tambahTipe') ?>" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data</a>
                        <a href="" class="btn btn-primary" data-toggle="modal" data-target="#modal-import-kelas"><i class="fas fa-file-import"></i> Import Data</a>
                    </div>
                </div>
                <div class="card-body table-responsive">
                    <table class="table table-hover table-striped table-bordered" id="table1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode Tipe</th>
                                <th>Nama Tipe</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach ($data_tipe as $data) : ?>
                                <tr>
                                    <td width="5%"><?= $no++; ?>.</td>
                                    <td><?= $data->kode_tipe; ?></td>
                                    <td><?= $data->nama_tipe; ?></td>
                                    <td width="12%" class="text-center">
                                        <a href="<?= site_url('tipe/editTipe/' . $data->id_tipe) ?>" class="btn btn-warning btn-sm"><i class="fas fa-pencil-square"></i></a>
                                        <a href="<?= site_url('tipe/hapusTipe/' . $data->id_tipe) ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <div class="card-footer small text-muted p-0 px-4 py-3">Updated at <?php $zone = 3600 * +7;
                                                                                    $date = gmdate("l, d F Y H:i a", time() + $zone);
                                                                                    echo "$date"; ?>
                </div>
            </div>
        </div>

    </section>
</div>