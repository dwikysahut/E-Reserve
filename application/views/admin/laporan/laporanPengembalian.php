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
                        <th>ID Peminjaman</th>
                        <th>ID Buku</th>
                        <th>Nomer Anggota</th>
                        <th>Tanggal Peminjaman</th>
                        <th>Tanggal Akhir Peminjaman</th>
                        <th>Tanggal Kembali</th>
                          <th>jumlah</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($pengembalian as $pngmbl) : ?>
                        <tr>
                            <td><?php echo $pngmbl['id_transaksi'] ?></td>
                            <td><?php echo $pngmbl['id_peminjaman'] ?></td>    
                            <td><?php echo $pngmbl['id_buku'] ?></td>    
                            <td><?php echo $pngmbl['nomer_anggota'] ?></td>  
                            <td><?php echo date('j M Y', strtotime($pngmbl['tanggal_pinjam'])); ?></td>
                            <td><?php echo date('j M Y', strtotime($pngmbl['tanggal_akhir_peminjaman'])); ?></td>
                        
                            <?php
                            if(round((strtotime($pngmbl['tanggal_kembali']) - strtotime($pngmbl['tanggal_akhir_peminjaman'])) / (60 * 60 * 24)) <= 0):
                            ?>
                            <td><?php echo date('j M Y', strtotime($pngmbl['tanggal_kembali'])) ?></td>
                            <?php
                             else:
                            ?>
                             <td ><p style="color: red;"><?php echo date('j M Y', strtotime($pngmbl['tanggal_kembali'])) ?></p></td>
                             <?php endif; ?>
                            <td><?php echo $pngmbl['jumlah'] ?></td>                        
                          
                            <!-- /.modal-dialog -->
                        </div>
                    <?php endforeach; ?>
                </tbody>
                <tfoot>
             
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