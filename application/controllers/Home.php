<?php 

/**
* 
*/
class Home extends CI_Controller
{
	function registrar(){
		$this->api->head1();
		$this->load->view('home/landing');
	}

	function accounting(){
		$this->api->head2();
		$this->load->view('home/landing');
	}

	function teacher(){
		$this->api->head3();
		$this->load->view('home/landing');
	}

	function logout(){
		redirect('landing/index');
	}
}

 ?>