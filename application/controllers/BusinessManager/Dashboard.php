<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$check = $this->session->userdata('type');
		if($check == 'BusinessManager'){
			$this->load->view('BusinessManager/dashboard');
		}else if($check == 'Assistant'){
			$this->load->view('Assistant/dashboard');
		}else if($check == 'Supervisor'){
			$this->load->view('Supervisor/dashboard');
		}else{
			header('Location: ../login');
		}
		
	}
    public function addUser(){
		$this->load->view('BusinessManager/php/userAdd2');
	}
}
