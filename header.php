<?php
    if(isset($_SESSION['user_id']) && $_SESSION['user_id']!=null)
    {
        $uid=$_SESSION['user_id'];
        $sflag=1;
    }
    else
    {
        $uid=session_id();
        $sflag=0;
    }
?>

<header id="header" class="header style-04 header-dark">
    <div class="header-top">
        <div class="container">
            <div class="header-top-inner">
                <ul id="menu-top-left-menu" class="akasha-nav top-bar-menu">
                    <li id="menu-item-864"
                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-864"><a
                            class="akasha-menu-item-title" title="Store Direction"
                            href="#"><span class="fa fa-mobile-phone"></span>+91- 123-456-8790</a></li>
                    <li id="menu-item-865"
                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-865"><a
                            class="akasha-menu-item-title" title="Order Tracking"
                            href="#"><span class="fa fa-envelope-o"></span>info@vishalprint.com
                        </a></li>
                </ul>
                <div class="akasha-nav top-bar-menu right">
                     <li id="menu-item-865"
                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-865"><a
                            class="akasha-menu-item-title" title="Order Tracking"
                            href="#"><span class="fa fa-calendar-times-o"></span>MON - SAT DAY: 10.00 - 18.00 Sunday Closed
                        </a></li>
                </div>
            </div>
        </div>
    </div>
    <div class="header-middle">
        <div class="container">
            <div class="row">
			<div class="col-md-4" style="padding-top:40px;">
			   <div class="header-search-mid">
                    <div class="header-search">
                        <div class="block-search">
                            <form role="search" method="get"
                                  class="form-search block-search-form akasha-live-search-form">
                                <div class="form-content search-box results-search">
                                    <div class="inner">
                                        <input autocomplete="off" class="searchfield txt-livesearch input" name="s"
                                               value="" placeholder="Search here..." type="text">
                                    </div>
                                </div>
                                <input name="post_type" value="product" type="hidden">
                                <input name="taxonomy" value="product_cat" type="hidden">
                               
                                <button type="submit" class="btn-submit">
                                    <span class="flaticon-magnifying-glass-1"></span>
                                </button>
                            </form><!-- block search -->
                        </div>
                    </div>
                </div>
                </div>
				<div class="col-md-4">
                <div class="header-logo-menu">
                    <div class="block-menu-bar">
                        <a class="menu-bar menu-toggle" href="#">
                            <span></span>
                            <span></span>
                            <span></span>
                        </a>
                    </div>
                    <div class="header-logo" style="text-align:center;">
                        <a href="Home"><img alt="Vishal Prints" src="assets/images/logo.png"
                                                                 class="logo"></a>
					</div>
                </div>
                </div>
             <div class="col-md-4" style="padding-top:40px;">
                <div class="header-control">
                    <div class="header-control-inner">
                        <div class="meta-dreaming">
                            <div class="menu-item block-user block-dreaming akasha-dropdown">
                                <a class="block-link" href="login.php">
                                    <span class="flaticon-profile"></span>
                                </a>
                                <?php
                                    if($sflag == 1)
                                    {
                                ?>
                                <ul class="sub-menu">
                                    <!--<li class="menu-item akasha-MyAccount-navigation-link akasha-MyAccount-navigation-link--dashboard is-active">
                                        <a href="#">Dashboard</a>
                                    </li>
                                    <li class="menu-item akasha-MyAccount-navigation-link akasha-MyAccount-navigation-link--orders">
                                        <a href="order.php">Orders</a>
                                    </li>-->
									<li class="menu-item akasha-MyAccount-navigation-link akasha-MyAccount-navigation-link--orders">
                                        <a href="Orders">Account</a>
                                    </li>
                                    <li class="menu-item akasha-MyAccount-navigation-link akasha-MyAccount-navigation-link--customer-logout">
                                        <a href="index.php">Logout</a>
                                    </li>
                                </ul>
                                <?php
                                }
                                else if($sflag == 0)
                                    {
                            ?>
                            <ul class="sub-menu">
                                        <li class="menu-item lynessa-MyAccount-navigation-link lynessa-MyAccount-navigation-link--dashboard is-active">
                                            <a href="Login-Register">Login / Register</a>
                                        </li>
                                        </ul>
                                        <?php
                                    }
                                ?>
                            </div>
                            <?php
                                    $total=0;
                                    $cart=$link->rawQuery("select c.*,p.* from cart c,product p where c.product_id=p.product_id and c.user_id=? and c.order_id=0",array($uid));
                                    if($link->count > 0)
                                    {
                                        $total=0;
                                        $gst_amount=0;
                                        $shipping_amount=0;
                                        $gst=0;
                                        $product_weight=0;
                                        foreach($cart as $cart1)
                                        {
                                            $product_total=($cart1['price']*$cart1['qty']);
                                            $shipping_amount=$shipping_amount+$cart1['product_shipping_charge']*$cart1['qty'];
                                            $gst=$product_total*$cart1['product_gst']/100;
                                            $gst_amount=$gst_amount+$gst;
                                            $total=$total+$product_total;
                                            $grand_total=$gst_amount+$total+$shipping_amount;
                                            $product_weight=$product_weight+$cart1['product_weight'];
                                        }
                                        $cart_count=$link->count;
                                        //echo $cart_count ;
                                    }   
                                    else
                                    {
                                        $cart_count=0;
                                        //echo $cart_count ;
                                    }
                                ?>

                            <div class="block-minicart block-dreaming akasha-mini-cart akasha-dropdown">
                                <div class="shopcart-dropdown block-cart-link" data-akasha="akasha-dropdown">
                                    <a class="block-link link-dropdown" href="cart.php">
                                        <span class="flaticon-bag"></span>
                                        <span class="count"><?php echo $cart_count ; ?></span>
                                    </a>
                                </div>
                                <div class="widget akasha widget_shopping_cart">
                                    <div class="widget_shopping_cart_content">
                                        <h3 class="minicart-title">Your Cart<span class="minicart-number-items"><?php echo $cart_count ; ?></span></h3>

                                        <ul class="akasha-mini-cart cart_list product_list_widget">
                                            <?php
                                                $total_flag=0;
                                                $cart=$link->rawQuery("select c.*,p.*,co.* from cart c,product p,color co where c.product_id=p.product_id and c.color_id=co.color_id and c.user_id=? and c.order_id=0",array($uid));
                                                    if($link->count > 0)
                                                    {
                                                        $total_flag=1;
                                                        foreach($cart as $cart1)
                                                        {
                                                            ?>
                                            <li class="akasha-mini-cart-item mini_cart_item">
                                                <a onClick="abc1(<?php echo $cart1['cart_id']; ?>);" class="remove remove_from_cart_button">×</a>
                                                <a href="Product-Detail/<?php echo $cart1['product_alias']; ?>">
                                                    <img src="backyard/images/product_image/<?php echo $cart1['product_image']; ?>"
                                                         class="attachment-akasha_thumbnail size-akasha_thumbnail"
                                                         alt="<?php echo $cart1['product_name']; ?>" width="600" height="778"><?php echo $cart1['product_name']; ?> - <?php echo $cart1['color_name']; ?>&nbsp;
                                                </a>
                                                <span class="quantity"><?php echo $cart1['qty']; ?> × <span
                                                        class="akasha-Price-amount amount"><span
                                                        class="akasha-Price-currencySymbol">INR </span><?php echo sprintf("%.2f", $pro_price=$cat1['product_price']-$cat1['product_price']*$discount) ; ?></span></span>
                                            </li>
                                            <!--<li class="akasha-mini-cart-item mini_cart_item">
                                                <a href="#" class="remove remove_from_cart_button">×</a>
                                                <a href="#">
                                                    <img src="assets/images/vishal-print/product2.jpg"
                                                         class="attachment-akasha_thumbnail size-akasha_thumbnail"
                                                         alt="img" width="600" height="778">Product 2
                                                </a>
                                                <span class="quantity">1 × <span
                                                        class="akasha-Price-amount amount"><span
                                                        class="akasha-Price-currencySymbol">INR </span>1299.00</span></span>
                                            </li>
                                            <li class="akasha-mini-cart-item mini_cart_item">
                                                <a href="#" class="remove remove_from_cart_button">×</a>
                                                <a href="#">
                                                    <img src="assets/images/vishal-print/product3.jpg"
                                                         class="attachment-akasha_thumbnail size-akasha_thumbnail"
                                                         alt="img" width="600" height="778">Product 3
                                                </a>
                                                <span class="quantity">1 × <span
                                                        class="akasha-Price-amount amount"><span
                                                        class="akasha-Price-currencySymbol">INR </span>1399.00</span></span>
                                            </li>-->
                                            <?php
                                                }
                                            }
                                            else
                                            {
                                                ?>
                                                <p style="text-align:center;padding:20px 0px;">No Item Found</p>
                                                <?php
                                            }
                                         ?>
                                        </ul>
                                        <?php
                                            if($total_flag!=0)
                                            {
                                                ?>
                                        <p class="akasha-mini-cart__total total"><strong>Subtotal:</strong>
                                            <span class="akasha-Price-amount amount"><span
                                                    class="akasha-Price-currencySymbol">INR </span><?php echo sprintf("%.2f", $total*$conversion_rate) ; ?></span>
                                        </p>
                                        <p class="akasha-mini-cart__buttons buttons">
                                            <a href="Cart" class="button akasha-forward">Viewcart</a>
                                            <a href="checkout.php" class="button checkout akasha-forward">Checkout</a>
                                        </p>
                                        <?php
                                    }
                                ?>
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
    <div class="header-wrap-stick">
        <div class="header-position">
            <div class="header-nav">
                <div class="container">
                    <div class="akasha-menu-wapper"></div>
                    <div class="header-nav-inner">
                        <div class="box-header-nav menu-nocenter">
                            <ul id="menu-primary-menu"
                                class="clone-main-menu akasha-clone-mobile-menu akasha-nav main-menu">
                               
                                <li id="menu-item-229"
                                    class="menu-item menu-item-type-post_type menu-item-object-megamenu menu-item-229 parent parent-megamenu item-megamenu menu-item-has-children">
                                    <a class="akasha-menu-item-title" title="Elements" href="#">Saree</a>
                                    <span class="toggle-submenu"></span>
                                    <div class="submenu megamenu megamenu-elements">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="akasha-listitem style-01">
                                                    <div class="listitem-inner">
                                                        <h4 class="title">Style</h4>
                                                        <ul class="listitem-list">
                                                        <li><a href="product.php">See All Saree</a></li>
                                                        <li><a href="product.php">Designer Saree</a></li>
                                                        <li><a href="product.php">Printed Saree</a></li>
                                                        <li><a href="product.php">Digital Saree</a></li>
                                                        <li><a href="product.php">Banarasi Saree</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="akasha-listitem style-01">
                                                    <div class="listitem-inner">
                                                        <h4 class="title">
                                                            Occasion</h4>
                                                        <ul class="listitem-list">
                                                    <li><a href="product.php">Bridal Saree</a></li>
													<li><a href="product.php">Party Wear Saree</a></li>
													<li><a href="product.php">Wedding Saree</a></li>
													<li><a href="product.php">Festive Saree</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="akasha-listitem style-01">
                                                    <div class="listitem-inner">
                                                        <h4 class="title">
                                                            Colors</h4>
                                                        <ul class="listitem-list">
                                                            	<li><a href="product.php">Blode Saree</a></li>
													<li><a href="product.php">Red Saree</a></li>
													<li><a href="product.php">Pink Saree</a></li>
													<li><a href="product.php">Green Saree</a></li>
													<li><a href="product.php">Baije Saree</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
											
											<div class="col-md-3">
                                                <div class="akasha-listitem style-01">
                                                    <div class="listitem-inner">
                                                        <h4 class="title">
                                                            Fabric</h4>
                                                        <ul class="listitem-list">
                                                           <li><a href="product.php">Banarasi Saree</a></li>
													<li><a href="product.php">Silk Saree</a></li>
													<li><a href="product.php">Tussah Silk Saree</a></li>
													<li><a href="product.php">Cotton Silk Saree</a></li>
													<li><a href="product.php">Row Silk Saree</a></li>
													<li><a href="product.php">Pashmina Silk Saree</a></li>
													<li><a href="product.php">Kashmiri Work Saree</a></li>
													<li><a href="product.php">Paithani Saree</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li id="menu-item-230"
                                    class="menu-item menu-item-type-post_type menu-item-object-megamenu menu-item-229 parent parent-megamenu item-megamenu menu-item-has-children">
                                    <a class="akasha-menu-item-title" title="Elements" href="#">Kurtis</a>
                                    <span class="toggle-submenu"></span>
                                   
                                </li>
								
								  <li id="menu-item-231"
                                    class="menu-item menu-item-type-post_type menu-item-object-megamenu menu-item-229 parent parent-megamenu item-megamenu menu-item-has-children">
                                    <a class="akasha-menu-item-title" title="Elements" href="#">Dupatta</a>
                                    <span class="toggle-submenu"></span>
                                   
                                </li>
								
								 <li id="menu-item-232"
                                    class="menu-item menu-item-type-post_type menu-item-object-megamenu menu-item-229 parent parent-megamenu item-megamenu menu-item-has-children">
                                    <a class="akasha-menu-item-title" title="Elements" href="our-network.php">Our Networks</a>
                                    <span class="toggle-submenu"></span>
                                   
                                </li>
								
								 <li id="menu-item-233"
                                    class="menu-item menu-item-type-post_type menu-item-object-megamenu menu-item-229 parent parent-megamenu item-megamenu menu-item-has-children">
                                    <a class="akasha-menu-item-title" title="Elements" href="blogs.php">Blogs</a>
                                    <span class="toggle-submenu"></span>
                                   
                                </li>
								
								 <li id="menu-item-234"
                                    class="menu-item menu-item-type-post_type menu-item-object-megamenu menu-item-229 parent parent-megamenu item-megamenu menu-item-has-children">
                                    <a class="akasha-menu-item-title" title="Elements" href="contact.php">Contact Us</a>
                                    <span class="toggle-submenu"></span>
                                   
                                </li>
                                <!--<li id="menu-item-237"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-237 parent">
                                    <a class="akasha-menu-item-title" title="Pages" href="#">Pages</a>
                                    <span class="toggle-submenu"></span>
                                    <ul role="menu" class="submenu">
                                        <li id="menu-item-987"
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-987">
                                            <a class="akasha-menu-item-title" title="About"
                                               href="about.html">About</a></li>
                                        <li id="menu-item-988"
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-988">
                                            <a class="akasha-menu-item-title" title="Contact"
                                               href="contact.html">Contact</a></li>
                                        <li id="menu-item-990"
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-990">
                                            <a class="akasha-menu-item-title" title="Page 404"
                                               href="404.html">Page 404</a></li>
                                    </ul>
                                </li> -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-mobile">
        <div class="header-mobile-left">
            <div class="block-menu-bar">
                <a class="menu-bar menu-toggle" href="#">
                    <span></span>
                    <span></span>
                    <span></span>
                </a>
            </div>
            <div class="header-search akasha-dropdown">
                <div class="header-search-inner" data-akasha="akasha-dropdown">
                    <a href="#" class="link-dropdown block-link">
                        <span class="flaticon-magnifying-glass-1"></span>
                    </a>
                </div>
                <div class="block-search">
                    <form role="search" method="get"
                          class="form-search block-search-form akasha-live-search-form">
                        <div class="form-content search-box results-search">
                            <div class="inner">
                                <input autocomplete="off" class="searchfield txt-livesearch input" name="s" value=""
                                       placeholder="Search here..." type="text">
                            </div>
                        </div>
                        <input name="post_type" value="product" type="hidden">
                        <input name="taxonomy" value="product_cat" type="hidden">
                        <div class="category">
                            <select title="product_cat" name="product_cat" id="1770352541"
                                    class="category-search-option" tabindex="-1"
                                    style="display: none;">
                                <option value="0">All Categories</option>
                                <option class="level-0" value="light">Sarees</option>
                                <option class="level-0" value="chair">Dupatta</option>
                                <option class="level-0" value="table">Kurti</option>
                            </select>
                        </div>
                        <button type="submit" class="btn-submit">
                            <span class="flaticon-magnifying-glass-1"></span>
                        </button>
                    </form><!-- block search -->
                </div>
            </div>
            <ul class="wpml-menu">
                <li class="menu-item akasha-dropdown block-language">
                    <a href="#" data-akasha="akasha-dropdown">
                        <img src="assets/images/en.png"
                             alt="en" width="18" height="12">
                        English
                    </a>
                    <span class="toggle-submenu"></span>
                    <ul class="sub-menu">
                        <li class="menu-item">
                            <a href="#">
                                <img src="assets/images/it.png"
                                     alt="it" width="18" height="12">
                                Italiano
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item">
                    <div class="wcml-dropdown product wcml_currency_switcher">
                        <ul>
                            <li class="wcml-cs-active-currency">
                                <a class="wcml-cs-item-toggle">USD</a>
                                <ul class="wcml-cs-submenu">
                                    <li>
                                        <a>EUR</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
        <div class="header-mobile-mid">
            <div class="header-logo">
                <a href="index.php"><img alt="Akasha"
                                                         src="assets/images/logo.png"
                                                         class="logo"></a></div>
        </div>
        <div class="header-mobile-right">
            <div class="header-control-inner">
                <div class="meta-dreaming">
                    <div class="menu-item block-user block-dreaming akasha-dropdown">
                        <a class="block-link" href="login.php">
                            <span class="flaticon-profile"></span>
                        </a>
                        <ul class="sub-menu">
                          <li class="menu-item akasha-MyAccount-navigation-link akasha-MyAccount-navigation-link--dashboard is-active">
                                        <a href="#">Dashboard</a>
                                    </li>
                                    <li class="menu-item akasha-MyAccount-navigation-link akasha-MyAccount-navigation-link--orders">
                                        <a href="order.php">Orders</a>
                                    </li>
									<li class="menu-item akasha-MyAccount-navigation-link akasha-MyAccount-navigation-link--orders">
                                        <a href="order-tracking.php">Order Status</a>
                                    </li>
                                    <li class="menu-item akasha-MyAccount-navigation-link akasha-MyAccount-navigation-link--customer-logout">
                                        <a href="index.php">Logout</a>
                                    </li>
                        </ul>
                    </div>
                    <div class="block-minicart block-dreaming akasha-mini-cart akasha-dropdown">
                        <div class="shopcart-dropdown block-cart-link" data-akasha="akasha-dropdown">
                            <a class="block-link link-dropdown" href="cart.php">
                                <span class="flaticon-bag"></span>
                                <span class="count">3</span>
                            </a>
                        </div>
                        <div class="widget akasha widget_shopping_cart">
                            <div class="widget_shopping_cart_content">
                                <h3 class="minicart-title">Your Cart<span class="minicart-number-items">3</span></h3>
                                <ul class="akasha-mini-cart cart_list product_list_widget">
                                    <li class="akasha-mini-cart-item mini_cart_item">
                                        <a href="#" class="remove remove_from_cart_button">×</a>
                                        <a href="#">
                                            <img src="assets/images/vishal-print/product1.jpg"
                                                 class="attachment-akasha_thumbnail size-akasha_thumbnail"
                                                 alt="img" width="600" height="778">Product 1
                                        </a>
                                        <span class="quantity">1 × <span
                                                class="akasha-Price-amount amount"><span
                                                class="akasha-Price-currencySymbol">INR </span>1500.00</span></span>
                                    </li>
                                    <li class="akasha-mini-cart-item mini_cart_item">
                                        <a href="#" class="remove remove_from_cart_button">×</a>
                                        <a href="#">
                                            <img src="assets/images/vishal-print/product2.jpg"
                                                 class="attachment-akasha_thumbnail size-akasha_thumbnail"
                                                 alt="img" width="600" height="778">Product 2
                                        </a>
                                        <span class="quantity">1 × <span
                                                class="akasha-Price-amount amount"><span
                                                class="akasha-Price-currencySymbol">INR </span>1299.00</span></span>
                                    </li>
                                    <li class="akasha-mini-cart-item mini_cart_item">
                                        <a href="#" class="remove remove_from_cart_button">×</a>
                                        <a href="#">
                                            <img src="assets/images/vishal-print/product3.jpg"
                                                 class="attachment-akasha_thumbnail size-akasha_thumbnail"
                                                 alt="img" width="600" height="778">Product 3
                                        </a>
                                        <span class="quantity">1 × <span
                                                class="akasha-Price-amount amount"><span
                                                class="akasha-Price-currencySymbol">INR </span>1399.00</span></span>
                                    </li>
                                </ul>
                                <p class="akasha-mini-cart__total total"><strong>Subtotal:</strong>
                                    <span class="akasha-Price-amount amount"><span
                                            class="akasha-Price-currencySymbol">INR </span>4198.00</span>
                                </p>
                                <p class="akasha-mini-cart__buttons buttons">
                                    <a href="cart.php" class="button akasha-forward">Viewcart</a>
                                    <a href="checkout.php" class="button checkout akasha-forward">Checkout</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>