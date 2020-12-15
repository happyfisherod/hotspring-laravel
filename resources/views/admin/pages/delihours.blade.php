@extends("admin.admin_app")

@section("content")
<div id="main">
	<div class="page-header">
		
		<div class="pull-right">
			<a href="{{URL::to('admin/deliveryhours/addhours')}}" class="btn btn-primary">{{ trans('messages.Add Hours')}} <i class="fa fa-plus"></i></a>
		</div>
		<h2>{{ trans('messages.Delivery Hours')}}</h2>
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
         
        <table id="tbl_delhour" class="table table-striped table-hover dt-responsive" cellspacing="0" width="100%">
            <thead>
	            <tr>
					<th hidden></th>
	                <th>{{ trans('messages.Day') }}</th>
					<th>{{ trans('messages.From') }}</th>
					<th>{{ trans('messages.To') }}</th>
	                <th class="text-center width-100">{{ trans('messages.Action')}}</th>
	            </tr>
            </thead>

            <tbody>
            @foreach($delihours as $i => $hour)
         	   <tr>
				<td hidden >{{ $hour->dayindex }}</td>
                <td>{{ $hour->strday }}</td>
                <td>{{ substr($hour->fromtime, 0, 5) }}</td>
				<td>{{ substr($hour->endtime, 0, 5) }}</td>
                <td class="text-center">
                    <a href="{{ url('admin/deliveryhours/edithours/'.$hour->id) }}" class="btn btn-default btn-rounded"><i class="md md-edit"></i></a>
                    <a href="{{ url('admin/deliveryhours/delete/'.$hour->id) }}" class="btn btn-default btn-rounded" onclick="return confirm('Are you sure? You will not be able to recover this.')"><i class="md md-delete"></i></a>
                </td>
                
            </td>
                
            </tr>
           @endforeach
             
            </tbody>
        </table>

		<script type="text/javascript">
            $(document).ready(function() {
            
                $('#tbl_delhour').dataTable({
                    "order": false
                });

            } );
        </script>

    </div>
    <div class="clearfix"></div>
</div>

</div>


@endsection