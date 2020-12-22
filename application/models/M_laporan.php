<?php 
 
class M_laporan extends CI_Model{
  
  //MODEL PRODUK	
    function tampil_dataProduk()
    {    
    $this->db->select('*');
    $this->db->from('tbl_produk');    
    return $query=$this->db->get();
    }
    
    public function show_all()
    {
      $this->db->select('*');
      $this->db->from('tbl_order');      
      $this->db->join('tbl_detail_order', 'tbl_detail_order.id_order = tbl_order.id_order');
      $this->db->join('tbl_produk', 'tbl_produk.id_produk = tbl_detail_order.id_produk');
      // $this->db->join('tbl_kategori', 'tbl_kategori.id_kategori = tbl_produk.id_kategori');
      //$this->db->like("status", '3');     // status 3 Berarti sudah terbayar (status dapat dirembukkan Nanti)
      return $this->db->get()->result();      
    }
    public function show_all_product()
    {
      $this->db->select('*');
      $this->db->from('tbl_produk');      
      $this->db->join('tbl_attribut', 'tbl_attribut.id_produk = tbl_produk.id_produk');
      $this->db->join('tbl_kategori', 'tbl_kategori.id_kategori = tbl_produk.id_kategori');
      // $this->db->join('tbl_kategori', 'tbl_kategori.id_kategori = tbl_produk.id_kategori');
      //$this->db->like("status", '3');     // status 3 Berarti sudah terbayar (status dapat dirembukkan Nanti)
      return $this->db->get()->result();      
    }
    public function penjualan()
    {
      $statusjual = '5';
      $this->db->select('*');
      $this->db->from('tbl_order');      
      $this->db->join('tbl_detail_order', 'tbl_detail_order.id_order = tbl_order.id_order');
      $this->db->join('tbl_produk', 'tbl_produk.id_produk = tbl_detail_order.id_produk');
      // $this->db->join('tbl_kategori', 'tbl_kategori.id_kategori = tbl_produk.id_kategori');
      $this->db->where('tbl_order.status', $statusjual);     // status 3 Berarti sudah terbayar (status dapat dirembukkan Nanti)
      return $this->db->get()->result();
      /*$query = $this->db->get();      
    foreach ($query->result() as $row) {
      echo $row->id_order;
      echo $row->nama_produk;
      echo $row->jumlah_produk;
      echo $row->metode_pembayaran;
      echo $row->rekening_pembayaran;
      echo $row->status;
      # code...
    }*/
    }
    public function dibatalkan()
    {
      $statusbatal = '6';
      $this->db->select('*');
      $this->db->from('tbl_order');      
      $this->db->join('tbl_detail_order', 'tbl_detail_order.id_order = tbl_order.id_order');
      $this->db->join('tbl_produk', 'tbl_produk.id_produk = tbl_detail_order.id_produk');
      // $this->db->join('tbl_kategori', 'tbl_kategori.id_kategori = tbl_produk.id_kategori');
      $this->db->where('status', $statusbatal);     // status 3 Berarti sudah terbayar (status dapat dirembukkan Nanti)
      return $this->db->get()->result();      
    }
    public function diproses()
    {
      $pesanandiproses = '3';
      //$pesanandiproses1 <= '4';
      $this->db->select('*');
      $this->db->from('tbl_order');      
      $this->db->join('tbl_detail_order', 'tbl_detail_order.id_order = tbl_order.id_order');
      $this->db->join('tbl_produk', 'tbl_produk.id_produk = tbl_detail_order.id_produk');
      // $this->db->join('tbl_kategori', 'tbl_kategori.id_kategori = tbl_produk.id_kategori');
      //$this->db->where('status', '3');
      $this->db->where('status', $pesanandiproses);
      //$this->db->where('status', $pesanandiproses1);     // status 3 Berarti sudah terbayar (status dapat dirembukkan Nanti)
           // status 3 Berarti sudah terbayar (status dapat dirembukkan Nanti)
      return $this->db->get()->result();      
    }

   

    
}