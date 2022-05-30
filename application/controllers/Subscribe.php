<?php
class Subscribe extends CI_Controller{
    function add(){
        if($this->input->post('email', TRUE) != NULL || $this->input->post('email', TRUE) != ''){
            $cek = $this->db->get_where('subscribe', ['email' => $this->input->post('email', TRUE)]);
            if($cek->num_rows() > 0){
                redirect($_SERVER['HTTP_REFERER'],'refresh');
            }else{
                $datas = [
                    'email' => $this->input->post('email', TRUE),
                    'status' => 1
                ];
        
                $this->db->insert('subscribe', $datas);
            }
        } 
        redirect($_SERVER['HTTP_REFERER'],'refresh');
    }
}