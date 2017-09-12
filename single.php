<!DOCTYPE HTML>

<html>
    <head>
        <title>Untitled</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/assets/favicon.ico">
        <link href="http://fonts.googleapis.com/css?family=Lato:300,700" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/main.css">
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/font-awesome.min.css">        

        <meta name="description" content="<?php echo get_bloginfo( 'description' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="http://fonts.googleapis.com/css?family=Lato:300,700" rel="stylesheet" type="text/css">
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
    </head>
    <body>

        <!-- Wrapper -->
            <div id="wrapper" style="margin-top: 4em;">

                    <?php get_header('single') ?>
                
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                    <section id="one" class="main alt">
                        <header class="accent1" style="text-align:center;">
                            <h1><?php the_title(); ?></h1>
                            <p><?php echo rwmb_meta( 'rw_subtitulo' ); ?></p>
                            <time class="post-date" ><?php the_date('d' . '/' . 'n'. '/' . 'Y', ' '); ?></time>
                            <p>Redactado por <a href="#">Mike Nieva</p></a>
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
                                <div style="padding-top: 30px;padding-bottom: 30px; background-color: #f7f7f7; padding-left: 4%;">
                                    <?php echo get_avatar( get_the_author_meta( 'ID' ) , 170 ); ?>
                                    <div style="margin-left:5%;display: inline-block; vertical-align: top;">
                                        <h3><?php echo nl2br(get_the_author_meta('first_name')); ?> <?php echo nl2br(get_the_author_meta('last_name')); ?></h3>
                                        <span><b>Co-Founder @TABUniversity</b></span>
                                        <p>Conectando e impulsando vidas profesionales a través de Internet.</p>
                                        <span><i class="fa fa-facebook"></i></span>
                                        &nbsp;&nbsp;&nbsp;&nbsp;<span><i class="fa fa-twitter"></i></span>
                                        &nbsp;&nbsp;&nbsp;&nbsp;<span><i class="fa fa-linkedin"></i></span>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <div>
                                
                            </div>
                        </div>
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

    </body>
</html>