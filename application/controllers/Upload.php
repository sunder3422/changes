
<?php
  
   class Upload extends CI_Controller {
	
      public function __construct() { 
         parent::__construct(); 
         $this->load->helper(array('form', 'url')); 
      }
		
      public function index() { 
         $this->load->view('upload_form', array('error' => ' ' )); 
      } 
		
      public function do_upload() { 
         $config['upload_path']='./uploads/';
$config['allowed_types']='gif|png|jpeg|jpg';
$config['max_size']='100';
$config['max_width']='1024';
$config['max_height']='700';
$this->upload->initialize($config);
$this->upload->do_upload('userfile');
      } 
   } 
?>