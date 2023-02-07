<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Fotos_Rock
 */


// Obtiene el valor del campo ACF "page_name" de la página actual

$page_name = get_field('page_name', get_the_ID());

$img_ids = get_field('img_gallery', get_the_ID());

$template_selection = get_field('template_style', get_the_ID());
$titulo = get_field('titulo', get_the_ID());

$descripcion = get_field('descripcion', get_the_ID());

$fecha_eventoOriginal = get_field('fecha_evento', get_the_ID());
$fecha_evento = date('Y-d-m', strtotime($fecha_eventoOriginal));

$hora_eventoOriginal = get_field('hora_evento', get_the_ID());
$hora_evento = date('H:i:s', strtotime($hora_eventoOriginal));

$nombre_lugar = get_field('nombre_lugar', get_the_ID());

$direccion_lugar = get_field('direccion_lugar', get_the_ID());

?>
<style>
/* Estilos para el fondo y el texto */
.galeria {
			background-color: black;
			color: white;
		}

		/* Estilos para los bloques de información */
		.galeria__plantilla,
		.galeria__descripcion,
		.galeria__info,
		.galeria__lugar {
			border: 1px solid #ccc;
			padding: 10px;
		}

		/* Estilos para colocar los bloques .galeria__info y .galeria__lugar uno al lado del otro */
		.galeria__info,
		.galeria__lugar {
			display: flex;
			flex-direction: row;
			flex: 1;
		}
		
		/* Estilos para las imágenes en 3 columnas */
		.galeria__imagenes li {
			float: left;
		}

		.galeria__imagenes li.column-3 {
			width: 33%;
		}

	.editar-galeria {
		display: none;
	}
	
	.popup {
		position: fixed;
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%);
		z-index: 999;
		display: none;
	}

	form {
		background-color: #87CEEB;
		border-radius: 10px;
		padding: 20px;
		max-width: 90%;
		margin: 0 auto;
	}

	label {
		color: white;
		margin-bottom: 10px;
		font-family: sans-serif;
		font-size: larger;
	}

	input {
		border-radius: 5px;
		padding: 5px;
		font-size: larger;
	}

	textarea {
		border-radius: 5px;
		padding: 5px;
		font-size: larger;
	}

	.image-option {
		max-width: 100px;
	}
</style>

		<?php

        wp_link_pages(
        	array(
        		'before' => '<div class="page-links">' . esc_html__('Pages:', 'fotosrock'),
        		'after' => '</div>',
        	)
        );
        ?>

	<div class="contentido">

		<div class="galeria">
		<?php

		// Obtener el ID del usuario actual
			$current_user_id = get_current_user_id();

			// Obtener el ID del autor de la página actual
			$page_author_id = get_post_field('post_author', get_the_ID());

		// Verifica si el usuario tiene permiso de editar páginas
		if (current_user_can('edit_pages') && $current_user_id == $page_author_id)  {
			// Mostrar el botón .btn-editar-galeria
			?>
			<button class="btn-editar-galeria">Editar galería</button>
			<?php
			}
		?>
			<p class="galeria__plantilla">
				<h2>Titulo:</h2>
				<?php echo $titulo; ?>
			</p>


			<div class="galeria__imagenes">
				<div>
				<h2>Galeria:</h2>
				<?php
				if ($img_ids): ?>
				<ul>
					<?php foreach ($img_ids as $image): ?>
					<li>
						<a href="<?php echo $image['url']; ?>">
							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
						</a>
						<p>
							<?php echo $image['caption']; ?><br>
							<?php echo $image['title']; ?>
						</p>
					</li>
					<?php endforeach; ?>
				</ul>
				<?php endif; ?>
			</div>

		</div>
		
		<p class="galeria__plantilla">
			<h2>Plantilla seleccionada</h2>
			<?php echo $template_selection; ?>
		</p>

		<p class="galeria__descripcion">
			<h2>Descripción del evento</h2>
			<?php echo $descripcion; ?>
		</p>

		<div class="galeria__info">
			<p class="galeria__fecha-evento">
				<h2>Fecha del evento</h2>
				<?php echo $fecha_evento; ?>
			</p>
			<p class="galeria__hora-evento">
				<h2>Hora del evento</h2>
				<?php echo $hora_evento; ?>
			</p>
		</div>

		<div class="galeria__lugar">
			<p class="galeria__lugar-nombre">
				<h2>Nombre del lugar del evento</h2>
				<?php echo $nombre_lugar; ?>
			</p>
			<p class="galeria__lugar-direccion">
				<h2>Dirección del evento</h2>
				<?php echo $direccion_lugar; ?>
			</p>
		</div>

	</div>

	<div class="editar-galeria popup">
		<button class="btn-cerrar-edicion">CERRAR</button>
			<form method="post" id="my-form" enctype="multipart/form-data" action="/create-gallery">

				<p>Modifica tu pagina de galeria:</p>
				<label for="page_name">Slug de la página:</label>

				<input type="text" id="page_name" name="page_name" value="<?php echo $page_name; ?>" required>

				<label for="img_gallery">Galería de imágenes:</label>

				<input type="file" id="img_gallery" name="img_gallery[]" multiple>

				<div class="categories-container">
					<label for="categories">Categorías:</label>

					<label>
						<input type="radio" name="template_selection" value="1" required <?php echo
							$template_selection==1 ? 'checked' : ''; ?>>
						<img src="https://via.placeholder.com/400" class="image-option">
					</label>
					<label>
						<input type="radio" name="template_selection" value="2" <?php echo $template_selection==2 ?
							'checked' : ''; ?>>
						<img src="https://via.placeholder.com/400" class="image-option">
					</label>
					<label>
						<input type="radio" name="template_selection" value="3" <?php echo $template_selection==3 ?
							'checked' : ''; ?>>
						<img src="https://via.placeholder.com/400" class="image-option">
					</label>
				</div>

				<label for="titulo">Título:</label>
				<input type="text" id="titulo" name="titulo" required value="<?php echo $titulo; ?>">

				<label for="descripcion">Descripción:</label>
				<textarea id="descripcion" name="descripcion"><?php echo $descripcion; ?></textarea>

				<label for="fecha_evento">Fecha del evento:</label>
				<input type="date" id="fecha_evento" name="fecha_evento" pattern="d-m-Y"
					value="<?php echo $fecha_evento; ?>">

				<label for="hora_evento">Hora del evento:</label>
				<input type="time" id="hora_evento" name="hora_evento" pattern="HH:mm"
					value="<?php echo $hora_evento; ?>">

				<label for="nombre_lugar_evento">Nombre del lugar del evento:</label>
				<input type="text" id="nombre_lugar" name="nombre_lugar" value="<?php echo $nombre_lugar; ?>">

				<label for="direccion_evento">Dirección del evento:</label>
				<input type="text" id="direccion_lugar" name="direccion_lugar" value="<?php echo $direccion_lugar; ?>">

				<input type="hidden" name="page_id" value="<?php echo get_the_ID() ?>">

				<input type="submit" name="submit" value="Actualizar">

			</form>
	</div>
		
</div>

<script>
	var editarGaleria = document.querySelector('.editar-galeria');
	var btnEditarGaleria = document.querySelector('.btn-editar-galeria');
	var btnCerrarEdicion = document.querySelector('.btn-cerrar-edicion');

	// Agrega un evento click al botón .btn-editar-galeria
	btnEditarGaleria.addEventListener('click', function() {
	// Muestra el div .editar-galeria
	editarGaleria.style.display = 'block';
	});

	// Agrega un evento click al botón .btn-cerrar-edicion
	btnCerrarEdicion.addEventListener('click', function() {
	// Oculta el div .editar-galeria
	editarGaleria.style.display = 'none';
	});

</script>
