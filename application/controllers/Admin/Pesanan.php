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


    public function tampil_semua_pesanan_diproses()
    {
        $model = $this->M_Pesanan;
        $data = [
            "pesanan_diproses" => $model->get_tampil_semua_pesanan_diproses(),
        ];
        $this->load->view("Backend/Semua_Pesanan_Diproses", $data);
    }


    public function tampil_semua_pesanan_dikirim()
    {
        $model = $this->M_Pesanan;
        $data = [
            "pesanan_dikirim" => $model->get_tampil_semua_pesanan_dikirim(),
        ];
        $this->load->view("Backend/Semua_Pesanan_Dikirim", $data);
    }


    public function tampil_semua_pesanan_selesai()
    {
        $model = $this->M_Pesanan;
        $data = [
            "pesanan_selesai" => $model->get_tampil_semua_pesanan_selesai(),
        ];
        $this->load->view("Backend/Semua_Pesanan_Selesai", $data);
    }

    public function tampil_semua_pesanan_dibatalkan()
    {
        $model = $this->M_Pesanan;
        $data = [
            "pesanan_dibatalkan" => $model->get_tampil_semua_pesanan_dibatalkan(),
        ];
        $this->load->view("Backend/Semua_Pesanan_Dibatalkan", $data);
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
