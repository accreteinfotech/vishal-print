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
    <title>Vishal Sarees | Cart</title>
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
        <h1 class="page-title" style="color:#fff;">Cart</h1>
        <div role="navigation" aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
            <ul class="trail-items breadcrumb">
                <li class="trail-item trail-begin"><a href="index.php"><span style="color:#fff;">Home</span></a></li>
                <li class="trail-item trail-end active" style="color:#fff;"><span>Cart</span>
                </li>
            </ul>
        </div>
    </div>
</div>
<main class="site-main main-container no-sidebar">
    <div class="container">
        <div class="row">
            <div class="main-content col-md-12">
                <div class="page-main-content">
                    <div class="akasha">
                        <div class="akasha-notices-wrapper"></div>
                        <form class="akasha-cart-form">
                            <table class="shop_table shop_table_responsive cart akasha-cart-form__contents"
                                   cellspacing="0">
                                <thead>
                                <tr>
                                    <th class="product-remove">&nbsp;</th>
                                    <th class="product-thumbnail">&nbsp;</th>
                                    <th class="product-name">Product</th>
                                    <th class="product-price">Price</th>
                                    <th class="product-quantity">Quantity</th>
                                    <th class="product-subtotal">Total</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="akasha-cart-form__cart-item cart_item">
                                    <td class="product-remove">
                                        <a href="#"
                                           class="remove" aria-label="Remove this item" data-product_id="27"
                                           data-product_sku="885B712">×</a></td>
                                    <td class="product-thumbnail">
                                        <a href="#"><img
                                                src="assets/images/vishal-print/product1.jpg"
                                                class="attachment-akasha_thumbnail size-akasha_thumbnail"
                                                alt="img" width="600" height="778"></a></td>
                                    <td class="product-name" data-title="Product">
                                        <a href="#">Product 1</a></td>
                                    <td class="product-price" data-title="Price">
                                        <span class="akasha-Price-amount amount"><span
                                                class="akasha-Price-currencySymbol">INR </span>1500.00</span></td>
                                    <td class="product-quantity" data-title="Quantity">
                                        <div class="quantity">
                                            <span class="qty-label">Quantiy:</span>
                                            <div class="control">
                                                <a class="btn-number qtyminus quantity-minus" href="#">-</a>
                                                <input type="text"
                                                       value="1" title="Qty" class="input-qty input-text qty text">
                                                <a class="btn-number qtyplus quantity-plus" href="#">+</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="product-subtotal" data-title="Total">
                                        <span class="akasha-Price-amount amount"><span
                                                class="akasha-Price-currencySymbol">INR </span>1500.00</span></td>
                                </tr>
                               
							   <tr class="akasha-cart-form__cart-item cart_item">
                                    <td class="product-remove">
                                        <a href="#"
                                           class="remove" aria-label="Remove this item" data-product_id="27"
                                           data-product_sku="885B712">×</a></td>
                                    <td class="product-thumbnail">
                                        <a href="#"><img
                                                src="assets/images/vishal-print/product2.jpg"
                                                class="attachment-akasha_thumbnail size-akasha_thumbnail"
                                                alt="img" width="600" height="778"></a></td>
                                    <td class="product-name" data-title="Product">
                                        <a href="#">Product 2</a></td>
                                    <td class="product-price" data-title="Price">
                                        <span class="akasha-Price-amount amount"><span
                                                class="akasha-Price-currencySymbol">INR </span>2000.00</span></td>
                                    <td class="product-quantity" data-title="Quantity">
                                        <div class="quantity">
                                            <span class="qty-label">Quantiy:</span>
                                            <div class="control">
                                                <a class="btn-number qtyminus quantity-minus" href="#">-</a>
                                                <input type="text"
                                                       value="1" title="Qty" class="input-qty input-text qty text">
                                                <a class="btn-number qtyplus quantity-plus" href="#">+</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="product-subtotal" data-title="Total">
                                        <span class="akasha-Price-amount amount"><span
                                                class="akasha-Price-currencySymbol">INR </span>2000.00</span></td>
                                </tr>
								
								
								<tr class="akasha-cart-form__cart-item cart_item">
                                    <td class="product-remove">
                                        <a href="#"
                                           class="remove" aria-label="Remove this item" data-product_id="27"
                                           data-product_sku="885B712">×</a></td>
                                    <td class="product-thumbnail">
                                        <a href="#"><img
                                                src="assets/images/vishal-print/product3.jpg"
                                                class="attachment-akasha_thumbnail size-akasha_thumbnail"
                                                alt="img" width="600" height="778"></a></td>
                                    <td class="product-name" data-title="Product">
                                        <a href="#">Product 3</a></td>
                                    <td class="product-price" data-title="Price">
                                        <span class="akasha-Price-amount amount"><span
                                                class="akasha-Price-currencySymbol">INR </span>2100.00</span></td>
                                    <td class="product-quantity" data-title="Quantity">
                                        <div class="quantity">
                                            <span class="qty-label">Quantiy:</span>
                                            <div class="control">
                                                <a class="btn-number qtyminus quantity-minus" href="#">-</a>
                                                <input type="text"
                                                       value="1" title="Qty" class="input-qty input-text qty text">
                                                <a class="btn-number qtyplus quantity-plus" href="#">+</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="product-subtotal" data-title="Total">
                                        <span class="akasha-Price-amount amount"><span
                                                class="akasha-Price-currencySymbol">INR </span>2100.00</span></td>
                                </tr>
							   
                                
                                <tr>
                                    <td colspan="6" class="actions">
                                        <div class="coupon">
                                            <label for="coupon_code">Coupon:</label> <input type="text"
                                                                                            name="coupon_code"
                                                                                            class="input-text"
                                                                                            id="coupon_code" value=""
                                                                                            placeholder="Coupon code">
                                            <button type="submit" class="button" name="apply_coupon"
                                                    value="Apply coupon">Apply coupon
                                            </button>
                                        </div>
                                        <button type="submit" class="button" name="update_cart" value="Update cart"
                                                disabled="">Update cart
                                        </button>
                                        <input type="hidden" id="akasha-cart-nonce" name="akasha-cart-nonce"
                                               value="f41b5bf554"><input type="hidden" name="_wp_http_referer"
                                                                         value="/akasha/cart/"></td>
                                </tr>
                                </tbody>
                            </table>
                        </form>
                        <div class="cart-collaterals">
                            <div class="cart_totals ">
                                <h2>Cart totals</h2>
                                <table class="shop_table shop_table_responsive" cellspacing="0">
                                    <tbody>
                                    <tr class="cart-subtotal">
                                        <th>Subtotal</th>
                                        <td data-title="Subtotal"><span class="akasha-Price-amount amount"><span
                                                class="akasha-Price-currencySymbol">INR </span>5600.00</span></td>
                                    </tr>
                                    <tr class="order-total">
                                        <th>Total</th>
                                        <td data-title="Total"><strong><span
                                                class="akasha-Price-amount amount"><span
                                                class="akasha-Price-currencySymbol">INR </span>5600.00</span></strong>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <div class="akasha-proceed-to-checkout">
                                    <a href="checkout.php"
                                       class="checkout-button button alt akasha-forward">
                                        Proceed to checkout</a>
                                </div>
                            </div>
                        </div>
                    </div>
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