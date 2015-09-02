<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage IglesiaCuadrangular
 * @since IglesiaCuadrangular 1.0
 */
?>

<footer>
	<div class="container">
			<div class="span5 copyright basico">
				<p class="copyrights"><span>&copy; <?php echo date("Y") ?>
				<a href="<?php echo home_url( '/' ) ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span></p>
				<p class="copyrights"><span><a href="http://fecuadrangularvenezuela.com" alt="Federación de Iglesias Cuadrangulares de Venezuela">Federación de Iglesias Cuadrangulares de Venezuela</a></span></p>
				<p class="copyrights"><span><a href="http://www.foursquare.org" alt="The Foursquare Church">The Foursquare Church</a></span></p>
				<?php if(is_multisite()): ?>
				<select id="red" onchange="window.location=this.value;">
				<?php foreach (wp_get_sites() as $blog): ?>
				<?php $a=get_blog_details( $blog["blog_id"] )  ?>
					<option value="<?php echo $a->siteurl ?>" <?php echo ( get_bloginfo( 'url' )==$a->siteurl) ? ' selected="selected"' :NULL; ?>>
				<?php echo $a->blogname ?>
				</option>
				<?php endforeach; ?>
				</select>
				<?php endif ?>
				<p class="devs"><!-- span>Desarrollado por: <a href="http://www.coderic.co.ve">Coderic, S.A.</a></span--> <a class="icon-admin-set" href="<?php echo home_url( '/' ) ?>wp-admin/" title="Si está autorizado a publicar en este portal haga click aquí."><?php echo do_shortcode('[icon type="cog" /]'); ?></a><a class="icon-admin-set" href="https://dev.iglesiacuadrangular.com.ve/" title="Si desea colaborar en el desarrollo de este portal haga click aquí."><i class="ant"></i></a></p>			
			</div>
			<div class="span1">
				<a href="#"><img class="bbm" src="<?php bloginfo('template_directory')?>/assets/images/bbm-C004475E1.png" title="Escanealo con tu BBM y entra al Canal de la Iglesia."></a>
				<?php echo get_option('nt_android'); ?>
			</div>
			<div class="span1">
		<?php 
		if(get_option('nt_facebook') || get_option('nt_twitter') || get_option('nt_googleplus')) {
			echo do_shortcode('[table type2="condensed"]');
		    	if ( get_option('nt_facebook') ) :
		    		echo do_shortcode('[row][column]');
		    	?>
		    		<div class="fb-like" data-href="<?php echo get_option('nt_facebook') ?>" data-layout="button_count" data-action="like" data-show-faces="false" data-share="true"></div>
		    	<?php
		    		echo do_shortcode('[end_column][end_row]');
		    	endif;
		    	if ( get_option('nt_twitter') ) :
		    		echo do_shortcode('[row][column]');
		    	?>
		    		<div><a href="https://twitter.com/<?php echo get_option('nt_twitter'); ?>" class="twitter-follow-button" data-show-count="true" data-show-screen-name="false" data-lang="es" data-dnt="true">Seguir a @<?php echo get_option('nt_twitter'); ?></a></div>
		    	<?php
		    		echo do_shortcode('[end_column][end_row]');
		    	endif;
		    	if ( get_option('nt_googleplus') ) :
		    		echo do_shortcode('[row][column]'); ?>
		    		<div class="googleplus">
						<a href="<?php echo get_option('nt_googleplus') ?>">Google+</a>
					</div>
		    	<?php
		    	echo do_shortcode('[end_column][end_row]');
		    	endif;
	    	echo do_shortcode('[end_table]');
		} ?>
			</div>
			<div class="copyright fiscal">
			<?php 
			echo do_shortcode('[table type2="condensed"]');
			if(get_option('nt_razon_social'))
				echo do_shortcode('[row][column]<span>'.get_option('nt_razon_social').' ('.get_option('nt_rif').')</span>[end_column][end_row]');
			if(get_option('nt_direccion'))
				echo do_shortcode('[row][column]'	.get_option('nt_direccion').'[end_column][end_row]');
			if(get_option('nt_telefonos') || get_option('nt_email')) {
				echo do_shortcode('[row][column]');
				if(get_option('nt_telefonos'))
					echo '<a href="callto:'.get_option('nt_telefonos').'">'.get_option('nt_telefonos').'</a> ';
				if(get_option('nt_email'))
					echo do_shortcode('<a href="mailto:'	.get_option('nt_email').'">' . do_shortcode('[icon type="envelope" /]') . ' ' . get_option('nt_email') . '</a>');
				echo do_shortcode('[end_column][end_row]');
			}
			echo do_shortcode('[end_table]') ?>
			</div>
	</div>
</footer>

<!-- JAVASCRIPT (located at page bottom for fast load)
*********************************************************************** -->
<script
	src="<?php bloginfo('template_directory')?>/assets/js/bootstrap-collapse-min.js"></script>
<script
	src="<?php bloginfo('template_directory')?>/assets/js/bootstrap-transition-min.js"></script>
<script
	src="<?php bloginfo('template_directory')?>/assets/js/bootstrap-modal-min.js"></script>
<script
	src="<?php bloginfo('template_directory')?>/assets/js/bootstrap-dropdown-min.js"></script>

<!-- Video.js: http://videojs.com/ -->
<script src="http://vjs.zencdn.net/c/video.js"></script>

<!-- RefTagger from Logos. Visit http://www.logos.com/reftagger. This code should appear directly before the </body> tag. -->
<script src="http://bible.logos.com/jsapi/referencetagging.js"
	type="text/javascript"></script>
<script type="text/javascript">
    Logos.ReferenceTagging.lbsBibleVersion = "NVI";
    Logos.ReferenceTagging.lbsLinksOpenNewWindow = true;
    Logos.ReferenceTagging.lbsLogosLinkIcon = "dark";
    Logos.ReferenceTagging.lbsNoSearchTagNames = [ "h2", "h3", "h3", "h4", "h5", "h6", "span" ];
    Logos.ReferenceTagging.lbsTargetSite = "biblia";
    Logos.ReferenceTagging.tag();
    Logos.ReferenceTagging.lbsCssOverride = true;
</script>

<script type="text/javascript">
// Adding the class selected background class to the body  //	
jQuery(document).ready(function(){
jQuery("body").addClass("<?php echo get_option('nt_background'); ?>");
  });
</script>

<script type="text/javascript">
// Adding the class "dropdown" to li elements with submenus  //	
jQuery(document).ready(function(){
jQuery("ul.sub-menu").parent().addClass("dropdown");
jQuery("ul#main-menu li.dropdown a").addClass("");
jQuery("ul.sub-menu li a").removeClass("dropdown-toggle"); 
  });
</script>

<script type="text/javascript">
jQuery(document).ready(function(){
 // Don't FORGET: replace all $ with jQuery to prevent conflicts //
jQuery('a.dropdown-toggle')
.attr('data-toggle', 'dropdown');
  });
</script>

<script type="text/javascript">
jQuery(document).ready(function(){
 // Don't FORGET: replace all $ with jQuery to prevent conflicts //
 jQuery(function () {
        jQuery(".tablesorter-example").tablesorter({ sortList: [[1,0]] });
        jQuery('.dropdown-toggle').dropdown();
      })
  });
</script>

<?php
/*
 * Always have wp_footer() just before the closing </body>
 * tag of your theme, or you will break many plugins, which
 * generally use this hook to reference JavaScript files.
 */

wp_footer ();
?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-60076044-1', 'auto');
  ga('send', 'pageview');

</script>

<div id="fb-root"></div>

<script type="text/javascript">
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '467818103369447',
      xfbml      : true,
      cookie     : true,
      version    : 'v2.2'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/es_LA/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
<!-- twitter integration -->
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

<div id="livezilla_tracking" style="display:none">
</div>
<script type="text/javascript">
var script = document.createElement("script");script.type="text/javascript";var src = "http://iglesiacuadrangular.com.ve/livezilla/server.php?request=track&output=jcrpt&nse="+Math.random();setTimeout("script.src=src;document.getElementById('livezilla_tracking').appendChild(script)",1);
</script>
<noscript>
<img src="http://iglesiacuadrangular.com.ve/livezilla/server.php?request=track&amp;output=nojcrpt" width="0" height="0" style="visibility:hidden;" alt="">
</noscript>

</body>
</html>