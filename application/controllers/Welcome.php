<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {



	public function index()
	{
		 $this->load->view('header');

		$this->load->view('registration');
	
		
	}
	public function userdata()

	{
		$this->load->view('header');
		$this->load->view('userpage');

	}
	public function login()
	{
		$this->load->view('header');
		$this->load->view('login');
	}
			
	public function reg()
	{



		$this->load->model('registration_col');
	$this->registration_col->reg();
		
	}
	//interview questions
	function interview()
	{
		
				$this->load->model('stu','sun');
			$data['s']=$this->sun->studentreg();
			$this->load->view('interview',$data);
	/*	
        $this->load->model('interview_ques', 'inteer');
		$data['h']=$this->inteer->interview();
		$this->load->view('interview', $data);

		*/
		
		}

	//interviewstudent registration number
		
	public function head()
	{
		$this->load->view('header');
	}



	
	function authenticate(){
		$this->load->model('data', 'dt');
		$res = $this->dt->login();
		
		if($res == true)
		{
           if($this->session->userdata('utype') == 'ADMIN')
              {
           	   redirect('Welcome/admin');
              } 
           else {
               redirect('Welcome/userdata');
               }
		} 
		else {
			redirect('Welcome/login');
		}
	}
	
}


