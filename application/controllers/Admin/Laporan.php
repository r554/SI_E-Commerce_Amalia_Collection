<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller

{
    function __construct(){
		parent::__construct();
		$this->load->model('m_laporan');
        $this->load->helper('url');
        $this->load->library('session');

    //if($this->session->userdata('status') != "login0"){
    //redirect(base_url("login0"));
  }
  function index()
     {
      $data['laporan'] = $this->m_laporan->show_all();      
      $this->load->view('Backend/laporan',$data);
      
     }
  function diproses()
     {
      $data['laporan'] = $this->m_laporan->diproses();      
      $this->load->view('Backend/laporanDiproses',$data);
      
     }    
  function penjualan()
     {
      $data['laporan'] = $this->m_laporan->penjualan();      
      $this->load->view('Backend/laporanPenjualan',$data);
      
     }
  function dibatalkan()
     {
      $data['laporan'] = $this->m_laporan->dibatalkan();      
      $this->load->view('Backend/laporanDibatalkan',$data);
      
     }    
  function produk()
    {
     $data['laporan'] = $this->m_laporan->show_all_product();      
     $this->load->view('Backend/laporanproduk',$data);
      
    }  

    
  }