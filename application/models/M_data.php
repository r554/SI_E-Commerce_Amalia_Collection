<?php 
 
class M_data extends CI_Model{
  
  //MODEL DOSEN	
    function tampil_dataProduk(){    
    $this->db->select('*');
    $this->db->from('tbl_produk');    
    return $query=$this->db->get();
        }
        
    
    public function tpdetailProduk($id) {
      $this->db->select('*');
      $this->db->from('tbl_produk');
      //$this->db->join('tbl_foto_produk', 'tbl_foto_produk.id_produk = tbl_produk.id_produk');
      $this->db->join('tbl_kategori', 'tbl_kategori.id_kategori = tbl_produk.id_kategori');         
      $this->db->where('tbl_produk.id_produk', $id);
      return $this->db->get()->result();
    }
}