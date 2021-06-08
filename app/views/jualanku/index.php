<div class="container">
    <div class="card">
        <h5 class="card-header">
            Jualanku
            <a href="<?= BASEURL ?>jualanku/tambah" class="btn btn-primary btn-sm float-right">Tambah</a>
        </h5>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">
                <form id="cari" action="<?= BASEURL ?>jualanku/cari" class="input-group p-2" method="POST">
                    <input type="text" name="cari" class="form-control" placeholder="Cari sapi" aria-label="cari" aria-describedby="cari" required>
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="submit" id="cari">Cari</button>
                    </div>
                </form>
            </li>
            <?php if (!$data['jualanku']) { ?>
                <li class="list-group-item">
                    Belum ada hasil panen
                </li>
                <?php } else {
                foreach ($data['jualanku'] as $jualanku) : ?>
                    <li class="list-group-item ">
                        <div class="row">
                            <div class="col-md-2">
                                <img class="float-left mr-3 mw-100" src="<?= BASEURL ?>app/models/barang/<?= $jualanku['foto1']; ?>" alt="">
                            </div>
                            <div class="col-md-8">
                                <a class="card-link float-left" href="<?= BASEURL ?>jualanku/detail/<?= $jualanku['id']; ?>">
                                    <div class="">
                                        <h5 class="text-body"><?= $jualanku['nama']; ?></h5>
                                        <p class="text-muted small">Ditambahkan sejak <?= $jualanku['created_at']; ?> </p>
                                        <p class="text-muted">Rp. <?= $jualanku['harga']; ?></p>
                                        <p class="text-body"><?= $jualanku['deskripsi']; ?></p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-2">
                                <a href="<?= BASEURL ?>jualanku/hapus/<?= $jualanku['id']; ?>" class="badge badge-danger float-right ml-1" onclick="return confirm('Yakin ?');">hapus</a>
                                <a href="<?= BASEURL ?>jualanku/ubah/<?= $jualanku['id']; ?>" class="badge badge-success float-right ml-1">Ubah</a>
                            </div>
                        </div>
                    </li>
            <?php endforeach;
            } ?>
        </ul>
    </div>
</div>