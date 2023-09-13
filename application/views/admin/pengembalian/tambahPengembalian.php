<!-- Content Header (Page header) -->
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Tambah Data Pengembalian</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="<?php echo site_url('') ?>">Home</a></li>
					<li class="breadcrumb-item active"><a href="<?php echo site_url('peminjaman') ?>">Data Peminjaman</a></li>
					<li class="breadcrumb-item active">Tambah Data</li>
				</ol>
			</div>
		</div>
	</div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
	<form action="<?php echo site_url('pengembalian/prosesTambah') ?>" method="post">
		<!-- Default box -->
		<div class="card">
			<div class="card-header">
				<h3 class="card-title"> Data Pengembalian</h3>
				<div class="card-tools">

				</div>
			</div>
			<div class="col-md-5 col-sm-12 col-xs-12">
                <label for="id_pegawai">ID Transaksi peminjaman</label>
              <select class="form-control" name='id_transaksi' required>
              <?php foreach ($peminjaman as $pnjm) : ?>
                <option value="<?=$pnjm['id_transaksi'];?>"><?php echo $pnjm['id_transaksi']; ?></option>
                <?php endforeach; ?>
              </select>
            </div>
				<div class="row">

					<div class="col-md-5 col-sm-12 col-xs-12">
						<p><b>Tanggal Pengembalian:</b></p>
						<input class="form-control" type="date" name='tanggal_kembali' required>
					</div>
				
            </div>
			<!-- /.card-body -->
			<div class="card-footer">
				<button type="submit" class="btn btn-primary">Submit</button>
			</div>
			<!-- /.card-footer-->
		</div>
		<!-- /.card -->
	</form>
</section>
<!-- /.content -->
