

 

 

<div id="container" style=" width:80%;margin:40px auto; text-align:center;border:1px solid red;
background-color: rgb(51,178,44);">
  <h2>log-in</h2>
<form action="<?php echo site_url('welcome/authenticate');?>" method="post">
 <div class="row" id="con_tain" style=" max-width:70%; padding:10px;">
       
      <div class="col-sm-4" id="one" style=" margin-left: 10px;margin:0px auto;">
            <div class="row">
              <div class="col-sm-12" id="logo" >
              <img id ="img" style="height:250px;width:200px;" class="headimg" src="<?php echo base_url(); ?>assets/login/images/student.png">
	            </div>
            </div>
       </div>

      <div class="col-sm-8" style="text-align:center;margin:0px auto; border-left:1px solid red; ">

            <div class="row input" >
                  
                  <div class="col-sm" >
                    
            <select id="suun" class="form-control" style=" " data-style="btn-primary" name="usertype">
                       <option class="op" id="us" selected>USER</option>
                       <option class="op" id="ad">ADMIN</option>
                       <option class="op" id="opa">OPERATOR</option>
                    </select>
           
                  </div>
            </div>

            <div class="row input">
              <div class="col-sm label">USERNAME:</div>
              <div id="img" class="col-sm">
              <img id ="img" src="<?php echo base_url(); ?>assets/login/images/user.png" width=30 height=30>
               <input type="text" name="user" class="um">
               </div>
            </div>


            <div class="row input">
              <div class="col-sm label">PASSWORD:</div>
              <div id="img" class="col-sm">
              <img id ="img" src="<?php echo base_url(); ?>assets/login/images/pass.png" width=30 height=30>
               <input type="password" name="pass" >
               </div>
            </div>

            <div class="row input">
               <div class="col-sm">
                <input type="submit" name="submit" value="SUBMIT" class="form-control btn-primary">
              </div>
              

            </div>
            <div class="row">
              <div class="col-sm">
               <a href="<?php echo site_url('welcome/index')?>" style="color:red;">REGISTRATION </a>
              </div>
            </div>
            

      </div>



</div>


  
</form>
</div>




<script type='text/javascript' src="<?php echo base_url(); ?>assets/login/js/login.js">
</script>
 </body>

 </html>