@extends("app")

@section('head_title', 'My Orders' .' | '.getcong('site_name') )

@section('head_url', Request::url())

@section("content")
 
<div class="sub-banner" style="background:url({{ URL::asset('upload/'.getcong('page_bg_image')) }}) no-repeat center top;">
    <div class="overlay">
      <div class="container">
        <h1>{{ trans('messages.My Orders') }}</h1>
      </div>
    </div>
  </div>
 
 <div class="white_for_login">
    <div class="margin_60">
      <div class="col-md-12">                
        <div class="box_style_2">
      <h2 class="inner">{{ trans('messages.Order List') }}</h2>
      <table class="table table-striped nomargin">
      <tbody>
        <tr>
        <th>{{ trans('messages.Date') }}</th>
        <th>{{ trans('messages.Restaurant') }}</th>
        <th>{{ trans('messages.Menu Name') }}</th>
        <th>{{ trans('messages.Quantity') }}</th>
        <th>{{ trans('messages.Item Price') }}</th>
        <th>{{ trans('messages.Total Price') }}</th>
        <th>{{ trans('messages.Delivery Type') }}</th>
        <th>{{ trans('messages.Delivery Time') }}</th>
        <th>{{ trans('messages.Status') }}</th>
        <th>{{ trans('messages.Action') }}</th>
         
        </tr>
        @foreach($order_list as $order_item)
                <tr>
                <td>{{date('m-d-Y',$order_item->created_date)}}</td> 
                <td><a href="{{ url('restaurants/'.\App\Restaurants::getRestaurantsInfo($order_item->hotspring_id)->restaurant_slug) }}" class="text-regular">{{ \App\Restaurants::getRestaurantsInfo($order_item->hotspring_id)->restaurant_name }}</a>
                </td> 
                <td>{{$order_item->item_name}} </td>
                <td><strong class="">{{$order_item->quantity}}</strong></td>
                <td><strong class="">{{getcong('currency_symbol')}}{{ \App\Menu::getMenunfo($order_item->item_id)->price }}</strong></td>
                <td><strong class="">{{getcong('currency_symbol')}}{{$order_item->item_price}}</strong></td>
                @if($order_item->kind == 1)
                    <td><strong class="">Delivery</strong></td>
                @endif
                @if($order_item->kind == 2)
                    <td><strong class="">Pick up</strong></td>
                @endif
                <td><strong class="">{{$order_item->delidate}}&nbsp;&nbsp;&nbsp;&nbsp;{{ $order_item->delitime }}</strong></td>
                <td><strong class="">{{$order_item->status}}</strong></td>
                @if($order_item->status!='Cancel' and $order_item->status!='Completed')

                <td><a href="{{URL::to('cancel_order/'.$order_item->id)}}" class=""><strong>{{ trans('messages.Cancel') }}</strong></a></td>
                @else
                 
                @endif
              </tr>
       @endforeach
        
        
         
      </tbody>
      </table>
      <br>
    </div>

      </div>
    </div>
  </div>

  <script>
      function ampmconvert(timestr){
          var hour = timestr.substr(0, 2);
          hour = hour % 12 || 12;
          hour = ('' + 0 + hour).substr(-2);
          var minute = timestr.substr(3, 2);
          var ampm = "AM";
          if(parseInt(hour) > 12)
              ampm = "PM";
          cvTime = hour + ':' + minute + ' ' + ampm;
          return cvTime;
      }
  </script>

@endsection
