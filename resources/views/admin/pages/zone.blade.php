@extends("admin.admin_app")

@section("content")
<div id="main">
	<div class="page-header">
		
		<div class="pull-right">
			<a href="{{URL::to('admin/deliveryzone/addzone')}}" class="btn btn-primary">{{ trans('messages.Add Zone')}} <i class="fa fa-plus"></i></a>
		</div>
		<h2>{{ trans('messages.Delivery Zone')}}</h2>
	</div>
	@if(Session::has('flash_message'))
				    <div class="alert alert-success">
				    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span></button>
				        {{ Session::get('flash_message') }}
				    </div>
	@endif
     
<div class="panel panel-default panel-shadow">
    <div class="panel-body">
         
        <table id="data-table" class="table table-striped table-hover dt-responsive" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th>{{ trans('messages.Post Code') }}</th>
                <th>{{ trans('messages.City') }}</th>
                <th>{{ trans('messages.Minumum order Amount') }}</th>
                <th class="text-center width-100">{{ trans('messages.Action')}}</th>
            </tr>
            </thead>

            <tbody>
                @foreach($zonelist as $i => $zone)
                <tr>
                    <td>{{ $zone->postcode }}</td> 
                    <td>{{ $zone->city }}</td>
                    <td>{{ $zone->amount }}</td>                 
                    <td class="text-center">
                    <a href="{{ url('admin/deliveryzone/editzone/'.$zone->id) }}" class="btn btn-default btn-rounded"><i class="md md-edit"></i></a>
                    <a href="{{ url('admin/deliveryzone/delete/'.$zone->id) }}" class="btn btn-default btn-rounded" onclick="return confirm('Are you sure? You will not be able to recover this.')"><i class="md md-delete"></i></a>
                </td>
                    
                </tr>
                 @endforeach
            </tbody>
        </table>
         
    </div>
    <div class="clearfix"></div>
</div>

</div>

@endsection