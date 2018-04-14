
<html>
   <head><title>registration</title>
          <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css">
          <link rel="stylesheet" href="<?php echo base_url(); ?>assets/reg/css/reg.css">
          <link href="https://fonts.googleapis.com/css?family=Gugi" rel="stylesheet">
          <style>
@import url('https://fonts.googleapis.com/css?family=East+Sea+Dokdo');
#co option{
  letter-spacing: 1;
}
</style>


   </head>

<body>
 <h1>interview management system</h1>
 
    
 <form action="<?php echo site_url('welcome/reg')?>" method="post" enctype="multipart/form-data">
  <h3>REGISTRATION</h3>
   <div class="row">
   <div class="col-sm-6" id="content1" style="border:1px solid green; margin:0px auto;
   background-color:rgb(135,159,158);">
   
   	     <h2 class="heading2">PERSONAL DETAILS</h2>

         <div id="page1" style="margin:0px auto;">
          <div class="row" style="margin:0px auto; ">
            <div class="col-sm-12">
             

   	     <div class="row">
             <div class="col-sm-6" >full name</div>
             <div class="col-sm-6"><input type="text" name="fullname" class="form-control"></div>

   	    </div>
        <div class="row">
             <div class="col-sm-6" >gender</div>
             <div class="col-sm-6">
                <div class="row">
                  <div class="col-sm">male<input type="radio" name="gname" ></div>
                  <div class="col-sm">female<input type="radio" name="gname"></div>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-sm" >PROFILE PIC</div>
            <div class="col-sm"><input type="file"  name="picture" style="width:100%;height:40px"></div>
        </div>
   	    <div class="row">
            <div class="col-sm-6">username</div>
            <div class="col-sm-6"><input type="text" name="username" class="form-control"></div>

   	    </div>
        <div class="row">
            <div class="col-sm-6">password</div>
            <div class="col-sm-6"><input type="password" name="passname" class="form-control"></div>

        </div>
   	    <div class="roW">
            <div class="col-sm-6">course</div>
            <div class="col-sm-6"><input type="text" name="course" class="form-control"></div>

   	    </div>
   	    <div class="row">
            <div class="col-sm-6">fathers name</div>
            <div class="col-sm-6"><input type="text" name="fathername" class="form-control"></div>

   	    </div>
   	    <div class="row">
            <div class="col-sm-6">email</div>
            <div class="col-sm-6"><input type="email" name="email" class="form-control"></div>

   	    </div>
   	    <div class="row">
            <div class="col-sm-6">phone number</div>
            <div class="col-sm-6"><input type="text" name="phno" class="form-control"></div>

   	    </div>
   	    <div class="row">
            <div class="col-sm-6">address line-1</div>
            <div class="col-sm-6"><input type="text" name="add1" class="form-control"></div>

   	    </div>
   	    <div class="row">
            <div class="col-sm-6">address line-2</div>
            <div class="col-sm-6"><input type="text" name="add2" class="form-control"></div>

   	    </div>
   	    <div class="row">
            
            <div class="col-sm-12" ><input type="button" name="btn1" value="NEXT" style="float:right;width:200px;" class="btn-success btn-lg" id="firstbtn"></div>

   	    </div>
      </div>

   </div>
 </div>
</div>
</div>


 <div class="col-sm-6" id="content2">
   	     <div class="row" id="edudet" >
          <div class="col-sm-12" style="border:1px solid green;margin:0px auto;">
            <div class="row">

   	     	<div class="col-sm-12"><h2 class="heading2">EDUCATIONAL DETAILS</h2></div>
   	     </div>
           <div class="row" >
            <div class="col-sm" >PREVIOUS QUALIFICATION</div>
            <div class="col-sm">
               <select id="coll" class="form-control" name="qual">
              <option class="op" id="hs" value="HIGHSCHOOL">HIGHSCHOOL</option>
              <option class="op" id="inter" value="INTERMEDIATE">INTERMEDIATE</option>
              <option class="op" id="gr" value="GRADUATE">GRADUATE</option>
              
               </select>
               </div>
               </div>
       <div id="graduate">
            <div class="row">
             <div class="col-sm" >COURSE</div>
             <div class="col-sm">
               <select class="form-control" name="qual_co" id="co">
                       <option></option>
                       <option>BCA</option>
                       <option>BBA</option>
                       <option>Betch</option>
                       <option>BSC</option>
               </select>
             </div>

        </div>
          <div class="row">
             <div class="col-sm" >UNIVERSITY</div>
             <div class="col-sm"><input type="text" name="uni" class="form-control" style="height:40px"></div>

          </div>
          <div class="row">
             <div class="col-sm" >PERCENTAGE</div>
             <div class="col-sm"><input type="text" name="per" class="form-control" style="height:40px"></div>

          </div>
 </div>


   	    
        <div id="highsch">
   	    <div class="row" >
   	    	    <div class="col-sm-5"><p style="font-weight: bolder;font-size:20pt;">10th class</p></div>
   	    	    	<div class="col-sm-6">
   	    	    		 <table>
   	    	    		 	<tr>
   	    	    		 		<td>BOARD:</td>
   	    	    		 		<td><input type="text" class="form-control" name="board10"></td>
   	    	    		 	</tr>
   	    	    		 	<tr>
   	    	    		 		<td>TOTAL-MARKS:</td>
   	    	    		 		<td><input type="text" class="form-control" name="totmarks10"></td>
   	    	    		 	</tr>
   	    	    		 	<tr>
   	    	    		 		<td>MAX-MARKS:</td>
   	    	    		 		<td><input type="text" class="form-control" name="maxmarks10"></td>
   	    	    		 	</tr>
   	    	    		 	<tr>
   	    	    		 		<td>YEAR OF PASS:</td>
   	    	    		 		<td><input type="text" class="form-control" name="yop10"></td>
   	    	    		 	</tr>
   	    	    		 </table>

                        
   	    	    	
   	    	</div>
   	    

            


   	    </div>
         <div class="row">
             <div class="col-sm">school name</div>
             <div class="col-sm">
              <input type="text" name="school10" class="form-control" style="height:40px"></div>

        </div>
      </div>
   	    
        <div id="intermed">
   	    <div class="row">
   	    	    <div class="col-sm-5"><p style="font-weight: bolder;font-size:20pt;">12th class</p></div>
   	    	    	<div class="col-sm-6" >
   	    	    		 <table >
   	    	    		 	<tr>
   	    	    		 		<td>STREAM:</td>
   	    	    		 		<td><input type="text" class="form-control" name="str12"></td>
   	    	    		 	</tr>
   	    	    		 	<tr>
   	    	    		 		<td>BOARD:</td>
   	    	    		 		<td><input type="text" class="form-control" name="board12"></td>
   	    	    		 	</tr>
   	    	    		 	<tr>
   	    	    		 		<td>TOTAL-MARKS:</td>
   	    	    		 		<td><input type="text" class="form-control" name="totmarks12"></td>
   	    	    		 	</tr>
   	    	    		 	<tr>
   	    	    		 		<td>MAX-MARKS:</td>
   	    	    		 		<td><input type="text" class="form-control" name="maxmarks12"></td>
   	    	    		 	</tr>
   	    	    		 	<tr>
   	    	    		 		<td>YEAR OF PASS:</td>
   	    	    		 		<td><input type="text" class="form-control" name="yop12"></td>
   	    	    		 	</tr>
   	    	    		 </table>

                        
   	    	    	
   	    	</div>
   	    	
            

   	    </div>
        <div class="row">
            <div class="col-sm" >SCHOOL NAME</div>
            <div class="col-sm">
          <input type="text"  class="form-control" name="school12" style="height:40px"></div>
        </div>
      </div>
          
        
   	    


   	    
   	    <div class="row">
            <div class="col-sm">
              <input type="reset"  name="btn2" value="RESET" style="float:left;" class="btn-danger btn-lg form-control" id="back1">
            </div>
            <div class="col-sm">
              <input type="submit" name="sub" value="SUBMIT" style="float:right; " class="btn btn-success btn-lg form-control" id="secondbtn"></div>

   	    </div>

   </div>
 </div>
</div>
   
   

</form>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/reg/js/reg.js"></script>
</body>
</html>