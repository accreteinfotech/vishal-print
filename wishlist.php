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
<body>
<?php
include('header.php');
?>
<div class="banner-wrapper has_background">
    <img src="assets/images/banner-for-all2.jpg"
         class="img-responsive attachment-1920x447 size-1920x447" alt="img">
    <div class="banner-wrapper-inner">
        <h1 class="page-title" style="color:#fff;">Wishlist</h1>
        <div role="navigation" aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
            <ul class="trail-items breadcrumb">
                <li class="trail-item trail-begin"><a href="index.php"><span style="color:#fff;">Home</span></a></li>
                <li class="trail-item trail-end active"><span style="color:#fff;">Wishlist</span>
                </li>
            </ul>
        </div>
    </div>
</div>
<main class="site-main  main-container no-sidebar">
    <div class="container">
        <div class="row">
            <div class="main-content col-md-12">
                <div class="page-main-content">
                    <form id="yith-wcwl-form" class="akasha">
                        <!-- TITLE -->
                        <!-- WISHLIST TABLE -->
                        <table class="shop_table cart wishlist_table" data-pagination="no" data-per-page="5"
                               data-page="1" data-id="" data-token="">
                            <thead>
                            <tr>
                                <th class="product-remove"></th>
                                <th class="product-thumbnail"></th>
                                <th class="product-name">
                                    <span class="nobr">Product Name</span>
                                </th>
                                <th class="product-price">
                    <span class="nobr">
                        Unit Price                    </span>
                                </th>
                                <th class="product-stock-status">
                    <span class="nobr">
                        Stock Status                    </span>
                                </th>
                                <th class="product-add-to-cart"></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr id="yith-wcwl-row-29" data-row-id="29">
                                <td class="product-remove">
                                    <div>
                                        <a href="#"
                                           class="remove remove_from_wishlist" title="Remove this product">×</a>
                                    </div>
                                </td>
                                <td class="product-thumbnail">
                                    <a href="#">
                                        <img src="assets/images/vishal-print/product1.jpg"
                                             class="attachment-akasha_thumbnail size-akasha_thumbnail" alt="img"
                                             width="600" height="778"> </a>
                                </td>
                                <td class="product-name">
                                    <a href="#">Product 1</a>
                                   
                                <td class="product-price">
                                    <span class="akasha-Price-amount amount"><span
                                            class="akasha-Price-currencySymbol">INR </span>1299.00</span></td>
                                <td class="product-stock-status">
                                    <span class="wishlist-in-stock">In Stock</span></td>
                                <td class="product-add-to-cart">
                                    <!-- Date added -->
                                    <!-- Add to cart button -->
                                    <a href="cart.php"
                                       data-quantity="1"
                                       class="button product_type_simple add_to_cart_button ajax_add_to_cart add_to_cart button alt"
                                       data-product_id="29" data-product_sku="003D754"
                                       aria-label="Add “Abstract Sweatshirt” to your cart" rel="nofollow"> Add to
                                        Cart</a>
                                    <!-- Change wishlist -->
                                    <!-- Remove from wishlist -->
                                </td>
                            </tr>
                            <tr id="yith-wcwl-row-25" data-row-id="25">
                                <td class="product-remove">
                                    <div>
                                        <a href="#"
                                           class="remove remove_from_wishlist" title="Remove this product">×</a>
                                    </div>
                                </td>
                                <td class="product-thumbnail">
                                    <a href="#">
                                        <img src="assets/images/vishal-print/product2.jpg"
                                             class="attachment-akasha_thumbnail size-akasha_thumbnail" alt="img"
                                             width="600" height="778"> </a>
                                </td>
                                <td class="product-name">
                                    <a href="#">Product 2</a>
                                    <a href="#" class="button yith-wcqv-button" data-product_id="25">Quick View</a></td>
                                  <td class="product-price">
                                    <span class="akasha-Price-amount amount"><span
                                            class="akasha-Price-currencySymbol">INR </span>1799.00</span></td>
                                <td class="product-stock-status">
                                    <span class="wishlist-in-stock">In Stock</span></td>
                                <td class="product-add-to-cart">
                                    <!-- Date added -->
                                    <!-- Add to cart button -->
                                    <a href="cart.php"
                                       data-quantity="1"
                                       class="button product_type_simple add_to_cart_button ajax_add_to_cart add_to_cart button alt"
                                       data-product_id="25" data-product_sku="018Q711"
                                       aria-label="Add “Utility Pockets” to your cart" rel="nofollow"> Add to
                                        Cart</a>
                                    <!-- Change wishlist -->
                                    <!-- Remove from wishlist -->
                                </td>
                            </tr>
                            <tr id="yith-wcwl-row-22" data-row-id="22">
                                <td class="product-remove">
                                    <div>
                                        <a href="#"
                                           class="remove remove_from_wishlist" title="Remove this product">×</a>
                                    </div>
                                </td>
                                <td class="product-thumbnail">
                                    <a href="#">
                                        <img src="assets/images/vishal-print/product3.jpg"
                                             class="attachment-akasha_thumbnail size-akasha_thumbnail" alt="img"
                                             width="600" height="778"> </a>
                                </td>
                                <td class="product-name">
                                    <a href="#">Product 3</a>
                                   </td>
                                <td class="product-price">
                                    <span class="akasha-Price-amount amount"><span
                                            class="akasha-Price-currencySymbol">INR </span>1298.00</span></td>
                                <td class="product-stock-status">
                                    <span class="wishlist-in-stock">In Stock</span></td>
                                <td class="product-add-to-cart">
                                    <!-- Date added -->
                                    <!-- Add to cart button -->
                                    <a href="cart.php"
                                       data-quantity="1"
                                       class="button product_type_simple add_to_cart_button ajax_add_to_cart add_to_cart button alt"
                                       data-product_id="22" data-product_sku="389N100"
                                       aria-label="Add “Floral Stripe” to your cart" rel="nofollow"> Add to Cart</a>
                                    <!-- Change wishlist -->
                                    <!-- Remove from wishlist -->
                                </td>
                            </tr>
                            </tbody>
                            <tfoot>
                            <tr>
                                <td colspan="6">
                                </td>
                            </tr>
                            </tfoot>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
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