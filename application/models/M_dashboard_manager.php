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
 
    // menghitung card pesanan masuk
    function jumlah_data_order()
    {
        $this->db->from('tbl_order');
        $this->db->where('tbl_order.status', '1');
        return $this->db->get()->num_rows();
    }

    // menghitung card produk terjual
    function jumlah_data_produk_terjual()
    {
        $id="5";
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

    // menghitung card jmlh Customer
    function jumlah_data_cutomer()
    {
          return $this->db->get('tbl_pelanggan')->num_rows();
    }

    // menghitung card jmlh karyawan
    function jumlah_data_karyawan()
    {
          return $this->db->get('tbl_admin')->num_rows();
    }


    public function pesanan_masuk()
    {
        $this->db->select('*');
         $this->db->from('tbl_order');
        //  $this->db->join('tbl_detail_order','tbl_detail_order.id_detail_order = tbl_order.id_order');
        //  $this->db->join('tbl_detail_order','tbl_detail_order.id_detail_order = tbl_order.id_detail_order');
 
         $query = $this->db->get();
         return $query->result();
    }

    public function tampil_stok_manager()
    {
        $this->db->select('*');
        $this->db->from('tbl_produk');
        $this->db->join('tbl_kategori','tbl_kategori.id_kategori = tbl_produk.id_kategori');
        //$this->db->join('tbl_jenis','tbl_jenis.id_kategori = tbl_kategori.id_kategori');
        $this->db->join('tbl_attribut','tbl_attribut.id_produk = tbl_produk.id_produk');
         
       
        $query = $this->db->get();
        return $query->result();
    }

    public function pesanan_masuk_manager()
    {
        $this->db->select('*');
        $this->db->from('tbl_order');
        $this->db->like('tbl_order.status', '1');
        $this->db->or_like('tbl_order.status', '2');
        $this->db->or_like('tbl_order.status', '3');
        
         $query = $this->db->get();
         return $query->result();
    }

}