<?php require_once( 'couch/cms.php' ); ?>
<cms:template title='Blog' clonable='1' commentable='1'>
	<cms:editable name='blog_content' type='richtext' />
	
	<cms:editable name='blog_image'
		crop='1'
		width='610'
		height='150'
		type='image'
	/>
	<cms:folder name="philosophy" title="Philosophy" />
	<cms:folder name="history" title="History" />
	<cms:folder name="jobs" title="Jobs" />
	<cms:folder name="staff" title="Staff" />
	<cms:folder name="clients" title="Clients" />
</cms:template>
<cms:if k_is_page >
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Aurelius | Blog</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/reset.css" />
	<link rel="stylesheet" href="css/styles.css" />
	<!-- Scripts -->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"></script>
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
			<li><a href="<cms:Link 'contact.php' />"><span class="meta">Get in touch</span><br />Contact Us</a></li>
			<li><a href="<cms:Link 'blog.php' />"><span class="current">Latest news</span><br />Blog</a></li>
			<li><a href="<cms:Link 'portfolio.php' />"><span class="meta">Our latest work</span><br />Portfolio</a></li>
				
			<li><a href="<cms:Link 'about.php' />"><span class="meta">Who are we?</span><br />About</a></li>
			<li><a href="<cms:Link 'index.php' />" class="meta"><span class="meta">Homepage</span><br />Home</a></li>
		</ul>
		
		<div class="hr grid_12 clearfix">&nbsp;</div>
			
		<!-- Caption Line -->
		<h2 class="grid_12 caption clearfix">Our <span>blog</span>, keeping you up-to-date on our latest news.</h2>
		
		<div class="hr grid_12 clearfix">&nbsp;</div>
		
		<!-- Column 1 /Content -->
		<div class="grid_8">
			
			<!-- Blog Post -->
			<cms:pages masterpage='blog.php' 
						folder=k folder name 
						start_on=k_archive_date
						stop_before=k_next_archive_date
						pagnate='1' 
						limit='3' >
			<div class="post">
				<!-- Post Title -->
				<h3 class="title"><a href="<cms:show k_page_link />"><cms:show k_page_title /></a></h3>
				<cms:if k_page_foldertitle >
					<cms:set my_category=k_page_foldertitle />
				<cms:else />
					<cms:set my_category='Uncategorised' />
				</cms:if>
				
				<p class="sub"><a href="#">
							<cms:show my_category />
						</a> &bull;
						<cms:date k_page_date format='jS M, y' /> &bull; <a href="#">
							<cms:show k_comments_count /> Comments
						</a>
					</p>
				
				<!-- Post Data -->
				<p class="sub"><a href="#"><cms:show my_category /></a> &bull; <cms:date k_page_date format='jS M, y'/> &bull; <a href="#"><cms:show k_commnets_count />Comment</a></p>
				<div class="hr dotted clearfix">&nbsp;</div>
				<!-- Post Image -->
				<img class="thumb" src="<cms:show blog_image />" alt=""/>
				<!-- Post Content -->
				<cms:excerptHTML count='75' ignore='img'><cms:show blog_content /></cms:excerptHTML>
				
				<!-- Post Links -->
					<p class="clearfix">
						<a href="<cms:link masterpage='blog.php'/>" class="button float">&lt;&lt; Back to Blog</a>
						<a href="#commentform" class="button float right">Discuss this post</a>
					</p>
				
				<!-- Read More Button -->
				<p class="clearfix"><a href="<cms:show k_page_link />" class="button right"> Read More...</a></p>
			</div>
			<div class="hr clearfix">&nbsp;</div>
			</cms:pages >
			
			<!-- Blog Post -->
			<div class="post">
				<!-- Post Title -->
				<h3 class="title"><a href="single.html">Loreum ipsium massa cras phasellus</a></h3>
				<!-- Post Data -->
				<p class="sub"><a href="#">News</a>, <a href="#">Products</a> &bull; 31st Sep, 09 &bull; <a href="#">1 Comment</a></p>
				<div class="hr dotted clearfix">&nbsp;</div>
				<!-- Post Image -->
				<img class="thumb" alt="" src="images/610x150.gif" />
				<!-- Post Content -->
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <b>Mauris vel porta erat.</b> Quisque sit amet risus at odio pellentesque sollicitudin. Proin suscipit molestie facilisis. Aenean vel massa magna. Proin nec lacinia augue. Mauris venenatis libero nec odio viverra consequat. In hac habitasse platea dictumst.</p>
				<p>Cras vestibulum lorem et dui mollis sed posuere leo semper. Integer ac ultrices neque. Cras lacinia orci a augue tempor egestas. Sed cursus, sem ut vehicula vehicula, ipsum est mattis justo, at volutpat nibh arcu sit amet risus. Vestibulum tincidunt, eros ut commodo laoreet, arcu eros ultrices nibh, ac auctor est dui vel nibh.</p>
				<!-- Read More Button -->
				<p class="clearfix"><a href="single.html" class="button right"> Read More...</a></p>
			</div>
			<div class="hr clearfix">&nbsp;</div>
			
			<!-- Blog Post -->
			<cms:pages masterpage='blog.php' >
			<div class="post">
				<!-- Post Title -->
				<h3 class="title"><a href="single.html">Loreum ipsium massa cras phasellus</a></h3>
				<!-- Post Data -->
				<p class="sub"><a href="#">News</a>, <a href="#">Products</a> &bull; 31st Sep, 09 &bull; <a href="#">1 Comment</a></p>
				<div class="hr dotted clearfix">&nbsp;</div>
				<!-- Post Image -->
				<img class="thumb" alt="" src="images/610x150.gif" />
				<!-- Post Content -->
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <b>Mauris vel porta erat.</b> Quisque sit amet risus at odio pellentesque sollicitudin. Proin suscipit molestie facilisis. Aenean vel massa magna. Proin nec lacinia augue. Mauris venenatis libero nec odio viverra consequat. In hac habitasse platea dictumst.</p>
				<p>Cras vestibulum lorem et dui mollis sed posuere leo semper. Integer ac ultrices neque. Cras lacinia orci a augue tempor egestas. Sed cursus, sem ut vehicula vehicula, ipsum est mattis justo, at volutpat nibh arcu sit amet risus. Vestibulum tincidunt, eros ut commodo laoreet, arcu eros ultrices nibh, ac auctor est dui vel nibh.</p>
				<!-- Read More Button -->
				<p class="clearfix"><a href="single.html" class="button right"> Read More...</a></p>
			</div>
			<div class="hr clearfix">&nbsp;</div>
			
				<!-- Comment's List -->
				<h3>Comments</h3>
				<div class="hr dotted clearfix">&nbsp;</div>
				<cms:if k_comments_count>
					<ol class="commentlist">
						<cms:comments page_id=k_page_id order='asc' limit='3' paginate='1'>
							<li class="comment">
								<div class="gravatar">
									<cms:gravatar email='<cms:show k_comment_author_email/>' size='60' />
									<a name='<cms:show k_comment_author/>'>
										<!-- <img alt="" src='images/gravatar.png' height='48' width='48' />
							<a class="comment-reply-link" href=''>Reply</a>      -->
								</div>
								<div class="comment_content">
									<div class="clearfix">
										<cite class="author_name"><a href="">
												<cms:show k_comment_author />
											</a></cite>
										<div class="comment-meta commentmetadata">
											<cms:date k_comment_date format='F j, Y' />
										</div>
									</div>
									<div class="comment_text">
										<p>
											<cms:show k_comment />
										</p>
									</div>
								</div>
							</li>
							<cms:paginator />
						</cms:comments>
					</ol>
					<cms:else />
					No comment
				</cms:if>
				
			<div class="hr clearfix">&nbsp;</div>
			
			<!-- Comment Form -->
			<cms:embed 'comments_form.html' />
			
			<cms:if k_paginated_bottom >
			<!-- Blog Navigation -->
			<p class="clearfix">
				<cms:if k_pignate_link_next>
				<a href="<cms:show k_pignate_link_next />" class="button float">&lt;&lt; Previous Posts</a>
				</cms:if>
				
				<cms:if k_pignate_link_prev >
				<a href="<cms:show k_pignate_link_prev />" class="button float right">Newer Posts >></a>
				</cms:if>
			</p>
			</cms:if>
			
			</cms:pages >
		</div>
		
		<!-- Column 2 / Sidebar -->
		<cms:embed 'blog_sidebar.html' />
		
		<!-- Footer -->
		<p class="grid_12 footer clearfix">
			<span class="float"><b>&copy; Copyright</b> <a href="">QwibbleDesigns</a> - remove upon purchase.</span>
			<a class="float right" href="#">top</a>
		</p>
		
	</div><!--end wrapper-->

</body>
</html>
<cms:else />
	<cms:embed 'blog_list.html' />
</cms:if>

<?php COUCH::invoke(); ?>