<?php

class M_data extends CI_Model
{
  public $id_banner;
  public $sub_tittle;
  public $tittle_banner;
  public $deskripsi_banner;
  public $foto_banner;
  public $link_banner;

  //MODEL PRODUK	
  function tampil_dataProduk()
  {
    $this->db->select('*');
    $this->db->from('tbl_produk');
    return $query = $this->db->get();
  }

  function tampil_dataProdukpromo()
  {
    $this->db->select('*');
    $this->db->from('tbl_produk');
    $this->db->where('status_promo', 1);
    return $query = $this->db->get();
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

  public function getProductById($id)
  {
    $this->db->select("*,tbl_produk.id_produk AS produkId");
    $this->db->from("tbl_produk");
    $this->db->join("tbl_attribut", "tbl_produk.id_produk=tbl_attribut.id_produk");
    $this->db->order_by("tbl_produk.id_produk", "desc");
    $this->db->where('tbl_produk.id_produk', $id);
    return $this->db->get()->row_array();
  }

  public function getImgProductById($id)
  {
    $product = $this->db->get_where('tbl_produk', ['id_produk' => $id])->row_array();
    return $this->db->get_where('tbl_produk', ['gambar_produk' => $product['id_produk']]);
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
    return $query = $this->db->get();
  }

  function update_data($where, $data, $table)
  {
    $this->db->where($where);
    $this->db->update($table, $data);
  }

  function update_hargaDiskon($hardis, $idp)
  {
    $hasil = $this->db->query("UPDATE `tbl_produk` SET `hargadiskon` = '$hardis' WHERE `tbl_produk`.`id_produk` = '$idp';");
    return $hasil;
  }

  //untuk slider
  public function tampil_slider()
  {
    $query = $this->db->get('tbl_banner');
    return $query->result();
  }

  public function get_cari($keyword)
  {
    $this->db->from('tbl_produk');
    $this->db->like('nama_produk', $keyword);

    return $this->db->get()->result();
  }


  function data_homepage($number, $offset)
  {
    $status_produk = "1";
    $this->db->like('status_produk', $status_produk);

    return $query = $this->db->get('tbl_produk', $number, $offset)->result();
  }

  function data($number, $offset, $keyword = null)
  {

    if ($keyword) {
      $this->db->like('nama_produk', $keyword);
    }
    return $query = $this->db->get('tbl_produk', $number, $offset)->result();
  }

  function jumlah_data()
  {
    return $this->db->get('tbl_produk')->num_rows();
  }

  // Function Kategori Hijab ==============================================================================================
  function data_kategori_hijab($number, $offset, $keyword = null)
  {

    if ($keyword) {
      $this->db->like('id_kategori', $keyword);
    }

    return $query = $this->db->get('tbl_produk', $number, $offset)->result();
  }
  // End Function Kategori Hijab ==============================================================================================


  // Kategori hijab
  public function tampil_kategori()
  {
    $this->db->from('tbl_kategori');
    $this->db->where('status', '0');
    $query = $this->db->get();
    return $query->result();
  }


  // Function Flash Sale ==============================================================================================
  function jumlah_data_flash_sale()
  {
    return $this->db->get('tbl_produk')->num_rows();
  }

  function data_flash_sale($number, $offset)
  {
    $status_promo = "1";
    $this->db->where('status_promo', $status_promo);

    return $query = $this->db->get('tbl_produk', $number, $offset)->result();
  }

  function get_data_flash_sale($number, $offset, $keyword = null)
  {

    if ($keyword) {
      $this->db->like('status_promo', $keyword);
    }

    return $query = $this->db->get('tbl_produk', $number, $offset)->result();
  }

  function hapus_data($where, $table)
  {
    $this->db->where($where);
    $this->db->delete($table);
  }


  // End Function Flash Sale ==============================================================================================


}
