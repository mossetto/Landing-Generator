<?php
/**
 *Template Name: Formulario procesado
 *
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Fotos_Rock
 */


get_header();

require_once(ABSPATH . "wp-admin" . '/includes/image.php');
require_once(ABSPATH . "wp-admin" . '/includes/file.php');
require_once ABSPATH . 'wp-content/themes/Landing-Generator/functions.php';
// require_once 'functions.php';

$pages = get_posts(
  array(
    'post_type' => 'page',
    'author' => $current_user->ID
  )
);

// Obtener el valor del campo personalizado de ACF
$cantidad_de_sitios_disponibles = get_field('cantidad_de_sitios_disponibles', 'user_' . $current_user->ID);
// Calcular la diferencia entre la cantidad de sitios disponibles y la cantidad de páginas
$diferencia = $cantidad_de_sitios_disponibles - count($pages);

$page_name = isset($_POST['page_name']) ? $_POST['page_name'] : null;

if ($cantidad_de_sitios_disponibles > 0 && $page_name != null) {

  // Recupera los datos del formulario

  $img_principal = $_FILES['img_principal'];
  $img_secundaria = $_FILES['img_secundaria'];
  $invitacion = $_POST['invitacion'];
  $frase = $_POST['frase'];
  $img_gallery = $_FILES['img_gallery'];
  $template_style = $_POST['template_selection'];
  $titulo = $_POST['titulo'];
  $descripcion = $_POST['descripcion'];
  $fecha_evento = $_POST['fecha_evento'];
  $hora_ceremonia = isset($_POST['hora_ceremonia']) ? $_POST['hora_ceremonia'] : null;
  $nombre_salon_ceremonia = isset($_POST['nombre_salon_ceremonia']) ? $_POST['nombre_salon_ceremonia'] : null;
  $direccion_ceremonia = isset($_POST['direccion_ceremonia']) ? $_POST['direccion_ceremonia'] : null;
  $hora_festejo = $_POST['hora_festejo'];
  $nombre_salon_festejo = $_POST['nombre_salon_festejo'];
  $direccion_festejo = $_POST['direccion_festejo'];
  $invitacion_nota = $_POST['invitacion_nota'];
  $invitacion_adultos = $_POST['invitacion_adultos'];
  $invitacion_menores = $_POST['invitacion_menores'];
  $notificacion_asistencia = $_POST['notificacion_asistencia'];
  $fecha_confirmar = $_POST['fecha_confirmar'];
  $cuenta_regresiva = $_POST['cuenta_regresiva'];

  // Crea un array con los datos de la página
  $page_data = array(
    'post_title' => $titulo,
    'post_name' => $page_name,
    'post_content' => '',
    'post_type' => 'page',
    'post_status' => 'publish'
  );

  // Inserta la página en la base de datos de WordPress
  $page_id = wp_insert_post($page_data);

// Función para duplicar un formulario Contact Form 7 con ID 69
// Función para duplicar un formulario Contact Form 7 con ID 69


  
  // Actualiza la cantidad de sitios disponibles
  $new_site_count = $cantidad_de_sitios_disponibles - 1;
  update_user_meta($current_user->ID, 'cantidad_de_sitios_disponibles', $new_site_count);

  // Asigna la plantilla de página "Galería" a la página recién creada
  $template_name = 'template-' . $_POST['template_selection'] . '-page.php';
  update_post_meta($page_id, '_wp_page_template', $template_name);

  // subir imagen principal

  $name_file_principal = $img_principal['name'];
  $upload_overrides_principal = array('test_form' => false);
  $movefile_principal = wp_handle_upload($img_principal, $upload_overrides_principal);

  $filename_principal = $movefile_principal['file'];
  $filetype_principal = wp_check_filetype(basename($filename_principal), null);
  $wp_upload_dir_principal = wp_upload_dir();

  if (!$name_file_principal) {
    $name_file_principal = preg_replace('/\.[^.]+$/', '', basename($filename_principal));
  }

  $attachment_principal = array(
    'guid' => $wp_upload_dir_principal['url'] . '/' . basename($filename_principal),
    'post_mime_type' => $filetype_principal['type'],
    'post_title' => $name_file_principal,
    'post_status' => 'inherit'
  );

  $attach_id_principal = wp_insert_attachment($attachment_principal, $filename_principal, $page_id);
  $attach_data_principal = wp_generate_attachment_metadata($attach_id_principal, $filename_principal);
  wp_update_attachment_metadata($attach_id_principal, $attach_data_principal);
  set_post_thumbnail($page_id, $attach_id_principal);

  // subir imagen secundaria

  $name_file_secundaria = $img_secundaria['name'];
  $upload_overrides_secundaria = array('test_form' => false);
  $movefile_secundaria = wp_handle_upload($img_secundaria, $upload_overrides_secundaria);

  $filename_secundaria = $movefile_secundaria['file'];
  $filetype_secundaria = wp_check_filetype(basename($filename_secundaria), null);
  $wp_upload_dir_secundaria = wp_upload_dir();

  if (!$name_file_secundaria) {
    $name_file_secundaria = preg_replace('/\.[^.]+$/', '', basename($filename_secundaria));
  }

  $attachment_secundaria = array(
    'guid' => $wp_upload_dir_secundaria['url'] . '/' . basename($filename_secundaria),
    'post_mime_type' => $filetype_secundaria['type'],
    'post_title' => $name_file_secundaria,
    'post_status' => 'inherit'
  );

  $attach_id_secundaria = wp_insert_attachment($attachment_secundaria, $filename_secundaria, $page_id);
  $attach_data_secundaria = wp_generate_attachment_metadata($attach_id_secundaria, $filename_secundaria);
  wp_update_attachment_metadata($attach_id_secundaria, $attach_data_secundaria);
  set_post_thumbnail($page_id, $attach_id_secundaria);

  // subir galeria
  $i = 0;
  $newFile = array();
  foreach ($img_gallery['name'] as $key => $value) {

    $newFile[$i]['name'] = $img_gallery['name'][$i];
    $newFile[$i]['type'] = $img_gallery['type'][$i];
    $newFile[$i]['full_path'] = $img_gallery['full_path'][$i];
    $newFile[$i]['size'] = $img_gallery['size'][$i];
    $newFile[$i]['tmp_name'] = $img_gallery['tmp_name'][$i];
    $i++;

  }

  $e = 0;
  $images = array(); // Create an array to hold the images
  foreach ($newFile as $key => $value) {

    // Procesa el arreglo de imágenes

    $file = $newFile[$e];
    $name_file = $newFile[$e]['name'];
    $uploadedfile = $file;
    $upload_overrides = array('test_form' => false);
    $movefile = wp_handle_upload($uploadedfile, $upload_overrides);

    if ($movefile && !isset($movefile['error'])) {
      // Si insertó correctamente lo almacenamos en multimedias

      $filename = $movefile['file'];
      $filetype = wp_check_filetype(basename($filename), null);
      $wp_upload_dir = wp_upload_dir();

      if (!$name_file) {
        $name_file = preg_replace('/\.[^.]+$/', '', basename($filename));
      }

      $attachment = array(
        'guid' => $wp_upload_dir['url'] . '/' . basename($filename),
        'post_mime_type' => $filetype['type'],
        'post_title' => $name_file,
        'post_status' => 'inherit'
      );

      $attach_id = wp_insert_attachment($attachment, $filename, $page_id);
      $attach_data = wp_generate_attachment_metadata($attach_id, $filename);
      wp_update_attachment_metadata($attach_id, $attach_data);
      // set_post_thumbnail($page_id, $attach_id);

      $images[] = $attach_id;

    }
    $e++;
  }

  update_field('page_name', $page_name, $page_id);
  update_field('img_principal', $attach_id_principal, $page_id);
  update_field('img_secundaria', $attach_id_secundaria, $page_id);
  update_field('invitacion', $invitacion, $page_id);
  update_field('frase', $page_name, $page_id);
  update_field('img_gallery', $images, $page_id);
  update_field('template_style', $template_style, $page_id);
  update_field('titulo', $titulo, $page_id);
  update_field('descripcion', $descripcion, $page_id);
  update_field('fecha_evento', $fecha_evento, $page_id);
  if ($hora_ceremonia !== null) {
    update_field('hora_ceremonia', $hora_ceremonia, $page_id);
  }
  if ($nombre_salon_ceremonia !== null) {
    update_field('nombre_salon_ceremonia', $nombre_salon_ceremonia, $page_id);
  }
  if ($direccion_ceremonia !== null) {
    update_field('direccion_ceremonia', $direccion_ceremonia, $page_id);
  }
  update_field('hora_festejo', $hora_festejo, $page_id);
  update_field('nombre_salon_festejo', $nombre_salon_festejo, $page_id);
  update_field('direccion_festejo', $direccion_festejo, $page_id);
  update_field('invitacion_nota', $invitacion_nota, $page_id);
  update_field('invitacion_adultos', $invitacion_adultos, $page_id);
  update_field('invitacion_menores', $invitacion_menores, $page_id);
  update_field('notificacion_asistencia', $notificacion_asistencia, $page_id);
  update_field('fecha_confirmar', $fecha_confirmar, $page_id);
  update_field('cuenta_regresiva', $cuenta_regresiva, $page_id);

  // Construye la URL de la página recién creada
  $page_url = get_permalink($page_id);
  $slug = get_field('page_name', $page_id);
  // wp_redirect($page_url);

  // exit;
} ?>
<div class="pagina_creada">

  <?php if ($cantidad_de_sitios_disponibles > 0 && $page_name != null) { ?>

    <h2>!Sitio creado con éxito!</h1>
    <br>
    <p>Este es el link de tu sitio, click para visitar:</p>
    <a href="<?php echo $page_url; ?>">fotosrock.local/<?php echo $slug?></a>

  <?php } else { ?>

    <h2>Error al procesar el formulario.</h1>

  <?php } ?>
</div>

<style>
.pagina_creada{
  border: 1px solid;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  flex-direction: column

}
</style>
<?php

get_footer();