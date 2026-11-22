<?php
/** Front page template. */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$assets = an3d_asset_defaults();
foreach ( $assets as $key => $fallback ) { $assets[ $key ] = an3d_default( $key, $fallback ); }
$txt = function( $key, $fallback ) { return esc_html( an3d_default( $key, $fallback ) ); };
$colors = array( 'bg_inner' => '#0b8a78', 'bg_mid' => '#044e3b', 'bg_outer' => '#011411', 'accent' => '#fbcfe8', 'text' => '#ffffff' );
$style_vars = '';
foreach ( $colors as $key => $fallback ) { $style_vars .= '--' . str_replace( '_', '-', $key ) . ':' . sanitize_hex_color( an3d_default( $key, $fallback ) ) . ';'; }
get_header();
?>
<style>:root{<?php echo esc_html( $style_vars ); ?>--bg-color:<?php echo esc_html( sanitize_hex_color( an3d_default( 'bg_outer', '#011411' ) ) ); ?>;--text-color:<?php echo esc_html( sanitize_hex_color( an3d_default( 'text', '#fff' ) ) ); ?>} .an3d-noscript{position:fixed;bottom:1rem;left:1rem;right:1rem;z-index:999;background:#111;color:#fff;padding:1rem;border-radius:12px;text-align:center}</style>
<div id="bubbles-container" aria-hidden="true"></div>
<header class="header">
  <a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="<?php echo esc_attr( an3d_default( 'brand_name', 'Soda' ) ); ?> home"><svg width="32" height="32" viewBox="0 0 24 24" fill="none" aria-hidden="true"><circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2"/><path d="M12 8V16M8 12H16" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg><span><?php echo $txt( 'brand_name', 'Soda' ); ?></span></a>
  <nav class="nav glass" aria-label="Main navigation">
    <a href="#" class="nav-item active">Home</a><a href="#" class="nav-item"><?php echo $txt( 'nav_ingredients', 'Ingredients' ); ?></a><a href="#" class="nav-item"><?php echo $txt( 'nav_taste', 'Taste' ); ?></a><a href="#" class="nav-item"><?php echo $txt( 'nav_eco', 'Eco' ); ?></a><a href="#" class="nav-item"><?php echo $txt( 'nav_reviews', 'Reviews' ); ?></a>
  </nav>
  <button class="contact-btn" type="button" title="Contact link will be connected later"><?php echo $txt( 'contact_label', 'Contact Us' ); ?></button>
</header>
<main class="hero site-main"><div class="hero-content">
  <div class="leaves-container" aria-hidden="true">
    <?php foreach ( array( 'l1' => '45deg 75deg 105%', 'l2' => '-30deg 60deg 105%', 'l3' => '120deg 85deg 105%', 'l4' => '10deg 45deg 105%' ) as $class => $orbit ) : ?>
      <model-viewer class="leaf <?php echo esc_attr( $class ); ?>" src="<?php echo esc_url( $assets['leaf_model'] ); ?>" environment-image="neutral" exposure="1.0" interaction-prompt="none" camera-orbit="<?php echo esc_attr( $orbit ); ?>"></model-viewer>
    <?php endforeach; ?>
  </div>
  <section class="hero-left">
    <h1 class="main-title large-animation-1"><span class="outline"><?php echo $txt( 'hero_title_top', 'Pure' ); ?></span><br><?php echo $txt( 'hero_title_bottom', 'Zero' ); ?></h1>
    <p class="description"><?php echo nl2br( esc_html( an3d_default( 'hero_description', 'Unleash the crisp taste of zero sugar. Refreshment redefined in every bubble — all in one sleek design.' ) ) ); ?></p>
    <div class="cta-group"><button class="primary-btn" type="button" title="Store link will be connected later"><?php echo $txt( 'cta_label', 'Shop Now' ); ?><span class="plus-icon" aria-hidden="true">+</span></button></div>
    <div class="award-badge"><div class="award-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M12 15L15 18L19 14M7 10L12 15L17 10" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></div><div class="award-text"><span class="award-title"><?php echo $txt( 'award_title', 'DESIGN AWARDS' ); ?></span><span class="award-subtitle"><?php echo $txt( 'award_subtitle', 'PREMIUM BEVERAGE 2025' ); ?></span></div></div>
  </section>
  <div class="berries-container-bg" aria-hidden="true">
    <?php foreach ( array( 'b7' => '-20deg 110deg 105%', 'b8' => '160deg 45deg 105%', 'b9' => '45deg 20deg 105%' ) as $class => $orbit ) : ?><model-viewer class="berry <?php echo esc_attr( $class ); ?>" src="<?php echo esc_url( $assets['cherry_model'] ); ?>" environment-image="neutral" exposure="1.0" interaction-prompt="none" camera-orbit="<?php echo esc_attr( $orbit ); ?>"></model-viewer><?php endforeach; ?>
  </div>
  <div class="hero-center"><model-viewer id="product-model" src="<?php echo esc_url( $assets['main_model'] ); ?>" alt="Diet Soda 3D Model" camera-controls disable-zoom shadow-intensity="0" environment-image="neutral" exposure="1.5" interaction-prompt="none" camera-orbit="0deg 90deg 380%" field-of-view="30deg" class="main-product-3d"></model-viewer></div>
  <div class="berries-container" aria-hidden="true">
    <?php foreach ( array( 'b1' => '45deg 120deg 105%', 'b2' => '-120deg 45deg 105%', 'b3' => '200deg 90deg 105%', 'b4' => '10deg 20deg 105%', 'b5' => '-45deg 160deg 105%', 'b6' => '80deg 75deg 105%' ) as $class => $orbit ) : ?><model-viewer class="berry <?php echo esc_attr( $class ); ?>" src="<?php echo esc_url( $assets['cherry_model'] ); ?>" environment-image="neutral" exposure="1.2" interaction-prompt="none" camera-orbit="<?php echo esc_attr( $orbit ); ?>"></model-viewer><?php endforeach; ?>
  </div>
  <section class="hero-right"><div class="product-carousel"><div class="carousel-cards">
    <div class="card active" data-flavor="classic" role="button" tabindex="0" aria-pressed="true" aria-label="Select <?php echo esc_attr( an3d_default( 'classic_name', 'Diet Classic' ) ); ?> flavor"><img src="<?php echo esc_url( $assets['classic_image'] ); ?>" alt="<?php echo esc_attr( an3d_default( 'classic_name', 'Diet Classic' ) ); ?> soda can" loading="eager" decoding="async"><div class="card-info"><span><?php echo $txt( 'classic_name', 'Diet Classic' ); ?></span><span><?php echo $txt( 'classic_price', '$2.99' ); ?></span></div></div>
    <div class="card" data-flavor="blue" role="button" tabindex="0" aria-pressed="false" aria-label="Select <?php echo esc_attr( an3d_default( 'blue_name', 'Zero Lime' ) ); ?> flavor"><img src="<?php echo esc_url( $assets['blue_image'] ); ?>" alt="<?php echo esc_attr( an3d_default( 'blue_name', 'Zero Lime' ) ); ?> soda can" loading="lazy" decoding="async" style="filter:brightness(.7)"><div class="card-info"><span><?php echo $txt( 'blue_name', 'Zero Lime' ); ?></span><span><?php echo $txt( 'blue_price', '$2.99' ); ?></span></div></div>
  </div><div class="carousel-nav"><button class="nav-arrow" type="button" aria-label="Previous flavor" disabled title="Flavor navigation will be configured later">←</button><button class="nav-arrow" type="button" aria-label="Next flavor" disabled title="Flavor navigation will be configured later">→</button></div></div>
  <h2 class="side-title large-animation-1"><span class="outline"><?php echo $txt( 'side_title_top', 'Refreshingly' ); ?></span><br><?php echo $txt( 'side_title_bottom', 'Clean' ); ?></h2></section>
</div></main>
<?php get_footer(); ?>
