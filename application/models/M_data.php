<?php 
 
class M_data extends CI_Model{
  
  //MODEL PRODUK	
    function tampil_dataProduk()
    {    
    $this->db->select('*');
    $this->db->from('tbl_produk');    
    return $query=$this->db->get();
    }
        
    public function tpdetailProduk($id)
    {
      $this->db->select('*');
      $this->db->from('tbl_produk');
      //$this->db->join('tbl_foto_produk', 'tbl_foto_produk.id_produk = tbl_produk.id_produk');
      $this->db->join('tbl_kategori', 'tbl_kategori.id_kategori = tbl_produk.id_kategori');         
      $this->db->where('tbl_produk.id_produk', $id);
      return $this->db->get()->result();
    }

    function cek_data($id, $id_db, $database)
    { //cek database
      $this->db->from($database);
      $this->db->where($id_db, $id);
      return $this->db->count_all_results();
    }

    function input_data($data, $table)
	  {
		$this->db->insert($table, $data); //masukkan data jenis surat ke database
    }

    function tampil_dataPromo()
    {    
    $this->db->select('*');
    $this->db->from('tbl_promo');    
    return $query=$this->db->get();
    }

    function update_data($where,$data,$table){
      $this->db->where($where);
      $this->db->update($table,$data);
    }

    function update_hargaDiskon($hardis,$idp)
    {
      $hasil=$this->db->query("UPDATE `tbl_produk` SET `hargadiskon` = '$hardis' WHERE `tbl_produk`.`id_produk` = '$idp';");
      return $hasil;
    }
}