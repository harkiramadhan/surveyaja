<?php
class Subscribe extends CI_Controller{
    function add(){
        if($this->input->post('email', TRUE) != NULL || $this->input->post('email', TRUE) != ''){
            $datas = [
                'email' => $this->input->post('email', TRUE),
                'status' => 1
            ];
    
            $this->db->insert('subscribe', $datas);
        } 
        redirect($_SERVER['HTTP_REFERER'],'refresh');
    }
}