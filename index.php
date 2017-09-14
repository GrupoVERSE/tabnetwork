<!DOCTYPE html>
<html class=" js no-touch csstransforms3d">
<head>
    <title><?php echo get_bloginfo( $show, 'display' ); ?></title>

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
<body class="homepage" style="">
        <div id="page-wrapper" style="">

            <?php get_header('home') ?>

                <!-- Banner -->
                    <section id="banner">
                        <div class="content primary">
                            <header>
                                <h1 style="margin: 0 0 0 0; color: white;">Domina tus talentos empresariales.</h1>
                                <br>
                                <p style="color: white;font-size: 21px;">
                                    Aprende sobre negocios, productividad y formación de equipos.
                                </p>
                            </header>
                            <ul class="actions">
                                <li><a href="http://facebook.com/groups/ComunidadTAB/" class="button big wide scrolly" style="color: white !important;box-shadow: inset 0 0 0 3px #ffffff;">
                                    Unirme a la Comunidad</a>
                                </li>
                            </ul>
                        </div>
                        <div class="content secondary">
                            <div class="inner">
                                <div class="features">
                                    <section>
                                        <a target="_blank" href="http://facebook.com/groups/ComunidadTAB/"><span class="icon fa-users major"></span></a>
                                        <h3>Comunidad de Alto Desempeño</h3>
                                        <p>Rodéate de +1000 empresarios, artistas y profesionistas excepcionales.</p>
                                    </section>                                    
                                    <section>
                                        <span class="icon fa-university major"></span>
                                        <h3>Eventos</h3>
                                        <p>Clases Maestras para tomar mejores decisiones ante tendencias de negocios.</p>
                                    </section>
                                    <section>
                                        <span class="icon fa-tablet major"></span>
                                        <h3>Publicaciones</h3>
                                        <p>Disfruta artículos, cursos y casos de estudio empresariales.</p>
                                    </section>                                    

                                </div>
                            </div>
                        </div>
                        <video src="http://localhost:8888/tabuniversity/wp-content/themes/tabuniversity-wp/img/branding.mp4" muted="" autoplay="" loop="" playsinline=""></video>
                    </section>

            <!-- Main -->
                <div id="main">
                    <div class="container">

                        <div class="row">

                            <!-- Content -->
                                <div id="content" class="8u 12u(mobile)">
                                    <section>
                                        <header>
                                            <h2>Próximos eventos</h2>
                                        </header>
                                        <br>
                                            <ul class="style3">


<?php
query_posts(array('showposts' => 10, 'post_parent' => 135, 'post_type' => 'page', 'order' => 'ASC'));

while (have_posts()) { the_post();
echo '<li>';
$fecha = substr(rwmb_meta( 'rw_fechainicio'), 0, 10);
echo '<p class="date">'. date("M", strtotime($fecha)) .'<b>'. date("d", strtotime($fecha)) . '</b></p>';
echo '<h3><a href="' . get_permalink() . '"</a>';
the_title();
echo '</a></h3>';
echo '<p><strong>' . rwmb_meta( 'rw_ciudad' ) . '</strong></p>';
echo '<p>' . rwmb_meta( 'rw_descripcion' ); '.</p>';
echo '</li>';


}

wp_reset_query();  // Restore global post data
?>                                                

                                            </ul>
                                    </section>
                                </div>


                            <!-- Sidebar -->
                                <div id="sidebar" class="4u 12u(mobile)">
                                    <section>
                                        <header>
                                            <h2 style="font-size: 2em;">Agenda de Transmisiones</h2>
                                        </header>
                                        <img src="https://scontent-dft4-2.xx.fbcdn.net/v/t31.0-8/20901720_2364326083791515_7722115604214848137_o.jpg?oh=7cc475ad08374ba357ef3f61e1b5a818&amp;oe=5A4BFFE8" alt="" class="image featured">
                                        <p>No hay transmisiones próximas.</p>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                                                                                

                <!-- Section -->
                    
                <section id="three" class="main alt" style="background: #f7f7f7;">
                    <br>
                    <br>
                    <br>
                    <div class="inner">
                        <header>
                            <h2>Nuevas publicaciones</h2>
                        </header>
                        <br>
                        <div class="posts" style="margin: 0 0 0rem 0;">
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                            <div>
                                <article>
                                    <?php echo '<a href="' . get_permalink() . '" class="image">'?>
                                    <?php
                                    $thumb = get_the_post_thumbnail_url();
                                    echo '<img src="' . $thumb . '">'
                                    ?>
                                    </a>
                                    <div class="content">
                                            <?php 
                                            $categories = get_the_category(); 
                                            $cat_name = $categories[0]->cat_name;
                                            if ($cat_name == 'Cursos Online'){
                                                echo '<span class="label label-cursosonline">' . $cat_name . '</span>';
                                            } elseif($cat_name == 'Eventos') {
                                                echo '<span class="label label-eventos">' . $cat_name . '</span>';
                                            } elseif($cat_name == 'Artículos') {
                                                echo '<span class="label label-articulos">' . $cat_name . '</span>';
                                            }
                                            ?>
                                        <br>
                                        <br>
                                        <h3><a href="<?php echo get_permalink() ?>"><?php the_title() ?></a></h3>
                                        <p><?php echo rwmb_meta( 'rw_subtitulo' ); ?>.</p>
                                    </div>
                                </article>
                            </div>

                        <?php endwhile; else : ?>
                        <?php endif; ?>
                        </div>
                    </div>
                </section>
        <?php get_footer() ?>
        </div>

        <!-- Scripts -->
            <script src="<?php bloginfo('template_directory'); ?>/wp-content/themes/tabuniversity-wp/js/jquery.min.js"></script>
            <script src="<?php bloginfo('template_directory'); ?>/wp-content/themes/tabuniversity-wp/js/jquery.dropotron.js"></script>
            <script src="<?php bloginfo('template_directory'); ?>/wp-content/themes/tabuniversity-wp/js/skel.min.js"></script>
            <script src="<?php bloginfo('template_directory'); ?>/wp-content/themes/tabuniversity-wp/js/util.js"></script>
            <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
            <script src="<?php bloginfo('template_directory'); ?>/wp-content/themes/tabuniversity-wp/js/main.js"></script>
</html>

