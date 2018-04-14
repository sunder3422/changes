
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stu extends CI_Model
{
	 function studentreg()
	 {
	 	$reg_no= $this->input->post('reg_num');
	 	$sql= "SELECT * FROM student_detail WHERE id= '$reg_no' ";
	 	$query= $this->db->query($sql);
         return $query;


	 }


	}