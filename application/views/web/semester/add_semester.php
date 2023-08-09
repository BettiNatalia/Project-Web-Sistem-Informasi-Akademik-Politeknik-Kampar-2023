<div class="container-fluid">

    <!-- Page Heading -->
    <div class="card shadow">
        <div class="card-header">Form Tambah Data Semester</div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-3">
                    <a href="<?= base_url('web/data_semester/semester/') ?>" class="btn btn-primary btn-sm">Back</a>
                </div>
                <div class="col-sm-6">
                    <form action="<?= base_url('web/data_semester/semester/create/') ?>"
                        class="user form-horizontal" method="POST">
                        <div class="form-group">
                            <label for="id_kaprodi">ID Semester</label>
                            <input type="text" class="form-control" name="id_semester" value="">
                        </div>
                        <div class="form-group">
                            <label for="kode_kaprodi">Semester</label>
                            <input type="text" class="form-control" name="semester" value="">
                        </div>
                        <div class="form-group">
                            <label for="id_dosen">Keterangan</label>
                            <input type="text" class="form-control" name="keterangan" value="">
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm">Tambah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>