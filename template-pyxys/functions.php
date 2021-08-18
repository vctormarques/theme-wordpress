<?PHP 

function themebs_enqueue_styles() {
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
    wp_enqueue_style( 'core', get_template_directory_uri() . '/style.css' );
  }
  add_action( 'wp_enqueue_scripts', 'themebs_enqueue_styles');
  function themebs_enqueue_scripts() {
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array( 'jquery' ) );
  }
  add_action( 'wp_enqueue_scripts', 'themebs_enqueue_scripts');

  add_theme_support( 'post-thumbnails' );
  set_post_thumbnail_size( 371, 263);


  function wpassist_remove_block_library_css(){
    wp_dequeue_style( 'wp-block-library' );
    } 
    add_action( 'wp_enqueue_scripts', 'wpassist_remove_block_library_css' );
    
    if ( function_exists('register_sidebar') )
    //Código para o widget.
    register_sidebar(array(
    'name' => __( 'Widgets para o Rodape' ),
    'id' => 'area-de-widget1',
    'description' => __( 'Area de widget do rodape' ),
    'before_widget' => '<li id="%1$s" class="%2$s">',
    'after_widget' => '</li>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
    ));

    if ( function_exists('register_sidebar') )
    //Código para o widget.
    register_sidebar(array(
    'name' => __( 'Widgets para o Rodape' ),
    'id' => 'area-de-widget2',
    'description' => __( 'Area de widget do rodape' ),
    'before_widget' => '<li id="%1$s" class="%2$s">',
    'after_widget' => '</li>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
    ));

    if ( function_exists('register_sidebar') )
    //Código para o widget.
    register_sidebar(array(
    'name' => __( 'Widgets para o Rodape' ),
    'id' => 'area-de-widget3',
    'description' => __( 'Area de widget do rodape' ),
    'before_widget' => '<li id="%1$s" class="%2$s">',
    'after_widget' => '</li>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
    ));

    if ( function_exists('register_sidebar') )
    //Código para o widget.
    register_sidebar(array(
    'name' => __( 'Widgets para o Rodape' ),
    'id' => 'area-de-widget4',
    'description' => __( 'Area de widget do rodape' ),
    'before_widget' => '<li id="%1$s" class="%2$s">',
    'after_widget' => '</li>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
    ));

    if ( function_exists('register_sidebar') )
    //Código para o widget.
    register_sidebar(array(
    'name' => __( 'Widgets para o Rodape' ),
    'id' => 'area-de-widget5',
    'description' => __( 'Area de widget do rodape' ),
    'before_widget' => '<li id="%1$s" class="%2$s">',
    'after_widget' => '</li>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
    ));

    function cria_area_de_widget1() {
      if ( is_active_sidebar( 'area-de-widget1' ) ) :
      dynamic_sidebar( 'area-de-widget1' );
      endif;
      }
      add_action( 'mostra_area_de_widget1', 'cria_area_de_widget1' );

    function cria_area_de_widget2() {
      if ( is_active_sidebar( 'area-de-widget2' ) ) :
      dynamic_sidebar( 'area-de-widget2' );
      endif;
      }
      add_action( 'mostra_area_de_widget2', 'cria_area_de_widget2' );

    function cria_area_de_widget3() {
      if ( is_active_sidebar( 'area-de-widget3' ) ) :
      dynamic_sidebar( 'area-de-widget3' );
      endif;
      }
      add_action( 'mostra_area_de_widget3', 'cria_area_de_widget3' );

    function cria_area_de_widget4() {
      if ( is_active_sidebar( 'area-de-widget4' ) ) :
      dynamic_sidebar( 'area-de-widget4' );
      endif;
      }
      add_action( 'mostra_area_de_widget4', 'cria_area_de_widget4' );

    function cria_area_de_widget5() {
      if ( is_active_sidebar( 'area-de-widget5' ) ) :
      dynamic_sidebar( 'area-de-widget5' );
      endif;
      }
      add_action( 'mostra_area_de_widget5', 'cria_area_de_widget5' );
