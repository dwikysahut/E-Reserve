<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Data Laporan</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo site_url('') ?>">Home</a></li>
                    <li class="breadcrumb-item active">Data Laporan</li>
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
            <h3 class="card-title">Daftar Laporan</h3>
            <div class="card-tools">

            </div>
        </div>
        <div class="card-body">
        <table id="datalaporan" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>ID Transaksi</th>
                        <th>Nomer Anggota</th>
                        <th>Id Buku</th>
                        <th>Tanggal Pinjam</th>
                        <th>Batas Tanggal Pinjam</th>
                        <th>ID Pegawai</th>
                        <th>Jumlah</th>
                        <th>Status</th>
                    
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($peminjaman as $pnjm) : ?>
                        <tr>
                            <td><?php echo $pnjm['id_transaksi'] ?></td>
                            <td><?php echo $pnjm['nomer_anggota'] ?></td>
                            <td><?php echo $pnjm['id_buku']?></td>
                            <td><?php echo date('j M Y', strtotime($pnjm['tanggal_pinjam'])); ?></td>
                            <td><?php echo date('j M Y', strtotime($pnjm['tanggal_akhir_peminjaman'])); ?></td>
                            <td><?php echo $pnjm['id_pegawai'] ?></td>
                            <td><?php echo $pnjm['jumlah'] ?></td>
                            <td><?php if( $pnjm['status'] =='0'){
                                echo 'Sedang Dipinjam';
                             } else{
                                 echo 'Sudah Dikembalikan';
                             } ?></td>
                        
                              
                            <!-- /.modal-dialog -->
                        </div>
                    <?php endforeach; ?>
                </tbody>
                <tfoot>
                <tr>
                        <th>ID Transaksi</th>
                        <th>Nomer Anggota</th>
                        <th>Id Buku</th>
                        <th>Tanggal Pinjam</th>
                        <th>Batas Tanggal Pinjam</th>
                        <th>ID Pegawai</th>
                        <th>Jumlah</th>
                        <th>Status</th>
                     
                    </tr>
                   
                </tfoot>
            </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            Footer
        </div>
        <!-- /.card-footer-->
    </div>
    <!-- /.card -->

</section>
<!-- /.content -->