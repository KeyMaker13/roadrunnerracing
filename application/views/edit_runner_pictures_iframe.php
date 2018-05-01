<?php
$uploaderror = false;
$uploadsuccess = false;

if ( $this->session->flashdata('albumid') && $this->session->flashdata('albumname') ){
    $albumid = $this->session->flashdata('albumid');
    $albumname = $this->session->flashdata('albumname');
}else {
    
      
    if ( !isset($_GET['albumid']) && !isset($_GET['albumname']) ){
        $albumid = '-1';
        $albumname = 'no name';
    }else{
        $albumid = $_GET['albumid'];
        $albumname = $_GET['albumname'];
    }
    
}

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


//$baseurl = $_GET['baseurl'];
//echo $albumid,"\n\n";

$picfromthisid = $this->rrmodel->get_certain_album($albumid);

//echo $picfromthisid,"\n";

?>


<div class='white textalign-center' style="color:white;">
<strong> Album name: <?php echo $albumname; ?> </strong>
<br>
    
<form enctype='multipart/form-data' method="post" action='<?php echo base_url(); ?>index.php/modelcontroller/uploadphoto' id="uploadphoto" name="uploadphoto">
<input type="hidden" value="<?php echo $albumid; ?>" id="albumid" name="albumid">
<input type="hidden" value="<?php echo $albumname; ?>" id="albumname" name="albumname">
    <strong>Upload Photo</strong>
    <input type="file" id='photofile' name='photofile' size=100  >
    
   <!-- <input type="image" >  -->
    
  <button class="btn btn-warning" type="submit"> Upload </button>
    
</form>
    
    <div>
        
        <?php
            if ($uploaderror){
                echo $errortext; echo $errormegs; 
            }
            if ($uploadsuccess){
                echo "Upload Successful";
            }
        ?>
    
    </div>
    
<br>
<form method="post" action='<?php echo base_url(); ?>index.php/modelcontroller/deletepic'  id="delpic" name="delpic">
<input type="hidden" value="<?php echo $albumid; ?>" id="albumid" name="albumid">
<input type="hidden" value="<?php echo $albumname; ?>" id="albumname" name="albumname">
    
    You can only delete one at a time.
<?php
    foreach($picfromthisid as $pic ){
        echo "
    <div class='row'>
    ";
    ?>
    <img src='<?php echo base_url(); echo $pic->src; ?>'  height=100 width=100  >
    <?php
    echo "
    delete 
    <input type='radio' value = '$pic->picid' name='delpic' id='delpic' >
</div>";
        
    }


?>
    
    <br>
    <br>
    <button type="submit" class="btn btn-warning"> Delete </button>

</form>
    
    
    
    
</div>

