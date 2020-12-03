<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage iawebtheme001
 * @since 1.0.0
 */
?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_enqueue_style( 'style', get_stylesheet_uri() ); ?>
	<?php wp_head(); ?> 
</head>
<body>
<div id = "wrapper"> 
<div id = "header">
<!-- this is the code that we want to work as logo -->
<!-- <img src="<?php echo( get_header_image() ); ?>"> -->
<img src = "http://radicalwebdevelopment.com/wp-content/themes/iawebtheme001/img/RWDlogo003.png" >

<!--
<p class = "titleText">
<?php // bloginfo( 'name' ) ; ?>
</p><p class = "titleSubText">
<?php // bloginfo( 'description' ); ?>
</p>
-->


</div> <!-- end site header -->

<div id = "navbar"> <?php wp_nav_menu() ?> </div>
<div id = "banner"> 
<img src="<?php echo( get_header_image() ); ?>">
</div>

