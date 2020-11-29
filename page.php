<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage iawebtheme001
 * @since 1.0.0
 */
?>


<?php
get_header();
?>
<div id = "main_content">
<h1><?php the_title() ?></h1>
<?php the_content() ?>
</div> <!-- end main content -->
<?php 
/* get_sidebar();*/
get_footer();
?>