<?php
/** Theme bootstrap. */
if ( ! defined( 'ABSPATH' ) ) { exit; }
define( 'AN3D_VERSION', '0.1.0' );
define( 'AN3D_DIR', get_template_directory() );
define( 'AN3D_URI', get_template_directory_uri() );

function an3d_setup() {
    load_theme_textdomain( 'an-interactive-3d', AN3D_DIR . '/languages' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-logo', array( 'height' => 120, 'width' => 320, 'flex-height' => true, 'flex-width' => true ) );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
}
add_action( 'after_setup_theme', 'an3d_setup' );

function an3d_default( $key, $fallback = '' ) { return get_theme_mod( 'an3d_' . $key, $fallback ); }
function an3d_asset_defaults() {
    $base = 'https://api.getlayers.ai/storage/v1/object/public/public/assets/soda-14ff8a788d/';
    return array(
        'main_model' => $base . 'deit_soda2.glb', 'leaf_model' => $base . 'leaves.glb',
        'cherry_model' => $base . 'cherry.glb', 'blueberry_model' => $base . 'blueberry.glb',
        'green_texture' => $base . 'green%20base%20color.jpg', 'blue_texture' => $base . 'blue%20base%20color.jpg',
        'bubble_image' => $base . 'bubble.png', 'classic_image' => $base . 'Green%20Soda.png', 'blue_image' => $base . 'Blue%20Soda.png',
    );
}
function an3d_enqueue_assets() {
    wp_enqueue_style( 'an3d-fonts', 'https://fonts.googleapis.com/css2?family=Outfit:wght@400;700;900&family=Inter:wght@400;500&family=Manrope:wght@400;700&family=Galada&display=swap', array(), null );
    wp_enqueue_style( 'an3d-theme', AN3D_URI . '/assets/css/theme.css', array(), AN3D_VERSION );
    wp_enqueue_script( 'an3d-gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js', array(), '3.12.2', true );
    wp_enqueue_script( 'an3d-model-viewer', 'https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js', array(), null, true );
    wp_enqueue_script( 'an3d-theme', AN3D_URI . '/assets/js/theme.js', array(), AN3D_VERSION, true );
    $assets = an3d_asset_defaults();
    $settings = array();
    foreach ( $assets as $key => $fallback ) { $settings[ $key ] = esc_url_raw( an3d_default( $key, $fallback ) ); }
    wp_add_inline_script( 'an3d-theme', 'window.AN3DSettings = ' . wp_json_encode( array(
        'cherryModel' => $settings['cherry_model'], 'blueberryModel' => $settings['blueberry_model'],
        'greenTexture' => $settings['green_texture'], 'blueTexture' => $settings['blue_texture'], 'bubbleImage' => $settings['bubble_image'],
    ) ) . ';', 'before' );
}
add_action( 'wp_enqueue_scripts', 'an3d_enqueue_assets' );
require_once AN3D_DIR . '/inc/customizer.php';
