<?php

function lespot_files() {
  // wp_enqueue_style('university_main_styles', get_stylesheet_uri());

  // 4
  wp_enqueue_script('main-university-js', get_theme_file_uri('/js/jquery.1.11.1.js'), array('jquery'), '1.0', true);

  wp_enqueue_script('main-bootstrap-js', get_theme_file_uri('/js/bootstrap.js'), array('jquery'), '1.0', true);

  // 3
  wp_enqueue_style('custom-google-fonts1', '//fonts.googleapis.com/css2?family=Bebas+Neue&display=swap');

  /*   wp_enqueue_style('custom-google-fonts2', '//fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600;700&display=swap'); */

  wp_enqueue_style('custom-google-fonts3', '//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700');
  

  // wp_enqueue_style('//fonts.googleapis.com/css2?family=Water+Brush&display=swap');
  // 2
  wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');

  // 1/css/bootstrap.css
  // wp_enqueue_style('university_main_styles', get_theme_file_uri('/css/bootstrap.css'));
  wp_enqueue_style('university_extra_styles', get_theme_file_uri('/css/bootstrap.min.css'));

  wp_enqueue_style('university_mymain_styles', get_theme_file_uri('/css/style.css'));
  // wp_enqueue_style('university_myextra_styles', get_theme_file_uri('/css/style2.css'));

  wp_enqueue_style('university_mylightbox', get_theme_file_uri('/css/nivo-lightbox/nivo-lightbox.css'));
  wp_enqueue_style('university_my_nivo', get_theme_file_uri('/css/nivo-lightbox/default.css'));
}

add_action('wp_enqueue_scripts', 'lespot_files');

function university_features() {
  add_theme_support('title-tag');
}

add_action('after_setup_theme', 'university_features');
