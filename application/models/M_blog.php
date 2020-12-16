<?php 

class M_blog extends CI_model
{

    private $_table = "tbl_blog";
    public $kd_blog;
    public $text_tentangkami;
    public $gbr_tentangkami;

 


    public function rules()
    {
        return [
            [
                 'field' => 'kd_blog',
                'label' => 'kd_blog',
                'rules' => 'required'
            ]
        ];
    }


    
    public function tampil_text_tentangkami()
    {
        $this->db->from('tbl_blog');
       
        $query = $this->db->get();
        return $query->result();
    }

    public function update_tentangkami()
	{
 
		$post = $this->input->post();
		$this->kd_blog = $post["kd_blog"];
        $this->text_tentangkami = $post["text_tentangkami"];
        $this->gbr_tentangkami = $post["gbr_tentangkami"];
		
		 if (!empty($_FILES["gbr_tentangkami"]["name"])) {
		 	$this->gbr_tentangkami = $this->do_upload_tentangkami();
		} else {
			  $this->gbr_tentangkami = $post["gbr_tentangkami"];
		}

		return $this->db->update($this->_table, $this, array('kd_blog' => $post['kd_blog']));
    }
    
 
    function do_upload_tentangkami()
	{
		// setting konfigurasi upload
		$config['upload_path'] = './assets/Gambar/blog'; 
		$config['allowed_types'] = 'gif|jpg|png';
		$config['file_name']            = 'item-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);
		// load library upload
		$this->load->library('upload', $config);
		// upload gambar 1
		$this->upload->do_upload('gbr_tentangkami');
		$result1 = $this->upload->data('file_name');
		return $result1;
	}
 
public function delete_blog($id)
	{
		return $this->db->delete('tbl_tutorial', array("id_tutorial" => $id));
	}


}