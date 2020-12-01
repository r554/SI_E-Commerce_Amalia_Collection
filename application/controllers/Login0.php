<?php

class Login0 extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_login');
		$this->load->model('M_register');
	}

	function index()
	{
		$show = $this->M_register;
		$data = [
			"id_pelanggan" => $show->get_no_invoice()
		];
		// var_dump($data);
		// die;
		$this->load->view('Frontend/login', $data);
	}

	function aksi_login()
	{
		$USERNAME_PELANGGAN = $this->input->post('USERNAME_PELANGGAN');
		$PASSWORD_PELANGGAN = $this->input->post('PASSWORD_PELANGGAN');
		$where = array(
			'username_pelanggan' => $USERNAME_PELANGGAN,
			'password_pelanggan' => md5($PASSWORD_PELANGGAN)
		);
		$cek = $this->m_login->cek_login("tbl_pelanggan", $where)->num_rows();
		$data_pelanggan = $this->m_login->data_pelanggan("tbl_pelanggan", $where)->result();

		if ($cek > 0) {
			foreach ($data_pelanggan as $N) {
				$USERNAME_PELANGGAN = $N->username_pelanggan;
				$id = $N->id_pelanggan;
				$NAMA = $N->nama_pelanggan;
				$ALAMAT = $N->alamat_pelanggan;
				$nohp = $N->no_pelanggan;
				$kdPos = $N->kode_pos;
				$kab = $N->kabupaten;
				$prov = $N->provinsi;
			}

			$data_session = array(
				'username_pelanggan' => $USERNAME_PELANGGAN,
				'nama_pelanggan' => $row->NAMA_PELANGGAN,
				'id' => $id,
				'alamat' => $ALAMAT,
				'nama' => $NAMA,
				'no_hp' => $nohp,
				'kabupaten' => $kab,
				'kodePos' => $kdPos,
				'provinsi' => $prov,
				'status' => "login0"
			);

			$this->session->set_userdata($data_session);
			redirect(base_url("Homepage"));
		} else {
			$data_session = array(
				'logingagal' => '1'
			);

			$this->session->set_userdata($data_session);
			redirect(base_url("login0"));
		}
	}

	function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('Homepage'));
	}
}
