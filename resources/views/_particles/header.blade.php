  <!-- <div class="top-bar">
    <div class="container">
      <ul class="left-bar-side">
        <li><p><i class="fa fa-phone"></i><a>{{getcong('phone')}}</a></p></li>
      </ul>
      <ul class="right-bar-side social_icons">
         <li class="facebook"><a href="{{getcong_widgets('social_facebook')}}" target="_blank"><i class="fa fa-facebook"></i></a></li>
            <li><a href="{{getcong_widgets('social_twitter')}}" target="_blank"><i class="fa fa-twitter"></i></a></li>
            <li><a href="{{getcong_widgets('social_google')}}" target="_blank"><i class="fa fa-google"></i></a></li>
            <li><a href="{{getcong_widgets('social_instagram')}}" target="_blank"><i class="fa fa-instagram"></i></a></li>
            <li><a href="{{getcong_widgets('social_pinterest')}}" target="_blank"><i class="fa fa-pinterest"></i></a></li>
            <li><a href="{{getcong_widgets('social_vimeo')}}" target="_blank"><i class="fa fa-vimeo"></i></a></li>
            <li><a href="{{getcong_widgets('social_youtube')}}" target="_blank"><i class="fa fa-youtube-play"></i></a></li>
      </ul>
    </div>
  </div> -->
  <header class="sticky">
    <div class="container">
      <div class="site-logo"> <a href="{{ URL::to('/') }}"><img src="{{ URL::asset('upload/'.getcong('site_logo')) }}" alt="" ></a> </div>
      <nav class="animenu">
      <button class="animenu_toggle"> 
         <span class="animenu_toggle_bar"></span> 
         <span class="animenu_toggle_bar"></span> 
         <span class="animenu_toggle_bar"></span> 
      </button>
      <ul class="animenu_nav">                             
            <!-- <li> <a href="{{ URL::to('/') }}">{{ trans('messages.Home')}} </a></li>
            <li><a href="{{URL::to('hotspring')}}">{{ trans('messages.HotSpring')}}</a></li> -->

            @if(Auth::check() and Auth::user()->usertype=='User')
             <li> <a href="javascript:void(0);">{{ trans('messages.My Account')}}<i class="icon-down-open-mini"></i></a>
              <ul class="animenu_nav_child">
                <li><a href="{{ URL::to('profile') }}">{{ trans('messages.Edit Profile')}}</a></li>
                <li><a href="{{ URL::to('change_pass') }}">{{ trans('messages.Change Password')}}</a></li>
                <!-- <li><a href="{{URL::to('myorder')}}">{{ trans('messages.My Order')}}</a></li> -->
                <li><a href="{{ URL::to('logout') }}">{{ trans('messages.Logout')}}</a></li>                
              </ul>            
            </li>
            <li><img src="{{ URL::asset('upload/members/admin-965bf2e0f3108983112bb705d2db4304-s.jpg') }}" width="40" alt="person" class="img-circle"></li>
            <li> <p style="font-size: 20px;font-weight: 700;font-style: normal;text-decoration: none;font-family: 'Segoe UI';color: rgb(204, 0, 153);">あやね</p></li>
            <li> <a href="{{ URL::to('/') }}"><img src="{{ URL::asset('assets/frontend/layout/img/icons/home.png') }}" alt="" ></a></li>
            @elseif(Auth::check() and Auth::user()->usertype=='Owner')
            <li> <a href="{{ URL::to('/') }}">使用説明書</a></li>
            <li> <a href="{{ URL::to('/') }}">FAQ</a></li>
            <li> <a href="javascript:void(0);">{{ trans('messages.My Account')}}<i class="icon-down-open-mini"></i></a>
              <ul class="animenu_nav_child">
                <li><a href="{{ URL::to('admin/dashboard') }}">{{ trans('messages.Dashboard')}}</a></li>
                <li><a href="{{ URL::to('logout') }}">{{ trans('messages.Logout')}}</a></li>                
              </ul>
            </li>
            @elseif(Auth::check() and Auth::user()->usertype=='Admin')
            <li> <a href="{{ URL::to('/') }}">使用説明書</a></li>
            <li> <a href="{{ URL::to('/') }}">FAQ</a></li>
            <li> <a href="javascript:void(0);">{{ trans('messages.My Account')}}<i class="icon-down-open-mini"></i></a>
              <ul class="animenu_nav_child">
                <li><a href="{{ URL::to('admin/dashboard') }}">{{ trans('messages.Dashboard')}}</a></li>
                <li><a href="{{ URL::to('logout') }}">{{ trans('messages.Logout')}}</a></li>                
              </ul>
            </li>              
            @else
 
            <!-- <li><a href="{{ URL::to('login') }}">{{ trans('messages.Login')}}</a></li>
            <li><a href="{{ URL::to('register') }}">{{ trans('messages.Register')}}</a></li> -->
            <li> <a href="{{ URL::to('/') }}">使用説明書</a></li>
            <li> <a href="{{ URL::to('/') }}">FAQ</a></li>
            <li><a href="{{ URL::to('login') }}">ログイン</a></li>
            <li><a href="{{ URL::to('register') }}">サインアップ</a></li>

            @endif

            <!-- <li><a href="{{ URL::to('about') }}">{{ trans('messages.About us')}}</a></li>
            <li><a href="{{ URL::to('contact') }}">{{ trans('messages.Contact')}}</a></li>         -->

            <!-- <li> <a href="javascript:void(0);">Language<i class="icon-down-open-mini"></i></a>
              <ul class="animenu_nav_child">
              <li><a href="{{ URL::to('language/jp') }}" ><i class="fa fa-language"></i> Japanese</a></li>
              <li><a href="{{ URL::to('language/ge') }}" ><i class="fa fa-language"></i> German</a></li>
              <li><a href="{{  URL::to('language/en') }}" ><i class="fa fa-language"></i> English</a></li>
              <li><a href="{{ URL::to('language/it') }}" ><i class="fa fa-language"></i> Italian</a></li>
              </ul>
            </li>       -->
          </ul>

         
       
       
    </nav>



   
                   
                



    </div>
  </header>
   