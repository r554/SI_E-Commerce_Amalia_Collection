<?php

class Lupa_Password extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_login');
    }

    function index()
    {
        $this->_sendEmail();
        $this->load->view('Frontend/lupa_pass1');
        //siapkan token
        $token = base64_encode(random_bytes(32));
        $user_token = [
            'email' => $email,
            'token' => $token,
            'date_create' => time()
        ];

        $this->db->insert('user_token', $user_token); //digunakan untuk menambah data token
        $this->_sendEmail($token, 'verify');
    }


    private function _sendEmail()
    {
        $config = [
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_user' => 'indanahgroup@gmail.com',
            'smtp_pass' => 'indah12345',
            'smtp_port' => '465',
            'mailtype' => 'html',
            'charset' => 'utf-8',
            'newline' => "\r\n"
        ];

        $this->load->library('email', $config);

        $this->email->from('indanahgroup@gmail.com', 'Indanah Group');
        $this->email->to('indahuyun@gmail.com');
        $this->email->subject('Testing');
        $this->email->message('coba');


        // if ($type == 'verify') {
        //     $this->email->subject('Testing');
        //     $this->email->message('clik : <a href="' . base_url() . 'crud/verify?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '">activate</a>');
        // }

        if ($this->email->send()) {
            return true;
        } else {
            echo $this->email->print_debugger();
            die;
        }
    }

    // 	public function verify()
    // 	{
    // 		$email = $this->input->get('email');
    // 		$token = $this->input->get('token');

    // 		$user = $this->db->get_where('user', ['email', => $email])->row_array();

    // 		if ($user) {

    // 			$user_token = $this->db->get_where('user_token', ['token', => $token])->row_array();

    // 			if ($user_token) {
    // 				$this->db->set('password', $password);
    // 				$this->db->where('email', $email);
    // 				$this->db->update('user');

    // 				$this->db->delete('user_token', ['email' => $email]);

    // 			} else {
    // 				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="aler"> email tidak ada  </div>');
    // 				redirect('crud');
    // 			}


    // 		}else{
    // 			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="aler"> email tidak ada  </div>');
    // 			redirect('crud');	
    // 		}
    //     }
}