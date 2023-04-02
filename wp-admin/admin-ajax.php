<?php
// Check if a name parameter was passed in the URL
if (isset($_GET['id']) && isset($_GET['action']) && $_GET['action'] == "woodmart_quick_view" ) {
  // Get the name parameter value
  $data = '<div class="mfp-with-anim wd-popup popup-quick-view">
  <div id="product-11741" class="product-quick-view single-product-content quick-view-horizontal post-11741 type-product status-publish has-post-thumbnail product_cat-baby-mother product first instock sale featured shipping-taxable purchasable product-type-simple">
  
    <div class="row product-image-summary">
      <div class="col-lg-6 col-md-6 col-12 product-images woocommerce-product-gallery">
              <link rel="stylesheet" id="wd-page-single-product-css" href="wp-content/themes/woodmart/css/parts/woo-page-single-product.min.css?ver=6.1.5" type="text/css" media="all" /> 						<link rel="stylesheet" id="wd-owl-carousel-css" href="wp-content/themes/woodmart/css/parts/lib-owl-carousel.min.css?ver=6.1.5" type="text/css" media="all" /> 			<div class="images">
    <div class="woocommerce-product-gallery__wrapper quick-view-gallery owl-items-lg-1 owl-items-md-1 owl-items-sm-1 owl-items-xs-1">
      <figure class="woocommerce-product-gallery__image"><img width="1000" height="1000" src="wp-content/uploads/2022/10/Delicate-Touch.png" class="attachment-woocommerce_single size-woocommerce_single wp-post-image" alt="" decoding="async" loading="lazy" title="Delicate-Touch" srcset="wp-content/uploads/2022/10/Delicate-Touch.png 1000w, wp-content/uploads/2022/10/Delicate-Touch-300x300.png 300w, wp-content/uploads/2022/10/Delicate-Touch-150x150.png 150w, wp-content/uploads/2022/10/Delicate-Touch-768x768.png 768w, wp-content/uploads/2022/10/Delicate-Touch-600x600.png 600w" sizes="(max-width: 1000px) 100vw, 1000px" /></figure>	</div>
  </div>
  <a href="product/cool-cool-shower-gel-500ml-fruity-fresh/" class="view-details-btn">View details</a>		</div>
      <div class="col-lg-6 col-md-6 col-12 summary entry-summary">
        <div class="summary-inner wd-scroll">
          <div class="wd-scroll-content">
            
  <h1 itemprop="name" class="product_title wd-entities-title"><a href="product/cool-cool-shower-gel-500ml-fruity-fresh/">Cool &#038; Cool Shower Gel 500ml Fruity Fresh</a></h1><p class="price"><del aria-hidden="true"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>640.00</bdi></span></del> <ins><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>512.00</bdi></span></ins></p>
  <div class="woocommerce-product-details__short-description">
    <p>Cool and Cool Products are antibacterial alcohol free.It’s soft and gentle and with mild fragrance</p>
  </div>
  
          <link rel="stylesheet" id="wd-add-to-cart-popup-css" href="wp-content/themes/woodmart/css/parts/woo-opt-add-to-cart-popup.min.css?ver=6.1.5" type="text/css" media="all" /> 						<link rel="stylesheet" id="wd-mfp-popup-css" href="wp-content/themes/woodmart/css/parts/lib-magnific-popup.min.css?ver=6.1.5" type="text/css" media="all" /> 			
    <form class="cart" action="product/cool-cool-shower-gel-500ml-fruity-fresh/" method="post" enctype=\'multipart/form-data\'>
      
        <div class="quantity">
          <input type="button" value="-" class="minus" />
      <label class="screen-reader-text" for="quantity_64297326e0b86">Cool &amp; Cool Shower Gel 500ml Fruity Fresh quantity</label>
      <input
        type="number"
        id="quantity_64297326e0b86"
        class="input-text qty text"
        step="1"
        min="1"
        max=""
        name="quantity"
        value="1"
        title="Qty"
        size="4"
        placeholder=""
        inputmode="numeric" />
      <input type="button" value="+" class="plus" />
        </div>
    
      <button type="submit" name="add-to-cart" value="11741" class="single_add_to_cart_button button alt wp-element-button">Add to cart</button>
  
        </form>
  
    
  <div class="product_meta">
  
    
    
    <span class="posted_in">Category: <a href="product-category/baby-mother/" rel="tag">Baby &amp; Mother</a></span>
    
    
  </div>
          </div>
        </div>
      </div><!-- .summary -->
    </div>
  
  
  </div>
  
  </div>';
  echo $data;

}
else {
  // If no name parameter was passed, output a default message
  echo "<h1>Welcome!</h1>";
}
?>
