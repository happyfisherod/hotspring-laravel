<?php $__env->startSection("styles"); ?>
    <!-- Global styles START -->         
    <link href="<?php echo e(asset('assets/global/plugins/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/global/plugins/font-awesome/css/font-awesome.min.css')); ?>" rel="stylesheet">
    <!-- Global styles END --> 
    
    <!-- Page level plugin styles START -->
    <link href="<?php echo e(asset('assets/global/plugins/fancybox/source/jquery.fancybox.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/global/plugins/carousel-owl-carousel/owl-carousel/owl.carousel.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/global/plugins/slider-layer-slider/css/layerslider.css')); ?>" rel="stylesheet">
    <!-- Page level plugin styles END -->

    <!-- Theme styles START -->
    <link href="<?php echo e(asset('assets/global/css/components.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/frontend/layout/css/style.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/frontend/pages/css/style-shop.css')); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo e(asset('assets/frontend/pages/css/style-layer-slider.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/frontend/layout/css/style-responsive.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/frontend/layout/css/themes/blue.css')); ?>" rel="stylesheet" id="style-color">
    <link href="<?php echo e(asset('assets/frontend/layout/css/custom.css')); ?>" rel="stylesheet">
    <!-- Theme styles END -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/frontend/layout/css/custom/plan.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/frontend/layout/css/custom/jquery.bxslider.css')); ?>">
<?php $__env->stopSection(); ?> 


<?php $__env->startSection("content"); ?>
 <div class="sub-banner" style="background:url(<?php echo e(URL::asset('upload/'.getcong('page_bg_image'))); ?>) no-repeat center top; width: 100%; height: 494px; margin: 0 auto;">
    <div class="overlay">
      <div class="container">
        <div id="sub_content" class="animated zoomIn">
    <div class="col-md-2 col-sm-3">
      <div id="thumb"><img alt="<?php echo e($hotspring->hotspring_name); ?>" src="<?php echo e(URL::asset('upload/restaurants/'.$hotspring->hotspring_logo.'-b.jpg')); ?>"></div>
    </div>  
    <div class="col-md-10 col-sm-9">  
      <h1><?php echo e($hotspring->hotspring_name); ?></h1>
      <div class="sub_cont_rt"><?php echo e(getcong_type($hotspring->hotspring_type)); ?></div>
      <div class="sub_cont_lt"><i class="fa fa-map-marker"></i> <?php echo e($hotspring->hotspring_address); ?></div>
      <div class="rating"> 
        <?php for($x = 0; $x < 5; $x++): ?>
                  
              <?php if($x < $hotspring->review_avg): ?>
                <i class="fa fa-star"></i>
              <?php else: ?>
                <i class="fa fa-star fa fa-star-o"></i>
              <?php endif; ?>
             
              <?php endfor; ?>
              (<small><a href="#0">Read <?php echo e($total_review); ?> Reviews</a></small>)

        
      </div>
      </div>
    </div>
      </div>
    </div>
  </div>

<!---feedback detail============-->
<div id="contact" class="container">
  <h3 class="text-center" id="title"> 天然温泉ホテルこまち</h3>
  <div class="row">
    <div class="col-md-12">
      <div class="col-md-1"></div>    
      <div class="col-md-10">
        <div class="steps-block margin-bottom-20" style="padding:0%;">
          <div id="mainpart" class="container"></div>
        </div>
        <div class="row">
          <div class="col-md-3">
            <h3> 天然温泉ホテルこまち </h3>
          </div>
          <div class="col-md-3">
            <i class="fa fa-heart" style="float:left; font-size:24px;color:red; "></i>
            <img src="../assets/frontend/layout/img/star.png" class="img-star" style="margin-left:20px; width:20px;" alt="">&nbsp;471
          </div>          
        </div>
        <div class="row">
          <div class="col-md-6" style="color: lightpink; margin-top:10px;">
            <div class="row">
              <h3>私はこの温泉が一番好きです。</h3>
              <p style="margin-left:20px;">私はこの温泉を1年に2回以上利用します。この温泉の奉仕条件を私に満足させます。</p>
            </div><br>
            <div class="row">
              <h3>私はこの温泉が一番好きです。</h3>
              <p style="margin-left:20px;">私はこの温泉を1年に2回以上利用します。この温泉の奉仕条件を私に満足させます。</p>
            </div><br>
            <div class="row">
              <h3>私はこの温泉が一番好きです。</h3>
              <p style="margin-left:20px;">私はこの温泉を1年に2回以上利用します。この温泉の奉仕条件を私に満足させます。</p>
            </div><br>
            <div class="row">
              <h3>私はこの温泉が一番好きです。</h3>
              <p style="margin-left:20px;">私はこの温泉を1年に2回以上利用します。この温泉の奉仕条件を私に満足させます。</p>
              <br>
            </div>
          </div>
          <div class="col-md-6">
            <form action="feedbacksave.php">
              <textarea class="form-control form-white" style="height:300px" type="text" id="feedback" placeholder="ここにフィードバックを残してください" name="feedback"></textarea>
              <input class="btn btn-primary" type="submit" style="float:right;" value="保管">
            </form><br><br><br>              
          </div>
        </div><br><br><br>
        <div class="row">
          <div class="col-md-3" style="padding:5px;" >
            <img style="width:80%;" src="../assets/frontend/layout/img/s1.jpg">
          </div>
          <div class="col-md-3" style="padding:5px;">
            <img style="width:80%;" src="../assets/frontend/layout/img/s2.jpg">
          </div>
          <div class="col-md-3" style="padding:5px;">
            <img style="width:80%;" src="../assets/frontend/layout/img/s3.jpg">
          </div>
          <div class="col-md-3" style="padding:5px;">
            <img style="width:80%;" src="../assets/frontend/layout/img/s4.jpg"><br><br><br>
          </div><br><br><br>
        </div>
      </div>
      <div class="col-md-1"></div> 
    </div>
  </div>
</div>

<!-- Register modal -->
<div class="modal fade" id="myReview" tabindex="-1" role="dialog" aria-labelledby="review" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content modal-popup"> <a href="#" class="close-link"><i class="fa fa-times-circle-o"></i></a>
      
        <?php echo Form::open(array('url' => 'hotspring/'.$hotspring->hotspring_slug.'/hotspring_review','class'=>'popup-form','name'=>'review','id'=>'review','role'=>'form')); ?> 
        <div class="login_icon"><i class="fa fa-comments-o"></i></div>
        <input name="hotspring_id" id="hotspring_id" type="hidden" value="<?php echo e($hotspring->id); ?>">
          
        <div class="row">
          <div class="col-md-6">
            <select class="form-control form-white" name="food_quality" id="food_quality" required>
              <option value="">Food Quality</option>
              <option value="1">Low</option>
              <option value="2">Sufficient</option>
              <option value="3">Good</option>
              <option value="4">Excellent</option>
              <option value="5">Super</option>
              
            </select>
          </div>
          <div class="col-md-6">
            <select class="form-control form-white"  name="price" id="price" required>
              <option value="">Price</option>
              <option value="1">Low</option>
              <option value="2">Sufficient</option>
              <option value="3">Good</option>
              <option value="4">Excellent</option>
              <option value="5">Super</option>
              
            </select>
          </div>
        </div>
        <!--End Row -->
        
        <div class="row">
          <div class="col-md-6">
            <select class="form-control form-white"  name="punctuality" id="punctuality" required>
              <option value="">Punctuality</option>
              <option value="1">Low</option>
              <option value="2">Sufficient</option>
              <option value="3">Good</option>
              <option value="4">Excellent</option>
              <option value="5">Super</option>
              
            </select>
          </div>
          <div class="col-md-6">
            <select class="form-control form-white"  name="courtesy" id="courtesy" required>
              <option value="">Courtesy</option>
              <option value="1">Low</option>
              <option value="2">Sufficient</option>
              <option value="3">Good</option>
              <option value="4">Excellent</option>
              <option value="5">Super</option>
              
            </select>
          </div>
        </div>
        <!--End Row -->
        <textarea name="review_text" id="review_text" class="form-control form-white" style="height:100px" placeholder="Write your review"></textarea>
        <input type="submit" value="Submit" class="review_btn-submit" id="submit-review">
      <?php echo Form::close(); ?> 
      <div id="message-review"></div>
    </div>
  </div>
</div>
<!-- End Register modal --> 


<?php $__env->stopSection(); ?>

<?php echo $__env->make("app", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>