<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index(){
		$vars = [
			'title' => 'Beranda'
		];
		$this->load->view('landing', $vars);
		$this->load->view('layouts/footer', $vars);
	}

	public function harga(){
		$vars = [
			'title' => 'HARGA'
		];
		$this->load->view('layouts/header', $vars);
		$this->load->view('harga', $vars);
		$this->load->view('layouts/footer', $vars);
	}

	public function klien(){
		$vars = [
			'title' => 'CERITA KLIEN'
		];
		$this->load->view('layouts/header', $vars);
		$this->load->view('cerita-klien', $vars);
		$this->load->view('layouts/footer', $vars);
	}
}
