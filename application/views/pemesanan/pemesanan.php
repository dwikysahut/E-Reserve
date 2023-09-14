<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-10">
                <h1>Pemesanan Produk</h1>
            </div>

        </div>
    </div><!-- /.container-fluid -->
</section>
<section class="content">



    <div class="content-reserve-wrapper">

        <div class="wrapper-item">

            <?php foreach ($produk as $prd) : ?>
            <div class="card-item">
                <div class="header__item">

                    <img src="./assets/img/food.png" alt="">
                </div>
                <div class="body__item">
                    <p><b><?php echo $prd['nama_produk'] ?></b></p>
                    <div class="inner__body__item">
                        <span>Rp. <?php echo $prd['harga_convert'] ?></span>
                        <span><?php echo $prd['nama_kategori'] ?></span>
                    </div>

                </div>

                <div class="footer__item">
                    <button class="add-to-cart" data-kodeproduk="<?php echo $prd['kode_produk']?>"
                        data-namaproduk="<?php echo $prd['nama_produk']?>"
                        data-namakategori="<?php echo $prd['nama_kategori']?>"
                        data-idkategori="<?php echo $prd['id_kategori']?>"
                        data-idukuran="<?php echo $prd['id_ukuran']?>"
                        data-namaukuran="<?php echo $prd['nama_ukuran']?>"
                        data-hargasatuan="<?php echo $prd['harga_satuan']?>">
                        Tambah Keranjang
                    </button>

                </div>
            </div>
            <?php endforeach; ?>

        </div>
        <div class="wrapper-cart">
            <div class="cart-section-wrapper">
                <div class="inner-wrapper-cart">
                    <?php foreach ($cart as $cart) : ?>
                    <div class="cart-card-item">
                        <div class="cart-header__item">

                            <img src="./assets/img/food.png" alt="">
                        </div>
                        <div class="cart-body__item">
                            <p><b><?php echo $cart['name']?></b></p>

                            <span>Rp. <?php echo rupiahConvert($cart['price'])?></span>

                        </div>

                        <div class="cart-footer__item">

                            <p><?php echo $cart['qty']?></p>
                            <button class="hapus-cart" data-produkid="<?php echo $cart['rowid']?>"
                                data-produkqty="<?php echo $cart['qty']?>">
                                -
                            </button>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>

                <div class="total-cart">
                    <span>Total :</span>
                    <span> Rp. <?php echo rupiahConvert($total)?></span>

                </div>
            </div>
            <form action="<?php echo site_url('pemesanan/tambah_pemesanan')?>" method="post"
                enctype="multipart/form-data">
                <!-- Default box -->
                <div class="card">
                    
                    <div class="card-body">
                        <div class="form-group">
                            <label for="tanggal_pemesanan">Tanggal Pemesanan</label>
                            <input type="date" class="form-control" disabled value='<?php echo date("Y-m-d"); ?>'
                                id="tanggal_pemesanan" name="tanggal_pemesanan" placeholder="Tanggal">
                        </div>
                        <div class="form-group">
                            <label for="tanggal_pemesanan">Nama pelanggan</label>
                            <input type="text" class="form-control" value='' id="nama_pelanggan" name="nama_pelanggan"
                                placeholder="Nama">
                        </div>
                    </div>
                    <button class="btn-submit">
                    Submit
                </button>
                </div>
              
            </form>
        </div>

    </div>



</section>