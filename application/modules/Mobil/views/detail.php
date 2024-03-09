<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><?= $title; ?></h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Master Data</a></div>
                <div class="breadcrumb-item active"><a href="#">Data Mobil</a></div>
                <div class="breadcrumb-item"><?= $title; ?></div>
            </div>
        </div>

        <?php foreach ($detail as $dt) : ?>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="chocolat-parent">
                                <a href="<?= site_url('assets/upload/' . $dt->gambar) ?>" title="Just an example">
                                    <div data-crop-image="325">
                                        <img width="325px" src="<?= site_url('assets/upload/' . $dt->gambar) ?>" alt="...">
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <table class="table table-bordered table-striped">
                                <tr>
                                    <td>Type Mobil : </td>
                                    <td>
                                        <?php if ($dt->kode_tipe == 'SDN') {
                                            echo "Sedan";
                                        } elseif ($dt->kode_tipe == 'HTB') {
                                            echo "Hatchback";
                                        } elseif ($dt->kode_tipe == 'MPV') {
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
                                        <?php if ($dt->status == "0") {
                                            echo "<span class='badge badge-danger'>Tidak Tersedia</span>";
                                        } elseif ($dt->status == "1") {
                                            echo "<span class='badge badge-primary'>Tersedia</span>";
                                        } ?>
                                    </td>
                                </tr>
                            </table>
                            <a href="<?= site_url('mobil') ?>" class="btn btn-secondary">Kembali</a>
                            <a href="<?= site_url('mobil/editMobil/' . $dt->id_mobil) ?>" class="btn btn-warning">Edit</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </section>
</div>