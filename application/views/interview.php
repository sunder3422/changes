

<html>
   <head><title> INTERVIW TABLE</title>
   	<meta charset = "utf-8"> 
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css">
<style>

#regs div {
margin-bottom:5px;
}
#profile{border:1px solid red;}
#profile div{border:1px solid green;}
#alldetail div{padding:10px;}
.row{padding:3px;}
.ques{
	background-color:rgb(30,45,68);
	color:red;
	margin-top: 4px;
	text-transform: uppercase;
}
input[type=submit]
{
  text-transform: uppercase;
}
</style>
   </head>

  <body>
       <h1 style="background-color: red;text-align:center;padding:20px;">INTERVIEW</h1>
       
         
        <form action="<?php echo site_url('welcome/interview')?>" method="post">
          	<div class="row" id="regs" style="margin:30px auto;width:50%;">
          		<div class="col-sm-4" style="padding:3px;text-align:center;">REGISTRATION NUMBER</div>
          		<div class="col-sm-4"><input type="text"  name="reg_num" class="form-control"></div>
          		<div class="col-sm-2"><input type="submit"  name="sub" class="form-control btn-primary" value="submit"></div>
          	</div>
         


 <?php 
foreach ($s->result() as $rowm)  
         {  
            ?>

          <div class="row" id="profile" style="margin:50px auto;width:60%;">
             <div class="col-sm-12" id="alldetail">
                   
                 <div class="row">
          	       
          	      
          	       <div class="col-sm-6">

          	   <img src="<?php echo base_url(); ?>assets/profilpic.jpg" style="width:100%;height:100%;">
          	   </div>

          	   <div class="col-sm-6">
          	   	<div class="row">
          	       <div class="col-sm-4">REG-NO:</div>
          	       <div class="col-sm-8"><?php echo $rowm->id;?></div>
          	   </div>
          	   	<div class="row">
          	       <div class="col-sm-4">name:</div>
          	       <div class="col-sm-8"><?php echo $rowm->full_name;?></div>
          	   </div>
          	  
             	  <div class="row">
          	       <div class="col-sm-4">fathers name:</div>
          	       <div class="col-sm-8"><?php echo $rowm->father_name;?></div>
          	   </div>
          	  
             	  <div class="row">
          	       <div class="col-sm-4">course:</div>
          	       <div class="col-sm-8"><?php echo $rowm->course;?></div>
          	   </div>
          	   
             	  <div class="row">
          	       <div class="col-sm-4">EMAIL:</div>
          	       <div class="col-sm-8"><?php echo $rowm->email;?></div>
          	   </div>
          	</div>
          
          	       
          	
    </div>        	  


          	</div>
          </div>
        <?php
      }?>
     

<?php
   foreach ($s->result() as $row)
   {
    ?>
      <div id="line" style="width:100%;background-color: red;padding:1px;">
      </div>


<div id="interview_ques" style="width:80%; margin:50px auto;border:1px solid red;text-align:center;">
      
      <div class="row" style="margin:0px auto;width:100%;">
      	     <div class="col-sm-12">
      	     	 <div class="row">
                 <div class="col-sm-12" style="border:1px solid green"><h3>INTERVIEW QUESTIONS</h3></div>
                 </div>
                 
         
                 <div class="row ques" class="ques">
                  <div class="col-sm-2">1</div>
                  <div class="col-sm-3"><?php echo $row->ques1;?></div>
                  <div class="col-sm-7">
                  	  <div class="row">
                  	<div class="col-sm-3"><input type="radio" value="good">good</div>
                  	<div class="col-sm-3"><input type="radio" value="good">average </div>
                  	<div class="col-sm-3"><input type="radio" value="good">poor</div>
                  	<div class="col-sm-3"><input type="text"  class="form-control"></div>
                  </div>
                   <div class="row">
                     <div class="col-sm-12""><textarea style="width:100%;"> </textarea>
                     </div>
                   </div>
                  </div>
             </div>

             <div class="row ques" style="background-color:rgb(30,45,68)">
                  <div class="col-sm-2">2</div>
                  <div class="col-sm-3"><?php echo $row->ques2;?></div>
                  <div class="col-sm-7">
                  	  <div class="row">
                  	<div class="col-sm-3"><input type="radio" value="good">good</div>
                  	<div class="col-sm-3"><input type="radio" value="good">average </div>
                  	<div class="col-sm-3"><input type="radio" value="good">poor</div>
                  	<div class="col-sm-3"><input type="text" class="form-control"></div>
                  </div>
                   <div class="row">
                     <div class="col-sm-12""><textarea style="width:100%;"> </textarea>
                     </div>
                   </div>
                  </div>
             </div>
             <div class="row ques">
                  <div class="col-sm-2">3</div>
                  <div class="col-sm-3"><?php echo $row->ques3;?></div>
                  <div class="col-sm-7">
                  	  <div class="row">
                  	<div class="col-sm-3"><input type="radio" value="good">good</div>
                  	<div class="col-sm-3"><input type="radio" value="good">average </div>
                  	<div class="col-sm-3"><input type="radio" value="good">poor</div>
                  	<div class="col-sm-3"><input type="text" class="form-control"></div>
                  </div>
                   <div class="row">
                     <div class="col-sm-12""><textarea style="width:100%;"> </textarea>
                     </div>
                   </div>
                  </div>
             </div>
             <div class="row ques">
                  <div class="col-sm-2">4</div>
                  <div class="col-sm-3"><?php echo $row->ques4;?></div>
                  <div class="col-sm-7">
                  	  <div class="row">
                  	<div class="col-sm-3"><input type="radio" value="good">good</div>
                  	<div class="col-sm-3"><input type="radio" value="good">average </div>
                  	<div class="col-sm-3"><input type="radio" value="good">poor</div>
                  	<div class="col-sm-3"><input type="text" class="form-control"></div>
                  </div>
                   <div class="row">
                     <div class="col-sm-12""><textarea style="width:100%;"> </textarea>
                     </div>
                   </div>
                  </div>
             </div>
             <div class="row ques">
                  <div class="col-sm-2">5</div>
                  <div class="col-sm-3"><?php echo $row->ques5;?></div>
                  <div class="col-sm-7">
                  	  <div class="row">
                  	<div class="col-sm-3"><input type="radio" value="good">good</div>
                  	<div class="col-sm-3"><input type="radio" value="good">average </div>
                  	<div class="col-sm-3"><input type="radio" value="good">poor</div>
                  	<div class="col-sm-3"><input type="text" class="form-control"></div>
                  </div>
                   <div class="row">
                     <div class="col-sm-12""><textarea style="width:100%;"> </textarea>
                     </div>
                   </div>
                  </div>
             </div>
             <div class="row ques">
                  <div class="col-sm-2">6</div>
                  <div class="col-sm-3"><?php echo $row->ques6;?></div>
                  <div class="col-sm-7">
                  	  <div class="row">
                  	<div class="col-sm-3"><input type="radio" value="good">good</div>
                  	<div class="col-sm-3"><input type="radio" value="good">average </div>
                  	<div class="col-sm-3"><input type="radio" value="good">poor</div>
                  	<div class="col-sm-3"><input type="text" class="form-control"></div>
                  </div>
                   <div class="row">
                     <div class="col-sm-12""><textarea style="width:100%;"> </textarea>
                     </div>
                   </div>
                  </div>
             </div>
             <div class="row ques">
                  <div class="col-sm-2">7</div>
                  <div class="col-sm-3"><?php echo $row->ques7;?></div>
                  <div class="col-sm-7">
                  	  <div class="row">
                  	<div class="col-sm-3"><input type="radio" value="good">good</div>
                  	<div class="col-sm-3"><input type="radio" value="good">average </div>
                  	<div class="col-sm-3"><input type="radio" value="good">poor</div>
                  	<div class="col-sm-3"><input type="text" class="form-control"></div>
                  </div>
                   <div class="row">
                     <div class="col-sm-12""><textarea style="width:100%;"> </textarea>
                     </div>
                   </div>
                  </div>
             </div>
             <div class="row ques">
                  <div class="col-sm-2">8</div>
                  <div class="col-sm-3"><?php echo $row->ques8;?></div>
                  <div class="col-sm-7">
                  	  <div class="row">
                  	<div class="col-sm-3"><input type="radio" value="good">good</div>
                  	<div class="col-sm-3"><input type="radio" value="good">average </div>
                  	<div class="col-sm-3"><input type="radio" value="good">poor</div>
                  	<div class="col-sm-3"><input type="text" class="form-control" ></div>
                  </div>
                   <div class="row">
                     <div class="col-sm-12""><textarea style="width:100%;"> </textarea>
                     </div>
                   </div>
                  </div>
             </div>
             <div class="row ques">
                  <div class="col-sm-2">9</div>
                  <div class="col-sm-3"><?php echo $row->ques9;?></div>
                  <div class="col-sm-7">
                  	  <div class="row">
                  	<div class="col-sm-3"><input type="radio" value="good">good</div>
                  	<div class="col-sm-3"><input type="radio" value="good">average </div>
                  	<div class="col-sm-3"><input type="radio" value="good">poor</div>
                  	<div class="col-sm-3"><input type="text" class="form-control"></div>
                  </div>
                   <div class="row">
                     <div class="col-sm-12""><textarea style="width:100%;"> </textarea>
                     </div>
                   </div>
                  </div>
             </div>
             <div class="row ques">
                  <div class="col-sm-2">10</div>
                  <div class="col-sm-3"><?php echo $row->ques10;?></div>
                  <div class="col-sm-7">
                  	  <div class="row">
                  	<div class="col-sm-3"><input type="radio" value="good">good</div>
                  	<div class="col-sm-3"><input type="radio" value="good">average </div>
                  	<div class="col-sm-3"><input type="radio" value="good">poor</div>
                  	<div class="col-sm-3"><input type="text" class="form-control"></div>
                  </div>
                   <div class="row">
                     <div class="col-sm-12""><textarea style="width:100%;"> </textarea>
                     </div>
                   </div>
                  </div>
             </div>
             <div class="row">
                <div class="col-sm"><input type="submit" value="rejected" class="form-control btn-danger"></div>
                <div class="col-sm"><input type="submit" value="waitlist" class="form-control btn-primary"></div>
                <div class="col-sm"><input type="submit" value="approved" class="form-control btn-danger"></div>

             </div>


      </div>
    </div>
 </div>
<?php
}
?>

</form>

  
      




  </body>



</html>