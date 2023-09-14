<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistem Pemesanan</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url('asset/plugins/fontawesome-free/css/all.min.css') ?>">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo base_url('asset/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('asset/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('asset/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') ?>">

    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url('asset/dist/css/adminlte.min.css') ?>">
    <link href="./css/pemesanan.style.css?<?php echo date('l jS \of F Y h:i:s A'); ?>" rel="stylesheet" />
</head>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">

        <?php include('header.php') ?>
        <?php include('sidebar.php') ?>
        <?php include('content.php') ?>
        <?php include('footer.php') ?>
        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="<?php echo base_url('asset/plugins/jquery/jquery.min.js') ?>"></script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo base_url('asset/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <!-- DataTables  & Plugins -->
    <script src="<?php echo base_url('asset/plugins/datatables/jquery.dataTables.min.js') ?>"></script>
    <script src="<?php echo base_url('asset/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') ?>"></script>
    <script src="<?php echo base_url('asset/plugins/datatables-responsive/js/dataTables.responsive.min.js') ?>"></script>
    <script src="<?php echo base_url('asset/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') ?>"></script>
    <script src="<?php echo base_url('asset/plugins/datatables-buttons/js/dataTables.buttons.min.js') ?>"></script>
    <script src="<?php echo base_url('asset/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') ?>"></script>
    <script src="<?php echo base_url('asset/plugins/jszip/jszip.min.js') ?>"></script>
    <script src="<?php echo base_url('asset/plugins/pdfmake/pdfmake.min.js') ?>"></script>
    <script src="<?php echo base_url('asset/plugins/pdfmake/vfs_fonts.js') ?>"></script>
    <script src="<?php echo base_url('asset/pluginsdatatables-buttons/js/buttons.html5.min.js') ?>"></script>
    <script src="<?php echo base_url('asset/plugins/datatables-buttons/js/buttons.print.min.js') ?>"></script>
    <script src="<?php echo base_url('asset/plugins/plugins/datatables-buttons/js/buttons.colVis.min.js') ?>"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url('asset/dist/js/adminlte.min.js') ?>"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url('asset/dist/js/demo.js') ?>"></script>
    <script>

$(document).ready(function(){
                $('.add-to-cart').click(function(){
                        var kode_produk = $(this).data("kodeproduk");
                        var nama_produk = $(this).data("namaproduk");
                        var id_kategori = $(this).data("idkategori");
                        var nama_kategori = $(this).data("namakategori");
                        var id_ukuran = $(this).data("idukuran");
                        var nama_ukuran = $(this).data("namaukuran");
                        var harga_satuan = $(this).data("hargasatuan");
                        var quantity     = 1;
                        console.log(kode_produk)
                        $.ajax({
                                url : "<?php echo base_url();?>pemesanan/add_to_cart",
                                method : "POST",
                                data : {kode_produk,nama_produk,id_kategori,nama_kategori,id_ukuran,nama_ukuran,harga_satuan,quantity},
                                success: function(data){
                                    
console.log(data)
                                    $('.cart-section-wrapper').html(data);
                                }
                        });
                });
 
              
 
                //Hapus Item Cart
                $(document).on('click','.hapus-cart',function(){
                        var produk_id=$(this).data("produkid"); //mengambil  id
                        var produk_qty=$(this).data("produkqty"); //qty dari artibut id
                      console.log(produk_id)
                        $.ajax({
                                url : "<?php echo base_url();?>pemesanan/delete_cart",
                                method : "POST",
                                data : {produk_id,produk_qty},
                                success :function(data){
                                    
                                    
                                    $('.cart-section-wrapper').html(data);
                                }
                               
                                
                        });
                });
        });

        $(function() {
            // $("#datalaporan").DataTable({
            //     "responsive": true,
            //     "lengthChange": false,
            //     "autoWidth": false,
            //     "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            // }).buttons().container().appendTo('#DataTables_Table_0_wrapper .col-md-6:eq(0)');
            $('.datatable').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
</body>

</html>