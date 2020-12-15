<?php $__env->startSection("content"); ?>

<div id="main">
	<div class="page-header">
		<h2><?php echo e(trans('messages.Overview')); ?></h2>
	</div>
    
 
<div class="row">
    
  	 
    	<a href="<?php echo e(URL::to('admin/types')); ?>">
        <div class="col-sm-6 col-md-3">
        <div class="panel panel-orange panel-shadow">
            <div class="media">
                <div class="media-left">
                    <div class="panel-body">
                        <div class="width-100">
                            <h5 class="margin-none" id="graphWeek-y"><?php echo e(trans('messages.Types')); ?></h5>

                            <h2 class="margin-none" id="graphWeek-a">
                                <?php echo e($types); ?>

                            </h2>
                        </div>
                    </div>
                </div>
                <div class="media-body">
                    <div class="pull-right width-150">
                        <i class="fa fa-tags fa-4x" style="margin: 8px;"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </a>

        <a href="<?php echo e(URL::to('admin/hotspring/addeditcustom')); ?>">
    	<div class="col-sm-6 col-md-3">
        <div class="panel panel-green panel-shadow">
            <div class="media">
                <div class="media-left">
                    <div class="panel-body">
                        <div class="width-100">
                            <h5 class="margin-none" id="graphWeek-y"><?php echo e(trans('messages.HotSpting')); ?></h5>

                            <h2 class="margin-none" id="graphWeek-a">
                                <?php echo e($hotspring_count); ?>

                            </h2>
                        </div>
                    </div>
                </div>
                <div class="media-body">
                    <div class="pull-right width-150">
                        <i class="fa fa-cutlery fa-4x" style="margin: 8px;"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </a>

    <a href="<?php echo e(URL::to('admin/allorder')); ?>">
        <div class="col-sm-6 col-md-3">
        <div class="panel panel-grey panel-shadow">
            <div class="media">
                <div class="media-left">
                    <div class="panel-body">
                        <div class="width-100">
                            <h5 class="margin-none" id="graphWeek-y"><?php echo e(trans('messages.Orders')); ?></h5>

                            <h2 class="margin-none" id="graphWeek-a">
                                <?php echo e($order); ?>

                            </h2>
                        </div>
                    </div>
                </div>
                <div class="media-body">
                    <div class="pull-right width-150">
                        <i class="fa fa-cart-plus fa-4x" style="margin: 8px;"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </a>


  

    
    
    <a href="<?php echo e(URL::to('admin/users')); ?>">
    <div class="col-sm-6 col-md-3">
        <div class="panel panel-primary panel-shadow">
            <div class="media">
                <div class="media-left">
                    <div class="panel-body">
                        <div class="width-100">
                            <h5 class="margin-none" id="graphWeek-y"><?php echo e(trans('messages.Users')); ?></h5>

                            <h2 class="margin-none" id="graphWeek-a">
                                <?php echo e($users); ?>

                            </h2>
                        </div>
                    </div>
                </div>
                <div class="media-body">
                    <div class="pull-right width-150">
                        <i class="fa fa-users fa-4x" style="margin: 8px;"></i>
                    </div>
                </div>
            </div>
        </div>
    </div> 
	</a>
	
	 
</div>
 
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("admin.admin_app", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>