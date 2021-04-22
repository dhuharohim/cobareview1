<div class="container">
    <div class="row mt-3">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    Ubah Data Universitas
                </div>
                <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?= $universitas['id']; ?>">
                        <input type="hidden" name="old_logo" value="<?= $universitas['logo']; ?>">

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

                        <div class="form-group">
                            <label for="telp">Nomor Telepon</label>
                            <input type="text" name="telp" class="form-control" id="telp" value="<?= $universitas['telp']; ?>">
                            <small class="form-text text-danger"><?= form_error('telp'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="image">Logo</label>
                            <div class="row">
                                <div class="col-sm-2">
                                    <img src="<?= base_url('assets/img/univ_logo/') . $universitas['logo']; ?>" class="img-thumbnail img-preview">
                                </div>
                                <div class="col-sm-7">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="image" name="image" onchange="previewImg();">
                                        <label class="custom-file-label" for="image">Pilih file</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <p class="card-text">Jumlah Lomba : <span id="jumlah_lomba"><?= $universitas['jumlah_lomba']; ?></span></p>

                            <button type="button" onclick="totalCount(false)" class="btn btn-danger">-</button>

                            <input type="text" value="<?= $universitas['jumlah_lomba']; ?>" class="col-form-label-sm input-jumlah" id="input_jumlah" name="input_jumlah" autocomplete="off">

                            <button type="button" onclick="totalCount(true)" class="btn btn-success">+</button>
                        </div>

                        <a href="<?= base_url(); ?>university" class="btn btn-outline-danger float-left mt-5">Kembali</a>
                        <button type="submit" name="edit" class="btn btn-primary float-right">Ubah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>