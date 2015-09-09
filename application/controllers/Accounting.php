<?php 

/**
* 
*/
class Accounting extends CI_Controller
{
	
	function cashier(){
		$this->api->head2();
		$this->load->view('accounting/cashier');
	}

	function financialrecords(){
		$this->api->head2();
		$this->load->view('accounting/financialrecord');
	}

	function fees(){
		$this->api->head2();
		$this->load->view('accounting/fees');
	}

	function payment(){
		$this->api->head2();
		$this->load->view('accounting/payment');
	}
}

 ?>