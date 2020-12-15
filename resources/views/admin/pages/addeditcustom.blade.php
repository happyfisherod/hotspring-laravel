@extends("admin.admin_app")

@section("content")
<style type="text/css">
    #map {
        height: 500px;
      }
</style>
<div id="main">
	<div class="page-header">
        <!-- <div class="pull-right">
            <input id="isedit" type="checkbox" style="width: 30px; height: 30px;"/>
            <span>{{ trans('messages.Edit') }}</span>
        </div> -->
        <h2> {{ trans('messages.My Restaurant') }} </h2>
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
                {!! Form::open(array('url' => array('admin/restaurants/savecustom'),'class'=>'form-horizontal padding-15','name'=>'category_form','id'=>'category_form','role'=>'form','enctype' => 'multipart/form-data')) !!} 
                <input type="hidden" name="id" value="{{ isset($restaurant->id) ? $restaurant->id : null }}">
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">{{ trans('messages.Restaurant Type')}}</label>
                    <div class="col-sm-9">
                        <select id="basic" name="restaurant_type" class="selectpicker show-tick form-control">
                            <option value="">{{ trans('messages.Select Type')}}</option>
                            
                            @foreach($types as $i => $type)    
                                @if(isset($restaurant->restaurant_type) && $restaurant->restaurant_type==$type->id)  
                                    <option value="{{$type->id}}" selected >{{$type->type}}</option>
                                     
                                @else
                                <option value="{{$type->id}}">{{$type->type}}</option> 
                                @endif                          
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">{{ trans('messages.Restaurant Name')}}</label>
                      <div class="col-sm-9">
                        <input type="text" name="restaurant_name" value="{{ isset($restaurant->restaurant_name) ? $restaurant->restaurant_name : null }}" class="form-control">
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">{{ trans('messages.Restaurant Slug')}}</label>
                    <div class="col-sm-9">
                        <input type="text" name="restaurant_slug" value="{{ isset($restaurant->restaurant_slug) ? $restaurant->restaurant_slug : null }}" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">{{ trans('messages.MWST Nr')}}</label>
                    <div class="col-sm-9">
                        <input type="text" name="restaurant_mwst" value="{{ isset($restaurant->mwst) ? $restaurant->mwst : null }}" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">{{ trans('messages.Website Name')}}</label>
                    <div class="col-sm-9">
                        <input type="text" name="restaurant_sitename" value="{{ isset($restaurant->sitename) ? $restaurant->sitename : null }}" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">{{ trans('messages.Address')}}</label>
                    <div class="col-sm-9">
                        <textarea name="restaurant_address" id="restaurant_address" cols="60" rows="3" class="form-control">{{ isset($restaurant->restaurant_address) ? $restaurant->restaurant_address : null }}</textarea>
                        
                        <!-- <input type="text" placeholder="latitude" name="restaurants_latitude" value="{{ isset($restaurant->restaurants_latitude) ? $restaurant->restaurants_latitude : null }}" class="form-control">
                        <input type="text" placeholder="longitude" name="restaurants_longitude" value="{{ isset($restaurant->restaurants_longitude) ? $restaurant->restaurants_longitude : null }}" class="form-control"> -->
                        
                        <br> <br>
                       
                    </div>
                </div>
                <!-- <div class="form-group">
                     <label for="" class="col-sm-3 control-label">{{ trans('messages.Set Marker')}}</label>
                    <div class="col-sm-9">
                         <div id="map"></div>
                    </div>
                </div> -->
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">{{ trans('messages.Shipping Price')}}</label>
                    <div class="col-sm-9">
                        <input name="shipping_price" id="shipping_price" cols="60" rows="3" class="form-control" value="{{ isset($restaurant->delivery_charge) ? $restaurant->delivery_charge : null }}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">{{ trans('messages.Description')}}</label>
                    <div class="col-sm-9">
                        <textarea name="restaurant_description" id="restaurant_description" cols="30" rows="8" class="summernote">{{ isset($restaurant->restaurant_description) ? $restaurant->restaurant_description : null }}</textarea>
                    </div>
                </div>
               
                 <div class="form-group">
                    <label for="avatar" class="col-sm-3 control-label">{{ trans('messages.Restaurant Logo')}}</label>
                    <div class="col-sm-9">
                        <div class="media">
                            <div class="media-left">
                                @if(isset($restaurant->restaurant_logo))
                                 
                                    <img src="{{ URL::asset('upload/restaurants/'.$restaurant->restaurant_logo.'-s.jpg') }}" width="100" alt="person">
                                @endif
                                                                
                            </div>
                            <div class="media-body media-middle">
                                <input type="file" name="restaurant_logo" class="filestyle"> 
                            </div>
                        </div>
    
                    </div>
                </div>
                
                <hr>
                <div class="form-group">
                    <div class="col-md-offset-3 col-sm-9 ">
                        <button type="submit" class="btn btn-primary">Save Restaurant</button>
                    </div>
                </div>
                
                {!! Form::close() !!} 
            </div>
        </div>
   
    
</div>

<script>
      // This example adds a search box to a map, using the Google Place Autocomplete
      // feature. People can enter geographical searches. The search box will return a
      // pick list containing a mix of places and predicted search terms.

      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

      function initAutocomplete() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -33.8688, lng: 151.2195},
          zoom: 13,
          mapTypeId: 'roadmap'
        });

        // Create the search box and link it to the UI element.
        var input = document.getElementById('restaurant_address');
        var searchBox = new google.maps.places.SearchBox(input);
        map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

        // Bias the SearchBox results towards current map's viewport.
        map.addListener('bounds_changed', function() {
          searchBox.setBounds(map.getBounds());
        });

        var markers = [];
        // Listen for the event fired when the user selects a prediction and retrieve
        // more details for that place.
        searchBox.addListener('places_changed', function() {
          var places = searchBox.getPlaces();

          if (places.length == 0) {
            return;
          }

          // Clear out the old markers.
          markers.forEach(function(marker) {
            marker.setMap(null);
          });
          markers = [];

          // For each place, get the icon, name and location.
          var bounds = new google.maps.LatLngBounds();
          places.forEach(function(place) {
            if (!place.geometry) {
              console.log("Returned place contains no geometry");
              return;
            }
            var icon = {
              url: place.icon,
              size: new google.maps.Size(71, 71),
              origin: new google.maps.Point(0, 0),
              anchor: new google.maps.Point(17, 34),
              scaledSize: new google.maps.Size(25, 25)
            };

            // Create a marker for each place.
            markers.push(new google.maps.Marker({
              map: map,
              icon: icon,
              title: place.name,
              position: place.geometry.location
            }));

            var latitude = place.geometry.location.lat();
            var longitude = place.geometry.location.lng();

            document.getElementById("restaurants_latitude").value =latitude;
            document.getElementById("restaurants_longitude").value =latitude;
            if (place.geometry.viewport) {
              // Only geocodes have viewport.
              bounds.union(place.geometry.viewport);
            } else {
              bounds.extend(place.geometry.location);
            }
          });
          map.fitBounds(bounds);
        });
      }

        // $('.panel .panel-body *').attr('disabled', 'disabled');
        // $('#isedit').change(function(){
        //     if(this.checked){
        //         //$('.panel .panel-body *').removeAttr('disabled');
        //         $('#restaurant_description').removeAttr('disabled');
        //     }else{
        //         $('.panel .panel-body *').attr('disabled', 'disabled');
        //     }
        // });

    </script>
   
    
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBF0sgmkPSJzkjsOYI2YcqIPqQ2sditkSo&libraries=places&callback=initAutocomplete"
         async defer></script>

@endsection