<?php 

/**
* 
*/
class Exam extends CI_Controller
{
	function landing(){
		$this->api->head4();
		$this->load->view('exam/home');

	}
}


 ?>