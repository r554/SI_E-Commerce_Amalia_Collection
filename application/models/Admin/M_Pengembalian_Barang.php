<?php

class M_Pengembalian_Barang extends CI_model
{

    public function get_refund_baru()
    {
        $this->db->from('tbl_refund');
        $this->db->join('tbl_detail_refund', 'tbl_detail_refund.id_refund = tbl_refund.id_refund');
        $this->db->where('tbl_refund.status_refund', 7);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function get_refund_pengiriman()
    {
        $this->db->from('tbl_refund');
        $this->db->join('tbl_detail_refund', 'tbl_detail_refund.id_refund = tbl_refund.id_refund');
        $this->db->like('tbl_refund.status_refund', 8);
        $this->db->or_like('tbl_refund.status_refund', 9);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getById_refund_baru($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_refund');
        $this->db->join('tbl_detail_refund', 'tbl_detail_refund.id_refund = tbl_refund.id_refund');
        $this->db->where('tbl_refund.id_refund', $id);
        return $this->db->get()->result();
    }

    public function get_tampil_detail($id)
    {
        //$this->db->select('*');
        $this->db->from('tbl_order');
        $this->db->join('tbl_pelanggan', 'tbl_pelanggan.id_pelanggan = tbl_order.id_pelanggan');
        $this->db->join('tbl_detail_order', 'tbl_detail_order.id_order = tbl_order.id_order');
        $this->db->join('tbl_produk', 'tbl_produk.id_produk = tbl_detail_order.id_produk');
        $this->db->where('tbl_order.id_order', $id);

        $query = $this->db->get();
        return $query->result();
    }

    public function getById_refund_dikirim($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_refund');
        $this->db->join('tbl_detail_refund', 'tbl_detail_refund.id_refund = tbl_refund.id_refund');
        $this->db->where('tbl_refund.id_refund', $id);
        return $this->db->get()->result();
    }

    public function get_refund_diterima()
    {
        $this->db->from('tbl_refund');
        $this->db->join('tbl_detail_refund', 'tbl_detail_refund.id_refund = tbl_refund.id_refund');
        $this->db->where('tbl_refund.status_refund', 10);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function get_produk_refund_dikirim()
    {
        $this->db->from('tbl_refund');
        $this->db->join('tbl_detail_refund', 'tbl_detail_refund.id_refund = tbl_refund.id_refund');
        $this->db->where('tbl_refund.status_refund', 11);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function get_refund_selesai()
    {
        $this->db->from('tbl_refund');
        $this->db->join('tbl_detail_refund', 'tbl_detail_refund.id_refund = tbl_refund.id_refund');
        $this->db->where('tbl_refund.status_refund', 13);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getById_refund_selesai($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_refund');
        $this->db->join('tbl_detail_refund', 'tbl_detail_refund.id_refund = tbl_refund.id_refund');
        $this->db->where('tbl_refund.id_refund', $id);
        return $this->db->get()->result();
    }










    public function getById2($id)
    {
        return $this->db->get_where($this->_table, ["id_pelanggan" => $id])->row();
    }


    public function tpdetailCustomer($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_pelanggan');
        //$this->db->join('tbl_foto_produk', 'tbl_foto_produk.id_produk = tbl_produk.id_produk');
        // $this->db->join('tbl_kategori', 'tbl_kategori.id_kategori = tbl_produk.id_kategori');
        $this->db->where('tbl_pelanggan.id_pelanggan', $id);
        return $this->db->get()->result();
    }
}
