<?php
$allteam = $this->rrmodel->get_all_members();
$burl = base_url();

echo "
<div class='col-md-10 marginleft-8pc marginright-8pc'>
<div class='row'>
";
foreach ($allteam as $member){
        echo "
        	<!--Person #1-->
	<div class='teamblock'>
		
		<!--Column For Picture-->
		<div class='col-md-4 teampic full-height' >
				<!--Place Picture Here-->
				<img class = 'img-responsive full-width' style='height:283px;' src='$burl$member->memberpicture' alt='Image description' title=''>
		</div>
		<!--Column For Informaion-->
		<div class='col-md-8 teampicinfo full-height' >
			
			<div class='row tb borderblack teampicinfobox textpadding center full-width' style='height:100px; margin-top:20%;'>
				<p class='orange fontsize-large' >
					<!--Name-->$member->membername
				</p>
				<p class='white fontsize-small' >
					<!--Information-->
					<!--Position-->$member->memberposition
					<br><!--Major-->$member->membermajor
				</p>					
			</div>
		</div>
	
	</div>
	<br>
	<br>
        
        ";
}

echo "
</div>
</div>
";

/*
echo "

<div class='col-md-10 marginleft-8pc marginright-8pc'>
<div class='row'>

	<!--Person #1-->
	<div class='teamblock'>
		
		<!--Column For Picture-->
		<div class='col-md-4 teampic full-height' >
				<!--Place Picture Here-->
				<img class = 'img-responsive full-width' style='height:283px;' src='http://files.hgsitebuilder.com/hostgator538714/image/davidsmall.jpg' alt='Image description' title=''>
		</div>
		<!--Column For Informaion-->
		<div class='col-md-8 teampicinfo full-height' >
			
			<div class='row tb borderblack teampicinfobox textpadding center full-width' style='height:100px; margin-top:20%;'>
				<p class='orange fontsize-large' >
					<!--Name-->David Cormier
				</p>
				<p class='white fontsize-small' >
					<!--Information-->
					<!--Position-->President - 3 years
					<br><!--Major-->Mechanical Engineering Major
				</p>					
			</div>
		</div>
	
	</div>
	<br>
	<br>
	<!--Person #2-->
	<div class='teamblock' >
		<!--Column For Picture-->
		<div class='col-md-4 teampic full-height' >
				<!--Place Picture Here-->
				<img class = 'img-responsive full-width' style='height:285px;' src='http://files.hgsitebuilder.com/hostgator538714/image/jacobsmall.jpg' alt='Image description' title=''>		
		</div>
		<!--Column For Informaion-->
		<div class='col-md-8 teampicinfo full-height' >
			
			<div class='row tb borderblack teampicinfobox textpadding center full-width' style=' height:100px; margin-top:20%;'>
				<p class='orange fontsize-large' >
					<!--Name-->Jacob Goodale	
								
								
				</p>
				<p class='white fontsize-small' >
					<!--Information-->
					<!--Position-->Design Lead - 4 years
					<br><!--Major-->Mechanical Engineering Major
				</p>					
			</div>
		</div>
	</div>
	<br>
	<br>
	
	<!--Person #3-->
	<div class='teamblock' >		
		<!--Column For Picture-->
		<div class='col-md-4 teampic full-height' >
				<!--Place Picture Here-->
				<img class = 'img-responsive full-width' style=' height:285px;' src='http://files.hgsitebuilder.com/hostgator538714/image/krissmall.jpg' alt='Image description' title=''>
		</div>
		<!--Column For Informaion-->
		<div class='col-md-8 teampicinfo full-height' >

			<div class='row tb borderblack teampicinfobox textpadding center full-width' style=' height:100px; margin-top:20%;'>
				<p class='orange fontsize-large' >
					<!--Name-->Kristopher Boyle
				</p>
				<p class='white fontsize-small' >
					<!--Information-->
					<!--Position-->Construction Lead - 3 years
					<br><!--Major-->Mechanical Engineering Major
				</p>					
			</div>
		</div>
	</div>
	<br>
	<br>
	
	<!--Person #4-->
	<div class='teamblock' >
		<!--Column For Picture-->
		<div class='col-md-4 teampic full-height' >
				<!--Place Picture Here-->
		</div>
		<!--Column For Informaion-->
		<div class='col-md-8 teampicinfo full-height' >
			
			<div class='row tb borderblack teampicinfobox textpadding center full-width' style=' height:100px; margin-top:20%;'>
				<p class='orange fontsize-large' >
					<!--Name-->Job Macias
				</p>
				<p class='white fontsize-small' >
					<!--Information-->
					<!--Position-->Engine Lead - 2 years
					<br><!--Major-->Mechanical Engineering Major
				</p>					
			</div>
		</div>
	</div>
	<br>
	<br>
	
	<!-- this div below ends the row -->
	</div>
<!-- this div below ends col-md-10 --> 
</div>
<br>
";

*/
?>