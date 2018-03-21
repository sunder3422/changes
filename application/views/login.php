
<html>
    <head><title>login</title>
    	<meta charset = "utf-8"> 
  
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/login/css/login.css" >
        


    </head>
 <body>
           
 <h1>interview management system</h1>

 <h2>log-in</h2>

<div id="container">
		<form action="" method="post">
<div class="grid-container">
	<div class="roo" background-color="red">
		<img id ="img" src="<?php echo base_url(); ?>assets/login/images/student.png">
	</div>


  <div class="sun">user-type:</div>
  <div class="sun">
  	<select id="suun">
              <option class="op" id="us" selected>USER</option>
              <option class="op" id="ad">ADMIN</option>
              <option class="op" id="opa">OPERATOR</option>
  	</select>
  </div>
  <div class="sun" class="label">username:</div>  
  <div class="sun">
  	<input type="text" name="user">
  </div>
  <div class="sun" id='sub'>password:</div>
    <div class="sun">
    	<input type="password" name="pass">
    </div>  
  <div id="sun7">
  	<input type="submit" name="sub" value="submit"><br><br>
  	<a href="#">Register</a>
  </div>
 

</div>
</form>
</div>




<script type='text/javascript' src="<?php echo base_url(); ?>assets/login/js/login.js">
</script>
 </body>

 </html>