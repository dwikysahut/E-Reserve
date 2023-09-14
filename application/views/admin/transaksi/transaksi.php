<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Data Transaksi</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo site_url('') ?>">Home</a></li>
                    <li class="breadcrumb-item active">Data Transaksi</li>
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
            <h3 class="card-title">Daftar Transaksi</h3>
            <div class="card-tools">

            </div>
        </div>
        <div class="card-body">
            <a href="<?php echo site_url('pemesanan') ?>" class='btn btn-success'><i class="fas fa-plus"></i> Buat Pesanan</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-hover datatable">
                <thead>
                    <tr>
                        <th>Tanggal Pemesanan</th>
                        <th>No. Pemesanan</th>
                        <th >Nama Pelanggan</th>
                        <th>Nama Produk</th>
                        <th>Ukuran</th>
                        <th>Kategori</th>
                        <th>Jumlah</th>
                        <th>Total</th>
                     
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($transaksi as $item) :?>
                    
                        <tr>
                            <td><?php echo $item['tanggal_pemesanan'] ?></td>
                            <td><?php echo $item['no_pemesanan'] ?></td>
                          
                            <td><?php echo $item['nama_pelanggan'] ?></td>
                            <td><?php echo $item['nama_produk'] ?></td>
                            <td><?php echo $item['nama_ukuran'] ?></td>
                            <td><?php echo $item['nama_kategori'] ?></td>
                            <td><?php echo $item['jumlah'] ?></td>
                            <td><?php echo $item['total'] ?></td>
                            
                           
                        </tr>
                       
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