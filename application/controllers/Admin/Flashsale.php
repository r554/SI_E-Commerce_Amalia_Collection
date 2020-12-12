<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Flashsale extends CI_Controller

{
    function __construct(){
		parent::__construct();
		$this->load->model('m_data');
        $this->load->helper('url');
        $this->load->library('session');

    //if($this->session->userdata('status') != "login0"){
    //redirect(base_url("login0"));
  } 
  function index()
     {
      $data['tbl_promo'] = $this->m_data->tampil_dataPromo()->result();
      $data['tbl_produk'] = $this->m_data->tampil_dataProduk()->result();
      $this->load->view('Backend/Fsale',$data);
     }
  function produkflashsale()
     {
      $data['tbl_promo'] = $this->m_data->tampil_dataPromo()->result();
      $data['tbl_produk'] = $this->m_data->tampil_dataProduk()->result();
      $this->load->view('Backend/Fsale',$data);
     }

  function detailProduk($id)
      {
      $data['detailProduk'] = $this->m_data->tpdetailProduk($id);      
      $this->load->view('Backend/FsaleEdit', $data);
      }

   function tambah_aksiFS(){ //tambah promo
        //$ids= $$this->input->post('idp');
		$namaPromo = $this->input->post('nama_promo');
        $durasi = $this->input->post('durasi_promo');
        $status = $this->input->post('status_promo');
	
		$data = array(
			'nama_promo' => $namaPromo,
			'durasi_promo' => $durasi,
			'status_promo' => $status
      );
			/*$id_cek = $this->m_data->cek_data($ids, 'nama_promo', 'durasi_promo'); //untuk cek data

            if($id_cek > 0){
                $this->session->set_userdata('tambah_gagal', 'tambah');
                redirect('flashsale/produkflashsale');
            }else{*/
		    $this->m_data->input_data($data,'tbl_promo');
            $this->session->set_userdata('tambah_sukses', 'tambah');
            redirect('admin/flashsale/produkflashsale');
    }
    function updatestatus1($id)
    {    
        $data = array(
            'status_promo' => "1"            
        );            
        $where = array(
            'id_promo' => $id
        );    
        $this->m_data->update_data($where,$data,'tbl_promo');
        redirect('admin/flashsale/produkflashsale');
    }
    function updatestatus0($id)
    {    
        $data = array(
            'status_promo' => "0"            
        );            
        $where = array(
            'id_promo' => $id
        );    
        $this->m_data->update_data($where,$data,'tbl_promo');
        redirect('admin/flashsale/produkflashsale');
    }
    function updatestatus2($id)
    {    
        $data = array(
            'status_promo' => "1"            
        );            
        $where = array(
            'id_produk' => $id
        );    
        $this->m_data->update_data($where,$data,'tbl_produk');
        redirect('admin/flashsale/produkflashsale');
    }
    function updatestatus3($id)
    {    
        $data = array(
            'status_promo' => "0"            
        );            
        $where = array(
            'id_produk' => $id
        );    
        $this->m_data->update_data($where,$data,'tbl_produk');
        redirect('admin/flashsale/produkflashsale');
    }
    function updatehargaDiskon($idp){
        $hardis=$this->input->post('hargaDiskon');      
        $this->m_data->update_hargaDiskon($hardis,$idp);
  
        redirect('admin/flashsale/produkflashsale');
    }

    
  }   

  