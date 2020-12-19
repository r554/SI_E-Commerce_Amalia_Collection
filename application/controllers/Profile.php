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

    $this->session->set_flashdata('edit', 'Berhasil disimpan');
    redirect('profile');
  }


  //untuk mengecek data password lama dengan database yg sudah ada
  function ubah_password()
  {
    $this->form_validation->set_rules('password', 'password', 'trim|required|min_length[3]');
    // $this->form_validation->set_rules('password', 'password', 'trim|required|min_length[3]|matches[password1]');
    // $this->form_validation->set_rules('password1', 'password1', 'trim|required|min_length[3]|matches[password]');
    if ($this->form_validation->run() == false) {
      $this->load->view('Frontend/template/head1');
      $this->load->view('Frontend/template/navbar3');
      $this->load->view('Frontend/ubah_pass1');
    } else {
      $password = md5($this->input->post('password'));

      $user = $this->db->get_where('tbl_pelanggan', ['password_pelanggan' => $password])->row_array();
      if ($user) {
        redirect(base_url("Profile/ubah_password_baru"));
      } else {
        $this->session->set_flashdata('message', '<div>Password Anda Tidak Cocok </div>');
        $this->load->view('Frontend/template/head1');
        $this->load->view('Frontend/template/navbar3');
        $this->load->view('Frontend/ubah_pass1');
      }
    }
  }

  function ubah_password_baru()
  {

    $this->form_validation->set_rules('password', 'password', 'trim|required|min_length[3]|matches[password1]');
    $this->form_validation->set_rules('password1', 'password1', 'trim|required|min_length[3]|matches[password]');
    if ($this->form_validation->run() == false) {
      $this->load->view('Frontend/template/head1');
      $this->load->view('Frontend/template/navbar3');
      $this->load->view('Frontend/ubah_pass2');
    } else {
      echo "kk";
    }
  }
}