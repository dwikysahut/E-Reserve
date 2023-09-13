<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-Reserve</title>

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
    <link href=".././css/pemesanan.style.css" rel="stylesheet" />
</head>
<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <div class="wrapper-item"> 
        <div class="card-item">
                <div class="header__item">
            
                    <img src="../assets/img/food.png" alt="">
                </div>
                <div class="body__item">
                    <p>item</p>
                    <span>kategori</span>
                </div>

                <div class="footer__item">
                    <button>
                        -
                    </button>
                    <p>0</p>
                    <button>
                        +
                    </button>
                </div>
            </div>
            <div class="card-item">
                <div class="header__item">
                    
                <img src="../assets/img/food.png" alt="">
                </div>
                <div class="body__item">
                    <p>item</p>
                    <span>kategori</span>
                </div>

                <div class="footer__item">
                    <button>
                        -
                    </button>
                    <p>0</p>
                    <button>
                        +
                    </button>
                </div>
            </div>
        </div>
      
           
      
  

        
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