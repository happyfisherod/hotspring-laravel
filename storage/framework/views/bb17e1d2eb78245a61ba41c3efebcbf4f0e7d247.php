<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $__env->yieldContent('head_title', getcong('site_name')); ?></title>
<meta name="viewport"content="width=device-width, initial-scale=1.0">
<meta name="description" content="<?php echo $__env->yieldContent('head_description', getcong('site_description')); ?>" />

<meta property="og:type" content="article" />
<meta property="og:title" content="<?php echo $__env->yieldContent('head_title',  getcong('site_name')); ?>" />
<meta property="og:description" content="<?php echo $__env->yieldContent('head_description', getcong('site_description')); ?>" />
<meta property="og:image" content="<?php echo $__env->yieldContent('head_image', url('/upload/logo.png')); ?>" />
<meta property="og:url" content="<?php echo $__env->yieldContent('head_url', url('/')); ?>" />


<!-- Fonts START -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|PT+Sans+Narrow|Source+Sans+Pro:200,300,400,600,700,900&amp;subset=all" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900&amp;subset=all" rel="stylesheet" type="text/css"><!--- fonts for slider on the index page -->  
<!-- Fonts END -->

<!-- Favicons-->
	<link rel="shortcut icon" href="<?php echo e(URL::asset('upload/'.getcong('site_favicon'))); ?>" type="image/x-icon">
<!--MAIN STYLE-->
<link href="<?php echo e(URL::asset('site_assets/css/bootstrap.min.css')); ?>" rel="stylesheet" type="text/css">
<link href="<?php echo e(URL::asset('site_assets/css/main.css')); ?>" rel="stylesheet" type="text/css">
<link href="<?php echo e(URL::asset('site_assets/css/style.css')); ?>" rel="stylesheet" type="text/css">
<link href="<?php echo e(URL::asset('site_assets/css/animate.css')); ?>" rel="stylesheet" type="text/css">
<link href="<?php echo e(URL::asset('site_assets/css/responsive.css')); ?>" rel="stylesheet" type="text/css">
<link href="<?php echo e(URL::asset('site_assets/css/font-awesome.min.css')); ?>" rel="stylesheet" type="text/css">	

<?php echo $__env->yieldContent("styles"); ?>

<style>
	.site-logo {
		float: left;
	}
	.animenu {
		float: right;
	}
</style>

<script src="<?php echo e(URL::asset('site_assets/js/jquery-1.11.0.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('site_assets/js/bootstrap.min.js')); ?>"></script>

<?php echo getcong('site_header_code'); ?>


</head>
<body class="ecommerce"> 
	<div id="wrap" class="home-1">
	 	<?php echo $__env->make("_particles.header", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>  
	 	
	 	<?php echo $__env->yieldContent("content"); ?>
	 	
	 	<?php echo $__env->make("_particles.footer", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<script src="<?php echo e(URL::asset('site_assets/js/jquery.flexslider-min.js')); ?>"></script> 
<script src="<?php echo e(URL::asset('site_assets/js/jquery.nouislider.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('site_assets/js/jquery.sticky.js')); ?>"></script> 
<script src="<?php echo e(URL::asset('site_assets/js/jquery.stellar.js')); ?>"></script> 
<script src="<?php echo e(URL::asset('site_assets/js/owl.carousel.min.js')); ?>"></script> 
<script src="<?php echo e(URL::asset('site_assets/js/wow.min.js')); ?>"></script> 
<script src="<?php echo e(URL::asset('site_assets/js/own-menu.js')); ?>"></script>  
<script src="<?php echo e(URL::asset('site_assets/js/main.js')); ?>"></script> 
<script src="<?php echo e(URL::asset('site_assets/js/nav_menu.js')); ?>"></script>
<script src="<?php echo e(URL::asset('site_assets/js/functions.js')); ?>"></script> 

<?php echo $__env->yieldContent("scripts"); ?>

</div>

</body>
</html>