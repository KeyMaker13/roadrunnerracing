<?php

$albums = $this->rrmodel->get_all_albums();
$burl = base_url();
?>

<!-- here we will query and then from the query we will loop through and fill the page with album objects -->
<!-- at the start of the call for the album object there is a call for the first album photo to that object -->
<!-- when the user clicks on one of the bottons -->
<!-- we can either have an open source app or a custom made animation -->
<script type="text/javascript">

    /* will have to loop through all the albums and make different classes for each one */
    
    $(document).ready(function() {
    <?php $jsc = 0; foreach ($albums as $album) { ?>
	   $(".fancybox<?php echo $jsc; ?>").fancybox({
       arrows: true,
       closeBtn: true
       });
       
    <?php $jsc++; } ?>
    });
    
    
    function showfancy(counter){
       
        
        $('a.fancybox'+counter).click();   
        
    }
    
</script>

    


<div class="col-md-12 orange">

<?php
    $counter = 0;
    foreach ($albums as $album){
        $firstpic = $this->rrmodel->get_first_pic($album->albumid);
        //$picsrc = '';
        
        if ( empty($firstpic) ){
            $picsrc = 'pics/nopic.jpg';
        }else{
            $picsrc = $firstpic->src;
        }
       
        
        if ( $counter%6 === 0 ){
            echo "<div class='row'>";
            
            
        } else if ( $counter%6 === 6){
            
            echo "</div>";
            echo "<br>";
            echo "<div class ='row'>";
            
        }
    
        echo "
            
            <div class='col-md-2 orange' style='text-align:center;'>
            
            <div id='albumtitle'  > 
                <strong>$album->albumname</strong>
            </div>
            
            <div id='albumbutton' >
            <button type='button' style='background-color:transparent;border:1px black solid;' onclick='showfancy($counter)'>
                <img src='$burl$picsrc' height='150' width = '150'>
            </button>
            </div>
            
            </div> 
            ";
    
        $counter++;
    }
    echo "</div>";
    echo "<br> <br>";
?>


<?php
    $c = 0;

    echo "<div style='display:none;'>";
    foreach ($albums as $album){
        $firstpic = $this->rrmodel->get_first_pic($album->albumid);
        if ( empty($firstpic) ){
           
        }else{
          
            $allpics = $this->rrmodel->get_all_pics($album->albumid);
            foreach($allpics as $pic){
                echo "
                <a class='fancybox$c' href='$burl$pic->src' data-fancybox-group='gallery'>
	               <img src='$burl$pic->src' alt='' />
                </a>
                ";  
                 
            }
        } 
     $c++;}
    echo "</div>";
?>
    
    

    