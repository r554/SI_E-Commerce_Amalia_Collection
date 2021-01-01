<?php

class Pengembalian_Barang extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Admin/M_Pengembalian_Barang');
        $this->load->library('form_validation');
    }

    // ================================== Fitur Refund Baru ==================================================================

    // Method Untuk Menampilkan Semua Refund Baru
    public function tampil_refund_baru()
    {
        $data = [
            "data_refund_baru" => $this->M_Pengembalian_Barang->get_refund_baru(),
            "data_refund_pengiriman" => $this->M_Pengembalian_Barang->get_refund_pengiriman(),
        ];
        // var_dump($data);
        // die;

        $this->load->view("Backend/Semua_Refund_Baru", $data);
    }

    // Method Untuk Menampilkan Detail Semua Refund Baru
    public function tampil_detail_refund_baru($id)
    {
        $id_order = $this->uri->segment('5');
        $data['data_detail_refund_baru'] = $this->M_Pengembalian_Barang->getById_refund_baru($id);
        $data['data_pemesanan'] = $this->M_Pengembalian_Barang->get_tampil_detail($id_order);
        // var_dump($data);
        // die;
        $this->load->view('Backend/Semua_Detail_Refund_Baru', $data);
    }

    // Method Untuk Menerima Refund
    public function terima_refund($id)
    {
        $status = 8;
        $this->db->set('status_refund', $status);
        $this->db->where('id_refund', $id);
        $this->db->update('tbl_refund');
        //$this->load->view('Backend/Semua_Detail_Refund_Baru');
        redirect('Admin/Pengembalian_Barang/tampil_refund_baru');
    }

    // Method Untuk Menerima Refund
    public function tolak_refund($id)
    {
        $status = 13;
        $this->db->set('status_refund', $status);
        $this->db->where('id_refund', $id);
        $this->db->update('tbl_refund');
        //$this->load->view('Backend/Semua_Detail_Refund_Baru');
        redirect('Admin/Pengembalian_Barang/tampil_refund_baru');
    }

    // ================================== Fitur Refund Baru ==================================================================




    // ================================= Fitur Refund Diproses ==================================================================
    // Method Untuk Menampilkan Semua Refund Baru
    public function tampil_refund_diproses()
    {
        $data = [
            "data_refund_diterima" => $this->M_Pengembalian_Barang->get_refund_diterima(),
            "data_refund_dikirim" => $this->M_Pengembalian_Barang->get_produk_refund_dikirim(),
        ];

        $this->load->view("Backend/Semua_Refund_Diproses", $data);
    }

    // Method Untuk Mengirim Resi Dari Admin
    public function kirim_resi_admin()
    {
        $id_refund = $this->input->post('id_refund');
        $no_resi = $this->input->post('nomor_resi');
        $id = 11;

        $this->db->set('nomor_resi_admin', $no_resi);
        $this->db->set('status_refund', $id);
        $this->db->where('id_refund', $id_refund);
        $this->db->update('tbl_refund');

        $this->session->set_flashdata('success', 'Berhasil');
        redirect('Admin/Pengembalian_Barang/tampil_refund_diproses');
    }

    // Method Untuk Menampilkan Detail Semua Refund Dikirim
    public function tampil_detail_refund_Diirim($id)
    {
        $id_order = $this->uri->segment('5');
        $data['data_detail_refund_baru'] = $this->M_Pengembalian_Barang->getById_refund_dikirim($id);
        $data['data_pemesanan'] = $this->M_Pengembalian_Barang->get_tampil_detail($id_order);
        // var_dump($data);
        // die;
        $this->load->view('Backend/Semua_Detail_Refund_Dikirim', $data);
    }

    // Method Untuk Menerima Refund
    public function terima_produk($id)
    {
        $status = 10;
        $this->db->set('status_refund', $status);
        $this->db->where('id_refund', $id);
        $this->db->update('tbl_refund');
        //$this->load->view('Backend/Semua_Detail_Refund_Baru');
        redirect('Admin/Pengembalian_Barang/tampil_refund_baru');
    }

    // Method Untuk Menampilkan Detail Refund Dikirim Dari Admin
    public function tampil_detail_refund_dikirim_admin($id)
    {
        $id_order = $this->uri->segment('5');
        $data['data_detail_refund_baru'] = $this->M_Pengembalian_Barang->getById_refund_dikirim($id);
        $data['data_pemesanan'] = $this->M_Pengembalian_Barang->get_tampil_detail($id_order);
        // var_dump($data);
        // die;
        $this->load->view('Backend/Semua_Detail_Refund_Dikirim_Admin', $data);
    }

    // Method Untuk Menampilkan Detail Refund Dikirim Dari Admin
    public function tampil_detail_refund_perlu_dikirim($id)
    {
        $id_order = $this->uri->segment('5');
        $data['data_detail_refund_baru'] = $this->M_Pengembalian_Barang->getById_refund_dikirim($id);
        $data['data_pemesanan'] = $this->M_Pengembalian_Barang->get_tampil_detail($id_order);
        // var_dump($data);
        // die;
        $this->load->view('Backend/Semua_Detail_Refund_Perlu_Dikirim', $data);
    }
    // =============================== Fitur Refund Diproses ===============================================


    // ================================= Fitur Refund Selesai ==================================================================
    // Method Untuk Menampilkan Semua Refund Baru
    public function tampil_refund_selesai()
    {
        $data = [
            "data_refund_selesai" => $this->M_Pengembalian_Barang->get_refund_selesai(),
        ];

        $this->load->view("Backend/Semua_Refund_Selesai", $data);
    }

    // Method Untuk Menampilkan Detail Refund Dikirim Dari Admin
    public function tampil_detail_refund_selesai($id)
    {
        $id_order = $this->uri->segment('5');
        $data['data_detail_refund_baru'] = $this->M_Pengembalian_Barang->getById_refund_selesai($id);
        $data['data_pemesanan'] = $this->M_Pengembalian_Barang->get_tampil_detail($id_order);
        // var_dump($data);
        // die;
        $this->load->view('Backend/Semua_Detail_Refund_Selesai', $data);
    }
    // ================================= Fitur Refund Selesai ==================================================================
}
