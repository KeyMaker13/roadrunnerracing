<?php

$cars = $this->rrmodel->get_all_cars();
?>

<script type="text/javascript">
    var delcarselect = document.getElementById('delcarselect');
    function addcar(){
        
         $("#contnewcarid").attr("class","col-md-6 tb borderblack white");
         $("#newcarid").css({
            display:"block"
        });   
    }
    
    function checkform(){
        //alert('here');
        
        var year = document.getElementById('year');
        var compete = document.getElementById('compete');
        var weight = document.getElementById('weight');
        var engine = document.getElementById('engine');
        var drivetrain = document.getElementById('drivetrain');
        var suspension = document.getElementById('suspension');
        var wheels = document.getElementById('wheels');
        //var majorchanges = document.getElementById('majorchanges');
        
        if ( year.value === '' ){
            $('#errors').html("Enter year made");
            return false;
        } else if ( compete.value === '' ){
            $('#errors').html("Enter location where the car competed");
            return false;
        } else if ( weight.value === '' ) {
            $('#errors').html("Enter weight of car");
            return false;
        } else if ( engine.value === '' ){
            $('#errors').html("Enter engine stats");
            return false;
        } else if ( drivetrain.value === '' ){
            $('#errors').html("Enter type of drivetrain");
            return false;
        } else if ( suspension.value === '' ) {
            $('#errors').html("Enter type of suspension");
            return false;
        } else if ( wheels.value === '' ) {
          $('#errors').html("Enter type of wheels");
          return false;
        } else if ( document.getElementById('photofile').value === '' ) {
            $('#errors').html("Upload car photo");
            return false;
            
        } else {
            return true;
            //return true;
        }
        
        
        
    }
    

    if ( $(delcarselect).has('option').length === 0){
        
        $('#delcarid').css({"display":"none"});
        
    } 

</script>


<div class="col-md-12  white" style="hieght:350px;">

    <div class="col-md-2 tb borderblack ">
        <br>
        
        <button type='button' class="btn btn-warning" onclick="addcar()">Add new car</button>
        <br>
        <br>
    </div>

    <div class="col-md-10 ">
    
        <div class='col-md-2'>
            <div id='errors'></div>
        
        
        
        </div>
        
        
        <div id="contnewcarid" class="col-md-6 ">
        
            <div id="newcarid" class = "textpadding" style="display:none;">
            
                <form method="post"  enctype="multipart/form-data" action="<?php echo base_url(); ?>index.php/modelcontroller/makecar" onsubmit="return checkform()">
                    <div class="row">
                    <input type="text" id="year" name="year"> <label >Year car was made?</label><br>
                    </div>
                    <div class="row">
                    <input type="text" id="compete" name="compete"> <label >Where has the car competed?</label><br>
                    </div>
                    <div class="row">
                    <input type="text" id="weight" name="weight"> <label >Weight of car?</label><br>
                    </div>
                    <div class="row">
                    <textarea id="engine" name="engine" style='width:150px;height:200px;resize:none;'  ></textarea> <label >Engine stats</label><br>
                    </div>
                    <div class="row">
                    <input type="text" id="drivetrain" name="drivetrain"> <label >Drivetrain?</label><br>
                    </div>
                    <div class="row">
                    <input type="text" id="suspension" name="suspension"> <label >Suspension?</label><br>
                    </div>
                    <div class="row">
                    <input type="text" id="wheels" name="wheels"> <label >Type of Wheels?</label><br>
                    </div>
                    <div class="row">
                    <input type="text" id="majorchanges" name="majorchanges"> <label >Major changes? If any.</label><br>
                    </div>
                    <div class="row">
                    <input type="file" size="100" id="photofile" name="photofile"> <label >Photo upload</label><br>
                    </div>
                    
                    <br>
                    <button type="submit" class="btn btn-warning">Add new Car</button>
                </form>
                
            
            
            </div>
            
        
        </div>
        
        
        <div class="col-md-2 tb borderblack ">
        <br>
            <div id="delcarid">
                
                
                <form action="<?php echo base_url(); ?>index.php/modelcontroller/delcar" method="post">
                    
                    
                    
                    <select id="delcarselect" name="delcarselect" style='width:80%;'>
                    
                        <?php
                            foreach($cars as $car ){
                                
                                echo "<option value = '$car->carid'>$car->year $car->compete</option>";
                                
                            }


                        ?>
                    
                    
                    </select>
                        <br><br>
                        <button class="btn btn-warning"> Delete Car </button>
                
                </form>
                
                
            
            </div>
            
            <br>
        </div>
        
        
        
        
        
    
    </div>

</div>