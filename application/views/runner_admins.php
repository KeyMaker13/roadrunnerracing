
 <?php echo validation_errors(); ?>

<?php //echo base_url(); ?>

   <?php //echo form_open('VerifyLogin'); ?>

<div class="infobox-md tb borderblack white textpadding">
  <form action="<?php echo base_url(); ?>index.php/VerifyLogin" method="post" name ="login" > 
	

    <p>
     <label for="username">Username: </label>

     <input type="text" size="20" id="username" name="username"/>
   </p>
  
   <p>
     <label for="password">Password: </label>

     <input type="password" size="20" id="password" name="password"/>
   </p>
   

     <input type="submit" value="Login" class="btn btn-warning">

   </form>
 </div>