<?php /* Template Name: Master Class */ ?>

<!DOCTYPE HTML>

<html>
    <head>
        <title><?php echo get_bloginfo( $show, 'display' ); ?></title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="shortcut icon" href="http://prueba.tab.network/wp-content/uploads/2017/10/favicon.ico">        
<!--<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/assets/favicon.ico">-->
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Lato:300,700" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,600,700" rel="stylesheet" type="text/css">  
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css">
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/main.css">
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>        

        <meta name="description" content="<?php echo get_bloginfo( 'description' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">        
    
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
    </head>

<style>
@media screen and (max-width: 736px){
    #wrapper > .main > header > * {
        max-width: calc(105% - 3rem) !important;
	}
}

	#wrapper > .main > header.accent1 {
    	background-color: #000 !important;
    	color: #fff !important;
	}

	#wrapper > .main > header > * {
    	width: 62.5rem;
	}
	
	#wrapper > .main > header.accent1 a {
    	color: #C8C8C8;
	}
	.redact{
		text-align: center;
        margin-left: auto !important;
        margin-right: auto !important;
	}
</style>

    <body>

        <!-- Wrapper -->
            <div id="wrapper" style="margin-top: 4em;">

                    <?php get_header('home') ?>
                
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                    <section id="one" class="main alt">
                        <header class="accent1" style="text-align:center;">
                            <h1><?php the_title(); ?></h1>
                            <p><?php echo rwmb_meta( 'rw_subtitulo' ); ?></p>
                            <time class="post-date" ><?php the_date('d' . '/' . 'n'. '/' . 'Y', ' '); ?></time>
                            <p class="redact">Redactado por <a href="#">Mike Nieva</p></a>
                        </header>
                        <div class="inner alt">
                            <div class="content">
                                <div class="featured-thumbnail">
                                <?php the_post_thumbnail(); ?>
                                </div>
                                <br>
                                <br>
                                <?php the_content(); ?>
                                <br>
                                <br>
                                <div style="padding-top: 30px; padding-bottom: 30px; padding-right: 30px; background-color: #f7f7f7; padding-left: 4%;">
								<div class="row">
								<div class="col-xs-12 col-sm-3 textcenter">
                                    <?php echo get_avatar( get_the_author_meta( 'ID' ) , 170 ); ?>
								</div>
								<div class="col-sm-1"></div>
                                    <div class="col-xs-12 col-sm-8 textcenter" style="margin-top: 15px; display: inline-block; vertical-align: top;">
                                        <h3><?php echo nl2br(get_the_author_meta('first_name')); ?> <?php echo nl2br(get_the_author_meta('last_name')); ?></h3>
                                        <span><b>Manager @TAB</b></span>
                                        <p>Conectando e impulsando vidas profesionales a través de Internet.</p>
                                        <span><i class="fa fa-facebook"></i></span>
                                        &nbsp;&nbsp;&nbsp;&nbsp;<span><i class="fa fa-twitter"></i></span>
                                        &nbsp;&nbsp;&nbsp;&nbsp;<span><i class="fa fa-linkedin"></i></span>
                                    </div>
									</div>
                                 </div>
                                 <br>
                              </div>  
                            </div>
                        <!--</div>-->
                    </section>

<?php endwhile; ?>
<?php endif; ?> 

<?php get_footer() ?>
                
            </div>

        <!-- Scripts -->
            <script src="<?php bloginfo('template_directory'); ?>/js/jquery.min.js"></script>
            <script src="<?php bloginfo('template_directory'); ?>/js/jquery.dropotron.min.js"></script>
            <script src="<?php bloginfo('template_directory'); ?>/js/jquery.selectorr.min.js"></script>
            <script src="<?php bloginfo('template_directory'); ?>/js/jquery.scrollex.min.js"></script>
            <script src="<?php bloginfo('template_directory'); ?>/js/jquery.scrolly.min.js"></script>
            <script src="<?php bloginfo('template_directory'); ?>/js/skel.min.js"></script>
            <script src="<?php bloginfo('template_directory'); ?>/js/util.js"></script>
            <script src="<?php bloginfo('template_directory'); ?>/js/main.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

    </body>
</html>