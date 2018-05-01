<?php

$spons = $this->rrmodel->get_all_spons();
$thanks = $this->rrmodel->get_all_thanks();

?>

<script type="text/javascript">
    var delsponsselect = document.getElementById('delsponsselect');
    var delthanksselect = document.getElementById('delthanksselect');
    $('#sponschoice').css({display:"none"});
    $('#submitbutton').css({display:"none"});

    
    
    /*
    function makeurl(){
        $('#urlbutton').html("X");
        $('#urlbutton').attr("onclick","closeurl()");
        $('#uploadbutton').css({display:"none"});
        
        $('#sponschoice').css({display:"block"});
        $('#submitbutton').css({display:"block"});
        
        $('#sponsinput').attr("type","text");
        $('#sponschoice label').html("Enter website url EX: http://www.website.com/etc");
    }
    
    
    function closeurl(){
        $('#urlbutton').html("URL");
        $('#urlbutton').attr("onclick","makeurl()");
        $('#uploadbutton').css({display:"block"});
        $('#sponschoice').css({display:"none"});
        $('#submitbutton').css({display:"none"});
    }
    
    function makeupload(){
        $('#uploadbutton').html("X");
        $('#uploadbutton').attr("onclick","closeupload()");
        $('#urlbutton').css({display:"none"});
        $('#sponschoice').css({display:"block"});
        $('#submitbutton').css({display:"block"});
        $('#sponsinput').attr("type","file");
        $('#sponsinput').attr("size","100");
        $('#sponschoice label').html("Upload your photo");
    }
    
    function closeupload(){
        $('#uploadbutton').html("Photo");
        $('#uploadbutton').attr("onclick","makeupload()");
        $('#urlbutton').css({display:"block"});
        $('#sponschoice').css({display:"none"});
        $('#submitbutton').css({display:"none"});
    }
    */
    function checksubmit(){
            if (document.getElementById('sponslink').value === ''){
             
                $('#sponschoice').html("Enter the hyperlink to your sponsors website.");
                $('#sponschoice').css({display:"block"});
                return false;   
            }
        
        /*
           if ( document.getElementById('sponstype').value === '' ){
                return false;   
           }
        */
         return true;   
    }
    
    function checkthanks(){
        
        if ( document.getElementById('specialthanks').value   === '' ) {
            return false;   
        }
        return true;
    }
    

/* these lines here add use to viewpoint don't delete!

    if ( ($(delsponsselect).has('option').length === 0 ) && ($(delthanksselect).has('option').length===0)){
        
        $('#delsponsid').css({"display":"none"});
        
    } else {
        $('#delsponsid').css({"display":"block"});
    }
*/

</script>


<div class="col-md-12 white">

    <div class="col-md-2 ">
      
    </div>
    
    <div class="col-md-10 borderblack tb">
        <br>
        
        <div id="addsponsid" class='col-md-6' >
            
            <form enctype="multipart/form-data" method="post" action="<?php echo base_url(); ?>index.php/modelcontroller/makespons" onsubmit="return checksubmit()">
                <!--
                <div class='col-md-2'>
                <button id="urlbutton" type="button" class="btn btn-warning" onclick="makeurl()">
                    URL
                </button>
                </div>
                
                <div class='col-md-2'>
                <button id="uploadbutton" type="button" class="btn btn-warning" onclick="makeupload()">
                    Photo
                </button>
                </div>
                -->
                <div class='col-md-12 borderblack'>
                    <!-- 
                    <p> Sponsor Photo </p>
                    <input type="file">
                    -->
                    <br>
                    <p> Sponsor : Link </p>
                    <input type="text " name="sponslink" id="sponslink" >
                    <br><br>
                    <p> Sponsor Type </p>
                    <select name="sponstype" id="sponstype">
                        <option>
                           Bronze 
                        </option>
                        <option>
                            Silver
                        </option>
                        <option>
                            Gold
                        </option>
                        <option>
                            Platinum
                        </option>
                        <option>
                            Daimond
                        </option>
                    </select>
                    <br><br>
                    <button type="submit" class="btn btn-warning"> Add Sponsor </button>
                    <br>
                    <br>
                </div >
                <!--
                <div class='col-md-12 borderblack'>
                <button id="submitbutton" type="submit" class="btn btn-warning">Submit</button>
                </div>
                -->
                <br>
                <br>
                
                <div id="sponschoice" class="fullwidth">
                    
                    
                    <!--<input id="sponsinput" name="sponsinput"  style="width:150px;"> <label for='sponsinput'></label>
                    -->
                
                </div>
            </form>
    
            
            <br>
			<br>
            
            <form method="post" action="<?php echo base_url();?>index.php/modelcontroller/addthanks" onsubmit="return checkthanks()">
                <input id="specialthanks" name="specialthanks" >
                
                <label for="specialthanks"> Sepcial Thanks.   </label>
                <button class="btn btn-warning" type="submit"> Add person </button>
            </form>
            <br>
            
            
            <div class="col-md-12">
            
                <form method="post" action="<?php echo base_url();?>index.php/modelcontroller/addindividualsponsor" onsubmit="return checkindividualsponsor()">
       
                             <label for="individualsponsor">Individual Sponsor : Name</label>
       <br>
                    
                <input id="individualsponsor" name="individualsponsor"> 
                <br>
       
                    <label for="individualsponsortype"> Sponsor Type </label>
                    <br>
                <select id="individualsponsortype" name="individualsponsortype">
                    <option>
                           Bronze 
                        </option>
                        <option>
                            Silver
                        </option>
                        <option>
                            Gold
                        </option>
                        <option>
                            Platinum
                        </option>
                        <option>
                            Daimond
                        </option>
                    
                    
                    </select>
                <br>
                    <button type="submit" class="btn btn-warning">Add Individual Sponsor</button>
                    
                </form>
            
            
            </div>
            
            
        </div>
        
         <div id="delsponsid" class='col-md-4'>
            <form action="<?php echo base_url();?>index.php/modelcontroller/delspons" method="post" >
            <select id="delsponsselect" name="delsponsselect" style="width:150px;">
             
             <?php 
             

                foreach ($spons as $spon){
                    
                    echo "<option value='$spon->sponsid'> $spon->link </option>";
                    
                }
                
            ?>
             
             </select> <button type="submit" class="btn btn-danger"> Delete </button>
            
            </form>
             
               <br>
            
               <form action="<?php echo base_url();?>index.php/modelcontroller/delthanks" method="post">
                <select id="delthanksselect" name="delthanksselect">
                
                <?php
                    foreach($thanks as $thank ){
                        
                     echo "<option value = '$thank->thanksid' > $thank->thanks </option>";
                        
                    }
                    


                ?>
           
             </select>
                <button class="btn btn-danger" type="submit">Delete Thanks</button>
             </form>
          
             
        </div>
       
        
        
        
    </div>

</div>
