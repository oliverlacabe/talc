<?php 

/**
* 
*/
class Registrar_model extends CI_Model
{
	function add_student($data){
		$this->db->insert('student', $data);
	}

	function get_students(){
		$this->db->order_by('lname');
		return $this->db->get('student')->result_array();
	}

	function get_designations(){
		$this->db->order_by('designation');
		return $this->db->get('designation')->result_array();
	}

	function get_sections(){
		$this->db->order_by('yearlevel', 'section');
		return $this->db->get('sections')->result_array();
	}

	function stud_section($id){
		return $this->db->query("SELECT yearlevel, section FROM sections
						  WHERE id IN(
						  	SELECT yr_and_section 
						  	FROM enrolment 
						  	WHERE id = (SELECT MAX(id) FROM enrolment WHERE stud_id = $id)
						  ) LIMIT 1
		")->row_array();
	}
}

 ?>