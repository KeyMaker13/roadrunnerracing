<?php
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Roadrunner racing</title>	
	<!-- meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
		
	<!-- css links -->
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.css" rel="stylesheet" media="all" type="text/css"/> 

	<!-- javascript files -->
	<!-- This is the original jquery to use the rest of the libraries -->
    <script src="http://code.jquery.com/jquery-2.0.3.js" type="text/javascript"></script>
	
    
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.js" type="text/javascript"></script>
  
    <!-- fancybox -->
    
    <!-- Add mousewheel plugin (this is optional) -->
    <script type="text/javascript" src="<?php echo base_url();?>/fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>

    <!-- Add fancyBox -->
    <link rel="stylesheet" href="<?php echo base_url();?>/fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
    <script type="text/javascript" src="<?php echo base_url();?>/fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>

    <!-- Optionally add helpers - button, thumbnail and/or media -->
    <link rel="stylesheet" href="<?php echo base_url();?>/fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
    <script type="text/javascript" src="<?php echo base_url();?>/fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
    <script type="text/javascript" src="<?php echo base_url();?>/fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

    <link rel="stylesheet" href="<?php echo base_url();?>/fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
    <script type="text/javascript" src="<?php echo base_url();?>/fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
    
    
 
    <!-- This is to get embeldy to embed a photo and display information -->
    
        <!-- Platform.js -->
    <!--
    <script type="text/javascript">
      (function(w, d){
       var id='embedly-platform', n = 'script';
       if (!d.getElementById(id)){
         w.embedly = w.embedly || function() {(w.embedly.q = w.embedly.q || []).push(arguments);};
         var e = d.createElement(n); e.id = id; e.async=1;
         e.src = ('https:' === document.location.protocol ? 'https' : 'http') + '://cdn.embedly.com/widgets/platform.js';
         var s = d.getElementsByTagName(n)[0];
         s.parentNode.insertBefore(e, s);
       }
      })(window, document);
     
      // This is the important line. You will need to insert your API KEY here.
      embedly('analytics', {key: '<4caef9e5d6eb45a981f818dfc8f88e72>'});
    </script>
    -->
       <!-- Handlebars -->
    
    <!--
    <script type="text/javascript" src="<?php //echo base_url();?>/js/handlebars.js"></script>
    -->
    <!-- JQuery Preview -->
    
    <!--
    <script src="http://cdn.embed.ly/jquery.embedly-3.0.5.min.js" type="text/javascript"></script>
  <script src="http://cdn.embed.ly/jquery.preview-0.3.2.min.js" type="text/javascript"></script>
  <link rel="stylesheet" href="http://cdn.embed.ly/jquery.preview-0.3.2.css" />
    -->

<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js" type="text/javascript"></script> -->
  <script src="http://cdn.embed.ly/jquery.embedly-3.1.1.min.js" type="text/javascript"></script>
  
    
  <script src="http://cdn.embed.ly/jquery.preview-0.3.2.min.js" type="text/javascript"></script>
  <link rel="stylesheet" href="http://cdn.embed.ly/jquery.preview-0.3.2.css" />
  <script type="text/javascript" src='js/handlebars.js'>  </script>

<!-- import from file -->
    <script>
    $.embedly.defaults.key = '4caef9e5d6eb45a981f818dfc8f88e72';

        
     </script>
</head>
<body>



