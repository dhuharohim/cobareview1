<div class="container">
    <div class="row mt-3">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    Tambahkan Data Universitas
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control" id="nama">
                            <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" name="alamat" class="form-control" id="alamat">
                            <small class="form-text text-danger"><?= form_error('alamat'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" class="form-control" id="email">
                            <small class="form-text text-danger"><?= form_error('email'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="website">Website</label>
                            <input type="text" name="website" class="form-control" id="website">
                            <small class="form-text text-danger"><?= form_error('website'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="telp">Nomor Telepon</label>
                            <input type="text" name="telp" class="form-control" id="telp">
                            <small class="form-text text-danger"><?= form_error('telp'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="image">Logo</label>
                            <div class="row">
                                <div class="col-sm-2">
                                    <img src="<?= base_url('assets/img/univ_logo/default.jpg'); ?>" class="img-thumbnail img-preview">
                                </div>
                                <div class="col-sm-7">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="image" name="image" onchange="previewImg();">
                                        <label class="custom-file-label" for="image">Pilih file</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a href="<?= base_url(); ?>university" class="btn btn-outline-danger float-left mt-5">Kembali</a>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>