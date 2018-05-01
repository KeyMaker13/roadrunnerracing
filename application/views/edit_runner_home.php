<?php
$uploaderror = false;
$uploadsuccess = false;

    $i = 0;
    $allvids = $this->rrmodel->getAllYoutube();
    $allhomephotos = $this->rrmodel->get_all_home_photos();

if ( $this->session->flashdata('extnotallowed') && $this->session->flashdata('overtwomegs')  ){
    $uploaderror = true;
    $errortext = 'Extension not allowed'; 
    $errormegs = 'File cannot be over 2 megabytes';
} else if ( $this->session->flashdata('overtwomegs') ){
    $uploaderror = true;
    $errormegs = 'File cannot be over 2 megabytes';
    $errortext = '';
} else if ( $this->session->flashdata('extnotallowed') ) {
    $uploaderror = true;
    $errormegs = '';
    $errortext = 'Extension not allowed'; 
} else {
    $uploaderror = false;
    $errormegs = '';
    $errortext = '';
}

if ( $this->session->flashdata('noerrors') ){
    $uploaderror = false;
    $uploadsuccess = true;
    
}else {
    
}




?>

<script type="text/javascript" > 
	function checkinput(){

			var ln = document.getElementById("linkn");
			var l = document.getElementById("link");
			var errorbox = document.getElementById("error");
			var youtube = document.getElementById("youtube");
		
        // reg exp to make sure youtube video is correct
        /*
			var linkcheck = new RegExp("^[\<iframe].*$[</iframe>]");
			var linkcheck = /<iframe.*src=\"http:\/\/www\.youtube\.com\/embed\/([a-zA-Z0-9_-]{11})\".*[^>]></iframe>/;
			var opentag = /<iframe/;
			var srctag = /.*src.*=.*\"[(http:\/\/)]|[(\/\/)]www\.youtube\.com\/embed\/\([a-zA-Z0-9_-]{11})\"/;
			var closetag = /<\/iframe>/; 
		*/
        
			/* */
			if ( (ln.value === '' ) && (l.value === '') ){
				errorbox.className += ' borderblack tb textpadding';
				errorbox.innerHTML = "Link name and link embed are empty";
				return false;
			} else if (ln.value === ''){
				errorbox.className += ' borderblack tb textpadding';
				errorbox.innerHTML = "Link name is empty";
				return false;
			}else if (l.value === '') {
				errorbox.className += ' borderblack tb textpadding';
				errorbox.innerHTML = "Link embed is empty";
				return false;
			}
        /* rest of checks to make sure the reg exp matches */
		//	} else if (l.value != opentag ) {
		//		alert("here");
		//		return false;
		//	} else if (l.value != srctag ) {
		//		alert("here");
		//		return false;
  		//	}
	}
</script>  

<div class="col-md-12" style="z-index:100;"> 
<div class="row">
    <div class="col-md-4 tb white borderblack">
    <br> 
        <p>Update Home Section Background Image</p>
        <p> Image must be very large. <br>For example (2048 x 1151)  </p>
        <form enctype='multipart/form-data' action="<?php echo base_url(); ?>index.php/modelcontroller/homepicture/" method="post" name="homepicture" id="homepicture" >
            Upload Photo<br>
            <input type="file" id='photofile' name='photofile' size=100 >
            <br>
            <button type="submit" class="btn btn-warning">Add Photo</button>
        </form>
        
        <?php
            if ($uploaderror){
                echo $errortext; echo $errormegs; 
            }
            if ($uploadsuccess){
                echo "Upload Successful";
            }
        ?>
        
    <br>
    </div>
    
    <div class="col-md-4 tb white borderblack">
        <br>
        <form action="<?php echo base_url(); ?>index.php/modelcontroller/mainhomepicture/" method="post" name="mainhomepicture" id="mainhomepicture">
                <strong> Change Home Picture </strong>
                <br>
                <br>
                <select id="mainhomephoto" name="mainhomephoto" style='width:100%;'>
                
                <?php
                    
                    foreach($allhomephotos as $home) {
                        echo "<option value = '$home->imgid'> $home->src </option>" ; 
                    }
                ?>
				
                </select>
				<br>
                <br>
            
            
            
            
            <button type="submit" class="btn btn-warning"> Change </button>
        </form>
        <br>
    </div>
    
    <div class="col-md-4 tb white borderblack">
        <br>
        <form action="<?php echo base_url(); ?>index.php/modelcontroller/delhomepicture" method="post" name="delhomepicture" id="delhomepicture">
               <strong> Delete Home Picture </strong>
                <br>
                <br>
                <select id="delhomephoto" name="delhomephoto" style='width:100%;'>
                
                <?php
                    
                    foreach($allhomephotos as $home) {
                        echo "<option value = '$home->imgid'> $home->src </option>" ; 
                    }
                ?>
				
                </select>
				<br>
                <br>
            
            
            
            
            
            
            
            
            <button class="btn btn-danger"> Delete </button>
        </form>
        <br>
    </div>
</div>
    
<div class="row">
<!-- </div> -->
<!--<br><br> -->
<!-- <div class="col-md-12"  style="z-index:100;height:250px;"> -->


		<!-- this is the outer div for the form -->
		<div class="white borderblack tb col-md-4" >
		<br>
            
     


		<form action="<?php echo base_url(); ?>index.php/modelcontroller/youtube/" method="post" name ="youtube" id = "youtube" onsubmit="return checkinput()">

			<strong> Upload Youtube Video </strong>
			<br>
			<br>
			<i> Video Name </i>
			<input name="linkn" id="linkn" style="width:300px;"  >
			<br>
			<i> Link embed URL: </i>
			<input class=""  name="link" id="link" style="width:300px;">  
			<br>
			<br>
			<button type="submit" class="btn btn-warning"> Upload </button>
			<br>
			<br>
		<div id="error" >

		</div>
		<br>

		</form>
		</div>

		<div class = "white borderblack tb col-md-4">
			<br>
			<form action="<?php echo base_url(); ?>index.php/modelcontroller/mainvideo/" method="post" name ="myoutube" id="myoutube">
                <strong> Change Youtube Video </strong>
                <br>
                <br>
                <select id="mainvid" name="mainvid" style='width:100%;'>
                
                <?php
                    
                    foreach($allvids as $vid) {
                        echo "<option value = '$vid->id'> $vid->name </option>" ; 
                    }
                ?>
				
                </select>
				<br>
                <br>
                <button type="submit" class="btn btn-warning"> Change </button>
                <br>
                <br>
			</form>

		</div>

		<div class = "white borderblack tb col-md-4">
		<br>
			<form action="<?php echo base_url(); ?>index.php/modelcontroller/delyoutube/" method="post" name ="dyoutube" id="dyoutube">
                
                <strong> Delete Youtube Video </strong>
                <br>
                <br>
					<select id='delvid' name='delvid' style='width:100%;'>  
                    <?php
                        foreach($allvids as $vid ) {
                            echo "<option value = '$vid->id'> $vid->name  </option> ";    
                            
                        }
                    ?>
                    </select>
			     <br>
                 <br>
                <button type="submit" class="btn btn-danger"> Delete </button>
                <br>
                <br>
			</form>

		</div>
</div>
</div>



    
