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
        $id = $this->input->post('id_order');
        if ($model->save()) {
            $this->db->set('status', 2);
            $this->db->where('id_order', $id);
            $this->db->update('tbl_order');
            redirect(site_url('pesanan_saya'));
        }
    }    
}