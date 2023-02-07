<?php
/**
 * My Account Dashboard
 *
 * Shows the first intro screen on the account dashboard.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/dashboard.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 4.4.0
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

$allowed_html = array(
	'a' => array(
		'href' => array(),
	),
);
?>
<style>
	.woocommerce-MyAccount-content>h1 {
		display: none;
	}
</style>
<!-- <p> -->
<?php
// printf(
// 	/* translators: 1: user display name 2: logout url */
// 	wp_kses(__('Hello %1$s (not %1$s? <a href="%2$s">Log out</a>)', 'woocommerce'), $allowed_html),
// 	'<strong>' . esc_html($current_user->display_name) . '</strong>',
// 	esc_url(wc_logout_url())
// );
?>
<!-- </p> -->
<h3 style="margin-top:0px">Tus sitios:</h3>



<?php
    // Obtener el valor del campo personalizado de ACF
    $cantidad_de_sitios_disponibles = get_field('cantidad_de_sitios_disponibles', 'user_' . $current_user->ID);

    $page = get_page_by_path('crea-tu-sitio');
    $page_id = $page->ID;

    // Genera un enlace a la página usando su ID
    $link = get_page_link($page_id);

    ?>
<?php if ($cantidad_de_sitios_disponibles > 0) { ?>
<div style="display:flex;align-items: center; margin-bottom: 30px;">

	<p>Tienes pendiente crear:</p>
	<span style="padding: 0 5px;">
		<?php echo $cantidad_de_sitios_disponibles; ?>
		<?php if ($cantidad_de_sitios_disponibles === 1) { ?>
		sitio
		<?php } else { ?>
		sitios <br>

		<?php } ?>
	</span>
	<a style="padding: 0 5px; background-color: yellow;border-radius:10px;" href="<?php echo $link; ?>">Crear tu
		sitio</a>
</div>
<?php } ?>



<?php
$current_user = wp_get_current_user();
$pages = get_posts(
	array(
		'post_type' => 'page',
		'author' => $current_user->ID
	)
);
if (!$pages) {
	echo '<p>No tienes sitios creados.</p>';
} else {
?>
<table style="text-align:left; width: 100%;">
	<thead>
		<tr>
			<th>Sitio</th>
			<th>Fecha de alta</th>
		</tr>
	</thead>
	<tbody>

		<?php
	foreach ($pages as $page) {
		$slug = get_field('page_name', $page->ID);
		echo '<tr>';
		echo '<td><a href="' . wp_make_link_relative(get_permalink($page->ID)) . '" target="_blank">fotosrock.local/' . $slug . '</a></td>';
		echo '<td>' . date('d-m-Y', strtotime($page->post_date)) . '</td>';
		echo '</tr>';
	} ?>
	</tbody>
</table>

<?php }
    ?>




<?php
/**
 * My Account dashboard.
 *
 * @since 2.6.0
 */
do_action('woocommerce_account_dashboard');

/**
 * Deprecated woocommerce_before_my_account action.
 *
 * @deprecated 2.6.0
 */
do_action('woocommerce_before_my_account');

/**
 * Deprecated woocommerce_after_my_account action.
 *
 * @deprecated 2.6.0
 */
do_action('woocommerce_after_my_account');

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */