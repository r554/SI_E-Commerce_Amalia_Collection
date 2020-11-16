<?php

class data_customer extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Admin/M_data_customer');
        $this->load->library('form_validation');
    }


    public function save()
    {
        $model = $this->M_data_customer;

        if ($model->save()) {
            redirect(site_url('Admin/data_customer/tampil'));
        }
    }


    public function tampil()
    {
        $show = $this->M_data_customer;
        $data = [
            "customer" => $show->tampil_data(),
            //"invoice" => $show->get_no_invoice(),           
        ];

        $this->load->view("Backend/data_customer", $data);
    }


    public function tampil_detail($id)
    {

        $data['detailCustomer'] = $this->M_data_customer->tpdetailCustomer($id);
        $this->load->view('Backend/detail_data_customer', $data);
    }


    public function edit()
    {
        $model = $this->M_data_customer;
        $validation = $this->form_validation;
        $validation->set_rules($model->rules());


        if ($validation->run()) {
            $model->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect(site_url('Admin/data_customer/tampil'));
        }
    }
}