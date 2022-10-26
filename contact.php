<?php require_once('couch/cms.php' ); ?>
<cms:template title='Contact Us' >
	
	<cms:editable name='group_social' label='Social Profiles' desc='Your accounts on Social sites' type='group' />
	<cms:editable name='twitter_id' label='Your Twitter ID' group='group_social' type='text' />
	<cms:editable name='facebook_id' label='Your Facebook ID' group='group_social' type='text' />
	<cms:editable name='stumbleupon_id' label='Your StumbleUpon ID' group='group_social' type='text' />
	<cms:editable name='flickr_id' label='Your Flickr ID' group='group_social' type='text' />
	<cms:editable name='delicious_id' label='Your Delicious ID' group='group_social' type='text' />

</cms:template>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Aurelius | Contact Us</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/reset.css" />
	<link rel="stylesheet" href="css/styles.css" />
	
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
		<h1 id="logo" class="grid_4">Aurelius</h1>
		
		<!-- Navigation Menu -->
			<ul id="navigation" class="grid_8">
			<li><a href="<cms:Link 'contact.php' />"><span class="current">Get in touch</span><br />Contact Us</a></li>
			<li><a href="<cms:Link 'blog.php' />"><span class="meta">Latest news</span><br />Blog</a></li>
			<li><a href="<cms:Link 'portfolio.php' />"><span class="meta">Our latest work</span><br />Portfolio</a></li>
				
			<li><a href="<cms:Link 'about.php' />"><span class="meta">Who are we?</span><br />About</a></li>
			<li><a href="<cms:Link 'index.php' />" class="meta"><span class="meta">Homepage</span><br />Home</a></li>
		</ul>
			
		<div class="hr grid_12 clearfix">&nbsp;</div>
			
		<!-- Caption Line -->
		<h2 class="grid_12 caption clearfix">Enjoyed looking at our work? Don't hesitate to <span>contact us</span>!</h2>
		
		<div class="hr grid_12 clearfix">&nbsp;</div>

		<!-- Column 1 / Content -->
		<div class="grid_8">
			<cms:editable name='contact_intro' label='Introductory text' type='richtext'>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vel porta erat. Quisque sit amet risus at odio pellentesque sollicitudin. Proin suscipit molestie facilisis. Aenean vel massa magna. Proin nec lacinia augue. Mauris venenatis libero nec odio viverra consequat. In hac habitasse platea dictumst.</p>
			</cms:editable>
			
			<!-- Contact Form -->
			<cms:form action='' method='post' id='contact_form'>
					<h3>Contact Form</h3>
				<div class="hr dotted clearfix">&nbsp;</div>
				<ul>						
					<li class="clearfix"> 
						<label for="name">Name</label>
						<cms:input type='text' name='name' id='name' required='1' />
						<div class="clear"></div>
						<cms:if k_error_name>
							<p id='name_error' class='error' style="display:block" >Insert a Name</p>
						</cms:if>
					</li> 
					<li class="clearfix"> 
						<label for="email">Email Address</label>
						<cms:input type='text' name='email' id='email' required='1' validator='email'/>
						<div class="clear"></div>
						<cms:if k_error_email>
							<p id='email_error' class='error' style="display:block" >Enter a valid email address</p>
						</cms:if>
					</li> 
					<li class="clearfix"> 
						<label for="subject">Subject</label>
						<cms:input type='text' name='subject' id='subject' required='1' />
						<div class="clear"></div>
						<cms:if k_error_subject>
							<p id='subject_error' class='error' style="display:block" >Enter a message subject</p>
						</cms:if>
					</li> 
					<li class="clearfix"> 
						<label for="message">Message</label>
						<cms:input type='textarea' name='message' id='message' rows="30" cols="30" required='1'></cms:input>
						<div class="clear"></div>
						<cms:if k_error_message>
							<p id='message_error' class='error' style="display:block" >Enter a message</p>
						</cms:if>
					</li> 
					<li class="clearfix"> 
					
					<cms:if k_success>
						<p id='mail_success' class='success' style="display:block" >Thank you. I'll get back to you as soon as possible.</p>
					
					<cms:send_mail from=k_email_from to=k_emial_to subject='Feedback from your site'>
								The following is an email sent by a visitor to your site:
								<cms:show k_success />
							</cms:send_mail>
					</cms:if>
					<p id='mail_fail' class='error'>Sorry, an error has occured. Please try again later.</p>
					<div id="button">
					<input type='submit' id='send_message' class="button" value='Submit' />
					</div>
					</li> 
				</ul> 
				</cms:form>
		</div>
		
		<!-- Column 2 / Sidebar -->
		<cms:editable name='contact_details' label='COntact Details' type='richtext'>
		<div class="grid_4 contact">
		
			<!-- Adress and Phone Details -->
			<h4>Address and Phone</h4> 
			<div class="hr dotted clearfix">&nbsp;</div>
			<ul> 
				<li> 
					<strong>Your Company Name</strong><br /> 
					1458 Sample Road, Redvalley<br /> 
					City (State) H4Q 1J7<br /> 
					Country<br /><br /> 
				</li> 
				<li>USA - (888) 888-8888</li> 
				<li>Worldwide - (888) 888-8888</li> 
			</ul> 
			
			<!-- Email Addresses -->
			<h4>Emails</h4> 
			<div class="hr dotted clearfix">&nbsp;</div>
			<ul> 
				<li>General - <a href="mailto:info@yourcompany.com">info@yourcompany.com</a></li> 
				<li>Sales - <a href="mailto:sales@yourcompany.com">sales@yourcompany.com</a></li> 
			</ul> 
			</cms:editable>
			
			<!-- Social Profile Links -->
			<cms:capture into='profiles_output' >
			<h4>Social Profiles</h4> 
			<div class="hr dotted clearfix">&nbsp;</div>
			<ul> 
				<cms:if "<cms:not_empty twitter_id />">
				<li class="float"><a href="<cms:show twitter_id />"><img alt="" src="images/twitter.png" title="Twitter" /></a></li> 
				<cms:set has_profile='1' 'global' />
				</cms:if>
				
				<cms:if "<cms:not_empty facebook_id />">
				<li class="float"><a href="<cms:show facebook_id />"><img alt="" src="images/facebook.png" title="Facebook" /></a></li> 
				<cms:set has_profile='1' 'global' />
				</cms:if>
				
				<cms:if "<cms:not_empty stumbleupon_id />">
				<li class="float"><a href="<cms:show stumbleupon_id />"><img alt="" src="images/stumbleupon.png" title="StumbleUpon" /></a></li> 
				<cms:set has_profile='1' 'global' />
				</cms:if>
				
				<cms:if "<cms:not_empty flickr_id />">
				<li class="float"><a href="<cms:show flickr_id />"><img alt="" src="images/flickr.png" title="Flickr" /></a></li> 
				<cms:set has_profile='1' 'global' />
				</cms:if>
				
				<cms:if "<cms:not_empty delicious_id />">
				<cms:set has_profile='1' 'global' />
				<li class="float"><a href="<cms:show delicious_id />"><img alt="" src="images/delicious.png" title="Delicious" /></a></li> 
				</cms:if>
				
			</ul> 
			</cms:capture>
			
			<cms:if has_profile>
				<cms:show profiles_output />
			</cms:if>
			
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