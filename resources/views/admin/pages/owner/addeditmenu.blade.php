@extends("admin.admin_app")
<style>
    .custom-control-label {
        font-weight: 500;
    }
</style>
@section("content")

<div id="main">
	<div class="page-header">
		<h2> {{ isset($menu->name) ? 'Edit: '. $menu->name : 'Add Menu' }}</h2>
		
		<a href="{{ URL::to('admin/menu') }}" class="btn btn-default-light btn-xs"><i class="md md-backspace"></i> Back</a>
	  
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
                {!! Form::open(array('url' => array('admin/menu/addmenu'),'class'=>'form-horizontal padding-15','name'=>'menu_form','id'=>'menu_form','role'=>'form','enctype' => 'multipart/form-data')) !!} 
                
                <input type="hidden" name="hotspring_id" value="{{$hotspring_id}}">
                <input type="hidden" name="id" value="{{ isset($menu->id) ? $menu->id : null }}">
                
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label">温泉名</label>
                            <div class="col-sm-9">
                                <input type="text" name="name" value="{{ isset($menu->name) ? $menu->name : null }}" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label">ホームページ</label>
                            <div class="col-sm-9">
                                <input type="text" name="urlname" value="{{ isset($menu->urlname) ? $menu->urlname : null }}" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label">料金</label>
                            <div class="col-sm-9">
                                <div class="row" style="display: flex; align-items: center;"><span class="col-xs-2">大人 </span><input class="col-xs-9" style="max-width: 100px;" id="" data-toggle="touch-spin" data-min="-1000000" data-max="1000000" data-prefix="$" data-step="1" type="text" value="{{ isset($menu->grownprice)? $menu->grownprice : null }}" name="grownprice" /><span class="col-xs-1">円</span></div>
                                <div class="row" style="display: flex; align-items: center;"><span class="col-xs-2">中人 </span><input class="col-xs-9" style="max-width: 100px;" id="" data-toggle="touch-spin" data-min="-1000000" data-max="1000000" data-prefix="$" data-step="1" type="text" value="{{ isset($menu->youngprice)? $menu->youngprice : null }}" name="youngprice" /><span class="col-xs-1">円</span></div>
                                <div class="row" style="display: flex; align-items: center;"><span class="col-xs-2">小人 </span><input class="col-xs-9" style="max-width: 100px;" id="" data-toggle="touch-spin" data-min="-1000000" data-max="1000000" data-prefix="$" data-step="1" type="text" value="{{ isset($menu->childprice)? $menu->childprice : null }}" name="childprice" /><span class="col-xs-1">円</span></div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label">営業時間</label>
                            <div class="col-sm-9" style="display:flex; align-items:center;">
                                <input type="time" class="form-control" name="openhour" value="{{ isset($menu->openhour) ? $menu->openhour : null }}" >
                                <span style="margin: 0 20px;">~</span>
                                <input type="time" class="form-control" name="closehour" value="{{ isset($menu->closehour) ? $menu->closehour : null }}" >
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label">営業時間</label>
                            <div class="col-sm-4">
                                <select id="basic" name="dayindex" class="selectpicker show-tick form-control">
                                    <option value="1">Monday</option>
                                    <option value="2">Tuesday</option>
                                    <option value="3">Wednesday</option>
                                    <option value="4">Thirsday</option>
                                    <option value="5">Friday</option>
                                    <option value="6">Saturday</option>
                                    <option value="7">Sunday</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label">住所</label>
                            <div class="col-sm-9">
                                <input type="text" name="streetaddress" value="{{ isset($menu->streetaddress) ? $menu->streetaddress : null }}" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label">電話番号</label>
                            <div class="col-sm-9">
                                <input type="text" name="phonenumber" value="{{ isset($menu->phonenumber) ? $menu->phonenumber : null }}" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label">都道府県</label>
                            <div class="col-sm-4">
                                <select id="basic" name="prefecture" class="selectpicker show-tick form-control">
                                    <option value="">秋田</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label">宿泊</label>
                            <div class="col-sm-9">
                                <input type="text" name="lodging" value="{{ isset($menu->lodging) ? $menu->lodging : null }}" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label">市町村</label>
                            <div class="col-sm-9">
                                <input type="text" name="municipality" value="{{ isset($menu->municipality) ? $menu->municipality : null }}" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="col-md-offset-1 col-sm-9">
                            <div style="display: flex; justify-content: flex-end; margin-bottom: 20px;">
                                <button type="submit" class="btn btn-info">セーブ</button>
                            </div>

                            <div class="form-group">
                                <div id="map" style="width:97%; height:300px;">
                            </div>

                            <div class="row" style="margin-top:20px;">
                                <div class="col-md-offset-2 col-sm-12 ">温泉の特徴</div>
                                <div class="col-xs-3"></div>
                                <div class="col-xs-4">
                                    <div class="custom-control custom-checkbox checkbox-lg">
                                        <input type="checkbox" class="custom-control-input" id="fea_openair" name="fea_openair">
                                        <label class="custom-control-label" for="fea_openair">露天風呂</label>
                                    </div>
                                    <div class="custom-control custom-checkbox checkbox-lg">
                                        <input type="checkbox" class="custom-control-input" id="fea_towelrental" name="fea_towelrental">
                                        <label class="custom-control-label" for="fea_towelrental">タオル（レンタル）</label>
                                    </div>
                                    <div class="custom-control custom-checkbox checkbox-lg">
                                        <input type="checkbox" class="custom-control-input" id="fea_bedrock" name="fea_bedrock">
                                        <label class="custom-control-label" for="fea_bedrock">岩盤浴</label>
                                    </div>
                                    <div class="custom-control custom-checkbox checkbox-lg">
                                        <input type="checkbox" class="custom-control-input" id="fea_family" name="fea_family">
                                        <label class="custom-control-label" for="fea_family">家族風呂</label>
                                    </div>
                                    <div class="custom-control custom-checkbox checkbox-lg">
                                        <input type="checkbox" class="custom-control-input" id="fea_massage" name="fea_massage">
                                        <label class="custom-control-label" for="fea_massage">マッサージ</label>
                                    </div>
                                    <div class="custom-control custom-checkbox checkbox-lg">
                                        <input type="checkbox" class="custom-control-input" id="fea_rinse" name="fea_rinse">
                                        <label class="custom-control-label" for="fea_rinse">リンス</label>
                                    </div>
                                    <div class="custom-control custom-checkbox checkbox-lg">
                                        <input type="checkbox" class="custom-control-input" id="fea_amenity" name="fea_amenity">
                                        <label class="custom-control-label" for="fea_amenity">アメニティ</label>
                                    </div>
                                    <div class="custom-control custom-checkbox checkbox-lg">
                                        <input type="checkbox" class="custom-control-input" id="fea_parkinglot" name="fea_parkinglot">
                                        <label class="custom-control-label" for="fea_parkinglot">駐車場</label>
                                    </div>
                                </div>
                                <div class="col-xs-3">
                                    <div class="custom-control custom-checkbox checkbox-lg">
                                        <input type="checkbox" class="custom-control-input" id="fea_sauna" name="fea_sauna">
                                        <label class="custom-control-label" for="fea_sauna">サウナ</label>
                                    </div>
                                    <div class="custom-control custom-checkbox checkbox-lg">
                                        <input type="checkbox" class="custom-control-input" id="fea_towelpurchas" name="fea_towelpurchas">
                                        <label class="custom-control-label" for="fea_towelpurchas">タオル（購入）</label>
                                    </div>
                                    <div class="custom-control custom-checkbox checkbox-lg">
                                        <input type="checkbox" class="custom-control-input" id="fea_private" name="fea_private">
                                        <label class="custom-control-label" for="fea_private">貸切風呂</label>
                                    </div>
                                    <div class="custom-control custom-checkbox checkbox-lg">
                                        <input type="checkbox" class="custom-control-input" id="fea_restaurant" name="fea_restaurant">
                                        <label class="custom-control-label" for="fea_restaurant">食事処</label>
                                    </div>
                                    <div class="custom-control custom-checkbox checkbox-lg">
                                        <input type="checkbox" class="custom-control-input" id="fea_shampoo" name="fea_shampoo">
                                        <label class="custom-control-label" for="fea_shampoo">シャンプー</label>
                                    </div>
                                    <div class="custom-control custom-checkbox checkbox-lg">
                                        <input type="checkbox" class="custom-control-input" id="fea_bodysoap" name="fea_bodysoap">
                                        <label class="custom-control-label" for="fea_bodysoap">ボディソープ</label>
                                    </div>
                                    <div class="custom-control custom-checkbox checkbox-lg">
                                        <input type="checkbox" class="custom-control-input" id="fea_restarea" name="fea_restarea">
                                        <label class="custom-control-label" for="fea_restarea">休憩所</label>
                                    </div>
                                </div>
                                <div class="col-xs-2"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="form-group">
                        <label for="avatar" class="col-sm-3 control-label">紹介画像に</label>
                        <div class="col-sm-9">
                            <div class="media">
                                <div class="media-left">
                                    @if(isset($menu->image))
                                        <img src="{{ URL::asset('upload/menu/'.$menu->image.'-s.jpg') }}" width="180" alt="person">
                                    @endif
                                                                    
                                </div>
                                <div class="media-body media-middle">
                                    <input type="file" name="menu_image" class="filestyle"> 
                                </div>
                            </div>
                        </div>
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

    @if(isset($menu->fea_openair))
        @if($menu->fea_openair)
            $('#fea_openair').attr('checked', 'checked');
        @endif
    @endif
    @if(isset($menu->fea_towelrental))
        @if($menu->fea_towelrental)
            $('#fea_towelrental').attr('checked', 'checked');
        @endif
    @endif
    @if(isset($menu->fea_bedrock))
        @if($menu->fea_bedrock)
            $('#fea_bedrock').attr('checked', 'checked');
        @endif
    @endif
    @if(isset($menu->fea_family))
        @if($menu->fea_family)
            $('#fea_family').attr('checked', 'checked');
        @endif
    @endif
    @if(isset($menu->fea_massage))
        @if($menu->fea_massage)
            $('#fea_massage').attr('checked', 'checked');
        @endif
    @endif
    @if(isset($menu->fea_rinse))
        @if($menu->fea_rinse)
            $('#fea_rinse').attr('checked', 'checked');
        @endif
    @endif
    @if(isset($menu->fea_amenity))
        @if($menu->fea_amenity)
            $('#fea_amenity').attr('checked', 'checked');
        @endif
    @endif
    @if(isset($menu->fea_parkinglot))
        @if($menu->fea_parkinglot)
            $('#fea_parkinglot').attr('checked', 'checked');
        @endif
    @endif
    @if(isset($menu->fea_sauna))
        @if($menu->fea_sauna)
            $('#fea_sauna').attr('checked', 'checked');
        @endif
    @endif
    @if(isset($menu->fea_towelpurchas))
        @if($menu->fea_towelpurchas)
            $('#fea_towelpurchas').attr('checked', 'checked');
        @endif
    @endif
    @if(isset($menu->fea_private))
        @if($menu->fea_private)
            $('#fea_private').attr('checked', 'checked');
        @endif
    @endif
    @if(isset($menu->fea_restaurant))
        @if($menu->fea_restaurant)
            $('#fea_restaurant').attr('checked', 'checked');
        @endif
    @endif
    @if(isset($menu->fea_shampoo))
        @if($menu->fea_shampoo)
            $('#fea_shampoo').attr('checked', 'checked');
        @endif
    @endif
    @if(isset($menu->fea_bodysoap))
        @if($menu->fea_bodysoap)
            $('#fea_bodysoap').attr('checked', 'checked');
        @endif
    @endif
    @if(isset($menu->fea_restarea))
        @if($menu->fea_restarea)
            $('#fea_restarea').attr('checked', 'checked');
        @endif
    @endif

</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBF0sgmkPSJzkjsOYI2YcqIPqQ2sditkSo&libraries=places&callback=initAutocomplete"
         async defer></script>
@endsection