<?php
/** Native WordPress Customizer controls. */
if ( ! defined( 'ABSPATH' ) ) { exit; }
function an3d_customize_register( $wp_customize ) {
    $wp_customize->add_section( 'an3d_content', array( 'title' => __( 'AN 3D — Content & Branding', 'an-interactive-3d' ), 'priority' => 30, 'description' => __( 'Edit the landing page copy, product labels and colors.', 'an-interactive-3d' ) ) );
    $fields = array(
        'brand_name' => array( 'Soda', 'text', 'Brand name' ), 'hero_title_top' => array( 'Pure', 'text', 'Hero title — first line' ),
        'hero_title_bottom' => array( 'Zero', 'text', 'Hero title — second line' ), 'hero_description' => array( 'Unleash the crisp taste of zero sugar. Refreshment redefined in every bubble — all in one sleek design.', 'textarea', 'Hero description' ),
        'cta_label' => array( 'Shop Now', 'text', 'Main button label' ), 'award_title' => array( 'DESIGN AWARDS', 'text', 'Award title' ),
        'award_subtitle' => array( 'PREMIUM BEVERAGE 2025', 'text', 'Award subtitle' ), 'side_title_top' => array( 'Refreshingly', 'text', 'Right title — first line' ),
        'side_title_bottom' => array( 'Clean', 'text', 'Right title — second line' ), 'contact_label' => array( 'Contact Us', 'text', 'Contact button label' ),
        'classic_name' => array( 'Diet Classic', 'text', 'First flavor name' ), 'classic_price' => array( '$2.99', 'text', 'First flavor price' ),
        'blue_name' => array( 'Zero Lime', 'text', 'Second flavor name' ), 'blue_price' => array( '$2.99', 'text', 'Second flavor price' ),
        'nav_ingredients' => array( 'Ingredients', 'text', 'Navigation: Ingredients' ), 'nav_taste' => array( 'Taste', 'text', 'Navigation: Taste' ),
        'nav_eco' => array( 'Eco', 'text', 'Navigation: Eco' ), 'nav_reviews' => array( 'Reviews', 'text', 'Navigation: Reviews' ),
    );
    foreach ( $fields as $key => $field ) {
        $id = 'an3d_' . $key;
        $wp_customize->add_setting( $id, array( 'default' => $field[0], 'sanitize_callback' => 'textarea' === $field[1] ? 'sanitize_textarea_field' : 'sanitize_text_field', 'transport' => 'refresh' ) );
        $wp_customize->add_control( $id, array( 'section' => 'an3d_content', 'label' => __( $field[2], 'an-interactive-3d' ), 'type' => $field[1] ) );
    }
    $wp_customize->add_section( 'an3d_visuals', array( 'title' => __( 'AN 3D — Visuals & 3D Assets', 'an-interactive-3d' ), 'priority' => 31 ) );
    $media = array(
        'classic_image' => 'Classic product image', 'blue_image' => 'Blue product image',
    );
    foreach ( $media as $key => $label ) {
        $id = 'an3d_' . $key;
        $wp_customize->add_setting( $id, array( 'default' => an3d_asset_defaults()[ $key ], 'sanitize_callback' => 'esc_url_raw' ) );
        $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, $id, array( 'section' => 'an3d_visuals', 'label' => __( $label, 'an-interactive-3d' ) ) ) );
    }
    $urls = array(
        'main_model' => 'Main product 3D model (.glb/.gltf URL)', 'leaf_model' => 'Leaf 3D model URL', 'cherry_model' => 'Cherry 3D model URL',
        'blueberry_model' => 'Blueberry 3D model URL', 'green_texture' => 'Green material texture URL', 'blue_texture' => 'Blue material texture URL', 'bubble_image' => 'Bubble image URL',
    );
    foreach ( $urls as $key => $label ) {
        $id = 'an3d_' . $key;
        $wp_customize->add_setting( $id, array( 'default' => an3d_asset_defaults()[ $key ], 'sanitize_callback' => 'esc_url_raw' ) );
        $wp_customize->add_control( $id, array( 'section' => 'an3d_visuals', 'label' => __( $label, 'an-interactive-3d' ), 'type' => 'url', 'input_attrs' => array( 'placeholder' => 'https://…' ) ) );
    }
    $wp_customize->add_section( 'an3d_colors', array( 'title' => __( 'AN 3D — Colors', 'an-interactive-3d' ), 'priority' => 32 ) );
    foreach ( array( 'bg_inner' => '#0b8a78', 'bg_mid' => '#044e3b', 'bg_outer' => '#011411', 'accent' => '#fbcfe8', 'text' => '#ffffff' ) as $key => $default ) {
        $id = 'an3d_' . $key;
        $wp_customize->add_setting( $id, array( 'default' => $default, 'sanitize_callback' => 'sanitize_hex_color' ) );
        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, $id, array( 'section' => 'an3d_colors', 'label' => ucwords( str_replace( '_', ' ', $key ) ) ) ) );
    }
}
add_action( 'customize_register', 'an3d_customize_register' );
