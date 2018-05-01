<?php
// make sure to echo all this out when it is finalized

?>
	<style type="text/css">
	
	body
	{
       
		background-image:url(http://fc02.deviantart.net/fs30/f/2008/125/9/1/Black_Metal_by_twaysan.png) !important;
  		background-repeat:repeat;
        
	}
	
	.navlinks a {
		cursor:pointer;

	}



	.home_view_boxes button{
		width:100px;
		margin: 0px 0px 0px 20px;

	}


	.inline{

		display:inline !important;

	}
	.inline-block{
		display:inline-block !important;

	}


	.white{
		color:snow;	
	
	}
	.orange ,a:hover
	{
		color:darkorange !important;
	}
	
	.orange
	{
		color:darkorange !important;
	}
	.orange:hover{
		color:white !important;
	}	
	
	.borderblack
	{
		border:2px   solid  black !important;
	}
	
	
	.flex-video {
	  	position: relative;
	  	padding-top: 25px;
	  	padding-bottom: 67.5%;
	  	height: 0;
	  	margin-bottom: 16px;
	  	overflow: hidden;
	}
 
	.flex-video.widescreen { padding-bottom: 57.25%; }
	.flex-video.vimeo { padding-top: 0; }
 
	.flex-video iframe,
	.flex-video object,
	.flex-video embed {
	  	position: absolute;
	  	top: 0;
	  	left: 0;
	  	width: 100%;
	  	height: 100%;
	}
	@media only screen and (max-device-width: 800px), only screen and (device-width: 1024px) and (device-height: 600px), only screen and (width: 1280px) and (orientation: landscape), only screen and (device-width: 800px), only screen and (max-width: 767px) {
  		.flex-video { padding-top: 0; }
	}
/*	
	.weekmeet{
	width:100%;
	height:200px;
	border:2px black solid;
	padding:10px 10px 10px 10px;
	border-radius:30px 30px 30px 30px;
	background-color:#333333;
	background-color:rgba(0,0,0,0.2);
}
*/

.facebookpost{
	width:100%;
	min-height:410px;
	max-height:410px;
}

.googlemap{
	width:100%;
	height:300px;	
}

#googlemap {
	width:100%;
	max-height:300px;
	min-height:150px; 
	height:100%;
}

.googlecalendar {
	width:100%;
	height:500px;
}

#gcaliframe {
	height:476px;
	width:100%;
}

.tb{
	background-color:rgba(0,0,0,0.3);
}

.infobox-sm {
	width:150px;
	height:150px;	
}

.infobox-sm-higher-height-200px {
	height:200px !important;
}

.infobox-sm-wider-width-300px{
	width:300px !important;
}

.infobox-md {
	width:250px;
	height:250px;
}

.infobox-md-wider-width-300px{
	width:300px !important;
}

.infobox-bg {
	width:350px;
	height:350px;
}

.infobox-xbg {
	width:450px;
	height:450px;
}

.infobox-xbg-shorter-height-325px {
	height:325px !important;
}

.infobox-xbg-shorter-height-350px {
	height:350px !important;
}

.infobox-xbg-shorter-height-375px {
	height:375px !important;
}


.infobox-xbg-shorter-height-400px {
	height:400px !important;
}

.infobox-sm-width-stretch {
	height:150px;
	width:100%;
}

.infobox-smmd-width-stretch {
	height:200px;
	width:100%;
}

.infobox-md-width-stretch {
	height:250px;
	width:100%;
}

.center {
	margin:0 auto;
}

.left {
	margin:0 auto 0 0px;
}

.right {
	margin:0 0px 0 auto;
}


.colpadding-bottom{
	padding-bottom:10px;
}

.textpadding-left{
    padding-left:10px;   
}

.textpadding {
	padding:15px 15px 10px 15px;
}

.textalign-center {
	text-align:center;
}

.fontsize-small{
	font-size:small;
}

.fontsize-large{
	font-size:large;
}

.fontsize-xlarge {
	font-size:x-large;
}

.padding-10px {
	padding:10px 10px 10px 10px;
}

.full-height{
	height:100%;
}

.full-width {
	width:100%;
}

.min-height{
	min-height:668px;
}

.underline{
	text-decoration:underline;
}

.height-285px {
	height:285px;
}

.margin-top-10px{

	margin-top:10px;
}

.margin-bottom-10px {
	margin-bottom:10px;
}

.marginleft-8pc{
	margin-left:8%;
}

.marginright-8pc{
	margin-right:8%;
}


.teamblock {
	height:300px;
}


@media screen and (max-width:992px){
	.teamblock {
		height:400px !important;
		margin-top:40px !important;
		margin-bottom:10px !important;
	}
	.teampic{
		height:295px !important;
	}
	.teampic, img{
		margin-top:5px !important;
	}
	.teampicinfo{
		height:170px !important;
		margin-bottom:5px !important;
	}
	.teampicinfobox {
		height:100% !important;
		margin-top:10px !important;
		margin-bottom:10px !important;
	}
}

.carblock{
	height:300px;
	
}
@media screen and (max-width:992px) and (min-width:400px){
	.carblock {
		height:550px;
	}
	.carblockpic {
		height:150px !important;
	}
	.carblockpic div {
		height:0px !important;
	}
	.carblockpic img {
		margin-top:10px !important;
	}
	
	.carblockinfo{
		height:400px !important;
	}
	.carblockinfo div {
		height:400px !important;			
	}
	
}

@media screen and (max-width:400px) {
	.carblock {
		height:700px;
	}
	.carblockpic {
		height:150px !important;
	}
	.carblockpic div {
		height:0px !important;
	}
	.carblockpic img {
		margin-top:10px !important;
	}
	
	.carblockinfo{
		height:500px !important;
	}
	.carblockinfo div {
		height:500px !important;			
	}
	
}

@media screen and (max-width:992px) and (min-width:400px){
	#aboutfirstbox {
		width:100% !important;
		height:475px !important;
	}		
}



@media screen and (max-width:400px){
	#aboutfirstbox {
		width:100% !important;
		height:700px !important;
	
	}		
}

@media screen and (min-width:400px) and (max-width:992px) {
	.specialthanks{
		height:250px !important;
		
	}
	footer {
		position:absolute !important;
		margin-bottom:-2500px !important;
		width:100% !important; 
		
	}
}

@media screen and (max-width:400px) {
	.specialthanks{
		height:250px !important;
		
	}
	footer {
		position:absolute !important;
		margin-bottom:-2000px !important;
		width:100% !important; 
		
	}
}
        
@media screen and (min-width:400px) and (max-width:992px){
    #albumtitle {
        @extend .col-md-6;    
    }
    #albumbutton {
        @extend .col-md-6;   
    }
    
}
        
@media screen and (max-width:400px){
    #albumtitle {
        @extend .col-md-6;    
    }
    #albumbutton {
        @extend .col-md-6;   
    }
    
}

@media screen and (min-width:992px){
   
    #albumtitle {
      height:50px;
    }
    
}

@media screen and (min-width:400px) and (max-width:992px){
    #homebg {
        display:none;    
    }
    
}
        
@media screen and (max-width:400px){
    #homebg {
        display:none;    
    }
    
}

        
        
        
</style>

<!-- bootstrap container -->
<div class="container" >	

<!-- bootstrap row to make everything follow in order from top to bottom -->
<div class="row"> 

