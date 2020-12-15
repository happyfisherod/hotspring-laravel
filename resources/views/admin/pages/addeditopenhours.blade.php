@extends("admin.admin_app")

@section("content")

<div id="main">
	<div class="page-header">
		<h2> {{ isset($openhour->id) ? 'Edit: ' : 'Add Hours' }}</h2>
		
		<a href="{{ URL::to('admin/openhours') }}" class="btn btn-default-light btn-xs"><i class="md md-backspace"></i> Back</a>
	  
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
                {!! Form::open(array('url' => array('admin/openhours/addhours'),'class'=>'form-horizontal padding-15','name'=>'type_form','id'=>'type_form','role'=>'form','enctype' => 'multipart/form-data')) !!} 
                <input type="hidden" name="id" value="{{ isset($openhour->id) ? $openhour->id : null }}">
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">{{ trans('messages.Day') }}</label>
                    <div class="col-sm-9">
                        <select class="form-control" name="dayindex" id="dayindex">
                            <option value=""></option>
                            <option value="1">Monday</option>
                            <option value="2">Tuesday</option>
                            <option value="3">Wednesday</option>
                            <option value="4">Thursday</option>
                            <option value="5">Friday</option>
                            <option value="6">Saturday</option>
                            <option value="0">Sunday</option>
                        </select>
                    </div>
                </div> 
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">{{ trans('messages.From') }}</label>
                      <div class="col-sm-9">
                        <input type="time" name="fromtime" value="{{ isset($openhour->fromtime) ? $openhour->fromtime : null }}" class="form-control">
                    </div>
                </div> 
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">{{ trans('messages.To') }}</label>
                      <div class="col-sm-9">
                        <input type="time" name="endtime" value="{{ isset($openhour->endtime) ? $openhour->endtime : null }}" class="form-control">
                    </div>
                </div>                 
                <hr>
                <div class="form-group">
                    <div class="col-md-offset-3 col-sm-9 ">
                    	<button type="submit" class="btn btn-primary">{{ isset($openhour->id) ? 'Edit Hour ' : 'Add Hour' }}</button>
                    </div>
                </div>
                
                {!! Form::close() !!} 
            </div>
        </div>
    <script>
        document.getElementById("dayindex").value = {{ isset($openhour->dayindex) ? $openhour->dayindex : null }};
    </script>
</div>

@endsection