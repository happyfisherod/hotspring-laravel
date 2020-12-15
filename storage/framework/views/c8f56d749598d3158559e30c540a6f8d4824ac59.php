<?php $__env->startSection('head_title', 'Login' .' | '.getcong('site_name') ); ?>

<?php $__env->startSection('head_url', Request::url()); ?>

<?php $__env->startSection("content"); ?>
<link href="<?php echo e(asset('assets/frontend/layout/css/style.css')); ?>" rel="stylesheet">
  <div class="white_for_login" style="margin-top: 120px;">
    <div class="container margin_60">
      <div class="row">
        <div class="col-md-3"> </div>
        <div class="col-md-6">
          <div id="order_process" class="box_style_2">
            <h2 class="inner"><?php echo e(trans('messages.Login')); ?></h2>             
              <?php echo Form::open(array('url' => 'login','class'=>'','id'=>'login','role'=>'form')); ?> 
              <div class="message">                         
                <?php if(count($errors) > 0): ?>
                    <div class="alert alert-danger">                    
                      <ul>
                          <?php foreach($errors->all() as $error): ?>
                              <li><?php echo e($error); ?></li>
                          <?php endforeach; ?>
                      </ul>
                    </div>
                <?php endif; ?>                                    
              </div>
              <?php if(Session::has('flash_message')): ?>

                <div class="alert alert-success fade in">
                    
                  <?php echo e(Session::get('flash_message')); ?>

                </div>

                  
              <?php endif; ?>              
              <div class="form-group">
                <label><?php echo e(trans('messages.Your email')); ?></label>
                <input type="email" placeholder="<?php echo e(trans('messages.Your email')); ?>" class="form-control" value="" name="email" id="email">
              </div>
              <div class="form-group">
                <label><?php echo e(trans('messages.Password')); ?></label>
                <input type="password" placeholder="<?php echo e(trans('messages.Password')); ?>" class="form-control" value="" name="password" id="password">
              </div>
              <div>
                  <a href="<?php echo e(URL::to('forgotpassword')); ?>" style="color:blue; padding:3px;">Forgot Password</a>
              </div>
              <button class="btn btn-submit" type="submit"><?php echo e(trans('messages.Login')); ?></button>
            <?php echo Form::close(); ?> 
          </div>
        </div>
        <div class="col-md-3"> </div>
      </div>
    </div>
  </div>

<div class="modal fade" id="openinfo" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header text-center" style="background: rgba(228, 88, 88, 0.98);">
        <h4 class="modal-title" style="color:#fff;"><?php echo e(trans('messages.Opening Info')); ?></h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
          <div class="" style="padding: 20px;">
              <label sytle="color:red"><?php echo e(trans('messages.We are now closed')); ?></label>
          </div>
      </div>
    </div>
  </div>
</div>

<script>
    <?php if(!$openinfo): ?>
        $('#openinfo').modal("show");
    <?php endif; ?>
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make("app", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>