<?php 

class M_dashboard_manager extends CI_model
{

    private $_table = "tbl_produk";
    public $id_produk;
    public $id_kategori;
    public $nama_produk;
    public $jumalah_produk;
    public $harga;
    public $hargadiskon;
    public $warna;
    public $deskripsi;
    public $berat_produk;
    public $gambar_produk;
    public $status_produk;
    public $status_promo;
    public $dibuat_tanggal;



    public function rules()
    {
        return [
            [
                'field' => 'id_produk',
                'label' => 'id_produk',
                'rules' => 'required'
            ]
        ];
    }


   


    public function tampil_data7()
    {
        $this->db->from('tbl_produk');
        $this->db->join('tbl_kategori', 'tbl_kategori.id_kategori = tbl_produk.id_kategori');
       
        $query = $this->db->get();
        return $query->result();
    }



    
    public function tampil_data10()
    {
    $this->db->from('tbl_keranjang');
    // $this->db->join('tbl_pelanggan', 'tbl_pelanggan.id_pelanggan = tbl_keranjang.id_pelanggan');
    // $this->db->join('tbl_order', 'tbl_order.id_keranjang = tbl_keranjang.id_keranjang');
    // $this->db->join('tbl_detail_order', 'tbl_detail_order.id_order = tbl_order.id_order');
   //  $this->db->where('tabel_lapak.kd_pengguna', $id); 
    $query = $this->db->get();
    return $query->result();
    }
 
    // menghitung card order hari ini
    function jumlah_data_order()
    {
          return $this->db->get('tbl_order')->num_rows();
    }

    // menghitung card produk terjual
    function jumlah_data_produk_terjual()
    {
        $id="3";
        $this->db->from('tbl_order');
        $this->db->where('status', $id); 
            $query = $this->db->get();
            return $query->num_rows();
    }

    
    // menghitung card stok
    function jumlah_data_stokseluruh()
    {
        $this->db->select('*');
        $this->db->from('tbl_attribut');
        return $this->db->get();
        
    }



}