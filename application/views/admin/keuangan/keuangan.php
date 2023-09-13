<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Data Denda</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo site_url('dashboard') ?>">Home</a></li>
                    <li class="breadcrumb-item active">Data Denda</li>
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
            <h3 class="card-title">List Data</h3>
            <div class="card-tools">

            </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-hover datatable">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>ID Peminjaman</th>
                        <th>ID Pengembalian</th>
                        <th>ID Buku</th>
                        <th>Nomer Anggota</th>
                        <th>Tanggal Peminjaman</th>
                        <th>Tanggal Akhir Peminjaman</th>
                        <th>Tanggal Kembali</th>
                        <th>jumlah</th>
                        <th>Total Denda</th>
                        <th>Status Denda</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($keuangan as $keuangan) : ?>
                        <tr>
                            <td><?php echo $keuangan['id'] ?></td>
                            <td><?php echo $keuangan['id_peminjaman'] ?></td>    
                            <td><?php echo $keuangan['id_transaksi'] ?></td>    
                            <td><?php echo $keuangan['id_buku'] ?></td>    
                            <td><?php echo $keuangan['nomer_anggota'] ?></td>  
                            <td><?php echo date('j M Y', strtotime($keuangan['tanggal_pinjam'])); ?></td>
                            <td><?php echo date('j M Y', strtotime($keuangan['tanggal_akhir_peminjaman'])); ?></td>
                            <?php
                              if(round((strtotime($keuangan['tanggal_kembali']) - strtotime($keuangan['tanggal_akhir_peminjaman'])) / (60 * 60 * 24)) <= 0):
                            ?>
                            <td><?php echo date('j M Y', strtotime($keuangan['tanggal_kembali'])) ?></td>
                            
                            <?php
                             else:
                            ?>
                             <td ><p style="color: red;"><?php echo date('j M Y', strtotime($keuangan['tanggal_kembali'])) ?></p></td>
                             <?php endif; ?>
                            <td><?php echo $keuangan['jumlah']; ?></td>  
                            <td><?php echo "Rp ". $keuangan['total']; ?></td>  
                            <td><?php 
                            if($keuangan['status_denda']==0):
                                ?>
                                <p style="color: red;">
                                <?php
                                echo "Belum Dibayar";
                            ?>
                            </p>
                            <?php
                            else:
                                echo "Sudah Dibayar";
                            endif;
                            ?></td>  
                            <td>
                                <div class="input-group">
                                    <a href="<?php echo site_url('keuangan/edit/'.$keuangan['id'])?>" class='btn btn-info btn-xs'><i class="fas fa-edit"></i> Edit</a>
                                    <a href="#" class='btn btn-danger btn-xs' data-toggle="modal" data-target="#notifhapus<?php echo $keuangan['id'] ?>"><i class="fas fa-trash"></i> Hapus</a>
                                </div>
                            </td>
                        </tr>
                        <div class="modal fade" id="notifhapus<?php echo $keuangan['id'] ?>">
                            <div class="modal-dialog">
                                <div class="modal-content bg-danger">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Hapus Data Pengembalian</h4>
                                    </div>
                                    <div class="modal-body">
                                        <p>Hapus Data  <?php echo $keuangan['id'] ?> ?</p>
                                    </div>
                                    <div class="modal-footer justify-content-between">
                                        <button type="button" class="btn btn-outline-light" data-dismiss="modal">Batal</button>
                                        <a href="<?php echo site_url('keuangan/prosesHapus/'.$keuangan['id']) ?>" class="btn btn-outline-light">Ya, Hapus</a>
                                    </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
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