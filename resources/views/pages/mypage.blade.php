@extends("app")

@section("styles")
    <!-- Global styles START -->         
    <link href="{{asset('assets/global/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/global/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- Global styles END --> 
    
    <!-- Page level plugin styles START -->
    <link href="{{asset('assets/global/plugins/fancybox/source/jquery.fancybox.css')}}" rel="stylesheet">
    <link href="{{asset('assets/global/plugins/carousel-owl-carousel/owl-carousel/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{asset('assets/global/plugins/slider-layer-slider/css/layerslider.css')}}" rel="stylesheet">
    <!-- Page level plugin styles END -->

    <!-- Theme styles START -->
    <link href="{{asset('assets/global/css/components.css')}}" rel="stylesheet">
    <link href="{{asset('assets/frontend/layout/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/frontend/pages/css/style-shop.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/frontend/pages/css/style-layer-slider.css')}}" rel="stylesheet">
    <link href="{{asset('assets/frontend/layout/css/style-responsive.css')}}" rel="stylesheet">
    <link href="{{asset('assets/frontend/layout/css/themes/blue.css')}}" rel="stylesheet" id="style-color">
    <link href="{{asset('assets/frontend/layout/css/custom.css')}}" rel="stylesheet">
    <!-- Theme styles END -->
    <link rel="stylesheet" href="{{asset('assets/frontend/layout/css/custom/plan.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/layout/css/custom/jquery.bxslider.css')}}">
@endsection

@section("content")

<!-- <div class="color-panel">
    <div class="color-mode-icons icon-color"></div>
    <div class="color-mode-icons icon-color-close"></div>
    <div class="color-mode">
        <p>THEME COLOR</p>
        <ul class="inline">
          <li class="color-red current color-default" data-style="red"></li>
          <li class="color-blue" data-style="blue"></li>
          <li class="color-green" data-style="green"></li>
          <li class="color-orange" data-style="orange"></li>
          <li class="color-gray" data-style="gray"></li>
          <li class="color-turquoise" data-style="turquoise"></li>
        </ul>
    </div>
</div> -->

@include("_particles.mypage_slider") 

<!-- Content ================================================== --> 
<!--menu part-->               
<div class="steps-block margin-bottom-20" style="padding:0%;">
    <div id="mainpart" class="container"></div>
</div>
<!-- END STEPS -->         
<!-- BEGIN STEPS -->   
<div class="row plan_div">
  <div class="container">
    <div class="col-md-1"></div>
    <div class="col-md-10">
    <div class="plan">
      <div class="start">
        <div class="gld">
          <p>無料プラン</p>
        </div>
        <p class="PlanText"><i class="fa fa-check-circle-o" aria-hidden="true"></i> 無料</p>
        <p class="PlanText"><i class="fa fa-check-circle-o" aria-hidden="true"></i> 都度課金で入浴回数券のみ利用可能利用可能</p>
        <p class="PlanText"><i class="fa fa-check-circle-o" aria-hidden="true"></i> 各施設の利用日時・曜日に準ずる</p>
        <p class="PlanText"><i class="fa fa-check-circle-o" aria-hidden="true"></i> お試し・初心者向け</p>
        <p class="PlanText"><i class="fa fa-check-circle-o" aria-hidden="true"></i> お試し・初心者向け</p>
        <p class="PlanText"><i class="fa fa-check-circle-o" aria-hidden="true"></i> お試し・初心者向け</p>
        <p class="PlanText" id="detail">
          <i class="fa fa-check-circle-o" aria-hidden="true"></i> お得に温泉・スーパー銭湯に入りたい<br>
          <i class="fa fa-check-circle-o" aria-hidden="true"></i> キャッシュレスで利用したい
        </p>
        
        <div class="Planbox Planbox--free">
          <a href="">
            登録はこちら
          </a>
        </div>
      </div>
      <div class="start light-plan">
        <div class="gld"><p>ライトプラン</p></div>
        <p class="PlanText"><i class="fa fa-check-circle-o" aria-hidden="true"></i> 980円<span> / 月（税抜）</span></p>
        <p class="PlanText"><i class="fa fa-check-circle-o" aria-hidden="true"></i> 月2度まで利用可能</p>
        <p class="PlanText"><i class="fa fa-check-circle-o" aria-hidden="true"></i> 各施設の利用日時・曜日に準ずる</p>
        <p class="PlanText"><i class="fa fa-check-circle-o" aria-hidden="true"></i> お試し・初心者向け</p>
        <p class="PlanText" id="detail">
        <i class="fa fa-check-circle-o" aria-hidden="true"></i> 色々な温泉・スーパー銭湯を使ってみたい<br>
        <i class="fa fa-check-circle-o" aria-hidden="true"></i> お得に温泉・スーパー銭湯に入りたい<br>
        <i class="fa fa-check-circle-o" aria-hidden="true"></i> たまにお風呂に浸かりたい
        </p>
        <p class="PlanText"><i class="fa fa-check-circle-o" aria-hidden="true"></i> 会員登録1ヶ月目より解約可能</p>
        <p class="PlanText">
          <i class="fa fa-check-circle-o" aria-hidden="true"></i> 同施設1日1回利用上限あり
        </p>
        <div class="Planbox Planbox--recommened">
          <a href="order_details">
            登録はこちら
          </a>
        </div>
      </div>
      <div class="start middle">
        <div class="gld"><p>ミドルプラン</p></div>
        <p class="PlanText"><i class="fa fa-check-circle-o" aria-hidden="true"></i> 3,980円<span> / 月（税抜）</span></p>
        <p class="PlanText"><i class="fa fa-check-circle-o" aria-hidden="true"></i> 月同施設5度まで利用可能</p>
        <p class="PlanText"><i class="fa fa-check-circle-o" aria-hidden="true"></i> 各施設の利用日時・曜日に準ずる</p>
        <p class="PlanText"><i class="fa fa-check-circle-o" aria-hidden="true"></i> コアユーザー向け</p>
        <p class="PlanText" id="detail">
        <i class="fa fa-check-circle-o" aria-hidden="true"></i> お得に温泉・スーパー銭湯に入りたい<br>
        <i class="fa fa-check-circle-o" aria-hidden="true"></i> 仕事先・出張先で利用したい<br>
        <i class="fa fa-check-circle-o" aria-hidden="true"></i> 温泉・スーパー銭湯巡りをしたい
        </p>
        <p class="PlanText">
        <i class="fa fa-check-circle-o" aria-hidden="true"></i> 会員登録1ヶ月目より解約可能
        </p>
        <p class="PlanText">
          <i class="fa fa-check-circle-o" aria-hidden="true"></i> 同施設1日1回利用上限あり
        </p>
        <div class="Planbox">
          <a href="">
          登録はこちら
          </a>
        </div>
      </div>
    </div>
    </div>
   
    <div class="col-md-1"></div>
  </div>
</div> 
<div class="row plan_div">
  <div class="container">
    <div class="row text-left" style="margin-left:10%;"><label style="font-size:20px;">私について</label></div>
    <div class="row text-center">
      <textarea style="width:80%; height:300px;" type="text" id="feedback" placeholder="ここにフィードバックを残してください" name="feedback"></textarea></div>
    </div>
  </div>
</div> 
<div id="contact" class="container">
  <div class="col-md-1"></div>
  <div class="col-md-10">
    <h3 class="text-center" id="title">お問い合わせ</h3>
    <p class="text-center" id="comment">ご不明な点がございましたら、いつでもご連絡ください。</p>
    <div class="row">
      <div class="col-md-4">
        <div id="email">
          <p class="text-center"><span class="glyphicon glyphicon-envelope"></span></p>
          <p class="text-center">メールを送ってください</p>
          <p class="text-center">abcdef@abc.com</p>
        </div>
        <div id="phone">
          <p class="text-center"><span class="glyphicon glyphicon-phone"></span></p>
          <p class="text-center">私に電話してください</p>
          <p class="text-center">+0 123456789</p>              
        </div>
      </div>
      <div class="col-md-8" id="panel"> 
        <div class="row" >
          <div class="col-sm-6 form-group">
            <input class="form-control" id="name" name="name" placeholder="あなたの名前" type="text" required="">
          </div>
          <div class="col-sm-6 form-group">
            <input class="form-control" id="email" name="email" placeholder="あなたのメール" type="email" required="">
          </div>
        </div>
        <input class="form-control" id="subject" name="subject" placeholder="主題" type="text" required="">
        <br>
        <textarea class="form-control" id="comments" name="comments" placeholder="メッセージ" rows="5"></textarea>
        <br>
        <div class="row">
          <div class="col-md-12 form-group">
            <button class="btn center-block" type="submit" id="send">送る</button>
          </div>
        </div>
      </div>
    </div> 
  </div>
  <div class="col-md-1"></div>
 
</div>      
<!-- END NEW hotspring -->          
<!-- End Content =============================================== --> 

    <div id="userinfo-part" hidden>
        <div class="row">
          <div class="col-md-3">
            <div class="row">
              <p class="userinfo-title">プロフィール</p>
            </div>
            <div calss="row" style="padding-top:15px;">
              <img class="user-photo" src="{{asset('assets/frontend/pages/img/hotspring/6A06AA58C7FEC2C5916B28670459D46C.jpg')}}">
              <p>画像サイズは（250 * 250）から（450 * 450）の間でなければなりません。</p>
            </div>
          </div>
          <div class="col-md-9">
            <div class="row">
              <div class="col-md-12 text-right">
                <button type="button" class="btn btn-default profilebtn" onclick="javascript:showSearch()">セーブ</button>
                <a class="btn btn-default profilebtn" href="#saveModal">編集</a>
                <a class="btn btn-default profilebtn" href="#openModal">アカウントを削除</a>
              </div>
            </div>
            <div class="row" style="padding-top:25px;">
              <div class="col-md-3 text-right">
                <p class="profile-label">氏名</p>
              </div>
              <div class="col-md-9">
                <div class="row">
                  <div class="col-md-6">
                    <label class="fileEdit">(姓)
                      <input type="text" name="name" class="profile-input name" id="name" value="{{$user->first_name}}">
                    </label>
                  </div>
                  <div class="col-md-6">
                    <label class="fileEdit">(姓)
                      <input type="text" name="name" class="profile-input name" id="name" value="{{$user->last_name}}">
                    </label>
                  </div>
                </div>
              </div>
            </div>
            <div class="row" style="padding-top:25px;">
              <div class="col-md-3 text-right">
                <p class="profile-label">性別</p>
              </div>
              <div class="col-md-9">
                <label class="fileRadio">
                  <input style="color:black;" type="radio" name="name" id="name" checked>男性
                </label>
                <label class="fileRadio">
                  <input type="radio" name="name" id="name">女性
                </label>
              </div>
            </div>
            <div class="row" style="padding-top:25px;">
              <div class="col-md-3 text-right">
                <p class="profile-label">お誕生日</p>
              </div>
              <div class="col-md-9">
                <input type="date" class="profile-input datepicker" style="width:40%;" value="2020-05-05" id="birthday" name="birthday">
              </div>
            </div>

            <div class="row" style="padding-top:25px;">
              <div class="col-md-3 text-right">
                <p class="profile-label">住所</p>
              </div>
              <div class="col-md-9">
                <input type="text" name="address" class="profile-input" id="address" value="{{$user->address}}">
                <p class="input-help">128文字以内 (あと100文字入力可)</p>
              </div>
            </div>
            <div class="row" style="padding-top:25px;">
              <div class="col-md-3 text-right">
                <p class="profile-label">電話番号</p>
              </div>
              <div class="col-md-9">
                <input type="phone-number" style="width:40%;" name="mobile" class="profile-input" id="mobile" value="{{$user->address}}">
                <p class="input-help">法人の場合のみ必須 半角数字10〜11桁（−を含めない）</p>
              </div>
            </div>
            <div class="row" style="padding-top:25px;">
              <div class="col-md-3 text-right">
                <p class="profile-label">メールアドレス</p>
              </div>
              <div class="col-md-9">
                <input type="text" style="width:60%;" name="email" class="profile-input" id="email" value="{{$user->email}}">
              </div>
            </div>
            <div class="row" style="padding-top:25px;">
              <div class="col-md-3 text-right">
                <p class="profile-label">登録日</p>
              </div>
              <div class="col-md-9">
                <input type="text" style="width:40%;" name="created_at" class="profile-input" id="created_at" value="{{$user->created_at}}">
              </div>
            </div>
            <div class="row" style="padding-top:25px;">
              <div class="col-md-3 text-right">
                <p class="profile-label">決済方法接続</p>
              </div>
              <div class="col-md-9">
                <label class="filelink">
                  <img width="30px" height="30px" src="{{asset('assets/frontend/layout/img/icons/link.png')}}">接続された支払い
                </label>
                <label class="filelink">
                  <img width="30px" height="30px" src="{{asset('assets/frontend/layout/img/icons/unlink.png')}}">切断された支払い
                </label>
              </div>
            </div>
          </div>
        </div>
    </div>

    <div id="review-part" hidden>>
      <div class="row">
        <div class="row margin-bottom-40">
        <img style="float:left;width:30px; margin-left:100px;" src="{{asset('assets/frontend/layout/img/icons/usersearch.png')}}" alt="">
        <p class="new-part-content" style="font-size:2em; float: left;">&nbsp;&nbsp; あなたがフィードバックを与えようとする温泉を選択します。</p>
        </div>       
      </div>
      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
          <div class="col-md-12">
            <div class="col-md-6">
              <div class="row">
                <input type="checkbox" name="お気に入りリスト" id="selectrange"> <label class="new_title_left" for="selectrange">お気に入りリスト</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="checkbox" name="全リスト" id="selectall"> <label class="new_title_left" for="selectall">全リスト</label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="col-md-12">
                <div class="col-md-3">
                  <label class="new_title_left" for="prefecture">地域</label>
                </div>
                <div class="col-md-9">
                  <select id="prefecture" class="form-control" style="margin-top:15px;">
                    <option  value="1">都道府県1</option>
                    <option  value="2">都道府県2</option>
                    <option  value="2">都道府県3</option>
                    <option  value="2">都道府県4</option>
                  </select>
                </div>        
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="col-md-4">
              <div class="product-item"> 
                <div class="col-md-7">
                  <div class="row">
                    <i class="fa fa-heart" style="font-size:32px;color:pink"></i>
                    <h3><a href="shop-item.html">秋田温泉さとみ</a></h3>
                  </div>             
                </div>
                <div class="col-md-5">
                  <div class="row">
                    <div style="color:black; font-size:16px;">450</div>
                    <div class="row" style="float:left;">
                      <a href="javascript:;" class="btn btn-default add2cart" ><img src="{{asset('assets/frontend/pages/img/hotspring/star.png')}}"  alt=""> </a>
                    </div>
                  </div>
                </div>
                <a href="{{ URL::to('feedback/Japan Star Hot Spring') }}">
                  <img src="{{asset('assets/frontend/pages/img/hotspring/s_list2.jpg')}}" class="img-responsive" alt="">
                </a>
              </div>
            </div>
            <div class="col-md-4">
            <div class="product-item"> 
                <div class="col-md-7">
                  <div class="row">
                    <i class="fa fa-heart-o" style="font-size:32px;color:pink"></i>
                    <h3><a href="shop-item.html">貝の沢温泉</a></h3>
                  </div>             
                </div>
                <div class="col-md-5">
                  <div class="row">
                    <div style="color:black; font-size:16px;">390</div>
                    <div class="row" style="float:left;">
                      <a href="javascript:;" class="btn btn-default add2cart"><img src="{{asset('assets/frontend/pages/img/hotspring/star.png')}}"  alt=""> </a>
                    </div>
                  </div>
                </div>
                <a href="{{ URL::to('feedback/Japan Star Hot Spring') }}">
                  <img src="{{asset('assets/frontend/pages/img/hotspring/s_list3.jpg')}}" class="img-responsive" alt="">
                </a>
                <!-- <div class="pi-img-wrapper" onclick="window.location.href = 'view/2000/review';">
                  <img src="{{asset('assets/frontend/pages/img/hotspring/s_list3.jpg')}}" class="img-responsive" alt="">
                  <div>
                    <a href="{{asset('assets/frontend/pages/img/hotspring/s_list3.jpg')}}" class="btn btn-default fancybox-button">Zoom</a>
                    
                  </div>
                </div> -->
              </div>
            </div>
            <div class="col-md-4">
            <div class="product-item"> 
                <div class="col-md-7">
                  <div class="row">
                    <i class="fa fa-heart" style="font-size:32px;color:pink"></i>
                    <h3><a href="shop-item.html">天然温泉ホテルこまち</a></h3>
                  </div>             
                </div>
                <div class="col-md-5">
                  <div class="row">
                    <div style="color:black; font-size:16px;">390</div>
                    <div class="row" style="float:left;">
                      <a href="javascript:;" class="btn btn-default add2cart"><img src="{{asset('assets/frontend/pages/img/hotspring/star.png')}}"  alt=""> </a>
                    </div>
                  </div>
                </div>
                <a href="{{ URL::to('hotspring/Japan Star Hot Spring/hotspring_review') }}">
                  <img src="{{asset('assets/frontend/pages/img/hotspring/s_list4.jpg')}}" class="img-responsive" alt="">
                </a>
                <!-- <div class="pi-img-wrapper" onclick="window.location.href = 'view/2000/review';">
                  <img src="{{asset('assets/frontend/pages/img/hotspring/s_list4.jpg')}}" class="img-responsive" alt="">
                  <div>
                    <a href="{{asset('assets/frontend/pages/img/hotspring/s_list4.jpg')}}" class="btn btn-default fancybox-button">Zoom</a>
                    
                  </div>
                </div> -->
              </div>              
            </div>
          </div>        
        </div>
        <div class="col-md-1"></div>        
      </div>
    </div>

    <div id="search-part" hidden>
      <div class="row margin-bottom-40">
      <img style="float:left;width:30px; margin-left:100px;" src="{{asset('assets/frontend/layout/img/icons/usersearch.png')}}" alt="">
        <p class="new-part-content" style="font-size:2em; float: left; margin-left:20px;"> 温泉を検索して選択してください</p>
      </div>
      <div class="row" style="background-color:#00EDFF;">
        <div class="col-md-1"></div>
        <div class="col-md-10">
          <div class="col-md-3">  
            <div class="row">
              <input type="checkbox" name="お気に入りリスト" id="selectrange"> <label class="new_title_left" for="selectrange">お気に入りリスト</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="checkbox" name="全リスト" id="selectall"> <label class="new_title_left" for="selectall">全リスト</label>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="col-md-3">
                  <label class="new_title_left" for="prefecture">地域</label>
                </div>
                <div class="col-md-9">
                  <select id="prefecture" class="form-control" style="margin-top:15px;">
                    <option  value="1">都道府県1</option>
                    <option  value="2">都道府県2</option>
                    <option  value="2">都道府県3</option>
                    <option  value="2">都道府県4</option>
                  </select>
                </div>           
              </div>
            </div>
            <br> 
            <div class="row">
              <p class="new-part-content">
                    ランキング範囲</p><br>
              <input type="range" min="0" max="665544" style="margin-left: 10px;"><br>            
              <div class="col-md-6" style="float:left">  <p>0</p>
              </div>
              <div class="col-md-6">
                <p  style="float:right;">665544</p>
              </div>             
            </div>
            <p class="new-part-content">ランキング順</p><br>
            <div class="row" style="color:black;">
              <input type="radio" style="margin-left: 20px;" name="ranking">上-下（ランキング）
              <input type="radio" style="margin-left: 20px;" name="ranking">下-上（ランキング）     
            </div>
          </div>
          <div class="col-md-2">
          </div> 
          <div class="col-md-7">
            <div class="row">
              <div class="col-md-10">
                <div class="col-md-12 option_div" style="background-color: #00EDFF; border-color:#00EDFF">
                  <div class="row" >
                    <div class="col-md-6 checkbox-list" style="color:black;">
                      <label>
                        <input type="checkbox" id="fea_openair" > 露天風呂
                      </label>
                      <label>
                        <input type="checkbox" id="fea_towelrental"> タオル（レンタル）
                      </label>
                      <label>
                        <input type="checkbox" id="fea_bedrock"> 岩盤浴
                      </label>
                      <label>
                        <input type="checkbox" id="fea_family"> 家族風呂
                      </label>
                      <label>
                        <input type="checkbox" id="fea_massage"> マッサージ
                      </label>
                      <label>
                        <input type="checkbox" id="fea_rinse"> リンス
                      </label>
                      <label>
                        <input type="checkbox" id="fea_amenity"> アメニティ
                      </label>
                      <label>
                        <input type="checkbox" id="fea_parkinglot"> 駐車場
                      </label>                     
                    </div>
                    <div class="col-md-6 checkbox-list" style="color:black;">
                      <label>
                        <input type="checkbox" id="fea_sauna"> サウナ
                      </label>
                      <label>
                        <input type="checkbox" id="fea_towelpurchas"> タオル（購入）
                      </label>
                      <label>
                        <input type="checkbox" id="fea_private"> 貸切風呂
                      </label>
                      <label>
                        <input type="checkbox" id="fea_restaurant"> 食事処
                      </label>
                      <label>
                        <input type="checkbox" id="fea_shampoo"> シャンプー
                      </label>
                      <label>
                        <input type="checkbox" id="fea_bodysoap"> ボディソープ
                      </label>
                      <label>
                        <input type="checkbox" id="fea_restarea"> 休憩所
                      </label>                  
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-2">
                <div class="row">
                  <div class="new_title button-item"><br><br><br><br><br>
                    <button id="hhhh" class="btn btn-default add2" onclick="javascript:showSearch()">検索</button>    
                  </div><br>
                </div> 
              </div>                        
            </div>      
          </div>
        </div>
        <div class="col-md-1">
        </div>  
      </div>
      <div class="row margin-bottom-10">
        <div id="product_list" class="row product-list">           
        </div>
      </div>
    </div>

    
<!-- Modal -->
<div id="saveModal" class="modalDialog">
	<div class="modalDlg-main">
    <div style="width: 53px; height: 53px; left: 5px; top: 5px; border: none; position: absolute;">
      <div class="" style="border-style: none; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0); pointer-events: none; position: absolute; font-family: jdIonicons; font-size: 53px; color: rgb(102, 102, 102); text-align: center; line-height: 53px;"></div>
    </div>
    <p class="modaldlg-content text-center">ユーザー情報は今保存されます。</p>
    <a href="#close" title="Close" class="btn btn-default modaldialog-button save">閉じ</a>
	</div>
</div>

<div id="openModal" class="modalDialog">
	<div class="modalDlg-main">
    <div style="width: 53px; height: 53px; left: 5px; top: 5px; border: none; position: absolute;">
    <div class="" style="border-style: none; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0); pointer-events: none; position: absolute; font-family: jdIonicons; font-size: 50px; color: rgb(102, 102, 102); text-align: center; line-height: 50px;"></div>
    </div>
    <p class="modaldlg-content text-center">本当にアカウントを削除しますか？</p>
    <a href="#close" title="Close" class="btn btn-default modaldialog-button cancel">はい</a>
    <a href="#close" title="Close" class="btn btn-default modaldialog-button delete">キャンセル</a>
	</div>
</div>
@endsection

@section('scripts')
        <!-- Load javascripts at bottom, this will reduce page load time -->
    <!-- BEGIN CORE PLUGINS (REQUIRED FOR ALL PAGES) -->
    <!--[if lt IE 9]>
    <script src="{{asset('assets/global/plugins/respond.min.js')}}"></script>  
    <![endif]-->
    <script src="{{asset('assets/global/plugins/jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/global/plugins/jquery-migrate.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/global/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>      
    <script src="{{asset('assets/frontend/layout/scripts/back-to-top.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}" type="text/javascript"></script>
    <!-- END CORE PLUGINS -->

    <!-- BEGIN PAGE LEVEL JAVASCRIPTS (REQUIRED ONLY FOR CURRENT PAGE) -->
    <script src="{{asset('assets/global/plugins/fancybox/source/jquery.fancybox.pack.js')}}" type="text/javascript"></script><!-- pop up -->
    <script src="{{asset('assets/global/plugins/carousel-owl-carousel/owl-carousel/owl.carousel.min.js')}}" type="text/javascript"></script><!-- slider for products -->
    <script src="{{asset('assets/global/plugins/zoom/jquery.zoom.min.js')}}" type="text/javascript"></script><!-- product zoom -->
    <script src="{{asset('assets/global/plugins/bootstrap-touchspin/bootstrap.touchspin.js')}}" type="text/javascript"></script><!-- Quantity -->

    <!-- BEGIN LayerSlider -->
    <script src="{{asset('assets/global/plugins/slider-layer-slider/js/greensock.js')}}" type="text/javascript"></script><!-- External libraries: GreenSock -->
    <script src="{{asset('assets/global/plugins/slider-layer-slider/js/layerslider.transitions.js')}}" type="text/javascript"></script><!-- LayerSlider script files -->
    <script src="{{asset('assets/global/plugins/slider-layer-slider/js/layerslider.kreaturamedia.jquery.js')}}" type="text/javascript"></script><!-- LayerSlider script files -->
    <script src="{{asset('assets/frontend/pages/scripts/layerslider-init.js')}}" type="text/javascript"></script>
    <!-- END LayerSlider -->

    <script src="{{asset('assets/frontend/layout/scripts/layout.js')}}" type="text/javascript"></script> 
    <script src="{{asset('assets/frontend/layout/scripts/jquery.bxslider.min.js.download')}}"></script>
    <link href="{{asset('assets/frontend/layout/css/custom/font-awesome.min.css')}}" rel="stylesheet">
    <script type="text/javascript">
        jQuery(document).ready(function() {
            Layout.init();    
            Layout.initOWL();
            LayersliderInit.initLayerSlider();
            Layout.initImageZoom();
            Layout.initTouchspin();
            Layout.initTwitter();
            
            Layout.initFixHeaderWithPreHeader();
            Layout.initNavScrolling();

            showMainPart('userinfo');
        });
 
/*<![CDATA[*/
$(function() {
	//クリックしたときのファンクションをまとめて指定
	$('.tab li').click(function() {
		//.index()を使いクリックされたタブが何番目かを調べ、
		//indexという変数に代入します。
		var index = $('.tab li').index(this);
		//コンテンツを一度すべて非表示にし、
		$('.contens_box ul.content li#tav').css('display','none');
		//クリックされたタブと同じ順番のコンテンツを表示します。
		$('.contens_box ul.content li#tav').eq(index).css('display','block');
		//一度タブについているクラスselectを消し、
		$('.tab li').removeClass('select');
		//クリックされたタブのみにクラスselectをつけます。
		$(this).addClass('select')
	});
});
$(function() {
    $('#slidbnr').bxSlider({
		minSlides: 4,
		maxSlides: 4,
		slideWidth: 340,
		slideMargin: 10,
		ticker: true,
		tickerHover: true,
		speed: 30000,
		useCSS: false
	});
    $('#slidbnr_pc').bxSlider({
		minSlides: 4,
		maxSlides: 4,
		slideWidth: 340,
		slideMargin: 10,
		ticker: true,
		tickerHover: true,
		speed: 30000,
		useCSS: false
	});

});


function showMainPart(menuName){
    switch(menuName){
        case 'userinfo':
            $('.slide-icon.userinfo').attr('src',"{{asset('assets/frontend/layout/img/icons/userinfo_hover.png')}}");
            $('.slide-icon.userinfo_btn').attr('src',"{{asset('assets/frontend/layout/img/icons/userinfo_btn_hover.png')}}");
            $('.slide-icon.search').attr('src',"{{asset('assets/frontend/layout/img/icons/usersearch.png')}}");
            $('.slide-icon.search_btn').attr('src',"{{asset('assets/frontend/layout/img/icons/usersearch_btn.png')}}");
            $('.slide-icon.userfeedback').attr('src',"{{asset('assets/frontend/layout/img/icons/userfeedback.png')}}");
            $('.slide-icon.userfeedback_btn').attr('src',"{{asset('assets/frontend/layout/img/icons/userfeedback_btn.png')}}");
            $('#mainpart').html( $('#userinfo-part').html());
        break;
        case 'search':
            $('.slide-icon.userinfo').attr('src',"{{asset('assets/frontend/layout/img/icons/userinfo.png')}}");
            $('.slide-icon.userinfo_btn').attr('src',"{{asset('assets/frontend/layout/img/icons/userinfo_btn.png')}}");
            $('.slide-icon.search').attr('src',"{{asset('assets/frontend/layout/img/icons/usersearch_hover.png')}}");
            $('.slide-icon.search_btn').attr('src',"{{asset('assets/frontend/layout/img/icons/usersearch_btn_hover.png')}}");
            $('.slide-icon.userfeedback').attr('src',"{{asset('assets/frontend/layout/img/icons/userfeedback.png')}}");
            $('.slide-icon.userfeedback_btn').attr('src',"{{asset('assets/frontend/layout/img/icons/userfeedback_btn.png')}}");
            $('#mainpart').html( $('#search-part').html() );
        break;
        case 'feedback':
            $('.slide-icon.userinfo').attr('src',"{{asset('assets/frontend/layout/img/icons/userinfo.png')}}");
            $('.slide-icon.userinfo_btn').attr('src',"{{asset('assets/frontend/layout/img/icons/userinfo_btn.png')}}");
            $('.slide-icon.search').attr('src',"{{asset('assets/frontend/layout/img/icons/usersearch.png')}}");
            $('.slide-icon.search_btn').attr('src',"{{asset('assets/frontend/layout/img/icons/usersearch_btn.png')}}");
            $('.slide-icon.userfeedback').attr('src',"{{asset('assets/frontend/layout/img/icons/userfeedback_hover.png')}}");
            $('.slide-icon.userfeedback_btn').attr('src',"{{asset('assets/frontend/layout/img/icons/userfeedback_btn_hover.png')}}");
            $('#mainpart').html( $('#review-part').html() );
        break;
    }  
}

function showSearch(){

    $.ajax({
        url: "{{URL::to('searchmenu')}}",
        method: 'post',
        data: {
            _token: "{{ csrf_token() }}",
            prefecture: $('#prefecture').val(),
            facilityname: $('#facilityname').val(),
            fea_openair: $("#fea_openair").is(":checked") ? 1 : 0,
            fea_towelrental: $("#fea_towelrental").is(":checked") ? 1 : 0,
            fea_bedrock: $("#fea_bedrock").is(":checked") ? 1 : 0,
            fea_family: $("#fea_family").is(":checked") ? 1 : 0,
            fea_massage: $("#fea_massage").is(":checked") ? 1 : 0,
            fea_rinse: $("#fea_rinse").is(":checked") ? 1 : 0,
            fea_amenity: $("#fea_amenity").is(":checked") ? 1 : 0,
            fea_parkinglot: $("#fea_parkinglot").is(":checked") ? 1 : 0,
            fea_sauna: $("#fea_sauna").is(":checked") ? 1 : 0,
            fea_towelpurchas: $("#fea_towelpurchas").is(":checked") ? 1 : 0,
            fea_private: $("#fea_private").is(":checked") ? 1 : 0,
            fea_restaurant: $("#fea_restaurant").is(":checked") ? 1 : 0,
            fea_shampoo: $("#fea_shampoo").is(":checked") ? 1 : 0,
            fea_bodysoap: $("#fea_bodysoap").is(":checked") ? 1 : 0,
            fea_restarea: $("#fea_restarea").is(":checked") ? 1 : 0,
        },
        success: function(result){
            result = JSON.parse(result);
            console.log(result);
            if(result.info){
                var menus = result.data;
                var strProducts = '';
                strProducts += '<div class="container">';
                strProducts += '<div class="row" style="padding-top:5px;"><p class="new_title_left">検索結果</p></div>';
                for(p in menus){
                    strProducts += '<div class="col-sm-4">';
                    strProducts += '<div class="product-item">'; 
                    strProducts += '<div class="col-md-7">';
                    strProducts += '<div class="row">';
                    strProducts += '<i class="fa fa-heart-o" style="font-size:30px; color:pink"></i>';
                    strProducts += '<h3><a href="' + menus[p].urlname + '">' + menus[p].name + '</a></h3>';
                    strProducts += '</div>';
                    strProducts += '</div>';
                    strProducts += '<div class="col-md-5">';
                    strProducts += '<div class="row">';
                    strProducts += '<p style="font-size:16px; color:black">' + menus[p].grownprice + '</p>';
                    strProducts += '<a href="javascript:;"  style="float:left; margin-top:-5px;" class="btn btn-default add2cart" >';
                    var starcount = menus[p].menu_cat;
                    if(starcount!= null || starcount > 0){
                      for(var i=0; i<starcount; i++)
                      {
                        strProducts += '<img src="assets/frontend/layout/img/star.png" class="img-star" alt="">';
                      }
                    }
                    strProducts += '</a></div>';
                    strProducts += '</div>';

                    strProducts += '<div class="pi-img-wrapper" onclick="window.location.href = \'details/Japan Star Hot Spring\';">';                  
                    strProducts += '<img src="upload/menu/' + menus[p].image + '-s.jpg" class="img-responsive" alt="">';
                    strProducts += '<div>';
                    strProducts += '</div>';
                    strProducts += '</div>';

                    strProducts += '</div>';
                    strProducts += '</div>';
                    
                }
                strProducts += '</div>';
                $('#product_list').html(strProducts);  
            }else{
                $('#product_list').html('<div class="container"><div class="row" style="padding-top:5px;"><p class="new_title_left">検索されたアイテム：0 </p></div></div>');  
            }            
        }
    });
}

</script>
@endsection
