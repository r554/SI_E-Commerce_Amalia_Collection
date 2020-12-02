<?php

class Homepage extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('M_data');
    $this->load->model('M_data_produk');
    $this->load->helper('url', 'form');
    $this->load->library(array('form_validation', 'session'));
    $this->load->model('M_footer');

    //if($this->session->userdata('status') != "login0"){
    //redirect(base_url("login0"));
  }

  // function index()
  // {
  //   $data['tbl_banner'] = $this->m_data->tampil_slider();
  //   //var_dump($data);
  //   //die;
  //   $this->load->view('Frontend/landing_page', $data);

  // }


  function index()
  {
    // $data['tbl_produk'] = $this->m_data->tampil_dataProduk()->result();
    // $show = $this->M_footer;
    // $data =
    //   [
    //     "footer" => $show->tampil_footer(),
    //     "tbl_produk" => $this->m_data->tampil_dataProduk()->result(),
    //     "tbl_banner" => $this->m_data->tampil_slider(),

    //   ];
    $show = $this->M_footer;
    
    $this->load->database();
    $jumlah_data = $this->M_data->jumlah_data();
    $this->load->library('pagination');
    $config['base_url'] = base_url() . '/Homepage/index/';
    $config['total_rows'] = $jumlah_data;
    $config['per_page'] = 12;
    $from = $this->uri->segment(3);
    $this->pagination->initialize($config);
    // $data['data_produk'] = $this->M_data->data_homepage($config['per_page'], $from);
    $data = 
      [
        "footer" => $show->tampil_footer(),
        "data_produk" => $this->M_data->data_homepage($config['per_page'], $from),
        "foto_banner" => $this->M_data->tampil_slider(),
        "data_kategori" => $this->M_data->tampil_kategori(),
      ];


    $this->load->view('Frontend/template/head1');
    $this->load->view('Frontend/template/navbar3');
    $this->load->view('Frontend/homepage', $data);
  }





  function semua_produk()
  {

    // Ambil Data Keyword (Search)
    if ($this->input->post('submit')) {
      $data['keyword'] = $this->input->post('keyword'); //Mengambil Name Attribut Input
      $this->session->userdata('keyword', $data['keyword']); //Menyimpannya Kedalam Session
    } else {
      $data['keyword'] = $this->session->userdata('keyword');
    }

    $this->load->database();
    $jumlah_data = $this->M_data->jumlah_data();
    $this->load->library('pagination');
    $config['base_url'] = base_url() . '/Homepage/semua_produk/';
    // $config['total_rows'] = $jumlah_data;
    $this->db->like('nama_produk', $data['keyword']);
    $this->db->from('tbl_produk');
    $config['total_rows'] = $this->db->count_all_results();
    $config['per_page'] = 16;
    $from = $this->uri->segment(3);
    $this->pagination->initialize($config);
    $data['data_produk'] = $this->M_data->data($config['per_page'], $from, $data['keyword']);

    $this->load->view('Frontend/template/head1');
    $this->load->view('Frontend/template/navbar3');
    $this->load->view('Frontend/tampilan_data_katalog', $data);
  }


  function detailProduk($id)
  {
    $data['detailProduk'] = $this->m_data->tpdetailProduk($id);
    $this->load->view('Frontend/detailProduk', $data);
  }

  public function detail_product($id){
		$getProduct = $this->M_data_produk->getProductById($id);
		
			// $this->Products_model->updateViewer($slug);
			// $data['title'] = $getProduct['title'] . ' - ' . $this->config->item('app_name');
			// $data['css'] = 'detail';
			// $data['responsive'] = '';
			$data['product'] = $getProduct;
			$data['img'] = $this->M_data_produk->getImgProductById($id);
			$this->load->view('Frontend/template/head1');
			$this->load->view('Frontend/template/navbar3');
			$this->load->view('Frontend/detail_produk', $data);			
		
	}
  public function cari()
  {
    $keyword = $this->input->post('cari');
    $data['cari'] = $this->m_data->get_cari($keyword);
    // var_dump($data);
    // die;
    $this->load->view('Frontend/cari', $data);
  }


  // Method Kategori Hijab
  function kategori_hijab()
  {
    // Ambil Data Keyword Kategori
    if ($this->input->post('submit')) {
      $data['keyword'] = $this->input->post('keyword'); //Mengambil Name Attribut Input
      $this->session->userdata('keyword', $data['keyword']); //Menyimpannya Kedalam Session
    } else {
      $data['keyword'] = $this->session->userdata('keyword');
    }

    $this->load->database();
    $jumlah_data = $this->M_data->jumlah_data();
    $this->load->library('pagination');
    $config['base_url'] = base_url() . '/Homepage/semua_produk/';
    // $config['total_rows'] = $jumlah_data;
    $this->db->like('id_kategori', $data['keyword']);
    $this->db->from('tbl_produk');
    $config['total_rows'] = $this->db->count_all_results();
    $config['per_page'] = 16;
    $from = $this->uri->segment(3);
    $this->pagination->initialize($config);
    $data['data_produk'] = $this->M_data->data_kategori_hijab($config['per_page'], $from, $data['keyword']);

    $this->load->view('Frontend/template/head1');
    $this->load->view('Frontend/template/navbar3');
    $this->load->view('Frontend/tampilan_data_katalog', $data);
  }
}