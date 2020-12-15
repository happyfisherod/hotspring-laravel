  <!-- <div class="top-bar">
    <div class="container">
      <ul class="left-bar-side">
        <li><p><i class="fa fa-phone"></i><a><?php echo e(getcong('phone')); ?></a></p></li>
      </ul>
      <ul class="right-bar-side social_icons">
         <li class="facebook"><a href="<?php echo e(getcong_widgets('social_facebook')); ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
            <li><a href="<?php echo e(getcong_widgets('social_twitter')); ?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
            <li><a href="<?php echo e(getcong_widgets('social_google')); ?>" target="_blank"><i class="fa fa-google"></i></a></li>
            <li><a href="<?php echo e(getcong_widgets('social_instagram')); ?>" target="_blank"><i class="fa fa-instagram"></i></a></li>
            <li><a href="<?php echo e(getcong_widgets('social_pinterest')); ?>" target="_blank"><i class="fa fa-pinterest"></i></a></li>
            <li><a href="<?php echo e(getcong_widgets('social_vimeo')); ?>" target="_blank"><i class="fa fa-vimeo"></i></a></li>
            <li><a href="<?php echo e(getcong_widgets('social_youtube')); ?>" target="_blank"><i class="fa fa-youtube-play"></i></a></li>
      </ul>
    </div>
  </div> -->
  <header class="sticky">
    <div class="container">
      <div class="site-logo"> <a href="<?php echo e(URL::to('/')); ?>"><img src="<?php echo e(URL::asset('upload/'.getcong('site_logo'))); ?>" alt="" ></a> </div>
      <nav class="animenu">
      <button class="animenu_toggle"> 
         <span class="animenu_toggle_bar"></span> 
         <span class="animenu_toggle_bar"></span> 
         <span class="animenu_toggle_bar"></span> 
      </button>
      <ul class="animenu_nav">                             
            <!-- <li> <a href="<?php echo e(URL::to('/')); ?>"><?php echo e(trans('messages.Home')); ?> </a></li>
            <li><a href="<?php echo e(URL::to('hotspring')); ?>"><?php echo e(trans('messages.HotSpring')); ?></a></li> -->

            <?php if(Auth::check() and Auth::user()->usertype=='User'): ?>
             <li> <a href="javascript:void(0);"><?php echo e(trans('messages.My Account')); ?><i class="icon-down-open-mini"></i></a>
              <ul class="animenu_nav_child">
                <li><a href="<?php echo e(URL::to('profile')); ?>"><?php echo e(trans('messages.Edit Profile')); ?></a></li>
                <li><a href="<?php echo e(URL::to('change_pass')); ?>"><?php echo e(trans('messages.Change Password')); ?></a></li>
                <!-- <li><a href="<?php echo e(URL::to('myorder')); ?>"><?php echo e(trans('messages.My Order')); ?></a></li> -->
                <li><a href="<?php echo e(URL::to('logout')); ?>"><?php echo e(trans('messages.Logout')); ?></a></li>                
              </ul>            
            </li>
            <li><img src="<?php echo e(URL::asset('upload/members/admin-965bf2e0f3108983112bb705d2db4304-s.jpg')); ?>" width="40" alt="person" class="img-circle"></li>
            <li> <p style="font-size: 20px;font-weight: 700;font-style: normal;text-decoration: none;font-family: 'Segoe UI';color: rgb(204, 0, 153);">あやね</p></li>
            <li> <a href="<?php echo e(URL::to('/')); ?>"><img src="<?php echo e(URL::asset('assets/frontend/layout/img/icons/home.png')); ?>" alt="" ></a></li>
            <?php elseif(Auth::check() and Auth::user()->usertype=='Owner'): ?>
            <li> <a href="<?php echo e(URL::to('/')); ?>">使用説明書</a></li>
            <li> <a href="<?php echo e(URL::to('/')); ?>">FAQ</a></li>
            <li> <a href="javascript:void(0);"><?php echo e(trans('messages.My Account')); ?><i class="icon-down-open-mini"></i></a>
              <ul class="animenu_nav_child">
                <li><a href="<?php echo e(URL::to('admin/dashboard')); ?>"><?php echo e(trans('messages.Dashboard')); ?></a></li>
                <li><a href="<?php echo e(URL::to('logout')); ?>"><?php echo e(trans('messages.Logout')); ?></a></li>                
              </ul>
            </li>
            <?php elseif(Auth::check() and Auth::user()->usertype=='Admin'): ?>
            <li> <a href="<?php echo e(URL::to('/')); ?>">使用説明書</a></li>
            <li> <a href="<?php echo e(URL::to('/')); ?>">FAQ</a></li>
            <li> <a href="javascript:void(0);"><?php echo e(trans('messages.My Account')); ?><i class="icon-down-open-mini"></i></a>
              <ul class="animenu_nav_child">
                <li><a href="<?php echo e(URL::to('admin/dashboard')); ?>"><?php echo e(trans('messages.Dashboard')); ?></a></li>
                <li><a href="<?php echo e(URL::to('logout')); ?>"><?php echo e(trans('messages.Logout')); ?></a></li>                
              </ul>
            </li>              
            <?php else: ?>
 
            <!-- <li><a href="<?php echo e(URL::to('login')); ?>"><?php echo e(trans('messages.Login')); ?></a></li>
            <li><a href="<?php echo e(URL::to('register')); ?>"><?php echo e(trans('messages.Register')); ?></a></li> -->
            <li> <a href="<?php echo e(URL::to('/')); ?>">使用説明書</a></li>
            <li> <a href="<?php echo e(URL::to('/')); ?>">FAQ</a></li>
            <li><a href="<?php echo e(URL::to('login')); ?>">ログイン</a></li>
            <li><a href="<?php echo e(URL::to('register')); ?>">サインアップ</a></li>

            <?php endif; ?>

            <!-- <li><a href="<?php echo e(URL::to('about')); ?>"><?php echo e(trans('messages.About us')); ?></a></li>
            <li><a href="<?php echo e(URL::to('contact')); ?>"><?php echo e(trans('messages.Contact')); ?></a></li>         -->

            <!-- <li> <a href="javascript:void(0);">Language<i class="icon-down-open-mini"></i></a>
              <ul class="animenu_nav_child">
              <li><a href="<?php echo e(URL::to('language/jp')); ?>" ><i class="fa fa-language"></i> Japanese</a></li>
              <li><a href="<?php echo e(URL::to('language/ge')); ?>" ><i class="fa fa-language"></i> German</a></li>
              <li><a href="<?php echo e(URL::to('language/en')); ?>" ><i class="fa fa-language"></i> English</a></li>
              <li><a href="<?php echo e(URL::to('language/it')); ?>" ><i class="fa fa-language"></i> Italian</a></li>
              </ul>
            </li>       -->
          </ul>

         
       
       
    </nav>



   
                   
                



    </div>
  </header>
   