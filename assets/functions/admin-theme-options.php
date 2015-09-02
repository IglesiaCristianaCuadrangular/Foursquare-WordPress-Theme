<?php
// ###############################################################################
// FOURSQUARE THEME OPTIONS PANEL
// @Google Map Integration
// @Church Service Times
// ###############################################################################

// Set up the options panel
$themename = "Iglesia";
$shortname = "nt";

$categories = get_categories ( 'hide_empty=0&orderby=name' );
$wp_cats = array ();
foreach ( $categories as $category_list ) {
	$wp_cats [$category_list->cat_ID] = $category_list->cat_name;
}
array_unshift ( $wp_cats, "Choose a category" );

$options = array (
		
		array (
				"name" => "Opciones de ".$themename,
				"type" => "title" 
		),


		//Configuración básica
		array (
				"type" => "close"
		),
		array (
				"name" => "Identificación Jurídica y Contacto",
				"type" => "section"
		),
		array (
				"type" => "open"
		),
		array (
				"name" => "Razón Social",
				"desc" => "Indíque la razón social.",
				"id" => $shortname . "_razon_social",
				"type" => "text",
				"std" => ""
		),
		array (
				"name" => "RIF",
				"desc" => "Indíque el número de Registro de Información fiscal.",
				"id" => $shortname . "_rif",
				"type" => "text",
				"std" => ""
		),
		array (
				"name" => "Dirección",
				"desc" => "La dirección.",
				"id" => $shortname . "_direccion",
				"type" => "text",
				"std" => ""
		),
		array (
				"name" => "Email",
				"desc" => "Indíque la dirección de correo electrónico.",
				"id" => $shortname . "_email",
				"type" => "text",
				"std" => ""
		),
		array (
				"name" => "Teléfonos",
				"desc" => "Indíque los números telefónicos.",
				"id" => $shortname . "_telefonos",
				"type" => "text",
				"std" => ""
		),


		// Google Map integration
		array (
				"type" => "close"
		),
		array (
				"name" => "Mapa de Google",
				"type" => "section"
		),
		array (
				"type" => "open"
		),
		array (
				"name" => "Dirección del mapa",
				"desc" => "Indíque la dirección del mapa o las coordenadas",
				"id" => $shortname . "_mapa",
				"type" => "text",
				"std" => ""
		),
		
		// Church Service Times
		array (
				"type" => "close" 
		),
		array (
				"name" => "Horario de los servicios",
				"type" => "section" 
		),
		
		array (
				"type" => "open" 
		),
		array (
				"name" => "Servicio los domingos",
				"desc" => "<p>ingrese el horario del servicio.</p><p><b>Ejemplo</b> 10:00am-12:00pm.</p>",
				"id" => $shortname . "_domingo",
				"type" => "text",
				"std" => "" 
		),
		array (
				"name" => "Servicio los lunes",
				"desc" => "<p>ingrese el horario del servicio.</p><p><b>Ejemplo</b> 10:00am-12:00pm.</p>",
				"id" => $shortname . "_lunes",
				"type" => "text",
				"std" => "" 
		),
		array (
				"name" => "Servicio los martes",
				"desc" => "<p>ingrese el horario del servicio.</p><p><b>Ejemplo</b> 10:00am-12:00pm.</p>",
				"id" => $shortname . "_martes",
				"type" => "text",
				"std" => "" 
		),
		array (
				"name" => "Servicio los miércoles",
				"desc" => "<p>ingrese el horario del servicio.</p><p><b>Ejemplo</b> 10:00am-12:00pm.</p>",
				"id" => $shortname . "_miercoles",
				"type" => "text",
				"std" => "" 
		),
		array (
				"name" => "Servicio los jueves",
				"desc" => "<p>ingrese el horario del servicio.</p><p><b>Ejemplo</b> 10:00am-12:00pm.</p>",
				"id" => $shortname . "_jueves",
				"type" => "text",
				"std" => "" 
		),
		array (
				"name" => "Servicio los viernes",
				"desc" => "<p>ingrese el horario del servicio.</p><p><b>Ejemplo</b> 10:00am-12:00pm.</p>",
				"id" => $shortname . "_viernes",
				"type" => "text",
				"std" => "" 
		),
		array (
				"name" => "Servicio los sábado",
				"desc" => "<p>ingrese el horario del servicio.</p><p><b>Ejemplo</b> 10:00am-12:00pm.</p>",
				"id" => $shortname . "_sabado",
				"type" => "text",
				"std" => "" 
		),
		
		
		// Google Analytics Integration
		array (
				"type" => "close" 
		),
		array (
				"name" => "Redes Sociales",
				"type" => "section" 
		),
		array (
				"type" => "open" 
		),

		array (
				"name" => "Cuenta de Twitter",
				"desc" => "<p>El nombre de tu cuenta en twitter.</p>",
				"id" => $shortname . "_twitter",
				"type" => "text",
				"std" => ""
		),
		array (
				"name" => "ID Widget de Twitter",
				"desc" => "<p>Debe crear un Widget de twitter <a href='https://twitter.com/settings/widgets/'>aquí</a>.</p>",
				"id" => $shortname . "_twitter_widget",
				"type" => "text",
				"std" => ""
		),
		array (
				"name" => "Dirección en Facebook",
				"desc" => "<p>Pega la dirección de Facebook</p>",
				"id" => $shortname . "_facebook",
				"type" => "text",
				"std" => "" 
		),
		array (
				"name" => "Administradores en Facebook",
				"desc" => "<p>ingresa los ID separados por coma de los usuarios que podrán administrar los comentarios</p>",
				"id" => $shortname . "_facebook_admins",
				"type" => "text",
				"std" => "" 
		),
		array (
				"name" => "Dirección en Google+",
				"desc" => "<p>Pega la dirección de Google+</p>",
				"id" => $shortname . "_googleplus",
				"type" => "text",
				"std" => "" 
		),
		array (
				"name" => "Pin de Canal de BBM",
				"desc" => '<p>Primero debe registrar un PIN de canal de BBM <a href="#">aquí</a></p>',
				"id" => $shortname . "_bbm",
				"type" => "text",
				"std" => "" 
		),
		
		
);
function mytheme_add_admin() {
	global $themename, $shortname, $options;
	
	if ($_GET ['page'] == basename ( __FILE__ )) {
		
		if ('save' == $_REQUEST ['action']) {
			
			foreach ( $options as $value ) {
				update_option ( $value ['id'], $_REQUEST [$value ['id']] );
			}
			
			foreach ( $options as $value ) {
				if (isset ( $_REQUEST [$value ['id']] )) {
					update_option ( $value ['id'], $_REQUEST [$value ['id']] );
				} else {
					delete_option ( $value ['id'] );
				}
			}
			
			header ( "Location: admin.php?page=admin-theme-options.php&saved=true" );
			die ();
		} else if ('reset' == $_REQUEST ['action']) {
			
			foreach ( $options as $value ) {
				delete_option ( $value ['id'] );
			}
			
			header ( "Location: admin.php?page=admin-theme-options.php&reset=true" );
			die ();
		}
	}
	
	add_menu_page ( $themename, $themename, 'edit_theme_options', basename ( __FILE__ ), 'mytheme_admin' );
}
function mytheme_add_init() {
	$file_dir = get_bloginfo ( 'template_directory' );
	wp_enqueue_style ( "functions", $file_dir . "/assets/functions/functions.css", false, "1.0", "all" );
	wp_enqueue_script ( "rm_script", $file_dir . "/assets/js/admin-rm-script-min.js", false, "1.0" );
}
function mytheme_admin() {
	global $themename, $shortname, $options;
	$i = 0;
	
	if ($_REQUEST ['saved'])
		echo '<div id="message" class="updated fade"><p><strong>Se han guardado las configuraciones.</strong></p></div>';
	if ($_REQUEST ['reset'])
		echo '<div id="message" class="updated fade"><p><strong>Se han restaurado las configuraciones.</strong></p></div>';
	
	?>
<div class="wrap rm_wrap">
	<div class="rm_wrap_logo">
		<h2>Configuración de Portal</h2>
	</div>

	<div class="rm_opts">
		<form method="post">
<?php
	
foreach ( $options as $value ) {
		switch ($value ['type']) {
			
			case "open" :
				?>
 
<?php
				
break;
			
			case "close" :
				?>
 

	
	</div>
</div>
<br />


<?php
				
break;
			
			case "title" :
				?>
<p>Opciones que puedes usar para personalizar el aspecto del portal.</p>


<?php
				
break;
			
			case 'text' :
				?>

<div class="rm_input rm_text">
	<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
	<input name="<?php echo $value['id']; ?>"
		id="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>"
		value="<?php if ( get_settings( $value['id'] ) != "") { echo stripslashes(get_settings( $value['id'])  ); } else { echo $value['std']; } ?>" />
	<small><?php echo $value['desc']; ?></small>
	<div class="clearfix"></div>

</div>
<?php
				break;
			
			case 'textarea' :
				?>

<div class="rm_input rm_textarea">
	<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
	<textarea name="<?php echo $value['id']; ?>"
		type="<?php echo $value['type']; ?>" cols="" rows=""><?php if ( get_settings( $value['id'] ) != "") { echo stripslashes(get_settings( $value['id']) ); } else { echo $value['std']; } ?></textarea>
	<small><?php echo $value['desc']; ?></small>
	<div class="clearfix"></div>

</div>

<?php
				break;
			
			case 'select' :
				?>

<div class="rm_input rm_select">
	<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>

	<select name="<?php echo $value['id']; ?>"
		id="<?php echo $value['id']; ?>">
<?php foreach ($value['options'] as $option) { ?>
		<option
			<?php if (get_settings( $value['id'] ) == $option) { echo 'selected="selected"'; } ?>><?php echo $option; ?></option><?php } ?>
</select> <small><?php echo $value['desc']; ?></small>
	<div class="clearfix"></div>
</div>
<?php
				break;
			
			case "checkbox" :
				?>

<div class="rm_input rm_checkbox">
	<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
	
<?php if(get_option($value['id'])){ $checked = "checked=\"checked\""; }else{ $checked = "";} ?>
<input type="checkbox" name="<?php echo $value['id']; ?>"
		id="<?php echo $value['id']; ?>" value="true" <?php echo $checked; ?> />


	<small><?php echo $value['desc']; ?></small>
	<div class="clearfix"></div>
</div>
<?php
				
break;
			case "section" :
				
				$i ++;
				
				?>

<div class="rm_section">
	<div class="rm_title">
		<h3>
			<img
				src="<?php bloginfo('template_directory')?>/assets/functions/images/trans.png"
				class="inactive" alt="""><?php echo $value['name']; ?></h3>
		<span class="submit"><input name="save<?php echo $i; ?>" type="submit"
			value="Guardar Cambios" /> </span>
		<div class="clearfix"></div>
	</div>
	<div class="rm_options">

 
<?php
				
break;
		}
	}
	?>
 
<input type="hidden" name="action" value="save" />
		</form>
		<form method="post">
			<p class="submit">
				<input name="reset" type="submit" value="Restaurar" /> <input
					type="hidden" name="action" value="reset" />
			</p>
		</form>
	</div> 
 

<?php
}
?>
<?php

add_action ( 'admin_init', 'mytheme_add_init');
add_action('admin_menu', 'mytheme_add_admin');
