<?php

class bukti_pembayaran extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_bukti_pembayaran');
        $this->load->library('form_validation');
    }


    public function save()
    {
        $model = $this->M_bukti_pembayaran;

        if ($model->save()) {
            redirect(site_url('pesanan_saya'));
        }
    }
}