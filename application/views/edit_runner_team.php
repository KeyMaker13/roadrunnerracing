<?php
 $allmembers = $this->rrmodel->get_all_members();
?>

<script type="text/javascript">
    var delmemberselect = document.getElementById('delmember');
    
  
    
    function makemember(){
       
    $('#makememberdiv').css({
      display:"block"
    
    });
    }
    
    function checkmakemember(){
        
        var membername = document.getElementById('membername');
        var memberposition = document.getElementById('memberposition');
        var membermajor = document.getElementById('membermajor');
        //var memberpicture = document.getElementById('memberpicture');
        //var memberpicture = $('#memberpicture input[type=file]').val();
        
        if (membername.value === '' ){
            
            $('#errors').html("Members name is empty");
            return false;
        } else if (memberposition.value === ''){
            $('#errors').html("Members position is empty");
            return false;
        } else if (membermajor.value === ''){
            $('#errors').html("Members major is empty");
            return false;
        } else if (document.getElementById('memberpicture').value === '' ){
            $('#errors').html("Need to upload photo");
            return false;
        } else {
            return true;   
            
        }
        
        
    }
    
    if ( $(delmemberselect).has('option').length === 0){
        
        $('#delmemberdiv').css({"display":"none"});
        
    } 

</script>


<div class='col-md-12 tb borderblack'>

    <div class='col-md-2 tb borderblack textalign-center white'>
        <br>
        <button class='btn btn-warning' type="button" onclick='makemember()' > Make new Member </button>
        <br><br>
    </div>
    
    <div class='col-md-10 tb borderblack white textpadding'>
        <div class='col-md-2'>
            <div id='errors' >
                
            </div>
        </div>
        
        <div class="col-md-5">    
        <div id ='makememberdiv' class='fullwidth ' style="padding-left:30px !important; display:none;">
            <form method="post" enctype="multipart/form-data" action='<?php echo base_url(); ?>index.php/modelcontroller/makemember'  onsubmit="return checkmakemember()">
                <div class='row'>
                    <input type="text" id="membername" name="membername"><label for="membername">Members Name</label> 
                </div>
                <br> 
                <div class='row'>
                <input type='text' id='memberposition' name='memberposition'><label for='memberposition'>Members Position</label>  
                </div>
                <br>
                <div class="row">
                <input id="membermajor" name='membermajor' type="text">
                <label for="membermajor">Members Major</label>
                </div>
                <br>
                <div class='row' >
                <label for="memberpicture"> Members picture </label>
                    <input id="memberpicture" name="memberpicture" type='file' size="100">
                 
                </div>
                <br>
                <button type="submit" class="btn btn-warning"> Add Team Member </button>
            </form>
        
        </div>
        </div>
    
        <div class='col-md-3'>
            
            <div id='delmemberdiv' class="textpadding fullwidth">
            
            <strong>Delete Member</strong>
            <!-- make a server-side check to see if the div is empty so it won't show the select or the button for submit -->
            <form method='post' action='<?php echo base_url(); ?>index.php/modelcontroller/delmember'>
                <div class="row">
                <select id='delmember' name='delmember'>
                    <?php


                        foreach($allmembers as $member){
                            echo "<option value='$member->memberid'> $member->membername </option>";   
                            
                        }


                    ?>
                    
                </select>
                <br>
                <br>
                <button type="submit" class="btn btn-warning" >Delete</button>
                </div>
            </form>
            
            </div>
        </div>
    
    </div>

</div>