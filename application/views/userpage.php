
<html>
<head>
	<title>user page</title>
<style>
a{
	text-decoration: none;
	color:red;
	font-weight: bolder;
}
#interview_hi{display:none;}
#result_hi{display: none;}
td{padding:5px;
text-transform: uppercase;}

</style>
</head>
<body>
	<div class="row" style="text-align:center;background-color:rgb(34,60,100);padding:5px;">
      <div class="col-sm"><a href="<?php echo site_url('welcome/index')?>">HOME</a></div>
      <div class="col-sm"><a href="<?php echo site_url('welcome/index')?>">QUERIES</a></div>
      <div class="col-sm"><a href="<?php echo site_url('welcome/index')?>">COURSES</a></div>
      <div class="col-sm"><a href="<?php echo site_url('welcome/index')?>">WAITLIST</a></div>
      <div class="col-sm"><a href="<?php echo site_url('welcome/index')?>">CONTACT</a></div>

	</div>

	<div class="profile_container" style="margin:100px auto; width:80%;">
          <div class="row" style="border:1px solid red; ">
          	<div class="col-sm-4">
             <div class="row">
                <div class="col-sm-12" style="border:1px solid red;text-align:center;">
                	<div style="width:70%; height:50%; margin:0px auto;">
                		<img src="<?php echo base_url(); ?>/assets/profilpic.jpg" style="width:100%;text-align:center;" >
                	</div>
                </div>
                <div class="col-sm-12" style="text-align:center;" >
                     <div class="row">
                       <div class="col-sm-12">sunder singh mahra</div>
                  
                        <div class="col-sm-6">registration-no:</div>
                        <div class="col-sm-6">3422</div>
                        <div class="col-sm-6">Interview date:</div>
                        <div class="col-sm-6">19/11/1996</div>
                       
                     </div>
                </div>

             </div>

            </div>
            <div class="col-sm-8"  style="  border:1px solid red;text-align:center;">
            	 <div class="row" >
            	 	 <div class="col-sm"><button id="about" class="form-control btn-secondary">ABOUT</button></div>
            	 	 <div class="col-sm"><button id="interview" class="form-control btn-danger">INTERVIEW</button></div>
            	 	 <div class="col-sm"><button id="result" class="form-control btn-primary">RESULT</button></div>
            	 	</div>
            	 	<div class="row" >
            	 	<div class="col-sm-12" >
                
                                 <div class="row">
                                 	<div class="col-sm" id="about_hi" style=" text-align:center;width:100%; border:2px solid green;background-color:rgb(122,122,122);height: 400px;">
                                         <table style="height: 100%;">
                                         	<tr>
                                         		<td>name:</td>
                                         		<td>sunder singh mehra</td>
                                         	</tr>
                                         	<tr>
                                         		<td>registration:</td>
                                         		<td>3422</td>
                                         	</tr>
                                         	<tr>
                                         		<td>fathers name:</td>
                                         		<td>kunwar singh mehra</td>
                                         	</tr>
                                            <tr>
                                                <td>course:</td>
                                                <td>BCA</td>
                                            </tr>
                                         	<tr>
                                         		<td>mother name:</td>
                                         		<td>laxmi mehra</td>
                                         	</tr>
                                         </table>
                                     </div>
                                 </div>

            	 		</div>
            	 		<div class="col-sm-12"  >
                                  <div class="row">
                                 	<div class="col-sm" id="interview_hi" style=" text-align:center;width:100%; border:2px solid green;height: 100%; background-color:rgb(200,42,62);height: 400px;">
                                         <table>
                                         	<tr>
                                         		<td>name</td>
                                         		<td>suresh singh mehra</td>
                                         	</tr>
                                         	<tr>
                                         		<td>registration</td>
                                         		<td>3422</td>
                                         	</tr>
                                         	<tr>
                                         		<td>fathers name</td>
                                         		<td>kunwar singh mehra</td>
                                         	</tr>
                                         	<tr>
                                         		<td>mother name</td>
                                         		<td>laxmi mehra</td>
                                         	</tr>
                                         </table>
                                     </div>
                                 </div>
            	 		</div>
            	 		<div class="col-sm-12">
                                  <div class="row">
                                 	<div class="col-sm" id="result_hi" style="text-align:center;width:100%; border:2px solid green;height: 100%;background-color:rgb(18,123,200);height: 400px;">
                                         <table>
                                         	<tr>
                                         		<td>name</td>
                                         		<td>kavinder singh mehra</td>
                                         	</tr>
                                         	<tr>
                                         		<td>registration</td>
                                         		<td>3422</td>
                                         	</tr>
                                         	<tr>
                                         		<td>fathers name</td>
                                         		<td>kunwar singh mehra</td>
                                         	</tr>
                                         	<tr>
                                         		<td>mother name</td>
                                         		<td>laxmi mehra</td>
                                         	</tr>
                                         </table>
                                     </div>
                                 </div>
            	 		</div>



            	 	</div>




            	 </div>



            </div>
          </div>





	</div>
   

<script src="<?php echo base_url(); ?>/assets/userpage/userpage.js">

</script>
</body>
</html>