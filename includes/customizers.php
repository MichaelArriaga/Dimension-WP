<?php

  // placeholder data
  $themeTitle = 'HTML5UP-dimension';
  $sectionNote = 'NOTE: The page will automatially reload back to the default screen when entering content, this is normal. To see your content, first hit "publish" to save your changes, and then click on the section to view your content';
  $lorem = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae eum animi nam, repudiandae voluptatem in esse sint, dignissimos illo labore nobis ipsam id. Deserunt dolorum dolore quasi dicta ab voluptate?';
  $markupNote = 'NOTE: You can add HTML elements here';


function intro_customizer($wp_customize) {
  global $themeTitle, $sectionNote, $lorem, $markupNote;

  
  $wp_customize->add_section('intro', array(
    'title' => __('Intro', $themeTitle),
    'description' => sprintf(__("Options for Intro Section - {$sectionNote}", $themeTitle)),
    'priority' => 1
  ));
  // img
  $wp_customize->add_setting('intro_img', array(
        'default' => get_bloginfo('template_directory') . '/images/pic01.jpg',
        'type' => 'theme_mod'
    ));

  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'intro_img', 
      array(
        'label' => __('Image', $themeTitle),
        'section' => 'intro',
        'settings' => 'intro_img',
        'priority' => 1
      )
   ));
   //content
  $wp_customize->add_setting('intro_body', array(
    'default' => $lorem, $themeTitle,
    'type' => 'theme_mod'
  ));

  $wp_customize->add_control('intro_body', array(
      'type' => 'textarea',
      'label' => __('Intro Content', $themeTitle),
      'section' => 'intro',
      'description' => __( $markupNote ),
      'priority' => 3
    ));

}
add_action('customize_register', 'intro_customizer');


function work_customizer($wp_customize) {
  global $themeTitle, $sectionNote, $lorem, $markupNote;
  
  $wp_customize->add_section('work', array(
    'title' => __('Work', $themeTitle),
    'description' => sprintf(__("Options for work section - {$sectionNote}", $themeTitle)),
    'priority' => 2
  ));
  // img
  $wp_customize->add_setting('work_img', array(
    'default' => get_bloginfo('template_directory'). '/images/pic02.jpg',
    'type' => 'theme_mod'
  ));

  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'work_img', array(
    'label' => __('Image', $themeTitle),
    'section' => 'work',
    'settings' => 'work_img',
    'priority' => 1
    )
  ));
  // content
  $wp_customize->add_setting('work_body', array(
    'default' => $lorem, $themeTitle,
    'type' => 'theme_mod'
  ));

  $wp_customize->add_control('work_body', array(
    'type' => 'textarea',
    'label' => __('Work Content', $themeTitle),
    'section' => 'work',
    'description' => __( $markupNote ),
    'priority' => 2
  ));

}

add_action('customize_register', 'work_customizer');


function about_customizer($wp_customize) {
  global $themeTitle, $sectionNote, $lorem, $markupNote;
  
  $wp_customize->add_section('about', array(
    'title' => __('About', $themeTitle),
    'description' => sprintf(__("Options for about section - {$sectionNote}", $themeTitle)),
    'priority' => 3
  ));
  // img
  $wp_customize->add_setting('about_img', array(
    'default' => get_bloginfo('template_directory'). '/images/pic03.jpg',
    'type' => 'theme_mod'
  ));

  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'about_img', array(
    'label' => __('Image', $themeTitle),
    'section' => 'about',
    'settings' => 'about_img',
    'priority' => 1
    )
  ));
  // content
  $wp_customize->add_setting('about_body', array(
    'default' => $lorem, $themeTitle,
    'type' => 'theme_mod'
  ));

  $wp_customize->add_control('about_body', array(
    'type' => 'textarea',
    'label' => __('About Content', $themeTitle),
    'section' => 'about',
    'description' => __( $markupNote ),
    'priority' => 2
  ));

}

add_action('customize_register', 'about_customizer');

function contact_customizer($wp_customize) {
  global $themeTitle, $sectionNote, $lorem, $markupNote;
  
  $wp_customize->add_section('contact', array(
    'title' => __('Contact', $themeTitle),
    'description' => sprintf(__("Options for contact section", $themeTitle)),
    'priority' => 4
  ));

  // ICON PATHS
  // twitter
  $wp_customize->add_setting('twitter_path', array(
    'default' => 'http://twitter.com', $themeTitle,
    'type' => 'theme_mod'
  ));

  $wp_customize->add_control('twitter_path', array(
    'label' => __('Twitter URL', $themeTitle),
    'section' => 'contact',
    'priority' => 2
  ));

  // facebook
  $wp_customize->add_setting('facebook_path', array(
    'default' => 'http://facebook.com', $themeTitle,
    'type' => 'theme_mod'
  ));

  $wp_customize->add_control('facebook_path', array(
    'label' => __('Facebook URL', $themeTitle),
    'section' => 'contact',
    'priority' => 2
  ));

    
  // isntagram
  $wp_customize->add_setting('instagram_path', array(
    'default' => 'http://instagram.com', $themeTitle,
    'type' => 'theme_mod'
  ));

  $wp_customize->add_control('instagram_path', array(
    'label' => __('Instagram URL', $themeTitle),
    'section' => 'contact',
    'priority' => 2
  ));


  // github
  $wp_customize->add_setting('github_path', array(
    'default' => 'http://github.com', $themeTitle,
    'type' => 'theme_mod'
  ));

  $wp_customize->add_control('github_path', array(
    'label' => __('Github URL', $themeTitle),
    'section' => 'contact',
    'priority' => 2
  ));
  

}

add_action('customize_register', 'contact_customizer');


