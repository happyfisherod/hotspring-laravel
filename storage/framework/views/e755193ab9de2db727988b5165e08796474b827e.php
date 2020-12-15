<!-- Sidebar Left -->
  <div class="sidebar left-side" id="sidebar-left">
	 
	<!-- Wrapper Reqired by Nicescroll (start scroll from here) -->
	<div class="nicescroll">
		<div class="wrapper" style="margin-bottom:90px">
			<ul class="nav nav-sidebar" id="sidebar-menu">
               
                	<?php if(Auth::user()->usertype=='Admin'): ?>
               
               		<li class="<?php echo e(classActivePath('dashboard')); ?>"><a href="<?php echo e(URL::to('admin/dashboard')); ?>"><i class="fa fa-dashboard"></i><?php echo e(trans('messages.Dashboard')); ?></a></li>

	                <li class="<?php echo e(classActivePath('widgets')); ?>"><a href="<?php echo e(URL::to('admin/widgets')); ?>"><i class="fa fa-plus"></i><?php echo e(trans('messages.Widgets')); ?></a></li>
	                
	                <li class="<?php echo e(classActivePath('settings')); ?>"><a href="<?php echo e(URL::to('admin/settings')); ?>"><i class="md md-settings"></i><?php echo e(trans('messages.Settings')); ?></a></li>
               	
					<li class="<?php echo e(classActivePath('categories')); ?>"><a href="<?php echo e(URL::to('admin/categories')); ?>"><i class="fa fa-folder"></i><?php echo e(trans('messages.Categories')); ?></a></li>
					<li class="<?php echo e(classActivePath('menu')); ?>"><a href="<?php echo e(URL::to('admin/menu')); ?>"><i class="fa fa-folder"></i><?php echo e(trans('messages.Host Spring List')); ?></a></li>
               	 <?php else: ?>

               	 	<li class="<?php echo e(classActivePath('dashboard')); ?>"><a href="<?php echo e(URL::to('admin/dashboard')); ?>"><i class="fa fa-dashboard"></i><?php echo e(trans('messages.Dashboard')); ?></a></li>
                
               	 
               		<li class="<?php echo e(classActivePath('restaurants')); ?>"><a href="<?php echo e(URL::to('admin/myrestaurants')); ?>"><i class="fa fa-cutlery"></i><?php echo e(trans('messages.My Restaurants')); ?></a></li>

               		<li class="<?php echo e(classActivePath('categories')); ?>"><a href="<?php echo e(URL::to('admin/categories')); ?>"><i class="fa fa-folder"></i><?php echo e(trans('messages.Categories')); ?></a></li>

               		<li class="<?php echo e(classActivePath('menu')); ?>"><a href="<?php echo e(URL::to('admin/menu')); ?>"><i class="fa fa-folder"></i><?php echo e(trans('messages.Menu')); ?></a></li>

               		<li class="<?php echo e(classActivePath('orderlist')); ?>"><a href="<?php echo e(URL::to('admin/orderlist')); ?>"><i class="fa fa-cart-plus"></i><?php echo e(trans('messages.Order List')); ?></a></li>

					   <li class="<?php echo e(classActivePath('chatlist')); ?>"><a href="<?php echo e(URL::to('admin/chatlist')); ?>"><i class="fa fa-cart-plus"></i><?php echo e(trans('messages.Messages')); ?></a></li>

               		<li class="<?php echo e(classActivePath('reviews')); ?>"><a href="<?php echo e(URL::to('admin/reviews')); ?>"><i class="md-rate-review"></i><?php echo e(trans('messages.revision')); ?></a></li>
	                 

               	 <?php endif; ?>	
               		 
 
			</ul>

			 
		</div>
	</div>
</div>
  <!-- // Sidebar -->

  <!-- Sidebar Right -->
  <div class="sidebar right-side" id="sidebar-right">
	<!-- Wrapper Reqired by Nicescroll -->
	<div class="nicescroll">
		<div class="wrapper">
			<div class="block-primary">
				<div class="media">
					<div class="media-left media-middle">
						<a href="#">
							 <?php if(Auth::user()->image_icon): ?>
                                 
									<img src="<?php echo e(URL::asset('upload/members/'.Auth::user()->image_icon.'-s.jpg')); ?>" width="60" alt="person" class="img-circle border-white">
							
							<?php else: ?>
								
							<img src="<?php echo e(URL::asset('admin_assets/images/guy.jpg')); ?>" alt="person" class="img-circle border-white" width="60"/>
							
							<?php endif; ?>
						</a>
					</div>
					<div class="media-body media-middle">
						<a href="<?php echo e(URL::to('admin/profile')); ?>" class="h4"><?php echo e(Auth::user()->first_name); ?> <?php echo e(Auth::user()->last_name); ?></a>
						<a href="<?php echo e(URL::to('admin/logout')); ?>" class="logout pull-right"><i class="md md-exit-to-app"></i></a>
					</div>
				</div>
			</div>
			<ul class="nav nav-sidebar" id="sidebar-menu">
				<li><a href="<?php echo e(URL::to('admin/profile')); ?>"><i class="md md-person-outline"></i> Account</a></li>				 
				
				<?php if(Auth::user()->usertype=='Admin'): ?>
				
				<li><a href="<?php echo e(URL::to('admin/settings')); ?>"><i class="md md-settings"></i> Settings</a></li>
				
				<?php endif; ?>
				
				<li><a href="<?php echo e(URL::to('admin/logout')); ?>"><i class="md md-exit-to-app"></i> Logout</a></li>
			</ul>
		</div>
	</div>
</div>
  <!-- // Sidebar -->
