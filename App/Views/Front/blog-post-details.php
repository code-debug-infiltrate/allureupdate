<?php 
include 'Layout/location.php'; 
include 'Layout/timeAgo.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Stop Searching, Start Dating — all you need is a device connected to the internet" />
    <meta name="keywords" content="Dating, Relationship, Marriage, Casual, Fun, Marriage, Love Making, Theraphist." />
	
	<!-- FAVICONS ICON ============================================= -->
	<!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="/Images/Logo/favicon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/Images/Logo/favicon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/Images/Logo/favicon.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/Images/Logo/favicon.png">
    <link rel="icon" type="image/png" sizes="128x128" href="/Images/Logo/favicon.png">
    <link rel="manifest" href="/Images/Logo/favicon.png">
    <link rel="mask-icon" href="/Images/Logo/favicon.png" color="#666666">
    <link rel="shortcut icon" href="/Images/Logo/favicon.png">
    <meta name="apple-mobile-web-app-title" content="<?= getenv('APP_NAME')?>">
    <meta name="application-name" content="<?= getenv('APP_NAME')?>">
    <meta name="msapplication-TileColor" content="#6262e3">
    <meta name="msapplication-config" content="/Images/Logo/favicon.png">
	
	<!-- MOBILE SPECIFIC ============================================= -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Facebook Integration -->
	<meta property="og:site_name" content="<?= getenv('APP_NAME')?>"/>
	<meta property="og:title" content="<?= $blogPostDetails['title']; ?>"/>
	<meta property="og:description" content="<?= $blogPostDetails['subject']; ?>"/>
	<meta property="og:image" content="/Images/Blog/<?= $blogPostDetails['file']; ?>"/>
	<meta property="og:url" content="<?= $blogPostDetails['url']; ?>"/>
	<meta property="og:image:width" content="1280"/>
	<meta property="og:image:height" content="640"/>

	<!-- Article Integration -->
	<meta property="article:publisher" content="<?= getenv('APP_LINK')?>"/>
	<meta property="article:section" content="<?= $blogPostDetails['category']; ?>"/>
	<meta property="article:tag" content="<?= $blogPostDetails['tags']; ?>"/>

	<!-- Twitter Integration -->
	<meta property="twitter:title" content="<?= $blogPostDetails['title']; ?>" />
	<meta property="twitter:description" content="<?= $blogPostDetails['subject']; ?>"/>
	<meta property="twitter:image" content="/Images/Blog/<?= $blogPostDetails['file']; ?>" />
	<meta property="twitter:url" content="<?= $blogPostDetails['url']; ?>"/>
	<meta property="twitter:card" content="@<?= getenv('APP_NAME')?>"/>
	
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.min.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
	
	<!-- All PLUGINS CSS ============================================= -->
    


	<link rel="canonical" href="<?= $blogPostDetails['url']; ?>" />
    <!-- Stylesheets -->
    <link href="<?= public_asset('/other_assets/Front/css/style.css') ?>" rel="stylesheet">
    <link href="<?= public_asset('/other_assets/Front/css/responsive.css') ?>" rel="stylesheet">

    <link rel="icon" href="/Images/Logo/favicon.png" type="image/x-icon">

    <!-- jequery plugins -->
    <script src="<?= public_asset('/other_assets/Front/js/jquery.js') ?>"></script>


</head>

<!-- page wrapper -->
<body class="boxed_wrapper">

<?php
include 'Layout/navbar.php';
?>

<title><?= $blogPostDetails['title']; ?> | <?php if(isset($coyInfo['coyname'])) { echo $coyInfo['coyname']; } else { echo getenv('APP_NAME'); } ?> News</title>


    <!-- page-title-two -->
    <section class="page-title blog-page" style="background-image: url(/Images/Blog/<?= $blogPostDetails['file']; ?>);">
        <div class="container">
            <div class="content-box" style="margin-top: 200px;">
                <h1><?= $blogPostDetails['title']; ?></h1>
            </div>
        </div>
    </section>
    <!-- page-title-two end -->


 <!-- blog-single -->
 <section class="blog-single sidebar-page-container">
        <div class="container">
            <div class="row">


                
                <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                    <div class="blog-single-content">
                        <div class="news-block-four">
                            <div class="inner-box">
                                <figure class="image-box"><img src="/Images/Blog/<?= $blogPostDetails['file']; ?>" alt="post-image"></figure>
                                <div class="lower-content">
                                    <div class="categori-box">
										<?= $blogPostDetails['category']; ?>
									</div>
                                    <div class="post-date">
										<?php foreach ($userProfiles as $key => $user) { if ($user['uniqueid'] == $blogPostDetails['uniqueid']) { ?>
											<img src="<?= public_asset('/other_assets/Profile/') ?><?= $user['profileimage']; ?>" alt="Author Photo" style="width: 40px; height: 40px;">
											<span style="font-size: 14px;"><a href="#writerProfile" title="Writer Name"> By <?= $user['fname']; ?> <?= $user['lname']; ?></a></span>
										<?php } } ?>
										<i class="far fa-calendar-alt"></i><?= date('M-d-Y', strtotime($blogPostDetails['created'])); ?>
									</div>
                                    <h2 style="margin-top: 20px;"><?= $blogPostDetails['title']; ?></h2>
									
									<div class="content-style-two">
										<div class="text">
											<blockquote>
												"<?= $blogPostDetails['subject']; ?>"
											</blockquote>
											<h3 style="margin-top: 20px;"><?= $blogPostDetails['introduction']; ?></h3>
										</div>
									</div>

                                    <div class="text">
										<?php $new = explode(".  ", $blogPostDetails['details']); foreach ($new as $key => $d) { ?> 
											<p title="details" style="word-spacing: 3px; line-break: 5px; line-height: 25px; font-size: 16px; color: black;">  <?= $d; ?>  </p>
										<?php } ?>
										
										<?php if ($blogPostDetails['file1']) { ?>
										<figure class="alignright" style="margin-top: 20px;">
											<img src="/Images/Blog/<?= $blogPostDetails['file1']; ?>" alt="Post Image 2" style="width: 100%">
										</figure>
										<?php } ?>

										<?php $new = explode(".  ", $blogPostDetails['conclusion']); foreach ($new as $key => $d) { ?> 
											<p title="conclusion" style="margin-top: 20px; word-spacing: 3px; line-break: 5px; line-height: 25px; font-size: 16px; color: black;">    <?= $d; ?>  </p>
										<?php } ?>

									</div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="post-share-option clearfix">
						<?php $new = explode(", ", $blogPostDetails['tags']); foreach ($new as $key => $t) { ?> <div class="tags pull-left"><a href="javascript:void(0);" title="tag" style="font-size: 12px; font-weight: 400;"><?= $t; ?></a></div><?php } ?>
                            <ul class="social-links pull-right">
                                <li>
									<a href="https://api.whatsapp.com/send?text=<?= $blogPostDetails['url']; ?>" target="_blank">
										<i class="fab fa-whatsapp" alt="Share On Whatsapp" id="Whatsapp" style="cursor: pointer; font-size: 20px; color: white;"></i>
									</a>
								</li>
                                <li>
									<a href="https://www.facebook.com/sharer/sharer.php?u=<?= $blogPostDetails['url']; ?>" target="_blank">
										<i class="fab fa-facebook" alt="Share On Facebook" id="Facebook" style="cursor: pointer; font-size: 20px; color: white;"></i>
									</a>
								</li>
                                <li>
									<a href="https://instagram.com/share?u=<?= $blogPostDetails['url']; ?>&url=<?= $blogPostDetails['url']; ?>" target="_blank">
										<i class="fab fa-instagram" alt="Share On Instagram" id="Instagram" style="cursor: pointer; font-size: 20px; color: white;"></i>
									</a>
								</li>
                                <li>
									<a href="https://twitter.com/share?url=<?= $blogPostDetails['url']; ?>" target="_blank">
										<i class="fab fa-twitter" alt="Share On Twitter" id="Twitter" style="cursor: pointer; font-size: 20px; color: white;"></i>
									</a>
								</li>
                                <li>
									<a href="mailto:?&subject=<?= $blogPostDetails['title']; ?>&body=<?= $blogPostDetails['url']; ?>" target="_blank">
										<i class="fab fa-envelope" alt="Share On Email" id="Email" style="cursor: pointer; font-size: 20px; color: white;"></i>
									</a>
								</li>
                            </ul>
                        </div>

                        <div class="author-box" id="writerProfile">
							<?php foreach ($userProfiles as $key => $user) { if ($user['uniqueid'] == $blogPostDetails['uniqueid']) { ?>
                            <figure class="author-image"><img src="<?= public_asset('/other_assets/Profile/') ?><?= $user['profileimage']; ?>" alt="Author-Image"></figure>
                            <div class="author-content">
                                <h4><?= $user['fname']; ?> <?= $user['lname']; ?></h4>
                                <div class="post-date"><?= $user['occupation']; ?></div>
                                <div class="text"><?= $user['details']; ?></div>
                            </div>
							<?php } } ?>
                        </div>

                        <!-- <div class="nav-btn clearfix">
                            <div class="prev-btn pull-left"><a href="#">Our smart batteries are<br />integrated smart energy<i class="flaticon-slim-left"></i></a></div>
                            <div class="next-btn pull-right"><a href="#"> Electricity bills and achieve<br />greater energy power hit<i class="flaticon-slim-right"></i></a></div>
                        </div> -->
						
                    </div>
                </div>


				<div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                    <div class="sidebar blog-sidebar">
                        <div class="contact-widget sidebar-widget wow fadeInLeft" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="widget-content">
                                <h4>Need Professional Help On Personal, Marital Or Career Issues?</h4>
                                <div class="text">Take a bold step by booking a strategic session today.</div>
                                <div class="btn-box"><a href="<?= baseURL('consultation-and-therapy/'); ?>"><i class="fas fa-angle-right"></i>Start Here</a></div>
                            </div>
                        </div>
                        <div class="search-widget sidebar-widget">
                            <div class="search-box">
                                <form action="<?= baseURL('search/'); ?>" method="post">
                                    <div class="form-group">
                                        <input type="search" name="search-field" placeholder="Type here" required="">
                                        <button type="submit">Search Blog</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="categories-widget sidebar-widget wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <h3 class="widget-title">News Categories</h3>
                            <ul class="categories-list">
                                <li><a href="<?= baseURL('blog/')?>Dating/">#Dating</a></li>
                                <li><a href="<?= baseURL('blog/')?>Relationshhip/">#Relationship</a></li>
                                <li><a href="<?= baseURL('blog/')?>Marriage/">#Marriage</a></li>
                                <li><a href="<?= baseURL('blog/')?>Motivationals/">#Motivationals</a></li>
                                <li><a href="<?= baseURL('blog/')?>Life-Hacks/">#Life Hacks</a></li>
                                <li><a href="<?= baseURL('blog/')?>all/">#General News</a></li>
                            </ul>
                        </div>

						<?php if (isset($blogRandomPosts)) { ?>
                        <div class="post-widget sidebar-widget">
                            <h3 class="widget-title">Recent Post</h3>
                            <div class="widget-content">
								<?php $i=0; foreach ($blogRandomPosts as $key => $post) { ?>
									<?php if ($i <= 4) {  ?>
									<div class="post">
										<figure class="post-thumb">
											<a href="<?= $post['url']; ?>"><img src="/Images/Blog/<?= $post['file']; ?>" alt="Post-Image"></a>
											<span><?= $i; ?></span>
										</figure>
										<h5><a href="<?= $post['url']; ?>"><?= substr($post['title'], 0, 25); ?>...</a></h5>
										<div class="text"><?= substr($post['introduction'], 0, 65); ?>...</div>
										<div class="post-info"><?php echo(''.timeAgo(date('Y/m/d', strtotime($post['created']))).''); ?></div>
									</div>
									<?php } ?>
								<?php $i++; } ?>
                            </div>
                        </div>
						<?php } ?>
                        <div class="tags-widget sidebar-widget sidebar-widget wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <h3 class="widget-title">Tags</h3>
                            <div class="widget-content">
                                <ul class="clearfix">
								<li><a href="<?= baseURL('blog/')?>Dating/">#Dating</a></li>
                                <li><a href="<?= baseURL('blog/')?>Relationshhip/">#Relationship</a></li>
                                <li><a href="<?= baseURL('blog/')?>Marriage/">#Marriage</a></li>
                                <li><a href="<?= baseURL('blog/')?>Motivationals/">#Motivationals</a></li>
                                <li><a href="<?= baseURL('blog/')?>Life-Hacks/">#Life Hacks</a></li>
                                <li><a href="<?= baseURL('blog/')?>all/">#General News</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </section>
    <!-- blog-single end -->






<?php include 'Layout/footer.php'; ?>