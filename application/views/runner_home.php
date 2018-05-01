<?php $burl = base_url(); $homeimage = $this->rrmodel->get_home_image(); 
echo "<img id = 'homebg' src='".$burl.$homeimage."' alt='bgimg' style='position:absolute;z-index:0;left:0px;right:0px;top:0%;height:500px;width:100%;' >";
?>
<?php  

echo "
<div class = 'col-md-8' >
<div class = 'row padding-10px' >

	<img class='img-responsive margin-bottom-10px' alt='Responsive image' src='http://www.hgsitebuilder.com/files/writeable/uploads/hostgator538714/image/rrrlogo2.png'>
	
	
	
	<div class='facebookpost tb padding-10px borderblack'>
		<iframe src='//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fpages%2FRoadRunner-Racing-UTSA%2F114375208642109&amp;width=590&amp;height=395&amp;show_faces=false&amp;colorscheme=dark&amp;stream=true&amp;border_color&amp;header=false' scrolling = 'no' frameborder = '0' style = 'border:none; overflow:hidden; width:100%; max-height:395px; min-height:395px;' allowtransparency = 'true' ></iframe>
	</div>
    
    <div class='flex-video widescreen'>   
	"; 
	$vid = $this->rrmodel->get_youtube();
	echo "".$vid[0]->link;

echo "
	</div>
    
    
    
<!-- this /div below ends the row -->
</div>	
</div>

<div class='col-md-4' >
<div class='row padding-10px' >

<div class='infobox-md tb borderblack textpadding center margin-bottom-10px'>
<p class='orange textalign-center fontsize-xlarge'> Weekly Meeting </p>
<p class='white' >
Our meetings are weekly on Wednesdays at 7:00 p.m. in the Engineering Machine Shop. Feel free to come by, meet the team and see what we are up to. Parking is located close to the shop.
</p>
</div>

<div class='googlemap flex-video'>
    ";

echo "
<iframe src='https://www.google.com/maps/d/embed?mid=zqGZn8zgnO-k.keWpETTiwW30'></iframe>
";

echo "
</div>

<!-- look at the googlecalendar css property to see how to position the iframe -->

<div class='googlecalendar tb borderblack padding-10px'>
<iframe id='gcaliframe' src='https://www.google.com/calendar/embed?src=roadrunnerracing%40gmail.com&ctz=America/Chicago'
scrolling='no'></iframe></div>

<!-- this /div below ends the row -->
</div>
</div>		
";	
?>	
