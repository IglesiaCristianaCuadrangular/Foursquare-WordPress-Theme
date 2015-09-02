<?php
/**
 * Template Name: Contact
 *
 * @package WordPress
 * @subpackage IglesiaCuadrangular
 * @since IglesiaCuadrangular 1.0
 *
 * The template for the thene's contact page.
 */

get_header(); ?>

<div class="row">
	<section id="page" class="contact span7">
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			<h1><?php the_title(); ?></h1>
			<hr />
			<?php the_content(); ?>
			<hr />
			<?php echo do_shortcode("[contact-form-7 id='4' 'title='Contact form 1']"); ?>
	
			<?php wp_link_pages( array( 'before' => '' . __( 'Pages:', 'twentyten' ), 'after' => '' ) ); ?>
		<?php endwhile; ?>
	</section><!--End page-->
	<?php include ('sidebar-contact.php'); ?>
</div><!--End row-->

<?php include ('sidebar-footer.php'); ?>

<?php get_footer(); ?>
