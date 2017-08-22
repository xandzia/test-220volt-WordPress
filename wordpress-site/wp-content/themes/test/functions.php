<?php
function podklyucheniye_scriptov(){
    wp_deregister_script( 'jquery-core' );
	wp_register_script( 'jquery-core', '//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js');
	wp_enqueue_script( 'jquery' );
    
    wp_enqueue_script( 'jquery.flexslider.min', get_template_directory_uri() . '/js/jquery.flexslider.min.js');
    wp_enqueue_script( 'slick.min', get_template_directory_uri() . '/js/slick.min.js');
    wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js');
    wp_enqueue_style('style', get_stylesheet_uri());
};
//вызываем хук-событие
add_action( 'wp_enqueue_scripts', 'podklyucheniye_scriptov' );


function new_excerpt_length($length) {
	return 15;
}
add_filter('excerpt_length', 'new_excerpt_length');
add_filter('excerpt_more', function($more) {
	return '...';
});


function dateToRussian($date) {
    $month = array("january"=>"Января", "february"=>"Февраля", "march"=>"Марта", "april"=>"Апреля", "may"=>"Мая", "june"=>"Июня", "july"=>"Июля", "august"=>"Августа", "september"=>"Сентября", "october"=>"Октября", "november"=>"Ноября", "december"=>"Декабря");
    $days = array("monday"=>"Понедельник", "tuesday"=>"Вторник", "wednesday"=>"Среда", "thursday"=>"Четверг", "friday"=>"Пятница", "saturday"=>"Суббота", "sunday"=>"Воскресенье");
    return str_replace(array_merge(array_keys($month), array_keys($days)), array_merge($month, $days), strtolower($date));
};

//миниатюра
add_theme_support( 'post-thumbnails' );

//Header Menu
function register_my_menus() {
  register_nav_menus(
    array(
      'menu' => __( 'Меню в шапке' ),
      'menu_top' => __( 'Меню top' ),
      'menu_fix_katalog_tovarov' => __( 'Меню fix каталог товаров' ),
      'menu_katalog_tovarov' => __( 'Меню каталог товаров' ),
      'menu_footer' => __( 'Меню в footer' ),
      'menu2_footer' => __( 'Меню2 в footer' ),
      'menu3_footer' => __( 'Меню3 в footer' ),
      'an-extra-menu' => __( 'An Extra Menu' )
    )
  );
};
add_action( 'init', 'register_my_menus' );

//ASIDE
$args = array(
	'name'          => 'виджет sidebar',
	'id'            => 'sidebar',
	'description'   => '',
	'before_widget' => '',
	'after_widget'  => '',
	'before_title'  => '',
	'after_title'   => '' );

register_sidebar( $args );

//FOOTER
$args_footer = array(
	'name'          => 'виджет footer',
	'id'            => 'footer',
	'description'   => '',
	'before_widget' => '',
	'after_widget'  => '',
	'before_title'  => '',
	'after_title'   => '',
    'taxonomy'      => ''  );

register_sidebar( $args_footer );

//remove title "CATEGORIES" in widget
function my_repair_categories_empty_title($title, $instance, $base) {
    if ( $base == 'categories' ) {
        if ( trim($instance['title']) == '' )
            return '';
    }
    return $title;
}
add_filter('widget_title', 'my_repair_categories_empty_title', 10, 3);
?>
