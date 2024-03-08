<main role="main" class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-3">
                        <div class="card-body">
                            Kategori: <strong>Semua Kategori</strong>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php foreach ($mobil as $mb) : ?>
                    <div class="col-md-6">
                        <div class="card mb-3">
                            <img src="<?= base_url('assets/upload/' . $mb->gambar) ?>" alt="" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title"><?= $mb->merk; ?></h5>
                                <p class="card-text"><strong><?= $mb->no_plat; ?></strong></p>
                                <a href="" class="badge badge-primary"><i class="fas fa-tags"></i> <?= $mb->kode_tipe; ?></a>
                            </div>
                            <div class="card-footer">
                                <?php if ($mb->status == "0") {
                                    echo "<span class='btn btn-danger>Telah di Rental</span>";
                                } else {
                                    echo anchor('home/rental/tambah_rental' . $mb->id_mobil, '<button class="btn btn-primary">Rental</button>');
                                } ?>
                                <a href="<?= base_url('home/detailMobil/'.$mb->id_mobil) ?>" class="btn btn-info">Detail</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="col-md-3">
            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-3">
                        <div class="card-header">
                            Pencarian
                        </div>
                        <div class="card-body">
                            <form action="" method="POST">
                                <div class="input-group">
                                    <input type="text" name="keyword" class="form-control" placeholder="Cari" value="">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="submit">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-3">
                        <div class="card-header">
                            Category
                        </div>
                        <ul class="list-group">
                            <li class="list-group-item"><a href="">Semua kategori</a></li>
                            <li class="list-group-item"><a href="">Mobil</a></li>
                            <li class="list-group-item"><a href="">Motor</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>