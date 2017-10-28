<!DOCTYPE html>
<html class=" js no-touch csstransforms3d">
<head>
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title><?php echo get_bloginfo( $show, 'display' ); ?></title>
	    <meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="shortcut icon" href="http://prueba.tab.network/wp-content/uploads/2017/10/favicon.ico">
        <!--<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/assets/favicon.ico">-->
		<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Lato:300,700" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,600,700" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css">
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/single.css">
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/main.css">
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/font-awesome.min.css">      

        <meta name="description" content="<?php echo get_bloginfo( 'description' ); ?>"> 
    
        <meta property="og:site_name" content="<?php echo get_bloginfo( $show, 'display' ); ?>">
        <meta property="og:type" content="article">
        <meta property="og:title" content="<?php echo get_bloginfo( $show, 'display' ); ?>">
        <meta property="og:description" content="<?php echo get_bloginfo( 'description' ); ?>">
        <meta property="og:url" content="<?php echo get_bloginfo( 'url' ); ?>">
        <meta property="og:image" content="">
        <meta property="article:published_time" content="">
        <meta property="article:modified_time" content="">
        <meta property="article:tag" content="">
        <meta property="fb:pages" content="2018940581663402" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">  

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-77533900-2', 'auto');
  ga('send', 'pageview');

</script>

<script>
  window.intercomSettings = {
    app_id: "shb3v5rz"
  };
</script>
<script>(function(){var w=window;var ic=w.Intercom;if(typeof ic==="function"){ic('reattach_activator');ic('update',intercomSettings);}else{var d=document;var i=function(){i.c(arguments)};i.q=[];i.c=function(args){i.q.push(args)};w.Intercom=i;function l(){var s=d.createElement('script');s.type='text/javascript';s.async=true;s.src='https://widget.intercom.io/widget/shb3v5rz';var x=d.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);}if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})()</script>

    </head>
<style>
.post-excerpt {
    height: 110px !important;
}
.post .post-title:after {
        content: none !important;
}
</style>

    <body class="home-template" style="margin-bottom: -30px;">
		<div id="page-wrapper" style="">

            <?php get_header('home') ?>
			
			<nav class="pushy pushy-left"></nav>

        <div class="site-overlay"></div>

        <main class="animated" id="main" role="main">
        

        

        <main id="main" role="main" style="background-color: #F7F7F7;">
            <div class="flexslider">
                        <a href="<?php echo get_permalink($id) ?>">   
                            <div class="slider-image" style="background-image: url(<?php the_post_thumbnail_url(); ?>)">
                            </div>
                        </a>
                
            
            </div>
        
    <div class="wrapper clearfix">  
        
        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>        

        <div class="post tag-food featured already-visible animated fadeIn">
            <a href="<?php echo get_permalink($id) ?>">
                <div class="featured-image" style="background-image:url(<?php the_post_thumbnail_url(); ?>)">
                    <div class="overlay">
                        <div class="vertical">
                            <div class="read-more"><i class="fa fa-search" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>  
                <section class="post-excerpt">
                    <time class="post-date" datetime="2014-08-23"><?php the_date('d' . '/' . 'n'. '/' . 'Y', ' '); ?></time>
					<span class="author"><a target="_blank" href="<?php echo the_author_meta('user_url')?>" style="font-weight: 400; font-size: 16px; color: #000000;"><?php the_author(); ?></a></span> 
                    <h2 class="post-title">
                        <?php the_title(); ?>
                    </h2>
                </section> 
            </a>
        </div>
		<?php endwhile ?>
		<?php else : ?>      
        <?php endif; ?>

    </div>
    <nav class="pagination" id="pagination" role="pagination">
        <?php posts_nav_link('&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;','< ','>'); ?>
    </nav>

        </main>
	</main>
		<div style="padding-top: 1530px;">
			<?php get_footer() ?>	
		</div>	
            
	</div>




		<script src="<?php bloginfo('template_directory'); ?>/wp-content/themes/tabuniversity-wp/js/jquery.min.js"></script>
        <script src="<?php bloginfo('template_directory'); ?>/js/theme-options.js"></script>
        <script src="<?php bloginfo('template_directory'); ?>/js/main.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

    </body>
</html>