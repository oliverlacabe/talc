<?php 

/**
* 
*/
class Registrar extends CI_Controller
{

	function registration(){
		$this->api->head1();
		$this->load->view('registrar/registration');
	}
	
	function students(){
		$this->api->head1();
		$this->load->view('registrar/studentlist');
	}
	
	function employees(){
		$this->api->head1();
		$this->load->view('registrar/add_teacher');
	}

	function grades(){
		$this->api->head1();
		$this->load->view('registrar/teacherslist');
	}

	function classlist(){
		$this->api->head1();
		$this->load->view('registrar/classlist');
	}

	function gradesheet(){
		$this->api->head1();
		$this->load->view('registrar/gradesheet');
	}

	function add_student(){
		$id	      = $this->input->post('id');
		$lname    = $this->input->post('lastname');
		$fname    = $this->input->post('firstname');
		$mname    = $this->input->post('lastname');
		$gender   = $this->input->post('lastname');
		$dob 	  = $this->input->post('dob');
		$add 	  = $this->input->post('address');
		$contact1 = $this->input->post('contact1');
		$guardian = $this->input->post('guardian');
		$contact2 = $this->input->post('contact2');

		$data = array(
			'stud_id' 		=> $id,
			'lname' 		=> $lname,
			'fname' 		=> $fname,
			'mname' 		=> $mname,
			'gender' 		=> $gender,
			'dateofbirth' 	=> $dob,
			'address' 		=> $add,
			'contactno' 	=> $contact1,
			'guardian' 		=> $guardian,
			'guardianno' 	=> $contact2
		);

		$this->load->model('Registrar_model');
		$this->Registrar_model->add_student($data);

        $this->session->set_flashdata('message',
        '<div class="alert alert-success" style="margin:20px;">
            Student successfully added!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        redirect(base_url('registrar/registration'));
	}

}

 ?>