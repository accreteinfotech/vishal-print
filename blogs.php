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
        <h1 class="page-title" style="color:#fff;">Blog</h1>
        <div role="navigation" aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
            <ul class="trail-items breadcrumb">
                <li class="trail-item trail-begin"><a href="index.php"><span style="color:#fff;">Home</span></a></li>
                <li class="trail-item trail-end active"><span style="color:#fff;">Blog</span>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="main-container no-sidebar">
    <!-- POST LAYOUT -->
    <div class="container">
        <div class="row">
            <div class="main-content col-md-12 col-sm-12">
                <div class="blog-grid auto-clear content-post row">
                    <article
                            class="post-item post-grid col-bg-4 col-xl-4 col-lg-4 col-md-4 col-sm-6 col-ts-12 post-195 post type-post status-publish format-standard has-post-thumbnail hentry category-light category-table category-life-style tag-light tag-life-style">
                        <div class="post-inner">
                            <div class="post-thumb">
                                <a href="blog-description.php">
                                    <img src="assets/images/vishal-print/blog1.jpg"
                                         class="img-responsive attachment-370x330 size-370x330" alt="img" width="370"
                                         height="330"> </a>
                               
                            </div>
                            <div class="post-content">
                                <div class="post-meta">
                                    <div class="post-author">
                                        By:<a href="blog-description.php">
                                        admin </a>
                                    </div>
                                   
                                </div>
                                <div class="post-info equal-elem">
                                    <h2 class="post-title"><a href="blog-description.php">Blog Title</a></h2>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Malesuada sodales quisque
                                    litora dapibus primis lacinia
                                </div>
                            </div>
                        </div>
                    </article>
                    
                    
					 <article
                            class="post-item post-grid col-bg-4 col-xl-4 col-lg-4 col-md-4 col-sm-6 col-ts-12 post-195 post type-post status-publish format-standard has-post-thumbnail hentry category-light category-table category-life-style tag-light tag-life-style">
                        <div class="post-inner">
                            <div class="post-thumb">
                                <a href="blog-description.php">
                                    <img src="assets/images/vishal-print/blog2.jpg"
                                         class="img-responsive attachment-370x330 size-370x330" alt="img" width="370"
                                         height="330"> </a>
                               
                            </div>
                            <div class="post-content">
                                <div class="post-meta">
                                    <div class="post-author">
                                        By:<a href="blog-description.php">
                                        admin </a>
                                    </div>
                                   
                                </div>
                                <div class="post-info equal-elem">
                                    <h2 class="post-title"><a href="blog-description.php">Blog Title</a></h2>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Malesuada sodales quisque
                                    litora dapibus primis lacinia
                                </div>
                            </div>
                        </div>
                    </article>
					
					
					 <article
                            class="post-item post-grid col-bg-4 col-xl-4 col-lg-4 col-md-4 col-sm-6 col-ts-12 post-195 post type-post status-publish format-standard has-post-thumbnail hentry category-light category-table category-life-style tag-light tag-life-style">
                        <div class="post-inner">
                            <div class="post-thumb">
                                <a href="blog-description.php">
                                    <img src="assets/images/vishal-print/blog3.jpg"
                                         class="img-responsive attachment-370x330 size-370x330" alt="img" width="370"
                                         height="330"> </a>
                               
                            </div>
                            <div class="post-content">
                                <div class="post-meta">
                                    <div class="post-author">
                                        By:<a href="blog-description.php">
                                        admin </a>
                                    </div>
                                   
                                </div>
                                <div class="post-info equal-elem">
                                    <h2 class="post-title"><a href="blog-description.php">Blog Title</a></h2>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Malesuada sodales quisque
                                    litora dapibus primis lacinia
                                </div>
                            </div>
                        </div>
                    </article>
					
					 <article
                            class="post-item post-grid col-bg-4 col-xl-4 col-lg-4 col-md-4 col-sm-6 col-ts-12 post-195 post type-post status-publish format-standard has-post-thumbnail hentry category-light category-table category-life-style tag-light tag-life-style">
                        <div class="post-inner">
                            <div class="post-thumb">
                                <a href="blog-description.php">
                                    <img src="assets/images/vishal-print/blog1.jpg"
                                         class="img-responsive attachment-370x330 size-370x330" alt="img" width="370"
                                         height="330"> </a>
                               
                            </div>
                            <div class="post-content">
                                <div class="post-meta">
                                    <div class="post-author">
                                        By:<a href="blog-description.php">
                                        admin </a>
                                    </div>
                                   
                                </div>
                                <div class="post-info equal-elem">
                                    <h2 class="post-title"><a href="blog-description.php">Blog Title</a></h2>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Malesuada sodales quisque
                                    litora dapibus primis lacinia
                                </div>
                            </div>
                        </div>
                    </article>
                    
                    
					 <article
                            class="post-item post-grid col-bg-4 col-xl-4 col-lg-4 col-md-4 col-sm-6 col-ts-12 post-195 post type-post status-publish format-standard has-post-thumbnail hentry category-light category-table category-life-style tag-light tag-life-style">
                        <div class="post-inner">
                            <div class="post-thumb">
                                <a href="blog-description.php">
                                    <img src="assets/images/vishal-print/blog2.jpg"
                                         class="img-responsive attachment-370x330 size-370x330" alt="img" width="370"
                                         height="330"> </a>
                               
                            </div>
                            <div class="post-content">
                                <div class="post-meta">
                                    <div class="post-author">
                                        By:<a href="blog-description.php">
                                        admin </a>
                                    </div>
                                   
                                </div>
                                <div class="post-info equal-elem">
                                    <h2 class="post-title"><a href="blog-description.php">Blog Title</a></h2>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Malesuada sodales quisque
                                    litora dapibus primis lacinia
                                </div>
                            </div>
                        </div>
                    </article>
					
					
					 <article
                            class="post-item post-grid col-bg-4 col-xl-4 col-lg-4 col-md-4 col-sm-6 col-ts-12 post-195 post type-post status-publish format-standard has-post-thumbnail hentry category-light category-table category-life-style tag-light tag-life-style">
                        <div class="post-inner">
                            <div class="post-thumb">
                                <a href="blog-description.php">
                                    <img src="assets/images/vishal-print/blog3.jpg"
                                         class="img-responsive attachment-370x330 size-370x330" alt="img" width="370"
                                         height="330"> </a>
                               
                            </div>
                            <div class="post-content">
                                <div class="post-meta">
                                    <div class="post-author">
                                        By:<a href="blog-description.php">
                                        admin </a>
                                    </div>
                                   
                                </div>
                                <div class="post-info equal-elem">
                                    <h2 class="post-title"><a href="blog-description.php">Blog Title</a></h2>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Malesuada sodales quisque
                                    litora dapibus primis lacinia
                                </div>
                            </div>
                        </div>
                    </article>
					
					
                    
                </div>
                <nav class="navigation pagination">
                    <div class="nav-links">
                        <span class="page-numbers current">1</span>
                        <a class="page-numbers" href="#">2</a>
                        <a class="next page-numbers" href="#"><i class="fa fa-angle-right"></i></a>
                    </div>
                </nav>
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