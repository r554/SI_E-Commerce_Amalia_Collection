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


    public function tampil_stok()
    {
        $this->db->select('*');
        $this->db->from('tbl_produk');
        $this->db->join('tbl_kategori','tbl_kategori.id_kategori = tbl_produk.id_kategori');
      //  $this->db->join('tbl_jenis','tbl_jenis.id_kategori = tbl_kategori.id_kategori');
        $this->db->join('tbl_attribut','tbl_attribut.id_produk = tbl_produk.id_produk');
         
       
        $query = $this->db->get();
        return $query->result();
    }

 
    public function pesanan_masuk()
    {
        $this->db->select('*');
         $this->db->from('tbl_order');
         $this->db->like('tbl_order.status', '1');
          $this->db->or_like('tbl_order.status', '2');
           $this->db->or_like('tbl_order.status', '3');
        
         $query = $this->db->get();
         return $query->result();
    }

 
      // menghitung card order masuk
      function order_masuk()
      {
           $this->db->from('tbl_order');
        $this->db->where('tbl_order.status', '1');
            return $this->db->get()->num_rows();
      }

      // menghitung card produk terjual
    function produk_terjual()
    {
        $id="5";
        $this->db->from('tbl_order'); 
        $this->db->where('status', $id); 
            $query = $this->db->get();
            return $query->num_rows();
    }

    
        // menghitung card stok
        function stok()
        {
            $this->db->select('*');
            $this->db->from('tbl_attribut');
            return $this->db->get();
            
        }


}