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
    <title>Vishal Sarees | Order</title>
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
        <h1 class="page-title" style="color:#fff;">Orders</h1>
        <div role="navigation" aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
            <ul class="trail-items breadcrumb">
                <li class="trail-item trail-begin"><a href="index.php"><span style="color:#fff;">Home</span></a></li>
                <li class="trail-item trail-end active" style="color:#fff;"><span>Orders</span>
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
                                   <th class="product-name">Order Id</th>
                                   <th class="product-name">Order Status</th>
                                   <th class="product-name">Show</th>
                                   <th class="product-name">Invoice</th>
                                   <th class="product-name">Full Name</th>
                                   <th class="product-name">Date</th>
                                   <th class="product-name">Payment Type</th>
                                   <th class="product-name">Coupon Code</th>
                                   <th class="product-price">Total</th>
								   <th class="product-name">Email</th>
								</tr>
                                </thead>
                                <tbody>
                                <tr class="akasha-cart-form__cart-item cart_item">
                                   
                                  
                                    <td class="product-name" data-title="Product">
                                        <a href="#">1</a></td>
										
										 <td class="product-name" data-title="Product">
                                        <a href="#">Completed</a></td>
										
										
										<td class="product-add-to-cart">
                                    <!-- Date added -->
                                    <!-- Add to cart button -->
                                    <a href="order-details.php" style="display: inline-block !important;
    min-width: 164px;
    height: 49px;
    line-height: 49px;
    background-color: #1b1b1b;
    font-size: 14px;
    font-weight: 600;
    color: #ffffff;
    padding: 0 15px;
    text-align: center;
    margin-bottom: 0;
    border-radius: 30px;" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart add_to_cart button alt" data-product_id="29" data-product_sku="003D754" aria-label="Add “Abstract Sweatshirt” to your cart" rel="nofollow">
                                        Show Products</a>
                                    <!-- Change wishlist -->
                                    <!-- Remove from wishlist -->
                                </td>
										
										
										 <td class="product-name" data-title="Product">
                                        <a href="#"><img style="height: 30px;width: 30px;" src="assets/images/vishal-print/pdf.png"></a></td>
										
										
										 <td class="product-name" data-title="Product">
                                        <a href="#">Preet Shah</a></td>
										
										
										 <td class="product-name" data-title="Product">
                                        <a href="#">10-10-2020</a></td>
										
										
										 <td class="product-name" data-title="Product">
                                        <a href="#">COD</a></td>
										
										
										 <td class="product-name" data-title="Product">
                                        <a href="#">None</a></td>
                                    
									
									
									<td class="product-price" data-title="Price">
                                        <span class="akasha-Price-amount amount"><span
                                                class="akasha-Price-currencySymbol">INR </span>1500.00</span></td>
                                     <td class="product-name" data-title="Product">
                                        <a href="#">preet@gmail.com</a></td>
						           
                                </tr>
                               
							  
								
								
								
							   
                                
                               
                                </tbody>
                            </table>
                        </form>
                      
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