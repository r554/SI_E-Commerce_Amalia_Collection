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

    // Function Untuk Membuat Auto Incremen id refund
    function id_refund()
    {
        $q = $this->db->query("SELECT MAX(RIGHT(id_refund,4)) AS kd_max FROM tbl_refund WHERE DATE(tanggal_refund)=CURDATE()");
        $kd = "";
        $i = "RFD";
        if ($q->num_rows() > 0) {
            foreach ($q->result() as $k) {
                $tmp = ((int) $k->kd_max) + 1;
                $kd = sprintf("%04s", $tmp);
            }
        } else {
            $kd = "0001";
        }
        date_default_timezone_set('Asia/Jakarta');
        return $i . date('dmy') . $kd;
    }

    public function get_data_order($id)
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

    public function get_data_detail_refund($id)
    {
        //$this->db->select('*');
        $this->db->from('tbl_detail_refund');
        //$this->db->join('tbl_pelanggan', 'tbl_pelanggan.id_pelanggan = tbl_order.id_pelanggan');
        //$this->db->join('tbl_detail_order', 'tbl_detail_order.id_order = tbl_order.id_order');
        //$this->db->join('tbl_produk', 'tbl_produk.id_produk = tbl_detail_order.id_produk');
        $this->db->where('tbl_detail_refund.id_refund', $id);

        $query = $this->db->get();
        return $query->result();
    }

    public function simpan_data_refund()
    {
        $data = array(
            'id_refund' => $this->input->post('id_refund'),
            'id_order' => $this->input->post('id_order'),
            'nama_penerima' => $this->input->post('nama_penerima'),
            'no_penerima' => $this->input->post('no_penerima'),
            'alamat_penerima' => $this->input->post('alamat_penerima'),
            'alasan_refund' => $this->input->post('keterangan_refund'),
            'tgl_order' => $this->input->post('tgl_order'),
            'status_refund' => $this->input->post('status_refund'),
            'id_pelanggan' => $this->input->post('id_pelanggan'),
        );

        return $this->db->insert('tbl_refund', $data);
    }

    public function simpan_data_produk_refund()
    {
        $data = array(
            'id_refund' => $this->input->post('id_refund'),
            'id_produk' => $this->input->post('id_produk'),
            'nama_produk' => $this->input->post('nama_produk'),
            'sub_qty' => $this->input->post('sub_qty'),
            'harga_final' => $this->input->post('harga_final'),
            'warna' => $this->input->post('warna'),
        );

        return $this->db->insert('tbl_detail_refund', $data);
    }

    public function get_data_refund()
    {
        //$this->db->select('*');
        $this->db->from('tbl_refund');
        //$this->db->join('tbl_pelanggan', 'tbl_pelanggan.id_pelanggan = tbl_order.id_pelanggan');
        $this->db->where('tbl_refund.id_refund');

        $query = $this->db->get();
        return $query->result();
    }
}
