@extends("app")

@section('head_title', 'Login' .' | '.getcong('site_name') )

@section('head_url', Request::url())

@section("content")
<link href="{{asset('assets/frontend/layout/css/style.css')}}" rel="stylesheet">
  <div class="white_for_login" style="margin-top: 120px;">
    <div class="container margin_60">
      <div class="row">
        <div class="col-md-3"> </div>
        <div class="col-md-6">
          <div id="order_process" class="box_style_2">
            <h2 class="inner">{{ trans('messages.Login')}}</h2>             
              {!! Form::open(array('url' => 'login','class'=>'','id'=>'login','role'=>'form')) !!} 
              <div class="message">                         
                @if (count($errors) > 0)
                    <div class="alert alert-danger">                    
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                    </div>
                @endif                                    
              </div>
              @if(Session::has('flash_message'))

                <div class="alert alert-success fade in">
                    
                  {{ Session::get('flash_message') }}
                </div>

                  
              @endif              
              <div class="form-group">
                <label>{{ trans('messages.Your email')}}</label>
                <input type="email" placeholder="{{ trans('messages.Your email')}}" class="form-control" value="" name="email" id="email">
              </div>
              <div class="form-group">
                <label>{{ trans('messages.Password')}}</label>
                <input type="password" placeholder="{{ trans('messages.Password')}}" class="form-control" value="" name="password" id="password">
              </div>
              <div>
                  <a href="{{URL::to('forgotpassword')}}" style="color:blue; padding:3px;">Forgot Password</a>
              </div>
              <button class="btn btn-submit" type="submit">{{ trans('messages.Login')}}</button>
            {!! Form::close() !!} 
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
        <h4 class="modal-title" style="color:#fff;">{{ trans('messages.Opening Info')}}</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
          <div class="" style="padding: 20px;">
              <label sytle="color:red">{{ trans('messages.We are now closed')}}</label>
          </div>
      </div>
    </div>
  </div>
</div>

<script>
    @if(!$openinfo)
        $('#openinfo').modal("show");
    @endif
</script>

@endsection
