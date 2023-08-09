<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800 font-weight-bold">Data Kepala Program Studi</h1>
    </div>

    <?php if ($this->session->flashdata('primary')): ?>
        <div class="alert alert-primary" role="alert">
            <?= $this->session->flashdata('primary') ?>
        </div>
    <?php endif ?>

    <div class="row">
        <div class="card-body">
            <div class="table-responsive">
                <a href="<?= base_url('web/data_kepalaprodi/Kepalaprodi/add/') ?>"
                    class="btn btn-primary btn-sm mb-2">Tambah Data</a>
                <table class=" table table-hover table-sm">
                    <thead style="font: size 5px; font-weight: bold; background-color: coral; color: black">
                        <tr>
                            <th>ID Kaprodi</th>
                            <th>Kode Kaprodi</th>
                            <th>ID Dosen</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach ($data as $datas): ?>
                            <tr>
                                <td>
                                    <?= $datas->id_kaprodi ?>
                                </td>
                                <td>
                                    <?= $datas->kode_kaprodi ?>
                                </td>
                                <td>
                                    <?= $datas->id_dosen ?>
                                </td>
                                <td>
                                    <a href="<?= base_url('web/data_kepalaprodi/Kepalaprodi/edit/' . $datas->id_kaprodi) ?>"
                                        class="btn btn-info btn-sm">Edit</a>
                                    <a href="<?= base_url('web/data_kepalaprodi/Kepalaprodi/delete/' . $datas->id_kaprodi) ?>"
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