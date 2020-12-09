<?php

class Pesanan extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Admin/M_Pesanan');
        $this->load->library('form_validation');
    }


    public function tampil_semua_pesanan()
    {
        $show = $this->M_Pesanan;
        $data = [
            "pesanan" => $show->tampil_semua(),
        ];
        $this->load->view("Backend/Semua_Pesanan", $data);
    }


    public function tampil_detail_pemesanan($id)
    {
        $show = $this->M_Pesanan;
        $data = [
            "pesanan" => $show->get_tampil_detail($id),
        ];
        $this->load->view("Backend/Semua_Pesanan_Detail", $data);
    }

    // Method Bagian Verifikasi Pembayaran =====================================================================================================
    public function tampil_semua_verifikasi_pembayaran()
    {
        $model = $this->M_Pesanan;
        $data = [
            "pesanan_verifikasi" => $model->get_tampil_semua_verifikasi_pembayaran(),
        ];
        $this->load->view("Backend/Semua_Pesanan_Diproses", $data);
    }

    public function tampil_detail_verifikasi_pembayaran($id)
    {
        $show = $this->M_Pesanan;
        $data = [
            "pesanan" => $show->get_tampil_detail_verifikasi_pembayaran($id),
            "bukti_pembayaran" => $show->get_bukti_pembayaran($id),
        ];

        $this->load->view("Backend/Semua_Detail_Verifikasi_Pembayaran", $data);
    }

    public function terima_pembayaran($id = null)
    {

        $id_order = $id;
        $id = '3';

        $this->db->set('status', $id);
        $this->db->where('id_order', $id_order);
        $this->db->update('tbl_order');

        redirect(site_url('Admin/Pesanan/tampil_semua_perlu_dikirim'));
    }

    public function tolak_pembayaran($id = null)
    {

        $status = '6';

        $this->db->set('status', $status);
        $this->db->where('id_order', $id);
        $this->db->update('tbl_order');

        redirect(site_url('Admin/Pesanan/tampil_semua_pesanan_dibatalkan'));
    }


    // Method Bagian Perlu Dikirim =====================================================================================================
    public function tampil_semua_perlu_dikirim()
    {
        $model = $this->M_Pesanan;
        $data = [
            "pesanan_perlu_dikirim" => $model->get_tampil_semua_perlu_dikirim(),
        ];

        $this->load->view("Backend/semua_pesanan_perlu_dikirim", $data);
    }

    public function tampil_detail_perlu_dikirim($id)
    {
        $show = $this->M_Pesanan;
        $data = [
            "pesanan" => $show->get_tampil_detail_perlu_dikirim($id),
        ];

        $this->load->view("Backend/Semua_Detail_Perlu_Dikirim", $data);
    }

    public function simpan_resi()
    {

        $id_order = $this->input->post('id_order');
        $nomor_resi = $this->input->post('nomor_resi');
        $status = '4';

        $this->db->set('nomor_resi', $nomor_resi);
        $this->db->set('status', $status);
        $this->db->where('id_order', $id_order);
        $this->db->update('tbl_order');

        redirect(site_url('Admin/Pesanan/tampil_semua_pesanan_dikirim'));
    }


    // Method Pesanan Dikirim =====================================================================================================
    public function tampil_semua_pesanan_dikirim()
    {
        $model = $this->M_Pesanan;
        $data = [
            "pesanan_dikirim" => $model->get_tampil_semua_pesanan_dikirim(),
        ];
        $this->load->view("Backend/Semua_Pesanan_Dikirim", $data);
    }

    public function tampil_detail_semua_pesanan_dikirim($id)
    {
        $show = $this->M_Pesanan;
        $data = [
            "pesanan" => $show->get_tampil_detail_pesanan_dikirim($id),
        ];

        $this->load->view("Backend/Semua_Detail_Pesanan_Dikirim", $data);
    }


    // Method Pesanan Selesai =====================================================================================================
    public function tampil_semua_pesanan_selesai()
    {
        $model = $this->M_Pesanan;
        $data = [
            "pesanan_selesai" => $model->get_tampil_semua_pesanan_selesai(),
        ];
        $this->load->view("Backend/Semua_Pesanan_Selesai", $data);
    }

    public function tampil_detail_pesanan_selesai($id)
    {
        $show = $this->M_Pesanan;
        $data = [
            "pesanan" => $show->get_tampil_detail_pesanan_selesai($id),
        ];

        $this->load->view("Backend/Semua_Detail_Pesanan_Selesai", $data);
    }

    // Method Pesanan Dibatalkan =====================================================================================================
    public function tampil_semua_pesanan_dibatalkan()
    {
        $model = $this->M_Pesanan;
        $data = [
            "pesanan_dibatalkan" => $model->get_tampil_semua_pesanan_dibatalkan(),
        ];
        $this->load->view("Backend/Semua_Pesanan_Dibatalkan", $data);
    }

    public function tampil_detail_pesanan_dibatalkan($id)
    {
        $show = $this->M_Pesanan;
        $data = [
            "pesanan" => $show->get_tampil_detail_pesanan_dibatalkan($id),
        ];

        $this->load->view("Backend/Semua_Detail_Pesanan_Dibatalkan", $data);
    }













































    public function tampil()
    {
        $show = $this->MP;

        $data = [
            "user" => $show->tampil_data()
        ];

        $this->load->view("hello", $data);
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->MP->delete($id)) {
            redirect(site_url('crud/tampil'));
        }
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('welcome');

        $model = $this->MP;
        $validation = $this->form_validation;
        $validation->set_rules($model->rules());


        if ($validation->run()) {
            $model->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect(site_url('crud/tampil'));
        }

        $data["data"] = $model->getById($id);

        $this->load->view("hello_edit", $data);
    }
}
