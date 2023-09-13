
      <!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Pemesanan Produk</h1>
            </div>
            <div class="col-sm-6">
              
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<section class="content">
      <div class="wrapper-item"> 
      <?php foreach ($produk as $produk) : ?>
        <div class="card-item">
                <div class="header__item">
            
                    <img src="./assets/img/food.png" alt="">
                </div>
                <div class="body__item">
                    <p><b><?php echo $produk['nama_produk'] ?></b></p>
                    <div class="inner__body__item">
                    <span>Rp. <?php echo $produk['harga_satuan'] ?>,00</span>
                    <span><?php echo $produk['nama_kategori'] ?></span>
                    </div>
                    
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
            <?php endforeach; ?>
          
        </div>
      
</section>