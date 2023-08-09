<div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 font-weight-bold">Data User</h1>
                        <a href="<?=base_url('admin/user/add');?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-sm text-white-50"></i> Tambah Data</a>
                    </div>

					<?php if ($this->session->flashdata('primary')): ?>
        <div class="alert alert-primary" role="alert">
            <?= $this->session->flashdata('primary') ?>
        </div>
    <?php endif ?>


                    <div class="row">
                    	<div class="card col-sm-12">
                    		<div class="card-header">
                    			<label for="" class="card-tittle">Data User</label>
                    			</div>
                    			<div class="card-body">
                    				<div class="table-responsive">
                    					<table class="table table-boardered">
                    						<thead style="font: size 5px; font-weight: bold; background-color: coral; color: black">
                    							<tr>
                    								<th>Nama</th>
                    								<th>Email</th>
                    								<th>Password</th>
													<th>Telepon</th>
													<th>Jabatan</th>
													<th>Aktif</th>
                    								<th>Aksi</th>
                    							</tr>
                    						</thead>
                    						<tbody>
                    							<?php foreach ($data as $datas) : ?>
                    								<tr>
                    							<td><?= $datas->nama ?></td>
                    							<td><?= $datas->email ?></td>
												<td><?= $datas->password ?></td>
												<td><?= $datas->telepon ?></td>
												<td><?= $datas->jabatan ?></td>
                    							<td><?= $datas->aktif ?></td>
                    							<td>
                    								<a href="<?= base_url('admin/user/edit/' . $datas->email) ?>"class="btn btn-info btn-sm">Edit</a>
                    								<a href="<?= base_url('admin/user/delete/' . $datas->email) ?>"class="btn btn-danger btn-sm">hapus</a>
                    								</td>
                    							</tr>
                    							<?php endforeach ?>
                    						</tbody>
                    					</table>
                    				</div>
                    			</div>
                    		</div>
                    	</div>
                    </div>
                   
