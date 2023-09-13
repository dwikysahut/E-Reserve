<!-- Content Header (Page header) -->
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Edit Data Peminjaman</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="<?php echo site_url('') ?>">Home</a></li>
					<li class="breadcrumb-item active"><a href="<?php echo site_url('peminjaman') ?>">Data Peminjaman</a></li>
					<li class="breadcrumb-item active">Edit Data</li>
				</ol>
			</div>
		</div>
	</div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
	<form action="<?php echo site_url('peminjaman/prosesEdit/'. $peminjaman['id_transaksi']) ?>" method="post">
		<!-- Default box -->
		<div class="card">
			<div class="card-header">
				<h3 class="card-title">Edit Data Peminjaman</h3>
				<div class="card-tools">

				</div>
			</div>
			<div class="card-body">
			<?php if($this->session->flashdata('msg')): ?>
                    
                    <p style="color:red;"><?php echo $this->session->flashdata('msg'); ?></p>
               
                <?php elseif($this->session->flashdata('msg')): ?>
                    
                    <p style="color:red;"><?php echo $this->session->flashdata('msg'); ?></p>
                    <?php endif; ?>
				<div class="form-group">
					<label for="nomer_induk">Nomor Anggota</label>
					<input type="text" class="form-control" id="nomer_anggota" name="nomer_anggota"
						placeholder="Nomor Anggota" value="<?php  echo $peminjaman['nomer_anggota']?>">
				</div>
				<div class="form-group">
					<label for="nomer_induk">ID Buku</label>
					<input type="text" class="form-control" id="id_buku" name="id_buku"
						placeholder="ID BUku"  value="<?php  echo $peminjaman['id_buku']?>">
				</div>
				<div class="row">

					<div class="col-md-5 col-sm-12 col-xs-12">
						<p><b>Tanggal Peminjaman:</b></p>
						<input class="form-control" type="date" name='tanggal_pinjam'  value="<?php  echo $peminjaman['tanggal_pinjam']?>" required>
					</div>
					<div class="col-md-5 col-sm-12 col-xs-12">
						<p><b>Tanggal Batas Peminjaman:</b></p>
						<input class="form-control" type="date" name='tanggal_akhir_peminjaman'  value="<?php  echo $peminjaman['tanggal_akhir_peminjaman']?>" required>
					</div>

				</div>
                <div class="form-group">
                </div>
                <div class="row">
                
                <div class="col-md-5 col-sm-12 col-xs-12">
                <label for="id_pegawai">Pegawai</label>
              <select class="form-control" name='id_pegawai'  required>
              <?php foreach ($pegawai as $pgw) : ?>
                <option value="<?=$pgw['id_pegawai'];?>"<?php if($peminjaman['id_pegawai']==$pgw['id_pegawai']){echo "selected";} ?>><?php echo $pgw['nama_pegawai']; ?></option>
                <?php endforeach; ?>
              </select>
            </div>
                <div class="col-md-5 col-sm-12 col-xs-12">
					<label for="nomer_induk">Jumlah</label>
					<input type="number" class="form-control" id="jumlah" name="jumlah"
						placeholder="Jumlah" value="<?php  echo $peminjaman['jumlah']?>">  
				</div>
              
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
