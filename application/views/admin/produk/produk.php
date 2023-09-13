<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Data Produk</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo site_url('') ?>">Home</a></li>
                    <li class="breadcrumb-item active">Data Produk</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Daftar Produk</h3>
            <div class="card-tools">

            </div>
        </div>
        <div class="card-body">
            <a href="<?php echo site_url('produk/tambah') ?>" class='btn btn-success'><i class="fas fa-plus"></i> Tambah produk</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-hover datatable">
                <thead>
                    <tr>
                        <th>kode produk</th>
                        <th>nama Produk</th>
                        <th >tgl expired</th>
                        <th>harga</th>
                        <th>ukuran</th>
                        <th>kategori</th>
                     
                        <th>opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($produk as $item) :?>
                    
                        <tr>
                            <td><?php echo $item['kode_produk'] ?></td>
                            <td><?php echo $item['nama_produk'] ?></td>
                          
                            <td><?php echo $item['expired_date'] ?></td>
                            <td><?php echo $item['harga_satuan'] ?></td>
                            <td><?php echo $item['nama_ukuran'] ?></td>
                            <td><?php echo $item['nama_kategori'] ?></td>
                            
                            <td>
                                <div class="input-group">
                                    <a href="<?php echo site_url('produk/edit/'.$item['kode_produk']) ?>" class='btn btn-info btn-xs'><i class="fas fa-edit"></i> Edit</a>
                                    <a href="#" class='btn btn-danger btn-xs' data-toggle="modal" data-target="#notifhapus<?php echo $item['kode_produk'] ?>"><i class="fas fa-trash"></i> Hapus</a>
                                </div>
                            </td>
                        </tr>
                        <div class="modal fade" id="notifhapus<?php echo $item['kode_produk'] ?>">
                            <div class="modal-dialog">
                                <div class="modal-content bg-danger">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Hapus produk</h4>
                                    </div>
                                    <div class="modal-body">
                                        <p>Hapus produk  <?php echo $item['nama_kategori'].' '.$item['nama_produk'] ?> ?</p>
                                    </div>
                                    <div class="modal-footer justify-content-between">
                                        <button type="button" class="btn btn-outline-light" data-dismiss="modal">Batal</button>
                                        <a href="<?php echo site_url('produk/prosesHapus/'.$item['kode_produk']) ?>" class="btn btn-outline-light">Ya, Hapus</a>
                                    </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                    <?php endforeach; ?>
                </tbody>
                
            </table>
        </div>
        <!-- /.card-body -->
        
        <!-- /.card-footer-->
    </div>
    <!-- /.card -->

</section>
<!-- /.content -->