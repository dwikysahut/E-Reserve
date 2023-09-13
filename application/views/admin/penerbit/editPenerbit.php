<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Edit Penerbit</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo site_url('') ?>">Home</a></li>
                    <li class="breadcrumb-item active"><a href="<?php echo site_url('penerbit') ?>">Data Penerbit</a></li>
                    <li class="breadcrumb-item active">Edit Penerbit</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <form action="<?php echo site_url('penerbit/prosesEdit/' . $penerbit['id']) ?>" method="post">
        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Edit Penerbit</h3>
                <div class="card-tools">

                </div>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="nama">Nama Penerbit</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Penerbit" value="<?php echo $penerbit['nama']?>">
                </div>
                <div class="form-group">
                    <label for="nama">Alamat Penerbit</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Nama Penerbit" value="<?php echo $penerbit['alamat']?>">
                </div>
                <div class="form-group">
                    <label for="nama">Nomer Telpon Penerbit</label>
                    <input type="number" class="form-control" id="no_telp" name="no_telp" placeholder="Nama Penerbit" value="<?php echo $penerbit['no_telp']?>">
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