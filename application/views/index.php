<!DOCTYPE html>
<html>
<head>
	<title>index</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css">
          <link rel="stylesheet" href="<?php echo base_url(); ?>assets/front/css/index.css">
</head>
<body>
 <h1>interview management system</h1>
<div class="row" id="maincon">
        <div class="col-sm-2" style="border:1px solid grey; width:auto; background-color:rgb(67,19,132);" id="slidedown">
      
              <button id="hello" style="color:red;  height:50px;margin-top: 5px; width:100%;height:40px;">DISPLAY</button>
              <div id="hiddendisp">
              <a href="<?php echo site_url('welcome/index')?>">HOME</a>

               <a href="<?php echo site_url('welcome/login')?>">LOGIN</a>
              <a href="<?php echo site_url('welcome/reg')?>">REGISTRATION</a>
               <a href="<?php echo site_url('welcome/interview')?>">INTERVIEW</a>
               <a href="#">ABOUT</a>
               
               <a href="#">CONTACT</a>
               <a href="#">SCHEDULE</a>
               <a href="#">WAITLIST</a>
              </div>

        	
          </div>
       
        <div class="col-sm-10" style="border:2px solid grey;" >

        <div id="alldetail">
             <div class="row">
             	<div class="col-sm box" style=" height: 280px;">
                <div style="text-align:center;" class="graph">
                  <h2>REGISTRATION</h2>
                   <div class="arc">
                    <canvas id="mycan" width="180" height="180" style=""></canvas>
                     
                   </div>


                </div>
              </div>
             	<div class="col-sm box" style="height: 280px;">
                <div style="text-align:center;" class="graph">
                  <h2>WAITLIST</h2>
                   <div class="arc">
                    <canvas id="mycan1" width="180" height="180" style=""></canvas>
                     
                   </div>


                </div>


              </div>
             	<div class="col-sm box" style="height: 280px;">
                <div style="text-align:center;" class="graph">
                  <h2>APPROVED</h2>
                <div class="arc">
                    <canvas id="mycan2" width="180" height="180" style=""></canvas>
                     
                   </div>
              </div>
            </div>
              </div>
              <div class="row">
             	<div class="col-sm box" style="height: 280px;">
                <div style="text-align:center;" class="graph">
                  <h2>TOTAL VIEWERS</h2>
                <div class="arc">
                    <canvas id="mycan3" width="180" height="180" style=""></canvas>
                     
                   </div>
                 </div>
              </div>
             	<div class="col-sm box" style="height: 280px;">
                <div style="text-align:center;" class="graph">
                  <h2>ADMITTED</h2>
                   <div class="arc">
                    <canvas id="mycan4" width="180" height="180" style=""></canvas>
                     
                   </div>


                </div>
              </div>
             	<div class="col-sm box" style="height: 280px;">
                <div style="text-align:center;" class="graph">
                  <h2>REJECTED</h2>
                   <div class="arc">
                    <canvas id="mycan5" width="180" height="180" style=""></canvas>
                     
                   </div>


                </div>
              </div>
              </div>


          
        </div>
       </div>
</div>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/front/js/index.js"></script>
<script type="text/javascript">
  

</script>
</body>
</html>
