<?php require_once('couch/cms.php' ); ?>
<cms:template title='Home Page' />
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>
		<cms:get_custom_field 'site_name' masterpage='globals.php' /> |
		<cms:get_custom_field 'site_desc' masterpage='globals.php' />
		</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/reset.css" />
	<link rel="stylesheet" href="css/styles.css" />
	
	<!-- Scripts -->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.roundabout-1.0.min.js"></script> 
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript">		
		$(document).ready(function() { //Start up our Featured Project Carosuel
			$('#featured ul').roundabout({
				easing: 'easeOutInCirc',
				duration: 600
			});
		});
	</script>  

	<!--[if IE 6]>
	<script src="js/DD_belatedPNG_0.0.8a-min.js"></script>
	<script>
	  /* EXAMPLE */
	  DD_belatedPNG.fix('.button');
	  
	  /* string argument can be any CSS selector */
	  /* .png_bg example is unnecessary */
	  /* change it to what suits you! */
	</script>
	<![endif]-->
</head>
<body>
	<div id="wrapper" class="container_12 clearfix">

		<!-- Text Logo -->
		<cms:embed 'header.php' />
		
		<!-- Navigation Menu -->
		<ul id="navigation" class="grid_8">
			<li><a href="<cms:Link 'contact.php' />"><cms:if k_template_name=='contact.php'>class="current"</cms:if><span class="meta">Get in touch</span><br />Contact Us</a></li>
			<li><a href="<cms:Link 'blog.php' />"><cms:if k_template_name=='blog.php'>class="current"</cms:if><span class="meta">Latest news</span><br />Blog</a></li>
			<li><a href="<cms:Link 'portfolio.php' />"><cms:if k_template_name=='portfolio.php'>class="current"</cms:if><span class="meta">Our latest work</span><br />Portfolio</a></li>
				
			<li><a href="<cms:Link 'about.php' />"><cms:if k_template_name=='about.php'>class="current"</cms:if><span class="meta">Who are we?</span><br />About</a></li>
			<li><a href="<cms:Link 'index.php' />" class="current"><cms:if k_template_name=='contact.php'>class="current"</cms:if><span class="meta">Homepage</span><br />Home</a></li>
		</ul>
		
		<div class="hr grid_12">&nbsp;</div>
		
		<!-- Caption Line -->
		<h2 class="grid_12 caption clearfix">
			<cms:get_custom_field 'home_caption' masterpage='globals.php' />
		</h2>
		
		<div class="clear"></div>
		
		<!-- Featured Image Slider -->
		<div id="featured" class="clearfix grid_12">
			<ul> 
				<cms:pages masterpage='portfolio.php' limit='5'>
				<li>
					<a href="<cms:show k_page_link />">
						<span>Read about this project</span>
						<img src="<cms:show image_1/>" alt="" />
					</a>
				</li> 
				</cms:pages>
			</ul> 
		</div>
		<div class="hr grid_12 clearfix">&nbsp;</div>
			
		<!-- Caption Line -->
		<h2 class="grid_12 caption clearfix">Welcome! This is <span>Aurelius</span>, a slick, professional <u>Business</u> &amp; <u>Portfolio</u> theme built to engage the user in your work.</h2>
		
		<div class="hr grid_12 clearfix quicknavhr">&nbsp;</div>
		<div id="quicknav" class="grid_12">
			<cms:editable name='box1_group' label='Box 1' type='group' />
			<a class="quicknavgrid_3 quicknav alpha" href="<cms:editable name='box1_link' label='Link' group='box1_group' type='text'>portfolio.html</cms:editable>">
				<h4 class="title ">
					<cms:editable name='box1_title' label='Title' group='box1_group' type='text'>Recent Work</cms:editable>
				</h4>
				<p>
					<cms:editable name='box1_text' label='Text' group='box1_group' type='textarea'>Cras vestibulum lorem et dui mollis sed posuere leo semper.</cms:editable>
				</p>
				<p style="text-align:center;"><img alt="" src="<cms:editable name='box1_image' label='Image' width='150' height='125' group='box1_group' type='image'>images/Art_Artdesigner.lv.png</cms:editable>" /></p>

			</a>
			<cms:editable name='box2_group' label='Box 2' type='group' />
			<a class="quicknavgrid_3 quicknav" href="<cms:editable name='box2_link' label='Link' group='box2_group' type='text'>about.html</cms:editable>">
				<h4 class="title ">
					<cms:editable name='box2_title' label='Title' group='box2_group' type='text'>Learn about us</cms:editable>
				</h4>
				<p>
					<cms:editable name='box2_text' label='Text' group='box2_group' type='textarea'>Cras vestibulum lorem et dui mollis sed posuere leo semper.</cms:editable>
				</p>
				<p style="text-align:center;"><img alt="" src="<cms:editable name='box2_image' label='Image' width='150' height='125' group='box2_group' type='image'>images/info.png</cms:editable>" /></p>

			</a>
			<cms:editable name='box3_group' label='Box 3' type='group' />
			<a class="quicknavgrid_3 quicknav" href="<cms:editable name='box3_link' label='Link' group='box3_group' type='text'>blog.html</cms:editable>">
				<h4 class="title ">
					<cms:editable name='box3_title' label='Title' group='box3_group' type='text'>Read our blog</cms:editable>
				</h4>
				<p>
					<cms:editable name='box3_text' label='Text' group='box3_group' type='textarea'>Cras vestibulum lorem et dui mollis sed posuere leo semper.</cms:editable>
				</p>
				<p style="text-align:center;"><img alt="" src="<cms:editable name='box3_image' label='Image' width='150' height='125' group='box3_group' type='image'>images/Blog_Artdesigner.lv.png</cms:editable>" /></p>

			</a>
			<cms:editable name='box4_group' label='Box 4' type='group' />
			<a class="quicknavgrid_3 quicknav lastelem" href="<cms:editable name='box4_link' label='Link' group='box4_group' type='text'>#</cms:editable>">
				<h4 class="title ">
					<cms:editable name='box4_title' label='Title' group='box4_group' type='text'>Follow on Twitter</cms:editable>
				</h4>
				<p>
					<cms:editable name='box4_text' label='Text' group='box4_group' type='textarea'>Cras vestibulum lorem et dui mollis sed posuere leo semper.</cms:editable>
				</p>
				<p style="text-align:center;"><img alt="" src="<cms:editable name='box4_image' label='Image' width='150' height='125' group='box4_group' type='image'>images/hungry_bird.png</cms:editable>" /></p>
			</a>
		</div>
		<div class="hr grid_12 clearfix">&nbsp;</div>
		<!-- Footer -->
		<p class="grid_12 footer clearfix">
			<span class="float"><b>&copy; Copyright</b> <a href="">QwibbleDesigns</a> - remove upon purchase.</span>
			<a class="float right" href="#">top</a>
		</p>
		
	</div><!--end wrapper-->
</body>
</html>
<?php COUCH::invoke();?>