<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Data Kategori</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo site_url('') ?>">Home</a></li>
                    <li class="breadcrumb-item active">Data Kategori</li>
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
            <h3 class="card-title">Daftar Kategori</h3>
            <div class="card-tools">

            </div>
        </div>
        <div class="card-body">
            <a href="<?php echo site_url('kategori/tambah') ?>" class='btn btn-success'><i class="fas fa-plus"></i> Tambah Kategori</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-hover datatable">
                <thead>
                    <tr>
                        <th>id_Kategori</th>
                        <th>nama</th>
                        <th>opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($kategori as $kt) : ?>
                        <tr>
                            <td><?php echo $kt['id'] ?></td>
                            <td><?php echo $kt['nama'] ?></td>
                            <td>
                                <div class="input-group">
                                    <a href="<?php echo site_url('kategori/edit/'.$kt['id']) ?>" class='btn btn-info btn-xs'><i class="fas fa-edit"></i> Edit</a>
                                    <a href="#" class='btn btn-danger btn-xs' data-toggle="modal" data-target="#notifhapus<?php echo $kt['id'] ?>"><i class="fas fa-trash"></i> Hapus</a>
                                </div>
                            </td>
                        </tr>
                        <div class="modal fade" id="notifhapus<?php echo $kt['id'] ?>">
                            <div class="modal-dialog">
                                <div class="modal-content bg-danger">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Hapus Kategori</h4>
                                    </div>
                                    <div class="modal-body">
                                        <p>Hapus kategori <?php echo $kt['nama'] ?> ?</p>
                                    </div>
                                    <div class="modal-footer justify-content-between">
                                        <button type="button" class="btn btn-outline-light" data-dismiss="modal">Batal</button>
                                        <a href="<?php echo site_url('kategori/prosesHapus/'.$kt['id']) ?>" class="btn btn-outline-light">Ya, Hapus</a>
                                    </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                    <?php endforeach; ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th>id_Penerbit</th>
                        <th>nama</th>
                        <th>opsi</th>
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