<?php
class Survey extends CI_Controller{
    function index(){
        
    }

    function create(){
        $vars = [
			'title' => 'BUAT SURVEYMU'
		];
		$this->load->view('layouts/header', $vars);
		$this->load->view('tambah-survey', $vars);
		$this->load->view('layouts/footer', $vars);
    }

    function success(){
        $vars = [
			'title' => 'SELAMAT SURVEY TERSIMPAN'
		];
		$this->load->view('confirm-survey', $vars);
    }

    function add(){
        $config['upload_path']      = './uploads/';  
        $config['allowed_types']    = 'doc|docx|pdf'; 
        $config['encrypt_name']    = TRUE;
        
        $this->load->library('upload', $config);
        if($this->upload->do_upload('document')){
            $file = $this->upload->data();
            $filename = $file['file_name'];
            $datas = [
                'wa' => $this->input->post('wa', TRUE),
                'judul' => $this->input->post('judul', TRUE),
                'jumlah' => $this->input->post('jumlah', TRUE),
                'kategori' => $this->input->post('kategori', TRUE),
                'document' => $filename
            ];

            $this->db->insert('survey', $datas);
            if($this->db->affected_rows() > 0){
                redirect('survey/success','refresh');
            }else{
                $this->session->set_flashdata('error', "Survey Gagal Di Buat");
                redirect($_SERVER['HTTP_REFERER']);
            }
        }
    }
}