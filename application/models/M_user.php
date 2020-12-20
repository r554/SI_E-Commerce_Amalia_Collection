<?php

class M_user extends CI_Model
{

  public function getOrder()
  {
    $id = $this->session->userdata('id');
    $this->db->where('status <=', 4);
    $this->db->where('id_pelanggan', $id);
    $this->db->order_by('id_order', 'desc');
    return $this->db->get('tbl_order');
  }
  public function getOrderDone()
  {
    $id = $this->session->userdata('id');
    $this->db->where('status >=', 5);
    $this->db->where('id_pelanggan', $id);
    $this->db->order_by('id_order', 'desc');
    return $this->db->get('tbl_order');
  }
  public function getOrderByInvoice($id)
  {
    $user = $this->session->userdata('id');
    return $this->db->get_where('tbl_order', ['id_order' => $id, 'id_pelanggan' => $user])->row_array();
  }

  public function getProductByInvoice($id)
  {
    $user = $this->session->userdata('id');
    return $this->db->get_where('tbl_detail_order', ['id_order' => $id]);
    //return $this->db->get_where('tbl_detail_order', ['id_pelanggan' => $user, 'id_order' => $id]);
  }
  public function getProfile()
  {
    $id = $this->session->userdata('id');
    $this->db->where('id_pelanggan', $id);
    return $this->db->get('tbl_pelanggan');
  }

  function updateProfile($username, $email, $nama, $no, $alamat, $kab, $prov, $kodepos, $pwd, $idp)
  {
    $id = $this->session->userdata('id');
    $hasil = $this->db->query("UPDATE `tbl_pelanggan` SET `nama_pelanggan` = '$nama', `no_pelanggan`='$no', `alamat_pelanggan`='$alamat', `kode_pos_pelanggan`='$kodepos', `kabupaten`='$kab', `provinsi`='$prov', `password_pelanggan`='$pwd' WHERE `tbl_pelanggan`.`id_pelanggan` = '$id';");
    return $hasil;
  }
  public function update_data($where, $data, $table)
  {
    $this->db->where($where);
    $this->db->update($table, $data);
  }
}