<?php
// echo everything out when done
$thanks = $this->rrmodel->get_all_thanks();
$spons = $this->rrmodel->get_all_spons();
$burl = base_url();


$sponsbronze = array();
$sponssilver =  array();
$sponsgold =  array();
$sponsplatinum =  array();
$sponsdaimond =  array();


foreach ($spons as $spon){
 
    if ($spon->type == 'Bronze'){
        
        array_push($sponsbronze, $spon->link);
        
    }
    if ($spon->type == 'Silver'){
        
        array_push($sponssilver, $spon->link);
    }
    if ($spon->type == 'Gold'){
        
        array_push($sponsgold, $spon->link);
        
    }
    if ($spon->type == 'Platinum'){
        
        array_push($sponsplatinum, $spon->link);
        
    }
    if ($spon->type == 'Daimond'){
        
        //echo $spon->link;
        
        array_push($sponsdaimond, $spon->link);
    }

    
}


$lenbronze = count($sponsbronze);
$lensilver = count($sponssilver);
$lengold = count($sponsgold);
$lenplatinum = count($sponsplatinum);
$lendaimond = count ($sponsdaimond);

/*
$onethirddaimond = ($lendaimond/3);
$remainderdaimond = ($lendaimond % 3);
$array1daimond = array_slice($sponsdaimond, 0, $onethirddaimond);
$array2daimond = array_slice($sponsdaimond, $onethirddaimond, $onethirddaimond);
$array3daimond = array_slice($sponsdaimond, $onethirddaimond *2, $onethirddaimond + $remainderdaimond);
*/
//$len = count($spons);

//$onethird = ($len/3);
//$remainder = ($len%3);

//$array1 = array_slice($spons,0,$onethird);
//$array2 = array_slice($spons,$onethird+1,$onethird);
//$array3 = array_slice($spons,(2*$onethird),$onethird+$remainder);
//get 3 arrays


//$testfile = file_get_contents("sponsorpackets/test.txt");
//$bajapacket = file_get_contents("/path/to/photo.jpg"); // Read the file's contents
//$sponsorpacket = file_get_contents("/path/to/photo.jpg");
//$testname = "test.txt";
//$name = 'myphoto.jpg';

//force_download($testname, $testfile);



echo "

<div class = 'col-md-10 marginleft-8pc marginright-8pc'>
	<div class = 'row'>
	
		<!-- special thanks -->
		<div class = 'specialthanks tb borderblack full-width textpadding' style = 'height:250px;'>
			<p class = 'orange fontsize-xlarge' style = 'text-align:center;'>
				UTSA Roadrunner Racing Sponsors
			</p>
			<p class = 'white fontsize-large' style = 'text-align:center;'>
				Special thanks
			</p>
			<div class = 'center' style = 'text-align:center;'>
			<p class = 'orange fontsize-small'>
				";

                $len = count($thanks);
                $c = 1;
                foreach ($thanks as $thank){
                    
                    if ($len === $c){
                        echo "$thank->thanks.";
                        
                    }else{
                        echo "$thank->thanks,";
                    }
                    
                    $c++;
                }

/* for loop here
                Paul Krueger,
				Dave Kuenstler,
				Kota Miyakita,
				Mike Daniel,
				Denny Ware,
				Eddie Barron,
				Jana Kennelly,
				Yvette Rivas
*/
echo "

            </p>
            <p class='white textalign-center'> Would you like to sponsor us? </p>
            <p class='orange textalign-center'> Download our sponsor packet. </p>
            <a rel='nofollow' href='".base_url()."/sponsorpackets/UTSA Baja SAE Sponsorship Packet.pdf'> UTSA Baja Sponsorship </a><br>
            <a rel='nofollow' href='".base_url()."/sponsorpackets/UTSA Formula SAE Sponsorship Packet.pdf' > UTSA Formula SAE sponsorship </a>
			</div>
		</div>
		";





//echo "
   
//    <div id='places'>  </div>
   
//";



/*
		<iframe class = 'full-width' height='400' src='http://thestudentbookproject.org/Fundraiser/roadrunner-sae/'></iframe>
*/

$x = 0;

if ($lendaimond > 0){
$c = 0;
echo "		
		<!-- spons pics Daimond -->
		<div class='col-md-12 orange'>
        <br>
        <div class='full-width text-center'>
		Daimond Sponsors
        </div>
    ";
		//<div class = 'col-md-12' style = ' height:650px;'>
      
        
    foreach($sponsdaimond as $daimond ){
       
        if ( $c % 3 === 0 ){
            echo "<div class='row'>";

        } else if ( $c % 3 === 3){
            
            echo "</div>";
            echo "<br>";
            echo "<div class ='row'>";
            
        }
        
        echo "
            <div class= 'col-md-4' style='height:250px;'>
        
            <a id ='site".$x."' href='".$daimond."'></a> 

            </div>
        ";
        $c++;
        $x++;
    
    } 
        echo "</div>";
    
echo "
        <!-- this div below ends the daimond sponsors -->
        </div>
        ";
	}


if ($lenplatinum > 0){
$c = 0;
echo "		
		<!-- spons pics platinum -->
		<div class='col-md-12 orange'>
        <br>
        <div class='full-width text-center'>
		Platinum Sponsors
        </div>
    ";
	//	<div class = 'col-md-12' style = ' height:650px;'>
            
            
        
    foreach($sponsplatinum as $platinum ){
       
        if ( $c % 3 === 0 ){
            echo "<div class='row'>";

        } else if ( $c % 3 === 3){
            
            echo "</div>";
            echo "<br>";
            echo "<div class ='row'>";
            
        }
        
        echo "
            <div class= 'col-md-4' style='height:250px;'>
        
            <a id ='site".$x."' href='".$platinum."'></a> 

            </div>
        ";
        $c++;
        $x++;
    
    } 
        echo "</div>";
    
echo "
        <!-- this div below ends the platinum sponsors -->
        </div>
        ";
	}

if ($lengold > 0){
$c = 0;
echo "		
		<!-- spons pics gold -->
		<div class='col-md-12 orange'>
        <br>
        <div class='full-width text-center'>
		Gold Sponsors
        </div>
    ";
	//	<div class = 'col-md-12' style = ' height:650px;'>
            
            
        
    foreach($sponsgold as $gold ){
       
        if ( $c % 3 === 0 ){
            
            echo "<div class='row'>";

        } else if ( $c % 3 === 3){
            
            echo "</div>";
            echo "<br>";
            echo "<div class ='row'>";
            
        }
        
        echo "
            <div class= 'col-md-4' style='height:250px;'>
        
            <a id ='site".$x."' href='".$gold."'></a> 

            </div>
        ";
        $c++;
        $x++;
    
    } 
        echo "</div>";
    
echo "
        <!-- this div below ends the gold sponsors -->
        </div>
        ";
	}

    
if ($lensilver > 0){
$c = 0;
echo "		
		<!-- spons pics silver -->
		<div class='col-md-12 orange'>
        <br>
        <div class='full-width text-center'>
		Silver Sponsors
        </div>
        
    ";
	//	<div class = 'col-md-12' style = ' height:650px;'>
            
            
        
    foreach($sponssilver as $silver ){
       
        if ( $c % 3 === 0 ){
            echo "<div class='row'>";

        } else if ( $c % 3 === 3){
            
            echo "</div>";
            echo "<br>";
            echo "<div class ='row'>";
            
        }
        
        echo "
            <div class= 'col-md-4' style='height:250px;'>
        
            <a id ='site".$x."' href='".$silver."'></a> 

            </div>
        ";
        $c++;
        $x++;
    
    } 
        echo "</div>";

echo "
        <!-- this div below ends the silver sponsors -->
        </div>
        ";
	}

    
    
    
    if ($lenbronze > 0){
$c = 0;
echo "		
		<!-- spons pics platinum -->
		<div class='col-md-12 orange'>
        <br>
        <div class='full-width text-center'>
		Bronze Sponsors
        </div>
    ";
	//	<div class = 'col-md-12' style = ' height:650px;'>
            
            
        
    foreach($sponsbronze as $bronze ){
       
        if ( $c % 3 === 0 ){
            echo "<div class='row'>";

        } else if ( $c % 3 === 3){
            
            echo "</div>";
            echo "<br>";
            echo "<div class ='row'>";
            
        }
        
        echo "
            <div class= 'col-md-4' style='height:250px;'>
        
            <a id ='site".$x."' href='".$bronze."'></a> 

            </div>
        ";
        $c++;  
        $x++;
    
    } 
        echo "</div>";

    
    
    
echo "
        <!-- this div below ends the bronze sponsors -->
        </div>
        ";
	}





    echo "
    <!-- this div below ends the row -->
	</div>
    
    
<!-- this div below closes col-md-10 -->
</div>
";

?>

<style type="text/css">
    .embedspons {
        
        width:100% !important;
        height:150px !important;
    }

</style>

<script type='text/javascript'>

<?php

$x = 0;
foreach($sponsdaimond as $daimond ){
     
echo "$('#site".$x."').embedly();";
$x++;
    
}

foreach($sponsplatinum as $platinum ){

echo "$('#site".$x."').embedly();";
$x++;
    
}

foreach($sponsgold as $gold ){
   
echo "$('#site".$x."').embedly();";
$x++;
    
}

foreach($sponssilver as $silver ){
   
echo "$('#site".$x."').embedly();";
$x++;
    
}

foreach($sponsbronze as $bronze ){
   
echo "$('#site".$x."').embedly();";
$x++;
    
}


    ?>

    function change(){
     
     $('div .embed').each(function(){
         //$(' img').after("<br>");
         $(' img').attr("class","embedspons");
         //$('a').after("<br>");
         $('.provider').remove();
         $('.description').remove();
     }).after("<br>");
    
    }
    
    setTimeout(change,1000);
    
</script>


