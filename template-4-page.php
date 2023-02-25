<?php
/**
 *Template Name: Template 4
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

?>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<title>wp_elementor</title>
	<meta name="robots" content="max-image-preview:large">
	<link rel="dns-prefetch" href="//fonts.googleapis.com">
	<link rel="alternate" type="application/rss+xml" title="wp_elementor &raquo; Feed" href="./feed/index.html">
	<link rel="alternate" type="application/rss+xml" title="wp_elementor &raquo; Comments Feed"
		href="./comments/feed/index.html">
	<script>
		window._wpemojiSettings = { "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/", "ext": ".png", "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/", "svgExt": ".svg", "source": { "concatemoji": ".\/\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.1.1" } };
		/*! This file is auto-generated */
		!function (e, a, t) { var n, r, o, i = a.createElement("canvas"), p = i.getContext && i.getContext("2d"); function s(e, t) { var a = String.fromCharCode, e = (p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, e), 0, 0), i.toDataURL()); return p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, t), 0, 0), e === i.toDataURL() } function c(e) { var t = a.createElement("script"); t.src = e, t.defer = t.type = "text/javascript", a.getElementsByTagName("head")[0].appendChild(t) } for (o = Array("flag", "emoji"), t.supports = { everything: !0, everythingExceptFlag: !0 }, r = 0; r < o.length; r++)t.supports[o[r]] = function (e) { if (p && p.fillText) switch (p.textBaseline = "top", p.font = "600 32px Arial", e) { case "flag": return s([127987, 65039, 8205, 9895, 65039], [127987, 65039, 8203, 9895, 65039]) ? !1 : !s([55356, 56826, 55356, 56819], [55356, 56826, 8203, 55356, 56819]) && !s([55356, 57332, 56128, 56423, 56128, 56418, 56128, 56421, 56128, 56430, 56128, 56423, 56128, 56447], [55356, 57332, 8203, 56128, 56423, 8203, 56128, 56418, 8203, 56128, 56421, 8203, 56128, 56430, 8203, 56128, 56423, 8203, 56128, 56447]); case "emoji": return !s([129777, 127995, 8205, 129778, 127999], [129777, 127995, 8203, 129778, 127999]) }return !1 }(o[r]), t.supports.everything = t.supports.everything && t.supports[o[r]], "flag" !== o[r] && (t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && t.supports[o[r]]); t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && !t.supports.flag, t.DOMReady = !1, t.readyCallback = function () { t.DOMReady = !0 }, t.supports.everything || (n = function () { t.readyCallback() }, a.addEventListener ? (a.addEventListener("DOMContentLoaded", n, !1), e.addEventListener("load", n, !1)) : (e.attachEvent("onload", n), a.attachEvent("onreadystatechange", function () { "complete" === a.readyState && t.readyCallback() })), (e = t.source || {}).concatemoji ? c(e.concatemoji) : e.wpemoji && e.twemoji && (c(e.twemoji), c(e.wpemoji))) }(window, document, window._wpemojiSettings);
	</script>
	<style>
		img.wp-smiley,
		img.emoji {
			display: inline !important;
			border: none !important;
			box-shadow: none !important;
			height: 1em !important;
			width: 1em !important;
			margin: 0 0.07em !important;
			vertical-align: -0.1em !important;
			background: none !important;
			padding: 0 !important;
		}
	</style>
	<link rel="stylesheet" id="astra-theme-css-css"
		href="<?php echo get_template_directory_uri(); ?>/assets/landing4/wp-content/themes/astra/assets/css/minified/main.min.css?ver=4.0.2" media="all">
	<style id="astra-theme-css-inline-css">
		.ast-no-sidebar .entry-content .alignfull {
			margin-left: calc(-50vw + 50%);
			margin-right: calc(-50vw + 50%);
			max-width: 100vw;
			width: 100vw;
		}

		.ast-no-sidebar .entry-content .alignwide {
			margin-left: calc(-41vw + 50%);
			margin-right: calc(-41vw + 50%);
			max-width: unset;
			width: unset;
		}

		.ast-no-sidebar .entry-content .alignfull .alignfull,
		.ast-no-sidebar .entry-content .alignfull .alignwide,
		.ast-no-sidebar .entry-content .alignwide .alignfull,
		.ast-no-sidebar .entry-content .alignwide .alignwide,
		.ast-no-sidebar .entry-content .wp-block-column .alignfull,
		.ast-no-sidebar .entry-content .wp-block-column .alignwide {
			width: 100%;
			margin-left: auto;
			margin-right: auto;
		}

		.wp-block-gallery,
		.blocks-gallery-grid {
			margin: 0;
		}

		.wp-block-separator {
			max-width: 100px;
		}

		.wp-block-separator.is-style-wide,
		.wp-block-separator.is-style-dots {
			max-width: none;
		}

		.entry-content .has-2-columns .wp-block-column:first-child {
			padding-right: 10px;
		}

		.entry-content .has-2-columns .wp-block-column:last-child {
			padding-left: 10px;
		}

		@media (max-width: 782px) {
			.entry-content .wp-block-columns .wp-block-column {
				flex-basis: 100%;
			}

			.entry-content .has-2-columns .wp-block-column:first-child {
				padding-right: 0;
			}

			.entry-content .has-2-columns .wp-block-column:last-child {
				padding-left: 0;
			}
		}

		body .entry-content .wp-block-latest-posts {
			margin-left: 0;
		}

		body .entry-content .wp-block-latest-posts li {
			list-style: none;
		}

		.ast-no-sidebar .ast-container .entry-content .wp-block-latest-posts {
			margin-left: 0;
		}

		.ast-header-break-point .entry-content .alignwide {
			margin-left: auto;
			margin-right: auto;
		}

		.entry-content .blocks-gallery-item img {
			margin-bottom: auto;
		}

		.wp-block-pullquote {
			border-top: 4px solid #555d66;
			border-bottom: 4px solid #555d66;
			color: #40464d;
		}

		:root {
			--ast-container-default-xlg-padding: 6.67em;
			--ast-container-default-lg-padding: 5.67em;
			--ast-container-default-slg-padding: 4.34em;
			--ast-container-default-md-padding: 3.34em;
			--ast-container-default-sm-padding: 6.67em;
			--ast-container-default-xs-padding: 2.4em;
			--ast-container-default-xxs-padding: 1.4em;
			--ast-code-block-background: #EEEEEE;
			--ast-comment-inputs-background: #FAFAFA;
		}

		html {
			font-size: 100%;
		}

		a,
		.page-title {
			color: var(--ast-global-color-2);
		}

		a:hover,
		a:focus {
			color: var(--ast-global-color-1);
		}

		body,
		button,
		input,
		select,
		textarea,
		.ast-button,
		.ast-custom-button {
			font-family: 'Inter', sans-serif;
			font-weight: 400;
			font-size: 16px;
			font-size: 1rem;
		}

		blockquote {
			color: var(--ast-global-color-3);
		}

		p,
		.entry-content p {
			margin-bottom: 1em;
		}

		h1,
		.entry-content h1,
		h2,
		.entry-content h2,
		h3,
		.entry-content h3,
		h4,
		.entry-content h4,
		h5,
		.entry-content h5,
		h6,
		.entry-content h6,
		.site-title,
		.site-title a {
			font-family: 'Brygada 1918', serif;
			font-weight: 600;
		}

		.site-title {
			font-size: 35px;
			font-size: 2.1875rem;
			display: none;
		}

		header .custom-logo-link img {
			max-width: 60px;
		}

		.astra-logo-svg {
			width: 60px;
		}

		.site-header .site-description {
			font-size: 15px;
			font-size: 0.9375rem;
			display: none;
		}

		.entry-title {
			font-size: 30px;
			font-size: 1.875rem;
		}

		h1,
		.entry-content h1 {
			font-size: 88px;
			font-size: 5.5rem;
			font-weight: 500;
			font-family: 'Brygada 1918', serif;
			line-height: 1.2em;
		}

		h2,
		.entry-content h2 {
			font-size: 48px;
			font-size: 3rem;
			font-weight: 600;
			font-family: 'Brygada 1918', serif;
			line-height: 1.2em;
		}

		h3,
		.entry-content h3 {
			font-size: 32px;
			font-size: 2rem;
			font-weight: 600;
			font-family: 'Brygada 1918', serif;
			line-height: 1.2em;
		}

		h4,
		.entry-content h4 {
			font-size: 24px;
			font-size: 1.5rem;
			font-weight: 600;
			font-family: 'Brygada 1918', serif;
		}

		h5,
		.entry-content h5 {
			font-size: 20px;
			font-size: 1.25rem;
			font-weight: 600;
			font-family: 'Brygada 1918', serif;
		}

		h6,
		.entry-content h6 {
			font-size: 14px;
			font-size: 0.875rem;
			font-weight: 600;
			font-family: 'Brygada 1918', serif;
		}

		::selection {
			background-color: var(--ast-global-color-0);
			color: #000000;
		}

		body,
		h1,
		.entry-title a,
		.entry-content h1,
		h2,
		.entry-content h2,
		h3,
		.entry-content h3,
		h4,
		.entry-content h4,
		h5,
		.entry-content h5,
		h6,
		.entry-content h6 {
			color: var(--ast-global-color-3);
		}

		.tagcloud a:hover,
		.tagcloud a:focus,
		.tagcloud a.current-item {
			color: #ffffff;
			border-color: var(--ast-global-color-2);
			background-color: var(--ast-global-color-2);
		}

		input:focus,
		input[type="text"]:focus,
		input[type="email"]:focus,
		input[type="url"]:focus,
		input[type="password"]:focus,
		input[type="reset"]:focus,
		input[type="search"]:focus,
		textarea:focus {
			border-color: var(--ast-global-color-2);
		}

		input[type="radio"]:checked,
		input[type=reset],
		input[type="checkbox"]:checked,
		input[type="checkbox"]:hover:checked,
		input[type="checkbox"]:focus:checked,
		input[type=range]::-webkit-slider-thumb {
			border-color: var(--ast-global-color-2);
			background-color: var(--ast-global-color-2);
			box-shadow: none;
		}

		.site-footer a:hover+.post-count,
		.site-footer a:focus+.post-count {
			background: var(--ast-global-color-2);
			border-color: var(--ast-global-color-2);
		}

		.single .nav-links .nav-previous,
		.single .nav-links .nav-next {
			color: var(--ast-global-color-2);
		}

		.entry-meta,
		.entry-meta * {
			line-height: 1.45;
			color: var(--ast-global-color-2);
		}

		.entry-meta a:hover,
		.entry-meta a:hover *,
		.entry-meta a:focus,
		.entry-meta a:focus *,
		.page-links>.page-link,
		.page-links .page-link:hover,
		.post-navigation a:hover {
			color: var(--ast-global-color-1);
		}

		#cat option,
		.secondary .calendar_wrap thead a,
		.secondary .calendar_wrap thead a:visited {
			color: var(--ast-global-color-2);
		}

		.secondary .calendar_wrap #today,
		.ast-progress-val span {
			background: var(--ast-global-color-2);
		}

		.secondary a:hover+.post-count,
		.secondary a:focus+.post-count {
			background: var(--ast-global-color-2);
			border-color: var(--ast-global-color-2);
		}

		.calendar_wrap #today>a {
			color: #ffffff;
		}

		.page-links .page-link,
		.single .post-navigation a {
			color: var(--ast-global-color-2);
		}

		.widget-title {
			font-size: 22px;
			font-size: 1.375rem;
			color: var(--ast-global-color-3);
		}

		.ast-single-post .entry-content a,
		.ast-comment-content a:not(.ast-comment-edit-reply-wrap a) {
			text-decoration: underline;
		}

		.ast-single-post .wp-block-button .wp-block-button__link,
		.ast-single-post .elementor-button-wrapper .elementor-button,
		.ast-single-post .entry-content .uagb-tab a,
		.ast-single-post .entry-content .uagb-ifb-cta a,
		.ast-single-post .entry-content .wp-block-uagb-buttons a,
		.ast-single-post .entry-content .uabb-module-content a,
		.ast-single-post .entry-content .uagb-post-grid a,
		.ast-single-post .entry-content .uagb-timeline a,
		.ast-single-post .entry-content .uagb-toc__wrap a,
		.ast-single-post .entry-content .uagb-taxomony-box a,
		.ast-single-post .entry-content .woocommerce a,
		.entry-content .wp-block-latest-posts>li>a,
		.ast-single-post .entry-content .wp-block-file__button {
			text-decoration: none;
		}

		.ast-logo-title-inline .site-logo-img {
			padding-right: 1em;
		}

		.site-logo-img img {
			transition: all 0.2s linear;
		}

		.ast-page-builder-template .hentry {
			margin: 0;
		}

		.ast-page-builder-template .site-content>.ast-container {
			max-width: 100%;
			padding: 0;
		}

		.ast-page-builder-template .site-content #primary {
			padding: 0;
			margin: 0;
		}

		.ast-page-builder-template .no-results {
			text-align: center;
			margin: 4em auto;
		}

		.ast-page-builder-template .ast-pagination {
			padding: 2em;
		}

		.ast-page-builder-template .entry-header.ast-no-title.ast-no-thumbnail {
			margin-top: 0;
		}

		.ast-page-builder-template .entry-header.ast-header-without-markup {
			margin-top: 0;
			margin-bottom: 0;
		}

		.ast-page-builder-template .entry-header.ast-no-title.ast-no-meta {
			margin-bottom: 0;
		}

		.ast-page-builder-template.single .post-navigation {
			padding-bottom: 2em;
		}

		.ast-page-builder-template.single-post .site-content>.ast-container {
			max-width: 100%;
		}

		.ast-page-builder-template .entry-header {
			margin-top: 4em;
			margin-left: auto;
			margin-right: auto;
			padding-left: 20px;
			padding-right: 20px;
		}

		.single.ast-page-builder-template .entry-header {
			padding-left: 20px;
			padding-right: 20px;
		}

		.ast-page-builder-template .ast-archive-description {
			margin: 4em auto 0;
			padding-left: 20px;
			padding-right: 20px;
		}

		.ast-page-builder-template.ast-no-sidebar .entry-content .alignwide {
			margin-left: 0;
			margin-right: 0;
		}

		@media (max-width:921px) {
			#ast-desktop-header {
				display: none;
			}
		}

		@media (min-width:921px) {
			#ast-mobile-header {
				display: none;
			}
		}

		.wp-block-buttons.aligncenter {
			justify-content: center;
		}

		@media (max-width:921px) {

			.ast-theme-transparent-header #primary,
			.ast-theme-transparent-header #secondary {
				padding: 0;
			}
		}

		@media (max-width:921px) {
			.ast-plain-container.ast-no-sidebar #primary {
				padding: 0;
			}
		}

		.ast-plain-container.ast-no-sidebar #primary {
			margin-top: 0;
			margin-bottom: 0;
		}

		@media (min-width:1200px) {
			.wp-block-group .has-background {
				padding: 20px;
			}
		}

		@media (min-width:1200px) {

			.ast-no-sidebar.ast-separate-container .entry-content .wp-block-group.alignwide,
			.ast-no-sidebar.ast-separate-container .entry-content .wp-block-cover.alignwide {
				margin-left: -20px;
				margin-right: -20px;
				padding-left: 20px;
				padding-right: 20px;
			}

			.ast-no-sidebar.ast-separate-container .entry-content .wp-block-cover.alignfull,
			.ast-no-sidebar.ast-separate-container .entry-content .wp-block-group.alignfull {
				margin-left: -6.67em;
				margin-right: -6.67em;
				padding-left: 6.67em;
				padding-right: 6.67em;
			}
		}

		@media (min-width:1200px) {

			.wp-block-cover-image.alignwide .wp-block-cover__inner-container,
			.wp-block-cover.alignwide .wp-block-cover__inner-container,
			.wp-block-cover-image.alignfull .wp-block-cover__inner-container,
			.wp-block-cover.alignfull .wp-block-cover__inner-container {
				width: 100%;
			}
		}

		.wp-block-columns {
			margin-bottom: unset;
		}

		.wp-block-image.size-full {
			margin: 2rem 0;
		}

		.wp-block-separator.has-background {
			padding: 0;
		}

		.wp-block-gallery {
			margin-bottom: 1.6em;
		}

		.wp-block-group {
			padding-top: 4em;
			padding-bottom: 4em;
		}

		.wp-block-group__inner-container .wp-block-columns:last-child,
		.wp-block-group__inner-container :last-child,
		.wp-block-table table {
			margin-bottom: 0;
		}

		.blocks-gallery-grid {
			width: 100%;
		}

		.wp-block-navigation-link__content {
			padding: 5px 0;
		}

		.wp-block-group .wp-block-group .has-text-align-center,
		.wp-block-group .wp-block-column .has-text-align-center {
			max-width: 100%;
		}

		.has-text-align-center {
			margin: 0 auto;
		}

		@media (min-width:1200px) {

			.wp-block-cover__inner-container,
			.alignwide .wp-block-group__inner-container,
			.alignfull .wp-block-group__inner-container {
				max-width: 1200px;
				margin: 0 auto;
			}

			.wp-block-group.alignnone,
			.wp-block-group.aligncenter,
			.wp-block-group.alignleft,
			.wp-block-group.alignright,
			.wp-block-group.alignwide,
			.wp-block-columns.alignwide {
				margin: 2rem 0 1rem 0;
			}
		}

		@media (max-width:1200px) {
			.wp-block-group {
				padding: 3em;
			}

			.wp-block-group .wp-block-group {
				padding: 1.5em;
			}

			.wp-block-columns,
			.wp-block-column {
				margin: 1rem 0;
			}
		}

		@media (min-width:921px) {
			.wp-block-columns .wp-block-group {
				padding: 2em;
			}
		}

		@media (max-width:544px) {

			.wp-block-cover-image .wp-block-cover__inner-container,
			.wp-block-cover .wp-block-cover__inner-container {
				width: unset;
			}

			.wp-block-cover,
			.wp-block-cover-image {
				padding: 2em 0;
			}

			.wp-block-group,
			.wp-block-cover {
				padding: 2em;
			}

			.wp-block-media-text__media img,
			.wp-block-media-text__media video {
				width: unset;
				max-width: 100%;
			}

			.wp-block-media-text.has-background .wp-block-media-text__content {
				padding: 1em;
			}
		}

		.wp-block-image.aligncenter {
			margin-left: auto;
			margin-right: auto;
		}

		.wp-block-table.aligncenter {
			margin-left: auto;
			margin-right: auto;
		}

		@media (min-width:544px) {
			.entry-content .wp-block-media-text.has-media-on-the-right .wp-block-media-text__content {
				padding: 0 8% 0 0;
			}

			.entry-content .wp-block-media-text .wp-block-media-text__content {
				padding: 0 0 0 8%;
			}

			.ast-plain-container .site-content .entry-content .has-custom-content-position.is-position-bottom-left>*,
			.ast-plain-container .site-content .entry-content .has-custom-content-position.is-position-bottom-right>*,
			.ast-plain-container .site-content .entry-content .has-custom-content-position.is-position-top-left>*,
			.ast-plain-container .site-content .entry-content .has-custom-content-position.is-position-top-right>*,
			.ast-plain-container .site-content .entry-content .has-custom-content-position.is-position-center-right>*,
			.ast-plain-container .site-content .entry-content .has-custom-content-position.is-position-center-left>* {
				margin: 0;
			}
		}

		@media (max-width:544px) {
			.entry-content .wp-block-media-text .wp-block-media-text__content {
				padding: 8% 0;
			}

			.wp-block-media-text .wp-block-media-text__media img {
				width: auto;
				max-width: 100%;
			}
		}

		.wp-block-button.is-style-outline .wp-block-button__link {
			border-color: var(--ast-global-color-2);
			border-top-width: 1px;
			border-right-width: 1px;
			border-bottom-width: 1px;
			border-left-width: 1px;
		}

		.wp-block-button.is-style-outline>.wp-block-button__link:not(.has-text-color),
		.wp-block-button.wp-block-button__link.is-style-outline:not(.has-text-color) {
			color: var(--ast-global-color-2);
		}

		.wp-block-button.is-style-outline .wp-block-button__link:hover,
		.wp-block-button.is-style-outline .wp-block-button__link:focus {
			color: var(--ast-global-color-2) !important;
			background-color: rgba(0, 0, 0, 0);
			border-color: var(--ast-global-color-2);
		}

		.post-page-numbers.current .page-link,
		.ast-pagination .page-numbers.current {
			color: #000000;
			border-color: var(--ast-global-color-0);
			background-color: var(--ast-global-color-0);
			border-radius: 2px;
		}

		@media (min-width:544px) {
			.entry-content>.alignleft {
				margin-right: 20px;
			}

			.entry-content>.alignright {
				margin-left: 20px;
			}
		}

		.wp-block-button.is-style-outline .wp-block-button__link {
			border-top-width: 1px;
			border-right-width: 1px;
			border-bottom-width: 1px;
			border-left-width: 1px;
		}

		h1.widget-title {
			font-weight: 500;
		}

		h2.widget-title {
			font-weight: 600;
		}

		h3.widget-title {
			font-weight: 600;
		}

		@media (max-width:921px) {

			.ast-separate-container #primary,
			.ast-separate-container #secondary {
				padding: 1.5em 0;
			}

			#primary,
			#secondary {
				padding: 1.5em 0;
				margin: 0;
			}

			.ast-left-sidebar #content>.ast-container {
				display: flex;
				flex-direction: column-reverse;
				width: 100%;
			}

			.ast-separate-container .ast-article-post,
			.ast-separate-container .ast-article-single {
				padding: 1.5em 2.14em;
			}

			.ast-author-box img.avatar {
				margin: 20px 0 0 0;
			}
		}

		@media (min-width:922px) {

			.ast-separate-container.ast-right-sidebar #primary,
			.ast-separate-container.ast-left-sidebar #primary {
				border: 0;
			}

			.search-no-results.ast-separate-container #primary {
				margin-bottom: 4em;
			}
		}

		.elementor-button-wrapper .elementor-button {
			border-style: solid;
			text-decoration: none;
			border-top-width: 1px;
			border-right-width: 1px;
			border-left-width: 1px;
			border-bottom-width: 1px;
		}

		body .elementor-button.elementor-size-sm,
		body .elementor-button.elementor-size-xs,
		body .elementor-button.elementor-size-md,
		body .elementor-button.elementor-size-lg,
		body .elementor-button.elementor-size-xl,
		body .elementor-button {
			border-radius: 0px;
			padding-top: 16px;
			padding-right: 31px;
			padding-bottom: 16px;
			padding-left: 31px;
		}

		@media (max-width:921px) {

			.elementor-button-wrapper .elementor-button.elementor-size-sm,
			.elementor-button-wrapper .elementor-button.elementor-size-xs,
			.elementor-button-wrapper .elementor-button.elementor-size-md,
			.elementor-button-wrapper .elementor-button.elementor-size-lg,
			.elementor-button-wrapper .elementor-button.elementor-size-xl,
			.elementor-button-wrapper .elementor-button {
				padding-top: 14px;
				padding-right: 29px;
				padding-bottom: 14px;
				padding-left: 29px;
			}
		}

		@media (max-width:544px) {

			.elementor-button-wrapper .elementor-button.elementor-size-sm,
			.elementor-button-wrapper .elementor-button.elementor-size-xs,
			.elementor-button-wrapper .elementor-button.elementor-size-md,
			.elementor-button-wrapper .elementor-button.elementor-size-lg,
			.elementor-button-wrapper .elementor-button.elementor-size-xl,
			.elementor-button-wrapper .elementor-button {
				padding-top: 12px;
				padding-right: 25px;
				padding-bottom: 12px;
				padding-left: 25px;
			}
		}

		.elementor-button-wrapper .elementor-button {
			border-color: var(--ast-global-color-2);
			background-color: var(--ast-global-color-2);
		}

		.elementor-button-wrapper .elementor-button:hover,
		.elementor-button-wrapper .elementor-button:focus {
			color: var(--ast-global-color-2);
			background-color: rgba(0, 0, 0, 0);
			border-color: var(--ast-global-color-2);
		}

		.wp-block-button .wp-block-button__link,
		.elementor-button-wrapper .elementor-button,
		.elementor-button-wrapper .elementor-button:visited {
			color: var(--ast-global-color-5);
		}

		.elementor-button-wrapper .elementor-button {
			font-weight: 600;
			font-size: 12px;
			font-size: 0.75rem;
			line-height: 1em;
			text-transform: uppercase;
			letter-spacing: 2px;
		}

		body .elementor-button.elementor-size-sm,
		body .elementor-button.elementor-size-xs,
		body .elementor-button.elementor-size-md,
		body .elementor-button.elementor-size-lg,
		body .elementor-button.elementor-size-xl,
		body .elementor-button {
			font-size: 12px;
			font-size: 0.75rem;
		}

		.wp-block-button .wp-block-button__link:hover,
		.wp-block-button .wp-block-button__link:focus {
			color: var(--ast-global-color-2);
			background-color: rgba(0, 0, 0, 0);
			border-color: var(--ast-global-color-2);
		}

		.elementor-widget-heading h1.elementor-heading-title {
			line-height: 1.2em;
		}

		.elementor-widget-heading h2.elementor-heading-title {
			line-height: 1.2em;
		}

		.elementor-widget-heading h3.elementor-heading-title {
			line-height: 1.2em;
		}

		.wp-block-button .wp-block-button__link {
			border-style: solid;
			border-top-width: 1px;
			border-right-width: 1px;
			border-left-width: 1px;
			border-bottom-width: 1px;
			border-color: var(--ast-global-color-2);
			background-color: var(--ast-global-color-2);
			color: var(--ast-global-color-5);
			font-family: inherit;
			font-weight: 600;
			line-height: 1em;
			text-transform: uppercase;
			letter-spacing: 2px;
			font-size: 12px;
			font-size: 0.75rem;
			border-radius: 0px;
			padding-top: 16px;
			padding-right: 31px;
			padding-bottom: 16px;
			padding-left: 31px;
		}

		@media (max-width:921px) {
			.wp-block-button .wp-block-button__link {
				font-size: 12px;
				font-size: 0.75rem;
				padding-top: 14px;
				padding-right: 29px;
				padding-bottom: 14px;
				padding-left: 29px;
			}
		}

		@media (max-width:544px) {
			.wp-block-button .wp-block-button__link {
				font-size: 11px;
				font-size: 0.6875rem;
				padding-top: 12px;
				padding-right: 25px;
				padding-bottom: 12px;
				padding-left: 25px;
			}
		}

		.menu-toggle,
		button,
		.ast-button,
		.ast-custom-button,
		.button,
		input#submit,
		input[type="button"],
		input[type="submit"],
		input[type="reset"],
		form[CLASS*="wp-block-search__"].wp-block-search .wp-block-search__inside-wrapper .wp-block-search__button {
			border-style: solid;
			border-top-width: 1px;
			border-right-width: 1px;
			border-left-width: 1px;
			border-bottom-width: 1px;
			color: var(--ast-global-color-5);
			border-color: var(--ast-global-color-2);
			background-color: var(--ast-global-color-2);
			border-radius: 0px;
			padding-top: 16px;
			padding-right: 31px;
			padding-bottom: 16px;
			padding-left: 31px;
			font-family: inherit;
			font-weight: 600;
			font-size: 12px;
			font-size: 0.75rem;
			line-height: 1em;
			text-transform: uppercase;
			letter-spacing: 2px;
		}

		button:focus,
		.menu-toggle:hover,
		button:hover,
		.ast-button:hover,
		.ast-custom-button:hover .button:hover,
		.ast-custom-button:hover,
		input[type=reset]:hover,
		input[type=reset]:focus,
		input#submit:hover,
		input#submit:focus,
		input[type="button"]:hover,
		input[type="button"]:focus,
		input[type="submit"]:hover,
		input[type="submit"]:focus,
		form[CLASS*="wp-block-search__"].wp-block-search .wp-block-search__inside-wrapper .wp-block-search__button:hover,
		form[CLASS*="wp-block-search__"].wp-block-search .wp-block-search__inside-wrapper .wp-block-search__button:focus {
			color: var(--ast-global-color-2);
			background-color: rgba(0, 0, 0, 0);
			border-color: var(--ast-global-color-2);
		}

		@media (min-width:544px) {
			.ast-container {
				max-width: 100%;
			}
		}

		@media (max-width:544px) {

			.ast-separate-container .ast-article-post,
			.ast-separate-container .ast-article-single,
			.ast-separate-container .comments-title,
			.ast-separate-container .ast-archive-description {
				padding: 1.5em 1em;
			}

			.ast-separate-container #content .ast-container {
				padding-left: 0.54em;
				padding-right: 0.54em;
			}

			.ast-separate-container .ast-comment-list li.depth-1 {
				padding: 1.5em 1em;
				margin-bottom: 1.5em;
			}

			.ast-separate-container .ast-comment-list .bypostauthor {
				padding: .5em;
			}

			.ast-search-menu-icon.ast-dropdown-active .search-field {
				width: 170px;
			}

			.menu-toggle,
			button,
			.ast-button,
			.button,
			input#submit,
			input[type="button"],
			input[type="submit"],
			input[type="reset"] {
				padding-top: 12px;
				padding-right: 25px;
				padding-bottom: 12px;
				padding-left: 25px;
				font-size: 11px;
				font-size: 0.6875rem;
			}
		}

		@media (max-width:921px) {

			.menu-toggle,
			button,
			.ast-button,
			.button,
			input#submit,
			input[type="button"],
			input[type="submit"],
			input[type="reset"] {
				padding-top: 14px;
				padding-right: 29px;
				padding-bottom: 14px;
				padding-left: 29px;
				font-size: 12px;
				font-size: 0.75rem;
			}

			.ast-mobile-header-stack .main-header-bar .ast-search-menu-icon {
				display: inline-block;
			}

			.ast-header-break-point.ast-header-custom-item-outside .ast-mobile-header-stack .main-header-bar .ast-search-icon {
				margin: 0;
			}

			.ast-comment-avatar-wrap img {
				max-width: 2.5em;
			}

			.ast-separate-container .ast-comment-list li.depth-1 {
				padding: 1.5em 2.14em;
			}

			.ast-separate-container .comment-respond {
				padding: 2em 2.14em;
			}

			.ast-comment-meta {
				padding: 0 1.8888em 1.3333em;
			}
		}

		body,
		.ast-separate-container {
			background-color: var(--ast-global-color-4);
			;
			background-image: none;
			;
		}

		.ast-no-sidebar.ast-separate-container .entry-content .alignfull {
			margin-left: -6.67em;
			margin-right: -6.67em;
			width: auto;
		}

		@media (max-width: 1200px) {
			.ast-no-sidebar.ast-separate-container .entry-content .alignfull {
				margin-left: -2.4em;
				margin-right: -2.4em;
			}
		}

		@media (max-width: 768px) {
			.ast-no-sidebar.ast-separate-container .entry-content .alignfull {
				margin-left: -2.14em;
				margin-right: -2.14em;
			}
		}

		@media (max-width: 544px) {
			.ast-no-sidebar.ast-separate-container .entry-content .alignfull {
				margin-left: -1em;
				margin-right: -1em;
			}
		}

		.ast-no-sidebar.ast-separate-container .entry-content .alignwide {
			margin-left: -20px;
			margin-right: -20px;
		}

		.ast-no-sidebar.ast-separate-container .entry-content .wp-block-column .alignfull,
		.ast-no-sidebar.ast-separate-container .entry-content .wp-block-column .alignwide {
			margin-left: auto;
			margin-right: auto;
			width: 100%;
		}

		@media (max-width:921px) {
			.widget-title {
				font-size: 21px;
				font-size: 1.4rem;
			}

			body,
			button,
			input,
			select,
			textarea,
			.ast-button,
			.ast-custom-button {
				font-size: 15px;
				font-size: 0.9375rem;
			}

			#secondary,
			#secondary button,
			#secondary input,
			#secondary select,
			#secondary textarea {
				font-size: 15px;
				font-size: 0.9375rem;
			}

			.site-title {
				display: none;
			}

			.site-header .site-description {
				display: none;
			}

			.entry-title {
				font-size: 30px;
			}

			h1,
			.entry-content h1 {
				font-size: 56px;
			}

			h2,
			.entry-content h2 {
				font-size: 36px;
			}

			h3,
			.entry-content h3 {
				font-size: 28px;
			}

			h4,
			.entry-content h4 {
				font-size: 22px;
				font-size: 1.375rem;
			}

			h5,
			.entry-content h5 {
				font-size: 18px;
				font-size: 1.125rem;
			}

			h6,
			.entry-content h6 {
				font-size: 13px;
				font-size: 0.8125rem;
			}

			.astra-logo-svg {
				width: 48px;
			}

			header .custom-logo-link img,
			.ast-header-break-point .site-logo-img .custom-mobile-logo-link img {
				max-width: 48px;
			}
		}

		@media (max-width:544px) {
			.widget-title {
				font-size: 20px;
				font-size: 1.4285714285714rem;
			}

			body,
			button,
			input,
			select,
			textarea,
			.ast-button,
			.ast-custom-button {
				font-size: 14px;
				font-size: 0.875rem;
			}

			#secondary,
			#secondary button,
			#secondary input,
			#secondary select,
			#secondary textarea {
				font-size: 14px;
				font-size: 0.875rem;
			}

			.site-title {
				display: none;
			}

			.site-header .site-description {
				display: none;
			}

			.entry-title {
				font-size: 30px;
			}

			h1,
			.entry-content h1 {
				font-size: 40px;
			}

			h2,
			.entry-content h2 {
				font-size: 28px;
			}

			h3,
			.entry-content h3 {
				font-size: 24px;
			}

			h4,
			.entry-content h4 {
				font-size: 20px;
				font-size: 1.25rem;
			}

			h5,
			.entry-content h5 {
				font-size: 16px;
				font-size: 1rem;
			}

			h6,
			.entry-content h6 {
				font-size: 12px;
				font-size: 0.75rem;
			}

			header .custom-logo-link img,
			.ast-header-break-point .site-branding img,
			.ast-header-break-point .custom-logo-link img {
				max-width: 40px;
			}

			.astra-logo-svg {
				width: 40px;
			}

			.astra-logo-svg:not(.sticky-custom-logo .astra-logo-svg, .transparent-custom-logo .astra-logo-svg, .advanced-header-logo .astra-logo-svg) {
				height: 27px;
			}

			.ast-header-break-point .site-logo-img .custom-mobile-logo-link img {
				max-width: 40px;
			}
		}

		@media (max-width:544px) {
			html {
				font-size: 100%;
			}
		}

		@media (min-width:922px) {
			.ast-container {
				max-width: 1240px;
			}
		}

		@media (min-width:922px) {
			.site-content .ast-container {
				display: flex;
			}
		}

		@media (max-width:921px) {
			.site-content .ast-container {
				flex-direction: column;
			}
		}

		@media (min-width:922px) {

			.main-header-menu .sub-menu .menu-item.ast-left-align-sub-menu:hover>.sub-menu,
			.main-header-menu .sub-menu .menu-item.ast-left-align-sub-menu.focus>.sub-menu {
				margin-left: -0px;
			}
		}

		.ast-theme-transparent-header .ast-header-social-wrap .ast-social-color-type-custom .ast-builder-social-element svg {
			fill: rgba(255, 255, 255, 0.8);
		}

		.ast-theme-transparent-header .ast-header-social-wrap .ast-social-color-type-custom .ast-builder-social-element:hover svg {
			fill: #ffffff;
		}

		.ast-theme-transparent-header .ast-header-social-wrap .ast-social-color-type-custom .ast-builder-social-element .social-item-label {
			color: rgba(255, 255, 255, 0.8);
		}

		.ast-theme-transparent-header .ast-header-social-wrap .ast-social-color-type-custom .ast-builder-social-element:hover .social-item-label {
			color: #ffffff;
		}

		.ast-theme-transparent-header [CLASS*="ast-header-button-"] .ast-custom-button {
			color: #ffffff;
		}

		.ast-theme-transparent-header [CLASS*="ast-header-button-"] .ast-custom-button:hover {
			background: #ffffff;
		}

		.ast-theme-transparent-header [data-section="section-header-mobile-trigger"] .ast-button-wrap .mobile-menu-toggle-icon .ast-mobile-svg {
			fill: #ffffff;
		}

		.ast-theme-transparent-header [data-section="section-header-mobile-trigger"] .ast-button-wrap .mobile-menu-wrap .mobile-menu {
			color: #ffffff;
		}

		.ast-theme-transparent-header [data-section="section-header-mobile-trigger"] .ast-button-wrap .ast-mobile-menu-trigger-minimal {
			background: transparent;
		}

		.footer-widget-area[data-section^="section-fb-html-"] .ast-builder-html-element {
			text-align: center;
		}

		.wp-block-search {
			margin-bottom: 20px;
		}

		.wp-block-site-tagline {
			margin-top: 20px;
		}

		form.wp-block-search .wp-block-search__input,
		.wp-block-search.wp-block-search__button-inside .wp-block-search__inside-wrapper {
			border-color: #eaeaea;
			background: #fafafa;
		}

		.wp-block-search.wp-block-search__button-inside .wp-block-search__inside-wrapper .wp-block-search__input:focus,
		.wp-block-loginout input:focus {
			outline: thin dotted;
		}

		.wp-block-loginout input:focus {
			border-color: transparent;
		}

		form.wp-block-search .wp-block-search__inside-wrapper .wp-block-search__input {
			padding: 12px;
		}

		form.wp-block-search .wp-block-search__button svg {
			fill: currentColor;
			width: 20px;
			height: 20px;
		}

		.wp-block-loginout p label {
			display: block;
		}

		.wp-block-loginout p:not(.login-remember):not(.login-submit) input {
			width: 100%;
		}

		.wp-block-loginout .login-remember input {
			width: 1.1rem;
			height: 1.1rem;
			margin: 0 5px 4px 0;
			vertical-align: middle;
		}

		blockquote {
			padding: 1.2em;
		}

		:root .has-ast-global-color-0-color {
			color: var(--ast-global-color-0);
		}

		:root .has-ast-global-color-0-background-color {
			background-color: var(--ast-global-color-0);
		}

		:root .wp-block-button .has-ast-global-color-0-color {
			color: var(--ast-global-color-0);
		}

		:root .wp-block-button .has-ast-global-color-0-background-color {
			background-color: var(--ast-global-color-0);
		}

		:root .has-ast-global-color-1-color {
			color: var(--ast-global-color-1);
		}

		:root .has-ast-global-color-1-background-color {
			background-color: var(--ast-global-color-1);
		}

		:root .wp-block-button .has-ast-global-color-1-color {
			color: var(--ast-global-color-1);
		}

		:root .wp-block-button .has-ast-global-color-1-background-color {
			background-color: var(--ast-global-color-1);
		}

		:root .has-ast-global-color-2-color {
			color: var(--ast-global-color-2);
		}

		:root .has-ast-global-color-2-background-color {
			background-color: var(--ast-global-color-2);
		}

		:root .wp-block-button .has-ast-global-color-2-color {
			color: var(--ast-global-color-2);
		}

		:root .wp-block-button .has-ast-global-color-2-background-color {
			background-color: var(--ast-global-color-2);
		}

		:root .has-ast-global-color-3-color {
			color: var(--ast-global-color-3);
		}

		:root .has-ast-global-color-3-background-color {
			background-color: var(--ast-global-color-3);
		}

		:root .wp-block-button .has-ast-global-color-3-color {
			color: var(--ast-global-color-3);
		}

		:root .wp-block-button .has-ast-global-color-3-background-color {
			background-color: var(--ast-global-color-3);
		}

		:root .has-ast-global-color-4-color {
			color: var(--ast-global-color-4);
		}

		:root .has-ast-global-color-4-background-color {
			background-color: var(--ast-global-color-4);
		}

		:root .wp-block-button .has-ast-global-color-4-color {
			color: var(--ast-global-color-4);
		}

		:root .wp-block-button .has-ast-global-color-4-background-color {
			background-color: var(--ast-global-color-4);
		}

		:root .has-ast-global-color-5-color {
			color: var(--ast-global-color-5);
		}

		:root .has-ast-global-color-5-background-color {
			background-color: var(--ast-global-color-5);
		}

		:root .wp-block-button .has-ast-global-color-5-color {
			color: var(--ast-global-color-5);
		}

		:root .wp-block-button .has-ast-global-color-5-background-color {
			background-color: var(--ast-global-color-5);
		}

		:root .has-ast-global-color-6-color {
			color: var(--ast-global-color-6);
		}

		:root .has-ast-global-color-6-background-color {
			background-color: var(--ast-global-color-6);
		}

		:root .wp-block-button .has-ast-global-color-6-color {
			color: var(--ast-global-color-6);
		}

		:root .wp-block-button .has-ast-global-color-6-background-color {
			background-color: var(--ast-global-color-6);
		}

		:root .has-ast-global-color-7-color {
			color: var(--ast-global-color-7);
		}

		:root .has-ast-global-color-7-background-color {
			background-color: var(--ast-global-color-7);
		}

		:root .wp-block-button .has-ast-global-color-7-color {
			color: var(--ast-global-color-7);
		}

		:root .wp-block-button .has-ast-global-color-7-background-color {
			background-color: var(--ast-global-color-7);
		}

		:root .has-ast-global-color-8-color {
			color: var(--ast-global-color-8);
		}

		:root .has-ast-global-color-8-background-color {
			background-color: var(--ast-global-color-8);
		}

		:root .wp-block-button .has-ast-global-color-8-color {
			color: var(--ast-global-color-8);
		}

		:root .wp-block-button .has-ast-global-color-8-background-color {
			background-color: var(--ast-global-color-8);
		}

		:root {
			--ast-global-color-0: #FF6A97;
			--ast-global-color-1: #FA036B;
			--ast-global-color-2: #2B161B;
			--ast-global-color-3: #645659;
			--ast-global-color-4: #F8F3F5;
			--ast-global-color-5: #FFFFFF;
			--ast-global-color-6: #000000;
			--ast-global-color-7: #4B4F58;
			--ast-global-color-8: #F6F7F8;
		}

		:root {
			--ast-border-color: #dddddd;
		}

		.ast-single-entry-banner {
			-js-display: flex;
			display: flex;
			flex-direction: column;
			justify-content: center;
			text-align: center;
			position: relative;
			background: #eeeeee;
		}

		.ast-single-entry-banner[data-banner-layout="layout-1"] {
			max-width: 1200px;
			background: inherit;
			padding: 20px 0;
		}

		.ast-single-entry-banner[data-banner-width-type="custom"] {
			margin: 0 auto;
			width: 100%;
		}

		.ast-single-entry-banner+.site-content .entry-header {
			margin-bottom: 0;
		}

		header.entry-header .entry-title {
			font-size: 30px;
			font-size: 1.875rem;
		}

		header.entry-header>*:not(:last-child) {
			margin-bottom: 10px;
		}

		.ast-archive-entry-banner {
			-js-display: flex;
			display: flex;
			flex-direction: column;
			justify-content: center;
			text-align: center;
			position: relative;
			background: #eeeeee;
		}

		.ast-archive-entry-banner[data-banner-width-type="custom"] {
			margin: 0 auto;
			width: 100%;
		}

		.ast-archive-entry-banner[data-banner-layout="layout-1"] {
			background: inherit;
			padding: 20px 0;
			text-align: left;
		}

		body.archive .ast-archive-description {
			max-width: 1200px;
			width: 100%;
			text-align: left;
			padding-top: 3em;
			padding-right: 3em;
			padding-bottom: 3em;
			padding-left: 3em;
		}

		body.archive .ast-archive-description .ast-archive-title,
		body.archive .ast-archive-description .ast-archive-title * {
			font-size: 40px;
			font-size: 2.5rem;
		}

		body.archive .ast-archive-description>*:not(:last-child) {
			margin-bottom: 10px;
		}

		@media (max-width:921px) {
			body.archive .ast-archive-description {
				text-align: left;
			}
		}

		@media (max-width:544px) {
			body.archive .ast-archive-description {
				text-align: left;
			}
		}

		.ast-theme-transparent-header #masthead .site-logo-img .transparent-custom-logo .astra-logo-svg {
			width: 60px;
		}

		.ast-theme-transparent-header #masthead .site-logo-img .transparent-custom-logo img {
			max-width: 60px;
		}

		@media (max-width:921px) {
			.ast-theme-transparent-header #masthead .site-logo-img .transparent-custom-logo .astra-logo-svg {
				width: 48px;
			}

			.ast-theme-transparent-header #masthead .site-logo-img .transparent-custom-logo img {
				max-width: 48px;
			}
		}

		@media (max-width:543px) {
			.ast-theme-transparent-header #masthead .site-logo-img .transparent-custom-logo .astra-logo-svg {
				width: 40px;
			}

			.ast-theme-transparent-header #masthead .site-logo-img .transparent-custom-logo img {
				max-width: 40px;
			}
		}

		@media (min-width:921px) {
			.ast-theme-transparent-header #masthead {
				position: absolute;
				left: 0;
				right: 0;
			}

			.ast-theme-transparent-header .main-header-bar,
			.ast-theme-transparent-header.ast-header-break-point .main-header-bar {
				background: none;
			}

			body.elementor-editor-active.ast-theme-transparent-header #masthead,
			.fl-builder-edit .ast-theme-transparent-header #masthead,
			body.vc_editor.ast-theme-transparent-header #masthead,
			body.brz-ed.ast-theme-transparent-header #masthead {
				z-index: 0;
			}

			.ast-header-break-point.ast-replace-site-logo-transparent.ast-theme-transparent-header .custom-mobile-logo-link {
				display: none;
			}

			.ast-header-break-point.ast-replace-site-logo-transparent.ast-theme-transparent-header .transparent-custom-logo {
				display: inline-block;
			}

			.ast-theme-transparent-header .ast-above-header,
			.ast-theme-transparent-header .ast-above-header.ast-above-header-bar {
				background-image: none;
				background-color: transparent;
			}

			.ast-theme-transparent-header .ast-below-header {
				background-image: none;
				background-color: transparent;
			}
		}

		.ast-theme-transparent-header .ast-builder-menu .main-header-menu,
		.ast-theme-transparent-header .ast-builder-menu .main-header-menu .menu-link,
		.ast-theme-transparent-header [CLASS*="ast-builder-menu-"] .main-header-menu .menu-item>.menu-link,
		.ast-theme-transparent-header .ast-masthead-custom-menu-items,
		.ast-theme-transparent-header .ast-masthead-custom-menu-items a,
		.ast-theme-transparent-header .ast-builder-menu .main-header-menu .menu-item>.ast-menu-toggle,
		.ast-theme-transparent-header .ast-builder-menu .main-header-menu .menu-item>.ast-menu-toggle,
		.ast-theme-transparent-header .ast-above-header-navigation a,
		.ast-header-break-point.ast-theme-transparent-header .ast-above-header-navigation a,
		.ast-header-break-point.ast-theme-transparent-header .ast-above-header-navigation>ul.ast-above-header-menu>.menu-item-has-children:not(.current-menu-item)>.ast-menu-toggle,
		.ast-theme-transparent-header .ast-below-header-menu,
		.ast-theme-transparent-header .ast-below-header-menu a,
		.ast-header-break-point.ast-theme-transparent-header .ast-below-header-menu a,
		.ast-header-break-point.ast-theme-transparent-header .ast-below-header-menu,
		.ast-theme-transparent-header .main-header-menu .menu-link {
			color: rgba(255, 255, 255, 0.72);
		}

		.ast-theme-transparent-header .ast-builder-menu .main-header-menu .menu-item:hover>.menu-link,
		.ast-theme-transparent-header .ast-builder-menu .main-header-menu .menu-item:hover>.ast-menu-toggle,
		.ast-theme-transparent-header .ast-builder-menu .main-header-menu .ast-masthead-custom-menu-items a:hover,
		.ast-theme-transparent-header .ast-builder-menu .main-header-menu .focus>.menu-link,
		.ast-theme-transparent-header .ast-builder-menu .main-header-menu .focus>.ast-menu-toggle,
		.ast-theme-transparent-header .ast-builder-menu .main-header-menu .current-menu-item>.menu-link,
		.ast-theme-transparent-header .ast-builder-menu .main-header-menu .current-menu-ancestor>.menu-link,
		.ast-theme-transparent-header .ast-builder-menu .main-header-menu .current-menu-item>.ast-menu-toggle,
		.ast-theme-transparent-header .ast-builder-menu .main-header-menu .current-menu-ancestor>.ast-menu-toggle,
		.ast-theme-transparent-header [CLASS*="ast-builder-menu-"] .main-header-menu .current-menu-item>.menu-link,
		.ast-theme-transparent-header [CLASS*="ast-builder-menu-"] .main-header-menu .current-menu-ancestor>.menu-link,
		.ast-theme-transparent-header [CLASS*="ast-builder-menu-"] .main-header-menu .current-menu-item>.ast-menu-toggle,
		.ast-theme-transparent-header [CLASS*="ast-builder-menu-"] .main-header-menu .current-menu-ancestor>.ast-menu-toggle,
		.ast-theme-transparent-header .main-header-menu .menu-item:hover>.menu-link,
		.ast-theme-transparent-header .main-header-menu .current-menu-item>.menu-link,
		.ast-theme-transparent-header .main-header-menu .current-menu-ancestor>.menu-link {
			color: #ffffff;
		}

		@media (max-width:921px) {
			.ast-theme-transparent-header #masthead {
				position: absolute;
				left: 0;
				right: 0;
			}

			.ast-theme-transparent-header .main-header-bar,
			.ast-theme-transparent-header.ast-header-break-point .main-header-bar {
				background: none;
			}

			body.elementor-editor-active.ast-theme-transparent-header #masthead,
			.fl-builder-edit .ast-theme-transparent-header #masthead,
			body.vc_editor.ast-theme-transparent-header #masthead,
			body.brz-ed.ast-theme-transparent-header #masthead {
				z-index: 0;
			}

			.ast-header-break-point.ast-replace-site-logo-transparent.ast-theme-transparent-header .custom-mobile-logo-link {
				display: none;
			}

			.ast-header-break-point.ast-replace-site-logo-transparent.ast-theme-transparent-header .transparent-custom-logo {
				display: inline-block;
			}

			.ast-theme-transparent-header .ast-above-header,
			.ast-theme-transparent-header .ast-above-header.ast-above-header-bar {
				background-image: none;
				background-color: transparent;
			}

			.ast-theme-transparent-header .ast-below-header {
				background-image: none;
				background-color: transparent;
			}
		}

		@media (max-width:921px) {

			.ast-theme-transparent-header.ast-header-break-point .ast-builder-menu .main-header-menu,
			.ast-theme-transparent-header.ast-header-break-point .ast-builder-menu.main-header-menu .sub-menu,
			.ast-theme-transparent-header.ast-header-break-point .ast-builder-menu.main-header-menu,
			.ast-theme-transparent-header.ast-header-break-point .ast-builder-menu .main-header-bar-wrap .main-header-menu,
			.ast-flyout-menu-enable.ast-header-break-point.ast-theme-transparent-header .main-header-bar-navigation .site-navigation,
			.ast-fullscreen-menu-enable.ast-header-break-point.ast-theme-transparent-header .main-header-bar-navigation .site-navigation,
			.ast-flyout-above-menu-enable.ast-header-break-point.ast-theme-transparent-header .ast-above-header-navigation-wrap .ast-above-header-navigation,
			.ast-flyout-below-menu-enable.ast-header-break-point.ast-theme-transparent-header .ast-below-header-navigation-wrap .ast-below-header-actual-nav,
			.ast-fullscreen-above-menu-enable.ast-header-break-point.ast-theme-transparent-header .ast-above-header-navigation-wrap,
			.ast-fullscreen-below-menu-enable.ast-header-break-point.ast-theme-transparent-header .ast-below-header-navigation-wrap,
			.ast-theme-transparent-header .main-header-menu .menu-link {
				background-color: var(--ast-global-color-5);
			}

			.ast-theme-transparent-header .ast-builder-menu .main-header-menu,
			.ast-theme-transparent-header .ast-builder-menu .main-header-menu .menu-link,
			.ast-theme-transparent-header [CLASS*="ast-builder-menu-"] .main-header-menu .menu-item>.menu-link,
			.ast-theme-transparent-header .ast-masthead-custom-menu-items,
			.ast-theme-transparent-header .ast-masthead-custom-menu-items a,
			.ast-theme-transparent-header .ast-builder-menu .main-header-menu .menu-item>.ast-menu-toggle,
			.ast-theme-transparent-header .ast-builder-menu .main-header-menu .menu-item>.ast-menu-toggle,
			.ast-theme-transparent-header .main-header-menu .menu-link {
				color: var(--ast-global-color-2);
			}

			.ast-theme-transparent-header .ast-builder-menu .main-header-menu .menu-item:hover>.menu-link,
			.ast-theme-transparent-header .ast-builder-menu .main-header-menu .menu-item:hover>.ast-menu-toggle,
			.ast-theme-transparent-header .ast-builder-menu .main-header-menu .ast-masthead-custom-menu-items a:hover,
			.ast-theme-transparent-header .ast-builder-menu .main-header-menu .focus>.menu-link,
			.ast-theme-transparent-header .ast-builder-menu .main-header-menu .focus>.ast-menu-toggle,
			.ast-theme-transparent-header .ast-builder-menu .main-header-menu .current-menu-item>.menu-link,
			.ast-theme-transparent-header .ast-builder-menu .main-header-menu .current-menu-ancestor>.menu-link,
			.ast-theme-transparent-header .ast-builder-menu .main-header-menu .current-menu-item>.ast-menu-toggle,
			.ast-theme-transparent-header .ast-builder-menu .main-header-menu .current-menu-ancestor>.ast-menu-toggle,
			.ast-theme-transparent-header [CLASS*="ast-builder-menu-"] .main-header-menu .current-menu-item>.menu-link,
			.ast-theme-transparent-header [CLASS*="ast-builder-menu-"] .main-header-menu .current-menu-ancestor>.menu-link,
			.ast-theme-transparent-header [CLASS*="ast-builder-menu-"] .main-header-menu .current-menu-item>.ast-menu-toggle,
			.ast-theme-transparent-header [CLASS*="ast-builder-menu-"] .main-header-menu .current-menu-ancestor>.ast-menu-toggle,
			.ast-theme-transparent-header .main-header-menu .menu-item:hover>.menu-link,
			.ast-theme-transparent-header .main-header-menu .current-menu-item>.menu-link,
			.ast-theme-transparent-header .main-header-menu .current-menu-ancestor>.menu-link {
				color: var(--ast-global-color-1);
			}
		}

		.ast-theme-transparent-header #ast-desktop-header>[CLASS*="-header-wrap"]:nth-last-child(2)>[CLASS*="-header-bar"],
		.ast-theme-transparent-header.ast-header-break-point #ast-mobile-header>[CLASS*="-header-wrap"]:nth-last-child(2)>[CLASS*="-header-bar"] {
			border-bottom-width: 0px;
			border-bottom-style: solid;
		}

		.ast-breadcrumbs .trail-browse,
		.ast-breadcrumbs .trail-items,
		.ast-breadcrumbs .trail-items li {
			display: inline-block;
			margin: 0;
			padding: 0;
			border: none;
			background: inherit;
			text-indent: 0;
		}

		.ast-breadcrumbs .trail-browse {
			font-size: inherit;
			font-style: inherit;
			font-weight: inherit;
			color: inherit;
		}

		.ast-breadcrumbs .trail-items {
			list-style: none;
		}

		.trail-items li::after {
			padding: 0 0.3em;
			content: "\00bb";
		}

		.trail-items li:last-of-type::after {
			display: none;
		}

		h1,
		.entry-content h1,
		h2,
		.entry-content h2,
		h3,
		.entry-content h3,
		h4,
		.entry-content h4,
		h5,
		.entry-content h5,
		h6,
		.entry-content h6 {
			color: var(--ast-global-color-2);
		}

		@media (max-width:921px) {

			.ast-builder-grid-row-container.ast-builder-grid-row-tablet-3-firstrow .ast-builder-grid-row>*:first-child,
			.ast-builder-grid-row-container.ast-builder-grid-row-tablet-3-lastrow .ast-builder-grid-row>*:last-child {
				grid-column: 1 / -1;
			}
		}

		@media (max-width:544px) {

			.ast-builder-grid-row-container.ast-builder-grid-row-mobile-3-firstrow .ast-builder-grid-row>*:first-child,
			.ast-builder-grid-row-container.ast-builder-grid-row-mobile-3-lastrow .ast-builder-grid-row>*:last-child {
				grid-column: 1 / -1;
			}
		}

		.ast-builder-layout-element[data-section="title_tagline"] {
			display: flex;
		}

		@media (max-width:921px) {
			.ast-header-break-point .ast-builder-layout-element[data-section="title_tagline"] {
				display: flex;
			}
		}

		@media (max-width:544px) {
			.ast-header-break-point .ast-builder-layout-element[data-section="title_tagline"] {
				display: flex;
			}
		}

		[data-section*="section-hb-button-"] .menu-link {
			display: none;
		}

		.ast-header-button-1 .ast-custom-button {
			color: var(--ast-global-color-5);
			background: rgba(0, 0, 0, 0);
			border-color: #ffffff;
			border-top-width: 1px;
			border-bottom-width: 1px;
			border-left-width: 1px;
			border-right-width: 1px;
		}

		.ast-header-button-1 .ast-custom-button:hover {
			color: var(--ast-global-color-2);
			background: var(--ast-global-color-5);
			border-color: var(--ast-global-color-5);
		}

		.ast-header-button-1[data-section="section-hb-button-1"] {
			display: flex;
		}

		@media (max-width:921px) {
			.ast-header-break-point .ast-header-button-1[data-section="section-hb-button-1"] {
				display: flex;
			}
		}

		@media (max-width:544px) {
			.ast-header-break-point .ast-header-button-1[data-section="section-hb-button-1"] {
				display: flex;
			}
		}

		.ast-builder-menu-1 {
			font-family: inherit;
			font-weight: 600;
			text-transform: uppercase;
		}

		.ast-builder-menu-1 .menu-item>.menu-link {
			font-size: 13px;
			font-size: 0.8125rem;
			padding-left: 24px;
			padding-right: 24px;
		}

		.ast-builder-menu-1 .sub-menu,
		.ast-builder-menu-1 .inline-on-mobile .sub-menu {
			border-top-width: 2px;
			border-bottom-width: 0px;
			border-right-width: 0px;
			border-left-width: 0px;
			border-color: var(--ast-global-color-0);
			border-style: solid;
			border-radius: 0px;
		}

		.ast-builder-menu-1 .main-header-menu>.menu-item>.sub-menu,
		.ast-builder-menu-1 .main-header-menu>.menu-item>.astra-full-megamenu-wrapper {
			margin-top: 0px;
		}

		.ast-desktop .ast-builder-menu-1 .main-header-menu>.menu-item>.sub-menu:before,
		.ast-desktop .ast-builder-menu-1 .main-header-menu>.menu-item>.astra-full-megamenu-wrapper:before {
			height: calc(0px + 5px);
		}

		.ast-builder-menu-1 .menu-item.menu-item-has-children>.ast-menu-toggle {
			right: calc(24px - 0.907em);
		}

		.ast-desktop .ast-builder-menu-1 .menu-item .sub-menu .menu-link {
			border-style: none;
		}

		@media (max-width:921px) {
			.ast-header-break-point .ast-builder-menu-1 .menu-item.menu-item-has-children>.ast-menu-toggle {
				top: 0;
			}

			.ast-builder-menu-1 .menu-item-has-children>.menu-link:after {
				content: unset;
			}

			.ast-builder-menu-1 .main-header-menu>.menu-item>.sub-menu,
			.ast-builder-menu-1 .main-header-menu>.menu-item>.astra-full-megamenu-wrapper {
				margin-top: 0;
			}
		}

		@media (max-width:544px) {
			.ast-header-break-point .ast-builder-menu-1 .menu-item.menu-item-has-children>.ast-menu-toggle {
				top: 0;
			}

			.ast-builder-menu-1 .main-header-menu>.menu-item>.sub-menu,
			.ast-builder-menu-1 .main-header-menu>.menu-item>.astra-full-megamenu-wrapper {
				margin-top: 0;
			}
		}

		.ast-builder-menu-1 {
			display: flex;
		}

		@media (max-width:921px) {
			.ast-header-break-point .ast-builder-menu-1 {
				display: flex;
			}
		}

		@media (max-width:544px) {
			.ast-header-break-point .ast-builder-menu-1 {
				display: flex;
			}
		}

		.ast-builder-social-element:hover {
			color: #0274be;
		}

		.ast-social-stack-desktop .ast-builder-social-element,
		.ast-social-stack-tablet .ast-builder-social-element,
		.ast-social-stack-mobile .ast-builder-social-element {
			margin-top: 6px;
			margin-bottom: 6px;
		}

		.ast-social-color-type-official .ast-builder-social-element,
		.ast-social-color-type-official .social-item-label {
			color: var(--color);
			background-color: var(--background-color);
		}

		.header-social-inner-wrap.ast-social-color-type-official .ast-builder-social-element svg,
		.footer-social-inner-wrap.ast-social-color-type-official .ast-builder-social-element svg {
			fill: currentColor;
		}

		.social-show-label-true .ast-builder-social-element {
			width: auto;
			padding: 0 0.4em;
		}

		[data-section^="section-fb-social-icons-"] .footer-social-inner-wrap {
			text-align: center;
		}

		.ast-footer-social-wrap {
			width: 100%;
		}

		.ast-footer-social-wrap .ast-builder-social-element:first-child {
			margin-left: 0;
		}

		.ast-footer-social-wrap .ast-builder-social-element:last-child {
			margin-right: 0;
		}

		.ast-header-social-wrap .ast-builder-social-element:first-child {
			margin-left: 0;
		}

		.ast-header-social-wrap .ast-builder-social-element:last-child {
			margin-right: 0;
		}

		.ast-builder-social-element {
			line-height: 1;
			color: #3a3a3a;
			background: transparent;
			vertical-align: middle;
			transition: all 0.01s;
			margin-left: 6px;
			margin-right: 6px;
			justify-content: center;
			align-items: center;
		}

		.ast-builder-social-element {
			line-height: 1;
			color: #3a3a3a;
			background: transparent;
			vertical-align: middle;
			transition: all 0.01s;
			margin-left: 6px;
			margin-right: 6px;
			justify-content: center;
			align-items: center;
		}

		.ast-builder-social-element .social-item-label {
			padding-left: 6px;
		}

		.ast-header-social-1-wrap .ast-builder-social-element {
			margin-left: 12px;
			margin-right: 12px;
		}

		.ast-header-social-1-wrap .ast-builder-social-element svg {
			width: 20px;
			height: 20px;
		}

		.ast-header-social-1-wrap {
			margin-right: 16px;
		}

		.ast-header-social-1-wrap .ast-social-color-type-custom svg {
			fill: var(--ast-global-color-5);
		}

		.ast-header-social-1-wrap .ast-social-color-type-custom .ast-builder-social-element:hover {
			color: var(--ast-global-color-0);
		}

		.ast-header-social-1-wrap .ast-social-color-type-custom .ast-builder-social-element:hover svg {
			fill: var(--ast-global-color-0);
		}

		.ast-header-social-1-wrap .ast-social-color-type-custom .social-item-label {
			color: var(--ast-global-color-5);
		}

		.ast-header-social-1-wrap .ast-builder-social-element:hover .social-item-label {
			color: var(--ast-global-color-0);
		}

		.ast-builder-layout-element[data-section="section-hb-social-icons-1"] {
			display: flex;
		}

		@media (max-width:921px) {
			.ast-header-break-point .ast-builder-layout-element[data-section="section-hb-social-icons-1"] {
				display: flex;
			}
		}

		@media (max-width:544px) {
			.ast-header-break-point .ast-builder-layout-element[data-section="section-hb-social-icons-1"] {
				display: flex;
			}
		}

		.site-below-footer-wrap {
			padding-top: 20px;
			padding-bottom: 20px;
		}

		.site-below-footer-wrap[data-section="section-below-footer-builder"] {
			background-color: ;
			;
			background-image: none;
			;
			min-height: 80px;
			border-style: solid;
			border-width: 0px;
			border-top-width: 1px;
			border-top-color: rgba(255, 255, 255, 0.08);
		}

		.site-below-footer-wrap[data-section="section-below-footer-builder"] .ast-builder-grid-row {
			max-width: 1200px;
			margin-left: auto;
			margin-right: auto;
		}

		.site-below-footer-wrap[data-section="section-below-footer-builder"] .ast-builder-grid-row,
		.site-below-footer-wrap[data-section="section-below-footer-builder"] .site-footer-section {
			align-items: center;
		}

		.site-below-footer-wrap[data-section="section-below-footer-builder"].ast-footer-row-inline .site-footer-section {
			display: flex;
			margin-bottom: 0;
		}

		.ast-builder-grid-row-2-equal .ast-builder-grid-row {
			grid-template-columns: repeat(2, 1fr);
		}

		@media (max-width:921px) {
			.site-below-footer-wrap[data-section="section-below-footer-builder"].ast-footer-row-tablet-inline .site-footer-section {
				display: flex;
				margin-bottom: 0;
			}

			.site-below-footer-wrap[data-section="section-below-footer-builder"].ast-footer-row-tablet-stack .site-footer-section {
				display: block;
				margin-bottom: 10px;
			}

			.ast-builder-grid-row-container.ast-builder-grid-row-tablet-full .ast-builder-grid-row {
				grid-template-columns: 1fr;
			}
		}

		@media (max-width:544px) {
			.site-below-footer-wrap[data-section="section-below-footer-builder"].ast-footer-row-mobile-inline .site-footer-section {
				display: flex;
				margin-bottom: 0;
			}

			.site-below-footer-wrap[data-section="section-below-footer-builder"].ast-footer-row-mobile-stack .site-footer-section {
				display: block;
				margin-bottom: 10px;
			}

			.ast-builder-grid-row-container.ast-builder-grid-row-mobile-full .ast-builder-grid-row {
				grid-template-columns: 1fr;
			}
		}

		.site-below-footer-wrap[data-section="section-below-footer-builder"] {
			padding-top: 40px;
			padding-bottom: 40px;
			padding-left: 40px;
			padding-right: 40px;
		}

		@media (max-width:544px) {
			.site-below-footer-wrap[data-section="section-below-footer-builder"] {
				padding-top: 24px;
				padding-bottom: 24px;
				padding-left: 24px;
				padding-right: 24px;
			}
		}

		.site-below-footer-wrap[data-section="section-below-footer-builder"] {
			display: grid;
		}

		@media (max-width:921px) {
			.ast-header-break-point .site-below-footer-wrap[data-section="section-below-footer-builder"] {
				display: grid;
			}
		}

		@media (max-width:544px) {
			.ast-header-break-point .site-below-footer-wrap[data-section="section-below-footer-builder"] {
				display: grid;
			}
		}

		.ast-builder-html-element img.alignnone {
			display: inline-block;
		}

		.ast-builder-html-element p:first-child {
			margin-top: 0;
		}

		.ast-builder-html-element p:last-child {
			margin-bottom: 0;
		}

		.ast-header-break-point .main-header-bar .ast-builder-html-element {
			line-height: 1.85714285714286;
		}

		.footer-widget-area[data-section="section-fb-html-1"] .ast-builder-html-element {
			color: var(--ast-global-color-4);
		}

		.footer-widget-area[data-section="section-fb-html-1"] {
			display: block;
		}

		@media (max-width:921px) {
			.ast-header-break-point .footer-widget-area[data-section="section-fb-html-1"] {
				display: block;
			}
		}

		@media (max-width:544px) {
			.ast-header-break-point .footer-widget-area[data-section="section-fb-html-1"] {
				display: block;
			}
		}

		.footer-widget-area[data-section="section-fb-html-2"] .ast-builder-html-element {
			color: var(--ast-global-color-4);
		}

		@media (max-width:921px) {
			.footer-widget-area[data-section="section-fb-html-2"] {
				margin-top: 48px;
				margin-left: 40px;
			}
		}

		@media (max-width:544px) {
			.footer-widget-area[data-section="section-fb-html-2"] {
				margin-top: 48px;
				margin-bottom: 0px;
				margin-left: 0px;
				margin-right: 0px;
			}
		}

		.footer-widget-area[data-section="section-fb-html-2"] {
			display: block;
		}

		@media (max-width:921px) {
			.ast-header-break-point .footer-widget-area[data-section="section-fb-html-2"] {
				display: block;
			}
		}

		@media (max-width:544px) {
			.ast-header-break-point .footer-widget-area[data-section="section-fb-html-2"] {
				display: block;
			}
		}

		.footer-widget-area[data-section="section-fb-html-1"] .ast-builder-html-element {
			text-align: left;
		}

		@media (max-width:921px) {
			.footer-widget-area[data-section="section-fb-html-1"] .ast-builder-html-element {
				text-align: left;
			}
		}

		@media (max-width:544px) {
			.footer-widget-area[data-section="section-fb-html-1"] .ast-builder-html-element {
				text-align: center;
			}
		}

		.footer-widget-area[data-section="section-fb-html-2"] .ast-builder-html-element {
			text-align: left;
		}

		@media (max-width:921px) {
			.footer-widget-area[data-section="section-fb-html-2"] .ast-builder-html-element {
				text-align: left;
			}
		}

		@media (max-width:544px) {
			.footer-widget-area[data-section="section-fb-html-2"] .ast-builder-html-element {
				text-align: center;
			}
		}

		.ast-footer-copyright {
			text-align: left;
		}

		.ast-footer-copyright {
			color: var(--ast-global-color-4);
		}

		@media (max-width:921px) {
			.ast-footer-copyright {
				text-align: center;
			}
		}

		@media (max-width:544px) {
			.ast-footer-copyright {
				text-align: center;
			}
		}

		.ast-footer-copyright {
			font-size: 14px;
			font-size: 0.875rem;
		}

		.ast-footer-copyright.ast-builder-layout-element {
			display: flex;
		}

		@media (max-width:921px) {
			.ast-header-break-point .ast-footer-copyright.ast-builder-layout-element {
				display: flex;
			}
		}

		@media (max-width:544px) {
			.ast-header-break-point .ast-footer-copyright.ast-builder-layout-element {
				display: flex;
			}
		}

		.ast-builder-social-element:hover {
			color: #0274be;
		}

		.ast-social-stack-desktop .ast-builder-social-element,
		.ast-social-stack-tablet .ast-builder-social-element,
		.ast-social-stack-mobile .ast-builder-social-element {
			margin-top: 6px;
			margin-bottom: 6px;
		}

		.ast-social-color-type-official .ast-builder-social-element,
		.ast-social-color-type-official .social-item-label {
			color: var(--color);
			background-color: var(--background-color);
		}

		.header-social-inner-wrap.ast-social-color-type-official .ast-builder-social-element svg,
		.footer-social-inner-wrap.ast-social-color-type-official .ast-builder-social-element svg {
			fill: currentColor;
		}

		.social-show-label-true .ast-builder-social-element {
			width: auto;
			padding: 0 0.4em;
		}

		[data-section^="section-fb-social-icons-"] .footer-social-inner-wrap {
			text-align: center;
		}

		.ast-footer-social-wrap {
			width: 100%;
		}

		.ast-footer-social-wrap .ast-builder-social-element:first-child {
			margin-left: 0;
		}

		.ast-footer-social-wrap .ast-builder-social-element:last-child {
			margin-right: 0;
		}

		.ast-header-social-wrap .ast-builder-social-element:first-child {
			margin-left: 0;
		}

		.ast-header-social-wrap .ast-builder-social-element:last-child {
			margin-right: 0;
		}

		.ast-builder-social-element {
			line-height: 1;
			color: #3a3a3a;
			background: transparent;
			vertical-align: middle;
			transition: all 0.01s;
			margin-left: 6px;
			margin-right: 6px;
			justify-content: center;
			align-items: center;
		}

		.ast-builder-social-element {
			line-height: 1;
			color: #3a3a3a;
			background: transparent;
			vertical-align: middle;
			transition: all 0.01s;
			margin-left: 6px;
			margin-right: 6px;
			justify-content: center;
			align-items: center;
		}

		.ast-builder-social-element .social-item-label {
			padding-left: 6px;
		}

		.ast-footer-social-1-wrap .ast-builder-social-element {
			margin-left: 12px;
			margin-right: 12px;
		}

		.ast-footer-social-1-wrap .ast-builder-social-element svg {
			width: 18px;
			height: 18px;
		}

		.ast-footer-social-1-wrap {
			margin-top: 16px;
		}

		.ast-footer-social-1-wrap .ast-social-color-type-custom svg {
			fill: var(--ast-global-color-4);
		}

		.ast-footer-social-1-wrap .ast-social-color-type-custom .ast-builder-social-element:hover {
			color: var(--ast-global-color-5);
		}

		.ast-footer-social-1-wrap .ast-social-color-type-custom .ast-builder-social-element:hover svg {
			fill: var(--ast-global-color-5);
		}

		.ast-footer-social-1-wrap .ast-social-color-type-custom .social-item-label {
			color: var(--ast-global-color-4);
		}

		.ast-footer-social-1-wrap .ast-builder-social-element:hover .social-item-label {
			color: var(--ast-global-color-5);
		}

		[data-section="section-fb-social-icons-1"] .footer-social-inner-wrap {
			text-align: right;
		}

		@media (max-width:921px) {
			[data-section="section-fb-social-icons-1"] .footer-social-inner-wrap {
				text-align: center;
			}
		}

		@media (max-width:544px) {
			[data-section="section-fb-social-icons-1"] .footer-social-inner-wrap {
				text-align: center;
			}
		}

		.ast-builder-layout-element[data-section="section-fb-social-icons-1"] {
			display: flex;
		}

		@media (max-width:921px) {
			.ast-header-break-point .ast-builder-layout-element[data-section="section-fb-social-icons-1"] {
				display: flex;
			}
		}

		@media (max-width:544px) {
			.ast-header-break-point .ast-builder-layout-element[data-section="section-fb-social-icons-1"] {
				display: flex;
			}
		}

		.site-footer {
			background-color: var(--ast-global-color-2);
			;
			background-image: none;
			;
		}

		.site-primary-footer-wrap {
			padding-top: 45px;
			padding-bottom: 45px;
		}

		.site-primary-footer-wrap[data-section="section-primary-footer-builder"] {
			background-color: ;
			;
			background-image: none;
			;
		}

		.site-primary-footer-wrap[data-section="section-primary-footer-builder"] .ast-builder-grid-row {
			max-width: 1200px;
			margin-left: auto;
			margin-right: auto;
		}

		.site-primary-footer-wrap[data-section="section-primary-footer-builder"] .ast-builder-grid-row,
		.site-primary-footer-wrap[data-section="section-primary-footer-builder"] .site-footer-section {
			align-items: flex-start;
		}

		.site-primary-footer-wrap[data-section="section-primary-footer-builder"].ast-footer-row-inline .site-footer-section {
			display: flex;
			margin-bottom: 0;
		}

		.ast-builder-grid-row-4-equal .ast-builder-grid-row {
			grid-template-columns: repeat(4, 1fr);
		}

		@media (max-width:921px) {
			.site-primary-footer-wrap[data-section="section-primary-footer-builder"].ast-footer-row-tablet-inline .site-footer-section {
				display: flex;
				margin-bottom: 0;
			}

			.site-primary-footer-wrap[data-section="section-primary-footer-builder"].ast-footer-row-tablet-stack .site-footer-section {
				display: block;
				margin-bottom: 10px;
			}

			.ast-builder-grid-row-container.ast-builder-grid-row-tablet-2-equal .ast-builder-grid-row {
				grid-template-columns: repeat(2, 1fr);
			}
		}

		@media (max-width:544px) {
			.site-primary-footer-wrap[data-section="section-primary-footer-builder"].ast-footer-row-mobile-inline .site-footer-section {
				display: flex;
				margin-bottom: 0;
			}

			.site-primary-footer-wrap[data-section="section-primary-footer-builder"].ast-footer-row-mobile-stack .site-footer-section {
				display: block;
				margin-bottom: 10px;
			}

			.ast-builder-grid-row-container.ast-builder-grid-row-mobile-full .ast-builder-grid-row {
				grid-template-columns: 1fr;
			}
		}

		.site-primary-footer-wrap[data-section="section-primary-footer-builder"] {
			padding-top: 96px;
			padding-bottom: 64px;
			padding-left: 40px;
			padding-right: 40px;
		}

		@media (max-width:921px) {
			.site-primary-footer-wrap[data-section="section-primary-footer-builder"] {
				padding-top: 80px;
				padding-bottom: 48px;
				padding-left: 32px;
				padding-right: 32px;
			}
		}

		.site-primary-footer-wrap[data-section="section-primary-footer-builder"] {
			display: grid;
		}

		@media (max-width:921px) {
			.ast-header-break-point .site-primary-footer-wrap[data-section="section-primary-footer-builder"] {
				display: grid;
			}
		}

		@media (max-width:544px) {
			.ast-header-break-point .site-primary-footer-wrap[data-section="section-primary-footer-builder"] {
				display: grid;
			}
		}

		.footer-widget-area[data-section="sidebar-widgets-footer-widget-1"].footer-widget-area-inner {
			text-align: left;
		}

		.footer-widget-area.widget-area.site-footer-focus-item {
			width: auto;
		}

		@media (max-width:921px) {
			.footer-widget-area[data-section="sidebar-widgets-footer-widget-1"].footer-widget-area-inner {
				text-align: left;
			}
		}

		@media (max-width:544px) {
			.footer-widget-area[data-section="sidebar-widgets-footer-widget-1"].footer-widget-area-inner {
				text-align: center;
			}
		}

		.footer-widget-area[data-section="sidebar-widgets-footer-widget-1"].footer-widget-area-inner a {
			color: var(--ast-global-color-4);
		}

		.footer-widget-area[data-section="sidebar-widgets-footer-widget-1"].footer-widget-area-inner a:hover {
			color: var(--ast-global-color-5);
		}

		.footer-widget-area[data-section="sidebar-widgets-footer-widget-1"] .widget-title {
			color: var(--ast-global-color-5);
			font-size: 20px;
			font-size: 1.25rem;
		}

		.footer-widget-area[data-section="sidebar-widgets-footer-widget-1"] {
			margin-left: 112px;
		}

		@media (max-width:921px) {
			.footer-widget-area[data-section="sidebar-widgets-footer-widget-1"] {
				margin-top: 0px;
				margin-bottom: 0px;
				margin-left: 40px;
				margin-right: 0px;
			}
		}

		@media (max-width:544px) {
			.footer-widget-area[data-section="sidebar-widgets-footer-widget-1"] {
				margin-top: 48px;
				margin-left: 0px;
			}
		}

		.footer-widget-area[data-section="sidebar-widgets-footer-widget-1"] {
			display: block;
		}

		@media (max-width:921px) {
			.ast-header-break-point .footer-widget-area[data-section="sidebar-widgets-footer-widget-1"] {
				display: block;
			}
		}

		@media (max-width:544px) {
			.ast-header-break-point .footer-widget-area[data-section="sidebar-widgets-footer-widget-1"] {
				display: block;
			}
		}

		.footer-widget-area[data-section="sidebar-widgets-footer-widget-2"].footer-widget-area-inner a {
			color: var(--ast-global-color-4);
		}

		.footer-widget-area[data-section="sidebar-widgets-footer-widget-2"].footer-widget-area-inner a:hover {
			color: var(--ast-global-color-5);
		}

		.footer-widget-area[data-section="sidebar-widgets-footer-widget-2"] .widget-title {
			color: var(--ast-global-color-5);
			font-size: 20px;
			font-size: 1.25rem;
		}

		.footer-widget-area[data-section="sidebar-widgets-footer-widget-2"] {
			margin-left: 64px;
		}

		@media (max-width:921px) {
			.footer-widget-area[data-section="sidebar-widgets-footer-widget-2"] {
				margin-top: 48px;
				margin-left: 0px;
			}
		}

		.footer-widget-area[data-section="sidebar-widgets-footer-widget-2"] {
			display: block;
		}

		@media (max-width:921px) {
			.ast-header-break-point .footer-widget-area[data-section="sidebar-widgets-footer-widget-2"] {
				display: block;
			}
		}

		@media (max-width:544px) {
			.ast-header-break-point .footer-widget-area[data-section="sidebar-widgets-footer-widget-2"] {
				display: block;
			}
		}

		.footer-widget-area[data-section="sidebar-widgets-footer-widget-3"].footer-widget-area-inner {
			color: #d9e8e5;
		}

		.footer-widget-area[data-section="sidebar-widgets-footer-widget-3"] .widget-title {
			color: #ffffff;
		}

		.footer-widget-area[data-section="sidebar-widgets-footer-widget-3"] {
			display: block;
		}

		@media (max-width:921px) {
			.ast-header-break-point .footer-widget-area[data-section="sidebar-widgets-footer-widget-3"] {
				display: block;
			}
		}

		@media (max-width:544px) {
			.ast-header-break-point .footer-widget-area[data-section="sidebar-widgets-footer-widget-3"] {
				display: block;
			}
		}

		.footer-widget-area[data-section="sidebar-widgets-footer-widget-2"].footer-widget-area-inner {
			text-align: left;
		}

		.footer-widget-area.widget-area.site-footer-focus-item {
			width: auto;
		}

		@media (max-width:921px) {
			.footer-widget-area[data-section="sidebar-widgets-footer-widget-2"].footer-widget-area-inner {
				text-align: left;
			}
		}

		@media (max-width:544px) {
			.footer-widget-area[data-section="sidebar-widgets-footer-widget-2"].footer-widget-area-inner {
				text-align: center;
			}
		}

		.footer-widget-area[data-section="sidebar-widgets-footer-widget-1"].footer-widget-area-inner a {
			color: var(--ast-global-color-4);
		}

		.footer-widget-area[data-section="sidebar-widgets-footer-widget-1"].footer-widget-area-inner a:hover {
			color: var(--ast-global-color-5);
		}

		.footer-widget-area[data-section="sidebar-widgets-footer-widget-1"] .widget-title {
			color: var(--ast-global-color-5);
			font-size: 20px;
			font-size: 1.25rem;
		}

		.footer-widget-area[data-section="sidebar-widgets-footer-widget-1"] {
			margin-left: 112px;
		}

		@media (max-width:921px) {
			.footer-widget-area[data-section="sidebar-widgets-footer-widget-1"] {
				margin-top: 0px;
				margin-bottom: 0px;
				margin-left: 40px;
				margin-right: 0px;
			}
		}

		@media (max-width:544px) {
			.footer-widget-area[data-section="sidebar-widgets-footer-widget-1"] {
				margin-top: 48px;
				margin-left: 0px;
			}
		}

		.footer-widget-area[data-section="sidebar-widgets-footer-widget-1"] {
			display: block;
		}

		@media (max-width:921px) {
			.ast-header-break-point .footer-widget-area[data-section="sidebar-widgets-footer-widget-1"] {
				display: block;
			}
		}

		@media (max-width:544px) {
			.ast-header-break-point .footer-widget-area[data-section="sidebar-widgets-footer-widget-1"] {
				display: block;
			}
		}

		.footer-widget-area[data-section="sidebar-widgets-footer-widget-2"].footer-widget-area-inner a {
			color: var(--ast-global-color-4);
		}

		.footer-widget-area[data-section="sidebar-widgets-footer-widget-2"].footer-widget-area-inner a:hover {
			color: var(--ast-global-color-5);
		}

		.footer-widget-area[data-section="sidebar-widgets-footer-widget-2"] .widget-title {
			color: var(--ast-global-color-5);
			font-size: 20px;
			font-size: 1.25rem;
		}

		.footer-widget-area[data-section="sidebar-widgets-footer-widget-2"] {
			margin-left: 64px;
		}

		@media (max-width:921px) {
			.footer-widget-area[data-section="sidebar-widgets-footer-widget-2"] {
				margin-top: 48px;
				margin-left: 0px;
			}
		}

		.footer-widget-area[data-section="sidebar-widgets-footer-widget-2"] {
			display: block;
		}

		@media (max-width:921px) {
			.ast-header-break-point .footer-widget-area[data-section="sidebar-widgets-footer-widget-2"] {
				display: block;
			}
		}

		@media (max-width:544px) {
			.ast-header-break-point .footer-widget-area[data-section="sidebar-widgets-footer-widget-2"] {
				display: block;
			}
		}

		.footer-widget-area[data-section="sidebar-widgets-footer-widget-3"].footer-widget-area-inner {
			color: #d9e8e5;
		}

		.footer-widget-area[data-section="sidebar-widgets-footer-widget-3"] .widget-title {
			color: #ffffff;
		}

		.footer-widget-area[data-section="sidebar-widgets-footer-widget-3"] {
			display: block;
		}

		@media (max-width:921px) {
			.ast-header-break-point .footer-widget-area[data-section="sidebar-widgets-footer-widget-3"] {
				display: block;
			}
		}

		@media (max-width:544px) {
			.ast-header-break-point .footer-widget-area[data-section="sidebar-widgets-footer-widget-3"] {
				display: block;
			}
		}

		.footer-widget-area[data-section="sidebar-widgets-footer-widget-3"].footer-widget-area-inner {
			text-align: left;
		}

		.footer-widget-area.widget-area.site-footer-focus-item {
			width: auto;
		}

		@media (max-width:921px) {
			.footer-widget-area[data-section="sidebar-widgets-footer-widget-3"].footer-widget-area-inner {
				text-align: center;
			}
		}

		@media (max-width:544px) {
			.footer-widget-area[data-section="sidebar-widgets-footer-widget-3"].footer-widget-area-inner {
				text-align: center;
			}
		}

		.footer-widget-area[data-section="sidebar-widgets-footer-widget-1"].footer-widget-area-inner a {
			color: var(--ast-global-color-4);
		}

		.footer-widget-area[data-section="sidebar-widgets-footer-widget-1"].footer-widget-area-inner a:hover {
			color: var(--ast-global-color-5);
		}

		.footer-widget-area[data-section="sidebar-widgets-footer-widget-1"] .widget-title {
			color: var(--ast-global-color-5);
			font-size: 20px;
			font-size: 1.25rem;
		}

		.footer-widget-area[data-section="sidebar-widgets-footer-widget-1"] {
			margin-left: 112px;
		}

		@media (max-width:921px) {
			.footer-widget-area[data-section="sidebar-widgets-footer-widget-1"] {
				margin-top: 0px;
				margin-bottom: 0px;
				margin-left: 40px;
				margin-right: 0px;
			}
		}

		@media (max-width:544px) {
			.footer-widget-area[data-section="sidebar-widgets-footer-widget-1"] {
				margin-top: 48px;
				margin-left: 0px;
			}
		}

		.footer-widget-area[data-section="sidebar-widgets-footer-widget-1"] {
			display: block;
		}

		@media (max-width:921px) {
			.ast-header-break-point .footer-widget-area[data-section="sidebar-widgets-footer-widget-1"] {
				display: block;
			}
		}

		@media (max-width:544px) {
			.ast-header-break-point .footer-widget-area[data-section="sidebar-widgets-footer-widget-1"] {
				display: block;
			}
		}

		.footer-widget-area[data-section="sidebar-widgets-footer-widget-2"].footer-widget-area-inner a {
			color: var(--ast-global-color-4);
		}

		.footer-widget-area[data-section="sidebar-widgets-footer-widget-2"].footer-widget-area-inner a:hover {
			color: var(--ast-global-color-5);
		}

		.footer-widget-area[data-section="sidebar-widgets-footer-widget-2"] .widget-title {
			color: var(--ast-global-color-5);
			font-size: 20px;
			font-size: 1.25rem;
		}

		.footer-widget-area[data-section="sidebar-widgets-footer-widget-2"] {
			margin-left: 64px;
		}

		@media (max-width:921px) {
			.footer-widget-area[data-section="sidebar-widgets-footer-widget-2"] {
				margin-top: 48px;
				margin-left: 0px;
			}
		}

		.footer-widget-area[data-section="sidebar-widgets-footer-widget-2"] {
			display: block;
		}

		@media (max-width:921px) {
			.ast-header-break-point .footer-widget-area[data-section="sidebar-widgets-footer-widget-2"] {
				display: block;
			}
		}

		@media (max-width:544px) {
			.ast-header-break-point .footer-widget-area[data-section="sidebar-widgets-footer-widget-2"] {
				display: block;
			}
		}

		.footer-widget-area[data-section="sidebar-widgets-footer-widget-3"].footer-widget-area-inner {
			color: #d9e8e5;
		}

		.footer-widget-area[data-section="sidebar-widgets-footer-widget-3"] .widget-title {
			color: #ffffff;
		}

		.footer-widget-area[data-section="sidebar-widgets-footer-widget-3"] {
			display: block;
		}

		@media (max-width:921px) {
			.ast-header-break-point .footer-widget-area[data-section="sidebar-widgets-footer-widget-3"] {
				display: block;
			}
		}

		@media (max-width:544px) {
			.ast-header-break-point .footer-widget-area[data-section="sidebar-widgets-footer-widget-3"] {
				display: block;
			}
		}

		.elementor-widget-heading .elementor-heading-title {
			margin: 0;
		}

		.elementor-page .ast-menu-toggle {
			color: unset !important;
			background: unset !important;
		}

		.elementor-post.elementor-grid-item.hentry {
			margin-bottom: 0;
		}

		.woocommerce div.product .elementor-element.elementor-products-grid .related.products ul.products li.product,
		.elementor-element .elementor-wc-products .woocommerce[class*='columns-'] ul.products li.product {
			width: auto;
			margin: 0;
			float: none;
		}

		.elementor-toc__list-wrapper {
			margin: 0;
		}

		.ast-left-sidebar .elementor-section.elementor-section-stretched,
		.ast-right-sidebar .elementor-section.elementor-section-stretched {
			max-width: 100%;
			left: 0 !important;
		}

		.elementor-template-full-width .ast-container {
			display: block;
		}

		@media (max-width:544px) {
			.elementor-element .elementor-wc-products .woocommerce[class*="columns-"] ul.products li.product {
				width: auto;
				margin: 0;
			}

			.elementor-element .woocommerce .woocommerce-result-count {
				float: none;
			}
		}

		.ast-header-break-point .main-header-bar {
			border-bottom-width: 1px;
		}

		@media (min-width:922px) {
			.main-header-bar {
				border-bottom-width: 1px;
			}
		}

		.main-header-menu .menu-item,
		#astra-footer-menu .menu-item,
		.main-header-bar .ast-masthead-custom-menu-items {
			-js-display: flex;
			display: flex;
			-webkit-box-pack: center;
			-webkit-justify-content: center;
			-moz-box-pack: center;
			-ms-flex-pack: center;
			justify-content: center;
			-webkit-box-orient: vertical;
			-webkit-box-direction: normal;
			-webkit-flex-direction: column;
			-moz-box-orient: vertical;
			-moz-box-direction: normal;
			-ms-flex-direction: column;
			flex-direction: column;
		}

		.main-header-menu>.menu-item>.menu-link,
		#astra-footer-menu>.menu-item>.menu-link {
			height: 100%;
			-webkit-box-align: center;
			-webkit-align-items: center;
			-moz-box-align: center;
			-ms-flex-align: center;
			align-items: center;
			-js-display: flex;
			display: flex;
		}

		.ast-header-break-point .main-navigation ul .menu-item .menu-link .icon-arrow:first-of-type svg {
			top: .2em;
			margin-top: 0px;
			margin-left: 0px;
			width: .65em;
			transform: translate(0, -2px) rotateZ(270deg);
		}

		.ast-mobile-popup-content .ast-submenu-expanded>.ast-menu-toggle {
			transform: rotateX(180deg);
			overflow-y: auto;
		}

		.ast-separate-container .blog-layout-1,
		.ast-separate-container .blog-layout-2,
		.ast-separate-container .blog-layout-3 {
			background-color: transparent;
			background-image: none;
		}

		.ast-separate-container .ast-article-post {
			background-color: var(--ast-global-color-5);
			;
			background-image: none;
			;
		}

		@media (max-width:921px) {
			.ast-separate-container .ast-article-post {
				background-color: var(--ast-global-color-5);
				;
				background-image: none;
				;
			}
		}

		@media (max-width:544px) {
			.ast-separate-container .ast-article-post {
				background-color: var(--ast-global-color-5);
				;
				background-image: none;
				;
			}
		}

		.ast-separate-container .ast-article-single:not(.ast-related-post),
		.ast-separate-container .comments-area .comment-respond,
		.ast-separate-container .comments-area .ast-comment-list li,
		.ast-separate-container .ast-woocommerce-container,
		.ast-separate-container .error-404,
		.ast-separate-container .no-results,
		.single.ast-separate-container .ast-author-meta,
		.ast-separate-container .related-posts-title-wrapper,
		.ast-separate-container.ast-two-container #secondary .widget,
		.ast-separate-container .comments-count-wrapper,
		.ast-box-layout.ast-plain-container .site-content,
		.ast-padded-layout.ast-plain-container .site-content,
		.ast-separate-container .comments-area .comments-title,
		.ast-narrow-container .site-content {
			background-color: var(--ast-global-color-5);
			;
			background-image: none;
			;
		}

		@media (max-width:921px) {

			.ast-separate-container .ast-article-single:not(.ast-related-post),
			.ast-separate-container .comments-area .comment-respond,
			.ast-separate-container .comments-area .ast-comment-list li,
			.ast-separate-container .ast-woocommerce-container,
			.ast-separate-container .error-404,
			.ast-separate-container .no-results,
			.single.ast-separate-container .ast-author-meta,
			.ast-separate-container .related-posts-title-wrapper,
			.ast-separate-container.ast-two-container #secondary .widget,
			.ast-separate-container .comments-count-wrapper,
			.ast-box-layout.ast-plain-container .site-content,
			.ast-padded-layout.ast-plain-container .site-content,
			.ast-separate-container .comments-area .comments-title,
			.ast-narrow-container .site-content {
				background-color: var(--ast-global-color-5);
				;
				background-image: none;
				;
			}
		}

		@media (max-width:544px) {

			.ast-separate-container .ast-article-single:not(.ast-related-post),
			.ast-separate-container .comments-area .comment-respond,
			.ast-separate-container .comments-area .ast-comment-list li,
			.ast-separate-container .ast-woocommerce-container,
			.ast-separate-container .error-404,
			.ast-separate-container .no-results,
			.single.ast-separate-container .ast-author-meta,
			.ast-separate-container .related-posts-title-wrapper,
			.ast-separate-container.ast-two-container #secondary .widget,
			.ast-separate-container .comments-count-wrapper,
			.ast-box-layout.ast-plain-container .site-content,
			.ast-padded-layout.ast-plain-container .site-content,
			.ast-separate-container .comments-area .comments-title,
			.ast-narrow-container .site-content {
				background-color: var(--ast-global-color-5);
				;
				background-image: none;
				;
			}
		}

		.ast-mobile-header-content>*,
		.ast-desktop-header-content>* {
			padding: 10px 0;
			height: auto;
		}

		.ast-mobile-header-content>*:first-child,
		.ast-desktop-header-content>*:first-child {
			padding-top: 10px;
		}

		.ast-mobile-header-content>.ast-builder-menu,
		.ast-desktop-header-content>.ast-builder-menu {
			padding-top: 0;
		}

		.ast-mobile-header-content>*:last-child,
		.ast-desktop-header-content>*:last-child {
			padding-bottom: 0;
		}

		.ast-mobile-header-content .ast-search-menu-icon.ast-inline-search label,
		.ast-desktop-header-content .ast-search-menu-icon.ast-inline-search label {
			width: 100%;
		}

		.ast-desktop-header-content .main-header-bar-navigation .ast-submenu-expanded>.ast-menu-toggle::before {
			transform: rotateX(180deg);
		}

		#ast-desktop-header .ast-desktop-header-content,
		.ast-mobile-header-content .ast-search-icon,
		.ast-desktop-header-content .ast-search-icon,
		.ast-mobile-header-wrap .ast-mobile-header-content,
		.ast-main-header-nav-open.ast-popup-nav-open .ast-mobile-header-wrap .ast-mobile-header-content,
		.ast-main-header-nav-open.ast-popup-nav-open .ast-desktop-header-content {
			display: none;
		}

		.ast-main-header-nav-open.ast-header-break-point #ast-desktop-header .ast-desktop-header-content,
		.ast-main-header-nav-open.ast-header-break-point .ast-mobile-header-wrap .ast-mobile-header-content {
			display: block;
		}

		.ast-desktop .ast-desktop-header-content .astra-menu-animation-slide-up>.menu-item>.sub-menu,
		.ast-desktop .ast-desktop-header-content .astra-menu-animation-slide-up>.menu-item .menu-item>.sub-menu,
		.ast-desktop .ast-desktop-header-content .astra-menu-animation-slide-down>.menu-item>.sub-menu,
		.ast-desktop .ast-desktop-header-content .astra-menu-animation-slide-down>.menu-item .menu-item>.sub-menu,
		.ast-desktop .ast-desktop-header-content .astra-menu-animation-fade>.menu-item>.sub-menu,
		.ast-desktop .ast-desktop-header-content .astra-menu-animation-fade>.menu-item .menu-item>.sub-menu {
			opacity: 1;
			visibility: visible;
		}

		.ast-hfb-header.ast-default-menu-enable.ast-header-break-point .ast-mobile-header-wrap .ast-mobile-header-content .main-header-bar-navigation {
			width: unset;
			margin: unset;
		}

		.ast-mobile-header-content.content-align-flex-end .main-header-bar-navigation .menu-item-has-children>.ast-menu-toggle,
		.ast-desktop-header-content.content-align-flex-end .main-header-bar-navigation .menu-item-has-children>.ast-menu-toggle {
			left: calc(20px - 0.907em);
		}

		.ast-mobile-header-content .ast-search-menu-icon,
		.ast-mobile-header-content .ast-search-menu-icon.slide-search,
		.ast-desktop-header-content .ast-search-menu-icon,
		.ast-desktop-header-content .ast-search-menu-icon.slide-search {
			width: 100%;
			position: relative;
			display: block;
			right: auto;
			transform: none;
		}

		.ast-mobile-header-content .ast-search-menu-icon.slide-search .search-form,
		.ast-mobile-header-content .ast-search-menu-icon .search-form,
		.ast-desktop-header-content .ast-search-menu-icon.slide-search .search-form,
		.ast-desktop-header-content .ast-search-menu-icon .search-form {
			right: 0;
			visibility: visible;
			opacity: 1;
			position: relative;
			top: auto;
			transform: none;
			padding: 0;
			display: block;
			overflow: hidden;
		}

		.ast-mobile-header-content .ast-search-menu-icon.ast-inline-search .search-field,
		.ast-mobile-header-content .ast-search-menu-icon .search-field,
		.ast-desktop-header-content .ast-search-menu-icon.ast-inline-search .search-field,
		.ast-desktop-header-content .ast-search-menu-icon .search-field {
			width: 100%;
			padding-right: 5.5em;
		}

		.ast-mobile-header-content .ast-search-menu-icon .search-submit,
		.ast-desktop-header-content .ast-search-menu-icon .search-submit {
			display: block;
			position: absolute;
			height: 100%;
			top: 0;
			right: 0;
			padding: 0 1em;
			border-radius: 0;
		}

		.ast-hfb-header.ast-default-menu-enable.ast-header-break-point .ast-mobile-header-wrap .ast-mobile-header-content .main-header-bar-navigation ul .sub-menu .menu-link {
			padding-left: 30px;
		}

		.ast-hfb-header.ast-default-menu-enable.ast-header-break-point .ast-mobile-header-wrap .ast-mobile-header-content .main-header-bar-navigation .sub-menu .menu-item .menu-item .menu-link {
			padding-left: 40px;
		}

		.ast-mobile-popup-drawer.active .ast-mobile-popup-inner {
			background-color: #ffffff;
			;
		}

		.ast-mobile-header-wrap .ast-mobile-header-content,
		.ast-desktop-header-content {
			background-color: #ffffff;
			;
		}

		.ast-mobile-popup-content>*,
		.ast-mobile-header-content>*,
		.ast-desktop-popup-content>*,
		.ast-desktop-header-content>* {
			padding-top: 0px;
			padding-bottom: 0px;
		}

		.content-align-flex-start .ast-builder-layout-element {
			justify-content: flex-start;
		}

		.content-align-flex-start .main-header-menu {
			text-align: left;
		}

		.ast-mobile-popup-drawer.active .menu-toggle-close {
			color: #3a3a3a;
		}

		.ast-mobile-header-wrap .ast-primary-header-bar,
		.ast-primary-header-bar .site-primary-header-wrap {
			min-height: 104px;
		}

		.ast-desktop .ast-primary-header-bar .main-header-menu>.menu-item {
			line-height: 104px;
		}

		#masthead .ast-container,
		.site-header-focus-item+.ast-breadcrumbs-wrapper {
			max-width: 100%;
			padding-left: 35px;
			padding-right: 35px;
		}

		@media (max-width:921px) {

			#masthead .ast-mobile-header-wrap .ast-primary-header-bar,
			#masthead .ast-mobile-header-wrap .ast-below-header-bar {
				padding-left: 20px;
				padding-right: 20px;
			}
		}

		.ast-header-break-point .ast-primary-header-bar {
			border-bottom-width: 0px;
			border-bottom-color: #eaeaea;
			border-bottom-style: solid;
		}

		@media (min-width:922px) {
			.ast-primary-header-bar {
				border-bottom-width: 0px;
				border-bottom-color: #eaeaea;
				border-bottom-style: solid;
			}
		}

		.ast-primary-header-bar {
			background-color: ;
			;
			background-image: none;
			;
		}

		@media (max-width:921px) {

			.ast-mobile-header-wrap .ast-primary-header-bar,
			.ast-primary-header-bar .site-primary-header-wrap {
				min-height: 80px;
			}
		}

		@media (max-width:544px) {

			.ast-mobile-header-wrap .ast-primary-header-bar,
			.ast-primary-header-bar .site-primary-header-wrap {
				min-height: 64px;
			}
		}

		.ast-primary-header-bar {
			display: block;
		}

		@media (max-width:921px) {
			.ast-header-break-point .ast-primary-header-bar {
				display: grid;
			}
		}

		@media (max-width:544px) {
			.ast-header-break-point .ast-primary-header-bar {
				display: grid;
			}
		}

		.ast-hfb-header .site-header {
			margin-left: 5px;
			margin-right: 5px;
		}

		[data-section="section-header-mobile-trigger"] .ast-button-wrap .ast-mobile-menu-trigger-minimal {
			color: var(--ast-global-color-5);
			border: none;
			background: transparent;
		}

		[data-section="section-header-mobile-trigger"] .ast-button-wrap .mobile-menu-toggle-icon .ast-mobile-svg {
			width: 20px;
			height: 20px;
			fill: var(--ast-global-color-5);
		}

		[data-section="section-header-mobile-trigger"] .ast-button-wrap .mobile-menu-wrap .mobile-menu {
			color: var(--ast-global-color-5);
		}

		.ast-builder-menu-mobile .main-navigation .menu-item.menu-item-has-children>.ast-menu-toggle {
			top: 0;
		}

		.ast-builder-menu-mobile .main-navigation .menu-item-has-children>.menu-link:after {
			content: unset;
		}

		.ast-hfb-header .ast-builder-menu-mobile .main-header-menu,
		.ast-hfb-header .ast-builder-menu-mobile .main-navigation .menu-item .menu-link,
		.ast-hfb-header .ast-builder-menu-mobile .main-navigation .menu-item .sub-menu .menu-link {
			border-style: none;
		}

		.ast-builder-menu-mobile .main-navigation .menu-item.menu-item-has-children>.ast-menu-toggle {
			top: 0;
		}

		@media (max-width:921px) {
			.ast-builder-menu-mobile .main-navigation .menu-item.menu-item-has-children>.ast-menu-toggle {
				top: 0;
			}

			.ast-builder-menu-mobile .main-navigation .menu-item-has-children>.menu-link:after {
				content: unset;
			}
		}

		@media (max-width:544px) {
			.ast-builder-menu-mobile .main-navigation .menu-item.menu-item-has-children>.ast-menu-toggle {
				top: 0;
			}
		}

		.ast-builder-menu-mobile .main-navigation {
			display: block;
		}

		@media (max-width:921px) {
			.ast-header-break-point .ast-builder-menu-mobile .main-navigation {
				display: block;
			}
		}

		@media (max-width:544px) {
			.ast-header-break-point .ast-builder-menu-mobile .main-navigation {
				display: block;
			}
		}

		:root {
			--e-global-color-astglobalcolor0: #FF6A97;
			--e-global-color-astglobalcolor1: #FA036B;
			--e-global-color-astglobalcolor2: #2B161B;
			--e-global-color-astglobalcolor3: #645659;
			--e-global-color-astglobalcolor4: #F8F3F5;
			--e-global-color-astglobalcolor5: #FFFFFF;
			--e-global-color-astglobalcolor6: #000000;
			--e-global-color-astglobalcolor7: #4B4F58;
			--e-global-color-astglobalcolor8: #F6F7F8;
		}
	</style>
	<link rel="stylesheet" id="astra-google-fonts-css"
		href="https://fonts.googleapis.com/css?family=Inter%3A400%2C600%7CBrygada+1918%3A600%2C500&#038;display=fallback&#038;ver=4.0.2"
		media="all">
	<link rel="stylesheet" id="wp-block-library-css" href="<?php echo get_template_directory_uri(); ?>/assets/landing4/wp-includes/css/dist/block-library/style.min.css?ver=6.1.1"
		media="all">
	<style id="global-styles-inline-css">
		body {
			--wp--preset--color--black: #000000;
			--wp--preset--color--cyan-bluish-gray: #abb8c3;
			--wp--preset--color--white: #ffffff;
			--wp--preset--color--pale-pink: #f78da7;
			--wp--preset--color--vivid-red: #cf2e2e;
			--wp--preset--color--luminous-vivid-orange: #ff6900;
			--wp--preset--color--luminous-vivid-amber: #fcb900;
			--wp--preset--color--light-green-cyan: #7bdcb5;
			--wp--preset--color--vivid-green-cyan: #00d084;
			--wp--preset--color--pale-cyan-blue: #8ed1fc;
			--wp--preset--color--vivid-cyan-blue: #0693e3;
			--wp--preset--color--vivid-purple: #9b51e0;
			--wp--preset--color--ast-global-color-0: var(--ast-global-color-0);
			--wp--preset--color--ast-global-color-1: var(--ast-global-color-1);
			--wp--preset--color--ast-global-color-2: var(--ast-global-color-2);
			--wp--preset--color--ast-global-color-3: var(--ast-global-color-3);
			--wp--preset--color--ast-global-color-4: var(--ast-global-color-4);
			--wp--preset--color--ast-global-color-5: var(--ast-global-color-5);
			--wp--preset--color--ast-global-color-6: var(--ast-global-color-6);
			--wp--preset--color--ast-global-color-7: var(--ast-global-color-7);
			--wp--preset--color--ast-global-color-8: var(--ast-global-color-8);
			--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
			--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
			--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
			--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
			--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
			--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
			--wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
			--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
			--wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
			--wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
			--wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
			--wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
			--wp--preset--duotone--dark-grayscale: url('#wp-duotone-dark-grayscale');
			--wp--preset--duotone--grayscale: url('#wp-duotone-grayscale');
			--wp--preset--duotone--purple-yellow: url('#wp-duotone-purple-yellow');
			--wp--preset--duotone--blue-red: url('#wp-duotone-blue-red');
			--wp--preset--duotone--midnight: url('#wp-duotone-midnight');
			--wp--preset--duotone--magenta-yellow: url('#wp-duotone-magenta-yellow');
			--wp--preset--duotone--purple-green: url('#wp-duotone-purple-green');
			--wp--preset--duotone--blue-orange: url('#wp-duotone-blue-orange');
			--wp--preset--font-size--small: 13px;
			--wp--preset--font-size--medium: 20px;
			--wp--preset--font-size--large: 36px;
			--wp--preset--font-size--x-large: 42px;
			--wp--preset--spacing--20: 0.44rem;
			--wp--preset--spacing--30: 0.67rem;
			--wp--preset--spacing--40: 1rem;
			--wp--preset--spacing--50: 1.5rem;
			--wp--preset--spacing--60: 2.25rem;
			--wp--preset--spacing--70: 3.38rem;
			--wp--preset--spacing--80: 5.06rem;
		}

		body {
			margin: 0;
			--wp--style--global--content-size: var(--wp--custom--ast-content-width-size);
			--wp--style--global--wide-size: var(--wp--custom--ast-wide-width-size);
		}

		.wp-site-blocks>.alignleft {
			float: left;
			margin-right: 2em;
		}

		.wp-site-blocks>.alignright {
			float: right;
			margin-left: 2em;
		}

		.wp-site-blocks>.aligncenter {
			justify-content: center;
			margin-left: auto;
			margin-right: auto;
		}

		.wp-site-blocks>* {
			margin-block-start: 0;
			margin-block-end: 0;
		}

		.wp-site-blocks>*+* {
			margin-block-start: 24px;
		}

		body {
			--wp--style--block-gap: 24px;
		}

		body .is-layout-flow>* {
			margin-block-start: 0;
			margin-block-end: 0;
		}

		body .is-layout-flow>*+* {
			margin-block-start: 24px;
			margin-block-end: 0;
		}

		body .is-layout-constrained>* {
			margin-block-start: 0;
			margin-block-end: 0;
		}

		body .is-layout-constrained>*+* {
			margin-block-start: 24px;
			margin-block-end: 0;
		}

		body .is-layout-flex {
			gap: 24px;
		}

		body .is-layout-flow>.alignleft {
			float: left;
			margin-inline-start: 0;
			margin-inline-end: 2em;
		}

		body .is-layout-flow>.alignright {
			float: right;
			margin-inline-start: 2em;
			margin-inline-end: 0;
		}

		body .is-layout-flow>.aligncenter {
			margin-left: auto !important;
			margin-right: auto !important;
		}

		body .is-layout-constrained>.alignleft {
			float: left;
			margin-inline-start: 0;
			margin-inline-end: 2em;
		}

		body .is-layout-constrained>.alignright {
			float: right;
			margin-inline-start: 2em;
			margin-inline-end: 0;
		}

		body .is-layout-constrained>.aligncenter {
			margin-left: auto !important;
			margin-right: auto !important;
		}

		body .is-layout-constrained> :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
			max-width: var(--wp--style--global--content-size);
			margin-left: auto !important;
			margin-right: auto !important;
		}

		body .is-layout-constrained>.alignwide {
			max-width: var(--wp--style--global--wide-size);
		}

		body .is-layout-flex {
			display: flex;
		}

		body .is-layout-flex {
			flex-wrap: wrap;
			align-items: center;
		}

		body .is-layout-flex>* {
			margin: 0;
		}

		body {
			padding-top: 0px;
			padding-right: 0px;
			padding-bottom: 0px;
			padding-left: 0px;
		}

		a:where(:not(.wp-element-button)) {
			text-decoration: none;
		}

		.wp-element-button,
		.wp-block-button__link {
			background-color: #32373c;
			border-width: 0;
			color: #fff;
			font-family: inherit;
			font-size: inherit;
			line-height: inherit;
			padding: calc(0.667em + 2px) calc(1.333em + 2px);
			text-decoration: none;
		}

		.has-black-color {
			color: var(--wp--preset--color--black) !important;
		}

		.has-cyan-bluish-gray-color {
			color: var(--wp--preset--color--cyan-bluish-gray) !important;
		}

		.has-white-color {
			color: var(--wp--preset--color--white) !important;
		}

		.has-pale-pink-color {
			color: var(--wp--preset--color--pale-pink) !important;
		}

		.has-vivid-red-color {
			color: var(--wp--preset--color--vivid-red) !important;
		}

		.has-luminous-vivid-orange-color {
			color: var(--wp--preset--color--luminous-vivid-orange) !important;
		}

		.has-luminous-vivid-amber-color {
			color: var(--wp--preset--color--luminous-vivid-amber) !important;
		}

		.has-light-green-cyan-color {
			color: var(--wp--preset--color--light-green-cyan) !important;
		}

		.has-vivid-green-cyan-color {
			color: var(--wp--preset--color--vivid-green-cyan) !important;
		}

		.has-pale-cyan-blue-color {
			color: var(--wp--preset--color--pale-cyan-blue) !important;
		}

		.has-vivid-cyan-blue-color {
			color: var(--wp--preset--color--vivid-cyan-blue) !important;
		}

		.has-vivid-purple-color {
			color: var(--wp--preset--color--vivid-purple) !important;
		}

		.has-ast-global-color-0-color {
			color: var(--wp--preset--color--ast-global-color-0) !important;
		}

		.has-ast-global-color-1-color {
			color: var(--wp--preset--color--ast-global-color-1) !important;
		}

		.has-ast-global-color-2-color {
			color: var(--wp--preset--color--ast-global-color-2) !important;
		}

		.has-ast-global-color-3-color {
			color: var(--wp--preset--color--ast-global-color-3) !important;
		}

		.has-ast-global-color-4-color {
			color: var(--wp--preset--color--ast-global-color-4) !important;
		}

		.has-ast-global-color-5-color {
			color: var(--wp--preset--color--ast-global-color-5) !important;
		}

		.has-ast-global-color-6-color {
			color: var(--wp--preset--color--ast-global-color-6) !important;
		}

		.has-ast-global-color-7-color {
			color: var(--wp--preset--color--ast-global-color-7) !important;
		}

		.has-ast-global-color-8-color {
			color: var(--wp--preset--color--ast-global-color-8) !important;
		}

		.has-black-background-color {
			background-color: var(--wp--preset--color--black) !important;
		}

		.has-cyan-bluish-gray-background-color {
			background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
		}

		.has-white-background-color {
			background-color: var(--wp--preset--color--white) !important;
		}

		.has-pale-pink-background-color {
			background-color: var(--wp--preset--color--pale-pink) !important;
		}

		.has-vivid-red-background-color {
			background-color: var(--wp--preset--color--vivid-red) !important;
		}

		.has-luminous-vivid-orange-background-color {
			background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
		}

		.has-luminous-vivid-amber-background-color {
			background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
		}

		.has-light-green-cyan-background-color {
			background-color: var(--wp--preset--color--light-green-cyan) !important;
		}

		.has-vivid-green-cyan-background-color {
			background-color: var(--wp--preset--color--vivid-green-cyan) !important;
		}

		.has-pale-cyan-blue-background-color {
			background-color: var(--wp--preset--color--pale-cyan-blue) !important;
		}

		.has-vivid-cyan-blue-background-color {
			background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
		}

		.has-vivid-purple-background-color {
			background-color: var(--wp--preset--color--vivid-purple) !important;
		}

		.has-ast-global-color-0-background-color {
			background-color: var(--wp--preset--color--ast-global-color-0) !important;
		}

		.has-ast-global-color-1-background-color {
			background-color: var(--wp--preset--color--ast-global-color-1) !important;
		}

		.has-ast-global-color-2-background-color {
			background-color: var(--wp--preset--color--ast-global-color-2) !important;
		}

		.has-ast-global-color-3-background-color {
			background-color: var(--wp--preset--color--ast-global-color-3) !important;
		}

		.has-ast-global-color-4-background-color {
			background-color: var(--wp--preset--color--ast-global-color-4) !important;
		}

		.has-ast-global-color-5-background-color {
			background-color: var(--wp--preset--color--ast-global-color-5) !important;
		}

		.has-ast-global-color-6-background-color {
			background-color: var(--wp--preset--color--ast-global-color-6) !important;
		}

		.has-ast-global-color-7-background-color {
			background-color: var(--wp--preset--color--ast-global-color-7) !important;
		}

		.has-ast-global-color-8-background-color {
			background-color: var(--wp--preset--color--ast-global-color-8) !important;
		}

		.has-black-border-color {
			border-color: var(--wp--preset--color--black) !important;
		}

		.has-cyan-bluish-gray-border-color {
			border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
		}

		.has-white-border-color {
			border-color: var(--wp--preset--color--white) !important;
		}

		.has-pale-pink-border-color {
			border-color: var(--wp--preset--color--pale-pink) !important;
		}

		.has-vivid-red-border-color {
			border-color: var(--wp--preset--color--vivid-red) !important;
		}

		.has-luminous-vivid-orange-border-color {
			border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
		}

		.has-luminous-vivid-amber-border-color {
			border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
		}

		.has-light-green-cyan-border-color {
			border-color: var(--wp--preset--color--light-green-cyan) !important;
		}

		.has-vivid-green-cyan-border-color {
			border-color: var(--wp--preset--color--vivid-green-cyan) !important;
		}

		.has-pale-cyan-blue-border-color {
			border-color: var(--wp--preset--color--pale-cyan-blue) !important;
		}

		.has-vivid-cyan-blue-border-color {
			border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
		}

		.has-vivid-purple-border-color {
			border-color: var(--wp--preset--color--vivid-purple) !important;
		}

		.has-ast-global-color-0-border-color {
			border-color: var(--wp--preset--color--ast-global-color-0) !important;
		}

		.has-ast-global-color-1-border-color {
			border-color: var(--wp--preset--color--ast-global-color-1) !important;
		}

		.has-ast-global-color-2-border-color {
			border-color: var(--wp--preset--color--ast-global-color-2) !important;
		}

		.has-ast-global-color-3-border-color {
			border-color: var(--wp--preset--color--ast-global-color-3) !important;
		}

		.has-ast-global-color-4-border-color {
			border-color: var(--wp--preset--color--ast-global-color-4) !important;
		}

		.has-ast-global-color-5-border-color {
			border-color: var(--wp--preset--color--ast-global-color-5) !important;
		}

		.has-ast-global-color-6-border-color {
			border-color: var(--wp--preset--color--ast-global-color-6) !important;
		}

		.has-ast-global-color-7-border-color {
			border-color: var(--wp--preset--color--ast-global-color-7) !important;
		}

		.has-ast-global-color-8-border-color {
			border-color: var(--wp--preset--color--ast-global-color-8) !important;
		}

		.has-vivid-cyan-blue-to-vivid-purple-gradient-background {
			background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
		}

		.has-light-green-cyan-to-vivid-green-cyan-gradient-background {
			background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
		}

		.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
			background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
		}

		.has-luminous-vivid-orange-to-vivid-red-gradient-background {
			background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
		}

		.has-very-light-gray-to-cyan-bluish-gray-gradient-background {
			background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
		}

		.has-cool-to-warm-spectrum-gradient-background {
			background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
		}

		.has-blush-light-purple-gradient-background {
			background: var(--wp--preset--gradient--blush-light-purple) !important;
		}

		.has-blush-bordeaux-gradient-background {
			background: var(--wp--preset--gradient--blush-bordeaux) !important;
		}

		.has-luminous-dusk-gradient-background {
			background: var(--wp--preset--gradient--luminous-dusk) !important;
		}

		.has-pale-ocean-gradient-background {
			background: var(--wp--preset--gradient--pale-ocean) !important;
		}

		.has-electric-grass-gradient-background {
			background: var(--wp--preset--gradient--electric-grass) !important;
		}

		.has-midnight-gradient-background {
			background: var(--wp--preset--gradient--midnight) !important;
		}

		.has-small-font-size {
			font-size: var(--wp--preset--font-size--small) !important;
		}

		.has-medium-font-size {
			font-size: var(--wp--preset--font-size--medium) !important;
		}

		.has-large-font-size {
			font-size: var(--wp--preset--font-size--large) !important;
		}

		.has-x-large-font-size {
			font-size: var(--wp--preset--font-size--x-large) !important;
		}

		.wp-block-navigation a:where(:not(.wp-element-button)) {
			color: inherit;
		}

		.wp-block-pullquote {
			font-size: 1.5em;
			line-height: 1.6;
		}
	</style>
	<link rel="stylesheet" id="elementor-icons-css"
		href="<?php echo get_template_directory_uri(); ?>/assets/landing4/wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min.css?ver=5.17.0" media="all">
	<link rel="stylesheet" id="elementor-frontend-css"
		href="<?php echo get_template_directory_uri(); ?>/assets/landing4/wp-content/plugins/elementor/assets/css/frontend-lite.min.css?ver=3.10.1" media="all">
	<style id="elementor-frontend-inline-css">
		.elementor-kit-553 {
			--e-global-color-primary: #6EC1E4;
			--e-global-color-secondary: #54595F;
			--e-global-color-text: #7A7A7A;
			--e-global-color-accent: #61CE70;
			--e-global-typography-primary-font-family: "Roboto";
			--e-global-typography-primary-font-weight: 600;
			--e-global-typography-secondary-font-family: "Roboto Slab";
			--e-global-typography-secondary-font-weight: 400;
			--e-global-typography-text-font-family: "Roboto";
			--e-global-typography-text-font-weight: 400;
			--e-global-typography-accent-font-family: "Roboto";
			--e-global-typography-accent-font-weight: 500;
		}

		.elementor-section.elementor-section-boxed>.elementor-container {
			max-width: 1200px;
		}

		.e-con {
			--container-max-width: 1200px;
		}

		.elementor-widget:not(:last-child) {
			margin-bottom: 20px;
		}

		.elementor-element {
			--widgets-spacing: 20px;
		}

			{}

		h1.entry-title {
			display: var(--page-title-display);
		}

		.elementor-kit-553 e-page-transition {
			background-color: #FFBC7D;
		}

		@media(max-width:1024px) {
			.elementor-section.elementor-section-boxed>.elementor-container {
				max-width: 1024px;
			}

			.e-con {
				--container-max-width: 1024px;
			}
		}

		@media(max-width:767px) {
			.elementor-section.elementor-section-boxed>.elementor-container {
				max-width: 767px;
			}

			.e-con {
				--container-max-width: 767px;
			}
		}

		.elementor-554 .elementor-element.elementor-element-e57288a>.elementor-container {
			min-height: 100vh;
		}

		.elementor-554 .elementor-element.elementor-element-e57288a:not(.elementor-motion-effects-element-type-background),
		.elementor-554 .elementor-element.elementor-element-e57288a>.elementor-motion-effects-container>.elementor-motion-effects-layer {
			background-color: var(--e-global-color-astglobalcolor0);
			background-image: url("<?php echo $img_principal['url']; ?>");
			background-position: bottom right;
			background-repeat: no-repeat;
			background-size: 64vw auto;
		}

		.elementor-554 .elementor-element.elementor-element-e57288a {
			transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
			padding: 0px 40px 0px 40px;
		}

		.elementor-554 .elementor-element.elementor-element-e57288a>.elementor-background-overlay {
			transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
		}

		.elementor-554 .elementor-element.elementor-element-a5053a3>.elementor-widget-wrap>.elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute) {
			margin-bottom: 24px;
		}

		.elementor-554 .elementor-element.elementor-element-a5053a3>.elementor-element-populated {
			margin: 0% 50% 0% 0%;
			--e-column-margin-right: 50%;
			--e-column-margin-left: 0%;
			padding: 80px 0px 0px 0px;
		}

		.elementor-554 .elementor-element.elementor-element-d15881a .elementor-heading-title {
			color: #FFFFFF;
			text-transform: uppercase;
			letter-spacing: 3px;
		}

		.elementor-554 .elementor-element.elementor-element-d15881a>.elementor-widget-container {
			margin: 0px 0px 16px 0px;
		}

		.elementor-554 .elementor-element.elementor-element-cfde280 .elementor-heading-title {
			color: #ffffff;
		}

		.elementor-554 .elementor-element.elementor-element-8311209 {
			color: #FFFFFF;
			font-size: 22px;
		}

		.elementor-554 .elementor-element.elementor-element-8311209>.elementor-widget-container {
			padding: 0px 96px 0px 0px;
		}

		.elementor-554 .elementor-element.elementor-element-3951a16 .elementor-button .elementor-align-icon-right {
			margin-left: 12px;
		}

		.elementor-554 .elementor-element.elementor-element-3951a16 .elementor-button .elementor-align-icon-left {
			margin-right: 12px;
		}

		.elementor-554 .elementor-element.elementor-element-3951a16 .elementor-button {
			fill: #161513;
			color: #161513;
			background-color: #FFFFFF;
			border-style: solid;
			border-color: #FFFFFF;
		}

		.elementor-554 .elementor-element.elementor-element-3951a16 .elementor-button:hover,
		.elementor-554 .elementor-element.elementor-element-3951a16 .elementor-button:focus {
			color: #FFFFFF;
			background-color: #00000000;
		}

		.elementor-554 .elementor-element.elementor-element-3951a16 .elementor-button:hover svg,
		.elementor-554 .elementor-element.elementor-element-3951a16 .elementor-button:focus svg {
			fill: #FFFFFF;
		}

		.elementor-554 .elementor-element.elementor-element-3951a16>.elementor-widget-container {
			margin: 16px 0px 0px 0px;
		}

		.elementor-554 .elementor-element.elementor-element-ddd1a38:not(.elementor-motion-effects-element-type-background),
		.elementor-554 .elementor-element.elementor-element-ddd1a38>.elementor-motion-effects-container>.elementor-motion-effects-layer {
			background-color: var(--e-global-color-astglobalcolor5);
		}

		.elementor-554 .elementor-element.elementor-element-ddd1a38 {
			transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
			padding: 120px 40px 120px 40px;
		}

		.elementor-554 .elementor-element.elementor-element-ddd1a38>.elementor-background-overlay {
			transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
		}

		.elementor-554 .elementor-element.elementor-element-96ac74f.elementor-column>.elementor-widget-wrap {
			justify-content: space-between;
		}

		.elementor-554 .elementor-element.elementor-element-96ac74f>.elementor-widget-wrap>.elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute) {
			margin-bottom: 40px;
		}

		.elementor-554 .elementor-element.elementor-element-6834eac {
			text-align: center;
		}

		.elementor-554 .elementor-element.elementor-element-6834eac .elementor-heading-title {
			color: var(--e-global-color-astglobalcolor1);
			text-transform: uppercase;
			letter-spacing: 3px;
		}

		.elementor-554 .elementor-element.elementor-element-c20d8af {
			text-align: center;
		}

		.elementor-554 .elementor-element.elementor-element-c20d8af>.elementor-widget-container {
			padding: 0% 15% 0% 15%;
		}

		.elementor-554 .elementor-element.elementor-element-92a27fd .elementor-custom-embed-play i {
			font-size: 64px;
			text-shadow: 0px 8px 16px rgba(0, 0, 0, 0.24);
		}

		.elementor-554 .elementor-element.elementor-element-92a27fd .elementor-custom-embed-play svg {
			width: 64px;
			height: 64px;
		}

		.elementor-554 .elementor-element.elementor-element-92a27fd>.elementor-widget-container {
			margin: 0px 0px 16px 0px;
			box-shadow: 0px 64px 120px -48px rgba(0, 0, 0, 0.238);
		}

		.elementor-554 .elementor-element.elementor-element-fe795e1.elementor-view-stacked .elementor-icon {
			background-color: var(--e-global-color-astglobalcolor1);
		}

		.elementor-554 .elementor-element.elementor-element-fe795e1.elementor-view-framed .elementor-icon,
		.elementor-554 .elementor-element.elementor-element-fe795e1.elementor-view-default .elementor-icon {
			fill: var(--e-global-color-astglobalcolor1);
			color: var(--e-global-color-astglobalcolor1);
			border-color: var(--e-global-color-astglobalcolor1);
		}

		.elementor-554 .elementor-element.elementor-element-fe795e1 {
			--icon-box-icon-margin: 16px;
			width: var(--container-widget-width, 30%);
			max-width: 30%;
			--container-widget-width: 30%;
			--container-widget-flex-grow: 0;
		}

		.elementor-554 .elementor-element.elementor-element-fe795e1 .elementor-icon {
			font-size: 32px;
		}

		.elementor-554 .elementor-element.elementor-element-fe795e1 .elementor-icon-box-wrapper {
			text-align: left;
		}

		.elementor-554 .elementor-element.elementor-element-fe795e1 .elementor-icon-box-title {
			margin-bottom: 16px;
		}

		.elementor-554 .elementor-element.elementor-element-918839e.elementor-view-stacked .elementor-icon {
			background-color: var(--e-global-color-astglobalcolor1);
		}

		.elementor-554 .elementor-element.elementor-element-918839e.elementor-view-framed .elementor-icon,
		.elementor-554 .elementor-element.elementor-element-918839e.elementor-view-default .elementor-icon {
			fill: var(--e-global-color-astglobalcolor1);
			color: var(--e-global-color-astglobalcolor1);
			border-color: var(--e-global-color-astglobalcolor1);
		}

		.elementor-554 .elementor-element.elementor-element-918839e {
			--icon-box-icon-margin: 16px;
			width: var(--container-widget-width, 30%);
			max-width: 30%;
			--container-widget-width: 30%;
			--container-widget-flex-grow: 0;
		}

		.elementor-554 .elementor-element.elementor-element-918839e .elementor-icon {
			font-size: 32px;
		}

		.elementor-554 .elementor-element.elementor-element-918839e .elementor-icon-box-wrapper {
			text-align: left;
		}

		.elementor-554 .elementor-element.elementor-element-918839e .elementor-icon-box-title {
			margin-bottom: 16px;
		}

		.elementor-554 .elementor-element.elementor-element-6b103b4.elementor-view-stacked .elementor-icon {
			background-color: var(--e-global-color-astglobalcolor1);
		}

		.elementor-554 .elementor-element.elementor-element-6b103b4.elementor-view-framed .elementor-icon,
		.elementor-554 .elementor-element.elementor-element-6b103b4.elementor-view-default .elementor-icon {
			fill: var(--e-global-color-astglobalcolor1);
			color: var(--e-global-color-astglobalcolor1);
			border-color: var(--e-global-color-astglobalcolor1);
		}

		.elementor-554 .elementor-element.elementor-element-6b103b4 {
			--icon-box-icon-margin: 16px;
			width: var(--container-widget-width, 30%);
			max-width: 30%;
			--container-widget-width: 30%;
			--container-widget-flex-grow: 0;
		}

		.elementor-554 .elementor-element.elementor-element-6b103b4 .elementor-icon {
			font-size: 32px;
		}

		.elementor-554 .elementor-element.elementor-element-6b103b4 .elementor-icon-box-wrapper {
			text-align: left;
		}

		.elementor-554 .elementor-element.elementor-element-6b103b4 .elementor-icon-box-title {
			margin-bottom: 16px;
		}

		.elementor-554 .elementor-element.elementor-element-407fcbb:not(.elementor-motion-effects-element-type-background),
		.elementor-554 .elementor-element.elementor-element-407fcbb>.elementor-motion-effects-container>.elementor-motion-effects-layer {
			background-color: var(--e-global-color-astglobalcolor5);
			background-image: url("<?php echo get_template_directory_uri(); ?>/assets/landing4/wp-content/uploads/2021/08/lotus-spa-template-section-grad-bg.svg");
			background-position: 50vw 0px;
			background-repeat: no-repeat;
			background-size: contain;
		}

		.elementor-554 .elementor-element.elementor-element-407fcbb {
			transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
			padding: 120px 40px 120px 40px;
		}

		.elementor-554 .elementor-element.elementor-element-407fcbb>.elementor-background-overlay {
			transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
		}

		.elementor-554 .elementor-element.elementor-element-56b24ba>.elementor-element-populated {
			padding: 0px 96px 0px 0px;
		}

		.elementor-554 .elementor-element.elementor-element-99faec0 .elementor-button .elementor-align-icon-right {
			margin-left: 12px;
		}

		.elementor-554 .elementor-element.elementor-element-99faec0 .elementor-button .elementor-align-icon-left {
			margin-right: 12px;
		}

		.elementor-554 .elementor-element.elementor-element-99faec0 .elementor-button:hover,
		.elementor-554 .elementor-element.elementor-element-99faec0 .elementor-button:focus {
			color: #205B4F;
		}

		.elementor-554 .elementor-element.elementor-element-99faec0 .elementor-button:hover svg,
		.elementor-554 .elementor-element.elementor-element-99faec0 .elementor-button:focus svg {
			fill: #205B4F;
		}

		.elementor-554 .elementor-element.elementor-element-bad3896 img {
			border-radius: 24px 24px 24px 24px;
		}

		.elementor-554 .elementor-element.elementor-element-c05e8be>.elementor-widget-wrap>.elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute) {
			margin-bottom: 16px;
		}

		.elementor-554 .elementor-element.elementor-element-c05e8be>.elementor-element-populated {
			padding: 0px 0px 0px 80px;
		}

		.elementor-554 .elementor-element.elementor-element-d50bcdc {
			--divider-border-style: solid;
			--divider-color: #0000001A;
			--divider-border-width: 1px;
		}

		.elementor-554 .elementor-element.elementor-element-d50bcdc .elementor-divider-separator {
			width: 100%;
		}

		.elementor-554 .elementor-element.elementor-element-d50bcdc .elementor-divider {
			padding-top: 0px;
			padding-bottom: 0px;
		}

		.elementor-554 .elementor-element.elementor-element-d50bcdc>.elementor-widget-container {
			margin: 0px 0px 24px 0px;
		}

		.elementor-554 .elementor-element.elementor-element-40976f6 .elementor-heading-title {
			color: var(--e-global-color-astglobalcolor1);
		}

		.elementor-554 .elementor-element.elementor-element-9e170c9 {
			--divider-border-style: solid;
			--divider-color: #0000001A;
			--divider-border-width: 1px;
		}

		.elementor-554 .elementor-element.elementor-element-9e170c9 .elementor-divider-separator {
			width: 100%;
		}

		.elementor-554 .elementor-element.elementor-element-9e170c9 .elementor-divider {
			padding-top: 0px;
			padding-bottom: 0px;
		}

		.elementor-554 .elementor-element.elementor-element-9e170c9>.elementor-widget-container {
			margin: 0px 0px 24px 0px;
		}

		.elementor-554 .elementor-element.elementor-element-fb56f6c .elementor-heading-title {
			color: var(--e-global-color-astglobalcolor1);
		}

		.elementor-554 .elementor-element.elementor-element-8044aca {
			--divider-border-style: solid;
			--divider-color: #0000001A;
			--divider-border-width: 1px;
		}

		.elementor-554 .elementor-element.elementor-element-8044aca .elementor-divider-separator {
			width: 100%;
		}

		.elementor-554 .elementor-element.elementor-element-8044aca .elementor-divider {
			padding-top: 0px;
			padding-bottom: 0px;
		}

		.elementor-554 .elementor-element.elementor-element-8044aca>.elementor-widget-container {
			margin: 0px 0px 24px 0px;
		}

		.elementor-554 .elementor-element.elementor-element-d03f302 .elementor-heading-title {
			color: var(--e-global-color-astglobalcolor1);
		}

		.elementor-554 .elementor-element.elementor-element-36830e0>.elementor-container {
			max-width: 800px;
		}

		.elementor-554 .elementor-element.elementor-element-36830e0:not(.elementor-motion-effects-element-type-background),
		.elementor-554 .elementor-element.elementor-element-36830e0>.elementor-motion-effects-container>.elementor-motion-effects-layer {
			background-color: var(--e-global-color-astglobalcolor5);
		}

		.elementor-554 .elementor-element.elementor-element-36830e0 {
			transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
			padding: 120px 40px 120px 40px;
		}

		.elementor-554 .elementor-element.elementor-element-36830e0>.elementor-background-overlay {
			transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
		}

		.elementor-554 .elementor-element.elementor-element-6e58afb {
			text-align: center;
		}

		.elementor-554 .elementor-element.elementor-element-6e58afb .elementor-heading-title {
			color: var(--e-global-color-astglobalcolor1);
			text-transform: uppercase;
			letter-spacing: 3px;
		}

		.elementor-554 .elementor-element.elementor-element-5354e17 {
			text-align: center;
		}

		.elementor-554 .elementor-element.elementor-element-5354e17 .elementor-heading-title {
			font-size: 64px;
		}

		.elementor-554 .elementor-element.elementor-element-bf54590 {
			text-align: center;
		}

		.elementor-554 .elementor-element.elementor-element-cd82c04 .elementor-button .elementor-align-icon-right {
			margin-left: 12px;
		}

		.elementor-554 .elementor-element.elementor-element-cd82c04 .elementor-button .elementor-align-icon-left {
			margin-right: 12px;
		}

		.elementor-554 .elementor-element.elementor-element-cd82c04 .elementor-button:hover,
		.elementor-554 .elementor-element.elementor-element-cd82c04 .elementor-button:focus {
			color: #205B4F;
		}

		.elementor-554 .elementor-element.elementor-element-cd82c04 .elementor-button:hover svg,
		.elementor-554 .elementor-element.elementor-element-cd82c04 .elementor-button:focus svg {
			fill: #205B4F;
		}

		.elementor-554 .elementor-element.elementor-element-cd82c04 .elementor-button {
			box-shadow: 0px 16px 24px -8px rgba(31.999999999999993, 90.99999999999993, 78.99999999999991, 0.26);
		}

		.elementor-554 .elementor-element.elementor-element-272e1e1:not(.elementor-motion-effects-element-type-background),
		.elementor-554 .elementor-element.elementor-element-272e1e1>.elementor-motion-effects-container>.elementor-motion-effects-layer {
			background-image: url("<?php echo get_template_directory_uri(); ?>/assets/landing4/wp-content/uploads/2021/08/lotus-spa-template-homepage-services-section-img-bg.jpg");
			background-position: center center;
			background-repeat: no-repeat;
			background-size: cover;
		}

		.elementor-554 .elementor-element.elementor-element-272e1e1 {
			transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
			padding: 120px 40px 0px 40px;
		}

		.elementor-554 .elementor-element.elementor-element-272e1e1>.elementor-background-overlay {
			transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
		}

		.elementor-554 .elementor-element.elementor-element-c67db83>.elementor-widget-wrap>.elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute) {
			margin-bottom: 16px;
		}

		.elementor-554 .elementor-element.elementor-element-5e023f4 {
			text-align: center;
		}

		.elementor-554 .elementor-element.elementor-element-5e023f4 .elementor-heading-title {
			color: #FFFFFF;
			text-transform: uppercase;
			letter-spacing: 3px;
		}

		.elementor-554 .elementor-element.elementor-element-5e023f4>.elementor-widget-container {
			margin: 0px 0px 16px 0px;
		}

		.elementor-554 .elementor-element.elementor-element-ff4b9f9 {
			text-align: center;
		}

		.elementor-554 .elementor-element.elementor-element-ff4b9f9 .elementor-heading-title {
			color: #ffffff;
		}

		.elementor-554 .elementor-element.elementor-element-21a63e2 {
			text-align: center;
			color: #f6f5f4;
		}

		.elementor-554 .elementor-element.elementor-element-21a63e2>.elementor-widget-container {
			padding: 0% 29% 0% 29%;
		}

		.elementor-554 .elementor-element.elementor-element-2e9c0ed {
			border-style: solid;
			border-width: 0px 1px 0px 0px;
			border-color: #FFFFFF1A;
			transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
			margin-top: 16px;
			margin-bottom: 0px;
		}

		.elementor-554 .elementor-element.elementor-element-2e9c0ed>.elementor-background-overlay {
			transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
		}

		.elementor-554 .elementor-element.elementor-element-bc43aae>.elementor-element-populated {
			border-style: solid;
			border-width: 1px 0px 0px 1px;
			border-color: #FFFFFF1A;
			transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
			padding: 40px 40px 40px 40px;
		}

		.elementor-554 .elementor-element.elementor-element-bc43aae>.elementor-element-populated>.elementor-background-overlay {
			transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
		}

		.elementor-554 .elementor-element.elementor-element-9772aa0 .elementor-heading-title {
			color: #FFFFFF;
			text-transform: uppercase;
			letter-spacing: 3px;
		}

		.elementor-554 .elementor-element.elementor-element-9772aa0>.elementor-widget-container {
			margin: 0px 0px 16px 0px;
		}

		.elementor-554 .elementor-element.elementor-element-1d1aae2 .elementor-heading-title {
			color: #ffffff;
		}

		.elementor-554 .elementor-element.elementor-element-bb61847 {
			color: #FFFFFF;
		}

		.elementor-554 .elementor-element.elementor-element-bb61847>.elementor-widget-container {
			margin: 0px 0px -8px 0px;
			padding: 0px 0px 0px 0px;
		}

		.elementor-554 .elementor-element.elementor-element-3dd1c83 .elementor-heading-title {
			color: #ffffff;
			font-weight: 600;
		}

		.elementor-554 .elementor-element.elementor-element-c50b868 .elementor-button .elementor-align-icon-right {
			margin-left: 8px;
		}

		.elementor-554 .elementor-element.elementor-element-c50b868 .elementor-button .elementor-align-icon-left {
			margin-right: 8px;
		}

		.elementor-554 .elementor-element.elementor-element-c50b868 .elementor-button {
			fill: #FFFFFFB0;
			color: #FFFFFFB0;
			background-color: #00000000;
			border-style: solid;
			border-width: 0px 0px 0px 0px;
			padding: 0px 0px 0px 0px;
		}

		.elementor-554 .elementor-element.elementor-element-c50b868 .elementor-button:hover,
		.elementor-554 .elementor-element.elementor-element-c50b868 .elementor-button:focus {
			color: #FFFFFF;
		}

		.elementor-554 .elementor-element.elementor-element-c50b868 .elementor-button:hover svg,
		.elementor-554 .elementor-element.elementor-element-c50b868 .elementor-button:focus svg {
			fill: #FFFFFF;
		}

		.elementor-554 .elementor-element.elementor-element-c50b868>.elementor-widget-container {
			margin: 16px 0px 0px 0px;
		}

		.elementor-554 .elementor-element.elementor-element-bb82be9>.elementor-element-populated {
			border-style: solid;
			border-width: 1px 0px 0px 1px;
			border-color: #FFFFFF1A;
			transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
			padding: 40px 40px 40px 40px;
		}

		.elementor-554 .elementor-element.elementor-element-bb82be9>.elementor-element-populated>.elementor-background-overlay {
			transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
		}

		.elementor-554 .elementor-element.elementor-element-8603a3a .elementor-heading-title {
			color: #FFFFFF;
			text-transform: uppercase;
			letter-spacing: 3px;
		}

		.elementor-554 .elementor-element.elementor-element-8603a3a>.elementor-widget-container {
			margin: 0px 0px 16px 0px;
		}

		.elementor-554 .elementor-element.elementor-element-bf77970 .elementor-heading-title {
			color: #ffffff;
		}

		.elementor-554 .elementor-element.elementor-element-9c74914 {
			color: #FFFFFF;
		}

		.elementor-554 .elementor-element.elementor-element-9c74914>.elementor-widget-container {
			margin: 0px 0px -8px 0px;
			padding: 0px 0px 0px 0px;
		}

		.elementor-554 .elementor-element.elementor-element-3849523 .elementor-heading-title {
			color: #ffffff;
			font-weight: 600;
		}

		.elementor-554 .elementor-element.elementor-element-edae9c9 .elementor-button .elementor-align-icon-right {
			margin-left: 8px;
		}

		.elementor-554 .elementor-element.elementor-element-edae9c9 .elementor-button .elementor-align-icon-left {
			margin-right: 8px;
		}

		.elementor-554 .elementor-element.elementor-element-edae9c9 .elementor-button {
			fill: #FFFFFFB0;
			color: #FFFFFFB0;
			background-color: #00000000;
			border-style: solid;
			border-width: 0px 0px 0px 0px;
			padding: 0px 0px 0px 0px;
		}

		.elementor-554 .elementor-element.elementor-element-edae9c9 .elementor-button:hover,
		.elementor-554 .elementor-element.elementor-element-edae9c9 .elementor-button:focus {
			color: #FFFFFF;
		}

		.elementor-554 .elementor-element.elementor-element-edae9c9 .elementor-button:hover svg,
		.elementor-554 .elementor-element.elementor-element-edae9c9 .elementor-button:focus svg {
			fill: #FFFFFF;
		}

		.elementor-554 .elementor-element.elementor-element-edae9c9>.elementor-widget-container {
			margin: 16px 0px 0px 0px;
		}

		.elementor-554 .elementor-element.elementor-element-234dcdf {
			border-style: solid;
			border-width: 0px 1px 0px 0px;
			border-color: #FFFFFF1A;
			transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
		}

		.elementor-554 .elementor-element.elementor-element-234dcdf>.elementor-background-overlay {
			transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
		}

		.elementor-554 .elementor-element.elementor-element-e2948a0>.elementor-element-populated {
			border-style: solid;
			border-width: 1px 0px 0px 1px;
			border-color: #FFFFFF1A;
			transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
			padding: 40px 40px 40px 40px;
		}

		.elementor-554 .elementor-element.elementor-element-e2948a0>.elementor-element-populated>.elementor-background-overlay {
			transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
		}

		.elementor-554 .elementor-element.elementor-element-4f582d1 .elementor-heading-title {
			color: #FFFFFF;
			text-transform: uppercase;
			letter-spacing: 3px;
		}

		.elementor-554 .elementor-element.elementor-element-4f582d1>.elementor-widget-container {
			margin: 0px 0px 16px 0px;
		}

		.elementor-554 .elementor-element.elementor-element-a74b872 .elementor-heading-title {
			color: #ffffff;
		}

		.elementor-554 .elementor-element.elementor-element-59cddbe {
			color: #FFFFFF;
		}

		.elementor-554 .elementor-element.elementor-element-59cddbe>.elementor-widget-container {
			margin: 0px 0px -8px 0px;
			padding: 0px 0px 0px 0px;
		}

		.elementor-554 .elementor-element.elementor-element-f8b7f20 .elementor-heading-title {
			color: #ffffff;
			font-weight: 600;
		}

		.elementor-554 .elementor-element.elementor-element-c1f1b6c .elementor-button .elementor-align-icon-right {
			margin-left: 8px;
		}

		.elementor-554 .elementor-element.elementor-element-c1f1b6c .elementor-button .elementor-align-icon-left {
			margin-right: 8px;
		}

		.elementor-554 .elementor-element.elementor-element-c1f1b6c .elementor-button {
			fill: #FFFFFFB0;
			color: #FFFFFFB0;
			background-color: #00000000;
			border-style: solid;
			border-width: 0px 0px 0px 0px;
			padding: 0px 0px 0px 0px;
		}

		.elementor-554 .elementor-element.elementor-element-c1f1b6c .elementor-button:hover,
		.elementor-554 .elementor-element.elementor-element-c1f1b6c .elementor-button:focus {
			color: #FFFFFF;
		}

		.elementor-554 .elementor-element.elementor-element-c1f1b6c .elementor-button:hover svg,
		.elementor-554 .elementor-element.elementor-element-c1f1b6c .elementor-button:focus svg {
			fill: #FFFFFF;
		}

		.elementor-554 .elementor-element.elementor-element-c1f1b6c>.elementor-widget-container {
			margin: 16px 0px 0px 0px;
		}

		.elementor-554 .elementor-element.elementor-element-a07d273>.elementor-element-populated {
			border-style: solid;
			border-width: 1px 0px 0px 1px;
			border-color: #FFFFFF1A;
			transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
			padding: 40px 40px 40px 40px;
		}

		.elementor-554 .elementor-element.elementor-element-a07d273>.elementor-element-populated>.elementor-background-overlay {
			transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
		}

		.elementor-554 .elementor-element.elementor-element-5e6c327 .elementor-heading-title {
			color: #FFFFFF;
			text-transform: uppercase;
			letter-spacing: 3px;
		}

		.elementor-554 .elementor-element.elementor-element-5e6c327>.elementor-widget-container {
			margin: 0px 0px 16px 0px;
		}

		.elementor-554 .elementor-element.elementor-element-a4c094b .elementor-heading-title {
			color: #ffffff;
		}

		.elementor-554 .elementor-element.elementor-element-0e6709e {
			color: #FFFFFF;
		}

		.elementor-554 .elementor-element.elementor-element-0e6709e>.elementor-widget-container {
			margin: 0px 0px -8px 0px;
			padding: 0px 0px 0px 0px;
		}

		.elementor-554 .elementor-element.elementor-element-e6e0869 .elementor-heading-title {
			color: #ffffff;
			font-weight: 600;
		}

		.elementor-554 .elementor-element.elementor-element-0b0535c .elementor-button .elementor-align-icon-right {
			margin-left: 8px;
		}

		.elementor-554 .elementor-element.elementor-element-0b0535c .elementor-button .elementor-align-icon-left {
			margin-right: 8px;
		}

		.elementor-554 .elementor-element.elementor-element-0b0535c .elementor-button {
			fill: #FFFFFFB0;
			color: #FFFFFFB0;
			background-color: #00000000;
			border-style: solid;
			border-width: 0px 0px 0px 0px;
			padding: 0px 0px 0px 0px;
		}

		.elementor-554 .elementor-element.elementor-element-0b0535c .elementor-button:hover,
		.elementor-554 .elementor-element.elementor-element-0b0535c .elementor-button:focus {
			color: #FFFFFF;
		}

		.elementor-554 .elementor-element.elementor-element-0b0535c .elementor-button:hover svg,
		.elementor-554 .elementor-element.elementor-element-0b0535c .elementor-button:focus svg {
			fill: #FFFFFF;
		}

		.elementor-554 .elementor-element.elementor-element-0b0535c>.elementor-widget-container {
			margin: 16px 0px 0px 0px;
		}

		.elementor-554 .elementor-element.elementor-element-5bad6d2>.elementor-container {
			max-width: 800px;
		}

		.elementor-554 .elementor-element.elementor-element-5bad6d2:not(.elementor-motion-effects-element-type-background),
		.elementor-554 .elementor-element.elementor-element-5bad6d2>.elementor-motion-effects-container>.elementor-motion-effects-layer {
			background-color: var(--e-global-color-astglobalcolor4);
		}

		.elementor-554 .elementor-element.elementor-element-5bad6d2 {
			transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
			padding: 120px 40px 120px 40px;
		}

		.elementor-554 .elementor-element.elementor-element-5bad6d2>.elementor-background-overlay {
			transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
		}

		.elementor-554 .elementor-element.elementor-element-b530b5d .elementor-icon-wrapper {
			text-align: center;
		}

		.elementor-554 .elementor-element.elementor-element-b530b5d .elementor-icon {
			font-size: 24px;
		}

		.elementor-554 .elementor-element.elementor-element-5e4b235 .elementor-testimonial-wrapper {
			text-align: center;
		}

		.elementor-554 .elementor-element.elementor-element-5e4b235 .elementor-testimonial-content {
			color: var(--e-global-color-astglobalcolor2);
			font-size: 24px;
			font-weight: 600;
		}

		.elementor-554 .elementor-element.elementor-element-5e4b235 .elementor-testimonial-wrapper .elementor-testimonial-image img {
			width: 40px;
			height: 40px;
		}

		.elementor-554 .elementor-element.elementor-element-5e4b235 .elementor-testimonial-name {
			color: var(--e-global-color-astglobalcolor2);
			font-size: 13px;
			font-weight: 600;
			text-transform: uppercase;
			letter-spacing: 3px;
		}

		.elementor-554 .elementor-element.elementor-element-5e4b235 .elementor-testimonial-job {
			font-size: 14px;
			line-height: 1.4em;
		}

		.elementor-554 .elementor-element.elementor-element-4ad28cb:not(.elementor-motion-effects-element-type-background),
		.elementor-554 .elementor-element.elementor-element-4ad28cb>.elementor-motion-effects-container>.elementor-motion-effects-layer {
			background-color: var(--e-global-color-astglobalcolor5);
		}

		.elementor-554 .elementor-element.elementor-element-4ad28cb {
			transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
			padding: 120px 40px 120px 40px;
		}

		.elementor-554 .elementor-element.elementor-element-4ad28cb>.elementor-background-overlay {
			transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
		}

		.elementor-554 .elementor-element.elementor-element-36707ee>.elementor-element-populated {
			padding: 0px 80px 0px 0px;
		}

		.elementor-554 .elementor-element.elementor-element-cafa816 {
			text-align: left;
		}

		.elementor-554 .elementor-element.elementor-element-cafa816 .elementor-heading-title {
			color: var(--e-global-color-astglobalcolor1);
			text-transform: uppercase;
			letter-spacing: 3px;
		}

		.elementor-554 .elementor-element.elementor-element-a99906e.elementor-view-stacked .elementor-icon {
			background-color: var(--e-global-color-astglobalcolor1);
		}

		.elementor-554 .elementor-element.elementor-element-a99906e.elementor-view-framed .elementor-icon,
		.elementor-554 .elementor-element.elementor-element-a99906e.elementor-view-default .elementor-icon {
			fill: var(--e-global-color-astglobalcolor1);
			color: var(--e-global-color-astglobalcolor1);
			border-color: var(--e-global-color-astglobalcolor1);
		}

		.elementor-554 .elementor-element.elementor-element-a99906e {
			--icon-box-icon-margin: 12px;
		}

		.elementor-554 .elementor-element.elementor-element-a99906e .elementor-icon {
			font-size: 14px;
		}

		.elementor-554 .elementor-element.elementor-element-a99906e .elementor-icon-box-title {
			margin-bottom: 8px;
		}

		.elementor-554 .elementor-element.elementor-element-a99906e .elementor-icon-box-title,
		.elementor-554 .elementor-element.elementor-element-a99906e .elementor-icon-box-title a {
			text-transform: uppercase;
			letter-spacing: 3px;
		}

		.elementor-554 .elementor-element.elementor-element-dc58d52 {
			--divider-border-style: solid;
			--divider-color: #e2e1df;
			--divider-border-width: 1px;
		}

		.elementor-554 .elementor-element.elementor-element-dc58d52 .elementor-divider-separator {
			width: 100%;
		}

		.elementor-554 .elementor-element.elementor-element-dc58d52 .elementor-divider {
			padding-top: 16px;
			padding-bottom: 16px;
		}

		.elementor-554 .elementor-element.elementor-element-7f23fe1.elementor-view-stacked .elementor-icon {
			background-color: var(--e-global-color-astglobalcolor1);
		}

		.elementor-554 .elementor-element.elementor-element-7f23fe1.elementor-view-framed .elementor-icon,
		.elementor-554 .elementor-element.elementor-element-7f23fe1.elementor-view-default .elementor-icon {
			fill: var(--e-global-color-astglobalcolor1);
			color: var(--e-global-color-astglobalcolor1);
			border-color: var(--e-global-color-astglobalcolor1);
		}

		.elementor-554 .elementor-element.elementor-element-7f23fe1 {
			--icon-box-icon-margin: 12px;
			width: auto;
			max-width: auto;
		}

		.elementor-554 .elementor-element.elementor-element-7f23fe1 .elementor-icon {
			font-size: 14px;
		}

		.elementor-554 .elementor-element.elementor-element-7f23fe1 .elementor-icon-box-title {
			margin-bottom: 8px;
		}

		.elementor-554 .elementor-element.elementor-element-7f23fe1 .elementor-icon-box-title,
		.elementor-554 .elementor-element.elementor-element-7f23fe1 .elementor-icon-box-title a {
			text-transform: uppercase;
			letter-spacing: 3px;
		}

		.elementor-554 .elementor-element.elementor-element-8eff3a5.elementor-view-stacked .elementor-icon {
			background-color: var(--e-global-color-astglobalcolor1);
		}

		.elementor-554 .elementor-element.elementor-element-8eff3a5.elementor-view-framed .elementor-icon,
		.elementor-554 .elementor-element.elementor-element-8eff3a5.elementor-view-default .elementor-icon {
			fill: var(--e-global-color-astglobalcolor1);
			color: var(--e-global-color-astglobalcolor1);
			border-color: var(--e-global-color-astglobalcolor1);
		}

		.elementor-554 .elementor-element.elementor-element-8eff3a5 {
			--icon-box-icon-margin: 12px;
			width: auto;
			max-width: auto;
		}

		.elementor-554 .elementor-element.elementor-element-8eff3a5 .elementor-icon {
			font-size: 14px;
		}

		.elementor-554 .elementor-element.elementor-element-8eff3a5 .elementor-icon-box-title {
			margin-bottom: 8px;
		}

		.elementor-554 .elementor-element.elementor-element-8eff3a5 .elementor-icon-box-title,
		.elementor-554 .elementor-element.elementor-element-8eff3a5 .elementor-icon-box-title a {
			text-transform: uppercase;
			letter-spacing: 3px;
		}

		.elementor-554 .elementor-element.elementor-element-8eff3a5>.elementor-widget-container {
			margin: 0px 0px 0px 48px;
			padding: 0px 0px 0px 48px;
			border-style: solid;
			border-width: 0px 0px 0px 1px;
			border-color: #e2e1df;
		}

		.elementor-554 .elementor-element.elementor-element-913decc>.elementor-element-populated {
			padding: 0px 0px 0px 80px;
		}

		.elementor-554 .elementor-element.elementor-element-c056a3b {
			--divider-border-style: solid;
			--divider-color: var(--e-global-color-astglobalcolor1);
			--divider-border-width: 1px;
		}

		.elementor-554 .elementor-element.elementor-element-c056a3b .elementor-divider-separator {
			width: 48px;
		}

		.elementor-554 .elementor-element.elementor-element-c056a3b .elementor-divider {
			padding-top: 8px;
			padding-bottom: 8px;
		}

		@media(max-width:1024px) and (min-width:768px) {
			.elementor-554 .elementor-element.elementor-element-56b24ba {
				width: 100%;
			}

			.elementor-554 .elementor-element.elementor-element-649c48e {
				width: 50%;
			}

			.elementor-554 .elementor-element.elementor-element-c05e8be {
				width: 50%;
			}
		}

		@media(max-width:1024px) {
			.elementor-554 .elementor-element.elementor-element-e57288a>.elementor-container {
				min-height: 60vh;
			}

			.elementor-554 .elementor-element.elementor-element-e57288a:not(.elementor-motion-effects-element-type-background),
			.elementor-554 .elementor-element.elementor-element-e57288a>.elementor-motion-effects-container>.elementor-motion-effects-layer {
				background-position: 33vw 0px;
				background-size: contain;
			}

			.elementor-554 .elementor-element.elementor-element-e57288a {
				padding: 0px 32px 0px 32px;
			}

			.elementor-554 .elementor-element.elementor-element-a5053a3>.elementor-widget-wrap>.elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute) {
				margin-bottom: 16px;
			}

			.elementor-554 .elementor-element.elementor-element-d15881a>.elementor-widget-container {
				margin: 0px 0px 0px 0px;
			}

			.elementor-554 .elementor-element.elementor-element-8311209 {
				font-size: 16px;
			}

			.elementor-554 .elementor-element.elementor-element-8311209>.elementor-widget-container {
				padding: 0px 0px 0px 0px;
			}

			.elementor-554 .elementor-element.elementor-element-3951a16>.elementor-widget-container {
				margin: 0px 0px 0px 0px;
			}

			.elementor-554 .elementor-element.elementor-element-ddd1a38 {
				padding: 80px 32px 80px 32px;
			}

			.elementor-554 .elementor-element.elementor-element-fe795e1 {
				--icon-box-icon-margin: 8px;
			}

			.elementor-554 .elementor-element.elementor-element-fe795e1 .elementor-icon {
				font-size: 24px;
			}

			.elementor-554 .elementor-element.elementor-element-fe795e1 .elementor-icon-box-title {
				margin-bottom: 8px;
			}

			.elementor-554 .elementor-element.elementor-element-918839e {
				--icon-box-icon-margin: 8px;
			}

			.elementor-554 .elementor-element.elementor-element-918839e .elementor-icon {
				font-size: 24px;
			}

			.elementor-554 .elementor-element.elementor-element-918839e .elementor-icon-box-title {
				margin-bottom: 8px;
			}

			.elementor-554 .elementor-element.elementor-element-6b103b4 {
				--icon-box-icon-margin: 8px;
			}

			.elementor-554 .elementor-element.elementor-element-6b103b4 .elementor-icon {
				font-size: 24px;
			}

			.elementor-554 .elementor-element.elementor-element-6b103b4 .elementor-icon-box-title {
				margin-bottom: 8px;
			}

			.elementor-554 .elementor-element.elementor-element-407fcbb:not(.elementor-motion-effects-element-type-background),
			.elementor-554 .elementor-element.elementor-element-407fcbb>.elementor-motion-effects-container>.elementor-motion-effects-layer {
				background-position: center center;
				background-size: cover;
			}

			.elementor-554 .elementor-element.elementor-element-407fcbb {
				padding: 80px 32px 40px 32px;
			}

			.elementor-554 .elementor-element.elementor-element-56b24ba>.elementor-element-populated {
				padding: 0px 80px 48px 0px;
			}

			.elementor-554 .elementor-element.elementor-element-c05e8be>.elementor-element-populated {
				padding: 0px 0px 0px 48px;
			}

			.elementor-554 .elementor-element.elementor-element-36830e0 {
				padding: 80px 32px 80px 32px;
			}

			.elementor-554 .elementor-element.elementor-element-5354e17 .elementor-heading-title {
				font-size: 56px;
			}

			.elementor-554 .elementor-element.elementor-element-272e1e1 {
				padding: 80px 0px 0px 0px;
			}

			.elementor-554 .elementor-element.elementor-element-5e023f4>.elementor-widget-container {
				margin: 0px 0px 0px 0px;
			}

			.elementor-554 .elementor-element.elementor-element-21a63e2>.elementor-widget-container {
				padding: 0px 80px 0px 80px;
			}

			.elementor-554 .elementor-element.elementor-element-9772aa0>.elementor-widget-container {
				margin: 0px 0px 0px 0px;
			}

			.elementor-554 .elementor-element.elementor-element-bb61847>.elementor-widget-container {
				padding: 0px 0px 0px 0px;
			}

			.elementor-554 .elementor-element.elementor-element-8603a3a>.elementor-widget-container {
				margin: 0px 0px 0px 0px;
			}

			.elementor-554 .elementor-element.elementor-element-9c74914>.elementor-widget-container {
				padding: 0px 0px 0px 0px;
			}

			.elementor-554 .elementor-element.elementor-element-4f582d1>.elementor-widget-container {
				margin: 0px 0px 0px 0px;
			}

			.elementor-554 .elementor-element.elementor-element-59cddbe>.elementor-widget-container {
				padding: 0px 0px 0px 0px;
			}

			.elementor-554 .elementor-element.elementor-element-5e6c327>.elementor-widget-container {
				margin: 0px 0px 0px 0px;
			}

			.elementor-554 .elementor-element.elementor-element-0e6709e>.elementor-widget-container {
				padding: 0px 0px 0px 0px;
			}

			.elementor-554 .elementor-element.elementor-element-5bad6d2 {
				padding: 80px 32px 80px 32px;
			}

			.elementor-554 .elementor-element.elementor-element-b530b5d .elementor-icon {
				font-size: 20px;
			}

			.elementor-554 .elementor-element.elementor-element-5e4b235 .elementor-testimonial-content {
				font-size: 18px;
			}

			.elementor-554 .elementor-element.elementor-element-4ad28cb {
				padding: 80px 32px 80px 32px;
			}

			.elementor-554 .elementor-element.elementor-element-36707ee>.elementor-element-populated {
				padding: 0px 48px 0px 0px;
			}

			.elementor-554 .elementor-element.elementor-element-dc58d52 .elementor-divider {
				padding-top: 0px;
				padding-bottom: 0px;
			}

			.elementor-554 .elementor-element.elementor-element-7f23fe1 {
				width: 100%;
				max-width: 100%;
			}

			.elementor-554 .elementor-element.elementor-element-8eff3a5>.elementor-widget-container {
				margin: 16px 0px 0px 0px;
				padding: 16px 0px 0px 0px;
				border-width: 1px 0px 0px 0px;
			}

			.elementor-554 .elementor-element.elementor-element-8eff3a5 {
				width: 100%;
				max-width: 100%;
			}

			.elementor-554 .elementor-element.elementor-element-913decc>.elementor-element-populated {
				padding: 0px 0px 0px 40px;
			}
		}

		@media(max-width:767px) {
			.elementor-554 .elementor-element.elementor-element-e57288a>.elementor-container {
				min-height: 100vh;
			}

			.elementor-554 .elementor-element.elementor-element-e57288a:not(.elementor-motion-effects-element-type-background),
			.elementor-554 .elementor-element.elementor-element-e57288a>.elementor-motion-effects-container>.elementor-motion-effects-layer {
				background-position: bottom center;
			}

			.elementor-554 .elementor-element.elementor-element-e57288a {
				padding: 0px 24px 0px 24px;
			}

			.elementor-554 .elementor-element.elementor-element-a5053a3>.elementor-element-populated {
				margin: 0px 0px 0px 0px;
				--e-column-margin-right: 0px;
				--e-column-margin-left: 0px;
				padding: 88px 0px 280px 0px;
			}

			.elementor-554 .elementor-element.elementor-element-d15881a {
				text-align: center;
			}

			.elementor-554 .elementor-element.elementor-element-cfde280 {
				text-align: center;
			}

			.elementor-554 .elementor-element.elementor-element-8311209 {
				text-align: center;
			}

			.elementor-554 .elementor-element.elementor-element-ddd1a38 {
				padding: 64px 24px 64px 24px;
			}

			.elementor-554 .elementor-element.elementor-element-c20d8af>.elementor-widget-container {
				padding: 0px 0px 0px 0px;
			}

			.elementor-554 .elementor-element.elementor-element-fe795e1 .elementor-icon-box-wrapper {
				text-align: center;
			}

			.elementor-554 .elementor-element.elementor-element-fe795e1>.elementor-widget-container {
				margin: 16px 0px 16px 0px;
			}

			.elementor-554 .elementor-element.elementor-element-fe795e1 {
				width: 100%;
				max-width: 100%;
			}

			.elementor-554 .elementor-element.elementor-element-918839e .elementor-icon-box-wrapper {
				text-align: center;
			}

			.elementor-554 .elementor-element.elementor-element-918839e>.elementor-widget-container {
				margin: 16px 0px 16px 0px;
			}

			.elementor-554 .elementor-element.elementor-element-918839e {
				width: 100%;
				max-width: 100%;
			}

			.elementor-554 .elementor-element.elementor-element-6b103b4 .elementor-icon-box-wrapper {
				text-align: center;
			}

			.elementor-554 .elementor-element.elementor-element-6b103b4>.elementor-widget-container {
				margin: 16px 0px 16px 0px;
			}

			.elementor-554 .elementor-element.elementor-element-6b103b4 {
				width: 100%;
				max-width: 100%;
			}

			.elementor-554 .elementor-element.elementor-element-407fcbb {
				padding: 64px 24px 64px 24px;
			}

			.elementor-554 .elementor-element.elementor-element-56b24ba>.elementor-element-populated {
				padding: 0px 0px 40px 0px;
			}

			.elementor-554 .elementor-element.elementor-element-c05e8be>.elementor-element-populated {
				padding: 40px 0px 0px 0px;
			}

			.elementor-554 .elementor-element.elementor-element-36830e0 {
				padding: 64px 24px 64px 24px;
			}

			.elementor-554 .elementor-element.elementor-element-5354e17 .elementor-heading-title {
				font-size: 32px;
			}

			.elementor-554 .elementor-element.elementor-element-272e1e1 {
				padding: 64px 0px 64px 0px;
			}

			.elementor-554 .elementor-element.elementor-element-5e023f4 {
				text-align: center;
			}

			.elementor-554 .elementor-element.elementor-element-ff4b9f9 {
				text-align: center;
			}

			.elementor-554 .elementor-element.elementor-element-21a63e2>.elementor-widget-container {
				padding: 0px 24px 0px 24px;
			}

			.elementor-554 .elementor-element.elementor-element-bc43aae>.elementor-element-populated {
				padding: 24px 24px 24px 24px;
			}

			.elementor-554 .elementor-element.elementor-element-9772aa0 {
				text-align: center;
			}

			.elementor-554 .elementor-element.elementor-element-1d1aae2 {
				text-align: center;
			}

			.elementor-554 .elementor-element.elementor-element-bb61847 {
				text-align: center;
			}

			.elementor-554 .elementor-element.elementor-element-3dd1c83 {
				text-align: center;
			}

			.elementor-554 .elementor-element.elementor-element-bb82be9>.elementor-element-populated {
				padding: 24px 24px 24px 24px;
			}

			.elementor-554 .elementor-element.elementor-element-8603a3a {
				text-align: center;
			}

			.elementor-554 .elementor-element.elementor-element-bf77970 {
				text-align: center;
			}

			.elementor-554 .elementor-element.elementor-element-9c74914 {
				text-align: center;
			}

			.elementor-554 .elementor-element.elementor-element-3849523 {
				text-align: center;
			}

			.elementor-554 .elementor-element.elementor-element-e2948a0>.elementor-element-populated {
				padding: 24px 24px 24px 24px;
			}

			.elementor-554 .elementor-element.elementor-element-4f582d1 {
				text-align: center;
			}

			.elementor-554 .elementor-element.elementor-element-a74b872 {
				text-align: center;
			}

			.elementor-554 .elementor-element.elementor-element-59cddbe {
				text-align: center;
			}

			.elementor-554 .elementor-element.elementor-element-f8b7f20 {
				text-align: center;
			}

			.elementor-554 .elementor-element.elementor-element-a07d273>.elementor-element-populated {
				padding: 24px 24px 24px 24px;
			}

			.elementor-554 .elementor-element.elementor-element-5e6c327 {
				text-align: center;
			}

			.elementor-554 .elementor-element.elementor-element-a4c094b {
				text-align: center;
			}

			.elementor-554 .elementor-element.elementor-element-0e6709e {
				text-align: center;
			}

			.elementor-554 .elementor-element.elementor-element-e6e0869 {
				text-align: center;
			}

			.elementor-554 .elementor-element.elementor-element-5bad6d2 {
				padding: 64px 24px 64px 24px;
			}

			.elementor-554 .elementor-element.elementor-element-b530b5d .elementor-icon {
				font-size: 18px;
			}

			.elementor-554 .elementor-element.elementor-element-5e4b235 .elementor-testimonial-content {
				font-size: 16px;
			}

			.elementor-554 .elementor-element.elementor-element-4ad28cb {
				padding: 64px 24px 64px 24px;
			}

			.elementor-554 .elementor-element.elementor-element-36707ee>.elementor-element-populated {
				padding: 0px 0px 0px 0px;
			}

			.elementor-554 .elementor-element.elementor-element-a99906e {
				--icon-box-icon-margin: 8px;
			}

			.elementor-554 .elementor-element.elementor-element-a99906e .elementor-icon-box-wrapper {
				text-align: left;
			}

			.elementor-554 .elementor-element.elementor-element-a99906e .elementor-icon-box-title {
				margin-bottom: 4px;
			}

			.elementor-554 .elementor-element.elementor-element-dc58d52 .elementor-divider {
				padding-top: 0px;
				padding-bottom: 0px;
			}

			.elementor-554 .elementor-element.elementor-element-7f23fe1 {
				--icon-box-icon-margin: 8px;
			}

			.elementor-554 .elementor-element.elementor-element-7f23fe1 .elementor-icon-box-wrapper {
				text-align: left;
			}

			.elementor-554 .elementor-element.elementor-element-7f23fe1 .elementor-icon-box-title {
				margin-bottom: 4px;
			}

			.elementor-554 .elementor-element.elementor-element-8eff3a5 {
				--icon-box-icon-margin: 8px;
			}

			.elementor-554 .elementor-element.elementor-element-8eff3a5 .elementor-icon-box-wrapper {
				text-align: left;
			}

			.elementor-554 .elementor-element.elementor-element-8eff3a5 .elementor-icon-box-title {
				margin-bottom: 4px;
			}

			.elementor-554 .elementor-element.elementor-element-913decc>.elementor-element-populated {
				padding: 40px 0px 0px 0px;
			}
		}
	</style>
	<link rel="stylesheet" id="elementor-pro-css"
		href="<?php echo get_template_directory_uri(); ?>/assets/landing4/wp-content/plugins/pro-elements/assets/css/frontend-lite.min.css?ver=3.8.0" media="all">
	<link rel="stylesheet" id="font-awesome-5-all-css"
		href="<?php echo get_template_directory_uri(); ?>/assets/landing4/wp-content/plugins/elementor/assets/lib/font-awesome/css/all.min.css?ver=3.10.1" media="all">
	<link rel="stylesheet" id="font-awesome-4-shim-css"
		href="<?php echo get_template_directory_uri(); ?>/assets/landing4/wp-content/plugins/elementor/assets/lib/font-awesome/css/v4-shims.min.css?ver=3.10.1" media="all">
	<link rel="stylesheet" id="google-fonts-1-css"
		href="https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=swap&#038;ver=6.1.1"
		media="all">
	<link rel="stylesheet" id="elementor-icons-shared-0-css"
		href="<?php echo get_template_directory_uri(); ?>/assets/landing4/wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min.css?ver=5.15.3" media="all">
	<link rel="stylesheet" id="elementor-icons-fa-solid-css"
		href="<?php echo get_template_directory_uri(); ?>/assets/landing4/wp-content/plugins/elementor/assets/lib/font-awesome/css/solid.min.css?ver=5.15.3" media="all">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<!--[if IE]>
<script src='https://wpelementor.local/wp-content/themes/astra/assets/js/minified/flexibility.min.js?ver=4.0.2' id='astra-flexibility-js'></script>
<script id='astra-flexibility-js-after'>
flexibility(document.documentElement);
</script>
<![endif]-->
	<script src="<?php echo get_template_directory_uri(); ?>/assets/landing4/wp-content/plugins/elementor/assets/lib/font-awesome/js/v4-shims.min.js?ver=3.10.1"
		id="font-awesome-4-shim-js"></script>
	<link rel="https://api.w.org/" href="<?php echo get_template_directory_uri(); ?>/assets/landing4/wp-json/index.html">
	<link rel="alternate" type="application/json" href="<?php echo get_template_directory_uri(); ?>/assets/landing4/wp-json/wp/v2/pages/554/index.html">
	<link rel="EditURI" type="application/rsd+xml" title="RSD" href="./xmlrpc.php?rsd">
	<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="<?php echo get_template_directory_uri(); ?>/assets/landing4/wp-includes/wlwmanifest.xml">
	<meta name="generator" content="WordPress 6.1.1">
	<link rel="canonical" href="./index.html">
	<link rel="shortlink" href="./index.html">
	<link rel="alternate" type="application/json+oembed"
		href="<?php echo get_template_directory_uri(); ?>/assets/landing4/wp-json/oembed/1.0/embed/index.html?url=https%3A%2F%2F%2F">
	<link rel="alternate" type="text/xml+oembed"
		href="<?php echo get_template_directory_uri(); ?>/assets/landing4/wp-json/oembed/1.0/embed/index.html?url=https%3A%2F%2F%2F#038;format=xml">
</head>

<body itemtype="https://schema.org/WebPage" itemscope="itemscope"
	class="home page-template-default page page-id-554 wp-custom-logo ast-desktop ast-page-builder-template ast-no-sidebar astra-4.0.2 ast-single-post ast-replace-site-logo-transparent ast-inherit-site-logo-transparent ast-theme-transparent-header ast-hfb-header ast-full-width-primary-header elementor-default elementor-kit-553 elementor-page elementor-page-554">
	<svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 0 0" width="0" height="0" focusable="false" role="none"
		style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
		<defs>
			<filter id="wp-duotone-dark-grayscale">
				<fecolormatrix color-interpolation-filters="sRGB" type="matrix"
					values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 ">
				</fecolormatrix>
				<fecomponenttransfer color-interpolation-filters="sRGB">
					<fefuncr type="table" tablevalues="0 0.49803921568627"></fefuncr>
					<fefuncg type="table" tablevalues="0 0.49803921568627"></fefuncg>
					<fefuncb type="table" tablevalues="0 0.49803921568627"></fefuncb>
					<fefunca type="table" tablevalues="1 1"></fefunca>
				</fecomponenttransfer>
				<fecomposite in2="SourceGraphic" operator="in"></fecomposite>
			</filter>
		</defs>
	</svg><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 0 0" width="0" height="0" focusable="false" role="none"
		style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
		<defs>
			<filter id="wp-duotone-grayscale">
				<fecolormatrix color-interpolation-filters="sRGB" type="matrix"
					values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 ">
				</fecolormatrix>
				<fecomponenttransfer color-interpolation-filters="sRGB">
					<fefuncr type="table" tablevalues="0 1"></fefuncr>
					<fefuncg type="table" tablevalues="0 1"></fefuncg>
					<fefuncb type="table" tablevalues="0 1"></fefuncb>
					<fefunca type="table" tablevalues="1 1"></fefunca>
				</fecomponenttransfer>
				<fecomposite in2="SourceGraphic" operator="in"></fecomposite>
			</filter>
		</defs>
	</svg><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 0 0" width="0" height="0" focusable="false" role="none"
		style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
		<defs>
			<filter id="wp-duotone-purple-yellow">
				<fecolormatrix color-interpolation-filters="sRGB" type="matrix"
					values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 ">
				</fecolormatrix>
				<fecomponenttransfer color-interpolation-filters="sRGB">
					<fefuncr type="table" tablevalues="0.54901960784314 0.98823529411765"></fefuncr>
					<fefuncg type="table" tablevalues="0 1"></fefuncg>
					<fefuncb type="table" tablevalues="0.71764705882353 0.25490196078431"></fefuncb>
					<fefunca type="table" tablevalues="1 1"></fefunca>
				</fecomponenttransfer>
				<fecomposite in2="SourceGraphic" operator="in"></fecomposite>
			</filter>
		</defs>
	</svg><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 0 0" width="0" height="0" focusable="false" role="none"
		style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
		<defs>
			<filter id="wp-duotone-blue-red">
				<fecolormatrix color-interpolation-filters="sRGB" type="matrix"
					values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 ">
				</fecolormatrix>
				<fecomponenttransfer color-interpolation-filters="sRGB">
					<fefuncr type="table" tablevalues="0 1"></fefuncr>
					<fefuncg type="table" tablevalues="0 0.27843137254902"></fefuncg>
					<fefuncb type="table" tablevalues="0.5921568627451 0.27843137254902"></fefuncb>
					<fefunca type="table" tablevalues="1 1"></fefunca>
				</fecomponenttransfer>
				<fecomposite in2="SourceGraphic" operator="in"></fecomposite>
			</filter>
		</defs>
	</svg><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 0 0" width="0" height="0" focusable="false" role="none"
		style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
		<defs>
			<filter id="wp-duotone-midnight">
				<fecolormatrix color-interpolation-filters="sRGB" type="matrix"
					values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 ">
				</fecolormatrix>
				<fecomponenttransfer color-interpolation-filters="sRGB">
					<fefuncr type="table" tablevalues="0 0"></fefuncr>
					<fefuncg type="table" tablevalues="0 0.64705882352941"></fefuncg>
					<fefuncb type="table" tablevalues="0 1"></fefuncb>
					<fefunca type="table" tablevalues="1 1"></fefunca>
				</fecomponenttransfer>
				<fecomposite in2="SourceGraphic" operator="in"></fecomposite>
			</filter>
		</defs>
	</svg><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 0 0" width="0" height="0" focusable="false" role="none"
		style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
		<defs>
			<filter id="wp-duotone-magenta-yellow">
				<fecolormatrix color-interpolation-filters="sRGB" type="matrix"
					values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 ">
				</fecolormatrix>
				<fecomponenttransfer color-interpolation-filters="sRGB">
					<fefuncr type="table" tablevalues="0.78039215686275 1"></fefuncr>
					<fefuncg type="table" tablevalues="0 0.94901960784314"></fefuncg>
					<fefuncb type="table" tablevalues="0.35294117647059 0.47058823529412"></fefuncb>
					<fefunca type="table" tablevalues="1 1"></fefunca>
				</fecomponenttransfer>
				<fecomposite in2="SourceGraphic" operator="in"></fecomposite>
			</filter>
		</defs>
	</svg><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 0 0" width="0" height="0" focusable="false" role="none"
		style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
		<defs>
			<filter id="wp-duotone-purple-green">
				<fecolormatrix color-interpolation-filters="sRGB" type="matrix"
					values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 ">
				</fecolormatrix>
				<fecomponenttransfer color-interpolation-filters="sRGB">
					<fefuncr type="table" tablevalues="0.65098039215686 0.40392156862745"></fefuncr>
					<fefuncg type="table" tablevalues="0 1"></fefuncg>
					<fefuncb type="table" tablevalues="0.44705882352941 0.4"></fefuncb>
					<fefunca type="table" tablevalues="1 1"></fefunca>
				</fecomponenttransfer>
				<fecomposite in2="SourceGraphic" operator="in"></fecomposite>
			</filter>
		</defs>
	</svg><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 0 0" width="0" height="0" focusable="false" role="none"
		style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
		<defs>
			<filter id="wp-duotone-blue-orange">
				<fecolormatrix color-interpolation-filters="sRGB" type="matrix"
					values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 ">
				</fecolormatrix>
				<fecomponenttransfer color-interpolation-filters="sRGB">
					<fefuncr type="table" tablevalues="0.098039215686275 1"></fefuncr>
					<fefuncg type="table" tablevalues="0 0.66274509803922"></fefuncg>
					<fefuncb type="table" tablevalues="0.84705882352941 0.41960784313725"></fefuncb>
					<fefunca type="table" tablevalues="1 1"></fefunca>
				</fecomponenttransfer>
				<fecomposite in2="SourceGraphic" operator="in"></fecomposite>
			</filter>
		</defs>
	</svg>
	<a class="skip-link screen-reader-text" href="#content" role="link" title="Skip to content">
		Skip to content</a>

	<div class="hfeed site" id="page">
		<header
			class="site-header header-main-layout-1 ast-primary-menu-enabled ast-logo-title-inline ast-hide-custom-menu-mobile ast-builder-menu-toggle-icon ast-mobile-header-inline"
			id="masthead" itemtype="https://schema.org/WPHeader" itemscope="itemscope" itemid="#masthead">
			<div id="ast-desktop-header" data-toggle-type="dropdown">
				<div class="ast-main-header-wrap main-header-bar-wrap ">
					<div class="ast-primary-header-bar ast-primary-header main-header-bar site-header-focus-item"
						data-section="section-primary-header-builder">
						<div class="site-primary-header-wrap ast-builder-grid-row-container site-header-focus-item ast-container"
							data-section="section-primary-header-builder">
							<div
								class="ast-builder-grid-row ast-builder-grid-row-has-sides ast-builder-grid-row-no-center">
								<div
									class="site-header-primary-section-left site-header-section ast-flex site-header-section-left">
									<div class="ast-builder-layout-element ast-flex site-header-focus-item"
										data-section="title_tagline">
										<div class="site-branding ast-site-identity"
											itemtype="https://schema.org/Organization" itemscope="itemscope">
											<span class="site-logo-img"><a href="./index.html"
													class="custom-logo-link transparent-custom-logo" rel="home"
													itemprop="url" aria-label="wp_elementor"><img
														src="<?php echo get_template_directory_uri(); ?>/assets/landing4/wp-content/uploads/2021/08/site-logo.svg"
														class="astra-logo-svg" alt="" decoding="async"></a></span>
										</div>
										<!-- .site-branding -->
									</div>
									<div class="ast-builder-menu-1 ast-builder-menu ast-flex ast-builder-menu-1-focus-item ast-builder-layout-element site-header-focus-item"
										data-section="section-hb-menu-1">
										<div class="ast-main-header-bar-alignment">
											<div class="main-header-bar-navigation">
												<nav class="site-navigation ast-flex-grow-1 navigation-accessibility site-header-focus-item"
													id="primary-site-navigation" aria-label="Site Navigation"
													itemtype="https://schema.org/SiteNavigationElement"
													itemscope="itemscope">
													<div class="main-navigation ast-inline-flex">
														<ul id="ast-hf-menu-1"
															class="main-header-menu ast-menu-shadow ast-nav-menu ast-flex  submenu-with-border stack-on-mobile">
															<li id="menu-item-542"
																class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-554 current_page_item menu-item-542">
																<a href="./index.html" aria-current="page"
																	class="menu-link">Home</a></li>
														</ul>
													</div>
												</nav>
											</div>
										</div>
									</div>
								</div>
								<div
									class="site-header-primary-section-right site-header-section ast-flex ast-grid-right-section">
									<div class="ast-builder-layout-element ast-flex site-header-focus-item"
										data-section="section-hb-social-icons-1">
										<div class="ast-header-social-1-wrap ast-header-social-wrap">
											<div
												class="header-social-inner-wrap element-social-inner-wrap social-show-label-false ast-social-color-type-custom ast-social-stack-none ast-social-element-style-filled">
												<a aria-label="Instagram" target="_blank" rel="noopener noreferrer"
													style="--color: #8a3ab9; --background-color: transparent;"
													class="ast-builder-social-element ast-inline-flex ast-instagram header-social-item"><span
														class="ahfb-svg-iconset ast-inline-flex svg-baseline"><svg
															xmlns="http://www.w3.org/2000/svg" viewbox="0 0 448 512">
															<path
																d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z">
															</path>
														</svg></span></a><a aria-label="Facebook" target="_blank"
													rel="noopener noreferrer"
													style="--color: #557dbc; --background-color: transparent;"
													class="ast-builder-social-element ast-inline-flex ast-facebook header-social-item"><span
														class="ahfb-svg-iconset ast-inline-flex svg-baseline"><svg
															xmlns="http://www.w3.org/2000/svg" viewbox="0 0 512 512">
															<path
																d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z">
															</path>
														</svg></span></a><a aria-label="Twitter" target="_blank"
													rel="noopener noreferrer"
													style="--color: #7acdee; --background-color: transparent;"
													class="ast-builder-social-element ast-inline-flex ast-twitter header-social-item"><span
														class="ahfb-svg-iconset ast-inline-flex svg-baseline"><svg
															xmlns="http://www.w3.org/2000/svg" viewbox="0 0 512 512">
															<path
																d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z">
															</path>
														</svg></span></a>
											</div>
										</div>
									</div>
									<div class="ast-builder-layout-element ast-flex site-header-focus-item ast-header-button-1"
										data-section="section-hb-button-1">
										<div class="ast-builder-button-wrap ast-builder-button-size-">
											<a class="ast-custom-button-link" href="#" target="_self">
												<div class="ast-custom-button">Book Now</div>
											</a><a class="menu-link" href="#" target="_self">Book Now</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="ast-desktop-header-content content-align-flex-start ">
				</div>
			</div> <!-- Main Header Bar Wrap -->
			<div id="ast-mobile-header" class="ast-mobile-header-wrap " data-type="dropdown">
				<div class="ast-main-header-wrap main-header-bar-wrap">
					<div class="ast-primary-header-bar ast-primary-header main-header-bar site-primary-header-wrap site-header-focus-item ast-builder-grid-row-layout-default ast-builder-grid-row-tablet-layout-default ast-builder-grid-row-mobile-layout-default"
						data-section="section-primary-header-builder">
						<div class="ast-builder-grid-row ast-builder-grid-row-has-sides ast-builder-grid-row-no-center">
							<div
								class="site-header-primary-section-left site-header-section ast-flex site-header-section-left">
								<div class="ast-builder-layout-element ast-flex site-header-focus-item"
									data-section="title_tagline">
									<div class="site-branding ast-site-identity"
										itemtype="https://schema.org/Organization" itemscope="itemscope">
										<span class="site-logo-img"><a href="./index.html"
												class="custom-logo-link transparent-custom-logo" rel="home"
												itemprop="url" aria-label="wp_elementor"><img
													src="<?php echo get_template_directory_uri(); ?>/assets/landing4/wp-content/uploads/2021/08/site-logo.svg"
													class="astra-logo-svg" alt="" decoding="async"></a></span>
									</div>
									<!-- .site-branding -->
								</div>
							</div>
							<div
								class="site-header-primary-section-right site-header-section ast-flex ast-grid-right-section">
								<div class="ast-builder-layout-element ast-flex site-header-focus-item"
									data-section="section-header-mobile-trigger">
									<div class="ast-button-wrap">
										<button type="button"
											class="menu-toggle main-header-menu-toggle ast-mobile-menu-trigger-minimal"
											aria-expanded="false">
											<span class="screen-reader-text">Main Menu</span>
											<span class="mobile-menu-toggle-icon">
												<span class="ahfb-svg-iconset ast-inline-flex svg-baseline"><svg
														class="ast-mobile-svg ast-menu-svg" fill="currentColor"
														version="1.1" xmlns="http://www.w3.org/2000/svg" width="24"
														height="24" viewbox="0 0 24 24">
														<path
															d="M3 13h18c0.552 0 1-0.448 1-1s-0.448-1-1-1h-18c-0.552 0-1 0.448-1 1s0.448 1 1 1zM3 7h18c0.552 0 1-0.448 1-1s-0.448-1-1-1h-18c-0.552 0-1 0.448-1 1s0.448 1 1 1zM3 19h18c0.552 0 1-0.448 1-1s-0.448-1-1-1h-18c-0.552 0-1 0.448-1 1s0.448 1 1 1z">
														</path>
													</svg></span><span
													class="ahfb-svg-iconset ast-inline-flex svg-baseline"><svg
														class="ast-mobile-svg ast-close-svg" fill="currentColor"
														version="1.1" xmlns="http://www.w3.org/2000/svg" width="24"
														height="24" viewbox="0 0 24 24">
														<path
															d="M5.293 6.707l5.293 5.293-5.293 5.293c-0.391 0.391-0.391 1.024 0 1.414s1.024 0.391 1.414 0l5.293-5.293 5.293 5.293c0.391 0.391 1.024 0.391 1.414 0s0.391-1.024 0-1.414l-5.293-5.293 5.293-5.293c0.391-0.391 0.391-1.024 0-1.414s-1.024-0.391-1.414 0l-5.293 5.293-5.293-5.293c-0.391-0.391-1.024-0.391-1.414 0s-0.391 1.024 0 1.414z">
														</path>
													</svg></span> </span>
										</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="ast-mobile-header-content content-align-flex-start ">
					<div class="ast-builder-menu-mobile ast-builder-menu ast-builder-menu-mobile-focus-item ast-builder-layout-element site-header-focus-item"
						data-section="section-header-mobile-menu">
						<div class="ast-main-header-bar-alignment">
							<div class="main-header-bar-navigation">
								<nav class="site-navigation ast-flex-grow-1 navigation-accessibility site-header-focus-item"
									id="ast-mobile-site-navigation" aria-label="Site Navigation"
									itemtype="https://schema.org/SiteNavigationElement" itemscope="itemscope">
									<div class="main-navigation">
										<ul id="ast-hf-mobile-menu"
											class="main-header-menu ast-nav-menu ast-flex  submenu-with-border astra-menu-animation-fade  stack-on-mobile">
											<li
												class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-554 current_page_item menu-item-542">
												<a href="./index.html" aria-current="page" class="menu-link">Home</a>
											</li>
											<li
												class="menu-item menu-item-type-post_type menu-item-object-page menu-item-544">
												<a href="./services/index.html" class="menu-link">Services</a></li>
										</ul>
									</div>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header><!-- #masthead -->
		<div id="content" class="site-content">
			<div class="ast-container">


				<div id="primary" class="content-area primary">


					<main id="main" class="site-main">
						<article class="post-554 page type-page status-publish ast-article-single" id="post-554"
							itemtype="https://schema.org/CreativeWork" itemscope="itemscope">


							<header class="entry-header ast-no-thumbnail ast-no-title ast-header-without-markup">
							</header> <!-- .entry-header -->


							<div class="entry-content clear" itemprop="text">


								<div data-elementor-type="wp-page" data-elementor-id="554"
									class="elementor elementor-554">
									<section
										class="elementor-section elementor-top-section elementor-element elementor-element-e57288a elementor-section-height-min-height elementor-section-boxed elementor-section-height-default elementor-section-items-middle"
										data-id="e57288a" data-element_type="section"
										data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
										<div class="elementor-container elementor-column-gap-no">
											<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-a5053a3"
												data-id="a5053a3" data-element_type="column">
												<div class="elementor-widget-wrap elementor-element-populated">
													<div class="elementor-element elementor-element-d15881a elementor-widget elementor-widget-heading"
														data-id="d15881a" data-element_type="widget"
														data-widget_type="heading.default">
														<div class="elementor-widget-container">
															<style>
																/*! elementor - v3.10.1 - 17-01-2023 */
																.elementor-heading-title {
																	padding: 0;
																	margin: 0;
																	line-height: 1
																}

																.elementor-widget-heading .elementor-heading-title[class*=elementor-size-]>a {
																	color: inherit;
																	font-size: inherit;
																	line-height: inherit
																}

																.elementor-widget-heading .elementor-heading-title.elementor-size-small {
																	font-size: 15px
																}

																.elementor-widget-heading .elementor-heading-title.elementor-size-medium {
																	font-size: 19px
																}

																.elementor-widget-heading .elementor-heading-title.elementor-size-large {
																	font-size: 29px
																}

																.elementor-widget-heading .elementor-heading-title.elementor-size-xl {
																	font-size: 39px
																}

																.elementor-widget-heading .elementor-heading-title.elementor-size-xxl {
																	font-size: 59px
																}
															</style>
															<h6 class="elementor-heading-title elementor-size-default">
															<?php echo $descripcion; ?></h6>
														</div>
													</div>
													<div class="elementor-element elementor-element-cfde280 elementor-widget elementor-widget-heading"
														data-id="cfde280" data-element_type="widget"
														data-widget_type="heading.default">
														<div class="elementor-widget-container">
															<h1 class="elementor-heading-title elementor-size-default"><?php echo $titulo; ?></h1>
														</div>
													</div>
													<div class="elementor-element elementor-element-8311209 elementor-widget elementor-widget-text-editor"
														data-id="8311209" data-element_type="widget"
														data-widget_type="text-editor.default">
														<div class="elementor-widget-container">
															<style>
																/*! elementor - v3.10.1 - 17-01-2023 */
																.elementor-widget-text-editor.elementor-drop-cap-view-stacked .elementor-drop-cap {
																	background-color: #818a91;
																	color: #fff
																}

																.elementor-widget-text-editor.elementor-drop-cap-view-framed .elementor-drop-cap {
																	color: #818a91;
																	border: 3px solid;
																	background-color: transparent
																}

																.elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap {
																	margin-top: 8px
																}

																.elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap-letter {
																	width: 1em;
																	height: 1em
																}

																.elementor-widget-text-editor .elementor-drop-cap {
																	float: left;
																	text-align: center;
																	line-height: 1;
																	font-size: 50px
																}

																.elementor-widget-text-editor .elementor-drop-cap-letter {
																	display: inline-block
																}
															</style>
															<p><?php echo $frase; ?></p>
														</div>
													</div>
													<div class="elementor-element elementor-element-3951a16 elementor-mobile-align-center elementor-widget elementor-widget-button"
														data-id="3951a16" data-element_type="widget"
														data-widget_type="button.default">
														<div class="elementor-widget-container">
															<div class="elementor-button-wrapper">
																<a href="#"
																	class="elementor-button-link elementor-button elementor-size-sm"
																	role="button">
																	<span class="elementor-button-content-wrapper">
																		<span
																			class="elementor-button-icon elementor-align-icon-right">
																			<svg xmlns="http://www.w3.org/2000/svg"
																				viewbox="0 0 2048 2048">
																				<path
																					d="M6.125 1088h1797.89l-402.976 403 89.994 90L2048 1024l-556.966-557-89.994 90 402.976 403H6.125v128z">
																				</path>
																			</svg> </span>
																		<span class="elementor-button-text">Book An
																			Appointment</span>
																	</span>
																</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</section>
									<section
										class="elementor-section elementor-top-section elementor-element elementor-element-ddd1a38 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
										data-id="ddd1a38" data-element_type="section"
										data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
										<div class="elementor-container elementor-column-gap-no">
											<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-96ac74f"
												data-id="96ac74f" data-element_type="column">
												<div class="elementor-widget-wrap elementor-element-populated">
													<div class="elementor-element elementor-element-6834eac elementor-widget elementor-widget-heading"
														data-id="6834eac" data-element_type="widget"
														data-widget_type="heading.default">
														<div class="elementor-widget-container">
															<h6 class="elementor-heading-title elementor-size-default">
																Expertise Areas</h6>
														</div>
													</div>
													<div class="elementor-element elementor-element-c20d8af elementor-widget elementor-widget-heading"
														data-id="c20d8af" data-element_type="widget"
														data-widget_type="heading.default">
														<div class="elementor-widget-container">
															<h2 class="elementor-heading-title elementor-size-default">
																Allow your body, mind and soul sense a haven of
																tranquility</h2>
														</div>
													</div>
													<div class="elementor-element elementor-element-92a27fd elementor-aspect-ratio-169 elementor-widget elementor-widget-video"
														data-id="92a27fd" data-element_type="widget"
														data-settings="{&quot;youtube_url&quot;:&quot;https:\/\/www.youtube.com\/watch?v=XHOmBV4js_E&quot;,&quot;lazy_load&quot;:&quot;yes&quot;,&quot;show_image_overlay&quot;:&quot;yes&quot;,&quot;image_overlay&quot;:{&quot;url&quot;:&quot;.\/\/wp-content\/uploads\/2021\/08\/lotus-spa-template-homepage-video-thumbnail.jpg&quot;,&quot;id&quot;:&quot;61&quot;},&quot;video_type&quot;:&quot;youtube&quot;,&quot;controls&quot;:&quot;yes&quot;,&quot;aspect_ratio&quot;:&quot;169&quot;}"
														data-widget_type="video.default">
														<div class="elementor-widget-container">
															<style>
																/*! elementor - v3.10.1 - 17-01-2023 */
																.elementor-widget-video .elementor-widget-container {
																	overflow: hidden;
																	transform: translateZ(0)
																}

																.elementor-widget-video .elementor-open-inline .elementor-custom-embed-image-overlay {
																	position: absolute;
																	top: 0;
																	left: 0;
																	width: 100%;
																	height: 100%;
																	background-size: cover;
																	background-position: 50%
																}

																.elementor-widget-video .elementor-custom-embed-image-overlay {
																	cursor: pointer;
																	text-align: center
																}

																.elementor-widget-video .elementor-custom-embed-image-overlay:hover .elementor-custom-embed-play i {
																	opacity: 1
																}

																.elementor-widget-video .elementor-custom-embed-image-overlay img {
																	display: block;
																	width: 100%
																}

																.elementor-widget-video .e-hosted-video .elementor-video {
																	-o-object-fit: cover;
																	object-fit: cover
																}

																.e-con-inner>.elementor-widget-video,
																.e-con>.elementor-widget-video {
																	width: var(--container-widget-width);
																	--flex-grow: var(--container-widget-flex-grow)
																}
															</style>
															<div
																class="elementor-wrapper elementor-fit-aspect-ratio elementor-open-inline">
																<div class="elementor-video"></div>
																<div class="elementor-custom-embed-image-overlay"
																	style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/landing4/wp-content/uploads/2021/08/lotus-spa-template-homepage-video-thumbnail.jpg);">
																	<div class="elementor-custom-embed-play"
																		role="button" aria-label="Play Video"
																		tabindex="0">
																		<i aria-hidden="true" class="eicon-play"></i>
																		<span class="elementor-screen-only">Play
																			Video</span>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="elementor-element elementor-element-fe795e1 elementor-widget__width-initial elementor-widget-mobile__width-inherit elementor-view-default elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
														data-id="fe795e1" data-element_type="widget"
														data-widget_type="icon-box.default">
														<div class="elementor-widget-container">
															<link rel="stylesheet"
																href="<?php echo get_template_directory_uri(); ?>/assets/landing4/wp-content/plugins/elementor/assets/css/widget-icon-box.min.css">
															<div class="elementor-icon-box-wrapper">
																<div class="elementor-icon-box-icon">
																	<span class="elementor-icon elementor-animation-">
																		<i aria-hidden="true" class="fas fa-spa"></i>
																	</span>
																</div>
																<div class="elementor-icon-box-content">
																	<h4 class="elementor-icon-box-title">
																		<span>
																			Wellness </span>
																	</h4>
																	<p class="elementor-icon-box-description">
																		Mi vitae duis vel consequat netus condimentum
																		hendrerit malesuada netus ornare urna. </p>
																</div>
															</div>
														</div>
													</div>
													<div class="elementor-element elementor-element-918839e elementor-widget__width-initial elementor-widget-mobile__width-inherit elementor-view-default elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
														data-id="918839e" data-element_type="widget"
														data-widget_type="icon-box.default">
														<div class="elementor-widget-container">
															<div class="elementor-icon-box-wrapper">
																<div class="elementor-icon-box-icon">
																	<span class="elementor-icon elementor-animation-">
																		<i aria-hidden="true" class="fas fa-hands"></i>
																	</span>
																</div>
																<div class="elementor-icon-box-content">
																	<h4 class="elementor-icon-box-title">
																		<span>
																			Beauty </span>
																	</h4>
																	<p class="elementor-icon-box-description">
																		Dolor pretium duis sit turpis congue sed tortor
																		molestie condimentum adipiscing. </p>
																</div>
															</div>
														</div>
													</div>
													<div class="elementor-element elementor-element-6b103b4 elementor-widget__width-initial elementor-widget-mobile__width-inherit elementor-view-default elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
														data-id="6b103b4" data-element_type="widget"
														data-widget_type="icon-box.default">
														<div class="elementor-widget-container">
															<div class="elementor-icon-box-wrapper">
																<div class="elementor-icon-box-icon">
																	<span class="elementor-icon elementor-animation-">
																		<i aria-hidden="true"
																			class="fas fa-hands-wash"></i> </span>
																</div>
																<div class="elementor-icon-box-content">
																	<h4 class="elementor-icon-box-title">
																		<span>
																			Massage </span>
																	</h4>
																	<p class="elementor-icon-box-description">
																		Pulvinar lectus viverra sit donec eget faucibus
																		tristique dui velit consequat. </p>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</section>
									<section
										class="elementor-section elementor-top-section elementor-element elementor-element-407fcbb elementor-section-boxed elementor-section-height-default elementor-section-height-default"
										data-id="407fcbb" data-element_type="section"
										data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
										<div class="elementor-container elementor-column-gap-no">
											<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-56b24ba"
												data-id="56b24ba" data-element_type="column">
												<div class="elementor-widget-wrap elementor-element-populated">
													<div class="elementor-element elementor-element-a29cb72 elementor-widget elementor-widget-heading"
														data-id="a29cb72" data-element_type="widget"
														data-widget_type="heading.default">
														<div class="elementor-widget-container">
															<h2 class="elementor-heading-title elementor-size-default">
																The best of
																our services</h2>
														</div>
													</div>
													<div class="elementor-element elementor-element-a7af450 elementor-widget elementor-widget-text-editor"
														data-id="a7af450" data-element_type="widget"
														data-widget_type="text-editor.default">
														<div class="elementor-widget-container">
															<p>Consequat elementum, dolor egestas at faucibus dictumst
																at ultrices auctor gravida neque, dolor molestie ut
																fames porttitor egestas quisque bibendum felis nascetur
																maecenas et.</p>
														</div>
													</div>
													<div class="elementor-element elementor-element-99faec0 elementor-widget elementor-widget-button"
														data-id="99faec0" data-element_type="widget"
														data-widget_type="button.default">
														<div class="elementor-widget-container">
															<div class="elementor-button-wrapper">
																<a href="#"
																	class="elementor-button-link elementor-button elementor-size-sm"
																	role="button">
																	<span class="elementor-button-content-wrapper">
																		<span
																			class="elementor-button-icon elementor-align-icon-right">
																			<svg xmlns="http://www.w3.org/2000/svg"
																				viewbox="0 0 2048 2048">
																				<path
																					d="M6.125 1088h1797.89l-402.976 403 89.994 90L2048 1024l-556.966-557-89.994 90 402.976 403H6.125v128z">
																				</path>
																			</svg> </span>
																		<span class="elementor-button-text">Book
																			Now</span>
																	</span>
																</a>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-649c48e"
												data-id="649c48e" data-element_type="column">
												<div class="elementor-widget-wrap elementor-element-populated">
													<div class="elementor-element elementor-element-bad3896 elementor-widget elementor-widget-image"
														data-id="bad3896" data-element_type="widget"
														data-widget_type="image.default">
														<div class="elementor-widget-container">
															<style>
																/*! elementor - v3.10.1 - 17-01-2023 */
																.elementor-widget-image {
																	text-align: center
																}

																.elementor-widget-image a {
																	display: inline-block
																}

																.elementor-widget-image a img[src$=".svg"] {
																	width: 48px
																}

																.elementor-widget-image img {
																	vertical-align: middle;
																	display: inline-block
																}
															</style> <img decoding="async" width="400" height="600"
																src="<?php echo get_template_directory_uri(); ?>/assets/landing4/wp-content/uploads/2021/08/lotus-spa-template-homepage-service-img.jpg"
																class="attachment-full size-full wp-image-59" alt=""
																srcset="<?php echo $img_secundaria['url']; ?>"
																sizes="(max-width: 400px) 100vw, 400px">
														</div>
													</div>
												</div>
											</div>
											<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-c05e8be"
												data-id="c05e8be" data-element_type="column">
												<div class="elementor-widget-wrap elementor-element-populated">
													<div class="elementor-element elementor-element-d50bcdc elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
														data-id="d50bcdc" data-element_type="widget"
														data-widget_type="divider.default">
														<div class="elementor-widget-container">
															<style>
																/*! elementor - v3.10.1 - 17-01-2023 */
																.elementor-widget-divider {
																	--divider-border-style: none;
																	--divider-border-width: 1px;
																	--divider-color: #2c2c2c;
																	--divider-icon-size: 20px;
																	--divider-element-spacing: 10px;
																	--divider-pattern-height: 24px;
																	--divider-pattern-size: 20px;
																	--divider-pattern-url: none;
																	--divider-pattern-repeat: repeat-x
																}

																.elementor-widget-divider .elementor-divider {
																	display: flex
																}

																.elementor-widget-divider .elementor-divider__text {
																	font-size: 15px;
																	line-height: 1;
																	max-width: 95%
																}

																.elementor-widget-divider .elementor-divider__element {
																	margin: 0 var(--divider-element-spacing);
																	flex-shrink: 0
																}

																.elementor-widget-divider .elementor-icon {
																	font-size: var(--divider-icon-size)
																}

																.elementor-widget-divider .elementor-divider-separator {
																	display: flex;
																	margin: 0;
																	direction: ltr
																}

																.elementor-widget-divider--view-line_icon .elementor-divider-separator,
																.elementor-widget-divider--view-line_text .elementor-divider-separator {
																	align-items: center
																}

																.elementor-widget-divider--view-line_icon .elementor-divider-separator:after,
																.elementor-widget-divider--view-line_icon .elementor-divider-separator:before,
																.elementor-widget-divider--view-line_text .elementor-divider-separator:after,
																.elementor-widget-divider--view-line_text .elementor-divider-separator:before {
																	display: block;
																	content: "";
																	border-bottom: 0;
																	flex-grow: 1;
																	border-top: var(--divider-border-width) var(--divider-border-style) var(--divider-color)
																}

																.elementor-widget-divider--element-align-left .elementor-divider .elementor-divider-separator>.elementor-divider__svg:first-of-type {
																	flex-grow: 0;
																	flex-shrink: 100
																}

																.elementor-widget-divider--element-align-left .elementor-divider-separator:before {
																	content: none
																}

																.elementor-widget-divider--element-align-left .elementor-divider__element {
																	margin-left: 0
																}

																.elementor-widget-divider--element-align-right .elementor-divider .elementor-divider-separator>.elementor-divider__svg:last-of-type {
																	flex-grow: 0;
																	flex-shrink: 100
																}

																.elementor-widget-divider--element-align-right .elementor-divider-separator:after {
																	content: none
																}

																.elementor-widget-divider--element-align-right .elementor-divider__element {
																	margin-right: 0
																}

																.elementor-widget-divider:not(.elementor-widget-divider--view-line_text):not(.elementor-widget-divider--view-line_icon) .elementor-divider-separator {
																	border-top: var(--divider-border-width) var(--divider-border-style) var(--divider-color)
																}

																.elementor-widget-divider--separator-type-pattern {
																	--divider-border-style: none
																}

																.elementor-widget-divider--separator-type-pattern.elementor-widget-divider--view-line .elementor-divider-separator,
																.elementor-widget-divider--separator-type-pattern:not(.elementor-widget-divider--view-line) .elementor-divider-separator:after,
																.elementor-widget-divider--separator-type-pattern:not(.elementor-widget-divider--view-line) .elementor-divider-separator:before,
																.elementor-widget-divider--separator-type-pattern:not([class*=elementor-widget-divider--view]) .elementor-divider-separator {
																	width: 100%;
																	min-height: var(--divider-pattern-height);
																	-webkit-mask-size: var(--divider-pattern-size) 100%;
																	mask-size: var(--divider-pattern-size) 100%;
																	-webkit-mask-repeat: var(--divider-pattern-repeat);
																	mask-repeat: var(--divider-pattern-repeat);
																	background-color: var(--divider-color);
																	-webkit-mask-image: var(--divider-pattern-url);
																	mask-image: var(--divider-pattern-url)
																}

																.elementor-widget-divider--no-spacing {
																	--divider-pattern-size: auto
																}

																.elementor-widget-divider--bg-round {
																	--divider-pattern-repeat: round
																}

																.rtl .elementor-widget-divider .elementor-divider__text {
																	direction: rtl
																}

																.e-con-inner>.elementor-widget-divider,
																.e-con>.elementor-widget-divider {
																	width: var(--container-widget-width);
																	--flex-grow: var(--container-widget-flex-grow)
																}
															</style>
															<div class="elementor-divider">
																<span class="elementor-divider-separator">
																</span>
															</div>
														</div>
													</div>
													<div class="elementor-element elementor-element-40976f6 elementor-widget elementor-widget-heading"
														data-id="40976f6" data-element_type="widget"
														data-widget_type="heading.default">
														<div class="elementor-widget-container">
															<h6 class="elementor-heading-title elementor-size-default">
																01</h6>
														</div>
													</div>
													<div class="elementor-element elementor-element-fc0f53f elementor-widget elementor-widget-heading"
														data-id="fc0f53f" data-element_type="widget"
														data-widget_type="heading.default">
														<div class="elementor-widget-container">
															<h4 class="elementor-heading-title elementor-size-default">
																Ayurvedic Treatment</h4>
														</div>
													</div>
													<div class="elementor-element elementor-element-f2684db elementor-widget elementor-widget-text-editor"
														data-id="f2684db" data-element_type="widget"
														data-widget_type="text-editor.default">
														<div class="elementor-widget-container">
															<p>Maecenas in cursus laoreet pulvinar enim commodo justo
																sed euismod velit.</p>
														</div>
													</div>
													<div class="elementor-element elementor-element-9e170c9 elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
														data-id="9e170c9" data-element_type="widget"
														data-widget_type="divider.default">
														<div class="elementor-widget-container">
															<div class="elementor-divider">
																<span class="elementor-divider-separator">
																</span>
															</div>
														</div>
													</div>
													<div class="elementor-element elementor-element-fb56f6c elementor-widget elementor-widget-heading"
														data-id="fb56f6c" data-element_type="widget"
														data-widget_type="heading.default">
														<div class="elementor-widget-container">
															<h6 class="elementor-heading-title elementor-size-default">
																02</h6>
														</div>
													</div>
													<div class="elementor-element elementor-element-85d65a5 elementor-widget elementor-widget-heading"
														data-id="85d65a5" data-element_type="widget"
														data-widget_type="heading.default">
														<div class="elementor-widget-container">
															<h4 class="elementor-heading-title elementor-size-default">
																Ozone Therapy</h4>
														</div>
													</div>
													<div class="elementor-element elementor-element-f1cea4c elementor-widget elementor-widget-text-editor"
														data-id="f1cea4c" data-element_type="widget"
														data-widget_type="text-editor.default">
														<div class="elementor-widget-container">
															<p>Ac praesent feugiat at egestas vitae massa euismod sit
																nibh aenean elit.</p>
														</div>
													</div>
													<div class="elementor-element elementor-element-8044aca elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
														data-id="8044aca" data-element_type="widget"
														data-widget_type="divider.default">
														<div class="elementor-widget-container">
															<div class="elementor-divider">
																<span class="elementor-divider-separator">
																</span>
															</div>
														</div>
													</div>
													<div class="elementor-element elementor-element-d03f302 elementor-widget elementor-widget-heading"
														data-id="d03f302" data-element_type="widget"
														data-widget_type="heading.default">
														<div class="elementor-widget-container">
															<h6 class="elementor-heading-title elementor-size-default">
																03</h6>
														</div>
													</div>
													<div class="elementor-element elementor-element-f353abf elementor-widget elementor-widget-heading"
														data-id="f353abf" data-element_type="widget"
														data-widget_type="heading.default">
														<div class="elementor-widget-container">
															<h4 class="elementor-heading-title elementor-size-default">
																Stone Cure</h4>
														</div>
													</div>
													<div class="elementor-element elementor-element-1d2f736 elementor-widget elementor-widget-text-editor"
														data-id="1d2f736" data-element_type="widget"
														data-widget_type="text-editor.default">
														<div class="elementor-widget-container">
															<p>Mi ornare ac eleifend eget eget aliquet lectus nec augue
																massa amet.</p>
														</div>
													</div>
												</div>
											</div>
										</div>
									</section>
									<section
										class="elementor-section elementor-top-section elementor-element elementor-element-36830e0 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
										data-id="36830e0" data-element_type="section"
										data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
										<div class="elementor-container elementor-column-gap-no">
											<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-831e21d"
												data-id="831e21d" data-element_type="column">
												<div class="elementor-widget-wrap elementor-element-populated">
													<div class="elementor-element elementor-element-6e58afb elementor-widget elementor-widget-heading"
														data-id="6e58afb" data-element_type="widget"
														data-widget_type="heading.default">
														<div class="elementor-widget-container">
															<h6 class="elementor-heading-title elementor-size-default">
																Appointment</h6>
														</div>
													</div>
													<div class="elementor-element elementor-element-5354e17 elementor-widget elementor-widget-heading"
														data-id="5354e17" data-element_type="widget"
														data-widget_type="heading.default">
														<div class="elementor-widget-container">
															<h2 class="elementor-heading-title elementor-size-default">
																Want to make booking or have a question?</h2>
														</div>
													</div>
													<div class="elementor-element elementor-element-bf54590 elementor-widget elementor-widget-text-editor"
														data-id="bf54590" data-element_type="widget"
														data-widget_type="text-editor.default">
														<div class="elementor-widget-container">
															<p>Call us on 123-456-7890 or simply book an appointment</p>
														</div>
													</div>
													<div class="elementor-element elementor-element-cd82c04 elementor-align-center elementor-widget elementor-widget-button"
														data-id="cd82c04" data-element_type="widget"
														data-widget_type="button.default">
														<div class="elementor-widget-container">
															<div class="elementor-button-wrapper">
																<a href="#"
																	class="elementor-button-link elementor-button elementor-size-sm"
																	role="button">
																	<span class="elementor-button-content-wrapper">
																		<span
																			class="elementor-button-icon elementor-align-icon-right">
																			<svg xmlns="http://www.w3.org/2000/svg"
																				viewbox="0 0 2048 2048">
																				<path
																					d="M6.125 1088h1797.89l-402.976 403 89.994 90L2048 1024l-556.966-557-89.994 90 402.976 403H6.125v128z">
																				</path>
																			</svg> </span>
																		<span class="elementor-button-text">Book An
																			Appointment</span>
																	</span>
																</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</section>
									<section
										class="elementor-section elementor-top-section elementor-element elementor-element-272e1e1 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
										data-id="272e1e1" data-element_type="section"
										data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
										<div class="elementor-container elementor-column-gap-no">
											<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-c67db83"
												data-id="c67db83" data-element_type="column">
												<div class="elementor-widget-wrap elementor-element-populated">
													<div class="elementor-element elementor-element-5e023f4 elementor-widget elementor-widget-heading"
														data-id="5e023f4" data-element_type="widget"
														data-widget_type="heading.default">
														<div class="elementor-widget-container">
															<h6 class="elementor-heading-title elementor-size-default">
																Have a Look at Our</h6>
														</div>
													</div>
													<div class="elementor-element elementor-element-ff4b9f9 elementor-widget elementor-widget-heading"
														data-id="ff4b9f9" data-element_type="widget"
														data-widget_type="heading.default">
														<div class="elementor-widget-container">
															<h2 class="elementor-heading-title elementor-size-default">
																Massage therapy center</h2>
														</div>
													</div>
													<div class="elementor-element elementor-element-21a63e2 elementor-widget elementor-widget-text-editor"
														data-id="21a63e2" data-element_type="widget"
														data-widget_type="text-editor.default">
														<div class="elementor-widget-container">
															<p>You deserve better than a rushed massage by a rookie
																therapist in a place that makes you feel more stressed.
															</p>
														</div>
													</div>
													<section
														class="elementor-section elementor-inner-section elementor-element elementor-element-2e9c0ed elementor-section-boxed elementor-section-height-default elementor-section-height-default"
														data-id="2e9c0ed" data-element_type="section">
														<div class="elementor-container elementor-column-gap-no">
															<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-bc43aae"
																data-id="bc43aae" data-element_type="column">
																<div
																	class="elementor-widget-wrap elementor-element-populated">
																	<div class="elementor-element elementor-element-9772aa0 elementor-widget elementor-widget-heading"
																		data-id="9772aa0" data-element_type="widget"
																		data-widget_type="heading.default">
																		<div class="elementor-widget-container">
																			<h6
																				class="elementor-heading-title elementor-size-default">
																				01.</h6>
																		</div>
																	</div>
																	<div class="elementor-element elementor-element-1d1aae2 elementor-widget elementor-widget-heading"
																		data-id="1d1aae2" data-element_type="widget"
																		data-widget_type="heading.default">
																		<div class="elementor-widget-container">
																			<h3
																				class="elementor-heading-title elementor-size-default">
																				Luxury Spa</h3>
																		</div>
																	</div>
																	<div class="elementor-element elementor-element-bb61847 elementor-widget elementor-widget-text-editor"
																		data-id="bb61847" data-element_type="widget"
																		data-widget_type="text-editor.default">
																		<div class="elementor-widget-container">
																			<p>Suspendisse lacus, dolor auctor nec,
																				iaculis amet vel facilisi nulla
																				dignissim aliquam erat id eget habitasse
																				leo facilisis tempor vulputate facilisis
																				varius nunc pulvinar.</p>
																		</div>
																	</div>
																	<div class="elementor-element elementor-element-3dd1c83 elementor-widget elementor-widget-heading"
																		data-id="3dd1c83" data-element_type="widget"
																		data-widget_type="heading.default">
																		<div class="elementor-widget-container">
																			<div
																				class="elementor-heading-title elementor-size-default">
																				Starting From $75</div>
																		</div>
																	</div>
																	<div class="elementor-element elementor-element-c50b868 elementor-mobile-align-center elementor-widget elementor-widget-button"
																		data-id="c50b868" data-element_type="widget"
																		data-widget_type="button.default">
																		<div class="elementor-widget-container">
																			<div class="elementor-button-wrapper">
																				<a href="#"
																					class="elementor-button-link elementor-button elementor-size-sm"
																					role="button">
																					<span
																						class="elementor-button-content-wrapper">
																						<span
																							class="elementor-button-icon elementor-align-icon-right">
																							<svg xmlns="http://www.w3.org/2000/svg"
																								viewbox="0 0 2048 2048">
																								<path
																									d="M6.125 1088h1797.89l-402.976 403 89.994 90L2048 1024l-556.966-557-89.994 90 402.976 403H6.125v128z">
																								</path>
																							</svg> </span>
																						<span
																							class="elementor-button-text">Book
																							Now</span>
																					</span>
																				</a>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-bb82be9"
																data-id="bb82be9" data-element_type="column">
																<div
																	class="elementor-widget-wrap elementor-element-populated">
																	<div class="elementor-element elementor-element-8603a3a elementor-widget elementor-widget-heading"
																		data-id="8603a3a" data-element_type="widget"
																		data-widget_type="heading.default">
																		<div class="elementor-widget-container">
																			<h6
																				class="elementor-heading-title elementor-size-default">
																				02.</h6>
																		</div>
																	</div>
																	<div class="elementor-element elementor-element-bf77970 elementor-widget elementor-widget-heading"
																		data-id="bf77970" data-element_type="widget"
																		data-widget_type="heading.default">
																		<div class="elementor-widget-container">
																			<h3
																				class="elementor-heading-title elementor-size-default">
																				Stone Therapy</h3>
																		</div>
																	</div>
																	<div class="elementor-element elementor-element-9c74914 elementor-widget elementor-widget-text-editor"
																		data-id="9c74914" data-element_type="widget"
																		data-widget_type="text-editor.default">
																		<div class="elementor-widget-container">
																			<p>Sit cursus aliquet semper sem enim quam
																				nec nascetur facilisis gravida turpis
																				aliquam arcu vel aliquam sit dictumst
																				purus eget imperdiet velit aliquam
																				metus.</p>
																		</div>
																	</div>
																	<div class="elementor-element elementor-element-3849523 elementor-widget elementor-widget-heading"
																		data-id="3849523" data-element_type="widget"
																		data-widget_type="heading.default">
																		<div class="elementor-widget-container">
																			<div
																				class="elementor-heading-title elementor-size-default">
																				Starting From $48</div>
																		</div>
																	</div>
																	<div class="elementor-element elementor-element-edae9c9 elementor-mobile-align-center elementor-widget elementor-widget-button"
																		data-id="edae9c9" data-element_type="widget"
																		data-widget_type="button.default">
																		<div class="elementor-widget-container">
																			<div class="elementor-button-wrapper">
																				<a href="#"
																					class="elementor-button-link elementor-button elementor-size-sm"
																					role="button">
																					<span
																						class="elementor-button-content-wrapper">
																						<span
																							class="elementor-button-icon elementor-align-icon-right">
																							<svg xmlns="http://www.w3.org/2000/svg"
																								viewbox="0 0 2048 2048">
																								<path
																									d="M6.125 1088h1797.89l-402.976 403 89.994 90L2048 1024l-556.966-557-89.994 90 402.976 403H6.125v128z">
																								</path>
																							</svg> </span>
																						<span
																							class="elementor-button-text">Book
																							Now</span>
																					</span>
																				</a>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</section>
													<section
														class="elementor-section elementor-inner-section elementor-element elementor-element-234dcdf elementor-section-boxed elementor-section-height-default elementor-section-height-default"
														data-id="234dcdf" data-element_type="section">
														<div class="elementor-container elementor-column-gap-no">
															<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-e2948a0"
																data-id="e2948a0" data-element_type="column">
																<div
																	class="elementor-widget-wrap elementor-element-populated">
																	<div class="elementor-element elementor-element-4f582d1 elementor-widget elementor-widget-heading"
																		data-id="4f582d1" data-element_type="widget"
																		data-widget_type="heading.default">
																		<div class="elementor-widget-container">
																			<h6
																				class="elementor-heading-title elementor-size-default">
																				03.</h6>
																		</div>
																	</div>
																	<div class="elementor-element elementor-element-a74b872 elementor-widget elementor-widget-heading"
																		data-id="a74b872" data-element_type="widget"
																		data-widget_type="heading.default">
																		<div class="elementor-widget-container">
																			<h3
																				class="elementor-heading-title elementor-size-default">
																				Aroma Therapy</h3>
																		</div>
																	</div>
																	<div class="elementor-element elementor-element-59cddbe elementor-widget elementor-widget-text-editor"
																		data-id="59cddbe" data-element_type="widget"
																		data-widget_type="text-editor.default">
																		<div class="elementor-widget-container">
																			<p>Mattis erat accumsan pulvinar urna
																				accumsan a blandit eget commodo dui
																				laoreet ut commodo odio massa
																				pellentesque platea ut arcu massa purus
																				vestibulum proin.</p>
																		</div>
																	</div>
																	<div class="elementor-element elementor-element-f8b7f20 elementor-widget elementor-widget-heading"
																		data-id="f8b7f20" data-element_type="widget"
																		data-widget_type="heading.default">
																		<div class="elementor-widget-container">
																			<div
																				class="elementor-heading-title elementor-size-default">
																				Starting From $40</div>
																		</div>
																	</div>
																	<div class="elementor-element elementor-element-c1f1b6c elementor-mobile-align-center elementor-widget elementor-widget-button"
																		data-id="c1f1b6c" data-element_type="widget"
																		data-widget_type="button.default">
																		<div class="elementor-widget-container">
																			<div class="elementor-button-wrapper">
																				<a href="#"
																					class="elementor-button-link elementor-button elementor-size-sm"
																					role="button">
																					<span
																						class="elementor-button-content-wrapper">
																						<span
																							class="elementor-button-icon elementor-align-icon-right">
																							<svg xmlns="http://www.w3.org/2000/svg"
																								viewbox="0 0 2048 2048">
																								<path
																									d="M6.125 1088h1797.89l-402.976 403 89.994 90L2048 1024l-556.966-557-89.994 90 402.976 403H6.125v128z">
																								</path>
																							</svg> </span>
																						<span
																							class="elementor-button-text">Book
																							Now</span>
																					</span>
																				</a>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-a07d273"
																data-id="a07d273" data-element_type="column">
																<div
																	class="elementor-widget-wrap elementor-element-populated">
																	<div class="elementor-element elementor-element-5e6c327 elementor-widget elementor-widget-heading"
																		data-id="5e6c327" data-element_type="widget"
																		data-widget_type="heading.default">
																		<div class="elementor-widget-container">
																			<h6
																				class="elementor-heading-title elementor-size-default">
																				04.</h6>
																		</div>
																	</div>
																	<div class="elementor-element elementor-element-a4c094b elementor-widget elementor-widget-heading"
																		data-id="a4c094b" data-element_type="widget"
																		data-widget_type="heading.default">
																		<div class="elementor-widget-container">
																			<h3
																				class="elementor-heading-title elementor-size-default">
																				Skin Treatment</h3>
																		</div>
																	</div>
																	<div class="elementor-element elementor-element-0e6709e elementor-widget elementor-widget-text-editor"
																		data-id="0e6709e" data-element_type="widget"
																		data-widget_type="text-editor.default">
																		<div class="elementor-widget-container">
																			<p>Vulputate augue convallis mauris
																				ullamcorper consequat purus cursus
																				consectetur sodales aenean dui nunc
																				augue condimentum cras arcu quam ornare
																				quis leo cursus non turpis.</p>
																		</div>
																	</div>
																	<div class="elementor-element elementor-element-e6e0869 elementor-widget elementor-widget-heading"
																		data-id="e6e0869" data-element_type="widget"
																		data-widget_type="heading.default">
																		<div class="elementor-widget-container">
																			<div
																				class="elementor-heading-title elementor-size-default">
																				Starting From $64</div>
																		</div>
																	</div>
																	<div class="elementor-element elementor-element-0b0535c elementor-mobile-align-center elementor-widget elementor-widget-button"
																		data-id="0b0535c" data-element_type="widget"
																		data-widget_type="button.default">
																		<div class="elementor-widget-container">
																			<div class="elementor-button-wrapper">
																				<a href="#"
																					class="elementor-button-link elementor-button elementor-size-sm"
																					role="button">
																					<span
																						class="elementor-button-content-wrapper">
																						<span
																							class="elementor-button-icon elementor-align-icon-right">
																							<svg xmlns="http://www.w3.org/2000/svg"
																								viewbox="0 0 2048 2048">
																								<path
																									d="M6.125 1088h1797.89l-402.976 403 89.994 90L2048 1024l-556.966-557-89.994 90 402.976 403H6.125v128z">
																								</path>
																							</svg> </span>
																						<span
																							class="elementor-button-text">Book
																							Now</span>
																					</span>
																				</a>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</section>
												</div>
											</div>
										</div>
									</section>
									<section
										class="elementor-section elementor-top-section elementor-element elementor-element-5bad6d2 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
										data-id="5bad6d2" data-element_type="section"
										data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
										<div class="elementor-container elementor-column-gap-no">
											<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6247624"
												data-id="6247624" data-element_type="column">
												<div class="elementor-widget-wrap elementor-element-populated">
													<div class="elementor-element elementor-element-b530b5d elementor-view-default elementor-widget elementor-widget-icon"
														data-id="b530b5d" data-element_type="widget"
														data-widget_type="icon.default">
														<div class="elementor-widget-container">
															<div class="elementor-icon-wrapper">
																<div class="elementor-icon">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24"
																		height="24" viewbox="0 0 24 24" fill="none">
																		<path
																			d="M5.56401 24C3.79239 24 2.4083 23.391 1.41176 22.173C0.470588 20.8997 0 19.3218 0 17.4394C0 15.0035 0.359862 12.7889 1.07958 10.7958C1.85467 8.74741 2.87889 6.83737 4.15225 5.06574C5.42561 3.29412 6.86505 1.60554 8.47059 0L10.7128 1.91003C8.88581 3.84775 7.36332 5.86851 6.14533 7.97232C4.9827 10.0761 4.3737 12.0138 4.31834 13.7855C4.59516 13.7301 4.81661 13.7024 4.9827 13.7024C5.14879 13.7024 5.34256 13.7024 5.56401 13.7024C7.00346 13.7024 8.22145 14.2007 9.21799 15.1972C10.2145 16.1938 10.7128 17.4118 10.7128 18.8512C10.7128 20.2353 10.2145 21.4533 9.21799 22.5052C8.22145 23.5017 7.00346 24 5.56401 24ZM18.8512 24C17.0796 24 15.6955 23.391 14.699 22.173C13.7578 20.8997 13.2872 19.3218 13.2872 17.4394C13.2872 15.0035 13.6471 12.7889 14.3668 10.7958C15.1419 8.74741 16.1661 6.83737 17.4394 5.06574C18.7128 3.29412 20.1522 1.60554 21.7578 0L24 1.91003C22.173 3.84775 20.6505 5.86851 19.4325 7.97232C18.2699 10.0761 17.6609 12.0138 17.6055 13.7855C17.8824 13.7301 18.1038 13.7024 18.2699 13.7024C18.4914 13.7024 18.6851 13.7024 18.8512 13.7024C20.2907 13.7024 21.5086 14.2007 22.5052 15.1972C23.5017 16.1938 24 17.4118 24 18.8512C24 20.2353 23.5017 21.4533 22.5052 22.5052C21.564 23.5017 20.346 24 18.8512 24Z"
																			fill="#205B4F"></path>
																	</svg>
																</div>
															</div>
														</div>
													</div>
													<div class="elementor-element elementor-element-5e4b235 elementor-widget elementor-widget-testimonial"
														data-id="5e4b235" data-element_type="widget"
														data-widget_type="testimonial.default">
														<div class="elementor-widget-container">
															<style>
																/*! elementor - v3.10.1 - 17-01-2023 */
																.elementor-testimonial-wrapper {
																	overflow: hidden;
																	text-align: center
																}

																.elementor-testimonial-wrapper .elementor-testimonial-content {
																	font-size: 1.3em;
																	margin-bottom: 20px
																}

																.elementor-testimonial-wrapper .elementor-testimonial-name {
																	line-height: 1.5;
																	display: block
																}

																.elementor-testimonial-wrapper .elementor-testimonial-job {
																	font-size: .85em;
																	display: block
																}

																.elementor-testimonial-wrapper .elementor-testimonial-meta {
																	width: 100%;
																	line-height: 1
																}

																.elementor-testimonial-wrapper .elementor-testimonial-meta-inner {
																	display: inline-block
																}

																.elementor-testimonial-wrapper .elementor-testimonial-meta .elementor-testimonial-details,
																.elementor-testimonial-wrapper .elementor-testimonial-meta .elementor-testimonial-image {
																	display: table-cell;
																	vertical-align: middle
																}

																.elementor-testimonial-wrapper .elementor-testimonial-meta .elementor-testimonial-image img {
																	width: 60px;
																	height: 60px;
																	border-radius: 50%;
																	-o-object-fit: cover;
																	object-fit: cover;
																	max-width: none
																}

																.elementor-testimonial-wrapper .elementor-testimonial-meta.elementor-testimonial-image-position-aside .elementor-testimonial-image {
																	padding-right: 15px
																}

																.elementor-testimonial-wrapper .elementor-testimonial-meta.elementor-testimonial-image-position-aside .elementor-testimonial-details {
																	text-align: left
																}

																.elementor-testimonial-wrapper .elementor-testimonial-meta.elementor-testimonial-image-position-top .elementor-testimonial-details,
																.elementor-testimonial-wrapper .elementor-testimonial-meta.elementor-testimonial-image-position-top .elementor-testimonial-image {
																	display: block
																}

																.elementor-testimonial-wrapper .elementor-testimonial-meta.elementor-testimonial-image-position-top .elementor-testimonial-image {
																	margin-bottom: 20px
																}
															</style>
															<div class="elementor-testimonial-wrapper">
																<div class="elementor-testimonial-content">Lotus spa
																	center is the best till date I have experienced in
																	past few months. They know hospitality very well.
																	Even the spa &amp; massage is extremely soothing.
																	Rates are also pretty reasonable.</div>

																<div
																	class="elementor-testimonial-meta elementor-has-image elementor-testimonial-image-position-top">
																	<div class="elementor-testimonial-meta-inner">
																		<div class="elementor-testimonial-image">
																			<img decoding="async" width="40" height="40"
																				src="<?php echo get_template_directory_uri(); ?>/assets/landing4/wp-content/uploads/2021/08/lotus-spa-template-testimonial-avatar-img.jpg"
																				class="attachment-full size-full wp-image-62"
																				alt="">
																		</div>

																		<div class="elementor-testimonial-details">
																			<div class="elementor-testimonial-name">
																				Brenda Greene</div>
																			<div class="elementor-testimonial-job">San
																				Francisco</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</section>
									<section
										class="elementor-section elementor-top-section elementor-element elementor-element-4ad28cb elementor-section-boxed elementor-section-height-default elementor-section-height-default"
										data-id="4ad28cb" data-element_type="section"
										data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
										<div class="elementor-container elementor-column-gap-no">
											<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-36707ee"
												data-id="36707ee" data-element_type="column">
												<div class="elementor-widget-wrap elementor-element-populated">
													<div class="elementor-element elementor-element-cafa816 elementor-widget elementor-widget-heading"
														data-id="cafa816" data-element_type="widget"
														data-widget_type="heading.default">
														<div class="elementor-widget-container">
															<h6 class="elementor-heading-title elementor-size-default">
																What Are You Waiting For...</h6>
														</div>
													</div>
													<div class="elementor-element elementor-element-3c1d578 elementor-widget elementor-widget-heading"
														data-id="3c1d578" data-element_type="widget"
														data-widget_type="heading.default">
														<div class="elementor-widget-container">
															<h2 class="elementor-heading-title elementor-size-default">
																Make an appointment</h2>
														</div>
													</div>
													<div class="elementor-element elementor-element-e3a8b82 elementor-widget elementor-widget-text-editor"
														data-id="e3a8b82" data-element_type="widget"
														data-widget_type="text-editor.default">
														<div class="elementor-widget-container">
															<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
																Ut elit tellus, luctus nec ullamcorper mattis, pulvinar
																dapibus leo.</p>
														</div>
													</div>
													<div class="elementor-element elementor-element-a99906e elementor-position-left elementor-view-default elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
														data-id="a99906e" data-element_type="widget"
														data-widget_type="icon-box.default">
														<div class="elementor-widget-container">
															<div class="elementor-icon-box-wrapper">
																<div class="elementor-icon-box-icon">
																	<span class="elementor-icon elementor-animation-">
																		<i aria-hidden="true"
																			class="fas fa-map-marker-alt"></i> </span>
																</div>
																<div class="elementor-icon-box-content">
																	<h6 class="elementor-icon-box-title">
																		<span>
																			Our location </span>
																	</h6>
																	<p class="elementor-icon-box-description">
																		123 Fifth Avenue, New York, NY 10160, United
																		States. </p>
																</div>
															</div>
														</div>
													</div>
													<div class="elementor-element elementor-element-dc58d52 elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
														data-id="dc58d52" data-element_type="widget"
														data-widget_type="divider.default">
														<div class="elementor-widget-container">
															<div class="elementor-divider">
																<span class="elementor-divider-separator">
																</span>
															</div>
														</div>
													</div>
													<div class="elementor-element elementor-element-7f23fe1 elementor-position-left elementor-widget__width-auto elementor-widget-tablet__width-inherit elementor-view-default elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
														data-id="7f23fe1" data-element_type="widget"
														data-widget_type="icon-box.default">
														<div class="elementor-widget-container">
															<div class="elementor-icon-box-wrapper">
																<div class="elementor-icon-box-icon">
																	<span class="elementor-icon elementor-animation-">
																		<i aria-hidden="true" class="fas fa-clock"></i>
																	</span>
																</div>
																<div class="elementor-icon-box-content">
																	<h6 class="elementor-icon-box-title">
																		<span>
																			Opening Hours </span>
																	</h6>
																	<p class="elementor-icon-box-description">
																		Mon-Fri: 6am-10pm<br>Sat-Sun: 8am-2pm </p>
																</div>
															</div>
														</div>
													</div>
													<div class="elementor-element elementor-element-8eff3a5 elementor-position-left elementor-widget__width-auto elementor-widget-tablet__width-inherit elementor-view-default elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
														data-id="8eff3a5" data-element_type="widget"
														data-widget_type="icon-box.default">
														<div class="elementor-widget-container">
															<div class="elementor-icon-box-wrapper">
																<div class="elementor-icon-box-icon">
																	<span class="elementor-icon elementor-animation-">
																		<i aria-hidden="true" class="fas fa-store"></i>
																	</span>
																</div>
																<div class="elementor-icon-box-content">
																	<h6 class="elementor-icon-box-title">
																		<span>
																			Contact </span>
																	</h6>
																	<p class="elementor-icon-box-description">
																		Phone: +1 123-456-7890<br>Email:
																		mail@example.com </p>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-913decc"
												data-id="913decc" data-element_type="column">
												<div class="elementor-widget-wrap elementor-element-populated">
													<div class="elementor-element elementor-element-c056a3b elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
														data-id="c056a3b" data-element_type="widget"
														data-widget_type="divider.default">
														<div class="elementor-widget-container">
															<div class="elementor-divider">
																<span class="elementor-divider-separator">
																</span>
															</div>
														</div>
													</div>
													<div class="elementor-element elementor-element-afa8a7f elementor-widget elementor-widget-wpforms"
														data-id="afa8a7f" data-element_type="widget"
														data-widget_type="wpforms.default">
														<div class="elementor-widget-container">
															<div class="wpforms-container " id="wpforms-50">
																<form id="wpforms-form-50"
																	class="wpforms-validate wpforms-form wpforms-ajax-form"
																	data-formid="50" method="post"
																	enctype="multipart/form-data"
																	action="/?simply_static_page=177"
																	data-token="311902c2c0a732d4be9281bfd94f5704">
																	<noscript class="wpforms-error-noscript">Please
																		enable JavaScript in your browser to complete
																		this form.</noscript>
																	<div class="wpforms-field-container">
																		<div id="wpforms-50-field_0-container"
																			class="wpforms-field wpforms-field-name"
																			data-field-id="0">
																			<label class="wpforms-field-label"
																				for="wpforms-50-field_0">Name <span
																					class="wpforms-required-label">*</span></label><input
																				type="text" id="wpforms-50-field_0"
																				class="wpforms-field-large wpforms-field-required"
																				name="wpforms[fields][0]" required>
																		</div>
																		<div id="wpforms-50-field_1-container"
																			class="wpforms-field wpforms-field-email"
																			data-field-id="1">
																			<label class="wpforms-field-label"
																				for="wpforms-50-field_1">Email <span
																					class="wpforms-required-label">*</span></label><input
																				type="email" id="wpforms-50-field_1"
																				class="wpforms-field-large wpforms-field-required"
																				name="wpforms[fields][1]" required>
																		</div>
																		<div id="wpforms-50-field_3-container"
																			class="wpforms-field wpforms-field-number"
																			data-field-id="3">
																			<label class="wpforms-field-label"
																				for="wpforms-50-field_3">Phone number
																				<span
																					class="wpforms-required-label">*</span></label><input
																				type="number" pattern="\d*"
																				id="wpforms-50-field_3"
																				class="wpforms-field-large wpforms-field-required"
																				name="wpforms[fields][3]" required>
																		</div>
																	</div>
																	<div class="wpforms-submit-container">
																		<input type="hidden" name="wpforms[id]"
																			value="50"><input type="hidden"
																			name="wpforms[author]" value="1"><input
																			type="hidden" name="wpforms[post_id]"
																			value="554"><button type="submit"
																			name="wpforms[submit]"
																			id="wpforms-submit-50"
																			class="wpforms-submit"
																			data-alt-text="Sending..."
																			data-submit-text="Save up to 50% today"
																			aria-live="assertive"
																			value="wpforms-submit">Save up to 50%
																			today</button><img decoding="async"
																			src="<?php echo get_template_directory_uri(); ?>/assets/landing4/wp-content/plugins/wpforms-lite/assets/images/submit-spin.svg"
																			class="wpforms-submit-spinner"
																			style="display: none;" width="26"
																			height="26" alt="Loading">
																	</div>
																</form>
															</div> <!-- .wpforms-container -->
														</div>
													</div>
												</div>
											</div>
										</div>
									</section>
								</div>



							</div>
							<!-- .entry-content .clear -->



						</article><!-- #post-## -->

					</main><!-- #main -->


				</div>
				<!-- #primary -->


			</div> <!-- ast-container -->
		</div>
		<!-- #content -->
		<footer class="site-footer" id="colophon" itemtype="https://schema.org/WPFooter" itemscope="itemscope"
			itemid="#colophon">
			<div class="site-primary-footer-wrap ast-builder-grid-row-container site-footer-focus-item ast-builder-grid-row-4-equal ast-builder-grid-row-tablet-2-equal ast-builder-grid-row-mobile-full ast-footer-row-stack ast-footer-row-tablet-stack ast-footer-row-mobile-stack"
				data-section="section-primary-footer-builder">
				<div class="ast-builder-grid-row-container-inner">
					<div class="ast-builder-footer-grid-columns site-primary-footer-inner-wrap ast-builder-grid-row">
						<div class="site-footer-primary-section-1 site-footer-section site-footer-section-1">
							<div class="footer-widget-area widget-area site-footer-focus-item ast-footer-html-1"
								data-section="section-fb-html-1">
								<div class="ast-header-html inner-link-style-">
									<div class="ast-builder-html-element">
										<p><img class="alignnone size-full wp-image-15"
												src="https://websitedemos.net/lotus-spa-02/wp-content/uploads/sites/936/2021/08/site-logo.svg"
												alt="" width="60" height="40"></p>
										<p>Nisl risus, aliquam ac leo tellus tempus mauris adipiscing tortor pharetra
											quam nunc risus.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="site-footer-primary-section-2 site-footer-section site-footer-section-2">
							<aside
								class="footer-widget-area widget-area site-footer-focus-item footer-widget-area-inner"
								data-section="sidebar-widgets-footer-widget-1" aria-label="Footer Widget 1">
								<section id="nav_menu-1" class="widget widget_nav_menu">
									<h2 class="widget-title">Services</h2>
									<nav class="menu-footer-services-container" aria-label="Services">
										<ul id="menu-footer-services" class="menu">
											<li id="menu-item-217"
												class="menu-item menu-item-type-custom menu-item-object-custom menu-item-217">
												<a href="#" class="menu-link">Luxury Spa</a></li>
											<li id="menu-item-218"
												class="menu-item menu-item-type-custom menu-item-object-custom menu-item-218">
												<a href="#" class="menu-link">Stone Therapy</a></li>
											<li id="menu-item-219"
												class="menu-item menu-item-type-custom menu-item-object-custom menu-item-219">
												<a href="#" class="menu-link">Aroma Therapy</a></li>
											<li id="menu-item-220"
												class="menu-item menu-item-type-custom menu-item-object-custom menu-item-220">
												<a href="#" class="menu-link">Skin Treatment</a></li>
										</ul>
									</nav>
								</section>
							</aside>
						</div>
						<div class="site-footer-primary-section-3 site-footer-section site-footer-section-3">
							<aside
								class="footer-widget-area widget-area site-footer-focus-item footer-widget-area-inner"
								data-section="sidebar-widgets-footer-widget-2" aria-label="Footer Widget 2">
								<section id="nav_menu-2" class="widget widget_nav_menu">
									<h2 class="widget-title">About</h2>
									<nav class="menu-footer-about-container" aria-label="About">
										<ul id="menu-footer-about" class="menu">
											<li id="menu-item-222"
												class="menu-item menu-item-type-custom menu-item-object-custom menu-item-222">
												<a href="#" class="menu-link">Our story</a></li>
											<li id="menu-item-223"
												class="menu-item menu-item-type-custom menu-item-object-custom menu-item-223">
												<a href="#" class="menu-link">Experts</a></li>
											<li id="menu-item-224"
												class="menu-item menu-item-type-custom menu-item-object-custom menu-item-224">
												<a href="#" class="menu-link">Pricing</a></li>
											<li id="menu-item-225"
												class="menu-item menu-item-type-custom menu-item-object-custom menu-item-225">
												<a href="#" class="menu-link">Contact us</a></li>
										</ul>
									</nav>
								</section>
							</aside>
						</div>
						<div class="site-footer-primary-section-4 site-footer-section site-footer-section-4">
							<aside
								class="footer-widget-area widget-area site-footer-focus-item footer-widget-area-inner"
								data-section="sidebar-widgets-footer-widget-3" aria-label="Footer Widget 3">
								<section id="block-7" class="widget widget_block">
									<h5 class="has-ast-global-color-5-color has-text-color">Get in touch</h5>
								</section>
							</aside>
							<div class="footer-widget-area widget-area site-footer-focus-item ast-footer-html-2"
								data-section="section-fb-html-2">
								<div class="ast-header-html inner-link-style-">
									<div class="ast-builder-html-element">
										<h5>Get In Touch</h5>
										<p>123 Fifth Avenue, New York, NY 10160, United States.<br>
											+1 123 456 7890<br>
											mail@example.com</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
			<div class="site-below-footer-wrap ast-builder-grid-row-container site-footer-focus-item ast-builder-grid-row-2-equal ast-builder-grid-row-tablet-full ast-builder-grid-row-mobile-full ast-footer-row-stack ast-footer-row-tablet-stack ast-footer-row-mobile-stack"
				data-section="section-below-footer-builder">
				<div class="ast-builder-grid-row-container-inner">
					<div class="ast-builder-footer-grid-columns site-below-footer-inner-wrap ast-builder-grid-row">
						<div class="site-footer-below-section-1 site-footer-section site-footer-section-1">
							<div class="ast-builder-layout-element ast-flex site-footer-focus-item ast-footer-copyright"
								data-section="section-footer-builder">
								<div class="ast-footer-copyright">
									<p>Copyright &copy; 2023 wp_elementor. Powered by wp_elementor.</p>
								</div>
							</div>
						</div>
						<div class="site-footer-below-section-2 site-footer-section site-footer-section-2">
							<div class="ast-builder-layout-element ast-flex site-footer-focus-item"
								data-section="section-fb-social-icons-1">
								<div class="ast-footer-social-1-wrap ast-footer-social-wrap">
									<div
										class="footer-social-inner-wrap element-social-inner-wrap social-show-label-false ast-social-color-type-custom ast-social-stack-none ast-social-element-style-filled">
										<a aria-label="Instagram" target="_blank" rel="noopener noreferrer"
											style="--color: #8a3ab9; --background-color: transparent;"
											class="ast-builder-social-element ast-inline-flex ast-instagram footer-social-item"><span
												class="ahfb-svg-iconset ast-inline-flex svg-baseline"><svg
													xmlns="http://www.w3.org/2000/svg" viewbox="0 0 448 512">
													<path
														d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z">
													</path>
												</svg></span></a><a aria-label="Facebook" target="_blank"
											rel="noopener noreferrer"
											style="--color: #557dbc; --background-color: transparent;"
											class="ast-builder-social-element ast-inline-flex ast-facebook footer-social-item"><span
												class="ahfb-svg-iconset ast-inline-flex svg-baseline"><svg
													xmlns="http://www.w3.org/2000/svg" viewbox="0 0 512 512">
													<path
														d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z">
													</path>
												</svg></span></a><a aria-label="Twitter" target="_blank"
											rel="noopener noreferrer"
											style="--color: #7acdee; --background-color: transparent;"
											class="ast-builder-social-element ast-inline-flex ast-twitter footer-social-item"><span
												class="ahfb-svg-iconset ast-inline-flex svg-baseline"><svg
													xmlns="http://www.w3.org/2000/svg" viewbox="0 0 512 512">
													<path
														d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z">
													</path>
												</svg></span></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</footer><!-- #colophon -->
	</div>
	<!-- #page -->
	<link rel="stylesheet" id="wpforms-base-css"
		href="<?php echo get_template_directory_uri(); ?>/assets/landing4/wp-content/plugins/wpforms-lite/assets/css/wpforms-base.min.css?ver=1.7.9.1" media="all">
	<script
		id="astra-theme-js-js-extra">var astra = { "break_point": "921", "isRtl": "", "is_scroll_to_id": "", "is_scroll_to_top": "" };</script>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/landing4/wp-content/themes/astra/assets/js/minified/frontend.min.js?ver=4.0.2"
		id="astra-theme-js-js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/landing4/wp-content/plugins/pro-elements/assets/js/webpack-pro.runtime.min.js?ver=3.8.0"
		id="elementor-pro-webpack-runtime-js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/landing4/wp-content/plugins/elementor/assets/js/webpack.runtime.min.js?ver=3.10.1"
		id="elementor-webpack-runtime-js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/landing4/wp-includes/js/jquery/jquery.min.js?ver=3.6.1" id="jquery-core-js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/landing4/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.3.2" id="jquery-migrate-js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/landing4/wp-content/plugins/elementor/assets/js/frontend-modules.min.js?ver=3.10.1"
		id="elementor-frontend-modules-js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/landing4/wp-includes/js/dist/vendor/regenerator-runtime.min.js?ver=0.13.9"
		id="regenerator-runtime-js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/landing4/wp-includes/js/dist/vendor/wp-polyfill.min.js?ver=3.15.0" id="wp-polyfill-js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/landing4/wp-includes/js/dist/hooks.min.js?ver=4169d3cf8e8d95a3d6d5" id="wp-hooks-js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/landing4/wp-includes/js/dist/i18n.min.js?ver=9e794f35a71bb98672ae" id="wp-i18n-js"></script>
	<script id="wp-i18n-js-after">
		wp.i18n.setLocaleData({ 'text directionltr': ['ltr'] });
	</script>
	<script
		id="elementor-pro-frontend-js-before">var ElementorProFrontendConfig = { "ajaxurl": ".\/\/wp-admin\/admin-ajax.php", "nonce": "b1e5a1b040", "urls": { "assets": ".\/\/wp-content\/plugins\/pro-elements\/assets\/", "rest": ".\/\/wp-json\/" }, "shareButtonsNetworks": { "facebook": { "title": "Facebook", "has_counter": true }, "twitter": { "title": "Twitter" }, "linkedin": { "title": "LinkedIn", "has_counter": true }, "pinterest": { "title": "Pinterest", "has_counter": true }, "reddit": { "title": "Reddit", "has_counter": true }, "vk": { "title": "VK", "has_counter": true }, "odnoklassniki": { "title": "OK", "has_counter": true }, "tumblr": { "title": "Tumblr" }, "digg": { "title": "Digg" }, "skype": { "title": "Skype" }, "stumbleupon": { "title": "StumbleUpon", "has_counter": true }, "mix": { "title": "Mix" }, "telegram": { "title": "Telegram" }, "pocket": { "title": "Pocket", "has_counter": true }, "xing": { "title": "XING", "has_counter": true }, "whatsapp": { "title": "WhatsApp" }, "email": { "title": "Email" }, "print": { "title": "Print" } }, "facebook_sdk": { "lang": "en_US", "app_id": "" }, "lottie": { "defaultAnimationUrl": ".\/\/wp-content\/plugins\/pro-elements\/modules\/lottie\/assets\/animations\/default.json" } };</script>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/landing4/wp-content/plugins/pro-elements/assets/js/frontend.min.js?ver=3.8.0"
		id="elementor-pro-frontend-js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/landing4/wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min.js?ver=4.0.2"
		id="elementor-waypoints-js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/landing4/wp-includes/js/jquery/ui/core.min.js?ver=1.13.2" id="jquery-ui-core-js"></script>
	<script
		id="elementor-frontend-js-before">var elementorFrontendConfig = { "environmentMode": { "edit": false, "wpPreview": false, "isScriptDebug": false }, "i18n": { "shareOnFacebook": "Share on Facebook", "shareOnTwitter": "Share on Twitter", "pinIt": "Pin it", "download": "Download", "downloadImage": "Download image", "fullscreen": "Fullscreen", "zoom": "Zoom", "share": "Share", "playVideo": "Play Video", "previous": "Previous", "next": "Next", "close": "Close" }, "is_rtl": false, "breakpoints": { "xs": 0, "sm": 480, "md": 768, "lg": 1025, "xl": 1440, "xxl": 1600 }, "responsive": { "breakpoints": { "mobile": { "label": "Mobile", "value": 767, "default_value": 767, "direction": "max", "is_enabled": true }, "mobile_extra": { "label": "Mobile Extra", "value": 880, "default_value": 880, "direction": "max", "is_enabled": false }, "tablet": { "label": "Tablet", "value": 1024, "default_value": 1024, "direction": "max", "is_enabled": true }, "tablet_extra": { "label": "Tablet Extra", "value": 1200, "default_value": 1200, "direction": "max", "is_enabled": false }, "laptop": { "label": "Laptop", "value": 1366, "default_value": 1366, "direction": "max", "is_enabled": false }, "widescreen": { "label": "Widescreen", "value": 2400, "default_value": 2400, "direction": "min", "is_enabled": false } } }, "version": "3.10.1", "is_static": false, "experimentalFeatures": { "e_dom_optimization": true, "e_optimized_assets_loading": true, "e_optimized_css_loading": true, "a11y_improvements": true, "additional_custom_breakpoints": true, "e_hidden_wordpress_widgets": true, "theme_builder_v2": true, "landing-pages": true, "kit-elements-defaults": true, "page-transitions": true, "notes": true, "loop": true, "form-submissions": true, "e_scroll_snap": true }, "urls": { "assets": ".\/\/wp-content\/plugins\/elementor\/assets\/" }, "settings": { "page": [], "editorPreferences": [] }, "kit": { "active_breakpoints": ["viewport_mobile", "viewport_tablet"], "global_image_lightbox": "yes", "lightbox_enable_counter": "yes", "lightbox_enable_fullscreen": "yes", "lightbox_enable_zoom": "yes", "lightbox_enable_share": "yes", "lightbox_title_src": "title", "lightbox_description_src": "description" }, "post": { "id": 554, "title": "wp_elementor", "excerpt": "", "featuredImage": false } };</script>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/landing4/wp-content/plugins/elementor/assets/js/frontend.min.js?ver=3.10.1"
		id="elementor-frontend-js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/landing4/wp-content/plugins/pro-elements/assets/js/elements-handlers.min.js?ver=3.8.0"
		id="pro-elements-handlers-js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/landing4/wp-includes/js/underscore.min.js?ver=1.13.4" id="underscore-js"></script>
	<script id="wp-util-js-extra">var _wpUtilSettings = { "ajax": { "url": "\/wp-admin\/admin-ajax.php" } };</script>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/landing4/wp-includes/js/wp-util.min.js?ver=6.1.1" id="wp-util-js"></script>
	<script
		id="wpforms-elementor-js-extra">var wpformsElementorVars = { "captcha_provider": "recaptcha", "recaptcha_type": "v2" };</script>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/landing4/wp-content/plugins/wpforms-lite/assets/js/integrations/elementor/frontend.min.js?ver=1.7.9.1"
		id="wpforms-elementor-js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/landing4/wp-content/plugins/wpforms-lite/assets/lib/jquery.validate.min.js?ver=1.19.5"
		id="wpforms-validation-js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/landing4/wp-content/plugins/wpforms-lite/assets/lib/mailcheck.min.js?ver=1.1.2"
		id="wpforms-mailcheck-js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/landing4/wp-content/plugins/wpforms-lite/assets/lib/punycode.min.js?ver=1.0.0"
		id="wpforms-punycode-js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/landing4/wp-content/plugins/wpforms-lite/assets/js/utils.min.js?ver=1.7.9.1"
		id="wpforms-generic-utils-js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/landing4/wp-content/plugins/wpforms-lite/assets/js/wpforms.min.js?ver=1.7.9.1" id="wpforms-js"></script>
	<script>/(trident|msie)/i.test(navigator.userAgent) && document.getElementById && window.addEventListener && window.addEventListener("hashchange", function () { var t, e = location.hash.substring(1); /^[A-z0-9_-]+$/.test(e) && (t = document.getElementById(e)) && (/^(?:a|select|input|button|textarea)$/i.test(t.tagName) || (t.tabIndex = -1), t.focus()) }, !1);</script>
	<script type="text/javascript">
		/* <![CDATA[ */
		var wpforms_settings = { "val_required": "This field is required.", "val_email": "Please enter a valid email address.", "val_email_suggestion": "Did you mean {suggestion}?", "val_email_suggestion_title": "Click to accept this suggestion.", "val_email_restricted": "This email address is not allowed.", "val_number": "Please enter a valid number.", "val_number_positive": "Please enter a valid positive number.", "val_confirm": "Field values do not match.", "val_checklimit": "You have exceeded the number of allowed selections: {#}.", "val_limit_characters": "{count} of {limit} max characters.", "val_limit_words": "{count} of {limit} max words.", "val_recaptcha_fail_msg": "Google reCAPTCHA verification failed, please try again later.", "val_inputmask_incomplete": "Please fill out the field in required format.", "uuid_cookie": "", "locale": "en", "wpforms_plugin_url": ".\/\/wp-content\/plugins\/wpforms-lite\/", "gdpr": "", "ajaxurl": ".\/\/wp-admin\/admin-ajax.php", "mailcheck_enabled": "1", "mailcheck_domains": [], "mailcheck_toplevel_domains": ["dev"], "is_ssl": "1", "page_title": "Home", "page_id": "554" }
/* ]]> */
	</script>
</body>
