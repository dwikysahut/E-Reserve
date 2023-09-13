<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Edit Anggota</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo site_url('dashboard') ?>">Home</a></li>
                    <li class="breadcrumb-item active"><a href="<?php echo site_url('pengembalian') ?>">Data Pengembalian</a></li>
                    <li class="breadcrumb-item active">Edit Pengembalian</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <form action="<?php echo site_url('pengembalian/prosesEdit/'.$pengembalian['id_transaksi']) ?>" method="post">
        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Edit Pengembalian</h3>
                <div class="card-tools">

                </div>
            </div>
           
				<div class="row">

                <div class="col-md-5 col-sm-12 col-xs-12">
						<p><b>Tanggal Pengembalian:</b></p>
						<input class="form-control" type="date" name='tanggal_kembali'  value="<?php  echo $pengembalian['tanggal_kembali']?>" required>
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