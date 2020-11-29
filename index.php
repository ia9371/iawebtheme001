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
<h1><?php wp_title() ?></h1>
<div id = "leftcollumn">
<?php
// Loop to display blog posts 
if ( have_posts() ) : 
    while ( have_posts() ) : the_post();
		the_title();
        the_content();
    endwhile;
else :
    _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
endif;
?>
</div> <!-- end left collumn -->
<div id = "sidebar">
<?php if ( is_active_sidebar( 'custom-side-bar' ) ) : ?>
    <?php dynamic_sidebar( 'custom-side-bar' ); ?>
<?php endif; ?>
</div> <!-- end of sidebar div -->

</div> <!-- end main content -->
<?php
/* get_sidebar(); */
get_footer();
?>