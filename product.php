<?php 
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
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
<div class="banner-wrapper has_background">
    <img src="assets/images/banner-for-all2.jpg"
         class="img-responsive attachment-1920x447 size-1920x447" alt="img">
    <div class="banner-wrapper-inner">
        <h1 class="page-title" style="color:#fff;">Product</h1>
        <div role="navigation" aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
            <ul class="trail-items breadcrumb">
                <li class="trail-item trail-begin"><a href="index.php" style="color:#fff;"><span style="color:#fff;">Home</span></a></li>
                <li class="trail-item trail-end active"> <span style="color:#fff;">Product</span>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="main-container shop-page left-sidebar">
    <div class="container">
        <div class="row">
            <div class="main-content col-xl-9 col-lg-8 col-md-8 col-sm-12 has-sidebar">
                <div class="shop-control shop-before-control">
                    
                    <form class="akasha-ordering" method="get">
                        <select title="product_cat" name="orderby" class="orderby">
                            <option value="menu_order" selected="selected">Default sorting</option>
                            <option value="date">Sort by latest</option>
                            <option value="price">Sort by price: low to high</option>
                            <option value="price-desc">Sort by price: high to low</option>
                        </select>
                    </form>
                    <form class="per-page-form">
                        <label>
                            <select class="option-perpage">
                                <option value="12" selected="">
                                    Show 12
                                </option>
                                <option value="5">
                                    Show 05
                                </option>
                                <option value="10">
                                    Show 10
                                </option>
                                <option value="12">
                                    Show 12
                                </option>
                                <option value="15">
                                    Show 15
                                </option>
                                <option value="20">
                                    Show All
                                </option>
                            </select>
                        </label>
                    </form>
                </div>
                <div class=" auto-clear equal-container better-height akasha-products">
                    <ul class="row products columns-3">
                        <li class="product-item wow fadeInUp product-item rows-space-30 col-bg-4 col-xl-4 col-lg-6 col-md-6 col-sm-6 col-ts-6 style-01 post-24 product type-product status-publish has-post-thumbnail product_cat-chair product_cat-table product_cat-new-arrivals product_tag-light product_tag-hat product_tag-sock first instock featured shipping-taxable purchasable product-type-variable has-default-attributes"
                            data-wow-duration="1s" data-wow-delay="0ms" data-wow="fadeInUp">
                            <div class="product-inner tooltip-left">
                                <div class="product-thumb">
                                    <a class="thumb-link" href="product-detail.php">
                                        <img class="img-responsive"
                                             src="assets/images/vishal-print/product1.jpg"
                                             alt="Women Bags" width="600" height="778">
                                    </a>
                                    <div class="group-button">
                                        <div class="yith-wcwl-add-to-wishlist">
                                            <div class="yith-wcwl-add-button show">
                                                <a href="#" class="add_to_wishlist">Add to Wishlist</a>
                                            </div>
                                        </div>
                                        
                                        <div class="add-to-cart">
                                            <a href="#" class="button product_type_variable add_to_cart_button">Select
                                                options</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-info equal-elem">
                                    <h3 class="product-name product_title">
                                        <a href="product-detail.php">Product 1</a>
                                    </h3>
                                  
                                    <span class="price"><span class="akasha-Price-amount amount"><span
                                            class="akasha-Price-currencySymbol">INR </span>1145.00</span></span>
                                </div>
                            </div>
                        </li>
                       
                         <li class="product-item wow fadeInUp product-item rows-space-30 col-bg-4 col-xl-4 col-lg-6 col-md-6 col-sm-6 col-ts-6 style-01 post-24 product type-product status-publish has-post-thumbnail product_cat-chair product_cat-table product_cat-new-arrivals product_tag-light product_tag-hat product_tag-sock first instock featured shipping-taxable purchasable product-type-variable has-default-attributes"
                            data-wow-duration="1s" data-wow-delay="0ms" data-wow="fadeInUp">
                            <div class="product-inner tooltip-left">
                                <div class="product-thumb">
                                    <a class="thumb-link" href="product-detail.php">
                                        <img class="img-responsive"
                                             src="assets/images/vishal-print/product2.jpg"
                                             alt="Women Bags" width="600" height="778">
                                    </a>
                                    <div class="group-button">
                                        <div class="yith-wcwl-add-to-wishlist">
                                            <div class="yith-wcwl-add-button show">
                                                <a href="#" class="add_to_wishlist">Add to Wishlist</a>
                                            </div>
                                        </div>
                                        
                                        <div class="add-to-cart">
                                            <a href="#" class="button product_type_variable add_to_cart_button">Select
                                                options</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-info equal-elem">
                                    <h3 class="product-name product_title">
                                        <a href="product-detail.php">Product 2</a>
                                    </h3>
                                  
                                    <span class="price"><span class="akasha-Price-amount amount"><span
                                            class="akasha-Price-currencySymbol">INR </span>1145.00</span></span>
                                </div>
                            </div>
                        </li>
                        
                       
                       
                         <li class="product-item wow fadeInUp product-item rows-space-30 col-bg-4 col-xl-4 col-lg-6 col-md-6 col-sm-6 col-ts-6 style-01 post-24 product type-product status-publish has-post-thumbnail product_cat-chair product_cat-table product_cat-new-arrivals product_tag-light product_tag-hat product_tag-sock first instock featured shipping-taxable purchasable product-type-variable has-default-attributes"
                            data-wow-duration="1s" data-wow-delay="0ms" data-wow="fadeInUp">
                            <div class="product-inner tooltip-left">
                                <div class="product-thumb">
                                    <a class="thumb-link" href="product-detail.php">
                                        <img class="img-responsive"
                                             src="assets/images/vishal-print/product3.jpg"
                                             alt="Women Bags" width="600" height="778">
                                    </a>
                                    <div class="group-button">
                                        <div class="yith-wcwl-add-to-wishlist">
                                            <div class="yith-wcwl-add-button show">
                                                <a href="#" class="add_to_wishlist">Add to Wishlist</a>
                                            </div>
                                        </div>
                                        
                                        <div class="add-to-cart">
                                            <a href="#" class="button product_type_variable add_to_cart_button">Select
                                                options</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-info equal-elem">
                                    <h3 class="product-name product_title">
                                        <a href="product-detail.php">Product 3</a>
                                    </h3>
                                  
                                    <span class="price"><span class="akasha-Price-amount amount"><span
                                            class="akasha-Price-currencySymbol">INR </span>1145.00</span></span>
                                </div>
                            </div>
                        </li>
						
						 <li class="product-item wow fadeInUp product-item rows-space-30 col-bg-4 col-xl-4 col-lg-6 col-md-6 col-sm-6 col-ts-6 style-01 post-24 product type-product status-publish has-post-thumbnail product_cat-chair product_cat-table product_cat-new-arrivals product_tag-light product_tag-hat product_tag-sock first instock featured shipping-taxable purchasable product-type-variable has-default-attributes"
                            data-wow-duration="1s" data-wow-delay="0ms" data-wow="fadeInUp">
                            <div class="product-inner tooltip-left">
                                <div class="product-thumb">
                                    <a class="thumb-link" href="product-detail.php">
                                        <img class="img-responsive"
                                             src="assets/images/vishal-print/product4.jpg"
                                             alt="Women Bags" width="600" height="778">
                                    </a>
                                    <div class="group-button">
                                        <div class="yith-wcwl-add-to-wishlist">
                                            <div class="yith-wcwl-add-button show">
                                                <a href="#" class="add_to_wishlist">Add to Wishlist</a>
                                            </div>
                                        </div>
                                        
                                        <div class="add-to-cart">
                                            <a href="#" class="button product_type_variable add_to_cart_button">Select
                                                options</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-info equal-elem">
                                    <h3 class="product-name product_title">
                                        <a href="product-detail.php">Product 4</a>
                                    </h3>
                                  
                                    <span class="price"><span class="akasha-Price-amount amount"><span
                                            class="akasha-Price-currencySymbol">INR </span>1145.00</span></span>
                                </div>
                            </div>
                        </li>
                        
                        
                        <li class="product-item wow fadeInUp product-item rows-space-30 col-bg-4 col-xl-4 col-lg-6 col-md-6 col-sm-6 col-ts-6 style-01 post-24 product type-product status-publish has-post-thumbnail product_cat-chair product_cat-table product_cat-new-arrivals product_tag-light product_tag-hat product_tag-sock first instock featured shipping-taxable purchasable product-type-variable has-default-attributes"
                            data-wow-duration="1s" data-wow-delay="0ms" data-wow="fadeInUp">
                            <div class="product-inner tooltip-left">
                                <div class="product-thumb">
                                    <a class="thumb-link" href="product-detail.php">
                                        <img class="img-responsive"
                                             src="assets/images/vishal-print/product5.jpg"
                                             alt="Women Bags" width="600" height="778">
                                    </a>
                                    <div class="group-button">
                                        <div class="yith-wcwl-add-to-wishlist">
                                            <div class="yith-wcwl-add-button show">
                                                <a href="#" class="add_to_wishlist">Add to Wishlist</a>
                                            </div>
                                        </div>
                                        
                                        <div class="add-to-cart">
                                            <a href="#" class="button product_type_variable add_to_cart_button">Select
                                                options</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-info equal-elem">
                                    <h3 class="product-name product_title">
                                        <a href="product-detail.php">Product 5</a>
                                    </h3>
                                  
                                    <span class="price"><span class="akasha-Price-amount amount"><span
                                            class="akasha-Price-currencySymbol">INR </span>1145.00</span></span>
                                </div>
                            </div>
                        </li>
						
						 <li class="product-item wow fadeInUp product-item rows-space-30 col-bg-4 col-xl-4 col-lg-6 col-md-6 col-sm-6 col-ts-6 style-01 post-24 product type-product status-publish has-post-thumbnail product_cat-chair product_cat-table product_cat-new-arrivals product_tag-light product_tag-hat product_tag-sock first instock featured shipping-taxable purchasable product-type-variable has-default-attributes"
                            data-wow-duration="1s" data-wow-delay="0ms" data-wow="fadeInUp">
                            <div class="product-inner tooltip-left">
                                <div class="product-thumb">
                                    <a class="thumb-link" href="product-detail.php">
                                        <img class="img-responsive"
                                             src="assets/images/vishal-print/product6.jpg"
                                             alt="Women Bags" width="600" height="778">
                                    </a>
                                    <div class="group-button">
                                        <div class="yith-wcwl-add-to-wishlist">
                                            <div class="yith-wcwl-add-button show">
                                                <a href="#" class="add_to_wishlist">Add to Wishlist</a>
                                            </div>
                                        </div>
                                        
                                        <div class="add-to-cart">
                                            <a href="#" class="button product_type_variable add_to_cart_button">Select
                                                options</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-info equal-elem">
                                    <h3 class="product-name product_title">
                                        <a href="product-detail.php">Product 6</a>
                                    </h3>
                                  
                                    <span class="price"><span class="akasha-Price-amount amount"><span
                                            class="akasha-Price-currencySymbol">INR </span>1145.00</span></span>
                                </div>
                            </div>
                        </li>
						
						 <li class="product-item wow fadeInUp product-item rows-space-30 col-bg-4 col-xl-4 col-lg-6 col-md-6 col-sm-6 col-ts-6 style-01 post-24 product type-product status-publish has-post-thumbnail product_cat-chair product_cat-table product_cat-new-arrivals product_tag-light product_tag-hat product_tag-sock first instock featured shipping-taxable purchasable product-type-variable has-default-attributes"
                            data-wow-duration="1s" data-wow-delay="0ms" data-wow="fadeInUp">
                            <div class="product-inner tooltip-left">
                                <div class="product-thumb">
                                    <a class="thumb-link" href="product-detail.php">
                                        <img class="img-responsive"
                                             src="assets/images/vishal-print/product7.jpg"
                                             alt="Women Bags" width="600" height="778">
                                    </a>
                                    <div class="group-button">
                                        <div class="yith-wcwl-add-to-wishlist">
                                            <div class="yith-wcwl-add-button show">
                                                <a href="#" class="add_to_wishlist">Add to Wishlist</a>
                                            </div>
                                        </div>
                                        
                                        <div class="add-to-cart">
                                            <a href="#" class="button product_type_variable add_to_cart_button">Select
                                                options</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-info equal-elem">
                                    <h3 class="product-name product_title">
                                        <a href="product-detail.php">Product 7</a>
                                    </h3>
                                  
                                    <span class="price"><span class="akasha-Price-amount amount"><span
                                            class="akasha-Price-currencySymbol">INR </span>1145.00</span></span>
                                </div>
                            </div>
                        </li>
                       
                       <li class="product-item wow fadeInUp product-item rows-space-30 col-bg-4 col-xl-4 col-lg-6 col-md-6 col-sm-6 col-ts-6 style-01 post-24 product type-product status-publish has-post-thumbnail product_cat-chair product_cat-table product_cat-new-arrivals product_tag-light product_tag-hat product_tag-sock first instock featured shipping-taxable purchasable product-type-variable has-default-attributes"
                            data-wow-duration="1s" data-wow-delay="0ms" data-wow="fadeInUp">
                            <div class="product-inner tooltip-left">
                                <div class="product-thumb">
                                    <a class="thumb-link" href="product-detail.php">
                                        <img class="img-responsive"
                                             src="assets/images/vishal-print/product1.jpg"
                                             alt="Women Bags" width="600" height="778">
                                    </a>
                                    <div class="group-button">
                                        <div class="yith-wcwl-add-to-wishlist">
                                            <div class="yith-wcwl-add-button show">
                                                <a href="#" class="add_to_wishlist">Add to Wishlist</a>
                                            </div>
                                        </div>
                                        
                                        <div class="add-to-cart">
                                            <a href="#" class="button product_type_variable add_to_cart_button">Select
                                                options</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-info equal-elem">
                                    <h3 class="product-name product_title">
                                        <a href="product-detail.php">Product 8</a>
                                    </h3>
                                  
                                    <span class="price"><span class="akasha-Price-amount amount"><span
                                            class="akasha-Price-currencySymbol">INR </span>1145.00</span></span>
                                </div>
                            </div>
                        </li>
                       
                         <li class="product-item wow fadeInUp product-item rows-space-30 col-bg-4 col-xl-4 col-lg-6 col-md-6 col-sm-6 col-ts-6 style-01 post-24 product type-product status-publish has-post-thumbnail product_cat-chair product_cat-table product_cat-new-arrivals product_tag-light product_tag-hat product_tag-sock first instock featured shipping-taxable purchasable product-type-variable has-default-attributes"
                            data-wow-duration="1s" data-wow-delay="0ms" data-wow="fadeInUp">
                            <div class="product-inner tooltip-left">
                                <div class="product-thumb">
                                    <a class="thumb-link" href="product-detail.php">
                                        <img class="img-responsive"
                                             src="assets/images/vishal-print/product2.jpg"
                                             alt="Women Bags" width="600" height="778">
                                    </a>
                                    <div class="group-button">
                                        <div class="yith-wcwl-add-to-wishlist">
                                            <div class="yith-wcwl-add-button show">
                                                <a href="#" class="add_to_wishlist">Add to Wishlist</a>
                                            </div>
                                        </div>
                                        
                                        <div class="add-to-cart">
                                            <a href="#" class="button product_type_variable add_to_cart_button">Select
                                                options</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-info equal-elem">
                                    <h3 class="product-name product_title">
                                        <a href="product-detail.php">Product 9</a>
                                    </h3>
                                  
                                    <span class="price"><span class="akasha-Price-amount amount"><span
                                            class="akasha-Price-currencySymbol">INR </span>1145.00</span></span>
                                </div>
                            </div>
                        </li>
                        
                       
                       
                         <li class="product-item wow fadeInUp product-item rows-space-30 col-bg-4 col-xl-4 col-lg-6 col-md-6 col-sm-6 col-ts-6 style-01 post-24 product type-product status-publish has-post-thumbnail product_cat-chair product_cat-table product_cat-new-arrivals product_tag-light product_tag-hat product_tag-sock first instock featured shipping-taxable purchasable product-type-variable has-default-attributes"
                            data-wow-duration="1s" data-wow-delay="0ms" data-wow="fadeInUp">
                            <div class="product-inner tooltip-left">
                                <div class="product-thumb">
                                    <a class="thumb-link" href="product-detail.php">
                                        <img class="img-responsive"
                                             src="assets/images/vishal-print/product3.jpg"
                                             alt="Women Bags" width="600" height="778">
                                    </a>
                                    <div class="group-button">
                                        <div class="yith-wcwl-add-to-wishlist">
                                            <div class="yith-wcwl-add-button show">
                                                <a href="#" class="add_to_wishlist">Add to Wishlist</a>
                                            </div>
                                        </div>
                                        
                                        <div class="add-to-cart">
                                            <a href="#" class="button product_type_variable add_to_cart_button">Select
                                                options</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-info equal-elem">
                                    <h3 class="product-name product_title">
                                        <a href="product-detail.php">Product 10</a>
                                    </h3>
                                  
                                    <span class="price"><span class="akasha-Price-amount amount"><span
                                            class="akasha-Price-currencySymbol">INR </span>1145.00</span></span>
                                </div>
                            </div>
                        </li>
						
						 <li class="product-item wow fadeInUp product-item rows-space-30 col-bg-4 col-xl-4 col-lg-6 col-md-6 col-sm-6 col-ts-6 style-01 post-24 product type-product status-publish has-post-thumbnail product_cat-chair product_cat-table product_cat-new-arrivals product_tag-light product_tag-hat product_tag-sock first instock featured shipping-taxable purchasable product-type-variable has-default-attributes"
                            data-wow-duration="1s" data-wow-delay="0ms" data-wow="fadeInUp">
                            <div class="product-inner tooltip-left">
                                <div class="product-thumb">
                                    <a class="thumb-link" href="product-detail.php">
                                        <img class="img-responsive"
                                             src="assets/images/vishal-print/product4.jpg"
                                             alt="Women Bags" width="600" height="778">
                                    </a>
                                    <div class="group-button">
                                        <div class="yith-wcwl-add-to-wishlist">
                                            <div class="yith-wcwl-add-button show">
                                                <a href="#" class="add_to_wishlist">Add to Wishlist</a>
                                            </div>
                                        </div>
                                        
                                        <div class="add-to-cart">
                                            <a href="#" class="button product_type_variable add_to_cart_button">Select
                                                options</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-info equal-elem">
                                    <h3 class="product-name product_title">
                                        <a href="product-detail.php">Product 11</a>
                                    </h3>
                                  
                                    <span class="price"><span class="akasha-Price-amount amount"><span
                                            class="akasha-Price-currencySymbol">INR </span>1145.00</span></span>
                                </div>
                            </div>
                        </li>
                        
                        
                        <li class="product-item wow fadeInUp product-item rows-space-30 col-bg-4 col-xl-4 col-lg-6 col-md-6 col-sm-6 col-ts-6 style-01 post-24 product type-product status-publish has-post-thumbnail product_cat-chair product_cat-table product_cat-new-arrivals product_tag-light product_tag-hat product_tag-sock first instock featured shipping-taxable purchasable product-type-variable has-default-attributes"
                            data-wow-duration="1s" data-wow-delay="0ms" data-wow="fadeInUp">
                            <div class="product-inner tooltip-left">
                                <div class="product-thumb">
                                    <a class="thumb-link" href="product-detail.php">
                                        <img class="img-responsive"
                                             src="assets/images/vishal-print/product5.jpg"
                                             alt="Women Bags" width="600" height="778">
                                    </a>
                                    <div class="group-button">
                                        <div class="yith-wcwl-add-to-wishlist">
                                            <div class="yith-wcwl-add-button show">
                                                <a href="#" class="add_to_wishlist">Add to Wishlist</a>
                                            </div>
                                        </div>
                                        
                                        <div class="add-to-cart">
                                            <a href="#" class="button product_type_variable add_to_cart_button">Select
                                                options</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-info equal-elem">
                                    <h3 class="product-name product_title">
                                        <a href="product-detail.php">Product 12</a>
                                    </h3>
                                  
                                    <span class="price"><span class="akasha-Price-amount amount"><span
                                            class="akasha-Price-currencySymbol">INR </span>1145.00</span></span>
                                </div>
                            </div>
                        </li>
						
						
                    </ul>
                </div>
                <div class="shop-control shop-after-control">
                    <nav class="akasha-pagination">
                        <span class="page-numbers current">1</span>
                        <a class="page-numbers" href="#">2</a>
                        <a class="next page-numbers" href="#">Next</a>
                    </nav>
                    <p class="akasha-result-count">Showing 1–12 of 20 results</p>
                </div>
            </div>
            <div class="sidebar col-xl-3 col-lg-4 col-md-4 col-sm-12">
                <div id="widget-area" class="widget-area shop-sidebar">
                    <div id="akasha_product_search-2" class="widget akasha widget_product_search">
                        <form class="akasha-product-search">
                            <input id="akasha-product-search-field-0" class="search-field"
                                   placeholder="Search products…" value="" name="s" type="search">
                            <button type="submit" value="Search">Search</button>
                        </form>
                    </div>
                    <div id="akasha_price_filter-2" class="widget akasha widget_price_filter"><h2
                            class="widgettitle">Filter By Price<span class="arrow"></span></h2>
                        <form method="get" action="#">
                            <div class="price_slider_wrapper">
                                <div data-label-reasult="Range:" data-min="0" data-max="1000" data-unit="INR"
                                     class="price_slider" data-value-min="100" data-value-max="800">
                                </div>
                                <div class="price_slider_amount">
                                    <button type="submit" class="button">Filter</button>
                                    <div class="price_label">
                                        Price: <span class="from">INR 100</span> — <span class="to">INR 800</span>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div id="akasha_akasha_layered_nav-4"
                         class="widget akasha_widget_layered_nav widget_layered_nav">
                        <h2 class="widgettitle">Filter By Color<span class="arrow"></span></h2>
                        <div class="color-group">
                            <a class="term-color " href="#">
                                <i style="color: #000000"></i>
                                <span class="term-name">Black</span>
                                <span class="count">(4)</span> </a>
                            <a class="term-color " href="#">
                                <i style="color: #3155e2"></i>
                                <span class="term-name">Blue</span>
                                <span class="count">(3)</span> </a>
                            <a class="term-color " href="#">
                                <i style="color: #49aa51"></i>
                                <span class="term-name">Green</span>
                                <span class="count">(1)</span> </a>
                            <a class="term-color " href="#">
                                <i style="color: #ff63cb"></i>
                                <span class="term-name">Pink</span>
                                <span class="count">(3)</span> </a>
                            <a class="term-color " href="#">
                                <i style="color: #a825ea"></i>
                                <span class="term-name">Purple</span>
                                <span class="count">(1)</span> </a>
                            <a class="term-color " href="#">
                                <i style="color: #db2b00"></i>
                                <span class="term-name">Red</span>
                                <span class="count">(5)</span> </a>
                            <a class="term-color " href="#">
                                <i style="color: #FFFFFF"></i>
                                <span class="term-name">White</span>
                                <span class="count">(2)</span> </a>
                            <a class="term-color " href="#s">
                                <i style="color: #e8e120"></i>
                                <span class="term-name">Yellow</span>
                                <span class="count">(2)</span> </a>
                        </div>
                    </div>
                    <div id="akasha_layered_nav-6"
                         class="widget akasha widget_layered_nav akasha-widget-layered-nav"><h2
                            class="widgettitle">Filter By Size<span class="arrow"></span></h2>
                        <ul class="akasha-widget-layered-nav-list">
                            <li class="akasha-widget-layered-nav-list__item akasha-layered-nav-term ">
                                <a rel="nofollow" href="#">XS</a>
                                <span class="count">(1)</span></li>
                            <li class="akasha-widget-layered-nav-list__item akasha-layered-nav-term ">
                                <a rel="nofollow" href="#">S</a>
                                <span class="count">(4)</span></li>
                            <li class="akasha-widget-layered-nav-list__item akasha-layered-nav-term ">
                                <a rel="nofollow" href="#">M</a>
                                <span class="count">(2)</span></li>
                            <li class="akasha-widget-layered-nav-list__item akasha-layered-nav-term ">
                                <a rel="nofollow" href="#">L</a>
                                <span class="count">(3)</span></li>
                            <li class="akasha-widget-layered-nav-list__item akasha-layered-nav-term ">
                                <a rel="nofollow" href="#">XL</a>
                                <span class="count">(1)</span></li>
                            <li class="akasha-widget-layered-nav-list__item akasha-layered-nav-term ">
                                <a rel="nofollow" href="#">XXL</a>
                                <span class="count">(4)</span></li>
                            <li class="akasha-widget-layered-nav-list__item akasha-layered-nav-term ">
                                <a rel="nofollow" href="#">3XL</a>
                                <span class="count">(4)</span></li>
                            <li class="akasha-widget-layered-nav-list__item akasha-layered-nav-term ">
                                <a rel="nofollow" href="#">4XL</a>
                                <span class="count">(3)</span></li>
                        </ul>
                    </div>
                    <div id="akasha_product_categories-3" class="widget akasha widget_product_categories"><h2
                            class="widgettitle">Product categories<span class="arrow"></span></h2>
                        <ul class="product-categories">
                            <li class="cat-item cat-item-22"><a href="#">Saree</a>
                                <span class="count">(11)</span></li>
                            <li class="cat-item cat-item-16"><a href="#">Dupatta</a>
                                <span class="count">(9)</span></li>
                            <li class="cat-item cat-item-24"><a href="#">Kurti</a>
                                <span class="count">(6)</span></li>
                           
                        </ul>
                    </div>
                </div><!-- .widget-area -->
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