<?php
/**
 * Template Name: Home
 *
 * The homepage template for the theme
 *
 * @package WordPress
 * @subpackage IglesiaCuadrangular
 * @since IglesiaCuadrangular 1.0
 */

get_header(); ?>
<?php if (!is_main_site()) : ?>

<section id="hero" class="masthead">
	<?php echo do_shortcode("[flexslider]"); ?>
</section>
<section id="content" class="row">
	<div class="news span5">
		<h1>Artículos</h1>
		<?php
		// The Query
		query_posts( 'showposts=3&posts_per_page=4&paged=' .$paged );
		// The Loop
		while ( have_posts() ) : the_post(); ?>
    
    	<article>
    		<a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail( $id, 'thumbnail' ); ?></a>
    		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    		<?php wpe_excerpt('wpe_excerptlength_teaser', 'wpe_excerptmore'); ?>
    		<hr />
    	</article>
	<?php endwhile; ?>
	</div><!--end news-->
	<div class="info span6">
		<? /* This code retrieves our admin options from Maps and Services. */ ?>
		<?
			global $options;
			foreach ($options as $value) {
    			if (get_settings( $value['id'] ) === FALSE) { $$value['id'] = $value['std']; } else { $$value['id'] = get_settings( $value['id'] ); }
			}
		?>	
		<h1>Visite nuestra iglesia</h1>
		<?php if(get_option('nt_mapa')): ?>
		<?php echo do_shortcode('[mapa_google width="570" height="340" direccion="'.get_option('nt_mapa').'"/]'); ?>
		<?php get_option('nt_mapa'); ?>
		<?php else: ?>
		<img src="<?php bloginfo('template_directory') ?>/assets/images/mapa.png" width="570" height="240" />
		<?php endif ?>
		<h2>Horario de los servicios</h2>
		<?php 
		echo do_shortcode('[table type="striped" type2="condensed" type3="bordered"]'); 
		if(get_option('nt_domingo')) 
			echo do_shortcode('[row][column]Domingo[end_column][column]'.get_option('nt_domingo').'[end_column][end_row]');
		if(get_option('nt_lunes'))
			echo do_shortcode('[row][column]Lunes[end_column][column]'	.get_option('nt_lunes').'[end_column][end_row]');
		if(get_option('nt_martes'))
			echo do_shortcode('[row][column]Martes[end_column][column]'	.get_option('nt_martes').'[end_column][end_row]');
		if(get_option('nt_miercoles')) 
			echo do_shortcode('[row][column]Miércoles[end_column][column]'.get_option('nt_miercoles').'[end_column][end_row]');
		if(get_option('nt_jueves')) 
			echo do_shortcode('[row][column]Jueves[end_column][column]'.get_option('nt_jueves').'[end_column][end_row]');
		if(get_option('nt_viernes')) 
			echo do_shortcode('[row][column]Viernes[end_column][column]'.get_option('nt_viernes').'[end_column][end_row]');
		if(get_option('nt_sabado')) 
			echo do_shortcode('[row][column]Sábado[end_column][column]'.get_option('nt_sabado').'[end_column][end_row]');
		echo do_shortcode('[end_table]') ?>
    	<hr>
    	<h2>Nuestras Redes Sociales</h2>
    	<?php if ( get_option('nt_facebook') ): ?>
    	<div class="fb-like-box" data-href="<?php echo get_option('nt_facebook') ?>" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="true" data-show-border="false"></div>
    	<?php endif ?>
    	<?php if ( get_option('nt_twitter') && get_option('nt_twitter_widget') ): ?>
    	<a class="twitter-timeline" href="<?php echo get_option('nt_twitter') ?>" data-widget-id="<?php echo get_option('nt_twitter_widget') ?>">Tweets de @<?php echo get_option('nt_twitter') ?>.</a>
    	<?php endif ?>
    	</div><!--end info-->
</section>
<?php include ('sidebar-footer.php'); ?>
<?php else: ?>
<section id="hero" class="masthead">

</section>
<section id="content" class="row">
	<div class="news span6 portales">
	<ol>
	<?php foreach (wp_get_sites() as $blog): ?>
	<?php $a=get_blog_details( $blog["blog_id"] )  ?>
	<?php if (get_bloginfo( 'url' ) != $a->siteurl):?>
	<li><h2><a href="<?php echo $a->siteurl ?>"><?php echo $a->blogname ?></a></h2></li>
	<?php endif ?>
	<?php endforeach; ?>
	</ol>
<div style="clear:both;"></div>		
	</div><!--end news-->
	<div class="info span5">
		<h1>Nuestras redes sociales</h1>
		<article>
    		
    	</article>
	</div>	
</section>
<?php include ('sidebar-home-network.php'); ?>
<?php endif ?>
</div><!--end container (in header.php)-->
<?php get_footer(); ?>