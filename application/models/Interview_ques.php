
<?php
class Interview_ques extends CI_Model
{
	function __construct()  
          {  
             // Call the Model constructor  
             parent::__construct();  
          }  
function interview()
{
	
	$sql= "SELECT *FROM quesid WHERE course = 'bca'";
	$sql1= "SELECT *FROM quesid WHERE course = 'bba'";

//$sql= "SELECT *FROM quesid WHERE course= 'bca'";
	
$query= $this->db->query($sql);
return $query;



}
}


 