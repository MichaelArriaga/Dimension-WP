<?php


function site_files() {
  // sylesheets
  

  wp_enqueue_style('dimension_main_css', get_template_directory_uri(). '/assets/css/main.css');
  wp_enqueue_style('font_awesome', get_template_directory_uri(). '/assets/css/font-awesome.min.css');
  wp_enqueue_style('noscript_css', get_template_directory_uri(). '/assets/css/noscript.css');

  wp_enqueue_style('site_main_styles', get_stylesheet_uri());
  wp_enqueue_style('source_sans_pro_font', 'https://fonts.googleapis.com/css?family=Source+Sans+Pro:300italic,600italic,300,600');

  //javascript
  
  wp_enqueue_script('breakpoints', get_theme_file_uri('/assets/js/breakpoints.min.js'), NULL, '1.0', true);
  wp_enqueue_script('browser', get_theme_file_uri('/assets/js/browser.min.js'), NULL, '1.0', true);
  wp_enqueue_script('main_js', get_theme_file_uri('/assets/js/main.js'), NULL, '1.0', true);
  wp_enqueue_script('util', get_theme_file_uri('/assets/js/util.js'), NULL, '1.0', true);

  wp_enqueue_script('jquery', get_theme_file_uri('/assets/js/jquery.min.js'), NULL, '1.0', true);

}


add_action('wp_enqueue_scripts', 'site_files');


function dimension_theme_setup() {
  add_theme_support('title-tag');
}

add_action('after_theme_setup', 'dimension_theme_setup');