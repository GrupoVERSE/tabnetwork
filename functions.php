<?php
function personalizar_login() {
    echo '<style type="text/css">
          h1 a { background-image:url(http://i.imgur.com/XrwxboH.png) !important;}
          .login h1 a{
          background-size: 100% !important;
          margin: 0 auto 50px;
          width: 240px;
          }
    </style>';
}
add_action('login_head', 'personalizar_login');
?>
<?php
add_filter( 'rwmb_meta_boxes', 'rw_register_meta_boxes' );
function rw_register_meta_boxes( $meta_boxes )
{
    $prefix = 'rw_';
    // 1st meta box
    $meta_boxes[] = array(
        'title'    => 'Detalles para artículos',
        'pages'    => array( 'post'),
        'fields' => array(
            array(
                'name' => 'Descripción',
                'id'   => $prefix . 'descripcion',
                'std'   => '',
                'type' => 'text',
            ),
            array(
                'name' => 'CTA Botón',
                'id'   => $prefix . 'boton',
                'std'   => '',
                'type' => 'text',
            ),
            array(
                'name' => 'URL',
                'id'   => $prefix . 'urlboton',
                'std'   => '',
                'type' => 'text',
            ),
            array(
                'name' => 'Subtítulo',
                'desc' => 'Define de qué trata la publicación, brevemente.',
                'id'   => $prefix . 'subtitulo',
                'type' => 'textarea',
                'cols' => 20,
                'rows' => 3,
            ),     
        ),
    );    
    $meta_boxes[] = array(
        'title'    => 'Detalles del evento',
        'pages'    => array( 'page'),
        'fields' => array(
            array(
                'name' => 'Descripción',
                'id'   => $prefix . 'descripcion',
                'std'   => '',
                'type' => 'text',
            ),
            array(
                'name' => 'Fecha de inicio',
                'id'   => $prefix . 'fechainicio',
                'std'   => '',
                'type' => 'datetime',
            ),
            array(
                'name' => 'Fecha de finalización',
                'id'   => $prefix . 'fechafinalizacion',
                'std'   => '',
                'type' => 'datetime',
            ),
            array(
                'name' => 'URL',
                'id'   => $prefix . 'urlboton',
                'desc' => 'Coloca la URL de Facebook.',
                'std'   => '',
                'type' => 'text',
            ),
        ),
    );    
    return $meta_boxes;
}
?>
<?php
function my_new_contactmethods( $contactmethods ) {
  
//add properties
  $contactmethods['twitter'] = 'Twitter';
  $contactmethods['urlfacebook'] = 'Facebook URL - Example: http://facebook.com/mikenieva';
  return $contactmethods;
  unset($contactmethods['yim']);
}
add_filter('user_contactmethods','my_new_contactmethods',10,1);
?>
<?php
add_theme_support( 'post-thumbnails' ); 
?>