<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <script src="https://kit.fontawesome.com/0cc81f7213.js" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
       
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-dark text-white mb-4">
                                    <div class="card-body">Jumlah Kategori</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                    <h3 class=" text-white stretched-link" ><?php echo $kategori ?> </h3>
                                    <div class=" text-white ml-auto p-2"><i class="fas fa-list-alt" style="font-size:25px;"></i></div>
                                       
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-dark text-white mb-4">
                                    <div class="card-body">Jumlah User</div>
                                    <div class="card-footer d-flex ">
                                    <h3 class=" text-white stretched-link" ><?php echo $user ?> </h3>
                                        <div class=" text-white ml-auto p-2"><i class="fas fa-user-alt" style="font-size:25px;"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-dark text-white mb-4">
                                    <div class="card-body">Jumlah Transaksi</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                    <h3 class=" text-white stretched-link" ><?php echo $transaksi ?> </h3>
                                        <div class=" text-white ml-auto p-2"><i class="fas fa-shopping-cart" style="font-size:25px;"></i></div>
                                    
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-dark text-white mb-4">
                                    <div class="card-body">Jumlah Produk</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                    <h3 class=" text-white stretched-link" ><?php echo $produk ?> </h3>
                                    <div class=" text-white ml-auto p-2"><i class="fas fa-hamburger" style="font-size:25px;"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                     
                </main>
             
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
