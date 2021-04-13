<body >
<div class="container mt-3">

    <div class="row mb-3">
        <div class="col-lg-6">
            <a href="<?= base_url(); ?>university/add" class="btn btn-dark">Tambah Data Universitas</a>
        </div>
    </div>

    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>

    <!-- <?php if ($this->session->flashdata('flash')) : ?>
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
    <?php endif; ?> -->

    <div class="row">
        <div class="col-lg-6">
            <form action="<?= base_url('university'); ?>" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="masukkan keyword ..." name="keyword" autocomplete="off">
                    <div class="input-group-append">
                        <input class="btn btn-dark" type="submit" name="submit" value="Cari">
                    </div>
                </div>
            </form>
        </div>
    </div>

    <h3 class="mt-3">Daftar Universitas</h3>

    <div class="row">
        <div class="col-md-10">
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Logo</th>
                        <th>Nama</th>
                        <th>Website</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (empty($universitas)) : ?>
                        <tr>
                            <td colspan="5">
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
                            <td><img src="<?= base_url('assets/img/univ_logo') . '/' . $univ['logo']; ?>" alt="" style="height: 100px; width: 100px;"></td>
                            <td><?= $univ['nama']; ?></td>
                            <td>
                                <p><a href="<?= $univ['website']; ?>" class="text-success"><?= $univ['website']; ?></a></p>
                            </td>
                            <td>
                                <a href="<?= base_url(); ?>university/detail/<?= $univ['id']; ?>" class="badge badge-pill badge-info">Detail</a>
                                <a href="<?= base_url(); ?>university/edit/<?= $univ['id']; ?>" class="badge badge-pill badge-dark">Edit</a>
                                <a href="<?= base_url(); ?>university/delete/<?= $univ['id']; ?>" class="badge badge-pill badge-danger delete-button">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
    
</body>
