// Removing the X theme style woocommerce images
// =============================================================================
function my_wc_product_gallery_setup() {
  //remove_theme_support( 'wc-product-gallery-zoom' );
  remove_theme_support( 'wc-product-gallery-lightbox' );
  remove_theme_support( 'wc-product-gallery-slider' );
}

add_action( 'after_setup_theme', 'my_wc_product_gallery_setup', 100 );
