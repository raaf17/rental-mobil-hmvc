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

    <?php foreach ($detail as $dt) : ?>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-5">
                        <img width="200px" src="<?= site_url('assets/upload/' . $dt->gambar) ?>" alt="...">
                    </div>
                    <div class="col-md-7">
                        <table class="table table-bordered table-striped">
                            <tr>
                                <td>Type Mobil : </td>
                                <td>
                                <?php if($dt->kode_tipe == 'SDN') {
                                    echo "Sedan";
                                } elseif($dt->kode_tipe == 'HTB') {
                                    echo "Hatchback";
                                } elseif($dt->kode_tipe == 'MPV') {
                                    echo "Multi Purpose Vechile";
                                } else {
                                    echo "<span class='text-danger'>Tipe Mobil Belum Terdaftar</span>";
                                } ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Merk</td>
                                <td><?= $dt->merk; ?></td>
                            </tr>
                            <tr>
                                <td>No. Plat</td>
                                <td><?= $dt->no_plat; ?></td>
                            </tr>
                            <tr>
                                <td>Warna</td>
                                <td><?= $dt->warna; ?></td>
                            </tr>
                            <tr>
                                <td>Tahun</td>
                                <td><?= $dt->tahun; ?></td>
                            </tr>
                            <tr>
                                <td>Status</td>
                                <td>
                                    <?php if($dt->status == "0") {
                                        echo "<span class='badge bg-danger'>Tidak Tersedia</span>";
                                    } elseif($dt->status == "1") {
                                        echo "<span class='badge bg-primary'>Tersedia</span>";
                                    } ?>
                                </td>
                            </tr>
                        </table>
                        <a href="<?= site_url('mobil') ?>" class="btn btn-sm btn-secondary">Kembali</a>
                        <a href="<?= site_url('mobil/editMobil/'.$dt->id_mobil) ?>" class="btn btn-sm btn-warning">Edit</a>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>