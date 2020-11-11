<?php

class M_Pesanan extends CI_model
{
    private $_table = "tbl_order";

    public $id_order;
    public $id_pelanggan;

    public function rules()
    {
        return [
            [
                'field' => 'nama_postingan',
                'label' => 'nama_postingan',
                'rules' => 'required'
            ]

        ];
    }


    public function tampil_semua()
    {
        $this->db->from('tbl_order');
        $this->db->join('tbl_pelanggan', 'tbl_pelanggan.id_pelanggan = tbl_order.id_pelanggan');

        $query = $this->db->get();
        return $query->result_array();
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


    public function get_tampil_semua_pesanan_diproses()
    {
        $id = "diproses";
        $this->db->from('tbl_order');
        $this->db->join('tbl_pelanggan', 'tbl_pelanggan.id_pelanggan = tbl_order.id_pelanggan');
        $this->db->where('tbl_order.status', $id);
        $query = $this->db->get();
        return $query->result_array();
    }


    public function get_tampil_semua_pesanan_dikirim()
    {
        $id = "dikirim";
        $this->db->from('tbl_order');
        $this->db->join('tbl_pelanggan', 'tbl_pelanggan.id_pelanggan = tbl_order.id_pelanggan');
        $this->db->where('tbl_order.status', $id);
        $query = $this->db->get();
        return $query->result_array();
    }


    public function get_tampil_semua_pesanan_selesai()
    {
        $id = "selesai";
        $this->db->from('tbl_order');
        $this->db->join('tbl_pelanggan', 'tbl_pelanggan.id_pelanggan = tbl_order.id_pelanggan');
        $this->db->where('tbl_order.status', $id);
        $query = $this->db->get();
        return $query->result_array();
    }


    public function get_tampil_semua_pesanan_dibatalkan()
    {
        $id = "dibatalkan";
        $this->db->from('tbl_order');
        $this->db->join('tbl_pelanggan', 'tbl_pelanggan.id_pelanggan = tbl_order.id_pelanggan');
        $this->db->where('tbl_order.status', $id);
        $query = $this->db->get();
        return $query->result_array();
    }























    public function tampil_sum()
    {
        $this->db->select_sum('jumlah');
        $query = $this->db->get('tbl_keranjang'); // Produces: SELECT SUM(age) as age FROM members
        return $query->result_array();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_kategori = $post["id_kategori"];
        $this->nama_kategori = $post["nama_kategori"];


        return $this->db->insert($this->_table, $this);
    }

    public function tampil_data()
    {
        $query = $this->db->get('tbl_order');
        return $query->result_array();
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_kategori" => $id));
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_kategori" => $id])->row();
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_kategori = $post["id_kategori"];
        $this->nama_kategori = $post["nama_kategori"];

        return $this->db->update($this->_table, $this, array('id_kategori' => $post['id_kategori']));
    }
}
