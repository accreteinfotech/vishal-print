<?php 
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    include 'backyard/include/connect.php';
    $seo=$link->rawQueryone("select * from page_seo where page_seo_url=?",array($page_name));
    if($link->count > 0)
    {
        $page_seo_title=$seo['page_seo_title'];
        $page_seo_description=$seo['page_seo_description'];
        $page_seo_keywords=$seo['page_seo_keywords'];
        $page_seo_author=$seo['page_seo_author'];
        
        $page_seo_og_title=$seo['page_seo_og_title'];
        $page_seo_og_description=$seo['page_seo_og_description'];
        $page_seo_og_url=$seo['page_seo_og_url'];
    }
    
?>
<title><?php echo $project_name; ?> | <?php echo $page_seo_title; ?></title>
    <meta name="description" content="<?php echo $page_seo_description; ?>">
    <meta name="keywords" content="<?php echo $page_seo_keywords; ?>" >
    
    <meta property="og:title" content="<?php echo $project_name; ?> | <?php echo $page_seo_og_title; ?>" />
    <meta property="og:url" content="<?php echo $page_seo_og_url; ?>" />
    <meta property="og:description" content="<?php echo $page_seo_og_description; ?>">
    <base href="<?php echo $site_url; ?>">
    <?php
        include 'head_code.php';
        ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png"/>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css"/>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="assets/css/chosen.min.css"/>
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="assets/css/jquery.scrollbar.css"/>
    <link rel="stylesheet" type="text/css" href="assets/css/lightbox.min.css"/>
    <link rel="stylesheet" type="text/css" href="assets/css/magnific-popup.css"/>
    <link rel="stylesheet" type="text/css" href="assets/css/slick.min.css"/>
    <link rel="stylesheet" type="text/css" href="assets/fonts/flaticon.css"/>
    <link rel="stylesheet" type="text/css" href="assets/css/megamenu.css"/>
    <link rel="stylesheet" type="text/css" href="assets/css/dreaming-attribute.css"/>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css"/>
    <link rel="stylesheet" type="text/css" href="assets/css/custom.css"/>
    
	<?php 
	include('head.php');
	?>
</head>
<body class="single single-product">
<?php 
include('header.php');
?>
<div class="banner-wrapper no_background">
    <div class="banner-wrapper-inner">
        <nav class="akasha-breadcrumb"><a href="index.php">Home</a><i class="fa fa-angle-right"></i><a href="#">Category</a>
            <i class="fa fa-angle-right"></i>Single Product Name
        </nav>
    </div>
</div>
<div class="single-thumb-vertical main-container shop-page no-sidebar">
    <div class="container">
        <div class="row">
            <div class="main-content col-md-12">
                <div class="akasha-notices-wrapper"></div>
                <div id="product-27"
                     class="post-27 product type-product status-publish has-post-thumbnail product_cat-table product_cat-new-arrivals product_cat-lamp product_tag-table product_tag-sock first instock shipping-taxable purchasable product-type-variable has-default-attributes">
                    <div class="main-contain-summary">
                        <div class="contain-left has-gallery">
                            <div class="single-left">
                                <div class="akasha-product-gallery akasha-product-gallery--with-images akasha-product-gallery--columns-4 images">
                                    <a href="#" class="akasha-product-gallery__trigger">
                                        <img draggable="false" class="emoji" alt="🔍"
                                             src="#"></a>
                                    <div class="flex-viewport">
                                        <figure class="akasha-product-gallery__wrapper">
                                            <div class="akasha-product-gallery__image">
                                                <img alt="img"
                                                     src="assets/images/vishal-print/product/big1.jpg">
                                            </div>
                                            <div class="akasha-product-gallery__image">
                                                <img src="assets/images/vishal-print/product/big2.jpg"
                                                     alt="img">
                                            </div>
                                            <div class="akasha-product-gallery__image">
                                                <img src="assets/images/vishal-print/product/big3.jpg"
                                                     class="" alt="img">
                                            </div>
                                            <div class="akasha-product-gallery__image">
                                                <img src="assets/images/vishal-print/product/big4.jpg"
                                                     class="" alt="img">
                                            </div>
											 <div class="akasha-product-gallery__image">
                                                <img src="assets/images/vishal-print/product/big5.jpg"
                                                     class="" alt="img">
                                            </div>
                                        </figure>
                                    </div>
                                    <ol class="flex-control-nav flex-control-thumbs">
                                        <li><img
                                                src="assets/images/vishal-print/product/thumb1.jpg" alt="img">
                                        </li>
                                        <li><img
                                                src="assets/images/vishal-print/product/thumb2.jpg" alt="img">
                                        </li>
                                        <li><img
                                                src="assets/images/vishal-print/product/thumb3.jpg" alt="img">
                                        </li>
                                        <li><img
                                                src="assets/images/vishal-print/product/thumb4.jpg" alt="img">
                                        </li>
										<li><img
                                                src="assets/images/vishal-print/product/thumb5.jpg" alt="img">
                                        </li>
                                    </ol>
                                </div>
                            </div>
                            <div class="summary entry-summary">
                                
                                <h1 class="product_title entry-title">Product Name</h1>
                                <p class="price"><span class="akasha-Price-amount amount"><span
                                        class="akasha-Price-currencySymbol">INR </span>1466.00</span></p>
                                <p class="stock in-stock">
                                    Availability: <span> In stock</span>
                                </p>
                                <div class="akasha-product-details__short-description">
                                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac
                                        turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor
                                        sit amet, ante.</p>
                                    <ul>
                                        <li>Water-resistant fabric with soft lycra detailing inside</li>
                                        <li>CLean zip-front, and three piece hood</li>
                                        <li>Subtle branding and diagonal panel detail</li>
                                    </ul>
                                </div>
                                <form class="variations_form cart">
                                    <div class="single_variation_wrap">
                                        <div class="akasha-variation single_variation"></div>
                                        <div class="akasha-variation-add-to-cart variations_button akasha-variation-add-to-cart-disabled">
                                            <div class="quantity">
                                                <span class="qty-label">Quantiy:</span>
                                                <div class="control">
                                                    <a class="btn-number qtyminus quantity-minus" href="#">-</a>
                                                    <input type="text" data-step="1" min="0" max="" name="quantity[25]" value="0" title="Qty" class="input-qty input-text qty text" size="4" pattern="[0-9]*" inputmode="numeric">
                                                    <a class="btn-number qtyplus quantity-plus" href="#">+</a>
                                                </div>
                                            </div>
                                            <button type="submit"
                                                    class="single_add_to_cart_button button alt disabled akasha-variation-selection-needed">
                                                Add to cart
                                            </button>
                                            <input name="add-to-cart" value="27" type="hidden">
                                            <input name="product_id" value="27" type="hidden">
                                            <input name="variation_id" class="variation_id" value="0" type="hidden">
                                        </div>
                                    </div>
                                </form>
                                <div class="yith-wcwl-add-to-wishlist">
                                    <div class="yith-wcwl-add-button show">
                                        <a href="wishlist.php" rel="nofollow"
                                           data-product-id="27" data-product-type="variable" class="add_to_wishlist">
                                            Add to Wishlist</a>
                                    </div>
                                </div>
                                <div class="clear"></div>
                               
                                <div class="product_meta">
                                    <span class="sku_wrapper">SKU: <span class="sku">885B712</span></span>
                                    <span class="posted_in">Categories: <a
                                            href="#"
                                            rel="tag">Sarees</a>, <a
                                            href="#" rel="tag">Silk Sarees</a>, <a
                                            href="#" rel="tag">Bandhni Sarees</a></span>
                                   
                                </div>
                                <div class="akasha-share-socials">
                                    <h5 class="social-heading">Share: </h5>
                                    <a target="_blank" class="facebook" href="#">
                                        <i class="fa fa-facebook-f"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="akasha-tabs akasha-tabs-wrapper">
                        <ul class="tabs dreaming-tabs" role="tablist">
                            <li class="description_tab active" id="tab-title-description" role="tab"
                                aria-controls="tab-description">
                                <a href="#tab-description">Description</a>
                            </li>
                            <li class="additional_information_tab" id="tab-title-additional_information" role="tab"
                                aria-controls="tab-additional_information">
                                <a href="#tab-additional_information">Additional information</a>
                            </li>
                            <li class="reviews_tab" id="tab-title-reviews" role="tab" aria-controls="tab-reviews">
                                <a href="#tab-reviews">Reviews (0)</a>
                            </li>
                        </ul>
                        <div class="akasha-Tabs-panel akasha-Tabs-panel--description panel entry-content akasha-tab"
                             id="tab-description" role="tabpanel" aria-labelledby="tab-title-description">
                            <h2>Description</h2>
                            <div class="container-table">
                                <div class="container-cell">
                                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit
                                        scelerisque integer, quam dapibus per risus donec semper
                                        vulputate interdum, imperdiet mus rhoncus commodo ultricies
                                        class urna tincidunt. Imperdiet vitae lacus etiam metus ut nisl
                                        curae, conubia enim scelerisque quis facilisis torquent,
                                        ultricies orci faucibus dictumst mauris curabitur. Massa risus
                                        nec sociosqu fames montes accumsan iaculis justo turpis
                                        luctus</p>
                                </div>
                             
                            </div>
                           
                        </div>
                        <div class="akasha-Tabs-panel akasha-Tabs-panel--additional_information panel entry-content akasha-tab"
                             id="tab-additional_information" role="tabpanel"
                             aria-labelledby="tab-title-additional_information">
                            <h2>Additional information</h2>
                            <table class="shop_attributes">
                                <tbody>
                                <tr>
                                    <th>Color</th>
                                    <td><p>Blue, Pink, Red, Yellow</p>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="akasha-Tabs-panel akasha-Tabs-panel--reviews panel entry-content akasha-tab"
                             id="tab-reviews" role="tabpanel" aria-labelledby="tab-title-reviews">
                            <div id="reviews" class="akasha-Reviews">
                                <div id="comments">
                                    <h2 class="akasha-Reviews-title">Reviews</h2>
                                    <p class="akasha-noreviews">There are no reviews yet.</p>
                                </div>
                                <div id="review_form_wrapper">
                                    <div id="review_form">
                                        <div id="respond" class="comment-respond">
                                            <span id="reply-title" class="comment-reply-title">Be the first to review “Product Name”</span>
                                            <form id="commentform" class="comment-form">
                                                <p class="comment-notes"><span id="email-notes">Your email adchair will not be published.</span>
                                                    Required fields are marked <span class="required">*</span></p>
                                                <p class="comment-form-author">
                                                    <label for="author">Name&nbsp;<span
                                                            class="required">*</span></label>
                                                    <input id="author" name="author" value="" size="30" required=""
                                                           type="text"></p>
                                                <p class="comment-form-email"><label for="email">Email&nbsp;
                                                    <span class="required">*</span></label>
                                                    <input id="email" name="email" value="" size="30" required=""
                                                           type="email"></p>
                                                <div class="comment-form-rating"><label for="rating">Your rating</label>
                                                    <p class="stars">
                                                        <span>
                                                        <a class="star-1" href="#">1</a>
                                                        <a class="star-2" href="#">2</a>
                                                        <a class="star-3" href="#">3</a>
                                                        <a class="star-4" href="#">4</a>
                                                        <a class="star-5" href="#">5</a>
                                                        </span>
                                                    </p>
                                                    <select title="product_cat" name="rating" id="rating" required=""
                                                            style="display: none;">
                                                        <option value="">Rate…</option>
                                                        <option value="5">Perfect</option>
                                                        <option value="4">Good</option>
                                                        <option value="3">Average</option>
                                                        <option value="2">Not that bad</option>
                                                        <option value="1">Very poor</option>
                                                    </select></div>
                                                <p class="comment-form-comment"><label for="comment">Your
                                                    review&nbsp;<span class="required">*</span></label><textarea
                                                        id="comment" name="comment" cols="45" rows="8"
                                                        required=""></textarea></p><input name="wpml_language_code"
                                                                                          value="en" type="hidden">
                                                <p class="form-submit"><input name="submit" id="submit" class="submit"
                                                                              value="Submit" type="submit"> <input
                                                        name="comment_post_ID" value="27" id="comment_post_ID"
                                                        type="hidden">
                                                    <input name="comment_parent" id="comment_parent" value="0"
                                                           type="hidden">
                                                </p></form>
                                        </div><!-- #respond -->
                                    </div>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-sm-12 dreaming_related-product">
                <div class="block-title">
                    <h2 class="product-grid-title">
                        <span>Related Products</span>
                    </h2>
                </div>
                <div class="owl-slick owl-products equal-container better-height"
                     data-slick="{&quot;arrows&quot;:false,&quot;slidesMargin&quot;:30,&quot;dots&quot;:true,&quot;infinite&quot;:false,&quot;slidesToShow&quot;:4}"
                     data-responsive="[{&quot;breakpoint&quot;:480,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:768,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;20&quot;}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;20&quot;}},{&quot;breakpoint&quot;:1500,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;30&quot;}}]">
                    <div class="product-item style-01 post-27 product type-product status-publish has-post-thumbnail product_cat-table product_cat-new-arrivals product_cat-lamp product_tag-table product_tag-sock  instock shipping-taxable purchasable product-type-variable has-default-attributes ">
                        <div class="product-inner tooltip-left">
                            <div class="product-thumb">
                                <a class="thumb-link"
                                   href="#" tabindex="0">
                                    <img class="img-responsive"
                                         src="assets/images/vishal-print/product1.jpg"
                                         alt="Long Oversized" width="600" height="778">
                                </a>
                                
                                <div class="group-button">
                                    <div class="yith-wcwl-add-to-wishlist">
                                        <div class="yith-wcwl-add-button show">
                                            <a href="#" class="add_to_wishlist">Add to Wishlist</a>
                                        </div>
                                    </div>
                                    <div class="add-to-cart">
                                        <a href="#" class="button product_type_variable add_to_cart_button">Add to
                                            cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-info equal-elem">
                                <h3 class="product-name product_title">
                                    <a href="#"
                                       tabindex="0">Product 1</a>
                                </h3>
                               
                                <span class="price"><span class="akasha-Price-amount amount"><span
                                        class="akasha-Price-currencySymbol">INR </span>1160.00</span></span>
                            </div>
                        </div>
                    </div>
                   
                    <div class="product-item style-01 post-27 product type-product status-publish has-post-thumbnail product_cat-table product_cat-new-arrivals product_cat-lamp product_tag-table product_tag-sock  instock shipping-taxable purchasable product-type-variable has-default-attributes ">
                        <div class="product-inner tooltip-left">
                            <div class="product-thumb">
                                <a class="thumb-link"
                                   href="#" tabindex="0">
                                    <img class="img-responsive"
                                         src="assets/images/vishal-print/product2.jpg"
                                         alt="Long Oversized" width="600" height="778">
                                </a>
                                
                                <div class="group-button">
                                    <div class="yith-wcwl-add-to-wishlist">
                                        <div class="yith-wcwl-add-button show">
                                            <a href="#" class="add_to_wishlist">Add to Wishlist</a>
                                        </div>
                                    </div>
                                    <div class="add-to-cart">
                                        <a href="#" class="button product_type_variable add_to_cart_button">Add to
                                            cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-info equal-elem">
                                <h3 class="product-name product_title">
                                    <a href="#"
                                       tabindex="0">Product 2</a>
                                </h3>
                               
                                <span class="price"><span class="akasha-Price-amount amount"><span
                                        class="akasha-Price-currencySymbol">INR </span>1160.00</span></span>
                            </div>
                        </div>
                    </div>
					
					
					<div class="product-item style-01 post-27 product type-product status-publish has-post-thumbnail product_cat-table product_cat-new-arrivals product_cat-lamp product_tag-table product_tag-sock  instock shipping-taxable purchasable product-type-variable has-default-attributes ">
                        <div class="product-inner tooltip-left">
                            <div class="product-thumb">
                                <a class="thumb-link"
                                   href="#" tabindex="0">
                                    <img class="img-responsive"
                                         src="assets/images/vishal-print/product3.jpg"
                                         alt="Long Oversized" width="600" height="778">
                                </a>
                                
                                <div class="group-button">
                                    <div class="yith-wcwl-add-to-wishlist">
                                        <div class="yith-wcwl-add-button show">
                                            <a href="#" class="add_to_wishlist">Add to Wishlist</a>
                                        </div>
                                    </div>
                                    <div class="add-to-cart">
                                        <a href="#" class="button product_type_variable add_to_cart_button">Add to
                                            cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-info equal-elem">
                                <h3 class="product-name product_title">
                                    <a href="#"
                                       tabindex="0">Product 3</a>
                                </h3>
                               
                                <span class="price"><span class="akasha-Price-amount amount"><span
                                        class="akasha-Price-currencySymbol">INR </span>1160.00</span></span>
                            </div>
                        </div>
                    </div>
					
					
					<div class="product-item style-01 post-27 product type-product status-publish has-post-thumbnail product_cat-table product_cat-new-arrivals product_cat-lamp product_tag-table product_tag-sock  instock shipping-taxable purchasable product-type-variable has-default-attributes ">
                        <div class="product-inner tooltip-left">
                            <div class="product-thumb">
                                <a class="thumb-link"
                                   href="#" tabindex="0">
                                    <img class="img-responsive"
                                         src="assets/images/vishal-print/product4.jpg"
                                         alt="Long Oversized" width="600" height="778">
                                </a>
                                
                                <div class="group-button">
                                    <div class="yith-wcwl-add-to-wishlist">
                                        <div class="yith-wcwl-add-button show">
                                            <a href="#" class="add_to_wishlist">Add to Wishlist</a>
                                        </div>
                                    </div>
                                    <div class="add-to-cart">
                                        <a href="#" class="button product_type_variable add_to_cart_button">Add to
                                            cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-info equal-elem">
                                <h3 class="product-name product_title">
                                    <a href="#"
                                       tabindex="0">Product 4</a>
                                </h3>
                               
                                <span class="price"><span class="akasha-Price-amount amount"><span
                                        class="akasha-Price-currencySymbol">INR </span>1160.00</span></span>
                            </div>
                        </div>
                    </div>
                    
                   
                  
                </div>
            </div>
        </div>
    </div>
</div>
<?php 
include('footer.php');
?>

<a href="#" class="backtotop active">
    <i class="fa fa-angle-up"></i>
</a>
<script src="assets/js/jquery-1.12.4.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/chosen.min.js"></script>
<script src="assets/js/countdown.min.js"></script>
<script src="assets/js/jquery.scrollbar.min.js"></script>
<script src="assets/js/lightbox.min.js"></script>
<script src="assets/js/magnific-popup.min.js"></script>
<script src="assets/js/slick.js"></script>
<script src="assets/js/jquery.zoom.min.js"></script>
<script src="assets/js/threesixty.min.js"></script>
<script src="assets/js/jquery-ui.min.js"></script>
<script src="assets/js/mobilemenu.js"></script>
<script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyC3nDHy1dARR-Pa_2jjPCjvsOR4bcILYsM'></script>
<script src="assets/js/functions.js"></script>
<script src="assets/js/custom.js"></script>
</body>
</html>