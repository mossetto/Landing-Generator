<?php
/**
 *Template Name: Template 3
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Fotos_Rock
 */

// Obtiene el valor del campo ACF "page_name" de la página actual

$img_principal = get_field('img_principal', get_the_ID());
$img_secundaria = get_field('img_secundaria', get_the_ID());
$invitacion = get_field('invitacion', get_the_ID());
$frase = get_field('frase', get_the_ID());
$images = get_field('img_gallery', get_the_ID());
$img_ids = get_field('img_gallery', get_the_ID());
$template_style = get_field('template_style', get_the_ID());
$titulo = get_field('titulo', get_the_ID());
$descripcion = get_field('descripcion', get_the_ID());
$fecha_evento = get_field('fecha_evento', get_the_ID());
$fecha_evento = date('Y-d-m', strtotime($fecha_evento));
$hora_ceremonia = get_field('hora_ceremonia', get_the_ID());
$hora_ceremonia = date('H:i:s', strtotime($hora_ceremonia));
$nombre_salon_ceremonia = get_field('nombre_salon_ceremonia', get_the_ID());
$direccion_ceremonia = get_field('direccion_ceremonia', get_the_ID());
$hora_festejo = get_field('hora_festejo', get_the_ID());
$hora_festejo = date('H:i:s', strtotime($hora_festejo));
$nombre_salon_festejo = get_field('nombre_salon_festejo', get_the_ID());
$direccion_festejo = get_field('direccion_festejo', get_the_ID());
$invitacion_nota = get_field('invitacion_nota', get_the_ID());
$invitacion_adultos = get_field('invitacion_adultos', get_the_ID());
$invitacion_menores = get_field('invitacion_menores', get_the_ID());
$notificacion_asistencia = get_field('notificacion_asistencia', get_the_ID());
$fecha_confirmar = get_field('fecha_confirmar', get_the_ID());
$fecha_confirmar = date('Y-d-m', strtotime($fecha_confirmar));
$cuenta_regresiva = get_field('cuenta_regresiva', get_the_ID());
$form_id = get_field('form_id', get_the_ID());

get_header();

?>
<script
	src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRuFKJYnF2-JFtWjPgWaWsr6uciFL94kE&libraries=places"></script>
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
	.galeria__imagenes ul {
		display: flex;
		flex-wrap: wrap;
		gap: 70px;
	}

	.galeria__imagenes li {
		float: left;
		float: left;
		list-style: none;
		display: inline-block;
	}

	.galeria__imagenes li img {
		height: 100px;
	}

	.galeria__imagenes li.column-3 {
		width: 33%;
	}

	.editar-galeria {
		display: none;
	}

	.imagenes-cargadas {
		display: grid;
		grid-template-columns: repeat(6, 1fr);
		gap: 10px;
		list-style: none;

	}

	.imagenes-cargadas li img {
		width: 100%;
		margin: 0;
	}

	.popup {
		position: fixed;
		top: 0;
		left: 0;
		z-index: 999;
		width: 100%;
		height: auto;
		background: #041914cf;
		display: none;
	}

	@media screen and (max-width: 640px) {
		.popup {
			padding: 14px;
			width: auto;
		}
	}

	form {
		background-color: white;
		border-radius: 10px;
		padding: 20px;
		max-width: 90%;
		margin: 0 auto;
	}

	label {
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


<?php wp_link_pages(
	array(
		'before' => '<div class="page-links">' . esc_html__('Pages:', 'fotosrock'),
		'after' => '</div>',
	)
);

?>

<div class="contentido">
	<h1>Template 3</h1>
	<?php if (is_user_logged_in() && get_current_user_id() == get_post_field('post_author', get_the_ID())) {
		?>
		<div class="btn-editar-galeria">Editar</div>
		<a href="<?php echo esc_url(wc_get_account_endpoint_url('my-account')); ?>">Mi cuenta</a>

	<?php } ?>

	<!-- Imagen principal -->
	<img src="<?php echo $img_principal['url']; ?>" alt="<?php echo $img_principal['alt']; ?>">

	<!-- Imagen secundaria -->
	<img src="<?php echo $img_secundaria['url']; ?>" alt="<?php echo $img_secundaria['alt']; ?>">

	<!-- Galería de imágenes -->
	<?php if ($images): ?>
		<ul>
			<?php foreach ($images as $image): ?>
				<li>
					<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
					<p>
						<?php echo $image['caption']; ?>
					</p>
				</li>
			<?php endforeach; ?>
		</ul>
	<?php endif; ?>

	<!-- Otros campos -->
	<p>
		<?php echo $frase; ?>
	</p>
	<p><?php echo $template_style; ?></p>
	<p>
		<?php echo $titulo; ?>
	</p>
	<p><?php echo $descripcion; ?></p>
	<p>
		<?php echo $fecha_evento; ?>
	</p>
	<?php if ($direccion_ceremonia !== ''): ?>
		<p>
			<?php echo $hora_ceremonia; ?>
		</p>
		<p>
			<?php echo $nombre_salon_ceremonia; ?>
		</p>
		<p class="direccion_ceremonia">
			<?php echo $direccion_ceremonia; ?>
		</p>
		<div style="height: 200px" id="map_ceremonia" data-id="map_ceremonia" class="map_ceremonia"></div>
	<?php endif; ?>
	<p><?php echo $hora_festejo; ?></p>
	<p>
		<?php echo $nombre_salon_festejo; ?>
	</p>
	<p class="direccion_festejo">
		<?php echo $direccion_festejo; ?>
	</p>
	<div style="height: 200px" id="map_festejo" data-id="map_festejo" class="map_festejo"></div>
	<p>
		<?php echo $invitacion_nota; ?>
	</p>
	<p><?php echo $invitacion_adultos; ?></p>
	<p>
		<?php echo $invitacion_menores; ?>
	</p>
	<p><?php echo $notificacion_asistencia; ?></p>
	<p>
		<?php echo $fecha_confirmar; ?>
	</p>
	<p><?php echo $cuenta_regresiva; ?></p>
	<?php echo do_shortcode('[contact-form-7 id="' . $form_id . '" title="Contact form 1"]'); ?>

</div>

<div class="editar-galeria popup">

	<div class="form-wrapper">

		<div class="header-popup">
			<h1 class="header-popup__title">Editar página:</h1>
			<button class="btn-cerrar-edicion">CERRAR</button>
		</div>

		<form class="form-editar" method="post" enctype="multipart/form-data" action="/formulario-modificado">

			<label for="titulo">Título:</label>
			<div class="input-text-wrapper">
				<input type="text" id="titulo" name="titulo" required value="<?php echo $titulo; ?>"
					placeholder="Ejemplo: Raquel y Jeremías">
			</div>

			<label for="descripcion">Descripción:</label>
			<div class="input-text-wrapper">
				<textarea id="descripcion" name="descripcion"
					placeholder="Ejemplo: Se acerca el día ¡Nos casamos!"><?php echo $descripcion; ?></textarea>
			</div>

			<label for="img_principal">Reemplazar Imagen principal</label>
			<input type="file" id="img_principal" name="img_principal">

			<label for="img_secundaria">Reemplazar Imagen secundaria</label>
			<input type="file" id="img_secundaria" name="img_secundaria">

			<label for="invitacion">Invitación</label>
			<div class="input-text-wrapper">
				<input type="text" id="invitacion" name="invitacion" required value="<?php echo $invitacion; ?>"
					placeholder="Ejemplo: Se acerca un dia especial y queremos que lo celebres con nosotros, te invitamos ...">
			</div>

			<label for="frase">Frase o cíta alusiva</label>
			<div class="input-text-wrapper">
				<input type="text" id="frase" name="frase" required value="<?php echo $frase; ?>"
					placeholder="Ejemplo: ' Podríamos dar la vuelta al mundo y nos volveríamos a elegir '">
			</div>

			<label for="img_gallery">Arrastra y ordena la galería de imágenes:</label>

			<?php if ($img_ids):

				$images_uploaded = array(); ?>

				<ul class="imagenes-cargadas grid">

					<?php foreach ($img_ids as $image):

						$images_uploaded[] = $image['id']; ?>

						<img class="draggable" src="<?php echo $image['url']; ?>" id="<?php echo $image['id']; ?>">

					<?php endforeach; ?>

				</ul>
				<?php $cadena = implode(',', $images_uploaded); ?>
				<input type="hidden" name="images_uploaded" value="<?php echo $cadena; ?>">

			<?php endif; ?>

			<script>

				// Obtén una referencia a todas las imágenes que se van a arrastrar
				const draggableElements = document.querySelectorAll('.draggable');

				let currentDraggableId = null;

				// Establece la funcionalidad de arrastrar y soltar en cada imagen
				draggableElements.forEach(function (element) {
					element.addEventListener('dragstart', function (event) {
						// Establece el dato que se va a arrastrar (en este caso, el ID de la imagen)
						event.dataTransfer.setData('text/plain', this.id);

						// Establece el elemento que se está arrastrando como el elemento que tiene el foco
						this.focus();
						// Guarda el ID del elemento que se está arrastrando
						currentDraggableId = this.id;

					});

					element.addEventListener('dragover', function (event) {
						const gridElement = document.querySelector('.grid');
						// Obtiene un array con los ids de todas las imágenes en el orden actual
						const imageIds = [...gridElement.children].map(imgElement => imgElement.id);

						// Utiliza la función implode() de PHP para convertir el array en una cadena de texto separada por comas
						const imageIdsString = imageIds.join(',');

						// Asigna la cadena de texto al valor del campo oculto
						document.querySelector('input[name="images_uploaded"]').value = imageIdsString;

						// Asigna la cadena de texto al valor del campo oculto
						document.querySelector('input[name="images_uploaded"]').value = imageIdsString;
						// Evita la acción por defecto para permitir el soltar
						event.preventDefault();

						// Obtiene una referencia al elemento sobre el que se está arrastrando
						const target = event.target;

						// Obtiene una referencia al elemento que se está arrastrando
						const draggableElement = document.getElementById(currentDraggableId);

						// Si el elemento sobre el que se está arrastrando no es el elemento que se está arrastrando,
						// inserta el elemento que se está arrastrando antes o después del elemento sobre el que se está arrastrando
						if (target !== draggableElement) {
							if (event.pageY > target.offsetTop + target.offsetHeight / 2) {
								// Si el cursor está debajo de la mitad del elemento sobre el que se está arrastrando,
								// inserta el elemento que se está arrastrando después de él
								target.parentNode.appendChild(draggableElement);
							} else {
								// Si el cursor está encima de la mitad del elemento sobre el que se está arrastrando,
								// inserta el elemento que se está arrastrando antes de él
								target.parentNode.insertBefore(draggableElement, target);
							}
						}
					});
				});
			</script>

			<label for="img_gallery">Agrega imágenes a la galería</label>
			<input type="file" id="img_gallery" name="img_gallery[]" multiple>

			<label for="fecha_evento">Fecha del evento:</label>
			<div class="input-text-wrapper">
				<input type="date" id="fecha_evento" name="fecha_evento" pattern="d-m-Y"
					value="<?php echo $fecha_evento; ?>">
			</div>

			<label for="cuenta_regresiva">Mostrar cuenta regresiva?:</label>

			<div class="input-text-wrapper">
				<select name="cuenta_regresiva" id="cuenta_regresiva" class="cuenta-regresiva">
					<option value="true" selected>Si</option>
					<option value="false">No</option>
				</select>
			</div>

			<!-- Festejo -->
			<div class="wrap-festejo">
				<label for="hora_festejo">Hora del festejo:</label>
				<div class="input-text-wrapper">
					<input type="time" id="hora_festejo" name="hora_festejo" pattern="HH:mm"
						value="<?php echo $hora_festejo; ?>">
				</div>

				<label for="nombre_salon_festejo">Nombre del salon:</label>
				<div class="input-text-wrapper">
					<input type="text" id="nombre_salon_festejo" name="nombre_salon_festejo"
						value="<?php echo $nombre_salon_festejo; ?>" placeholder="Ejemplo: Salón Antorcha Palace">
				</div>

				<label for="direccion_festejo">Dirección del salon:</label>
				<input type="text" id="direccion_festejo" name="direccion_festejo" placeholder="Calle 123, Ciudad"
					value="<?php echo $direccion_festejo; ?>">
				<div id="map_festejo" data-id="map_festejo" class="map_festejo"></div>

			</div>

			<!-- Ceremonia -->
			<div class="wrap-ceremonia">
				<label for="hora_ceremonia">Hora de ceremonia/ registro (Opcional):</label>
				<div class="input-text-wrapper">
					<input type="time" id="hora_ceremonia" name="hora_ceremonia" pattern="HH:mm"
						value="<?php echo $hora_ceremonia; ?>">
				</div>

				<label for="nombre_salon_ceremonia">Nombre del salon:</label>
				<div class="input-text-wrapper">
					<input type="text" id="nombre_salon_ceremonia" name="nombre_salon_ceremonia"
						value="<?php echo $nombre_salon_ceremonia; ?>" placeholder="Ejemplo: Capilla del Milagro">
				</div>

				<label for="direccion_ceremonia">Dirección de la ceremonia:</label>
				<div class="input-text-wrapper">
					<input type="text" id="direccion_ceremonia" name="direccion_ceremonia"
						placeholder="Avenida 123, Ciudad" value="<?php echo $direccion_ceremonia; ?>">
				</div>
				<div id="map_ceremonia" data-id="map_ceremonia" class="edit_map_ceremonia"></div>

			</div>
			<!-- Invitaction -->
			<label for="invitacion_nota">Aclaración sobre invitación:</label>
			<div class="input-text-wrapper">
				<textarea type="text" id="invitacion_nota" name="invitacion_nota"
					placeholder="Ejemplo: El valor de la invitación de niños es hasta los 9 años. Alias para transferencia ..."><?php echo $invitacion_nota; ?></textarea>
			</div>

			<label for="invitacion_adultos">Valor invtiación adultos:</label>
			<div class="input-text-wrapper">
				<input type="text" id="invitacion_adultos" name="invitacion_adultos"
					value="<?php echo $invitacion_adultos; ?>" placeholder="Ejemplo: $3.000">
			</div>

			<label for="invitacion_menores">Valor invtiación niños:</label>
			<div class="input-text-wrapper">
				<input type="text" id="invitacion_menores" name="invitacion_menores"
					value="<?php echo $invitacion_menores; ?>" placeholder="Ejemplo: $6.000">
			</div>

			<label for="notificacion_asistencia">Cuando alguien confirme su asistencia, te enviaremos un mail a:</label>
			<input type="email" id="notificacion_asistencia" name="notificacion_asistencia"
				value="<?php echo $notificacion_asistencia; ?>" placeholder="Ejemplo: micael@gmail.com">

			<label for="fecha_confirmar">Fecha límite para confirmar asistencia (Opcional):</label>
			<div class="input-text-wrapper">
				<input type="date" id="fecha_confirmar" name="fecha_confirmar" pattern="d-m-Y"
					value="<?php echo $fecha_confirmar; ?>">
			</div>

			<input type="hidden" name="page_ida" value="<?php echo get_the_ID() ?>">

			<input type="submit" name="submit" value="Actualizar">

		</form>

	</div>

</div>

<script>
	let ceremoniaOk = '<?php echo $direccion_ceremonia; ?>';

	// Inicializa el mapa Ceremonia
	if (ceremoniaOk !== '') {


		var map = new google.maps.Map(document.getElementById('map_ceremonia'), {
			center: { lat: -33.8688, lng: 151.2195 },
			zoom: 13
		});

		var geocoder = new google.maps.Geocoder();

		// Obtiene las coordenadas de la dirección estática
		geocoder.geocode({ 'address': '<?php echo $direccion_ceremonia; ?>' }, function (results, status) {
			if (status === 'OK') {
				// Agrega el marcador en las coordenadas obtenidas
				var marker = new google.maps.Marker({
					map: map,
					position: results[0].geometry.location
				});
				// Centra el mapa en el marcador y ajusta el nivel de zoom según sea necesario
				map.setCenter(marker.getPosition());

			} else {
				// La dirección no pudo ser geocodificada
				window.alert('No se puede encontrar la dirección: ' + status);
			}
		});
	}

	// Inicializa el mapa Festejo
	var mapFestejo = new google.maps.Map(document.getElementById('map_festejo'), {
		center: { lat: -33.8688, lng: 151.2195 },
		zoom: 13
	});

	var geocoderFestejo = new google.maps.Geocoder();

	// Obtiene las coordenadas de la dirección estática
	geocoderFestejo.geocode({ 'address': '<?php echo $direccion_festejo; ?>' }, function (results, status) {
		if (status === 'OK') {
			// Agrega el marcador en las coordenadas obtenidas
			var markerFestejo = new google.maps.Marker({
				map: mapFestejo,
				position: results[0].geometry.location
			});
			// Centra el mapa en el marcador y ajusta el nivel de zoom según sea necesario
			mapFestejo.setCenter(markerFestejo.getPosition());

		} else {
			// La dirección no pudo ser geocodificada
			window.alert('No se puede encontrar la dirección: ' + status);
		}
	});

	try {
		// boton editar
		var editarGaleria = document.querySelector('.editar-galeria');
		var btnEditarGaleria = document.querySelector('.btn-editar-galeria');
		var btnCerrarEdicion = document.querySelector('.btn-cerrar-edicion');

		let mapCeremonia = document.querySelector('.map_ceremonia');
		let mapFestejo = document.querySelector('.map_festejo');
		let editMapCeremonia = document.querySelector('.edit_map_ceremonia');
		let editMapFestejo = document.querySelector('.edit_map_festejo');




		// Agrega un evento click al botón .btn-editar-galeria
		btnEditarGaleria.addEventListener('click', function () {
			// Muestra el div .editar-galeria
			editarGaleria.style.display = 'block';

		});

		// Agrega un evento click al botón .btn-cerrar-edicion
		btnCerrarEdicion.addEventListener('click', function () {
			// Oculta el div .editar-galeria
			editarGaleria.style.display = 'none';
		});
	} catch (error) {

	}


</script>