@extends("admin.admin_app")

@section("content")
<div id="main">
	<div class="page-header">
		
		
    <h2>{{ trans('messages.Order List')}}</h2>
         
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
         
        <table id="order_data_table" class="table table-striped table-hover dt-responsive" cellspacing="0" width="100%">
            <thead>
            <tr>
            <th>{{ trans('messages.Date')}}</th>
                <th>{{ trans('messages.User Name')}}</th>
                <th>{{ trans('messages.Mobile')}}</th>
                <th>{{ trans('messages.Email')}}</th>
                <th>{{ trans('messages.Address')}}</th>
                <!-- <th>{{ trans('messages.Restaurants')}} </th> -->
                <th>{{ trans('messages.Menu Name')}}</th>
                <th>{{ trans('messages.Quantity')}}</th>
                <th>{{ trans('messages.Item Price')}}</th>
                <th>{{ trans('messages.Total Price')}}</th>
                <th>{{ trans('messages.Delivery Time')}}</th>   
                <th>{{ trans('messages.Type')}}</th>
                <th>{{ trans('messages.Status')}}</th>                  
                <th class="text-center width-100">{{ trans('messages.Action')}}</th>
            </tr>
            </thead>

            <tbody>
            @foreach($order_list as $i => $order)
            <tr>
                <td>{{ date('Y-m-d',$order->created_date)}}</td>    
                <td>{{ \App\User::getUserFullname($order->user_id) }}</td>
                <td>{{ \App\User::getUserInfo($order->user_id)->mobile }}</td>
                <td>{{ \App\User::getUserInfo($order->user_id)->email }}</td>
                <td>{{ \App\User::getUserInfo($order->user_id)->address }}</td>
                <td>{{ $order->item_name }}</td>
                <td>{{ $order->quantity }}</td>
                <td>{{getcong('currency_symbol')}}{{ \App\Menu::getMenunfo($order->item_id)->price }}</td>
                <td>{{getcong('currency_symbol')}}{{ $order->item_price }}</td>
                <td>{{$order->delidate}}&nbsp;&nbsp;{{ $order->delitime }}</td>
                @if($order->kind == 1)
                    <td>{{ trans('messages.Delivery') }}</td>
                @endif
                @if($order->kind == 2)
                    <td>{{ trans('messages.Pick up') }}</td>
                @endif
                <td>{{ $order->status }}</td>
                <td class="text-center">
                <div class="btn-group">
                                <button type="button" class="btn btn-default-dark dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    {{ trans('messages.Actions') }} <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-right" role="menu"> 
                                    <li><a href="{{ url('admin/restaurants/view/'.$order->hotspring_id.'/orderlist/'.$order->id.'/Pending') }}"><i class="md md-lock"></i> Pending</a></li>
                                    <li><a href="{{ url('admin/restaurants/view/'.$order->hotspring_id.'/orderlist/'.$order->id.'/Processing') }}"><i class="md md-loop"></i> Processing</a></li>
                                    <li><a href="{{ url('admin/restaurants/view/'.$order->hotspring_id.'/orderlist/'.$order->id.'/Completed') }}"><i class="md md-done"></i> Completed</a></li>
                                    <li><a href="{{ url('admin/restaurants/view/'.$order->hotspring_id.'/orderlist/'.$order->id.'/Cancel') }}"><i class="md md-cancel"></i> Cancel</a></li>
                                    <li><a href="{{ url('admin/restaurants/view/'.$order->hotspring_id.'/orderlist/'.$order->id) }}"><i class="md md-delete"></i> Delete</a></li>
                                </ul>
                            </div> 
                
            </td>
                
                 
            </tr>
           @endforeach
             
            </tbody>
        </table>
         
        <script type="text/javascript">
            $(document).ready(function() {
            
                $('#order_data_table').dataTable({
                    "order": [[ 0, "desc" ]]
                });

            } );
         </script>

    </div>
    <div class="clearfix"></div>
</div>

</div>

@endsection