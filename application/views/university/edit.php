<div class="container">
    <div class="row mt-3">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    Ubah Data Universitas
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $universitas['id']; ?>">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control" id="nama" value="<?= $universitas['nama']; ?>">
                            <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" name="alamat" class="form-control" id="alamat" value="<?= $universitas['alamat']; ?>">
                            <small class="form-text text-danger"><?= form_error('alamat'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" class="form-control" id="email" value="<?= $universitas['email']; ?>">
                            <small class="form-text text-danger"><?= form_error('email'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="website">Website</label>
                            <input type="text" name="website" class="form-control" id="website" value="<?= $universitas['website']; ?>">
                            <small class="form-text text-danger"><?= form_error('website'); ?></small>
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Ubah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>