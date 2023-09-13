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
            <table id="datalaporan" class="table table-bordered table-striped datalaporan">
                <thead>
                    <tr>
                        <th>id_buku</th>
                        <th>judul</th>
                       
                        <th>kategori</th>
                        <th>penerbit</th>
                        <th>pengarang</th>
                        <th>tahun_terbit</th>
                        <th>jumlah</th>
                       
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($buku as $bk) : ?>
                        <tr>
                            <td><?php echo $bk['id_buku'] ?></td>
                            <td><?php echo $bk['judul'] ?></td>
                          
                            <td><?php echo $bk['nama kategori'] ?></td>
                            <td><?php echo $bk['nama penerbit'] ?></td>
                            <td><?php echo $bk['nama pengarang'] ?></td>
                            <td><?php echo $bk['tahun_terbit'] ?></td>
                            <td><?php echo $bk['jumlah'] ?></td>
                           
                            
                            <!-- /.modal-dialog -->
                        </div>
                    <?php endforeach; ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th>id_buku</th>
                        <th>judul</th>
                       
                        <th>kategori</th>
                        <th>penerbit</th>
                        <th>pengarang</th>
                        <th>tahun_terbit</th>
                        <th>jumlah</th>
                       
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