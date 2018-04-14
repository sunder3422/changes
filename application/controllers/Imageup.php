
<?php

    class Imageup extends CI_Controller
    {
 
	
     
      public function upload() { 
         
          $config['upload_path']='./uploads/';
		$config['allowed_types']='gif|png|jpeg|jpg';
	$config['max_size']='100';
	$config['max_width']='1024';
	$config['max_height']='700';
		$this->upload->initialize($config);
		if(!$this->upload->do_upload('picture'))
		{
              $this->load->view('registration');
		}
		else
		{
			$this->load->view('userdata');
		}
	
	

      } 

    }