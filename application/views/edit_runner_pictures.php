<?php
/*

*/

$allalbums = $this->rrmodel->get_all_albums();

?>

<script type='text/javascript'>
   
    function createalbum(){

        var area = document.getElementById('makealbumarea');
        var button = document.getElementById('createbutton');
        $(area).css("display","block");
        $(button).html('X');
        $(button).attr('onclick','closecreatealbum()');
       
    }
    
    function closecreatealbum(){
     
        var area = document.getElementById('makealbumarea');
        var button = document.getElementById('createbutton');
        $(area).css("display","none");
        $(button).html('Create');
        $(button).attr('onclick','createalbum()');
    }

    function checkinputalbum(){

        var textinput = document.getElementById('albumname');
        var showerror = document.getElementById('erroralbum');
        if(textinput.value === ''){
            showerror.innerHTML = 'Need to name the album';
            return false;
        }
        return true;
    }
    
    function modifyalbum(){
        var albummain = document.getElementById('albumselect');
        var albumiframe = document.getElementById('albumiframe');
       
        /* here we split the string first element in the array has the album id */
        var data = albummain.value.split(',');
        var modifyalbum = document.getElementById('modifyalbum');
        $(modifyalbum).css({"display":"block"});
        albumiframe.src = "<?php echo base_url(); ?>/index.php/mod/modifypictures?albumid="+data[0]+'&albumname='+data[1]+'';
        
        $('#modifybutton').html('X');
        $('#modifybutton').attr('onclick','closemodifybutton()');
    }
    
    function closemodifybutton(){
        $('#modifybutton').html('Modify');
        $('#modifyalbum').hide();
        $('#modifybutton').attr("onclick","modifyalbum()");
        
    }
 
    
    function closeiframe(){
        if( $('#albumdelete').has('option').length === 0 ) {
        
        }else{
            //$('#modifybutton').show();   
            //$('#modifyalbum').hide();  
            $('#modifybutton').html('Modify');
            $('#modifyalbum').hide();
            $('#modifybutton').attr("onclick","modifyalbum()");
        }
        if( $('#albumdelete').has('option').length === 0 ) {
            $('#closebutton').hide();  
        }else {
            $('#closebutton').show();
        }
        
    }
    
    if( $('#albumdelete').has('option').length === 0 ) {
        $('#closebutton').hide();   
    }else {
         $('#closebutton').show();
    }
    
    if ( $('#albumselect').has('option').length === 0 ){
        $('#modifybutton').hide();
    }else{
        $('#modifybutton').show();
    }
    
</script>

<div id='edit_runner_pictures' class='col-md-12 white' style="text-align:center;margin-bottom:380px;">

    <div class='col-md-4 tb borderblack'>
		<br>
        <strong> Create new album </strong>
		<br><br>
        <!-- this is for the button to create the album -->
        <div>
            <button id='createbutton' class='btn btn-warning' onclick='createalbum()' type='button'> Create </button>
        </div>
		<br>
        <!-- this next div has all the pictures to have in the album -->
        <!-- its a div that has a scroll -->
        <div id='makealbumarea' style='display:none;'>
            <form action="<?php echo base_url();?>index.php/modelcontroller/makealbum/" method="post" id='makealbumform' name='makealbumform' onsubmit='return checkinputalbum()'>
                <br>
                <label for='albumname'>Name of Album</label>
                <input type="text" id="albumname" name="albumname" > 
                <div id='erroralbum'></div>
                <br>
                <br>
                <button class="btn btn-warning" type="submit" >Make</button>
				<br>
            </form>
			<br>
        </div>
    </div>
    
    <div class="col-md-4 tb borderblack">
        <br>
        <strong> Modify Existing Album </strong>
        <br>
        <br>
        
        <select id='albumselect' name="albumselect" >
            <?php
                foreach($allalbums as $album){
                echo "<option value='$album->albumid,$album->albumname'>".$album->albumname."</option>";
                }
            ?>
        </select>
       
        <button  id="modifybutton" class='btn btn-warning' onclick='modifyalbum()' type="button"> Modify </button>
    
        <div id='modifyalbum' style='display:none;'>
            <iframe id='albumiframe' class="fullwidth borderblack" src="<?php echo base_url(); ?>/index.php/mod/modifypictures?albumid=-1&albumname=none" style="overflow-y:scroll;overflow-x:hidden;height:300px;" >
            
            
            </iframe>
        </div>
        <br><br>
    </div>
    
    <div class="col-md-4 tb borderblack">
        <br>
        <strong> Delete album </strong>
        <br>
        <br>
        <form method="post" action='<?php echo base_url(); ?>index.php/modelcontroller/delalbum' >
        <select id="albumdelete" name="albumdelete" onclick="closeiframe()">
    
            <?php
                foreach($allalbums as $album){
                    echo "<option value='$album->albumid'> $album->albumname </option>";
                }
            ?>
        </select>
            
        <button id="closebutton" class="btn btn-warning" type="submit"> Delete </button>
        </form>
        <br><br>
    </div>

</div>