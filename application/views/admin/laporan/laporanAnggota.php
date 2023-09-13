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
                        <th>Nomer Anggota</th>
                        <th>Nomer Induk</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Alamat</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($anggota as $agt) : ?>
                        <tr>
                            <td><?php echo $agt['nomer_anggota'] ?></td>
                            <td><?php echo $agt['nomer_induk'] ?></td>
                            <td><?php echo $agt['nama'] ?></td>
                            <td><?php echo $agt['email'] ?></td>
                            <td><?php echo $agt['alamat'] ?></td>
                            <td><?php if ($agt['status'] == '0') {
                                    echo 'Mahasiswa';
                                } else {
                                    echo 'Dosen';
                                } ?></td>
                           
                           
                             
                          
                        </div>
                    <?php endforeach; ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th>Nomer Anggota</th>
                        <th>Nomer Induk</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Alamat</th>
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