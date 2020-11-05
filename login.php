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
        <h1 class="page-title" style="color:#fff;">My Account</h1>
        <div role="navigation" aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
            <ul class="trail-items breadcrumb">
                <li class="trail-item trail-begin"><a href="index.php"><span style="color:#fff;">Home</span></a></li>
                <li class="trail-item trail-end active"><span style="color:#fff;">My Account</span>
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
                    <div class="akasha">
                        <div class="akasha-notices-wrapper"></div>
                        <div class="u-columns col2-set" id="customer_login">
                            <div class="u-column1 col-1">
                                <h2>Login</h2>
                                <form class="akasha-form akasha-form-login login" method="post">
                                    <p class="akasha-form-row akasha-form-row--wide form-row form-row-wide">
                                        <label for="username">Username or email address&nbsp;<span
                                                class="required">*</span></label>
                                        <input type="text" class="akasha-Input akasha-Input--text input-text"
                                               name="username" id="username" autocomplete="username" value=""></p>
                                    <p class="akasha-form-row akasha-form-row--wide form-row form-row-wide">
                                        <label for="password">Password&nbsp;<span class="required">*</span></label>
                                        <input class="akasha-Input akasha-Input--text input-text"
                                               type="password" name="password" id="password"
                                               autocomplete="current-password">
                                    </p>
                                    <p class="form-row">
                                        <input type="hidden" id="akasha-login-nonce" name="akasha-login-nonce"
                                               value="832993cb93"><input type="hidden" name="_wp_http_referer"
                                                                         value="/akasha/my-account/">
                                        <button type="submit" class="akasha-Button button" name="login"
                                                value="Log in">Log in
                                        </button>
                                        <label class="akasha-form__label akasha-form__label-for-checkbox inline">
                                            <input class="akasha-form__input akasha-form__input-checkbox"
                                                   name="rememberme" type="checkbox" id="rememberme" value="forever">
                                            <span>Remember me</span>
                                        </label>
                                    </p>
                                    <p class="akasha-LostPassword lost_password">
                                        <a href="forgot-password.php">Lost your
                                            password?</a>
                                    </p>
                                </form>
                            </div>
                            <div class="u-column2 col-2">
                                <h2>Register</h2>
                                <form method="post" class="akasha-form akasha-form-register register">
								
								 <p class="akasha-form-row akasha-form-row--wide form-row form-row-wide">
                                        <label for="reg_email">Full Name&nbsp;<span
                                                class="required">*</span></label>
                                        <input type="email" class="akasha-Input akasha-Input--text input-text"
                                               name="email" id="reg_email" autocomplete="email" value=""></p>
								
                                    <p class="akasha-form-row akasha-form-row--wide form-row form-row-wide">
                                        <label for="reg_email">Email address&nbsp;<span
                                                class="required">*</span></label>
                                        <input type="email" class="akasha-Input akasha-Input--text input-text"
                                               name="email" id="reg_email" autocomplete="email" value=""></p>
											   
									 <p class="akasha-form-row akasha-form-row--wide form-row form-row-wide">
                                        <label for="reg_email">Password&nbsp;<span
                                                class="required">*</span></label>
                                        <input type="email" class="akasha-Input akasha-Input--text input-text"
                                               name="email" id="reg_email" autocomplete="email" value=""></p>
                                   
								   <div class="akasha-privacy-policy-text"><p>Your personal data will be used to
                                        support your experience throughout this website, to manage access to your
                                        account, and for other purposes described in our <a
                                                href="#" class="akasha-privacy-policy-link"
                                                target="_blank">privacy policy</a>.</p>
                                    </div>
                                    <p class="akasha-FormRow form-row">
                                        <input type="hidden" id="akasha-register-nonce"
                                               name="akasha-register-nonce" value="45fae70a87"><input type="hidden"
                                                                                                           name="_wp_http_referer"
                                                                                                           value="/akasha/my-account/">
                                        <button type="submit" class="akasha-Button button" name="register"
                                                value="Register">Register
                                        </button>
                                    </p>
                                </form>
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