<?php 

class M_dashboard extends CI_model
{

    private $_table = "tbl_produk";
    public $id_produk;
    public $id_kategori;
    public $nama_produk;
    public $jumalah_produk;
    public $harga;
    public $warna;
    public $deskripsi;
    public $berat_produk;
    public $gambar_produk;
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


   


    public function tampil_data2()
    {
        $this->db->from('tbl_produk');
        $this->db->join('tbl_kategori', 'tbl_kategori.id_kategori = tbl_produk.id_kategori');
       
        $query = $this->db->get();
        return $query->result();
    }



    
    public function tampil_data46()
    {
    $this->db->from('tbl_keranjang');
   // $this->db->join('tbl_pelanggan', 'tbl_pelanggan.id_pelanggan = tbl_keranjang.id_pelanggan');
   // $this->db->join('tbl_order', 'tbl_order.id_keranjang = tbl_keranjang.id_keranjang');
   // $this->db->join('tbl_detail_order', 'tbl_detail_order.id_order = tbl_order.id_order');
   //  $this->db->where('tabel_lapak.kd_pengguna', $id); 
    $query = $this->db->get();
    return $query->result();
    }
 


}