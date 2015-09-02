<?php
/**
 * The Search Form in the sidebar area.
 *
 * @package WordPress
 * @subpackage IglesiaCuadrangular
 * @since IglesiaCuadrangular 1.0
 */
?>


	<form method="get" class="search-form" id="search-form" action="<?php bloginfo( 'home' ); ?>/">
	<div>
		<input class="search-text" type="text" name="s" id="search-text" value="" />
		<input class="search-submit btn btn-primary" type="submit" name="submit" id="search-submit" value="Buscar" />
	</div>
	</form>