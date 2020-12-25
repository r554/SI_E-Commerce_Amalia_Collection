<?php

class register extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_register');
        $this->load->helper('url');
        $this->load->library(array('form_validation', 'session'));
    }

    public function tambah_register()
    {
        $this->form_validation->set_rules('password', 'password', 'trim|required|min_length[3]|matches[password2]');
        $this->form_validation->set_rules('password2', 'password2', 'trim|required|min_length[3]|matches[password]');
        $this->form_validation->set_rules('email_pelanggan', 'email_pelanggan', 'trim|required|valid_email');

        if ($this->form_validation->run() == false) {
            $data['kd_pelanggan'] = $this->M_register->get_no_invoice();
            $this->load->view('Frontend/v_register', $data);
        } else {

            $username = $this->input->post('username_pelanggan'); // Ambil isi dari inputan username pada form 
            $user = $this->M_register->get_username_pelanggan($username); // Panggil fungsi get yang ada di M_register.php

            if (empty($user)) {
                $simpan = $this->M_register->save_register();
                $this->session->set_flashdata('message1', 'Berhasil disimpan');
                redirect(base_url("Login0"));
            } else {
                $this->session->set_flashdata('message', 'Username Sudah Terdaftar');
                $this->load->view('Frontend/v_register');
            }
        }
    }
}
