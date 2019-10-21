<?php 
/**khai bao hang gia tri 
@them_url = lay duong dan thu muc theme
@core = lay duong dan cua thu muc /core
**/
define('them_url', get_stylesheet_directory());
define('core', them_url."/core");

/**
@nhung file / core/init.php
**/
require_once(core."/init.php");

/**
@thiet lap chieu rong noi dung
**/
if (!isset($content_width)) {
	$content_width=620;
}
/**
@khai bao chuc nang cua theme
**/
if (!function_exists('cms_theme_setup')) {
	# code...
	function cms_theme_setup(){
 /*
* Tự chèn RSS Feed links trong <head>
*/
add_theme_support( 'automatic-feed-links' );
/*them post thumbnail*/
add_theme_support('post-thumbnails');
/*post format*/
add_theme_support('post-formats',array(
'images',
'video',
'gallery',
'quote',
'link'

));
/*them title-tag*/
add_theme_support('title-tag');
/*
* Thêm chức năng custom background
*/
$default_background = array(
   'default-color' => '#e8e8e8',
);
add_theme_support( 'custom-background', $default_background );
/*
* Tạo menu cho theme
*/
register_nav_menu ( 'primary-menu', __('Primary Menu', 'cms') );
/*
* Tạo sidebar cho theme
*/
$sidebar = array(
   'name' => __('Main Sidebar', 'thachpham'),
   'id' => 'main-sidebar',
   'description' => 'Main sidebar for Thachpham theme',
   'class' => 'main-sidebar',
   'before_title' => '<h3 class="widgettitle">',
   'after_title' => '</h3>'
);
register_sidebar( $sidebar );
	}
	add_action('init','cms_theme_setup');
}
/*----------*/
/**
@ Thiết lập hàm hiển thị logo
@ thachpham_logo()
**/
if ( ! function_exists( 'cms_logo' ) ) {
  function cms_logo() {?>
    <div class="logo">
 
      <div class="site-name">
        <?php if ( is_home() ) {
          printf(
            '<h1><a href="%1$s" title="%2$s">%3$s</a></h1>',
            get_bloginfo( 'url' ),
            get_bloginfo( 'description' ),
            get_bloginfo( 'sitename' )
          );
        } else {
          printf(
            '</p><a href="%1$s" title="%2$s">%3$s</a></p>',
            get_bloginfo( 'url' ),
            get_bloginfo( 'description' ),
            get_bloginfo( 'sitename' )
          );
        } // endif ?>
      </div>
      <div class="site-description"><?php bloginfo( 'description' ); ?></div>
 
    </div>
  <?php }
}
 
/**
@ Thiết lập hàm hiển thị menu
@ cms_menu( $slug )
**/
if ( ! function_exists( 'cms_menu' ) ) {
  function cms_menu( $slug ) {
    $menu = array(
      'theme_location' => $slug,
      'container' => 'nav',
      'container_class' => $slug,
    );
    wp_nav_menu( $menu );
  }
}
