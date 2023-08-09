<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800 font-weight-bold">Data Mahasiswa</h1>
    </div>

    <?php if ($this->session->flashdata('primary')): ?>
        <div class="alert alert-primary" role="alert">
            <?= $this->session->flashdata('primary') ?>
        </div>
    <?php endif ?>

    <div class="row">
        <div class="card-body">
            <div class="table-responsive" style="overflow-x: auto;">
                <a href="<?= base_url('web/data_mahasiswa/mahasiswa/add') ?>"
                    class="btn btn-primary btn-sm mb-2">Tambah Data Mahasiswa</a>
                <table class="table table-hover table-sm">
                    <thead style="font: size 5px; font-weight: bold; background-color: coral; color: black">
                        <tr style="font-size: small;">
                            <!-- Add 'text-center' class to center-align the header cells -->
                            <th class="text-center" style="width: 5%;">ID Mahasiswa</th>
                            <th class="text-center" style="width: 10%;">NIM</th>
                            <th class="text-center" style="width: 10%;">Nama Lengkap</th>
                            <th class="text-center" style="width: 10%;">E-Mail</th>
                            <th class="text-center" style="width: 15%;">Gender</th>
                            <th class="text-center" style="width: 5%;">Status Study</th>
                            <th class="text-center" style="width: 10%;">Jenjang Study</th>
                            <th class="text-center" style="width: 10%;">Semester Awal</th>
                            <th class="text-center" style="width: 10%;">Kode Prodi</th>
                            <th class="text-center" style="width: 10%;">Id Semester</th>
                            <th class="text-center" style="width: 5%;">Id Kelas</th>
                            <th class="text-center" style="width: 10%;">Foto</th>
                            <th class="text-center" style="width: 10%;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data as $datas): ?>
                            <tr style="font-size: small;">
                                <td>
                                    <?= $datas->id_mahasiswa ?>
                                </td>
                                <td>
                                    <?= $datas->nim ?>
                                </td>
                                <td>
                                    <?= $datas->nama_lengkap ?>
                                </td>
                                <td>
                                    <?= $datas->email ?>
                                </td>
                                <td>
                                    <?= $datas->gender ?>
                                </td>
                                <td>
                                    <?= $datas->status_study ?>
                                </td>
                                <td>
                                    <?= $datas->jenjang_study ?>
                                </td>
                                <td>
                                    <?= $datas->semester_awal ?>
                                </td>
                                <td>
                                    <?= $datas->nama_prodi ?>
                                </td>
                                <td>
                                    <?= $datas->semester ?>
                                </td>
                                <td>
                                    <?= $datas->nama_kelas ?>
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
                                    <a href="<?= base_url('web/data_mahasiswa/mahasiswa/edit/' . $datas->id_mahasiswa) ?>"
                                        class="btn btn-info btn-sm">Edit</a>
                                    <a href="<?= base_url('web/data_mahasiswa/mahasiswa/delete/' . $datas->id_mahasiswa) ?>"
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