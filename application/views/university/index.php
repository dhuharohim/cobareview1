<div class="container mt-3">
    <?php if ($this->session->flashdata('flash')) : ?>
        <div class="row">
            <div class="col-lg-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data Universitas <strong>berhasil</strong>
                    <?= $this->session->flashdata('flash');
                    unset($_SESSION['flash']); ?>.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <div class="row mb-3">
        <div class="col-lg-6">
            <a href="<?= base_url(); ?>university/add" class="btn btn-primary">Tambah Data Universitas</a>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-lg-6">
            <form action="" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="masukkan keyword ..." name="keyword" autocomplete="off">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <h3 class="mt-3">Daftar Universitas</h3>

    <div class="row">
        <!-- <div class="col-md-5">
            <form action="<?= base_url('orang'); ?>" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="masukkan keyword ..." name="keyword" autocomplete="off">
                    <div class="input-group-append">
                        <input class="btn btn-primary" type="submit" name="submit" value="Cari">
                    </div>
                </div>
            </form>
        </div> -->
    </div>
    <div class="row">
        <div class="col-md-10">
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Website</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (empty($universitas)) : ?>
                        <tr>
                            <td colspan="4">
                                <div class="alert alert-danger text-center" role="alert">
                                    Data tidak ditemukan!
                                </div>
                            </td>
                        </tr>
                    <?php endif; ?>
                    <?php $i = 0; ?>
                    <?php foreach ($universitas as $univ) : ?>
                        <tr>
                            <th><?= ++$i; ?></th>
                            <td><?= $univ['nama']; ?></td>
                            <td>
                                <p><a href="<?= $univ['website']; ?>" class="text-success"><?= $univ['website']; ?></a></p>
                            </td>
                            <td>
                                <a href="<?= base_url(); ?>university/detail/<?= $univ['id']; ?>" class="badge badge-warning">Detail</a>
                                <a href="<?= base_url(); ?>university/edit/<?= $univ['id']; ?>" class="badge badge-success">Edit</a>
                                <a href="<?= base_url(); ?>university/delete/<?= $univ['id']; ?>" class="badge badge-danger" onclick="return confirm('Apakah anda yakin?');">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>