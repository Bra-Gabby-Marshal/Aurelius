<?php require_once('couch/cms.php'); ?>

<cms:template title="Global Settings" executable='0'>

    <cms:editable name='site_name' label='Your Site\' s name' type='text'>Aurelius</cms:editable>
    <cms:editable name='site_desc' label='Your Site\' s description' type='text'>
        A premium Business and Portfolio theme
    </cms:editable> 

    <cms:editable name='home_caption' label='Home Caption' height='50' type='textarea'>Welcome! This is <span>Aurelius</span>, a slick, professional <u>Business</u> & <u>Portfolio</u> theme built to engage the user in your work.
    </cms:editable>
    <cms:editable name='about_caption' label='About Us Caption' height='50' type='textarea'>Learn <span>about us</span> and what we do best.
    </cms:editable>
    <cms:editable name='blog_caption' label='Blog Caption' height='50' type='textarea'>Our <span>blog</span>, keeping you up-to-date on our latest news.
    </cms:editable>
    <cms:editable name='portfolio_caption' label='Portfolio Caption' height='50' type='textarea'>Our <b>portfolio</b>, home to our latest, and greatest work.
    </cms:editable>
    <cms:editable name='contact_caption' label='Contact Us Caption' height='50' type='textarea'>Enjoyed looking at our work? Don't hesitate to <span>contact us</span>!
    </cms:editable>

</cms:template>

/* <cms:pages masterpage='globals.php' >
	<cms:set g_site_name-site_name 'global' />
	<cms:set g_site_desc-site_desc 'global' />
	<cms:set g_home_caption=home_caption 'global' />
	<cms:set g_about_caption=about_caption 'global' />
	<cms:set g_blog_caption=blog_caption 'global' />
	<cms:set g_portfolio_caption=portfolio_caption 'global' />
	<cms:set g_contact_caption=contact_caption 'global' />
</cms:pages>
*/
<?php COUCH::invoke(); ?>