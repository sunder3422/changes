<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration_col extends CI_Model
{
	 function reg()
	 {
	 $fname = $this->input->post('fullname');
	$gname= $this->input->post('gname');
	$username=$this->input->post('username');
	$passname=$this->input->post('passname');
	$course=$this->input->post('course');
	$fathername= $this->input->post('fathername');
	$email= $this->input->post('email');
	$phno=$this->input->post('phno');
	$add1=$this->input->post('add1');
	$add2=$this->input->post('add2');
	
	$qual_co=$this->input->post('qual_co');
	$uni= $this->input->post('uni');
	$per= $this->input->post('per');
	$board10=$this->input->post('board10');
	$totmarks10=$this->input->post('totmarks10');
	$maxmarks10=$this->input->post('maxmarks10');
	$yop10=$this->input->post('yop10');
	$school10=$this->input->post('school10');
	$stream=$this->input->post('str12');
	$board12=$this->input->post('board12');
	$totmarks12=$this->input->post('totmarks12');
	$maxmarks12=$this->input->post('maxmarks12');
	$yop12=$this->input->post('yop12');
	$school12=$this->input->post('school12');
	$stdid= 1;
	$profilepic = 1;
	$fulladd= $add1." ".$add2;
     $accid=2;
     $usertype= 'USER';
     $loginstatus=0;
   
     $qual= $this->input->post('qual');
     $clg_id= 12;
      
     // 1
     $sql="INSERT INTO 
      student_detail( stu_id,full_name,profilepic,gender,course,email,phone_no,father_name,address) 
        VALUES ('$stdid','$fname','x','$gname','$course','$email','$phno','$fathername','$fulladd')";
     $res = $this->db->query($sql);
          if($res == true)
          {
               $id_ = $this->db->insert_id();
                  if($qual == "HIGHSCHOOL")
                      {
                      $qid1= 10;
                      $stream= "";
                      $sql4= "INSERT INTO qualification_school(qid, stid, board, stream, totalmarks, maxmarks, yop, school_name) 
                      VALUES ('$qid1', '$id_', '$board10','$stream','$totmarks10','$maxmarks10','$yop10','$school10')";
                      $this->db->query($sql4);
                      }
                      
                  else if($qual == "INTERMEDIATE")
                      {
                      $qid1= 10;
                      $qid2= 12;
                      $stream1="";
                      $sql4= "INSERT INTO qualification_school(qid, stid, board, stream, totalmarks, maxmarks, yop, school_name) 
                      VALUES ('$qid1', '$id_' , '$board10','$stream1','$totmarks10','$maxmarks10','$yop10','$school10')";
         
                      $sql5= "INSERT INTO qualification_school(qid, stid, board, stream, totalmarks, maxmarks, yop, school_name) 
                      VALUES ('$qid2', '$id_' , '$board12','$stream','$totmarks12','$maxmarks12','$yop12','$school12')";
                      $this->db->query($sql4);
                      $this->db->query($sql5);
                      }
                  else if($qual== "GRADUATE")
                      {
                      $qid1= 10;
                      $qid2= 12;
                      $stream1="";
                      $sql4= "INSERT INTO qualification_school(qid, stid, board, stream, totalmarks, maxmarks, yop, school_name) 
                      VALUES ('$qid1', '$id_' , '$board10','$stream1','$totmarks10','$maxmarks10','$yop10','$school10')";
         
                      $sql5= "INSERT INTO qualification_school(qid, stid, board, stream, totalmarks, maxmarks, yop, school_name) 
                      VALUES ('$qid2', '$id_' '$board12','$stream','$totmarks12','$maxmarks12','$yop12','$school12')";
     
                      $sql6= "INSERT INTO qualification_clg(clg_id, stid, course, university, percentage) 
                      VALUES ('$clg_id','$id_' , '$qual_co','$uni','$per')";
                      $this->db->query($sql4);
                      $this->db->query($sql5);
                      $this->db->query($sql6);
                      } 

          $path_ = $this->upload_stud_pic($id_);
           $data = array(
          'profilepic' => $path_
            );
          $this->db->where('id', $id_);
          $this->db->update('student_detail', $data);
        }

     
     

    $sql3= "INSERT INTO login(usertype, stid, loginstatus, username, password) 
    VALUES ('$usertype','$id_','$loginstatus','$username','$passname')";


    $this->db->query($sql3);
  }

 function upload_stud_pic($id)
 {
        clearstatcache();
        $config = array(
            'upload_path' => './uploads/',
            'allowed_types' => 'jpg|png',
            'max_size' => 250,
            'file_name' => $id,
            'overwrite' => TRUE,
        );
        $file_element_name = 'picture';
        $this->load->library('upload', $config);

        if ($this->upload->do_upload($file_element_name)) 
        {
            $path_ji = $this->upload->data();
            $path_ = $path_ji['file_name'];
        } else {
            $path_ = 'x';
        }
        return $path_;

}
}

