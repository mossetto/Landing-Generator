<?php
/**
	* Twenty Twenty-Two functions and definitions
	*
	* @link https://developer.wordpress.org/themes/basics/theme-functions/
	*
	* @package WordPress
	* @subpackage Twenty_Twenty_Two
	* @since Twenty Twenty-Two 1.0
	*/

// Aumenta el tiempo de ejecución máximo
ini_set('max_execution_time', 999);

// Aumenta el límite de memoria
ini_set('memory_limit', '999M');

if (!function_exists('twentytwentytwo_support')):

	/**
		* Sets up theme defaults and registers support for various WordPress features.
		*
		* @since Twenty Twenty-Two 1.0
		*
		* @return void
		*/
	function twentytwentytwo_support()
	{

		// Add support for block styles.
		add_theme_support('wp-block-styles');

		// Enqueue editor styles.
		add_editor_style('style.css');

	}

endif;

add_action('after_setup_theme', 'twentytwentytwo_support');

if (!function_exists('twentytwentytwo_styles')):

	/**
		* Enqueue styles.
		*
		* @since Twenty Twenty-Two 1.0
		*
		* @return void
		*/
	function twentytwentytwo_styles()
	{
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get('Version');

		$version_string = is_string($theme_version) ? $theme_version : false;
		wp_register_style(
			'twentytwentytwo-style',
			get_template_directory_uri() . '/style.css',
			array(),
			$version_string
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style('twentytwentytwo-style');

	}

endif;

add_action('wp_enqueue_scripts', 'twentytwentytwo_styles');

// Add block patterns
require get_template_directory() . '/inc/block-patterns.php';

add_action('pre_get_posts', 'aplicar_orden_paginas');

function aplicar_orden_paginas($query)
{
	// Verificar si se está en la página de listado de páginas
	if ($query->is_main_query() && is_admin() && get_current_screen()->id === 'edit-page') {
		// Aplicar orden de más antiguo a más reciente
		$query->set('order', 'DESC');
		$query->set('orderby', 'date');
	}
}


// Incluye TGM Plugin Activation Library
require_once get_template_directory() . '/TGM-Plugin-Activation-2.6.1/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'my_theme_register_required_plugins' );

function my_theme_register_required_plugins() {
    $plugins = array(
        array(
            'name' => 'WooCommerce',
            'slug' => 'woocommerce',
            'required' => false,
            'force_activation' => false,
            'force_deactivation' => false
        )
    );

    $config = array(
        'id' => 'my_theme_tgmpa',
        'default_path' => '',
        'menu' => 'my-theme-plugins',
        'parent_slug' => 'themes.php',
        'capability' => 'edit_theme_options',
        'has_notices' => true,
        'dismissable' => true,
        'dismiss_msg' => '',
        'is_automatic' => false,
        'message' => ''
    );

    tgmpa( $plugins, $config );
}

add_filter('woocommerce_checkout_fields', 'custom_override_checkout_fields');
function custom_override_checkout_fields($fields)
{
	$fields['billing']['billing_first_name']['required'] = true;
	$fields['billing']['billing_last_name']['required'] = true;

	$fields['account']['account_password'] = array(
		'type' => 'password',
		'label' => __('Contraseña', 'woocommerce'),
		'required' => true
	);
	$fields['account']['account_password-2'] = array(
		'type' => 'password',
		'label' => __('Confirmar contraseña', 'woocommerce'),
		'required' => true
	);

	$fields['billing']['billing_phone']['required'] = false;
	$fields['billing']['billing_email']['required'] = true;
	$fields['billing']['billing_country']['required'] = false;
	$fields['billing']['billing_address_1']['required'] = false;
	$fields['billing']['billing_city']['required'] = false;
	$fields['billing']['billing_state']['required'] = false;
	$fields['billing']['billing_postcode']['required'] = false;

	// Oculta los campos que tienen "required" establecido en false
	foreach ($fields['billing'] as $key => $field) {
		if (!$field['required']) {
			unset($fields['billing'][$key]);
		}
	}

	return $fields;
}

// oculta barra admin
add_filter('show_admin_bar', '__return_false');

// Deshabilita la página de descargas en WooCommerce
add_filter('woocommerce_account_menu_items', 'custom_remove_downloads_my_account', 999);
function custom_remove_downloads_my_account($items)
{
	unset($items['downloads']);
	unset($items['edit-address']);
	return $items;
}


add_filter('gettext', 'change_billing_details_text', 20, 3);
function change_billing_details_text($translated_text, $text, $domain)
{
	if ('Billing details' === $text) {
		$translated_text = __('Crea tu cuenta', $domain);
	}
	return $translated_text;
}


// Añade una nueva columna "Cantidad de sitios disponibles" en la lista de usuarios
function add_user_field_column($columns)
{
	$columns['site_quantity'] = __('Cantidad de sitios disponibles');
	return $columns;
}
add_filter('manage_users_columns', 'add_user_field_column');

// Rellena la columna "Cantidad de sitios disponibles" con el valor del campo del usuario
function populate_user_field_column($value, $column_name, $user_id)
{
	if ($column_name == 'site_quantity') {
		$quantity = get_field('cantidad_de_sitios_disponibles', 'user_' . $user_id);
		return $quantity;
	}
	return $value;
}
add_action('manage_users_custom_column', 'populate_user_field_column', 10, 3);




// Agrega un producto al carrito y redirige al checkout
function add_to_cart_and_checkout()
{
	// Comprueba si se ha pasado el parámetro "add-to-cart" por URL
	if (isset($_GET['add-to-cart'])) {
		// Obtén el ID del producto que deseas agregar al carrito
		$product_id = 557;

		// Agrega el producto al carrito
		// WC()->cart->add_to_cart($product_id);

		// Redirige al checkout
		wp_redirect(WC()->cart->get_checkout_url());
		exit;
	}
}
add_action('template_redirect', 'add_to_cart_and_checkout');


// function custom_display_order_count($user)
// {
// // obtén la cantidad de pedidos con un estado "complete" que tiene el usuario
// $order_count = wc_get_customer_order_count($user->ID, 'completed');
// $field_key = "cantidad_de_sitios_disponibles"; // sustituye este valor por la clave del campo que has creado en ACF
// update_field($field_key, $order_count, "user_{$user->ID}");
// }
// add_action('show_user_profile', 'custom_display_order_count');
// add_action('edit_user_profile', 'custom_display_order_count');


// Define la función que se ejecutará cuando se complete una orden
function update_user_field_on_order_complete($order_id)
{
	// Obtiene la cantidad de productos en la orden
	$order = wc_get_order($order_id);
	$quantity = $order->get_item_count();

	// Obtiene el usuario que ha realizado la orden
	$user_id = $order->get_user_id();

	$quantityEnable = get_field('cantidad_de_sitios_disponibles', 'user_' . $user_id);

	$newQuantity = $quantityEnable + $quantity;

	// Actualiza el campo "Cantidad_de_sitios_disponibles" del usuario con la cantidad de productos en la orden
	update_field('Cantidad_de_sitios_disponibles', $newQuantity, 'user_' . $user_id);
}

add_action('woocommerce_order_status_completed', 'update_user_field_on_order_complete');



// redirige a todos exepto admin

function redirigir_usuarios_no_administradores()
{
	if (!current_user_can('manage_options') && '/wp-admin/admin-ajax.php' != $_SERVER['PHP_SELF']) {
		wp_redirect(home_url());
		exit;
	}
}
add_action('admin_init', 'redirigir_usuarios_no_administradores');

// el rol de usuario "editor" para todos los clientes que se den de alta en tu sitio.
function establecer_rol_editor_clientes_alta($user_id)
{
	$user = new WP_User($user_id);
	$user->set_role('editor');
}
add_action('user_register', 'establecer_rol_editor_clientes_alta');



function redirect_on_logout()
{
	// Obtén la URL de cierre de sesión de WordPress
	$logout_url = wp_logout_url();
	// Redirige a la página de inicio (homepage) después de cerrar sesión
	wp_redirect(home_url());
	exit;
}
add_action('wp_logout', 'redirect_on_logout');


// Agrega la clave de API de Google Maps a tu sitio

function my_acf_google_map_api($api)
{

	$api['key'] = 'AIzaSyCRuFKJYnF2-JFtWjPgWaWsr6uciFL94kE';

	return $api;

}

add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');





function custom_order_received_text($text, $order)
{
	$page = get_page_by_path('crea-tu-sitio');
	$page_id = $page->ID;

	// Genera un enlace a la página usando su ID
	$link = get_page_link($page_id);
	$custom_text = '¡Ya está todo listo para que crees tu sitio! <a style="padding: 0 5px; background-color: yellow;border-radius:10px;" href="' . $link . '">Crear tu sitio</a>';
	return $custom_text;
}
add_filter('woocommerce_thankyou_order_received_text', 'custom_order_received_text', 10, 2);

function remove_payment_method_from_order_details($order_details, $order)
{
	unset($order_details['payment_method']);
	return $order_details;
}
add_filter('woocommerce_thankyou_order_details', 'remove_payment_method_from_order_details', 10, 2);


add_action( 'wp_enqueue_scripts', 'my_theme_scripts_1' );
function my_theme_scripts_1() {
wp_enqueue_style( 'estilos', get_template_directory_uri() . '/styles/home.css' );
}

add_action( 'wp_enqueue_scripts', 'my_theme_scripts_2' );
function my_theme_scripts_2() {
wp_enqueue_style( 'otros_estilos', get_template_directory_uri() . '/styles/formulario.css' );
}

add_action( 'wp_enqueue_scripts', 'my_theme_scripts_3' );
function my_theme_scripts_3() {
wp_enqueue_style( 'formulario_editar', get_template_directory_uri() . '/styles/formulario-editar.css' );
}

add_action( 'wp_enqueue_scripts', 'homeScript' );
function homeScript() {
wp_enqueue_style( 'home_script', get_template_directory_uri() . '/assets/js-home/main.min.js' );
}

add_action( 'wp_enqueue_scripts', 'homeScriptSlider' );
function homeScriptSlider() {
wp_enqueue_style( 'home_script', get_template_directory_uri() . '/assets/js-home/script-slider.js' );
}


// usa el pluggin acf
add_filter( 'acf/settings/path', 'my_acf_settings_path' );
function my_acf_settings_path( $path ) {
	$path = get_stylesheet_directory() . '/plugins/advanced-custom-fields-pro-master/';
	return $path;
}

add_filter( 'acf/settings/dir', 'my_acf_settings_dir' );
function my_acf_settings_dir( $dir ) {
	$dir = get_stylesheet_directory_uri() . '/plugins/advanced-custom-fields-pro-master/';
	return $dir;
}

include_once( get_stylesheet_directory() . '/plugins/advanced-custom-fields-pro-master/acf.php' );


// Crear paginas automaticamentes
add_action( 'after_switch_theme', 'my_custom_pages' );

function my_custom_pages() {

	// Array con las páginas que deseas crear
	$pages = array(
		array(
			'title' => 'Inicio',
			'template' => 'inicio-page.php'
		),
		array(
			'title' => 'Crea tu sitio',
			'template' => 'formulario-galeria-page.php'
		),
		array(
			'title' => 'Formulario procesado',
			'template' => 'formulario-procesado-page.php'
		),
		array(
			'title' => 'Formulario modificado',
			'template' => 'formulario-modificado-page.php'
		)
	);

	foreach ($pages as $page) {

		$page_exists = get_page_by_title( $page['title'] );

		if( ! $page_exists ) {

			$new_page = array(
				'post_title' => $page['title'],
				'post_status' => 'publish',
				'post_type' => 'page',
				'page_template' => $page['template']
			);

			// Inserta la página en la base de datos
			wp_insert_post( $new_page );
		}
	}
	
	// Obtiene la página "Inicio" creada automáticamente
	$homepage = get_page_by_title( 'Inicio' );

	// Establece la página "Inicio" como la página de inicio
	update_option( 'page_on_front', $homepage->ID );
	update_option( 'show_on_front', 'page' );
}


add_filter('acf/settings/save_json', 'my_acf_json_save_point');

function my_acf_json_save_point( $path ) {
	$path = get_stylesheet_directory() . '/acf-json';
	return $path;
}

add_filter('acf/settings/load_json', 'my_acf_json_load_point');

function my_acf_json_load_point( $paths ) {
	$paths[] = get_stylesheet_directory() . '/acf-json';
	return $paths;
}


if( function_exists('acf_add_options_page') ) {
    acf_add_options_page();
}



function crear_cpt_templates() {
	$labels = array(
	  'name' => 'Templates',
	  'singular_name' => 'Template',
	  'menu_name' => 'Templates',
	  'add_new' => 'Agregar Nuevo',
	  'add_new_item' => 'Agregar Nuevo Template',
	  'edit_item' => 'Editar Template',
	  'new_item' => 'Nuevo Template',
	  'view_item' => 'Ver Template',
	  'search_items' => 'Buscar Templates',
	  'not_found' => 'No se encontraron Templates',
	  'not_found_in_trash' => 'No se encontraron Templates en la papelera',
	  'parent_item_colon' => ''
	);
  
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => null,
		'menu_icon' => 'dashicons-admin-home', // Icono de casa naranja
		'supports' => array('title','custom-fields'),
		'taxonomies' => array('category') // Agrega la capacidad de categorías
	);	
  
	register_post_type('templates', $args);
  }
  
  add_action('init', 'crear_cpt_templates');
  

  function my_custom_scripts() {
	wp_enqueue_script( 'my-script', get_template_directory_uri() . '/theme-scripts.js', array(), '1.0', true );
  }
  add_action( 'wp_enqueue_scripts', 'my_custom_scripts' );


  
  function duplicate_contact_form_69($page_id) {
	// Verifica si el post creado es una página
	if(get_post_type($page_id) == 'page') {
		// Obtiene el post original del formulario
		$original_post = get_post(69);
		// Crea un array con los datos del post original
		$new_post = array(
			'post_title' => get_the_title($page_id),
			'post_content' => $original_post->post_content,
			'post_type' => 'wpcf7_contact_form',
			'post_status' => 'publish'
		);
		// Inserta el nuevo post duplicado
		$new_post_id = wp_insert_post($new_post);

		// Actualiza el valor del campo form_id
		update_field('form_id', $new_post_id, $page_id);

		// Obtiene los metadatos del post original
		$original_post_meta = get_post_meta(69);
		// Inserta los metadatos del post original en el post duplicado
		foreach($original_post_meta as $key => $value) {
			update_post_meta($new_post_id, $key, $value[0]);
		}
	}
}

// Agrega el gancho para la acción 'save_post'
add_action('save_post', 'duplicate_contact_form_69');


