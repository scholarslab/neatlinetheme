<!DOCTYPE html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!-- Consider specifying the language of your content by adding the `lang` attribute to <html> -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>

    <meta charset="utf-8">

    <title><?php echo settings('site_title'); echo isset($title) ? ' | ' . strip_formatting($title) : ''; ?></title>

    <meta name="description" content="">

    <!-- Mobile viewport optimized: h5bp.com/viewport -->
    <meta name="viewport" content="width=device-width">

    <?php echo auto_discovery_link_tags(); ?>

    <!-- Plugin Stuff -->
    <?php plugin_header(); ?>

    <?php display_css(); ?>
    <?php display_js(); ?>

</head>

<?php echo body_tag(array('id' => @$bodyid, 'class' => @$bodyclass)); ?>

<?php plugin_body(); ?>

<div id="wrap">
  <header role="banner">

    <?php plugin_page_header(); ?>

    <h1 id="site-title"><?php echo link_to_home_page(custom_display_logo()); ?></h1>

    <div id="search-container">
    <?php echo simple_search(); ?>
<?php if (get_theme_option('display_advanced_search_link')) echo link_to_advanced_search(null, array('class' => 'advanced-search')); ?>
    </div>

    <nav id="sitenav">
      <ul class="navigation">
        	<?php echo custom_public_nav_header(); ?>
      </ul>
    </nav>

  </header>

  <div role="main">

    <?php plugin_page_content(); ?>

