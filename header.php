<?php
/**
 * @package WordPress
 * @subpackage doodles2
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  
  <title><?php wp_title('|', true, 'right'); ?> <?php bloginfo('name'); ?></title>

  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
  <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
  <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>

  <?php wp_enqueue_script('jquery'); ?>

  <!--[if IE]>        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>                                       <![endif]-->
  <!--[if lte IE 8]>  <script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE8.js" type="text/javascript"></script>        <![endif]-->
  <!--[if lt IE 7]>   <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_directory'); ?>/css/ie6.css"/> <![endif]-->

  <?php wp_head(); ?>

  <script type="text/javascript">
    /* <![CDATA[ */
    jQuery(document).ready(function($) {
        $('#s').click (function() { if ($('#s').val() == 'Search') { $("#s").val(''); } });
        $('#s').blur (function(){ if ($('#s').val() == '') { $('#s').val('Search'); } });
    });
    /* ]]> */
  </script>
  <?php get_template_part('analytics'); ?>
</head>

<body <?php body_class(); ?>>

  <div id="wrapper">
  
    <header id="header">
    
      <nav>
        <form id="searchform" method="get" action="<?php bloginfo('home'); ?>">
          <input type="text" name="s" id="s" value="Search" />
        </form>
        
        <ul>
          <?php get_links('-1', '<li>', '</li>', ' ', FALSE, '', FALSE); ?>
        </ul>
      </nav>
      
      <h1 class="title"><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
      
    </header>