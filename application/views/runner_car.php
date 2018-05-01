<?php
$cars = $this->rrmodel->get_all_cars();
$burl = base_url();
echo "
<div class='col-md-10 marginleft-8pc marginright-8pc'>
<div class='row'>
";


foreach ($cars as $car){
    echo "
        <!--Car #1-->
	<div class='carblock'>
		
		<!--Column For Picture-->
		<div class='carblockpic col-md-6 full-height' >
		<div class='row full-width' style='height:30%;'>
				<!--Just an Empty Space-->
		</div>
				<!--Place Picture Here-->
				<img class = 'img-responsive full-width' style=' height:132px;' src='$burl$car->photofile' alt='Image description' title=''>		
		</div>
		<!--Column For Informaion-->
		<div class='col-md-6 carblockinfo full-height' >
			<div class='row tb borderblack full-width full-height textpadding' style='margin-left:5px;'>
				<p class='orange fontsize-large' >
					<!--Year--><br>$car->year Car Specs				</p>
				<p class='white fontsize-small' >					
					<!--Information-->Competed at $car->compete<br>
									Weight: $car->weight lbs<br>
									Engine: $car->engine <br>
									Drivetrain: $car->drivetrain<br>
									Suspension: $car->suspension<br>
									Wheels: $car->wheels
									<br>
									"; if ($car->majorchanges === ''){ echo "<br>"; } else { echo "Major Changes: $car->majorchanges<br>"; } echo " 
				</p>					
			</div>
		</div>
	
	</div>
	<br>
	<br>
    
    ";
    
}

echo "
	<!-- this div below ends the row -->
	</div>
<!-- this div below ends col-md-10 --> 
</div>


";
/*
echo "
<div class='col-md-10 marginleft-8pc marginright-8pc'>
<div class='row'>

	<!--Car #1-->
	<div class='carblock'>
		
		<!--Column For Picture-->
		<div class='carblockpic col-md-6 full-height' >
		<div class='row full-width' style='height:30%;'>
				<!--Just an Empty Space-->
		</div>
				<!--Place Picture Here-->
				<img class = 'img-responsive full-width' style=' height:132px;' src='http://www.hgsitebuilder.com/files/writeable/uploads/hostgator538714/image/2013small.jpg' alt='Image description' title=''>		
		</div>
		<!--Column For Informaion-->
		<div class='col-md-6 carblockinfo full-height' >
			<div class='row tb borderblack full-width full-height textpadding' style='margin-left:5px;'>
				<p class='orange fontsize-large' >
					<!--Year--><br>2013 Car Specs				</p>
				<p class='white fontsize-small' >					
					<!--Information-->Competed at Lincoln - Placed 52nd<br>
									Weight: 441 lbs<br>
									Engine: Kawasaki KFX 450R - Microsquirt<br>
									31.6 hp<br>
									28.8 ft*lbs<br>
									Drivetrain: Torsen Differential with a custom aluminum housing.<br>
									Suspension: F Pushrod and R Pullrod with Tanner shocks<br>
									Wheels: 10' Kaiser Aluminum wheels<br>
									<br>
									Major Changes: Complete redesign with a fresh perspective with thought towards the future.
				</p>					
			</div>
		</div>
	
	</div>
	<br>
	<br>
	<!--Car #2-->
	<div class='carblock' >
		
		<!--Column For Picture-->
		<div class='carblockpic col-md-6 full-height'>
		<div class='row full-width' style='height:30%;'>
				<!--Just an Empty Space-->
		</div>
				<!--Place Picture Here-->
				<img style='width:100%; height:132px;' src='http://www.hgsitebuilder.com/files/writeable/uploads/hostgator538714/image/2011p.jpg' alt='Image description' title=''>		</div>
		<!--Column For Informaion-->
		<div class='carblockinfo col-md-6 full-height'>
			<div class='row tb borderblack full-width full-height textpadding' style='margin-left:5px;'>
				<p class='orange fontsize-large' >
					<!--Year--><br>2011 Car Specs				</p>
				<p class='white fontsize-small' >					
					<!--Information-->	Competed at Michigan - Placed 92nd<br>
										Weight: 404 lbs<br>
										Engine: KTM 560SMR<br>
										Custom EFI controlled by a custom student designed ECU<br>
										Drivetrain: Custom Steel Spool<br>
										Suspension: F+R Pushrod with Penske shocks<br>
										Wheels: 13' Jongbloed custom wheels<br>
										 <br>
										Major Changes: UTSA Roadrunner Racing's first one year build.			</p>					
			</div>
		</div>
	
	</div>
	<br>
	<br>
	
	<!--Car #3-->
	<div class='carblock'>
		
		<!--Column For Picture-->
		<div class='carblockpic col-md-6 full-height' >
		<div class='row full-width' style=' height:30%;'>
				<!--Just an Empty Space-->
		</div>
				<!--Place Picture Here-->
				<img class = 'img-responsive full-width' style=' height:132px;' src='http://www.hgsitebuilder.com/files/writeable/uploads/hostgator538714/image/car1.jpg' alt='Image description' title=''>		</div>
		<!--Column For Informaion-->
		<div class='carblockinfo col-md-6 full-height' >
			<div class='row tb borderblack full-width full-height textpadding' style=' margin-left:5px;'>
				<p class='orange fontsize-large' >
					<!--Year--><br>2010 Car Specs
				</p>
				<p class='white fontsize-small' >					
					<!--Information-->	Competed at California - Placed 53rd<br>
										<br>Weight: 389 lbs
										<br>Engine: KTM 560SMR
										<br>Custom EFI controlled by a custom student designed ECU
										<br>Pneumatic computer controlled paddle shifters
										<br>Drivetrain: Custom Steel Spool
										<br>Suspension: F+R Pushrod with Penske shocks
										<br>Wheels: 13' Jongbloed custom wheels
										<br> 
										Major Changes: car moved from four cylinder to single cylinder engine,  Custom ECU and Pneumatic Paddle Shifters<br>
				</p>					
			</div>
		</div>
	
	</div>
	<br>
	<br>
	
	<!--Car #4-->
	<div class='carblock' >
		
		<!--Column For Picture-->
		<div class='carblockpic col-md-6 full-height' >
		<div class='row full-width' style='height:30%;'>
				<!--Just an Empty Space-->
		</div>
				<!--Place Picture Here-->
				<img class = 'img-responsive full-width' style=' height:132px;' src='http://www.hgsitebuilder.com/files/writeable/uploads/hostgator538714/image/2008v.jpg' alt='Image description' title=''>		</div>
		<!--Column For Informaion-->
		<div class='carblockinfo col-md-6 full-height' style=' '>
			<div class='row tb borderblack full-width full-height textpadding' style=' margin-left:5px;'>
				<p class='orange fontsize-large' >
					<!--Year--><br>2008 Car Specs				</p>
				<p class='white fontsize-small' >					
					<!--Information-->	Competed at California - Placed 28th
										<br>Weight: 479 lbs
										<br>Engine: Honda F4i 600
										<br>Performance Electronics ECU
										<br>Drivetrain: Custom housed Torsen Differential
										<br>Suspension: Pullrod front suspension, pushrod rear suspension with Tanner shocks
										<br>Wheels: 13' BBS Magnesium wheels				</p>					
			</div>
		</div>
	
	</div>
	<br>
	<br>
	
	<!-- this div below ends the row -->
	</div>
<!-- this div below ends col-md-10 --> 
</div>

";

*/

?>