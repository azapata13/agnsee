<?php
/**
 * Agnsee — fonctions du thème
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'AGNSEE_VERSION', '1.0.0' );
define( 'AGNSEE_LANG_COOKIE', 'agnsee_lang' );

/* ==========================================================================
   1. SETUP DU THÈME
   ========================================================================== */
function agnsee_setup() {
	load_theme_textdomain( 'agnsee', get_template_directory() . '/languages' );

	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'custom-logo', array(
		'height'      => 60,
		'width'       => 200,
		'flex-height' => true,
		'flex-width'  => true,
	) );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'script', 'style' ) );
	add_theme_support( 'align-wide' );

	register_nav_menus( array(
		'primary' => __( 'Menu principal', 'agnsee' ),
		'footer'  => __( 'Menu pied de page', 'agnsee' ),
	) );
}
add_action( 'after_setup_theme', 'agnsee_setup' );

/* ==========================================================================
   2. ASSETS
   ========================================================================== */
function agnsee_enqueue_assets() {
	wp_enqueue_style( 'agnsee-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap', array(), null );
	wp_enqueue_style( 'agnsee-style', get_stylesheet_uri(), array(), AGNSEE_VERSION );

	wp_enqueue_script( 'agnsee-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), AGNSEE_VERSION, true );
	wp_enqueue_script( 'agnsee-lang-toggle', get_template_directory_uri() . '/assets/js/lang-toggle.js', array(), AGNSEE_VERSION, true );
	wp_enqueue_script( 'agnsee-contact-form', get_template_directory_uri() . '/assets/js/contact-form.js', array(), AGNSEE_VERSION, true );

	wp_localize_script( 'agnsee-lang-toggle', 'agnseeLang', array(
		'ajaxUrl' => admin_url( 'admin-ajax.php' ),
		'nonce'   => wp_create_nonce( 'agnsee_lang_nonce' ),
		'current' => agnsee_get_lang(),
	) );
}
add_action( 'wp_enqueue_scripts', 'agnsee_enqueue_assets' );

/**
 * Empêche LiteSpeed d'optimiser/retarder les scripts critiques (nav, langue).
 */
function agnsee_no_optimize_attr( $tag, $handle ) {
	$critical = array( 'agnsee-navigation', 'agnsee-lang-toggle' );
	if ( in_array( $handle, $critical, true ) && strpos( $tag, 'data-no-optimize' ) === false ) {
		$tag = str_replace( ' src=', ' data-no-optimize="1" src=', $tag );
	}
	return $tag;
}
add_filter( 'script_loader_tag', 'agnsee_no_optimize_attr', 10, 2 );

/* ==========================================================================
   3. WIDGETS — FOOTER 4 COLONNES
   ========================================================================== */
function agnsee_widgets_init() {
	for ( $i = 2; $i <= 4; $i++ ) {
		register_sidebar( array(
			'name'          => sprintf( __( 'Footer — Colonne %d', 'agnsee' ), $i ),
			'id'            => 'footer-' . $i,
			'before_widget' => '<div class="footer-widget">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="footer-col-title">',
			'after_title'   => '</h4>',
		) );
	}
}
add_action( 'widgets_init', 'agnsee_widgets_init' );

/* ==========================================================================
   4. TRILINGUE FR / EN / ES — COOKIE agnsee_lang
   ========================================================================== */

define( 'AGNSEE_LANGS', array( 'fr', 'en', 'es' ) );

/**
 * Retourne la langue courante ('fr', 'en' ou 'es'). Défaut : fr.
 */
function agnsee_get_lang() {
	if ( isset( $_COOKIE[ AGNSEE_LANG_COOKIE ] ) && in_array( $_COOKIE[ AGNSEE_LANG_COOKIE ], AGNSEE_LANGS, true ) ) {
		return sanitize_key( $_COOKIE[ AGNSEE_LANG_COOKIE ] );
	}
	return 'fr';
}

/**
 * Retourne $fr, $en ou $es selon la langue courante. Raccourci pour les templates.
 * $es est optionnel : si omis, on retombe sur $en (pour ne pas casser les
 * anciens appels à 2 arguments).
 */
function agnsee_t( $fr, $en, $es = null ) {
	$lang = agnsee_get_lang();
	if ( 'es' === $lang ) {
		return null !== $es ? $es : $en;
	}
	return 'en' === $lang ? $en : $fr;
}

/**
 * Ajoute data-lang="fr|en" sur la balise <html>.
 */
function agnsee_html_lang_attribute( $output ) {
	return $output . ' data-lang="' . esc_attr( agnsee_get_lang() ) . '"';
}
add_filter( 'language_attributes', 'agnsee_html_lang_attribute' );

/**
 * AJAX : changer la langue (pose le cookie côté serveur également).
 */
function agnsee_ajax_set_lang() {
	check_ajax_referer( 'agnsee_lang_nonce', 'nonce' );

	$lang = isset( $_POST['lang'] ) ? sanitize_key( wp_unslash( $_POST['lang'] ) ) : 'fr';
	if ( ! in_array( $lang, AGNSEE_LANGS, true ) ) {
		$lang = 'fr';
	}

	setcookie( AGNSEE_LANG_COOKIE, $lang, time() + YEAR_IN_SECONDS, '/' );

	wp_send_json_success( array( 'lang' => $lang ) );
}
add_action( 'wp_ajax_agnsee_set_lang', 'agnsee_ajax_set_lang' );
add_action( 'wp_ajax_nopriv_agnsee_set_lang', 'agnsee_ajax_set_lang' );

/* ==========================================================================
   5. FORMULAIRE DE CONTACT — soumis directement à FormSubmit.co en JS
   (voir assets/js/contact-form.js), aucun handler serveur nécessaire.
   ========================================================================== */

/* ==========================================================================
   6. NETTOYAGE WORDPRESS
   ========================================================================== */
function agnsee_cleanup_head() {
	remove_action( 'wp_head', 'wp_generator' );
	remove_action( 'wp_head', 'wlwmanifest_link' );
	remove_action( 'wp_head', 'rsd_link' );
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
}
add_action( 'init', 'agnsee_cleanup_head' );

/**
 * Longueur d'extrait par défaut pour les cartes (produits, outils, articles).
 */
function agnsee_excerpt_length( $length ) {
	return 24;
}
add_filter( 'excerpt_length', 'agnsee_excerpt_length' );

/* ==========================================================================
   7. IMAGES — REPLI AUTOMATIQUE
   ========================================================================== */

/**
 * Retourne l'URL d'une image du thème si le fichier existe dans
 * assets/images/{$relative}, sinon false. Essaie plusieurs extensions.
 *
 * Permet de déposer les images directement sur le serveur (FTP / File
 * Manager cPanel) sans toucher au code : dès que le fichier existe,
 * il s'affiche automatiquement.
 */
function agnsee_image_url( $relative, $extensions = array( 'svg', 'png', 'jpg', 'jpeg', 'webp' ) ) {
	foreach ( $extensions as $ext ) {
		$path = get_template_directory() . '/assets/images/' . $relative . '.' . $ext;
		if ( file_exists( $path ) ) {
			return get_template_directory_uri() . '/assets/images/' . $relative . '.' . $ext;
		}
	}
	return false;
}

/**
 * Même principe que agnsee_image_url() mais pour les vidéos (assets/video/).
 */
function agnsee_video_url( $relative, $extensions = array( 'mp4', 'webm' ) ) {
	foreach ( $extensions as $ext ) {
		$path = get_template_directory() . '/assets/video/' . $relative . '.' . $ext;
		if ( file_exists( $path ) ) {
			return get_template_directory_uri() . '/assets/video/' . $relative . '.' . $ext;
		}
	}
	return false;
}

/* ==========================================================================
   8. CUSTOMIZER — HERO VIDÉO
   ========================================================================== */

/**
 * URL de la vidéo hero : réglable dans Personnaliser > Hero (page d'accueil),
 * avec une valeur par défaut pointant vers le média déjà uploadé. Se met à
 * jour sans redéploiement, directement depuis wp-admin.
 */
function agnsee_hero_video_url() {
	$url = get_theme_mod( 'agnsee_hero_video_url', 'https://agnsee.ca/wp-content/uploads/2026/07/agnseehero.mp4' );
	return $url ? esc_url( $url ) : agnsee_video_url( 'hero' );
}

function agnsee_hero_poster_url() {
	$poster_id = get_theme_mod( 'agnsee_hero_poster' );
	if ( $poster_id ) {
		$poster = wp_get_attachment_image_url( $poster_id, 'full' );
		if ( $poster ) {
			return esc_url( $poster );
		}
	}
	return agnsee_image_url( 'hero/hero-poster' );
}

/**
 * URL du logo Agnsee (fond transparent). Priorité : logo personnalisé WP
 * (Personnaliser > Identité du site) > URL réglée dans Personnaliser > Hero
 * (par défaut le média déjà uploadé) > fichier local du thème.
 */
function agnsee_get_logo_url() {
	if ( has_custom_logo() ) {
		$logo_id  = get_theme_mod( 'custom_logo' );
		$logo_src = wp_get_attachment_image_src( $logo_id, 'full' );
		if ( $logo_src ) {
			return esc_url( $logo_src[0] );
		}
	}

	$url = get_theme_mod( 'agnsee_logo_url', 'https://agnsee.ca/wp-content/uploads/2026/07/logo-removebg-preview.png' );
	if ( $url ) {
		return esc_url( $url );
	}

	return agnsee_image_url( 'logo' );
}

function agnsee_customize_register( $wp_customize ) {
	$wp_customize->add_section( 'agnsee_hero', array(
		'title'    => __( 'Hero — Page d\'accueil', 'agnsee' ),
		'priority' => 30,
	) );

	$wp_customize->add_setting( 'agnsee_hero_video_url', array(
		'default'           => 'https://agnsee.ca/wp-content/uploads/2026/07/agnseehero.mp4',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( 'agnsee_hero_video_url', array(
		'label'       => __( 'URL de la vidéo hero (.mp4)', 'agnsee' ),
		'description' => __( 'Colle ici l\'URL du média WordPress (Médiathèque > Copier le lien).', 'agnsee' ),
		'section'     => 'agnsee_hero',
		'type'        => 'url',
	) );

	$wp_customize->add_setting( 'agnsee_hero_poster', array(
		'sanitize_callback' => 'absint',
	) );
	$wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'agnsee_hero_poster', array(
		'label'       => __( 'Image de secours (avant chargement de la vidéo)', 'agnsee' ),
		'section'     => 'agnsee_hero',
		'mime_type'   => 'image',
	) ) );

	$wp_customize->add_setting( 'agnsee_logo_url', array(
		'default'           => 'https://agnsee.ca/wp-content/uploads/2026/07/logo-removebg-preview.png',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( 'agnsee_logo_url', array(
		'label'       => __( 'URL du logo (fond transparent, prioritaire si aucun logo personnalisé n\'est réglé)', 'agnsee' ),
		'section'     => 'title_tagline',
		'type'        => 'url',
	) );
}
add_action( 'customize_register', 'agnsee_customize_register' );
