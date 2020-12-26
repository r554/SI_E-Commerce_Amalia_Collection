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

    // Model Bagian Pesanan Baru =====================================================================================================
    public function tampil_semua()
    {
        $pesanan_baru = '1';
        $this->db->from('tbl_order');
        $this->db->join('tbl_pelanggan', 'tbl_pelanggan.id_pelanggan = tbl_order.id_pelanggan');
        $this->db->where('tbl_order.status', $pesanan_baru);

        $query = $this->db->get();
        return $query->result_array();
    }

    public function count_tampil_semua()
    {
        $pesanan_baru = '1';
        $this->db->from('tbl_order');
        $this->db->join('tbl_pelanggan', 'tbl_pelanggan.id_pelanggan = tbl_order.id_pelanggan');
        $this->db->where('tbl_order.status', $pesanan_baru);

        $query = $this->db->get();
        return $query->num_rows();
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

    // Model Bagian Verifikasi Pembayaran =====================================================================================================
    public function get_tampil_semua_verifikasi_pembayaran()
    {
        $id = "2";
        $this->db->from('tbl_order');
        $this->db->join('tbl_pelanggan', 'tbl_pelanggan.id_pelanggan = tbl_order.id_pelanggan');
        $this->db->where('tbl_order.status', $id);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function count_verifikasi_pembayaran()
    {
        $id = "2";
        $this->db->from('tbl_order');
        $this->db->join('tbl_pelanggan', 'tbl_pelanggan.id_pelanggan = tbl_order.id_pelanggan');
        $this->db->where('tbl_order.status', $id);
        $query = $this->db->get();

        return $query->num_rows();
    }

    public function get_tampil_detail_Verifikasi_pembayaran($id)
    {
        //$this->db->select('*');
        $this->db->from('tbl_order');
        $this->db->join('tbl_pelanggan', 'tbl_pelanggan.id_pelanggan = tbl_order.id_pelanggan');
        $this->db->join('tbl_detail_order', 'tbl_detail_order.id_order = tbl_order.id_order');
        $this->db->join('tbl_produk', 'tbl_produk.id_produk = tbl_detail_order.id_produk');
        $this->db->join('tbl_attribut', 'tbl_attribut.id_attribut = tbl_detail_order.id_attribut');
        $this->db->where('tbl_order.id_order', $id);

        $query = $this->db->get();
        return $query->result();
    }

    // Function Untuk Mengurangi stok
    public function update_stock($table, $data, $where)
    {
        $this->db->where($where)
            ->update($table, $data);
        return true;
    }

    public function get_bukti_pembayaran($id)
    {
        //  $this->db->select('*');
        $this->db->from('tbl_bukti_pembayaran');
        $this->db->where('id_order', $id);

        $query = $this->db->get();
        return $query->result();
    }

    // Model Bagian Perlu Dikirim =====================================================================================================
    public function get_tampil_semua_perlu_dikirim()
    {
        $id = "3";
        $this->db->from('tbl_order');
        $this->db->join('tbl_pelanggan', 'tbl_pelanggan.id_pelanggan = tbl_order.id_pelanggan');
        $this->db->where('tbl_order.status', $id);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function count_perlu_dikirim()
    {
        $id = "3";
        $this->db->from('tbl_order');
        $this->db->join('tbl_pelanggan', 'tbl_pelanggan.id_pelanggan = tbl_order.id_pelanggan');
        $this->db->where('tbl_order.status', $id);
        $query = $this->db->get();

        return $query->num_rows();
    }

    public function get_tampil_detail_perlu_dikirim($id)
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


    // Model Bagain Pesanan dikirim =====================================================================================================
    public function get_tampil_semua_pesanan_dikirim()
    {
        $id = "4";
        $this->db->from('tbl_order');
        $this->db->join('tbl_pelanggan', 'tbl_pelanggan.id_pelanggan = tbl_order.id_pelanggan');
        $this->db->where('tbl_order.status', $id);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function count_pesanan_dikirim()
    {
        $id = "4";
        $this->db->from('tbl_order');
        $this->db->join('tbl_pelanggan', 'tbl_pelanggan.id_pelanggan = tbl_order.id_pelanggan');
        $this->db->where('tbl_order.status', $id);
        $query = $this->db->get();

        return $query->num_rows();
    }

    public function get_tampil_detail_pesanan_dikirim($id)
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

    // Model Bagain Pesanan selesai ======================================================================================
    public function get_tampil_semua_pesanan_selesai()
    {
        $id = "5";
        $this->db->from('tbl_order');
        $this->db->join('tbl_pelanggan', 'tbl_pelanggan.id_pelanggan = tbl_order.id_pelanggan');
        $this->db->where('tbl_order.status', $id);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function count_pesanan_selesai()
    {
        $id = "5";
        $this->db->from('tbl_order');
        $this->db->join('tbl_pelanggan', 'tbl_pelanggan.id_pelanggan = tbl_order.id_pelanggan');
        $this->db->where('tbl_order.status', $id);
        $query = $this->db->get();

        return $query->num_rows();
    }

    public function get_tampil_detail_pesanan_selesai($id)
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

    // Model Bagain Pesanan dibatalkan ======================================================================================
    public function get_tampil_semua_pesanan_dibatalkan()
    {
        $id = "6";
        $this->db->from('tbl_order');
        $this->db->join('tbl_pelanggan', 'tbl_pelanggan.id_pelanggan = tbl_order.id_pelanggan');
        $this->db->where('tbl_order.status', $id);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function count_pesanan_dibatalkan()
    {
        $id = "6";
        $this->db->from('tbl_order');
        $this->db->join('tbl_pelanggan', 'tbl_pelanggan.id_pelanggan = tbl_order.id_pelanggan');
        $this->db->where('tbl_order.status', $id);
        $query = $this->db->get();

        return $query->num_rows();
    }

    public function get_tampil_detail_pesanan_dibatalkan($id)
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
