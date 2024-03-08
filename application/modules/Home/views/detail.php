<div class="container">
    <?php foreach ($mobil as $mb) : ?>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-5">
                        <img width="250px" src="<?= site_url('assets/upload/' . $mb->gambar) ?>" alt="...">
                    </div>
                    <div class="col-md-7">
                        <table class="table table-bordered table-striped">
                            <tr>
                                <td>Type Mobil : </td>
                                <td>
                                    <?php if ($mb->kode_tipe == 'SDN') {
                                        echo "Sedan";
                                    } elseif ($mb->kode_tipe == 'HTB') {
                                        echo "Hatchback";
                                    } elseif ($mb->kode_tipe == 'MPV') {
                                        echo "Multi Purpose Vechile";
                                    } else {
                                        echo "<span class='text-danger'>Tipe Mobil Belum Terdaftar</span>";
                                    } ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Merk</td>
                                <td><?= $mb->merk; ?></td>
                            </tr>
                            <tr>
                                <td>No. Plat</td>
                                <td><?= $mb->no_plat; ?></td>
                            </tr>
                            <tr>
                                <td>Warna</td>
                                <td><?= $mb->warna; ?></td>
                            </tr>
                            <tr>
                                <td>Tahun Produksi</td>
                                <td><?= $mb->tahun; ?></td>
                            </tr>
                            <tr>
                                <td>Status</td>
                                <td>
                                    <?php if ($mb->status == "0") {
                                        echo "<span class='badge bg-danger'>Tidak Tersedia</span>";
                                    } elseif ($mb->status == "1") {
                                        echo "<span class='badge bg-primary'>Tersedia</span>";
                                    } ?>
                                </td>
                            </tr>
                        </table>
                        <a href="<?= site_url('home') ?>" class="btn btn-sm btn-secondary">Kembali</a>
                        <?php if ($mb->status == "0") {
                            echo "<span class='btn btn-sm btn-danger>Telah di Rental</span>";
                        } else {
                            echo anchor('home/rental/tambah_rental' . $mb->id_mobil, '<button class="btn btn-sm btn-primary">Rental</button>');
                        } ?>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>