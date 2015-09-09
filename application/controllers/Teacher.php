<?php 

/**
* 
*/
class Teacher extends CI_Controller
{
	
	function classlist(){
		$this->api->head3();
		$this->load->view('teacher/classlist');
	}

	function gradesheet(){
		$this->api->head3();
		$this->load->view('teacher/gradesheet');
	}
}

 ?>