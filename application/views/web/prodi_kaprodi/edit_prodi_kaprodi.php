<div class="container-fluid">

    <!-- Page Heading -->
    <div class="card shadow">
        <div class="card-header">Form Ubah Data Kepala Kaprodi</div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-3">
                    <a href="<?= base_url('web/data_kepalaprodi/Kepalaprodi/') ?>"
                        class="btn btn-primary btn-sm">Back</a>
                </div>
                <div class="col-sm-6">
                    <form action="<?= base_url('web/data_kepalaprodi/Kepalaprodi/update/' . $data->id_kaprodi) ?>"
                        class="user form-horizontal" method="POST">
                        <div class="form-group">
                            <label for="id_kaprodi">ID Kaprodi</label>
                            <input type="text" class="form-control" name="id_kaprodi" value="<?= $data->id_kaprodi ?>">
                            <input type="hidden" name="where" value="<?= $data->id_kaprodi ?>">
                        </div>
                        <div class="form-group">
                            <label for="kode_kaprodi">Kode Kaprodi</label>
                            <input type="text" class="form-control" name="kode_kaprodi"
                                value="<?= $data->kode_kaprodi ?>">
                        </div>
                        <div class="form-group">
                            <label for="id_dosen">Id Dosen</label>
                            <br>
                            <select name="id_dosen" id="id_dosen">
                                <?php foreach ($dosen_list as $dosen): ?>
                                    <option value="<?= $dosen['id_dosen'] ?>" <?php if ($kelas_data['id_dosen'] == $dosen['id_dosen'])
                                          echo 'selected' ?>>
                                      <?= $dosen['id_dosen'] ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm">Ubah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>