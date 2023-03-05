<?php
/**
 *Template Name: Formulario de Galeria
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Fotos_Rock
 */


// Obtener el valor del campo personalizado de ACF
$cantidad_de_sitios_disponibles = get_field('cantidad_de_sitios_disponibles', 'user_' . $current_user->ID);

// Obtiene la ID de la página "crea-tu-pagina" usando su slug
$page = get_page_by_path('crea-tu-sitio');
$page_id = $page->ID;
$key_value = get_field('google_maps_key', 'option');

// Verifica si el usuario está registrado y tiene páginas pendientes de crear
if (is_user_logged_in() && $cantidad_de_sitios_disponibles === 0) {

	// Redirige al usuario a la página principal
	wp_redirect(home_url());
}

get_header();
?>

<script
	src="https://maps.googleapis.com/maps/api/js?key=<?php echo $key_value;?>&libraries=places"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">


<div class="form-wrapper">
	<div id="loading-overlay">
		<img src="https://cdn.jsdelivr.net/gh/SamHerbert/SVG-Loaders/svg-loaders/tail-spin.svg" alt="Cargando...">
	</div>
	<h1 class="form-wrapper__title">Seleccioná el estilo de tu página y carga tu contenido</h1>

	<form method="post" enctype="multipart/form-data" action="/formulario-procesado">

		<!-- Estilo plantilla -->
		<div class="categories-container">

			<div class="slider__wrapper">
				<div class="slider">

					<label>
						<div class="slider__slide-title">
							<input type="radio" name="template_selection" value="1" required>
							<span>Evento 1</span>
						</div>
						<img src="https://websitedemos.net/wp-content/uploads/2017/12/brandstore-02-1-600x1856.jpg"
							class="image-option">
					</label>
					<label>
						<div class="slider__slide-title"> <input type="radio" name="template_selection"
								value="2"><span>Evento 2</span>
						</div>
						<img src="https://websitedemos.net/wp-content/uploads/2022/12/christmas-party-04-600x2443.jpg"
							class="image-option">
					</label>
					<label>
						<div class="slider__slide-title"> <input type="radio" name="template_selection"
								value="3"><span>Evento 3</span>
						</div>
						<img src="https://websitedemos.net/wp-content/uploads/2017/12/brandstore-02-1-600x1856.jpg"
							class="image-option">
					</label>

					<label>
						<div class="slider__slide-title"><input type="radio" name="template_selection" value="4"
								required><span>Evento 4</span>
						</div>
						<img src="https://websitedemos.net/wp-content/uploads/2017/12/brandstore-02-1-600x1856.jpg"
							class="image-option">
					</label>
					<label>
						<div class="slider__slide-title"> <input type="radio" name="template_selection"
								value="5"><span>Evento 5</span>
						</div>
						<img src="https://websitedemos.net/wp-content/uploads/2022/12/christmas-party-04-600x2443.jpg"
							class="image-option">
					</label>
					<label>
						<div class="slider__slide-title"> <input type="radio" name="template_selection"
								value="6"><span>Evento 6</span>
						</div>
						<img src="https://websitedemos.net/wp-content/uploads/2017/12/brandstore-02-1-600x1856.jpg"
							class="image-option">
					</label>
				</div>
				<div class="slider__control">

					<div class="slider__control prev"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/images-home/flecha-derecha.png" alt="Derecha"></div>
					<div class="slider__control next"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/images-home/flecha-derecha.png" alt="Derecha"></div>
				</div>
			</div>


		</div>

		<label for="titulo">Título:</label>
		<div class="input-text-wrapper">
			<input type="text" id="titulo" name="titulo" required value="some" placeholder="Ejemplo: Raquel y Jeremías">
		</div>

		<label for="descripcion">Descripción:</label>
		<div class="input-text-wrapper">
			<textarea id="descripcion" name="descripcion" value="some"
				placeholder="Ejemplo: Se acerca el día ¡Nos casamos!"></textarea>
		</div>

		<label for="page_name">Slug de la página:</label>
		<div class="input-text-wrapper">
			<input type="text" id="page_name" name="page_name" value="some" required
				placeholder="Ejemplo: www.fotos.rock/SLUG">
		</div>

		<label for="img_principal">Imagen principal</label>
		<input type="file" id="img_principal" name="img_principal" required>

		<label for="img_secundaria">Imagen secundaria</label>
		<div class="input-text-wrapper">
			<input type="file" id="img_secundaria" name="img_secundaria" required>
		</div>

		<label for="invitacion">Invitación</label>
		<div class="input-text-wrapper">
			<input type="text" id="invitacion" name="invitacion" required
				placeholder="Ejemplo: Se acerca un dia especial y queremos que lo celebres con nosotros, te invitamos ..." value="some">
		</div>

		<label for="frase">Frase o cíta alusiva</label>
		<div class="input-text-wrapper">
			<input type="text" id="frase" name="frase" required
				placeholder="Ejemplo: ' Podríamos dar la vuelta al mundo y nos volveríamos a elegir '">
		</div>

		<label for="img_gallery">Imágenes para la galería</label>
		<input type="file" id="img_gallery" name="img_gallery[]" multiple required>

		<label for="fecha_evento">Fecha del evento:</label>
		<div class="input-text-wrapper">
			<input type="date" id="fecha_evento" name="fecha_evento" pattern="d-m-Y" value="some">
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
				<input type="time" id="hora_festejo" name="hora_festejo" pattern="HH:mm" value="some">
			</div>

			<label for="nombre_salon_festejo">Nombre del salon:</label>
			<div class="input-text-wrapper">
				<input type="text" id="nombre_salon_festejo" name="nombre_salon_festejo" value="some"
					placeholder="Ejemplo: Salón Antorcha Palace">
			</div>

			<label for="direccion_festejo">Dirección del salon:</label>
			<input type="text" id="direccion_festejo" name="direccion_festejo" placeholder="Calle 123, Ciudad" value="some">
			<div id="map_festejo"></div>

		</div>

		<!-- Ceremonia -->
		<div class="wrap-ceremonia">
			<label for="hora_ceremonia">Hora de ceremonia/ registro (Opcional):</label>
			<div class="input-text-wrapper">
				<input type="time" id="hora_ceremonia" name="hora_ceremonia" pattern="HH:mm" value="some">
			</div>

			<label for="nombre_salon_ceremonia">Nombre del salon:</label>
			<div class="input-text-wrapper">
				<input type="text" id="nombre_salon_ceremonia" name="nombre_salon_ceremonia" value="some"
					placeholder="Ejemplo: Capilla del Milagro">
			</div>

			<label for="direccion_ceremonia">Dirección de la ceremonia:</label>
			<div class="input-text-wrapper">
				<input type="text" id="direccion_ceremonia" name="direccion_ceremonia" placeholder="Avenida 123, Ciudad"
					value="some">
			</div>
			<div id="map_ceremonia"></div>

		</div>

		<!-- Invitaction -->
		<label for="invitacion_nota">Aclaración sobre invitación:</label>
		<div class="input-text-wrapper">
			<textarea type="text" id="invitacion_nota" name="invitacion_nota"
				placeholder="Ejemplo: El valor de la invitación de niños es hasta los 9 años. Alias para transferencia ..."
				value=""></textarea>
		</div>

		<label for="invitacion_adultos">Valor invtiación adultos:</label>
		<div class="input-text-wrapper">
			<input type="text" id="invitacion_adultos" name="invitacion_adultos" value="some" placeholder="Ejemplo: $3.000">
		</div>

		<label for="invitacion_menores">Valor invtiación niños:</label>
		<div class="input-text-wrapper">
			<input type="text" id="invitacion_menores" name="invitacion_menores" value="some" placeholder="Ejemplo: $6.000">
		</div>

		<label for="notificacion_asistencia">Cuando alguien confirme su asistencia, te enviaremos un mail a:</label>
		<input type="email" id="notificacion_asistencia" name="notificacion_asistencia" value="some"
			placeholder="Ejemplo: micael@gmail.com">

		<label for="fecha_confirmar">Fecha límite para confirmar asistencia (Opcional):</label>
		<div class="input-text-wrapper">
			<input type="date" id="fecha_confirmar" name="fecha_confirmar" pattern="d-m-Y" value="some">
		</div>

		<input type="submit" name="submit" value="Crear página">

	</form>
</div>
<!-- Inicializa el mapa y el autocompletado de direcciones -->

<script>

	// Inicializa el mapa Ceremonia
	var map = new google.maps.Map(document.getElementById('map_ceremonia'), {
		center: { lat: -33.8688, lng: 151.2195 },
		zoom: 13
	});

	// Inicializa el autocompletado de direcciones
	var input = document.getElementById('direccion_ceremonia');
	var autocomplete = new google.maps.places.Autocomplete(input);
	autocomplete.bindTo('bounds', map);

	// Agrega un marcador al mapa cuando se selecciona una dirección en el autocompletado
	var infowindow = new google.maps.InfoWindow();
	var marker = new google.maps.Marker({
		map: map,
		anchorPoint: new google.maps.Point(0, -29)
	});
	autocomplete.addListener('place_changed', function () {
		infowindow.close();
		marker.setVisible(false);
		var place = autocomplete.getPlace();
		map.setCenter(place.geometry.location);
		if (!place.geometry) {
			// El usuario ha seleccionado una dirección que no existe en el mapa
			window.alert("No se puede encontrar la dirección: '" + place.name + "'");
			return;
		}

		// Muestra el marcador en el mapa y la dirección en la ventana de información
		marker.setPosition(place.geometry.location);
		marker.setVisible(true);
		var address = '';
		if (place.address_components) {
			address = [
				(place.address_components[0] && place.address_components[0].short_name || ''),
				(place.address_components[1] && place.address_components[1].short_name || ''),
				(place.address_components[2] && place.address_components[2].short_name || '')
			].join(' ');
		}
		infowindow.setContent('<div><strong>' + place.name + '</strong><br>' + address);
		infowindow.open(map, marker);
	});

	// Inicializa el mapa Festejo
	var mapFestejo = new google.maps.Map(document.getElementById('map_festejo'), {
		center: { lat: -33.8688, lng: 151.2195 },
		zoom: 13
	});

	// Inicializa el autocompletado de direcciones
	var inputFestejo = document.getElementById('direccion_festejo');
	var autocompleteFestejo = new google.maps.places.Autocomplete(inputFestejo);
	autocompleteFestejo.bindTo('bounds', mapFestejo);

	// Agrega un marcador al mapa cuando se selecciona una dirección en el autocompletado
	var infowindowFestejo = new google.maps.InfoWindow();
	var markerFestejo = new google.maps.Marker({
		map: mapFestejo,
		anchorPoint: new google.maps.Point(0, -29)
	});
	autocompleteFestejo.addListener('place_changed', function () {
		infowindowFestejo.close();
		markerFestejo.setVisible(false);
		var placeFestejo = autocompleteFestejo.getPlace();
		mapFestejo.setCenter(placeFestejo.geometry.location);
		if (!placeFestejo.geometry) {
			// El usuario ha seleccionado una dirección que no existe en el mapa
			window.alert("No se puede encontrar la dirección: '" + placeFestejo.name + "'");
			return;
		}

		// Muestra el marcador en el mapa y la dirección en la ventana de información
		markerFestejo.setPosition(placeFestejo.geometry.location);
		markerFestejo.setVisible(true);
		var addressFestejo = '';
		if (placeFestejo.address_components) {
			addressFestejo = [
				(placeFestejo.address_components[0] && placeFestejo.address_components[0].short_name || ''),
				(placeFestejo.address_components[1] && placeFestejo.address_components[1].short_name || ''),
				(placeFestejo.address_components[2] && placeFestejo.address_components[2].short_name || '')
			].join(' ');
		}
		infowindowFestejo.setContent('<div><strong>' + placeFestejo.name + '</strong><br>' + addressFestejo);
		infowindowFestejo.open(mapFestejo, markerFestejo);
	});

	// Slider
	let slider = document.querySelector('.slider'),
		slides = Array.from(slider.children);

	let sliderControll = document.querySelectorAll('.slider__control');

	let slidesToShow = 1;
	const speedSweep = 300;
	let setDefaultCards = true;


	// Set Default responsive Cards quantity 

	const mediaXl = window.matchMedia('(min-width: 1200px)'),
		mediaMd = window.matchMedia('(max-width: 1200px)'),
		mediaSm = window.matchMedia('(max-width: 576px)');

	function mediaXlchange(e) {

		if (e.matches) {
			slidesToShow = 4;
			initClassNamming();
		}
	}

	function mediaMdchange(e) {

		if (e.matches) {
			slidesToShow = 2;
			initClassNamming();
		}
	}

	function mediaSmchange(e) {

		if (e.matches) {
			slidesToShow = 1;
			initClassNamming();
		}
	}

	mediaSm.addListener(mediaSmchange);
	mediaMd.addListener(mediaMdchange);
	mediaXl.addListener(mediaXlchange);

	if (setDefaultCards) {
		mediaXlchange(mediaXl)
		mediaMdchange(mediaMd)
		mediaSmchange(mediaSm)
	}

	// Nombramiento de clases inicial - Transition speed
	function initClassNamming() {
		slides.forEach((slide, index) => {
			slide.classList.remove('slide-visible');
			slide.classList.remove('end-deck');
			slide.classList.remove('start-deck');
			slide.style.removeProperty('z-index');

			slide.style.transition = speedSweep / 980 + 's';
			slide.style.animationDuration = speedSweep / 980 + 's';

			// asignamos clase de slider a todas las cards
			slide.classList.add('slider__slide')

			// asignamos clase visible a las primeras 4 cards
			if (index <= slidesToShow - 1) {

				slide.classList.add('slide-visible');

				// dejar el resto en end-deck
			} else {
				slide.classList.add('end-deck');

			}
			setTimeout(() => {
				let visibles = slider.querySelectorAll('.slide-visible');

				visibles[visibles.length - 1].style.zIndex = 0;
			}, speedSweep);

		})
		if (slidesToShow == 1) {
			slider.classList.add('one-card');
		}
		orderIndexEnddeck();

	}

	initClassNamming();

	// acomodar el index del end-deck
	let enddeck = slider.querySelectorAll('.end-deck');

	function orderIndexEnddeck() {

		let enddeck = slider.querySelectorAll('.end-deck');

		enddeck.forEach((endCard, index) => {

			endCard.style.zIndex = '-' + index - 1;

		})

	}

	// Escuchar click en controllers

	sliderControll.forEach(control => {

		control.addEventListener('click', () => {

			let enddeck = slider.querySelectorAll('.end-deck');
			let startdeck = slider.querySelectorAll('.start-deck');

			if (control.classList.contains('next') && enddeck.length >= 1) {

				nextClicked();

				setTimeout(() => {
					disableControl();
				}, speedSweep);

			}
			if (control.classList.contains('prev') && startdeck.length >= 1) {

				prevClicked();

				setTimeout(() => {
					disableControl();
				}, speedSweep);
			}

			control.classList.remove('disable');

			// Disable click while transition
			control.classList.add('wait-transition');

			setTimeout(() => {
				control.classList.remove('wait-transition');
			}, speedSweep);


		})

	})

	// disable buttons if unnecesary
	function disableControl() {

		let startdeck = slider.querySelectorAll('.start-deck');
		let enddeck = slider.querySelectorAll('.end-deck');

		if (startdeck.length <= 0) {

			document.querySelector('.prev').classList.add('disable');
		} else {
			document.querySelector('.prev').classList.remove('disable');

		}


		if (enddeck.length <= 0) {

			document.querySelector('.next').classList.add('disable');
		} else {
			document.querySelector('.next').classList.remove('disable');

		}


	}
	disableControl();


	// Next button
	function nextClicked() {

		let visibles = slider.querySelectorAll('.slide-visible');
		let enddeck = slider.querySelectorAll('.end-deck');

		// Animacion a ultimos 3 visibles
		visibles.forEach((visible, index) => {

			if (index >= 1) {
				visibles[0].style.zIndex = 0;
				visible.classList.add('next-transition');
				visible.style.zIndex = 2;

				setTimeout(() => {
					visible.classList.remove('next-transition');
					visible.style.removeProperty('z-index');

				}, speedSweep);

			}

		})

		// Primer en End-deck pasa a ser ultimo en Visibles

		setTimeout(() => {
			enddeck[0].style.zIndex = 0;
			enddeck[0].classList.remove('end-deck');
			enddeck[0].classList.add('slide-visible');
		}, speedSweep);

		// Primer en visibles pasa a ser ultimo en start-deck

		setTimeout(() => {
			visibles[0].classList.add('start-deck');
			visibles[0].classList.remove('slide-visible');
			visibles[0].style.removeProperty('z-index');
			orderIndexEnddeck();
		}, speedSweep);

	}

	// Prev button
	function prevClicked() {

		let visibles = slider.querySelectorAll('.slide-visible');
		let startdeck = slider.querySelectorAll('.start-deck');

		// Animacion a primeros 3 visibles

		visibles.forEach((visible, index) => {

			if (index <= slidesToShow - 2) {

				visibles[visibles.length - 1].style.zIndex = 0;

				visible.classList.add('prev-transition');
				visible.style.removeProperty('z-index');

				setTimeout(() => {
					visible.classList.remove('prev-transition');

				}, speedSweep);

			}

		})

		// Ultimo en Start-deck pasa a ser primero en visible
		setTimeout(() => {
			startdeck[startdeck.length - 1].classList.remove('start-deck');
			startdeck[startdeck.length - 1].classList.add('slide-visible');
		}, speedSweep);

		// Ultimo en visibles pasa a ser primero en end-deck

		setTimeout(() => {
			visibles[visibles.length - 1].classList.remove('slide-visible');
			visibles[visibles.length - 1].classList.add('end-deck');
			visibles[visibles.length - 2].style.zIndex = 0;

			orderIndexEnddeck();

		}, speedSweep);

	}

	const form = document.querySelector('form');
	const loadingOverlay = document.querySelector('#loading-overlay');

	form.addEventListener('submit', function () {
		loadingOverlay.style.display = 'flex';
	});

	window.addEventListener('load', function () {
		const loadingOverlay = window.parent.document.querySelector('#loading-overlay');
		loadingOverlay.style.display = 'none';
	});
</script>

<?php
get_footer();