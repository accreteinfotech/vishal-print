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
        <h1 class="page-title" style="color:#fff;">About</h1>
        <div role="navigation" aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
            <ul class="trail-items breadcrumb">
                <li class="trail-item trail-begin"><a href="index.php"><span style="color:#fff;">Home</span></a></li>
                <li class="trail-item trail-end active"><span style="color:#fff;">About</span>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="site-main  main-container no-sidebar">
    <div class="section-037">
        <div class="container">
            <div class="akasha-popupvideo style-01">
                <div class="popupvideo-inner">
                    <div class="icon">
                        <img src="assets/images/about-img.jpg"
                             class="attachment-full size-full" alt="img">
                       
                    </div>
                    <div class="popupvideo-wrap">
                        <h4 class="title">
                            Who we are </h4>
                        <p class="desc">We believe in a world where you have total freedom to be you, without judgement.
                            To experiment. To express yourself. To be brave and grab life as the extraordinary adventure
                            it is. So we make sure everyone has an equal chance to discover all the amazing things
                            they’re capable of – no matter who they are, where they’re from or what looks they like to
                            boss.</p>
                        <p>Our audience (AKA you) is wonderfully unique. And we do everything we can to help you find
                            your fit, offering our Ciloe Brands in more than 30 sizes – and we’re committed to providing
                            all sizes at the same price</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
	
	  <div class="section-037">
        <div class="container">
            <div class="akasha-popupvideo style-01">
                <div class="popupvideo-inner">
                   
                    <div class="popupvideo-wrap">
                        <h4 class="title">
                            What We Do </h4>
                        <p class="desc">We believe in a world where you have total freedom to be you, without judgement.
                            To experiment. To express yourself. To be brave and grab life as the extraordinary adventure
                            it is. So we make sure everyone has an equal chance to discover all the amazing things
                            they’re capable of – no matter who they are, where they’re from or what looks they like to
                            boss.</p>
                        <p>Our audience (AKA you) is wonderfully unique. And we do everything we can to help you find
                            your fit, offering our Ciloe Brands in more than 30 sizes – and we’re committed to providing
                            all sizes at the same price</p>
                    </div>
					
					 <div class="icon">
                        <img src="assets/images/about-img.jpg"
                             class="attachment-full size-full" alt="img">
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="section-039 section-001" style="margin-top:30px;">
        <div class="container">
            <div class="akasha-slide">
                <div class="owl-slick equal-container better-height"
                     data-slick="{&quot;arrows&quot;:true,&quot;slidesMargin&quot;:60,&quot;dots&quot;:false,&quot;infinite&quot;:false,&quot;speed&quot;:300,&quot;slidesToShow&quot;:5,&quot;rows&quot;:1}"
                     data-responsive="[{&quot;breakpoint&quot;:480,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesMargin&quot;:&quot;30&quot;}},{&quot;breakpoint&quot;:768,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;30&quot;}},{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesMargin&quot;:&quot;40&quot;}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesMargin&quot;:&quot;50&quot;}},{&quot;breakpoint&quot;:1500,&quot;settings&quot;:{&quot;slidesToShow&quot;:5,&quot;slidesMargin&quot;:&quot;60&quot;}}]">
                    <div class="dreaming_single_image dreaming_content_element az_align_center">
                        <figure class="dreaming_wrapper az_figure">
                            <div class="az_single_image-wrapper az_box_border_grey effect bounce-in "><img
                                    src="assets/images/brand-logo-1.png"
                                    class="az_single_image-img attachment-full" alt="img" width="200" height="100">
                            </div>
                        </figure>
                    </div>
                    <div class="dreaming_single_image dreaming_content_element az_align_center">
                        <figure class="dreaming_wrapper az_figure">
                            <div class="az_single_image-wrapper   az_box_border_grey effect bounce-in "><img
                                    src="assets/images/brand-logo-5.png"
                                    class="az_single_image-img attachment-full" alt="img" width="200" height="100">
                            </div>
                        </figure>
                    </div>
                    <div class="dreaming_single_image dreaming_content_element az_align_center">
                        <figure class="dreaming_wrapper az_figure">
                            <div class="az_single_image-wrapper  az_box_border_grey effect bounce-in "><img
                                    src="assets/images/brand-logo-4.png"
                                    class="az_single_image-img attachment-full" alt="img" width="200" height="100">
                            </div>
                        </figure>
                    </div>
                    <div class="dreaming_single_image dreaming_content_element az_align_center">
                        <figure class="dreaming_wrapper az_figure">
                            <div class="az_single_image-wrapper az_box_border_grey effect bounce-in "><img
                                    src="assets/images/brand-logo-3.png"
                                    class="az_single_image-img attachment-full" alt="img" width="200" height="100">
                            </div>
                        </figure>
                    </div>
                    <div class="dreaming_single_image dreaming_content_element az_align_center">
                        <figure class="dreaming_wrapper az_figure">
                            <div class="az_single_image-wrapper az_box_border_grey effect bounce-in "><img
                                    src="assets/images/brand-logo-2.png"
                                    class="az_single_image-img attachment-full" alt="img" width="200" height="100">
                            </div>
                        </figure>
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