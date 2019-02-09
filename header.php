<!DOCTYPE HTML>
<!--
	Dimension by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<head>
  <title><?php bloginfo('name');?></title>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />


  <?php wp_head(); ?>

</head>


<body class="is-preload <?php body_class(); ?>">
  <!-- Wrapper -->
  <div id="wrapper">

    <!-- Header -->
    <header id="header">
      <div class="logo">
        <span class="icon fa-diamond"></span>
      </div>
      <div class="content">
        <div class="inner">
          <h1><?php bloginfo('name');?></h1>
          <p><?php bloginfo('description'); ?></p>
          
        </div>
      </div>
      <nav>
        <ul>
          <li><a href="#intro">Intro</a></li>
          <li><a href="#work">Work</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#contact">Contact</a></li>
          <!--<li><a href="#elements">Elements</a></li>-->
        </ul>
      </nav>
    </header>







