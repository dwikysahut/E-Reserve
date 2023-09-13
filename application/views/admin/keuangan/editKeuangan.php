<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Edit Anggota</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo site_url('') ?>">Home</a></li>
                    <li class="breadcrumb-item active"><a href="<?php echo site_url('keuangan') ?>">Data Anggota</a></li>
                    <li class="breadcrumb-item active">Edit Denda</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <form action="<?php echo site_url('keuangan/prosesEdit/'.$keuangan['id']) ?>" method="post">
        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Edit Data Denda</h3>
                <div class="card-tools">

                </div>
            </div>
           
				<div class="row">

                <div class="col-md-5 col-sm-12 col-xs-12">
                <label for="id_pegawai">Pegawai</label>
              <select class="form-control" name='status'  required>
        
                <option value="0"<?php if($keuangan['status']==0){echo "selected";} ?>>0 - Belum Dibayar</option>
                <option value="1"<?php if($keuangan['status']==1){echo "selected";} ?>>1 - Sudah Dibayar</option>            
              </select>
            </div>
                <div class="col-md-5 col-sm-12 col-xs-12">
					<label for="total_denda">Total Denda</label>
					<input type="number" class="form-control" id="total" name="total"
						placeholder="Jumlah" value="<?php  echo $keuangan['total']?>">  
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