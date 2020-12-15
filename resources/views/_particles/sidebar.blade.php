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
<div class="col-md-3 col-sm-5 col-xs-12 side-bar">   
        
      <div id="cart_box">
      <h3>{{ trans('messages.Your order')}} <i class="fa fa-shopping-cart pull-right"></i></h3>
      <table class="table table_summary">
      <tbody>
      </tbody>
      </table>  
      @foreach(\App\Cart::where('user_id',Auth::id())->orderBy('id')->get() as $n=>$cart_item)
            <table class="table table_summary">
              <tbody>
              <tr>
                <td><a href="{{URL::to('delete_item/'.$cart_item->id)}}" class="remove_item"><i class="fa fa-minus-circle"></i></a> <strong>{{$cart_item->quantity}}x</strong> {{$cart_item->item_name}} </td>
                <td><strong class="pull-right">{{getcong('currency_symbol')}}{{$cart_item->item_price}}</strong></td>
              </tr>
             </tbody>
            </table> 
      @endforeach    
        
      <hr>
      @if(DB::table('cart')->where('user_id', Auth::id())->sum('item_price')>0)
      <table class="table table_summary">
        <tbody>
        <tr>
          <td class="total"> {{ trans('messages.TOTAL')}} <span class="pull-right">{{getcong('currency_symbol')}}{{$price = DB::table('cart')
                ->where('user_id', Auth::id())
                ->sum('item_price')}}</span></td>
        </tr>
        </tbody>
      </table>
      <hr>
          <a class="btn_full" href="{{URL::to('order_details')}}">{{ trans('messages.Order now')}}</a>  
          @else
            <a class="btn_full" href="#0">{{ trans('messages.Empty Cart')}}</a>  
          @endif
    </div>  
    
    <div id="cart_box" class="categories">
      <h3>Categories</h3>
        
      <ul>
        <li>
          <label><a href="{{URL::to('hotspring/')}}">All</a></label>
        </li>

        @foreach(\App\Categories::where('hotspring_id',$hotspring->id)->get() as $cat)
        <li>
          <label><a href="{{URL::to('hotspring/menu/'.$cat->id)}}">{{$cat->category_name}}</a></label>
        </li>
        @endforeach
        
      </ul>
    </div>  
           
      <div id="help" class="box_style_2"> 
        <i class="fa fa-life-bouy"></i>
        <h4>{{getcong_widgets('need_help_title')}}</h4>
        <a href="tel://{{getcong('phone')}}" class="phone">{{getcong('phone')}}</a>
        
        @foreach(\App\Openhour::where('dayindex', date('w'))->orderBy('fromtime')->get() as $n=>$openhour)
            <div><small>{{substr($openhour->fromtime, 0, 5)}} ~ {{ substr($openhour->endtime,0,5) }}</small></div>
        @endforeach
      </div>
</div>