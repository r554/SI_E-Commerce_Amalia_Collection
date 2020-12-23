<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pesanan_saya extends CI_Controller

{
    function __construct(){
		parent::__construct();
		$this->load->model('M_user');
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('M_footer');
        $this->load->model('M_keranjang');
    }

    public function index()
    {   
        $show = $this->M_footer;
        if($this->session->userdata('status') != "login0"){
            redirect(base_url("login0"));
            
          }else {
        $data['order'] = $this->M_user->getOrder();
        $data['footer'] = $show->tampil_footer();   
        $data['jumlah_keranjang'] = $this->M_keranjang->jumlah_data_keranjang();   
        $this->load->view('Frontend/template/head1');
        $this->load->view('Frontend/template/navbar3',$data);
        $this->load->view('Frontend/pesanan_saya', $data); }
    }

    public function detail_order($id){
        $show = $this->M_footer;
        $data['ord'] = $this->M_user->getOrderByInvoice($id);
        if(!$data['ord']){
            redirect(base_url() . 'pesanan_saya');
        }
        $data['footer'] = $show->tampil_footer();
        $data['product_order'] = $this->M_user->getProductByInvoice($id);
        $this->load->view('Frontend/template/head1');
        $this->load->view('Frontend/template/navbar3');
        $this->load->view('Frontend/detailPesanan', $data);
    }

    public function buktibayar($id){
        $show = $this->M_footer;
        $data['ord'] = $this->M_user->getOrderByInvoice($id);
        if(!$data['ord']){
            redirect(base_url() . 'pesanan_saya');
        }
        $data['footer'] = $show->tampil_footer();
        $data['product_order'] = $this->M_user->getProductByInvoice($id);
        $this->load->view('Frontend/template/head1');
        $this->load->view('Frontend/template/navbar3');
        $this->load->view('Frontend/buktipembayaran2', $data);
    }
    

    public function konfirmasibarangsampai($id)
    {    
        $data = array(
            'status' => "5"            
        );            
        $where = array(
            'id_order' => $id
        );    
        $this->M_user->update_data($where,$data,'tbl_order');
        redirect('pesanan_saya');
    }
}