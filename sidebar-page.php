<?php
/**
 * The Sidebar for all subpages.
 *
 * @package WordPress
 * @subpackage IglesiaCuadrangular
 * @since IglesiaCuadrangular 1.0
 */
?>
            
<aside id="sidebar" class="page span3">

<?php
	/* When we call the dynamic_sidebar() function, it'll spit out
	 * the widgets for that widget area. If it instead returns false,
	 * then the sidebar simply doesn't exist, so we'll hard-code in
	 * some default sidebar stuff just in case.
	 */
	if ( ! dynamic_sidebar( 'subpage-widget-area' ) ) : ?>
		<li>
            <h3 id="searchhead">Buscar por</h3>
			<?php get_search_form(); ?>
		</li>
<?php endif; // end subpage widget area ?>

</aside>