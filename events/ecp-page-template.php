<?php

// Don't load directly
if ( !defined('ABSPATH') ) { die('-1'); }

?>	
<?php get_header(); ?>
<div class="row">
	<div id="page-full" class="span11">
<h1><?php tribe_events_title(); ?></h1>ff
<hr />
<?php tribe_events_before_html() ?>
<?php include(tribe_get_current_template()); ?>
<?php tribe_events_after_html() ?>
	</div><!--end page-full-->
</div><!-- end row -->

<?php include ('sidebar-fullwidth.php'); ?>
<?php get_footer(); ?>