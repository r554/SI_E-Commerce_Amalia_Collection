<?php

class M_bukti_pembayaran extends CI_model
{
    private $_table = "tbl_bukti_pembayaran";

    public $id_order;
    public $foto_bukti;

    public function rules()
    {
        return [
            [
                'field' => 'id_order',
                'label' => 'id_order',
                'rules' => 'required'
            ]

        ];
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_order = $post["id_order"];
        $this->foto_bukti = $this->do_upload();
        
        return $this->db->insert($this->_table, $this);
    }


    function do_upload()
    {
        // setting konfigurasi upload
        $config['upload_path'] = './assets/Gambar/foto_bukti_pembayaran';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['file_name']            = 'item-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);
        // load library upload
        $this->load->library('upload', $config);
        // upload gambar 1
        $this->upload->do_upload('foto_bukti');
        $result1 = $this->upload->data('file_name');
        return $result1;
    }
}