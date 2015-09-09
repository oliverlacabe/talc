<?php 
class Landing extends CI_Controller
{
	function index(){
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('templates/landing');
	}

	function login(){
		$user = $this->input->post('username');
		if ($user == 'registrar') {
			redirect('home/registrar');
		}
		else if($user == 'accounting'){
			redirect('home/accounting');
		}
		else if($user == 'teacher'){
			redirect('home/teacher');
		}
	}
}

 ?>