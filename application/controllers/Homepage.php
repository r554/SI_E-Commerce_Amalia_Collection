<?php

class Homepage extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('m_data');
    $this->load->helper('url');
    $this->load->library('session');

    //if($this->session->userdata('status') != "login0"){
    //redirect(base_url("login0"));
  }

  function index()
  {
    $data['tbl_produk'] = $this->m_data->tampil_dataProduk()->result();
    $this->load->view('katalog', $data);
  }
  function detailProduk($id)
  {
    $data['detailProduk'] = $this->m_data->tpdetailProduk($id);
    $this->load->view('Frontend/detailProduk', $data);
  }
  public function slider()
  {
    $data['tbl_banner'] = $this->m_data->tampil_slider();
    //var_dump($data);
    //die;
    $this->load->view('Frontend/landing_page', $data);
  }
}