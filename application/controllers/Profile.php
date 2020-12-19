<?php

class profile extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('M_user');
    $this->load->library('form_validation');
    $this->load->model('M_footer');
    $this->load->model('M_keranjang');
  }

  public function index()
  {
    $show = $this->M_footer;
    if ($this->session->userdata('status') != "login0") {
      redirect(base_url("login0"));
    } else {
      $data['dataprofile'] = $this->M_user->getProfile();
      $data['footer'] = $show->tampil_footer();
      $data['jumlah_keranjang'] = $this->M_keranjang->jumlah_data_keranjang();
      $this->load->view('Frontend/template/head1');
      $this->load->view('Frontend/template/navbar3', $data);
      $this->load->view('Frontend/editProfile', $data);
    }
  }
  public function updateprofile($id)
  {
    $idp = $this->input->post('id_pelanggan');
    $username = $this->input->post('username_pelanggan');
    $email = $this->input->post('email_pelanggan');
    $nama = $this->input->post('nama_pelanggan');
    $no = $this->input->post('no_pelanggan');
    $alamat = $this->input->post('alamat_pelanggan');
    $kab = $this->input->post('kabupaten');
    $prov = $this->input->post('provinsi');
    $kodepos = $this->input->post('kode_pos_pelanggan');
    $pwd = $this->input->post('password_pelanggan');
    $this->M_user->updateProfile($username, $email, $nama, $no, $alamat, $kab, $prov, $kodepos, $pwd, $idp);

    redirect('profile');
  }
}