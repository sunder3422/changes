<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends CI_Model
{

	function login()
	{
		$this->load->library('session'); 
		$usr = $this->input->post('user');
		$pass = $this->input->post('pass');
		$utype= $this->input->post('usertype');

		$this->db->where('username', $usr);
		$this->db->where('password', $pass);
		$this->db->where('usertype', $utype);


        $query=$this->db->get('login');
       
        if($query->num_rows()!= 0)
        {
        	$this->session->set_userdata('user_', $usr);
        	$this->session->set_userdata('utype', $utype);
        	$i = true;
        }
        else{
        	$i= false;
        }

        return $i;
	}
}

