<?php 

class Login0 extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_login');
	}

	function index(){
		$this->load->view('v_login2');
	}

	function aksi_login(){
		$USERNAME_PELANGGAN = $this->input->post('USERNAME_PELANGGAN');
		$PASSWORD_PELANGGAN = $this->input->post('PASSWORD_PELANGGAN');
		$where = array(
			'username_pelanggan' => $USERNAME_PELANGGAN,
			'password_pelanggan' => md5($PASSWORD_PELANGGAN)
			);
		$cek = $this->m_login->cek_login("tbl_pelanggan",$where)->num_rows();
		$data_pelanggan = $this->m_login->data_pelanggan("tbl_pelanggan", $where)->result();

		if($cek > 0){
			foreach ($data_pelanggan as $N){
				$USERNAME_PELANGGAN= $N->username_pelanggan;
				$NAMA_PELANGGAN= $N->nama_pelanggan;
				
			}

			$data_session = array(
				'username_pelanggan' => $USERNAME_PELANGGAN,
				'nama_pelanggan' => $row->NAMA_PELANGGAN,
				'id' => $id,			
				'ALAMAT' => $ALAMAT_PELANGGAN,
				'no_hp'=> $NO_PELANGGAN,
				'status' => "login0"
				);

			$this->session->set_userdata($data_session);
			redirect(base_url("homepage"));		
			
		}else{
			$data_session = array(
			'logingagal' => '1'
			);

			$this->session->set_userdata($data_session);
			redirect(base_url("login0"));
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login0'));
	}
}