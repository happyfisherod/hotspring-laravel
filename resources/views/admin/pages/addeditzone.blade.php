@extends("admin.admin_app")

@section("content")

<div id="main">
	<div class="page-header">
		<h2> {{ isset($zone->city) ? 'Edit: '. $zone->city : 'Add Zone' }}</h2>
		
		<a href="{{ URL::to('admin/deliveryzone') }}" class="btn btn-default-light btn-xs"><i class="md md-backspace"></i> Back</a>
	  
	</div>
	@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
	@endif
	 @if(Session::has('flash_message'))
				    <div class="alert alert-success">
				    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        
<span aria-hidden="true">&times;</span></button>
				        {{ Session::get('flash_message') }}
				    </div>
	@endif
   
   	<div class="panel panel-default">
            <div class="panel-body">
                {!! Form::open(array('url' => array('admin/deliveryzone/addzone'),'class'=>'form-horizontal padding-15','name'=>'type_form','id'=>'type_form','role'=>'form','enctype' => 'multipart/form-data')) !!} 
                <input type="hidden" name="id" value="{{ isset($zone->id) ? $zone->id : null }}">
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">{{ trans('messages.Post Code') }}</label>
                      <div class="col-sm-9">
                        <input type="text" name="postcode" value="{{ isset($zone->postcode) ? $zone->postcode : null }}" class="form-control">
                    </div>
                </div> 
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">{{ trans('messages.City') }}</label>
                      <div class="col-sm-9">
                        <input type="text" name="city" value="{{ isset($zone->city) ? $zone->city : null }}" class="form-control">
                    </div>
                </div> 
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">{{ trans('messages.Minumum order Amount') }}</label>
                      <div class="col-sm-9">
                        <input type="text" name="amount" value="{{ isset($zone->amount) ? $zone->amount : null }}" class="form-control">
                    </div>
                </div>                 
                <hr>
                <div class="form-group">
                    <div class="col-md-offset-3 col-sm-9 ">
                    	<button type="submit" class="btn btn-primary">{{ isset($zone->id) ? 'Edit Zone ' : 'Add Zone' }}</button>
                    </div>
                </div>
                
                {!! Form::close() !!} 
            </div>
        </div>
   
    
</div>

@endsection