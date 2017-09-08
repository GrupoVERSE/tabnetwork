<!DOCTYPE html>
<html class=" js no-touch csstransforms3d">
<head>
    <title><?php echo get_bloginfo( $show, 'display' ); ?></title>

        <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/assets/favicon.ico">
        <link href="http://fonts.googleapis.com/css?family=Lato:300,700" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/single.css">
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/font-awesome.min.css">        

        <meta name="description" content="<?php echo get_bloginfo( 'description' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" href="https://s3.amazonaws.com/thinkific/site_themes/favicon_000/009/098/1461875879.original.png">

        <link href="http://fonts.googleapis.com/css?family=Lato:300,700" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/single.css">
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/font-awesome.min.css">        
    
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
    <body class="home-template">
        <?php get_header("navigation") ?>

        <div class="site-overlay"></div>

        <main id="main" role="main">
            <div class="flexslider">
                <ul class="slides">
                    <li class="" style="width: 100%; float: left; margin-right: -100%; position: relative; display: block; z-index: 2; opacity: 0.0295596;">
                        <a href="<?php echo get_permalink($id) ?>">   
                            <div class="slider-image" style="background-image: url(<?php the_post_thumbnail_url(); ?>)">
                                <div class="wrapper">
                                    <div class="info">
                                        <h2><?php the_title(); ?></h2>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
                
            
            </div>
        
    <div class="wrapper posts clearfix">  
        
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

            <footer class="site-footer">
                <div class="wrapper">
                    <div class="info clearfix">
                        <div class="copyright">
                            © 2016 TAB University. Todos los derechos reservados.
                        </div>
                    
                        <section class="social-media" style="visibility: visible;">
                    
                            <a class="facebook" href="http://www.facebook.com/tabuniversity" target="_blank">
                                <i class="fa fa-facebook-square" aria-hidden="true"></i>
                            </a>
                    
                            <a class="instagram" href="http://www.instagram.com/tabuniversity">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                            </a>
                        </section>
                    </div>
                </div>        
            </footer>

        <script src="<?php bloginfo('template_directory'); ?>/js/jquery.js"></script>
        <script src="<?php bloginfo('template_directory'); ?>/js/theme-options.js"></script>
        <script src="<?php bloginfo('template_directory'); ?>/js/main.min.js"></script>

    </body>
</html>