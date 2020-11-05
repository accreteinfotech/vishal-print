<?php 
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<?php
    include 'backyard/include/connect.php';
    session_start();
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
<head>
    <meta charset="UTF-8"/>
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
    <title>Vishal Sarees | Home</title>
	<?php 
	include('head.php');
	?>
</head>
<body>
<?php 
include('header.php');
?>
<div class="fullwidth-template">
    <div class="slide-home-04">
        <div class="response-product product-list-owl owl-slick equal-container better-height"
             data-slick="{&quot;arrows&quot;:false,&quot;slidesMargin&quot;:0,&quot;dots&quot;:true,&quot;infinite&quot;:false,&quot;speed&quot;:300,&quot;slidesToShow&quot;:1,&quot;rows&quot;:1}"
             data-responsive="[{&quot;breakpoint&quot;:480,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;0&quot;}},{&quot;breakpoint&quot;:768,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;0&quot;}},{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;0&quot;}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;0&quot;}},{&quot;breakpoint&quot;:1500,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;0&quot;}}]">
            <div class="slide-wrap">
                <img src="assets/images/slider1.jpg" alt="image">
                <!--<div class="slide-info">
                    <div class="container">
                        <div class="slide-inner">
                            <h1>New Collection</h1>
                            <h5>2019-2020</h5>
                            <h2>Sale Up <span>35%</span> Off</h2>
                            <a href="#">Shop now</a>
                        </div>
                    </div>
                </div> -->
            </div>
            <div class="slide-wrap">
                <img src="assets/images/slider2.jpg" alt="image">
                <!--<div class="slide-info">
                    <div class="container">
                        <div class="slide-inner">
                            <h1>Deal Of The Day</h1>
                            <h5>Hot Clothes</h5>
                            <h2>Get Extra <span>25%</span> Off</h2>
                            <a href="#">Shop now</a>
                        </div>
                    </div>
                </div> -->
            </div>
            <div class="slide-wrap">
                <img src="assets/images/slider3.jpg" alt="image">
                <!--<div class="slide-info">
                    <div class="container">
                        <div class="slide-inner">
                            <h1>Try It On Now</h1>
                            <h5>Best Selling</h5>
                            <h2>Sale Flat <span>60%</span> Off</h2>
                            <a href="#">Shop now</a>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    <div class="section-0211">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="akasha-banner style-01 left-top new">
                        <div class="banner-inner">
                            <figure class="banner-thumb">
                                <img src="assets/images/vishal-print/classic.jpg"
                                     class="attachment-full size-full" alt="img">
                            </figure>
                            <div class="banner-info ">
                                <div class="banner-content">
                                    <div class="title-wrap">
                                        <h6 class="title">
                                            <a target=" _blank" href="#" style="color:#fff;">Classique-04</a>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="akasha-banner style-01 left-center">
                        <div class="banner-inner">
                            <figure class="banner-thumb">
                                <img src="assets/images/vishal-print/essence.jpg"
                                     class="attachment-full size-full" alt="img">
                            </figure>
                            <div class="banner-info ">
                                <div class="banner-content">
                                    <div class="title-wrap">
                                        <h6 class="title">
                                            <a target=" _blank" href="#" style="color:#fff;">Essence</a>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="akasha-banner style-01 left-top  akasha_custom_5d67efefec0b8 ">
                                <div class="banner-inner">
                                    <figure class="banner-thumb">
                                        <img src="assets/images/vishal-print/glimpse.jpg"
                                             class="attachment-full size-full" alt="img"></figure>
                                    <div class="banner-info ">
                                        <div class="banner-content">
                                            <div class="title-wrap">
                                                <h6 class="title">
                                                    <a target=" _blank" href="#" style="color:#fff;">Glimpse</a>
                                                </h6>
                                            </div>
                                            <div class="button-wrap">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="akasha-banner style-01 left-bottom">
                                <div class="banner-inner">
                                    <figure class="banner-thumb">
                                        <img src="assets/images/vishal-print/sakhi.jpg"
                                             class="attachment-full size-full" alt="img"></figure>
                                    <div class="banner-info ">
                                        <div class="banner-content">
                                            <div class="title-wrap">
                                                <h6 class="title">
                                                    <a target=" _blank" href="#" style="color:#fff;">Sakhi</a>
                                                </h6>
                                            </div>
                                            <div class="button-wrap">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <div class="section-001">
        <div class="container">
            <div class="akasha-heading style-01">
                <div class="heading-inner">
                    <h3 class="title">New Arrival</h3>
                    <div class="subtitle">
                        Made with care for your little ones, our products are perfect for every occasion. Check it out.
                    </div>
                </div>
            </div>
            <div class="akasha-products style-01">
                <div class="response-product product-list-owl owl-slick equal-container better-height"
                     data-slick="{&quot;arrows&quot;:true,&quot;slidesMargin&quot;:30,&quot;dots&quot;:true,&quot;infinite&quot;:false,&quot;speed&quot;:300,&quot;slidesToShow&quot;:4,&quot;rows&quot;:1}"
                     data-responsive="[{&quot;breakpoint&quot;:480,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:768,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;20&quot;}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;20&quot;}},{&quot;breakpoint&quot;:1500,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesMargin&quot;:&quot;30&quot;}}]">
                    <div class="product-item recent-product style-01 rows-space-0 post-93 product type-product status-publish has-post-thumbnail product_cat-light product_cat-table product_cat-new-arrivals product_tag-table product_tag-sock first instock shipping-taxable purchasable product-type-simple  ">
                        <div class="product-inner tooltip-left">
                            <div class="product-thumb">
                                <a class="thumb-link"
                                   href="#" tabindex="0">
                                    <img class="img-responsive"
                                         src="assets/images/vishal-print/product1.jpg"
                                         alt="Black Shirt" width="270" height="350">
                                </a>
                                <div class="flash">
                                    <span class="onnew"><span class="text">New</span></span></div>
                                <div class="group-button">
                                    <div class="yith-wcwl-add-to-wishlist">
                                        <div class="yith-wcwl-add-button show">
                                            <a href="#" class="add_to_wishlist">Add to Wishlist</a>
                                        </div>
                                    </div>
                                    
                                    <div class="add-to-cart">
                                        <a href="#" class="button product_type_simple add_to_cart_button">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-info equal-elem">
                                <h3 class="product-name product_title">
                                    <a href="#"
                                       tabindex="0">Product 1</a>
                                </h3>
                               
                                <span class="price"><span class="akasha-Price-amount amount"><span
                                        class="akasha-Price-currencySymbol">INR </span>2099.00</span></span>
                            </div>
                        </div>
                    </div>
                    <div class="product-item recent-product style-01 rows-space-0 post-49 product type-product status-publish has-post-thumbnail product_cat-light product_cat-bed product_cat-sofas product_tag-multi product_tag-lamp  instock shipping-taxable purchasable product-type-simple">
                        <div class="product-inner tooltip-left">
                            <div class="product-thumb">
                                <a class="thumb-link"
                                   href="#" tabindex="0">
                                    <img class="img-responsive"
                                         src="assets/images/vishal-print/product2.jpg"
                                         alt="Smock Dress" width="270" height="350">
                                </a>
                                <div class="flash">
                                    <span class="onnew"><span class="text">New</span></span></div>
                                <div class="group-button">
                                    <div class="yith-wcwl-add-to-wishlist">
                                        <div class="yith-wcwl-add-button show">
                                            <a href="#" class="add_to_wishlist">Add to Wishlist</a>
                                        </div>
                                    </div>
                                  
                                   
                                    <div class="add-to-cart">
                                        <a href="#" class="button product_type_simple add_to_cart_button">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-info equal-elem">
                                <h3 class="product-name product_title">
                                    <a href="#"
                                       tabindex="0">Product 2</a>
                                </h3>
                               
                                <span class="price"><span class="akasha-Price-amount amount"><span
                                        class="akasha-Price-currencySymbol">INR </span>3099.00</span></span>
                            </div>
                        </div>
                    </div>
                    <div class="product-item recent-product style-01 rows-space-0 post-37 product type-product status-publish has-post-thumbnail product_cat-chair product_cat-bed product_tag-light product_tag-hat product_tag-sock last instock shipping-taxable purchasable product-type-simple">
                        <div class="product-inner tooltip-left">
                            <div class="product-thumb">
                                <a class="thumb-link" href="#"
                                   tabindex="0">
                                    <img class="img-responsive"
                                         src="assets/images/vishal-print/product3.jpg"
                                         alt="Shirred Front" width="270" height="350">
                                </a>
                                <div class="flash">
                                    <span class="onnew"><span class="text">New</span></span></div>
                                <div class="group-button">
                                    <div class="yith-wcwl-add-to-wishlist">
                                        <div class="yith-wcwl-add-button show">
                                            <a href="#" class="add_to_wishlist">Add to Wishlist</a>
                                        </div>
                                    </div>
                                   
                                   
                                    <div class="add-to-cart">
                                        <a href="#" class="button product_type_simple add_to_cart_button">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-info equal-elem">
                                <h3 class="product-name product_title">
                                    <a href="#" tabindex="0">Product 3</a>
                                </h3>
                               
                                <span class="price"><span class="akasha-Price-amount amount"><span
                                        class="akasha-Price-currencySymbol">INR </span>2500.00</span></span>
                            </div>
                        </div>
                    </div>
                    <div class="product-item recent-product style-01 rows-space-0 post-35 product type-product status-publish has-post-thumbnail product_cat-chair product_cat-new-arrivals product_cat-lamp product_tag-light product_tag-hat product_tag-sock first instock shipping-taxable purchasable product-type-simple">
                        <div class="product-inner tooltip-left">
                            <div class="product-thumb">
                                <a class="thumb-link" href="#"
                                   tabindex="0">
                                    <img class="img-responsive"
                                         src="assets/images/vishal-print/product4.jpg"
                                         alt="Brown Shirt" width="270" height="350">
                                </a>
                                <div class="flash">
                                    <span class="onnew"><span class="text">New</span></span></div>
                                <div class="group-button">
                                    <div class="yith-wcwl-add-to-wishlist">
                                        <div class="yith-wcwl-add-button show">
                                            <a href="#" class="add_to_wishlist">Add to Wishlist</a>
                                        </div>
                                    </div>
                                    <div class="add-to-cart">
                                        <a href="#" class="button product_type_simple add_to_cart_button">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-info equal-elem">
                                <h3 class="product-name product_title">
                                    <a href="#" tabindex="0">Product 4</a>
                                </h3>
                               
                                <span class="price"><span class="akasha-Price-amount amount"><span
                                        class="akasha-Price-currencySymbol">INR </span>4099.00</span></span>
                            </div>
                        </div>
                    </div>
                    <div class="product-item recent-product style-01 rows-space-0 post-36 product type-product status-publish has-post-thumbnail product_cat-table product_cat-bed product_tag-light product_tag-table product_tag-sock  instock sale shipping-taxable purchasable product-type-simple">
                        <div class="product-inner tooltip-left">
                            <div class="product-thumb">
                                <a class="thumb-link" href="#"
                                   tabindex="-1">
                                    <img class="img-responsive"
                                         src="assets/images/vishal-print/product5.jpg"
                                         alt="Print In White" width="270" height="350">
                                </a>
                                <div class="flash">
                                    <span class="onsale"><span class="number">-21%</span></span> 
                                    <span class="onnew"><span class="text">New</span></span></div>
                                <div class="group-button">
                                    <div class="yith-wcwl-add-to-wishlist">
                                        <div class="yith-wcwl-add-button show">
                                            <a href="#" class="add_to_wishlist">Add to Wishlist</a>
                                        </div>
                                    </div>
                                    <div class="add-to-cart">
                                        <a href="#" class="button product_type_simple add_to_cart_button">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-info equal-elem">
                                <h3 class="product-name product_title">
                                    <a href="#" tabindex="-1">Product 6</a>
                                </h3>
                                
                                <span class="price"><del><span class="akasha-Price-amount amount"><span
                                        class="akasha-Price-currencySymbol">INR </span>1325.00</span></del> <ins><span
                                        class="akasha-Price-amount amount"><span
                                        class="akasha-Price-currencySymbol">INR </span>1099.00</span></ins></span>
                            </div>
                        </div>
                    </div>
                    <div class="product-item recent-product style-01 rows-space-0 post-34 product type-product status-publish has-post-thumbnail product_cat-light product_cat-new-arrivals product_tag-light product_tag-hat product_tag-sock last instock sale featured shipping-taxable product-type-grouped">
                        <div class="product-inner tooltip-left">
                            <div class="product-thumb">
                                <a class="thumb-link" href="#"
                                   tabindex="-1">
                                    <img class="img-responsive"
                                         src="assets/images/vishal-print/product6.jpg"
                                         alt="Maternity Shoulder" width="270" height="350">
                                </a>
                                <div class="flash">
                                    <span class="onnew"><span class="text">New</span></span></div>
                                <div class="group-button">
                                    <div class="yith-wcwl-add-to-wishlist">
                                        <div class="yith-wcwl-add-button show">
                                            <a href="#" class="add_to_wishlist">Add to Wishlist</a>
                                        </div>
                                    </div>
                                    
                                    <div class="add-to-cart">
                                        <a href="#"
                                           class="button product_type_simple add_to_cart_button">Viewproducts</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-info equal-elem">
                                <h3 class="product-name product_title">
                                    <a href="#" tabindex="-1">Product 6</a>
                                </h3>
                                   <span class="price"><del><span class="akasha-Price-amount amount"><span
                                        class="akasha-Price-currencySymbol">INR </span>1725.00</span></del> <ins><span
                                        class="akasha-Price-amount amount"><span
                                        class="akasha-Price-currencySymbol">INR </span>1399.00</span></ins></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	
	  <div class="section-001">
        <div class="container">
            <div class="akasha-heading style-01">
                <div class="heading-inner">
                    <h3 class="title">Best Seller</h3>
                    <div class="subtitle">
                        Made with care for your little ones, our products are perfect for every occasion. Check it out.
                    </div>
                </div>
            </div>
            <div class="akasha-products style-01">
                <div class="response-product product-list-owl owl-slick equal-container better-height"
                     data-slick="{&quot;arrows&quot;:true,&quot;slidesMargin&quot;:30,&quot;dots&quot;:true,&quot;infinite&quot;:false,&quot;speed&quot;:300,&quot;slidesToShow&quot;:4,&quot;rows&quot;:1}"
                     data-responsive="[{&quot;breakpoint&quot;:480,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:768,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;20&quot;}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;20&quot;}},{&quot;breakpoint&quot;:1500,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesMargin&quot;:&quot;30&quot;}}]">
                    <div class="product-item recent-product style-01 rows-space-0 post-93 product type-product status-publish has-post-thumbnail product_cat-light product_cat-table product_cat-new-arrivals product_tag-table product_tag-sock first instock shipping-taxable purchasable product-type-simple  ">
                        <div class="product-inner tooltip-left">
                            <div class="product-thumb">
                                <a class="thumb-link"
                                   href="#" tabindex="0">
                                    <img class="img-responsive"
                                         src="assets/images/vishal-print/product1.jpg"
                                         alt="Black Shirt" width="270" height="350">
                                </a>
                                <div class="flash">
                                    <span class="onnew"><span class="text">New</span></span></div>
                                <div class="group-button">
                                    <div class="yith-wcwl-add-to-wishlist">
                                        <div class="yith-wcwl-add-button show">
                                            <a href="#" class="add_to_wishlist">Add to Wishlist</a>
                                        </div>
                                    </div>
                                    
                                    <div class="add-to-cart">
                                        <a href="#" class="button product_type_simple add_to_cart_button">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-info equal-elem">
                                <h3 class="product-name product_title">
                                    <a href="#"
                                       tabindex="0">Product 1</a>
                                </h3>
                               
                                <span class="price"><span class="akasha-Price-amount amount"><span
                                        class="akasha-Price-currencySymbol">INR </span>2099.00</span></span>
                            </div>
                        </div>
                    </div>
                    <div class="product-item recent-product style-01 rows-space-0 post-49 product type-product status-publish has-post-thumbnail product_cat-light product_cat-bed product_cat-sofas product_tag-multi product_tag-lamp  instock shipping-taxable purchasable product-type-simple">
                        <div class="product-inner tooltip-left">
                            <div class="product-thumb">
                                <a class="thumb-link"
                                   href="#" tabindex="0">
                                    <img class="img-responsive"
                                         src="assets/images/vishal-print/product2.jpg"
                                         alt="Smock Dress" width="270" height="350">
                                </a>
                                <div class="flash">
                                    <span class="onnew"><span class="text">New</span></span></div>
                                <div class="group-button">
                                    <div class="yith-wcwl-add-to-wishlist">
                                        <div class="yith-wcwl-add-button show">
                                            <a href="#" class="add_to_wishlist">Add to Wishlist</a>
                                        </div>
                                    </div>
                                  
                                   
                                    <div class="add-to-cart">
                                        <a href="#" class="button product_type_simple add_to_cart_button">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-info equal-elem">
                                <h3 class="product-name product_title">
                                    <a href="#"
                                       tabindex="0">Product 2</a>
                                </h3>
                               
                                <span class="price"><span class="akasha-Price-amount amount"><span
                                        class="akasha-Price-currencySymbol">INR </span>3099.00</span></span>
                            </div>
                        </div>
                    </div>
                    <div class="product-item recent-product style-01 rows-space-0 post-37 product type-product status-publish has-post-thumbnail product_cat-chair product_cat-bed product_tag-light product_tag-hat product_tag-sock last instock shipping-taxable purchasable product-type-simple">
                        <div class="product-inner tooltip-left">
                            <div class="product-thumb">
                                <a class="thumb-link" href="#"
                                   tabindex="0">
                                    <img class="img-responsive"
                                         src="assets/images/vishal-print/product3.jpg"
                                         alt="Shirred Front" width="270" height="350">
                                </a>
                                <div class="flash">
                                    <span class="onnew"><span class="text">New</span></span></div>
                                <div class="group-button">
                                    <div class="yith-wcwl-add-to-wishlist">
                                        <div class="yith-wcwl-add-button show">
                                            <a href="#" class="add_to_wishlist">Add to Wishlist</a>
                                        </div>
                                    </div>
                                   
                                   
                                    <div class="add-to-cart">
                                        <a href="#" class="button product_type_simple add_to_cart_button">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-info equal-elem">
                                <h3 class="product-name product_title">
                                    <a href="#" tabindex="0">Product 3</a>
                                </h3>
                               
                                <span class="price"><span class="akasha-Price-amount amount"><span
                                        class="akasha-Price-currencySymbol">INR </span>2500.00</span></span>
                            </div>
                        </div>
                    </div>
                    <div class="product-item recent-product style-01 rows-space-0 post-35 product type-product status-publish has-post-thumbnail product_cat-chair product_cat-new-arrivals product_cat-lamp product_tag-light product_tag-hat product_tag-sock first instock shipping-taxable purchasable product-type-simple">
                        <div class="product-inner tooltip-left">
                            <div class="product-thumb">
                                <a class="thumb-link" href="#"
                                   tabindex="0">
                                    <img class="img-responsive"
                                         src="assets/images/vishal-print/product4.jpg"
                                         alt="Brown Shirt" width="270" height="350">
                                </a>
                                <div class="flash">
                                    <span class="onnew"><span class="text">New</span></span></div>
                                <div class="group-button">
                                    <div class="yith-wcwl-add-to-wishlist">
                                        <div class="yith-wcwl-add-button show">
                                            <a href="#" class="add_to_wishlist">Add to Wishlist</a>
                                        </div>
                                    </div>
                                    <div class="add-to-cart">
                                        <a href="#" class="button product_type_simple add_to_cart_button">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-info equal-elem">
                                <h3 class="product-name product_title">
                                    <a href="#" tabindex="0">Product 4</a>
                                </h3>
                               
                                <span class="price"><span class="akasha-Price-amount amount"><span
                                        class="akasha-Price-currencySymbol">INR </span>4099.00</span></span>
                            </div>
                        </div>
                    </div>
                    <div class="product-item recent-product style-01 rows-space-0 post-36 product type-product status-publish has-post-thumbnail product_cat-table product_cat-bed product_tag-light product_tag-table product_tag-sock  instock sale shipping-taxable purchasable product-type-simple">
                        <div class="product-inner tooltip-left">
                            <div class="product-thumb">
                                <a class="thumb-link" href="#"
                                   tabindex="-1">
                                    <img class="img-responsive"
                                         src="assets/images/vishal-print/product5.jpg"
                                         alt="Print In White" width="270" height="350">
                                </a>
                                <div class="flash">
                                    <span class="onsale"><span class="number">-21%</span></span> 
                                    <span class="onnew"><span class="text">New</span></span></div>
                                <div class="group-button">
                                    <div class="yith-wcwl-add-to-wishlist">
                                        <div class="yith-wcwl-add-button show">
                                            <a href="#" class="add_to_wishlist">Add to Wishlist</a>
                                        </div>
                                    </div>
                                    <div class="add-to-cart">
                                        <a href="#" class="button product_type_simple add_to_cart_button">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-info equal-elem">
                                <h3 class="product-name product_title">
                                    <a href="#" tabindex="-1">Product 6</a>
                                </h3>
                                
                                <span class="price"><del><span class="akasha-Price-amount amount"><span
                                        class="akasha-Price-currencySymbol">INR </span>1325.00</span></del> <ins><span
                                        class="akasha-Price-amount amount"><span
                                        class="akasha-Price-currencySymbol">INR </span>1099.00</span></ins></span>
                            </div>
                        </div>
                    </div>
                    <div class="product-item recent-product style-01 rows-space-0 post-34 product type-product status-publish has-post-thumbnail product_cat-light product_cat-new-arrivals product_tag-light product_tag-hat product_tag-sock last instock sale featured shipping-taxable product-type-grouped">
                        <div class="product-inner tooltip-left">
                            <div class="product-thumb">
                                <a class="thumb-link" href="#"
                                   tabindex="-1">
                                    <img class="img-responsive"
                                         src="assets/images/vishal-print/product6.jpg"
                                         alt="Maternity Shoulder" width="270" height="350">
                                </a>
                                <div class="flash">
                                    <span class="onnew"><span class="text">New</span></span></div>
                                <div class="group-button">
                                    <div class="yith-wcwl-add-to-wishlist">
                                        <div class="yith-wcwl-add-button show">
                                            <a href="#" class="add_to_wishlist">Add to Wishlist</a>
                                        </div>
                                    </div>
                                    
                                    <div class="add-to-cart">
                                        <a href="#"
                                           class="button product_type_simple add_to_cart_button">Viewproducts</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-info equal-elem">
                                <h3 class="product-name product_title">
                                    <a href="#" tabindex="-1">Product 6</a>
                                </h3>
                                   <span class="price"><del><span class="akasha-Price-amount amount"><span
                                        class="akasha-Price-currencySymbol">INR </span>1725.00</span></del> <ins><span
                                        class="akasha-Price-amount amount"><span
                                        class="akasha-Price-currencySymbol">INR </span>1399.00</span></ins></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-001 section-004">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-4">
                    <div class="akasha-banner style-04 left-center">
                        <div class="banner-inner">
                            <figure class="banner-thumb">
                                <img src="assets/images/vishal-print/saree.jpg"
                                     class="attachment-full size-full" alt="img">
                            </figure>
                            
                        </div>
                    </div>
					<div class="title-wrap">
                                        <h4 class="title" style="text-align:center;">Sarees Collection</h4>
                                    </div>
                </div>
				
				
                <div class="col-md-12 col-lg-4">
                    <div class="akasha-banner style-04 left-center">
                        <div class="banner-inner">
                            <figure class="banner-thumb">
                                <img src="assets/images/vishal-print/dress.jpg"
                                     class="attachment-full size-full" alt="img">
                            </figure>
                           
                        </div>
                    </div>
					<div class="title-wrap">
                                        <h4 class="title" style="text-align:center;">Dress Collection</h4>
                                    </div>
                </div>
				
				
				  <div class="col-md-12 col-lg-4">
                    <div class="akasha-banner style-04 left-center">
                        <div class="banner-inner">
                            <figure class="banner-thumb">
                                <img src="assets/images/vishal-print/kurti.jpg"
                                     class="attachment-full size-full" alt="img">
                            </figure>
                            
                        </div>
                    </div>
					 <div class="title-wrap">
                                        <h4 class="title" style="text-align:center;">Kurti Collection</h4>
                                    </div>
                </div>
				
				
            </div>
        </div>
    </div>
    
	
	  <div class="section-001">
        <div class="container">
            <div class="akasha-heading style-01">
                <div class="heading-inner">
                    <h3 class="title">Trending Sarees</h3>
                    <div class="subtitle">
                        Made with care for your little ones, our products are perfect for every occasion. Check it out.
                    </div>
                </div>
            </div>
            <div class="akasha-products style-01">
                <div class="response-product product-list-owl owl-slick equal-container better-height"
                     data-slick="{&quot;arrows&quot;:true,&quot;slidesMargin&quot;:30,&quot;dots&quot;:true,&quot;infinite&quot;:false,&quot;speed&quot;:300,&quot;slidesToShow&quot;:4,&quot;rows&quot;:1}"
                     data-responsive="[{&quot;breakpoint&quot;:480,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:768,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;20&quot;}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;20&quot;}},{&quot;breakpoint&quot;:1500,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesMargin&quot;:&quot;30&quot;}}]">
                    <div class="product-item recent-product style-01 rows-space-0 post-93 product type-product status-publish has-post-thumbnail product_cat-light product_cat-table product_cat-new-arrivals product_tag-table product_tag-sock first instock shipping-taxable purchasable product-type-simple  ">
                        <div class="product-inner tooltip-left">
                            <div class="product-thumb">
                                <a class="thumb-link"
                                   href="#" tabindex="0">
                                    <img class="img-responsive"
                                         src="assets/images/vishal-print/product1.jpg"
                                         alt="Black Shirt" width="270" height="350">
                                </a>
                                <div class="flash">
                                    <span class="onnew"><span class="text">New</span></span></div>
                                <div class="group-button">
                                    <div class="yith-wcwl-add-to-wishlist">
                                        <div class="yith-wcwl-add-button show">
                                            <a href="#" class="add_to_wishlist">Add to Wishlist</a>
                                        </div>
                                    </div>
                                    
                                    <div class="add-to-cart">
                                        <a href="#" class="button product_type_simple add_to_cart_button">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-info equal-elem">
                                <h3 class="product-name product_title">
                                    <a href="#"
                                       tabindex="0">Product 1</a>
                                </h3>
                               
                                <span class="price"><span class="akasha-Price-amount amount"><span
                                        class="akasha-Price-currencySymbol">INR </span>2099.00</span></span>
                            </div>
                        </div>
                    </div>
                    <div class="product-item recent-product style-01 rows-space-0 post-49 product type-product status-publish has-post-thumbnail product_cat-light product_cat-bed product_cat-sofas product_tag-multi product_tag-lamp  instock shipping-taxable purchasable product-type-simple">
                        <div class="product-inner tooltip-left">
                            <div class="product-thumb">
                                <a class="thumb-link"
                                   href="#" tabindex="0">
                                    <img class="img-responsive"
                                         src="assets/images/vishal-print/product2.jpg"
                                         alt="Smock Dress" width="270" height="350">
                                </a>
                                <div class="flash">
                                    <span class="onnew"><span class="text">New</span></span></div>
                                <div class="group-button">
                                    <div class="yith-wcwl-add-to-wishlist">
                                        <div class="yith-wcwl-add-button show">
                                            <a href="#" class="add_to_wishlist">Add to Wishlist</a>
                                        </div>
                                    </div>
                                  
                                   
                                    <div class="add-to-cart">
                                        <a href="#" class="button product_type_simple add_to_cart_button">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-info equal-elem">
                                <h3 class="product-name product_title">
                                    <a href="#"
                                       tabindex="0">Product 2</a>
                                </h3>
                               
                                <span class="price"><span class="akasha-Price-amount amount"><span
                                        class="akasha-Price-currencySymbol">INR </span>3099.00</span></span>
                            </div>
                        </div>
                    </div>
                    <div class="product-item recent-product style-01 rows-space-0 post-37 product type-product status-publish has-post-thumbnail product_cat-chair product_cat-bed product_tag-light product_tag-hat product_tag-sock last instock shipping-taxable purchasable product-type-simple">
                        <div class="product-inner tooltip-left">
                            <div class="product-thumb">
                                <a class="thumb-link" href="#"
                                   tabindex="0">
                                    <img class="img-responsive"
                                         src="assets/images/vishal-print/product3.jpg"
                                         alt="Shirred Front" width="270" height="350">
                                </a>
                                <div class="flash">
                                    <span class="onnew"><span class="text">New</span></span></div>
                                <div class="group-button">
                                    <div class="yith-wcwl-add-to-wishlist">
                                        <div class="yith-wcwl-add-button show">
                                            <a href="#" class="add_to_wishlist">Add to Wishlist</a>
                                        </div>
                                    </div>
                                   
                                   
                                    <div class="add-to-cart">
                                        <a href="#" class="button product_type_simple add_to_cart_button">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-info equal-elem">
                                <h3 class="product-name product_title">
                                    <a href="#" tabindex="0">Product 3</a>
                                </h3>
                               
                                <span class="price"><span class="akasha-Price-amount amount"><span
                                        class="akasha-Price-currencySymbol">INR </span>2500.00</span></span>
                            </div>
                        </div>
                    </div>
                    <div class="product-item recent-product style-01 rows-space-0 post-35 product type-product status-publish has-post-thumbnail product_cat-chair product_cat-new-arrivals product_cat-lamp product_tag-light product_tag-hat product_tag-sock first instock shipping-taxable purchasable product-type-simple">
                        <div class="product-inner tooltip-left">
                            <div class="product-thumb">
                                <a class="thumb-link" href="#"
                                   tabindex="0">
                                    <img class="img-responsive"
                                         src="assets/images/vishal-print/product4.jpg"
                                         alt="Brown Shirt" width="270" height="350">
                                </a>
                                <div class="flash">
                                    <span class="onnew"><span class="text">New</span></span></div>
                                <div class="group-button">
                                    <div class="yith-wcwl-add-to-wishlist">
                                        <div class="yith-wcwl-add-button show">
                                            <a href="#" class="add_to_wishlist">Add to Wishlist</a>
                                        </div>
                                    </div>
                                    <div class="add-to-cart">
                                        <a href="#" class="button product_type_simple add_to_cart_button">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-info equal-elem">
                                <h3 class="product-name product_title">
                                    <a href="#" tabindex="0">Product 4</a>
                                </h3>
                               
                                <span class="price"><span class="akasha-Price-amount amount"><span
                                        class="akasha-Price-currencySymbol">INR </span>4099.00</span></span>
                            </div>
                        </div>
                    </div>
                    <div class="product-item recent-product style-01 rows-space-0 post-36 product type-product status-publish has-post-thumbnail product_cat-table product_cat-bed product_tag-light product_tag-table product_tag-sock  instock sale shipping-taxable purchasable product-type-simple">
                        <div class="product-inner tooltip-left">
                            <div class="product-thumb">
                                <a class="thumb-link" href="#"
                                   tabindex="-1">
                                    <img class="img-responsive"
                                         src="assets/images/vishal-print/product5.jpg"
                                         alt="Print In White" width="270" height="350">
                                </a>
                                <div class="flash">
                                    <span class="onsale"><span class="number">-21%</span></span> 
                                    <span class="onnew"><span class="text">New</span></span></div>
                                <div class="group-button">
                                    <div class="yith-wcwl-add-to-wishlist">
                                        <div class="yith-wcwl-add-button show">
                                            <a href="#" class="add_to_wishlist">Add to Wishlist</a>
                                        </div>
                                    </div>
                                    <div class="add-to-cart">
                                        <a href="#" class="button product_type_simple add_to_cart_button">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-info equal-elem">
                                <h3 class="product-name product_title">
                                    <a href="#" tabindex="-1">Product 6</a>
                                </h3>
                                
                                <span class="price"><del><span class="akasha-Price-amount amount"><span
                                        class="akasha-Price-currencySymbol">INR </span>1325.00</span></del> <ins><span
                                        class="akasha-Price-amount amount"><span
                                        class="akasha-Price-currencySymbol">INR </span>1099.00</span></ins></span>
                            </div>
                        </div>
                    </div>
                    <div class="product-item recent-product style-01 rows-space-0 post-34 product type-product status-publish has-post-thumbnail product_cat-light product_cat-new-arrivals product_tag-light product_tag-hat product_tag-sock last instock sale featured shipping-taxable product-type-grouped">
                        <div class="product-inner tooltip-left">
                            <div class="product-thumb">
                                <a class="thumb-link" href="#"
                                   tabindex="-1">
                                    <img class="img-responsive"
                                         src="assets/images/vishal-print/product6.jpg"
                                         alt="Maternity Shoulder" width="270" height="350">
                                </a>
                                <div class="flash">
                                    <span class="onnew"><span class="text">New</span></span></div>
                                <div class="group-button">
                                    <div class="yith-wcwl-add-to-wishlist">
                                        <div class="yith-wcwl-add-button show">
                                            <a href="#" class="add_to_wishlist">Add to Wishlist</a>
                                        </div>
                                    </div>
                                    
                                    <div class="add-to-cart">
                                        <a href="#"
                                           class="button product_type_simple add_to_cart_button">Viewproducts</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-info equal-elem">
                                <h3 class="product-name product_title">
                                    <a href="#" tabindex="-1">Product 6</a>
                                </h3>
                                   <span class="price"><del><span class="akasha-Price-amount amount"><span
                                        class="akasha-Price-currencySymbol">INR </span>1725.00</span></del> <ins><span
                                        class="akasha-Price-amount amount"><span
                                        class="akasha-Price-currencySymbol">INR </span>1399.00</span></ins></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	
   
   
    
    <div class="section-001">
        <div class="container">
            <div class="akasha-heading style-01">
                <div class="heading-inner">
                    <h3 class="title">
                        From Our Blog</h3>
                    <div class="subtitle">
                        Lorem ipsum dolor sit amet consectetur adipiscing elit erat vehicula ad, mollis viverra
                        vulputate
                    </div>
                </div>
            </div>
            <div class="akasha-blog style-01">
                <div class="blog-list-owl owl-slick equal-container better-height"
                     data-slick="{&quot;arrows&quot;:false,&quot;slidesMargin&quot;:30,&quot;dots&quot;:true,&quot;infinite&quot;:false,&quot;speed&quot;:300,&quot;slidesToShow&quot;:3,&quot;rows&quot;:1}"
                     data-responsive="[{&quot;breakpoint&quot;:480,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:768,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesMargin&quot;:&quot;20&quot;}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesMargin&quot;:&quot;20&quot;}},{&quot;breakpoint&quot;:1500,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;30&quot;}}]">
                    <article
                            class="post-item post-grid rows-space-0 post-195 post type-post status-publish format-standard has-post-thumbnail hentry category-light category-table category-life-style tag-light tag-life-style">
                        <div class="post-inner blog-grid">
                            <div class="post-thumb">
                                <a href="#" tabindex="0">
                                    <img src="assets/images/vishal-print/blog1.jpg"
                                         class="img-responsive attachment-370x330 size-370x330" alt="img"
                                         width="370" height="330"> </a>
                               
                            </div>
                            <div class="post-content">
                                <div class="post-meta">
                                    <div class="post-author">
                                        By:<a href="#" tabindex="0">
                                        admin </a>
                                    </div>
                                    <div class="post-comment-icon">
                                        <a href="#"
                                           tabindex="0">
                                            0 </a>
                                    </div>
                                </div>
                                <div class="post-info equal-elem"  >
                                    <h2 class="post-title"><a
                                            href="#"
                                            tabindex="0">Not your ordinary multi service.</a></h2>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Malesuada sodales
                                    quisque litora dapibus primis lacinia
                                </div>
                            </div>
                        </div>
                    </article>
                    <article
                            class="post-item post-grid rows-space-0 post-192 post type-post status-publish format-standard has-post-thumbnail hentry category-light category-fashion category-multi category-life-style tag-light tag-fashion tag-multi">
                        <div class="post-inner blog-grid">
                            <div class="post-thumb">
                                <a href="#"
                                   tabindex="0">
                                    <img src="assets/images/vishal-print/blog2.jpg"
                                         class="img-responsive attachment-370x330 size-370x330" alt="img"
                                         width="370" height="330"> </a>
                               
                            </div>
                            <div class="post-content">
                                <div class="post-meta">
                                    <div class="post-author">
                                        By:<a href="#" tabindex="0">
                                        admin </a>
                                    </div>
                                    <div class="post-comment-icon">
                                        <a href="#"
                                           tabindex="0">
                                            0 </a>
                                    </div>
                                </div>
                                <div class="post-info equal-elem"  >
                                    <h2 class="post-title"><a
                                            href="#"
                                            tabindex="0">We bring you the best by working</a></h2>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Malesuada sodales
                                    quisque litora dapibus primis lacinia
                                </div>
                            </div>
                        </div>
                    </article>
                    <article
                            class="post-item post-grid rows-space-0 post-189 post type-post status-publish format-video has-post-thumbnail hentry category-table category-life-style tag-multi tag-life-style post_format-post-format-video">
                        <div class="post-inner blog-grid">
                            <div class="post-thumb">
                                <a href="#"
                                   tabindex="0">
                                    <img src="assets/images/vishal-print/blog3.jpg"
                                         class="img-responsive attachment-370x330 size-370x330" alt="img"
                                         width="370" height="330"> </a>
                               
                            </div>
                            <div class="post-content">
                                <div class="post-meta">
                                    <div class="post-author">
                                        By:<a href="#" tabindex="0">
                                        admin </a>
                                    </div>
                                    <div class="post-comment-icon">
                                        <a href="#"
                                           tabindex="0">
                                            0 </a>
                                    </div>
                                </div>
                                <div class="post-info equal-elem"  >
                                    <h2 class="post-title"><a
                                            href="#"
                                            tabindex="0">We design functional best multi</a></h2>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Malesuada sodales
                                    quisque litora dapibus primis lacinia
                                </div>
                            </div>
                        </div>
                    </article>
                    <article
                            class="post-item post-grid rows-space-0 post-186 post type-post status-publish format-standard has-post-thumbnail hentry category-light category-life-style tag-life-style">
                        <div class="post-inner blog-grid">
                            <div class="post-thumb">
                                <a href="#"
                                   tabindex="-1">
                                    <img src="assets/images/vishal-print/blog4.jpg"
                                         class="img-responsive attachment-370x330 size-370x330" alt="img"
                                         width="370" height="330"> </a>
                                
                            </div>
                            <div class="post-content">
                                <div class="post-meta">
                                    <div class="post-author">
                                        By:<a href="#" tabindex="-1">
                                        admin </a>
                                    </div>
                                    <div class="post-comment-icon">
                                        <a href="#"
                                           tabindex="-1">
                                            0 </a>
                                    </div>
                                </div>
                                <div class="post-info equal-elem"  >
                                    <h2 class="post-title"><a
                                            href="#"
                                            tabindex="-1">The child is swimming with a buoy</a></h2>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Malesuada sodales
                                    quisque litora dapibus primis lacinia
                                </div>
                            </div>
                        </div>
                    </article>
                    <article
                            class="post-item post-grid rows-space-0 post-183 post type-post status-publish format-standard has-post-thumbnail hentry category-light category-fashion tag-light tag-multi">
                        <div class="post-inner blog-grid">
                            <div class="post-thumb">
                                <a href="#" tabindex="-1">
                                    <img src="assets/images/vishal-print/blog5.jpg"
                                         class="img-responsive attachment-370x330 size-370x330" alt="img"
                                         width="370" height="330"> </a>
                               
                            </div>
                            <div class="post-content">
                                <div class="post-meta">
                                    <div class="post-author">
                                        By:<a href="#" tabindex="-1">
                                        admin </a>
                                    </div>
                                    <div class="post-comment-icon">
                                        <a href="#"
                                           tabindex="-1">
                                            0 </a>
                                    </div>
                                </div>
                                <div class="post-info equal-elem"  >
                                    <h2 class="post-title"><a
                                            href="#"
                                            tabindex="-1">Collection hiding beside beige wall</a></h2>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Malesuada sodales
                                    quisque litora dapibus primis lacinia
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
	
	
	<div class="section-030" style="padding-bottom:75px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-4 ">
                    <div class="akasha-iconbox style-03">
                        <div class="iconbox-inner">
                            <div class="icon">
                                <span class="flaticon-rocket-ship"></span>
                            </div>
                            <div class="content">
                                <h4 class="title">Fast Shipping.</h4>
                                <div class="desc">With sites in 5 languages, we ship to over 200 countries</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4 ">
                    <div class="akasha-iconbox style-03">
                        <div class="iconbox-inner">
                            <div class="icon">
                                <span class="flaticon-padlock"></span>
                            </div>
                            <div class="content">
                                <h4 class="title">Safe delivery</h4>
                                <div class="desc">Pay with the world’s most popular, secure payment.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4 ">
                    <div class="akasha-iconbox style-03">
                        <div class="iconbox-inner">
                            <div class="icon">
                                <span class="flaticon-recycle"></span>
                            </div>
                            <div class="content">
                                <h4 class="title">365 Days Return</h4>
                                <div class="desc">Round-the-clock assistance for a shopping experience.</div>
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