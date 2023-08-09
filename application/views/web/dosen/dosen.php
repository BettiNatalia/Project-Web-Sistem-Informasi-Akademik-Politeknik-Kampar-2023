<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800 font-weight-bold">Data Dosen</h1>
    </div>

    <?php if ($this->session->flashdata('primary')): ?>
        <div class="alert alert-primary" role="alert">
            <?= $this->session->flashdata('primary') ?>
        </div>
    <?php endif ?>

    <div class="row">
        <div class="card-body">
            <div class="table-responsive">
                <a href="<?= base_url('web/data_dosen/dosen/add') ?>" class="btn btn-primary btn-sm mb-2">Tambah
                    Data</a>
                <table class="table table-hover table-sm">
                <thead style="font: size 5px; font-weight: bold; background-color: coral; color: black">
                        <tr>
                            <th>ID Dosen</th>
                            <th>NRP</th>
                            <th>NIDN</th>
                            <th>Nama Lengkap</th>
                            <th>Gelar</th>
                            <th>E-mail</th>
                            <th>Gender</th>
                            <th>Pendidikan Terakhir</th>
                            <th>Foto</th>
                            <th>Kode Prodi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach ($data as $datas): ?>
                            <tr>
                                <td>
                                    <?= $datas->id_dosen ?>
                                </td>
                                <td>
                                    <?= $datas->nrp ?>
                                </td>
                                <td>
                                    <?= $datas->nidn ?>
                                </td>
                                <td>
                                    <?= $datas->nama_lengkap ?>
                                </td>
                                <td>
                                    <?= $datas->gelar ?>
                                </td>
                                <td>
                                    <?= $datas->email ?>
                                </td>
                                <td>
                                    <?= $datas->gender ?>
                                </td>
                                <td>
                                    <?= $datas->pendidikan_terakhir ?>
                                </td>
                                <td>
                                    <?php if ($datas->foto): ?>
                                        <img src="<?= base_url('assets/img/' . $datas->foto) ?>" alt="Foto Profile"
                                            class="rounded" width="80">
                                    <?php else: ?>
                                        <p>Tidak ada foto</p>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <?= $datas->kode_prodi ?>
                                </td>
                                <td>
                                    <a href="<?= base_url('web/data_dosen/dosen/edit/' . $datas->id_dosen) ?>"
                                        class="btn btn-info btn-sm">Edit</a>
                                    <a href="<?= base_url('web/data_dosen/dosen/delete/' . $datas->id_dosen) ?>"
                                        class="btn btn-danger btn-sm">Hapus</a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>