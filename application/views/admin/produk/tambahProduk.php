<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Tambah Produk</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo site_url('') ?>">Home</a></li>
                    <li class="breadcrumb-item active"><a href="<?php echo site_url('buku') ?>">Data Buku</a></li>
                    <li class="breadcrumb-item active">Tambah Produk</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <form action="<?php echo site_url('produk/prosesTambah') ?>" method="post" enctype="multipart/form-data">
        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Tambah Produk</h3>
                <div class="card-tools">

                </div>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="nomer_induk">Kode Produk</label>
                    <input type="text" class="form-control" id="kode_produk" name="kode_produk" placeholder="Kode">
                </div>
                <div class="form-group">
                    <label for="nomer_induk">Nama</label>
                    <input type="text" class="form-control" id="nama_produk" name="nama_produk" placeholder="Nama">
                </div>
                <div class="form-group">
                    <label for="nomer_induk">Expired Date</label>
                    <input type="date" class="form-control" id="expired_date" name="expired_date">
                </div>
                <div class="form-group">
                    <label for="nomer_induk">Harga Satuan</label>
                    <input type="number" class="form-control" id="harga_satuan" name="harga_satuan">
                </div>
                <div class="form-group">
                    <label for="ukuran">Ukuran</label>
                    <select name="ukuran" id="ukuran" class="form-control">
                        <option value="">Pilih Ukuran</option>
                        <?php foreach ($ukuran as $uk) : ?>
                            <option value="<?php echo $uk['id'] ?>"><?php echo $uk['nama'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="kategori">Kategori</label>
                    <select name="kategori" id="kategori" class="form-control">
                        <option value="">Pilih kategori</option>
                        <?php foreach ($kategori as $kt) : ?>
                            <option value="<?php echo $kt['id'] ?>"><?php echo $kt['nama'] ?></option>
                        <?php endforeach; ?>
                    </select>
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