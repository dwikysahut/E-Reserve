<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pemesanan extends CI_Controller
{
    var $data;
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mproduk', 'mProduk');
        $this->load->model('Mukuran', 'mUkuran');
        $this->load->model('Mkategori', 'mKategori');
        $this->load->model('Mpemesanan', 'mPemesanan');
        $this->load->helper("rupiahConvert");
        $this->load->helper("randomGenerator");
        
        $this->data['session'] = $this->session->userdata('username');
    }
    public function index()
  {
    $data=$this->data;
    $data['produk']=array();
    $res=$this->mProduk->get_data_not_expired();
    foreach($res as $item) {
        $arr=array(
            'kode_produk' => $item['kode_produk'],
            'nama_produk' => $item['nama_produk'],
            'expired_date' => $item['expired_date'],
            'harga_satuan' => $item['harga_satuan'],
            'id_ukuran' => $item['id_ukuran'],
            'nama_ukuran' => $item['nama_ukuran'],
            'id_kategori' => $item['id_kategori'],
            'nama_kategori' => $item['nama_kategori'],
            'harga_convert'=> rupiahConvert($item['harga_satuan'])
        );
        array_push($data['produk'],$arr);
    }
    $data['cart']=array();
    foreach($this->cart->contents() as $item) {
        $cartArr=array(
            'id' => $item['id'],
            'rowid' => $item['rowid'],
            'qty' => $item['qty'],
            'price' => $item['price'],
            'name' => $item['name'],
        );
        array_push($data['cart'],$cartArr);
    }
    $data['page'] = 'pemesanan/pemesanan';
    $data['total'] =$this->cart->total();
    $this->load->view('layout/base', $data);
        
    }
  

    public function tambah_pemesanan()
    {
        $post = $this->input->post();
        $post['no_pemesanan']=randomGenerator();
        $dataPost=array();

    foreach($this->cart->contents() as $item) {
        
        $dataPost=array(
            'kode_produk' => $item['id'],
            'tanggal_pemesanan' => date('Y-m-d'),
            'no_pemesanan' => $post['no_pemesanan'],
            'nama_pelanggan' => $post['nama_pelanggan'],
            'jumlah' => $item['qty'],
            'total' => $item['qty'] * $item['price'],
        );
        echo $dataPost['no_pemesanan'];
        if(!$this->mPemesanan->tambah_data($dataPost)){
            break;
        }
        $this->cart->remove($item['rowid']);

        
    }
      
    redirect('pemesanan');

           
     
    }
    function add_to_cart(){ //fungsi Add To Cart
        $data = 
        array(
            'id' => $this->input->post('kode_produk'),
            'name' => $this->input->post('nama_produk'),
            'price' => $this->input->post('harga_satuan'),
           
            'qty' => $this->input->post('quantity'),
        );
     
        $this->cart->insert($data);
    
        echo $this->show_cart(); //tampilkan cart setelah added
}

function delete_cart(){ //fungsi Add To Cart
    $data = 
    array(
        'rowid' => $this->input->post('produk_id'),
        'qty' => $this->input->post('produk_qty')-1,
        
    );
 
    $this->cart->update($data);

    echo $this->show_cart(); //tampilkan cart setelah added
}

function show_cart(){ //Fungsi untuk menampilkan Cart
        $output = '<div class="inner-wrapper-cart">';
        $no = 0;
        foreach ($this->cart->contents() as $items) {
                $no++;
               
                $output .='
              
                <div class="cart-card-item">
                <div class="cart-header__item">

                    <img src="./assets/img/food.png" alt="">
                </div>
                <div class="cart-body__item">
                    <p><b>'.$items['name'].'</b></p>

                    <span>Rp. '.rupiahConvert($items['price']).'</span>
                    

                </div>

                <div class="cart-footer__item">
                 
                    <p>'.$items['qty'].'</p>
                    <button class="hapus-cart" data-produkid="'.$items['rowid'].'" data-produkqty="'.$items['qty'].'">
                        -
                    </button>
                </div>
            </div>
          
                ';
        }
        
        $output .= '
        </div>
        <div class="total-cart">
        <span>Total :</span>
        <span>Rp. '.rupiahConvert($this->cart->total()).'</span>
    
    
';
      
        return $output;
}
    public function edit($id)
    {
        $data=$this->data;
        $data['ukuran'] = $this->mUkuran->get_data();
        $data['kategori'] = $this->mKategori->get_data();
        $data['produk'] = $this->mProduk->get_data_by_id($id);
        $data['page'] = 'admin/produk/editProduk';
        $this->load->view('layout/base', $data);
    }

    public function prosesEdit($id)
    {
        $post = $this->input->post();
       
        if ($this->mProduk->edit_data($post, $id)) {
            redirect('produk');
        } else {
            // redirect('buku/tambah');
        }
    }

    public function prosesHapus($id)
    {
        $this->mProduk->hapus_data($id);
        redirect('produk');
    }
}