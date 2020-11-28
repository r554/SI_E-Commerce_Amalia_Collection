<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pesanan_saya extends CI_Controller

{
    function __construct(){
		parent::__construct();
		$this->load->model('M_user');
        $this->load->helper('url');
        $this->load->library('session');
    }

    public function index()
    {   
        if($this->session->userdata('status') != "login0"){
            redirect(base_url("login0"));
            
          }else {
        $data['order'] = $this->M_user->getOrder();      
        $this->load->view('Frontend/template/head1');
        $this->load->view('Frontend/template/navbar3');
        $this->load->view('Frontend/pesanan_saya', $data); }
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