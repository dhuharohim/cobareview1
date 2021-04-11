<div class="container">
    <div class="row mt-3">
        <div class="col md-6">
            <div class="card" style="width: 27rem;">
                <div class="card-header">
                    Detail Universitas
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?= $universitas['nama']; ?></h5>
                    <h6 class="card-subtitle mb-3 text-muted"><?= $universitas['alamat']; ?></h6>
                    <p class="card-text mb-2">Email : <?= $universitas['email']; ?></p>
                    <p class="card-text mb-2">Website : <a href="<?= $universitas['website']; ?>"><?= $universitas['website']; ?></a></p>
                    <a href="<?= base_url(); ?>university" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>