<?php 

class M_user extends CI_Model{

public function getOrder(){
        $id = $this->session->userdata('id');
        $this->db->where('status !=', 0);
        $this->db->where('id_pelanggan', $id);
        $this->db->order_by('id_order', 'desc');
        return $this->db->get('tbl_order');
    }
    public function getOrderByInvoice($id){
        $user = $this->session->userdata('id');
        return $this->db->get_where('tbl_order', ['id_order' => $id, 'id_pelanggan' => $user])->row_array();
    }

    public function getProductByInvoice($id){
        $user = $this->session->userdata('id');
        return $this->db->get_where('tbl_detail_order', ['id_order' => $id]);
        //return $this->db->get_where('tbl_detail_order', ['id_pelanggan' => $user, 'id_order' => $id]);
    }

}
