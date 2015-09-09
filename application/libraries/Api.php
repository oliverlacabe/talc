<?php 

/**
* 
*/
class Api
{
	protected $CI;

	//initialize the $CI variable
	function __construct()
	{
		$this->CI =& get_instance();
	}
	
	function head1(){
		$this->CI->load->model('registrar_model');
		$this->CI->load->view('templates/header');
		$this->CI->load->view('templates/navbar_registrar');
	}
	
	function head2(){
		$this->CI->load->view('templates/header');
		$this->CI->load->view('templates/navbar_accounting');
	}
	
	function head3(){
		$this->CI->load->view('templates/header');
		$this->CI->load->view('templates/navbar_teacher');
	}
	
	function head4(){
		$this->CI->load->view('templates/header');
		$this->CI->load->view('templates/navbar_exam');
	}

	function ys($yearlevel, $section){
		if ($yearlevel == 1) {
			$level = 'I-'.$section;
		}
		elseif ($yearlevel == 2) {
			$level = 'II-'.$section;
		}
		elseif ($yearlevel == 3) {
			$level = 'III-'.$section;
		}
		elseif ($yearlevel == 4) {
			$level = 'IV-'.$section;
		}
		elseif ($yearlevel == 5) {
			$level = 'V-'.$section;
		}
		elseif ($yearlevel == 6) {
			$level = 'VI-'.$section;
		}
		elseif ($yearlevel == 7) {
			$level = 'VII-'.$section;
		}
		elseif ($yearlevel == 8) {
			$level = 'VIII-'.$section;
		}
		elseif ($yearlevel == 9) {
			$level = 'IX-'.$section;
		}
		elseif ($yearlevel == 10) {
			$level = 'X-'.$section;
		}
		elseif ($yearlevel == 11) {
			$level = 'XI-'.$section;
		}
		elseif ($yearlevel == 12) {
			$level = 'XII-'.$section;
		}
		else{
			$level = '';
		}

		return $level;
	}
}

 ?>