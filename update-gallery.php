<?php
/**
 *Template Name: Updated Gallery
 *
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Fotos_Rock
 */

get_header();

?>
<h1>pagina updateada</h1>

<?php

// Recibir los datos del formulario
$page_id = $_POST['page_id'];
$page_name = $_POST['page_name'];
$uploaded_images = $_FILES['img_gallery'];
$template_selection = $_POST['template_selection'];
$titulo = $_POST['titulo'];
$descripcion = $_POST['descripcion'];
$fecha_evento = $_POST['fecha_evento'];
$hora_evento = $_POST['hora_evento'];
$nombre_lugar = $_POST['nombre_lugar'];
$direccion_lugar = $_POST['direccion_lugar'];

var_dump($page_id);
// Inicializa un array para almacenar los IDs de los archivos subidos
$image_ids = array();

// Recorre cada una de las imágenes subidas
foreach ( $uploaded_images['name'] as $key => $image ) {
  // Si el archivo es una imagen
  if ( wp_attachment_is_image( $uploaded_images['tmp_name'][ $key ] ) ) {
    // Configura los argumentos para subir la imagen
    $upload_overrides = array(
      'test_form' => false,
      'test_size' => true,
      'test_upload' => true
    );
    // Sube la imagen y obtén su ID
    $image_id = media_handle_upload( $key, 0, array(), $upload_overrides );
    // Si la imagen se ha subido correctamente, agrégala a la lista de IDs de imágenes
    if ( ! is_wp_error( $image_id ) ) {
      $image_ids[] = $image_id;
    }
  }
}

// Crear un array con los datos a actualizar
$data = array(
  'post_title' => $page_name,
  'template_selection' => $template_selection,
  'titulo' => $titulo,
  'descripcion' => $descripcion,
  'fecha_evento' => $fecha_evento,
  'hora_evento' => $hora_evento,
  'nombre_lugar' => $nombre_lugar,
  'direccion_lugar' => $direccion_lugar,
  'meta_input' => array(
    'img_gallery' => $image_ids // IDs de las imágenes que se deben agregar al post
  )
);

// Actualizar la página utilizando wp_update_post()
wp_update_post($data, $page_id);

?>
<?php
get_sidebar();
get_footer();