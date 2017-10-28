<!DOCTYPE html>
<html class=" js no-touch csstransforms3d">
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title><?php single_post_title(''); ?> - <?php echo get_bloginfo( $show, 'display' ); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" href="https://s3.amazonaws.com/thinkific/site_themes/favicon_000/009/098/1461875879.original.png">             

<?php if(have_posts()) : while(have_posts()) : the_post(); ?>


        <link rel="canonical" href="<?php echo get_permalink(); ?>">

        <meta property="og:site_name" content="<?php single_post_title(''); ?> - <?php echo get_bloginfo( $show, 'display' ); ?>">
        <meta property="og:type" content="article">
        <meta property="og:title" content="<?php single_post_title(''); ?> - <?php the_author(); ?>">
        <meta property="og:description" content="<?php $my_excerpt = get_the_excerpt();echo $my_excerpt;?>">
		<link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,600,700" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Lato:300,700" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css">
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/single.css">
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/main.css">
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

        <meta property="og:url" content="<?php echo get_permalink(); ?>">
        <meta property="og:image" content="<?php the_post_thumbnail_url(); ?>">
        <meta property="article:author" content="https://www.facebook.com/tabuniversity" />
        <meta property="fb:profile_id" content="mikenieva" />
        <meta property="fb:app_id" content="1157607614323376" />
        <meta property="fb:pages" content="2018940581663402" />
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1157607614323376',
      xfbml      : true,
      version    : 'v2.8'
    });

    // ADD ADDITIONAL FACEBOOK CODE HERE
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>      

<script>
  window.intercomSettings = {
    app_id: "shb3v5rz"
  };
</script>
<script>(function(){var w=window;var ic=w.Intercom;if(typeof ic==="function"){ic('reattach_activator');ic('update',intercomSettings);}else{var d=document;var i=function(){i.c(arguments)};i.q=[];i.c=function(args){i.q.push(args)};w.Intercom=i;function l(){var s=d.createElement('script');s.type='text/javascript';s.async=true;s.src='https://widget.intercom.io/widget/shb3v5rz';var x=d.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);}if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})()</script>
    
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-77533900-2', 'auto');
  ga('send', 'pageview');

</script>

</head>
    <body class="post-template">

<style>

.hp-wrap{                                

	margin-bottom: 10px;
}

.ninja-forms-required-items{
	margin-bottom: 11px;

}

label{
	margin-bottom: 11px;
}

input, textarea {
    border: 1px solid #e3e3e3;
    padding: 5px 10px;
    margin-bottom: 19px;
}

li{
display: inherit;
}

input[type="checkbox"], input[type="radio"] {
    box-sizing: border-box;
    padding: 0;
    margin-right: 12px;
}

.list-dropdown-wrap{
	margin-bottom: 11px;
	}

</style>

        <?php get_header("navigation") ?>

        <nav class="pushy pushy-left">
            
            <nav class="navigation">
                <ul>
                    <li>
                        <a href="index.html#">Iniciar Sesión</a>
                    </li>
                </ul>
            </nav>        </nav>

        <div class="site-overlay"></div>

        <main class="animated" id="main" role="main">
            

<?php 
$curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
?>


    <div class="image-overlay"></div>
    <div class="post-image" style="background-image:url(<?php the_post_thumbnail_url( 'full' ); ?> )">
    </div>

    <div class="wrapper">
        <article class="post featured">
            
            <section class="post-content">

                
                <h1 style="margin-bottom:60px;" class="post-title"><?php the_title(); ?></h1>  




                <section class="post-content-output">
                    <?php the_content(); ?>
                </section>

  
    

            <br>
            <br>
            </div>
            </div>

            <?php endwhile ?>
            <?php else : ?>
            <?php endif; ?>

<?php get_footer() ?>            

        <script src="<?php bloginfo('template_directory'); ?>/js/jquery.js"></script>
        <script src="<?php bloginfo('template_directory'); ?>/js/theme-options.js"></script>
        <script src="<?php bloginfo('template_directory'); ?>/js/main.min.js"></script>
  		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    </body>
</html>