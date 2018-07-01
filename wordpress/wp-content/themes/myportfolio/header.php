<!DOCTYPE html>
<html>
<head>
  <?php wp_head(); ?>
  <title><?php bloginfo('name'); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta charset="<?php bloginfo('charset')?>">
</head>
<body <?php body_class(); ?>>


<!--Navbar-->
<div class="topnav" id="myTopnav">
  <a href="<?php echo site_url('/home'); ?>" class="active">Home</a>
  <a href="<?php echo site_url('/portfolio'); ?>">Portfolio</a>
  <a href="#contact">About Me</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>
<!--Navbar-->

<!-- Header -->
<div class="darken-overlay">
  <header style="background-image: url(<?php echo get_theme_file_uri('/img/computer.jpg'); ?>);">
    <div class="wrapper">

      <h1 class="intro">
        Hi, I'm Karl
      <br>
       <?php bloginfo('description'); ?>
      </h1>

      
      <p><a href="#about"><button type="button" >Let's Start!</button></a></p>
      
    </div>
  </header>
</div>
<!-- Header -->








   

