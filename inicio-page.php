<?php
/**
 *Template Name: Inicio
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Fotos_Rock
 */

if (!defined('ABSPATH')) {
	exit;
}
get_header();
?>



						<?php
						/**
						 *Template Name: Inicio
						 *
						 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
						 *
						 * @package Fotos_Rock
						 */

						if (!defined('ABSPATH')) {
							exit;
						}
						get_header();
						?>

<div class="is-boxed has-animations">
	<div class="body-wrap boxed-container">
		<header class="site-header">
			<div class="container">
				<div class="site-header-inner">
					<div class="brand header-brand">
						<h1 class="m-0">
							<a href="<?php echo get_site_url() ?>">
								<img class="header-logo-image asset-light" src="<?php echo get_template_directory_uri(); ?>/assets/images/images-home/logo-light.svg" alt="Logo">
								<img class="header-logo-image asset-dark" src="<?php echo get_template_directory_uri(); ?>/assets/images/images-home/logo-dark.svg" alt="Logo">
							</a>
						</h1>
					</div>
					<div class="menu-home">
			<a class="menu-home__acceso"
				href="<?php echo esc_url(wc_get_account_endpoint_url('my-account')); ?>">Acceso usuarios <img
				src="<?php echo get_template_directory_uri(); ?>/assets/images/user-icon.svg" alt=""></a>
		</div>
				</div>
			</div>
		</header>

		<main>
			<section class="hero">
				<div class="container">
					<div class="hero-inner">
						<div class="hero-copy">
							<h1 class="hero-title mt-0">Web personalizada para ese día único en tu vida</h1>
							<p class="hero-paragraph">Galería e invitación virtual para eventos.<br>Creá hoy tu página y
								sorprendé a tus invitados!.</p>
							<div class="hero-cta">
								<a class="button-home button-primary" href="<?php echo esc_url(add_query_arg('add-to-cart', 557)); ?>">Crear mi web</a>
								<div class="lights-toggle">
									<p class="precio">Un solo pago <br> de $3.600 </p>
									<!-- <input id="lights-toggle" type="checkbox" name="lights-toggle" class="switch" checked="checked">
									<label for="lights-toggle" class="text-xs"><span>Turn me <span class="label-text">dark</span></span></label> -->
								</div>
							</div>
						</div>
						<div class="hero-media">
							<div class="header-illustration">
								<img class="header-illustration-image asset-light"
									src="<?php echo get_template_directory_uri(); ?>/assets/images/images-home/header-illustration-light.svg" alt="Header illustration">
								<img class="header-illustration-image asset-dark"
									src="<?php echo get_template_directory_uri(); ?>/assets/images/images-home/header-illustration-dark.svg" alt="Header illustration">
							</div>
							<div class="hero-media-illustration">
								<img class="hero-media-illustration-image asset-light"
									src="<?php echo get_template_directory_uri(); ?>/assets/images/images-home/hero-media-illustration-light.svg" alt="Hero media illustration">
								<img class="hero-media-illustration-image asset-dark"
									src="<?php echo get_template_directory_uri(); ?>/assets/images/images-home/hero-media-illustration-dark.svg" alt="Hero media illustration">
							</div>
							<div class="hero-media-container">
								<img class="hero-media-image asset-light" src="<?php echo get_template_directory_uri(); ?>/assets/images/images-home/casados.svg"
									alt="Hero media">
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="gallery-section">
				<h2 class="section-title mt-0">Diseños para la web de tu evento</h2>
				<p class="section-paragraph">Encontrá el diseño perfecto para tu tipo de evento.</p>

				<div class="slider">
					<div><img class="slider__img"
							src="https://websitedemos.net/wp-content/uploads/2017/12/brandstore-02-1-600x1856.jpg">
						<a class="slider__demo" href="#" target="_blank">Ver demo</a>
					</div>
					<div><img class="slider__img"
							src="https://websitedemos.net/wp-content/uploads/2017/12/brandstore-02-1-600x1856.jpg">
						<a class="slider__demo" href="#" target="_blank">Ver demo</a>

					</div>
					<div><img class="slider__img"
							src="https://websitedemos.net/wp-content/uploads/2017/12/brandstore-02-1-600x1856.jpg">
						<a class="slider__demo" href="#" target="_blank">Ver demo</a>

					</div>
					<div><img class="slider__img"
							src="https://websitedemos.net/wp-content/uploads/2017/12/brandstore-02-1-600x1856.jpg">
						<a class="slider__demo" href="#" target="_blank">Ver demo</a>

					</div>
					<div><img class="slider__img"
							src="https://websitedemos.net/wp-content/uploads/2017/12/brandstore-02-1-600x1856.jpg">
						<a class="slider__demo" href="#" target="_blank">Ver demo</a>

					</div>
					<div><img class="slider__img"
							src="https://websitedemos.net/wp-content/uploads/2017/12/brandstore-02-1-600x1856.jpg">
						<a class="slider__demo" href="#" target="_blank">Ver demo</a>

					</div>

				</div>

				<div class="slider__control">

					<div class="slider__control prev">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/images-home/flecha-derecha.png" alt="Derecha">
					</div>
					<div class="slider__control next">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/images-home/flecha-derecha.png" alt="Izquierda">

					</div>
				</div>
			</section>

			<section class="features section">
				<div class="container">
					<div class="features-inner section-inner has-bottom-divider">
						<div class="features-header text-center">
							<div class="container-sm">
								<h2 class="section-title mt-0">Galería de fotos e invitación online</h2>
								<p class="section-paragraph">Compartí tu sesión de fotos e invitación a tu evento con
									una web personalizada para ese día tan especial.</p>
								<div class="features-image">
									<img class="features-illustration asset-dark"
										src="<?php echo get_template_directory_uri(); ?>/assets/images/images-home/features-illustration-dark.svg" alt="Feature illustration">
									<img class="features-box asset-dark" src="<?php echo get_template_directory_uri(); ?>/assets/images/images-home/features-box-dark.svg"
										alt="Feature box">
									<img class="features-illustration asset-dark"
										src="<?php echo get_template_directory_uri(); ?>/assets/images/images-home/features-illustration-top-dark.svg"
										alt="Feature illustration top">
									<img class="features-illustration asset-light"
										src="<?php echo get_template_directory_uri(); ?>/assets/images/images-home/features-illustration-light.svg" alt="Feature illustration">
									<img class="features-box asset-light" src="<?php echo get_template_directory_uri(); ?>/assets/images/images-home/quince.svg"
										alt="Feature box">
									<img class="features-illustration asset-light"
										src="<?php echo get_template_directory_uri(); ?>/assets/images/images-home/features-illustration-top-light.svg"
										alt="Feature illustration top">
								</div>
							</div>
						</div>

						<div class="features-wrap">
							<div class="feature is-revealing">
								<div class="feature-inner">
									<div class="feature-icon">
										<img class="asset-light" src="<?php echo get_template_directory_uri(); ?>/assets/images/images-home/feature-01-light.svg"
											alt="Feature 01">
										<img class="asset-dark" src="<?php echo get_template_directory_uri(); ?>/assets/images/images-home/feature-01-dark.svg" alt="Feature 01">
									</div>
									<div class="feature-content">
										<h3 class="feature-title mt-0">Galería de fotos y video</h3>
										<p class="text-sm mb-0">Podrás subir tu sesión de fotos para compartirlas con
											tus invitados en tu galería de fotos y video online!.</p>
									</div>
								</div>
							</div>
							<div class="feature is-revealing">
								<div class="feature-inner">
									<div class="feature-icon">
										<img class="asset-light" src="<?php echo get_template_directory_uri(); ?>/assets/images/images-home/feature-02-light.svg"
											alt="Feature 02">
										<img class="asset-dark" src="<?php echo get_template_directory_uri(); ?>/assets/images/images-home/feature-02-dark.svg" alt="Feature 02">
									</div>
									<div class="feature-content">
										<h3 class="feature-title mt-0">Información del evento</h3>
										<p class="text-sm mb-0">Compartí en tu web información útil sobre el evento.
											Mapa con la ubicación de la ceremoia y salón, dia, hora, etc.</p>
									</div>
								</div>
							</div>
							<div class="feature is-revealing">
								<div class="feature-inner">
									<div class="feature-icon">
										<img class="asset-light" src="<?php echo get_template_directory_uri(); ?>/assets/images/images-home/feature-03-light.svg"
											alt="Feature 03">
										<img class="asset-dark" src="<?php echo get_template_directory_uri(); ?>/assets/images/images-home/feature-03-dark.svg" alt="Feature 03">
									</div>
									<div class="feature-content">
										<h3 class="feature-title mt-0">Confirmación de asistencia</h3>
										<p class="text-sm mb-0">Tu web tendrá un formulario donde los invitados podrán
											confirmar su asistencia, recibirás la confirmación en tu correo.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="cta section">
				<div class="container-sm">
					<div class="cta-inner section-inner">
						<div class="cta-header text-center">
							<h2 class="section-title mt-0">Simple y auto administrable</h2>
							<p class="section-paragraph">Personalizar tu sitio es muy simple, comenzá hoy mismo y
								sorprendé a tus invitados en ese evento tan especial.</p>
							<div class="cta-cta">
								<p class="">Un solo pago <br> de $3.600 </p>
								<a class="button-home button-primary" href="<?php echo esc_url(add_query_arg('add-to-cart', 557)); ?>">Comenzar</a>
							</div>
						</div>
					</div>
				</div>
			</section>
		</main>

		<footer class="site-footer has-top-divider">
			<div class="container">
				<div class="site-footer-inner">
					<div class="brand footer-brand">
						<a href="#">
							<img class="asset-light" src="<?php echo get_template_directory_uri(); ?>/assets/images/images-home/logo-light.svg" alt="Logo">
							<img class="asset-dark" src="<?php echo get_template_directory_uri(); ?>/assets/images/images-home/logo-dark.svg" alt="Logo">
						</a>
					</div>
					<ul class="footer-links list-reset">
						<li>
							<a href="#">Contact</a>
						</li>
						<li>
							<a href="#">About us</a>
						</li>
						<li>
							<a href="#">FAQ's</a>
						</li>
						<li>
							<a href="#">Support</a>
						</li>
					</ul>
					<ul class="footer-social-links list-reset">
						<li>
							<a href="#">
								<span class="screen-reader-text">Facebook</span>
								<svg width="16" height="16" xmlns="http://www.w3.org/2000/svg">
									<path
										d="M6.023 16L6 9H3V6h3V4c0-2.7 1.672-4 4.08-4 1.153 0 2.144.086 2.433.124v2.821h-1.67c-1.31 0-1.563.623-1.563 1.536V6H13l-1 3H9.28v7H6.023z"
										fill="#FFF" />
								</svg>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="screen-reader-text">Twitter</span>
								<svg width="16" height="16" xmlns="http://www.w3.org/2000/svg">
									<path
										d="M16 3c-.6.3-1.2.4-1.9.5.7-.4 1.2-1 1.4-1.8-.6.4-1.3.6-2.1.8-.6-.6-1.5-1-2.4-1-1.7 0-3.2 1.5-3.2 3.3 0 .3 0 .5.1.7-2.7-.1-5.2-1.4-6.8-3.4-.3.5-.4 1-.4 1.7 0 1.1.6 2.1 1.5 2.7-.5 0-1-.2-1.5-.4C.7 7.7 1.8 9 3.3 9.3c-.3.1-.6.1-.9.1-.2 0-.4 0-.6-.1.4 1.3 1.6 2.3 3.1 2.3-1.1.9-2.5 1.4-4.1 1.4H0c1.5.9 3.2 1.5 5 1.5 6 0 9.3-5 9.3-9.3v-.4C15 4.3 15.6 3.7 16 3z"
										fill="#FFF" />
								</svg>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="screen-reader-text">Google</span>
								<svg width="16" height="16" xmlns="http://www.w3.org/2000/svg">
									<path
										d="M7.9 7v2.4H12c-.2 1-1.2 3-4 3-2.4 0-4.3-2-4.3-4.4 0-2.4 2-4.4 4.3-4.4 1.4 0 2.3.6 2.8 1.1l1.9-1.8C11.5 1.7 9.9 1 8 1 4.1 1 1 4.1 1 8s3.1 7 7 7c4 0 6.7-2.8 6.7-6.8 0-.5 0-.8-.1-1.2H7.9z"
										fill="#FFF" />
								</svg>
							</a>
						</li>
					</ul>
					<div class="footer-copyright">&copy; 2018 Switch, all rights reserved</div>
				</div>
			</div>
		</footer>
	</div>
</div>
<script>
	let slider = document.querySelector('.slider'),
	slides = Array.from(slider.children);

let sliderControll = document.querySelectorAll('.slider__control');

let slidesToShow = 1;
const speedSweep = 400;
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
(function () {

  const doc = document
  const rootEl = doc.documentElement
  const body = doc.body
  const lightSwitch = doc.getElementById('lights-toggle')
  /* global ScrollReveal */
  const sr = window.sr = ScrollReveal()

  rootEl.classList.remove('no-js')
  rootEl.classList.add('js')

  window.addEventListener('load', function () {
	body.classList.add('is-loaded')
  })

  // Reveal animations
  function revealAnimations () {
	sr.reveal('.feature', {
	  duration: 600,
	  distance: '20px',
	  easing: 'cubic-bezier(0.215, 0.61, 0.355, 1)',
	  origin: 'right',
	  viewFactor: 0.2
	})
  }

  if (body.classList.contains('has-animations')) {
	window.addEventListener('load', revealAnimations)
  }

  // Light switcher
  if (lightSwitch) {
	window.addEventListener('load', checkLights)
	lightSwitch.addEventListener('change', checkLights)
  }

  function checkLights () {
	let labelText = lightSwitch.parentNode.querySelector('.label-text')
	if (lightSwitch.checked) {
	  body.classList.remove('lights-off')
	  if (labelText) {
		labelText.innerHTML = 'dark'
	  }
	} else {
	  body.classList.add('lights-off')
	  if (labelText) {
		labelText.innerHTML = 'light'
	  }
	}
  }
}())

</script>