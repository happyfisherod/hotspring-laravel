@extends("app")

@section('head_title', 'Login' .' | '.getcong('site_name') )

@section('head_url', Request::url())

@section("content")
 
  <div class="white_for_login">
    <div class="container margin_60">
      <div class="row">
        <div class="col-md-3"> </div>
        <div class="col-md-6">
          <div id="order_process" class="box_style_2">
            <h2 class="inner">{{ trans('Forgot password')}}</h2>
             
              {!! Form::open(array('url' => 'forgotpassword','class'=>'','id'=>'forgotpassword','role'=>'form')) !!} 
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
              <button class="btn btn-submit" type="submit">{{ trans('send email')}}</button>
            {!! Form::close() !!} 
          </div>
        </div>
        <div class="col-md-3"> </div>
      </div>
    </div>
  </div>

@endsection
