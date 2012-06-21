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
  <title><?php wp_title('|', true, 'right'); ?> <?php bloginfo('name'); ?></title>

  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
  <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>

  <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
  <link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
  <link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
  <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Comments Feed" href="<?php bloginfo('comments_rss2_url'); ?>" />

  <?php wp_enqueue_script('jquery'); ?>

  <!--[if IE]>        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>  <![endif]-->
  <!--[if lte IE 7]>  <script src="js/IE8.js" type="text/javascript"></script>                    <![endif]-->
  <!--[if lt IE 7]>   <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_directory'); ?>/css/ie6.css"/>     <![endif]-->

  <?php wp_head(); ?>

  <script type="text/javascript">
    /* <![CDATA[ */
    jQuery(document).ready(function($) {
        $('#s').click (function() { if ($('#s').val() == 'Search') { $("#s").val(''); } });
        $('#s').blur (function(){ if ($('#s').val() == '') { $('#s').val('Search'); } });
    });
    /* ]]> */
  </script>
</head>

<body <?php body_class(); ?>>

  <div id="wrapper">
  
    <header id="header">
    
      <nav>
        <form id="searchform" method="get" action="<?php bloginfo('home'); ?>">
          <input type="text" name="s" id="s" value="Search" />
        </form>
        
        <ul>
          <li><a href="http://nithinbekal.com/">Home</a></li>
          <li><a href="http://nithinbekal.com/about">About</a></li>
          <li><a href="http://github.com/nithinbekal">Code</a></li>
          <li><a href="http://twitter.com/nithinbekal">Twitter</a></li>
        </ul>
      </nav>
      
      <h1 class="title"><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
      
    </header>