<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Riwayat_pesanan extends CI_Controller

{
    function __construct(){
		parent::__construct();
		$this->load->model('M_user');
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('M_footer');
    }

    public function index()
    {   
        $show = $this->M_footer;
        if($this->session->userdata('status') != "login0"){
            redirect(base_url("login0"));
            
          }else {
        $data['order'] = $this->M_user->getOrderDone();
        $data['footer'] = $show->tampil_footer();  
        $this->load->view('Frontend/template/head1');
        $this->load->view('Frontend/template/navbar3');
        $this->load->view('Frontend/riwayat_pesanan', $data); }
    }

    public function detail_order($id){
        $data['ord'] = $this->M_user->getOrderByInvoice($id);
        if(!$data['ord']){
            redirect(base_url() . 'profile/transaction');
        }
        
        $data['product_order'] = $this->M_user->getProductByInvoice($id);
        $this->load->view('Frontend/template/head1');
        $this->load->view('Frontend/template/navbar3');
        $this->load->view('Frontend/detailPesanan', $data);
    }
}