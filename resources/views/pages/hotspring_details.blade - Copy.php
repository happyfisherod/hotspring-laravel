@extends("app")

@section('head_title', $hotspring->hotspring_name .' | '.getcong('site_name') )

@section('head_url', Request::url())

@section("content")

 <div class="sub-banner" style="background:url({{ URL::asset('upload/'.getcong('page_bg_image')) }}) no-repeat center top;">
    <div class="overlay">
      <div class="container">
        <div id="sub_content" class="animated zoomIn">
    <div class="col-md-2 col-sm-3">
      <div id="thumb"><img alt="{{$hotspring->hotspring_name}}" src="{{ URL::asset('upload/restaurants/'.$hotspring->hotspring_logo.'-b.jpg') }}"></div>
    </div>  
    <div class="col-md-10 col-sm-9">  
      <h1>{{$hotspring->hotspring_name}}</h1>
      <div class="sub_cont_rt">{{getcong_type($hotspring->hotspring_type)}}</div>
      <div class="sub_cont_lt"><i class="fa fa-map-marker"></i> {{$hotspring->hotspring_address}}</div>
      <div class="rating"> 
        @for($x = 0; $x < 5; $x++)
                  
              @if($x < $hotspring->review_avg)
                <i class="fa fa-star"></i>
              @else
                <i class="fa fa-star fa fa-star-o"></i>
              @endif
             
              @endfor
              (<small><a href="#0">Read {{$total_review}} Reviews</a></small>)

        
      </div>
      </div>
    </div>
      </div>
    </div>
  </div>

 

<div class="hotspring_list_detail">
    <div class="container">
      <div class="row"> 
        <div class="col-md-9 col-sm-7 col-xs-12">         
      <div class="box_style_2">
              <h2 class="inner">Description</h2>
              <span class="detail_con_text">{!!$hotspring->hotspring_description!!}</span>
              <div id="summary_review">
                <div id="general_rating"> {{$total_review}} Reviews
                  <div class="rating"> 
                    @for($x = 0; $x < 5; $x++)
                  
                    @if($x < $hotspring->review_avg)
                      <i class="fa fa-star"></i>
                    @else
                      <i class="fa fa-star fa fa-star-o"></i>
                    @endif
                   
                    @endfor
                  </div>
                </div>
                <div id="rating_summary" class="row">
                  <div class="col-md-6">
                    <ul>
                      <li>Food Quality
                        <div class="rating"> 
                          @for($x = 0; $x < 5; $x++)
                  
                          @if($x < DB::table('hotspring_review')->where('hotspring_id', $hotspring->id)->avg('food_quality'))
                            <i class="fa fa-star"></i>
                          @else
                            <i class="fa fa-star fa fa-star-o"></i>
                          @endif
                         
                          @endfor 
                        </div>
                      </li>
                      <li>Price
                        <div class="rating"> 
                          @for($x = 0; $x < 5; $x++)
                  
                          @if($x < DB::table('hotspring_review')->where('hotspring_id', $hotspring->id)->avg('price'))
                            <i class="fa fa-star"></i>
                          @else
                            <i class="fa fa-star fa fa-star-o"></i>
                          @endif
                         
                          @endfor 
                        </div>
                      </li>
                    </ul>
                  </div>
                  <div class="col-md-6">
                    <ul>
                      <li>Punctuality
                        <div class="rating"> 
                           @for($x = 0; $x < 5; $x++)
                  
                          @if($x < DB::table('hotspring_review')->where('hotspring_id', $hotspring->id)->avg('punctuality'))
                            <i class="fa fa-star"></i>
                          @else
                            <i class="fa fa-star fa fa-star-o"></i>
                          @endif
                         
                          @endfor  
                        </div>
                      </li>
                      <li>Courtesy
                        <div class="rating"> 
                           @for($x = 0; $x < 5; $x++)
                  
                          @if($x < DB::table('hotspring_review')->where('hotspring_id', $hotspring->id)->avg('courtesy'))
                            <i class="fa fa-star"></i>
                          @else
                            <i class="fa fa-star fa fa-star-o"></i>
                          @endif
                         
                          @endfor
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
                <hr class="styled">
              
                 @if(Auth::check() and \App\Review::checkUserReview(Auth::id(),$hotspring->id)=='')
            
              <a href="#" class="btn_1 add_bottom_15" data-toggle="modal" data-target="#myReview">
            Leave a review</a>
            
            @elseif(\App\Review::checkUserReview(Auth::id(),$hotspring->id)!='')

              <a href="#0" class="btn_1 add_bottom_15">
            Already reviewed</a>

            @else

               <a href="{{ URL::to('login')}}" class="btn_1 add_bottom_15">
            Leave a review</a> 
            @endif

                
              </div>
               @foreach($reviews as $i => $review)
        <div class="review_strip_single"> <img src="{{ URL::asset('site_assets/img/male-icon.png') }}" alt="" class="img-circle"> <small> - {{date('d F Y',$review->date)}} -</small>
          <h4>{{ \App\User::getUserFullname($review->user_id) }} </h4>
          <p> {{$review->review_text}} </p>
          <div class="row">
            <div class="col-md-3">
              <div class="rating"> 
                  @for($x = 0; $x < 5; $x++)
                  
                  @if($x < $review->food_quality)
                    <i class="fa fa-star"></i>
                  @else
                    <i class="fa fa-star fa fa-star-o"></i>
                  @endif
                 
                  @endfor
              </div>
              Food Quality 
            </div>
            <div class="col-md-3">
              <div class="rating"> 
                @for($x = 0; $x < 5; $x++)
                  
                  @if($x < $review->price)
                    <i class="fa fa-star"></i>
                  @else
                    <i class="fa fa-star fa fa-star-o"></i>
                  @endif
                 
                  @endfor
              </div>
              Price 
            </div>
            <div class="col-md-3">
              <div class="rating"> 
               @for($x = 0; $x < 5; $x++)
                  
                  @if($x < $review->punctuality)
                    <i class="fa fa-star"></i>
                  @else
                    <i class="fa fa-star fa fa-star-o"></i>
                  @endif
                 
                  @endfor 
              </div>
              Punctuality 
            </div>
            <div class="col-md-3">
              <div class="rating"> 
                @for($x = 0; $x < 5; $x++)
                  
                  @if($x < $review->courtesy)
                    <i class="fa fa-star"></i>
                  @else
                    <i class="fa fa-star fa fa-star-o"></i>
                  @endif
                 
                  @endfor
              </div>
              Courtesy 
            </div>
          </div>
          <!-- End row --> 
        </div>
        <!-- End review strip -->
        @endforeach
      
      @include('_particles.pagination', ['paginator' => $reviews]) 
        
            </div>
           </div>
        <div class="col-md-3 col-sm-5 col-xs-12 side-bar">   
    <div class="box_style_2 sidebar_time_list">
          <h4 class="nomargin_top">Opening time <i class="fa fa-clock-o pull-right"></i></h4>
          <ul class="opening_list">
          <?php $loopindex = -1; $ary_sunday = array();?>
          @foreach(\App\Openhour::orderBy('dayindex')->get() as $n=>$openhour)
            @if($openhour->dayindex == 0)
                <?php array_push($ary_sunday, $openhour); ?>
            @else
                <li>
                @if($loopindex == $openhour->dayindex)
                    &nbsp;
                @else
                    @if($openhour->dayindex == 0)
                        Sunday
                    @elseif ($openhour->dayindex == 1)
                        Monday
                    @elseif($openhour->dayindex == 2)
                        Tuesday
                    @elseif($openhour->dayindex == 3)
                        Wednesday
                    @elseif($openhour->dayindex == 4)
                        Tursday
                    @elseif($openhour->dayindex == 5)
                        Friday
                    @elseif($openhour->dayindex == 6)
                        Saturday
                    @endif
                @endif
                <?php $loopindex = $openhour->dayindex ?>
                <span>{{substr($openhour->fromtime, 0, 5)}} ~ {{substr($openhour->endtime, 0, 5)}}</span></li>
            @endif
          @endforeach
          @foreach($ary_sunday as $i=>$sunday)
            <li>
                @if($i == 0)
                    Sunday
                @else
                    &nbsp;
                @endif
                <span>{{substr($sunday->fromtime, 0, 5)}} ~ {{substr($sunday->endtime, 0, 5)}}</span></li>
          @endforeach
          </ul>
        </div>                                                                   
           
      <div id="help" class="box_style_2"> 
          <i class="fa fa-life-bouy"></i>
          <h4>{{getcong_widgets('need_help_title')}}</h4>
          <a href="tel://{{getcong_widgets('need_help_phone')}}" class="phone">{{getcong_widgets('need_help_phone')}}</a>
          
          @foreach(\App\Openhour::where('dayindex', date('w'))->orderBy('fromtime')->get() as $n=>$openhour)
            <div><small>{{substr($openhour->fromtime, 0, 5)}} ~ {{ substr($openhour->endtime,0,5) }}</small></div>
           @endforeach
      </div>
        </div>
      </div>
    </div>
  </div>


<!-- Register modal -->
<div class="modal fade" id="myReview" tabindex="-1" role="dialog" aria-labelledby="review" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content modal-popup"> <a href="#" class="close-link"><i class="fa fa-times-circle-o"></i></a>
      
        {!! Form::open(array('url' => 'hotspring/'.$hotspring->hotspring_slug.'/hotspring_review','class'=>'popup-form','name'=>'review','id'=>'review','role'=>'form')) !!} 
        <div class="login_icon"><i class="fa fa-comments-o"></i></div>
        <input name="hotspring_id" id="hotspring_id" type="hidden" value="{{$hotspring->id}}">
          
        <div class="row">
          <div class="col-md-6">
            <select class="form-control form-white" name="food_quality" id="food_quality" required>
              <option value="">Food Quality</option>
              <option value="1">Low</option>
              <option value="2">Sufficient</option>
              <option value="3">Good</option>
              <option value="4">Excellent</option>
              <option value="5">Super</option>
              
            </select>
          </div>
          <div class="col-md-6">
            <select class="form-control form-white"  name="price" id="price" required>
              <option value="">Price</option>
              <option value="1">Low</option>
              <option value="2">Sufficient</option>
              <option value="3">Good</option>
              <option value="4">Excellent</option>
              <option value="5">Super</option>
              
            </select>
          </div>
        </div>
        <!--End Row -->
        
        <div class="row">
          <div class="col-md-6">
            <select class="form-control form-white"  name="punctuality" id="punctuality" required>
              <option value="">Punctuality</option>
              <option value="1">Low</option>
              <option value="2">Sufficient</option>
              <option value="3">Good</option>
              <option value="4">Excellent</option>
              <option value="5">Super</option>
              
            </select>
          </div>
          <div class="col-md-6">
            <select class="form-control form-white"  name="courtesy" id="courtesy" required>
              <option value="">Courtesy</option>
              <option value="1">Low</option>
              <option value="2">Sufficient</option>
              <option value="3">Good</option>
              <option value="4">Excellent</option>
              <option value="5">Super</option>
              
            </select>
          </div>
        </div>
        <!--End Row -->
        <textarea name="review_text" id="review_text" class="form-control form-white" style="height:100px" placeholder="Write your review"></textarea>
        
        <input type="submit" value="Submit" class="review_btn-submit" id="submit-review">
      {!! Form::close() !!} 
      <div id="message-review"></div>
    </div>
  </div>
</div>
<!-- End Register modal --> 


@endsection
