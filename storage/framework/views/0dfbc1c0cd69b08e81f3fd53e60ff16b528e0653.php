<?php $__env->startSection("styles"); ?>
    <!-- Global styles START -->         
    <link href="<?php echo e(asset('assets/global/plugins/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/global/plugins/font-awesome/css/font-awesome.min.css')); ?>" rel="stylesheet">
    <!-- Global styles END --> 
    
    <!-- Page level plugin styles START -->
    <link href="<?php echo e(asset('assets/global/plugins/fancybox/source/jquery.fancybox.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/global/plugins/carousel-owl-carousel/owl-carousel/owl.carousel.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/global/plugins/slider-layer-slider/css/layerslider.css')); ?>" rel="stylesheet">
    <!-- Page level plugin styles END -->

    <!-- Theme styles START -->
    <link href="<?php echo e(asset('assets/global/css/components.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/frontend/layout/css/style.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/frontend/pages/css/style-shop.css')); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo e(asset('assets/frontend/pages/css/style-layer-slider.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/frontend/layout/css/style-responsive.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/frontend/layout/css/themes/blue.css')); ?>" rel="stylesheet" id="style-color">
    <link href="<?php echo e(asset('assets/frontend/layout/css/custom.css')); ?>" rel="stylesheet">
    <!-- Theme styles END -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/frontend/layout/css/custom/plan.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/frontend/layout/css/custom/jquery.bxslider.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection("content"); ?>

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

<?php echo $__env->make("_particles.search_slider", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> 

<!-- Content ================================================== --> 
<div class="main">
  <div class="container">
    <!-- BEGIN  NEW Hotspring -->
    <div class="row margin-bottom-40">
      <!-- -->
      <div class="col-md-12 ">
        <div class="subtitle_ja margin-bottom-20">有名な温泉に</div>
        <div class="owl-carousel owl-carousel5">
          <div>
            <div class="product-item">
              <div class="row">
                <div class="col-md-12">
                  <div class="col-md-6">
                    <a  class="famous_title_sm" href="">天然温泉ホテルこまち</a>  
                  </div>               
                  <div class="col-md-6">                    
                    <div class="col-md-12 margin-bottom-5">
                      &nbsp;&nbsp;1523 &nbsp;&nbsp;<img src="<?php echo e(asset('assets/frontend/pages/img/hotspring/star.png')); ?>"  alt=""> 
                    </div>
                  </div>                   
                </div>
              </div>
              <div class="pi-img-wrapper">
                <img src="<?php echo e(asset('assets/frontend/pages/img/hotspring/hotspring1.jpg')); ?>" class="img-responsive" alt="">
                <div>
                  <a href="<?php echo e(asset('assets/frontend/pages/img/hotspring/hotspring1.jpg')); ?>" class="btn btn-default fancybox-button">Zoom</a>                      
                </div>
              </div>                
            </div>
          </div>
          <div>
            <div class="product-item">
              <div class="row">                   
                <div class="col-md-12">
                  <div class="col-md-6">
                      <div class="famous_title_sm"><a  class="famous_title_sm" href="">天然温泉ホテルこまち</a></div>
                  </div>
                  <div class="col-md-6">                    
                    <div class="col-md-12 margin-bottom-5">
                      &nbsp;&nbsp;1498 &nbsp;&nbsp;<img src="<?php echo e(asset('assets/frontend/pages/img/hotspring/star.png')); ?>"  alt=""> 
                    </div>
                  </div>
                </div> 
              </div>
              <div class="pi-img-wrapper">
                <img src="<?php echo e(asset('assets/frontend/pages/img/hotspring/hotspring2.jpg')); ?>" class="img-responsive" alt="">
                <div>
                  <a href="<?php echo e(asset('assets/frontend/pages/img/hotspring/hotspring2.jpg')); ?>" class="btn btn-default fancybox-button">Zoom</a>                     
                </div>
              </div>              
            </div>
          </div>
          <div>
            <div class="product-item">
            <div class="row">                   
                <div class="col-md-12">
                  <div class="col-md-6">
                      <div class="famous_title_sm"><a  class="famous_title_sm" href="">貝の沢温泉</a></div>
                  </div>
                  <div class="col-md-6">                       
                    <div class="col-md-12 margin-bottom-5">
                      &nbsp;&nbsp;1356 &nbsp;&nbsp;<img src="<?php echo e(asset('assets/frontend/pages/img/hotspring/star.png')); ?>"  alt=""> 
                    </div>
                  </div>
                </div> 
            </div>
              <div class="pi-img-wrapper">
                <img src="<?php echo e(asset('assets/frontend/pages/img/hotspring/hotspring3.jpg')); ?>" class="img-responsive" alt="">
                <div>
                  <a href="<?php echo e(asset('assets/frontend/pages/img/hotspring/hotspring3.jpg')); ?>" class="btn btn-default fancybox-button">Zoom</a>
                </div>
              </div>
            </div>
          </div>
          <div>
              <div class="product-item">
              <div class="row">                   
                <div class="col-md-12">
                  <div class="col-md-6">
                      <div class="famous_title_sm"><a  class="famous_title_sm" href="">貝の沢温泉</a></div>
                  </div>
                  <div class="col-md-6">                       
                    <div class="col-md-12 margin-bottom-5">
                      &nbsp;&nbsp;1289 &nbsp;&nbsp;<img src="<?php echo e(asset('assets/frontend/pages/img/hotspring/star.png')); ?>"  alt=""> 
                    </div>
                  </div>
                </div> 
            </div>
                <div class="pi-img-wrapper">
                  <img src="<?php echo e(asset('assets/frontend/pages/img/hotspring/hotspring4.jpg')); ?>" class="img-responsive" alt="">
                  <div>
                    <a href="<?php echo e(asset('assets/frontend/pages/img/hotspring/hotspring4.jpg')); ?>" class="btn btn-default fancybox-button">Zoom</a>
                  </div>
                </div>       
              </div>
          </div>
          <div>
            <div class="product-item">
            <div class="row">                   
                <div class="col-md-12">
                  <div class="col-md-6">
                      <div class="famous_title_sm"><a  class="famous_title_sm" href="">貝の沢温泉</a></div>
                  </div>
                  <div class="col-md-6">                       
                    <div class="col-md-12 margin-bottom-5">
                      &nbsp;&nbsp;1114 &nbsp;&nbsp;<img src="<?php echo e(asset('assets/frontend/pages/img/hotspring/star.png')); ?>"  alt=""> 
                    </div>
                  </div>
                </div> 
            </div>
              <div class="pi-img-wrapper">
                <img src="<?php echo e(asset('assets/frontend/pages/img/hotspring/hotspring5.jpg')); ?>" class="img-responsive" alt="">
                <div>
                  <a href="<?php echo e(asset('assets/frontend/pages/img/hotspring/hotspring5.jpg')); ?>" class="btn btn-default fancybox-button">Zoom</a>
                  
                </div>
              </div>
            </div>
          </div>
          <div>
            <div class="product-item">
            <div class="row">                   
                <div class="col-md-12">
                  <div class="col-md-6">
                      <div class="famous_title_sm"><a  class="famous_title_sm" href="">貝の沢温泉</a></div>
                  </div>
                  <div class="col-md-6">                       
                    <div class="col-md-12 margin-bottom-5">
                      &nbsp;&nbsp;1019 &nbsp;&nbsp;<img src="<?php echo e(asset('assets/frontend/pages/img/hotspring/star.png')); ?>"  alt=""> 
                    </div>
                  </div>
                </div> 
            </div>
              <div class="pi-img-wrapper">
                <img src="<?php echo e(asset('assets/frontend/pages/img/hotspring/hotspring6.jpg')); ?>" class="img-responsive" alt="">
                <div>
                  <a href="<?php echo e(asset('assets/frontend/pages/img/hotspring/hotspring6.jpg')); ?>" class="btn btn-default fancybox-button">Zoom</a>                     
                </div>
              </div>
            </div>
          </div>
          <div>
            <div class="product-item">
            <div class="row">                   
                <div class="col-md-12">
                  <div class="col-md-6">
                      <div class="famous_title_sm"><a  class="famous_title_sm" href="">貝の沢温泉</a></div>
                  </div>
                  <div class="col-md-6">                       
                    <div class="col-md-12 margin-bottom-5">
                      &nbsp;&nbsp;998 &nbsp;&nbsp;<img src="<?php echo e(asset('assets/frontend/pages/img/hotspring/star.png')); ?>"  alt=""> 
                    </div>
                  </div>
                </div> 
            </div>
              <div class="pi-img-wrapper">
                <img src="<?php echo e(asset('assets/frontend/pages/img/hotspring/hotspring7.jpg')); ?>" class="img-responsive" alt="">
                <div>
                  <a href="<?php echo e(asset('assets/frontend/pages/img/hotspring/hotspring7.jpg')); ?>" class="btn btn-default fancybox-button">Zoom</a>                      
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
    <!-- END NEW hotspring -->
  </div>
    </div>
    <!-- BEGIN STEPS -->
    
    
    <!--menu part-->
    <div>         
        <!--<nav class="navbar navbar-default" style="">
            <ul class="nav navbar-nav">
              <li class="active"><a href="javascript:showMainPart('new')">New things</a></li>
              <li><a href="javascript:showMainPart('review')">Reviews</a></li>
              <li><a href="javascript:showMainPart('search')">Search</a></li>
            </ul>
        </nav>
        -->
        <style>

          .mix-filter li {
            /* color: #555; */
            cursor: pointer;
            /* padding: 6px 15px; */
            /* margin-right: 2px; */
            /* margin-bottom: 5px; */
            /* background: #eee;               */
            display: inline-block;
            background-color: rgb(242, 242, 242);
            /* background-color: rgba(255, 102, 255, 0.31); */
            border-radius: 4px !important;
            border-width: inherit;
            border-color: rgb(102, 102, 102);
            font-size: 28px;
            font-weight: 400;
            font-style: normal;
            text-decoration: none;
            font-family: "Segoe UI";
            color: rgb(0, 0, 0);
            text-align: center;
            width:230px;
            height:39px;
          }

          .mix-filter {
              list-style: none;
              margin: 0 0 20px;
              padding: 0;
          }
          .mix-filter li:hover, .mix-filter li.active {
              /* color: #fff; */
              /* background: #e44f00; */
              background-color: rgba(255, 102, 255, 0.31);
          }
          .mix-filter li a{
            color:black;
          }
        </style>

        <ul class="mix-filter" style="display: flex; justify-content: space-evenly;">
            <li class="active"><a href="javascript:showMainPart('new')">新温泉</a></li>
            <li class=""><a href="javascript:showMainPart('review')">ランキング</a></li>
            <li class=""><a href="javascript:showMainPart('search')">さまざまな検索</a></li>
        </ul>
    </div>

    <div class="steps-block steps-block-red margin-bottom-0">
        <div id="mainpart" class="container"></div>
    </div>

    <!-- END STEPS -->
      <div class="row">
        <div class="conainer">
          <!-- BEGIN  NEW Hotspring -->
          <div class="row margin-bottom-40">
            <div class="subtitle_ja margin-bottom-10">記  事</div>
            <div class="new_title_sm_center margin-bottom-10"> 新旧の記事があります。そのため、記事を簡単に見つけて読むことができます。</div>
          </div>
          <div class="row margin-bottom-20"></div>
            <div class="col-md-12">
              <div class="col-md-1"></div>
              <div class="col-md-10">
                <div class="col-md-6">
                    <div class="subtitle_ja margin-bottom-5">新しい記事</div>
                    <div class="row margin-bottom-20 div-hr">
                      <div class="row  blog_title margin-bottom-0">記事のタイトル</div> 
                      <div class="row col-md-10">                         
                          <div class="col-md-4">                               
                            <img src="<?php echo e(asset('assets/frontend/pages/img/hotspring/blog1.jpg')); ?>" class="blog_img"> 
                          </div>
                          <div class="col-md-4 blog_content">
                            記事の内容<br>
                            記事の内容<br>
                            記事の内容<br>
                            記事の内容<br>
                            記事の内容<br>
                          </div>
                      </div> 
                    </div>
                    <div class="row margin-bottom-20 div-hr">
                      <div class="row  blog_title margin-bottom-0">記事のタイトル</div> 
                      <div class="row col-md-10">                         
                          <div class="col-md-4">                              
                            <img src="<?php echo e(asset('assets/frontend/pages/img/hotspring/blog2.jpg')); ?>" class="blog_img"> 
                          </div>
                          <div class="col-md-4 blog_content">
                            記事の内容<br>
                            記事の内容<br>
                            記事の内容<br>
                            記事の内容<br>
                            記事の内容<br>
                          </div>
                      </div> 
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="subtitle_ja margin-bottom-5">過去の記事</div>  
                    <div class="row margin-bottom-20 div-hr">
                          <div class="row  blog_title_sm margin-bottom-0">過去記事タイトル</div> 
                          <div class="row col-md-10">                         
                              <div class="col-md-4">
                                <img src="<?php echo e(asset('assets/frontend/pages/img/hotspring/blog1.jpg')); ?>" class="blog_img_sm"> 
                              </div>
                              <div class="col-md-5 blog_content_sm">
                              2020年4月20日<br>
                              シンプルなコンテンツ<br>                              
                              </div>
                          </div> 
                    </div>
                    <div class="row margin-bottom-20 div-hr">
                          <div class="row  blog_title_sm margin-bottom-0">過去記事タイトル</div> 
                          <div class="row col-md-10">                         
                              <div class="col-md-4">                                 
                                <img src="<?php echo e(asset('assets/frontend/pages/img/hotspring/blog2.jpg')); ?>" class="blog_img_sm"> 
                              </div>
                              <div class="col-md-5 blog_content_sm">
                              2020年4月20日<br>
                              シンプルなコンテンツ<br>                              
                              </div>
                          </div> 
                    </div>
                    <div class="row margin-bottom-20 div-hr">
                          <div class="row  blog_title_sm margin-bottom-0">過去記事タイトル</div> 
                          <div class="row col-md-10">                         
                              <div class="col-md-4">                                   
                                <img src="<?php echo e(asset('assets/frontend/pages/img/hotspring/blog3.jpg')); ?>" class="blog_img_sm"> 
                              </div>
                              <div class="col-md-5 blog_content_sm">
                              2020年4月20日<br>
                              シンプルなコンテンツ<br>                              
                              </div>
                          </div> 
                    </div>
                </div>  
              </div>
              <div class="col-md-1"></div>         
            </div>               
          </div>
        <div class="row plan_div">
            <div class="container">
              <div class="col-md-1">              
              </div>
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
                    <a href="">
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
      <div class="row" id="_pc" >
          <div class="bx-wrapper" style="max-width: 1390px;">
              <div class="bx-viewport" style="width: 100%; overflow: hidden; position: relative; height: 255px;">
                  <ul id="slidbnr_pc" style="width: 1215%; position: relative; left: -3071.37px;">  
                    <li style="float: left; list-style: none; position: relative; width: 340px; margin-right: 10px;"><img src="<?php echo e(asset('assets/frontend/layout/img/s1.jpg')); ?>"></li>
                    <li style="float: left; list-style: none; position: relative; width: 340px; margin-right: 10px;"><img src="<?php echo e(asset('assets/frontend/layout/img/s2.jpg')); ?>"></li>
                    <li style="float: left; list-style: none; position: relative; width: 340px; margin-right: 10px;"><img src="<?php echo e(asset('assets/frontend/layout/img/s3.jpg')); ?>"></li>
                    <li style="float: left; list-style: none; position: relative; width: 340px; margin-right: 10px;"><img src="<?php echo e(asset('assets/frontend/layout/img/s4.jpg')); ?>"></li>
                    <li style="float: left; list-style: none; position: relative; width: 340px; margin-right: 10px;"><img src="<?php echo e(asset('assets/frontend/layout/img/s5.jpg')); ?>"></li>
                    <li style="float: left; list-style: none; position: relative; width: 340px; margin-right: 10px;"><img src="<?php echo e(asset('assets/frontend/layout/img/s6.jpg')); ?>"></li>
                    <li style="float: left; list-style: none; position: relative; width: 340px; margin-right: 10px;"><img src="<?php echo e(asset('assets/frontend/layout/img/s7.jpg')); ?>"></li>
                    <li style="float: left; list-style: none; position: relative; width: 340px; margin-right: 10px;"><img src="<?php echo e(asset('assets/frontend/layout/img/s8.jpg')); ?>"></li>
                    <li style="float: left; list-style: none; position: relative; width: 340px; margin-right: 10px;"><img src="<?php echo e(asset('assets/frontend/layout/img/s9.jpg')); ?>"></li>
                    <li style="float: left; list-style: none; position: relative; width: 340px; margin-right: 10px;"><img src="<?php echo e(asset('assets/frontend/layout/img/s10.jpg')); ?>"></li>
                    <li style="float: left; list-style: none; position: relative; width: 340px; margin-right: 10px;" class="bx-clone"><img src="<?php echo e(asset('assets/frontend/layout/img/s1.jpg')); ?>"></li>
                    <li style="float: left; list-style: none; position: relative; width: 340px; margin-right: 10px;" class="bx-clone"><img src="<?php echo e(asset('assets/frontend/layout/img/s2.jpg')); ?>"></li>
                    <li style="float: left; list-style: none; position: relative; width: 340px; margin-right: 10px;" class="bx-clone"><img src="<?php echo e(asset('assets/frontend/layout/img/s3.jpg')); ?>"></li>
                    <li style="float: left; list-style: none; position: relative; width: 340px; margin-right: 10px;" class="bx-clone"><img src="<?php echo e(asset('assets/frontend/layout/img/s4.jpg')); ?>"></li>
                    <li style="float: left; list-style: none; position: relative; width: 340px; margin-right: 10px;" class="bx-clone"><img src="<?php echo e(asset('assets/frontend/layout/img/s5.jpg')); ?>"></li>
                    <li style="float: left; list-style: none; position: relative; width: 340px; margin-right: 10px;" class="bx-clone"><img src="<?php echo e(asset('assets/frontend/layout/img/s6.jpg')); ?>"></li>
                    <li style="float: left; list-style: none; position: relative; width: 340px; margin-right: 10px;" class="bx-clone"><img src="<?php echo e(asset('assets/frontend/layout/img/s7.jpg')); ?>"></li>
                    <li style="float: left; list-style: none; position: relative; width: 340px; margin-right: 10px;" class="bx-clone"><img src="<?php echo e(asset('assets/frontend/layout/img/s8.jpg')); ?>"></li>
                    <li style="float: left; list-style: none; position: relative; width: 340px; margin-right: 10px;" class="bx-clone"><img src="<?php echo e(asset('assets/frontend/layout/img/s9.jpg')); ?>"></li>
                    <li style="float: left; list-style: none; position: relative; width: 340px; margin-right: 10px;" class="bx-clone"><img src="<?php echo e(asset('assets/frontend/layout/img/s10.jpg')); ?>"></li>
                  </ul>
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
    </div>
  </div> 
</div>
<!-- END NEW hotspring -->
<!-- End Content =============================================== --> 
<style>
    
</style>

<div id="new-part" hidden>
  <?php foreach($menus as $menu): ?>
    <div class="row" style="display:flex; margin:30px 10px;">
      <div class="col-md-3">
        <div style="max-width:400px; max-height: 800px;">
          <img src="<?php echo e(URL::asset('upload/menu/'.$menu->image.'-s.jpg')); ?>" class="img-responsive" alt="">
        </div>
      </div>
      
      <div style="margin-left:10px;margin-right:30px">
      <span ><i class="fa fa-dribbble" style="font-size: 24px;color: rgb(102, 102, 102);"></i></span>
      </div>
      <div class="col-md-5">
          <p class="new-part-name"> <?php echo e($menu->name); ?> </p>
          <p class="new-part-content"> 大人料金 : <?php echo e($menu->grownprice); ?> 円</p>
          <p class="new-part-content"> 小人 : <?php echo e($menu->childprice); ?> 円</p>
          <p class="new-part-content"> 営業時間 : <?php echo e($menu->openhour); ?> ~ <?php echo e($menu->closehour); ?> </p>
          <p class="new-part-content"> ホームページ : <?php echo e($menu->urlname); ?> </p>
          <p class="new-part-content"> 電話番号 :  <?php echo e($menu->phonenumber); ?> </p>
          <p class="new-part-content"> 住所 :  <?php echo e($menu->streetaddress); ?> </p>
          <p class="new-part-content"> 都道府県 : <?php echo e($menu->season); ?> </p>
          <p class="new-part-content"> 市町村 : <?php echo e($menu->municipality); ?> </p>                                   
      </div>
      <div class="col-md-4">
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><a class="new-part-button" style="float: left; " href="<?php echo e($menu->urlname); ?>" target="_blank">サイトに行く</a>
      </div>
    </div>
  <?php endforeach; ?>
</div>

<div id="review-part" hidden>
  <div class="row" style="display:flex; margin-top:30px;"> 
    <div class="col-md-5" style="margin-left: 30px;">
      <p class="new-part-content">
        ランキング範囲</p><br>
      <input type="range" min="0" max="665544" style="margin-left: 10px;margin-right:20px;"><br>            
      <div class="col-md-6">
        <p  style="float: left;">0</p>
      </div>
      <div class="col-md-6" >
        <p style="float:right;">66544</p>
      </div>
    </div>           
    <div class="col-md-4">
      <p class="new-part-content" style="margin-left: 40px;">
        ランキング順</p><br><p class="new-part-content">
        <input type="radio" style="margin-left: 80px;" name="ranking">上-下（ランキング）<br><br>
        <input type="radio" style="margin-left: 80px;" name="ranking">下-上（ランキング）</p>
    </div>
    <div class="col-md-3">
      <a class="new-part-button" style="font-size: 24px; text-align:center;"><br><br><br><br>&nbsp;&nbsp;検索する&nbsp;&nbsp;</a>
    </div>
  </div>
  <div class="row" style="margin-bottom:30px;">
    <div class="content">
      <p class="new-part-content" style="margin-left: 40px;">
          検索されたアイテム： 2
      </p><br>      
    </div>
    <?php foreach($menus as $menu): ?>
    <div class="content">
      <div class="col-md-4">  
        <div class="product-item">
          <div class="row">                   
            <div class="col-md-12">
              <div class="row">
                <div class="col-md-6">
                  <a style="font-size:20px;color:black;" href=""><?php echo e($menu->name); ?></a>
                </div>
                <div class="col-md-6">
                  <div class="row">
                    <div style="font-size:20px;color:black;"><?php echo e($menu->hotspring_id); ?></div>
                  </div>                  
                  <div class="row"><img src="<?php echo e(asset('assets/frontend/pages/img/hotspring/star.png')); ?>" alt=""> </div>
                </div> 
              </div>         
            </div>
          </div>               
          <div class="row">
            <div class="pi-img-wrapper">
              <div>
                <a href="javascript:;"><img src="<?php echo e(URL::asset('upload/menu/'.$menu->image.'-s.jpg')); ?>" class="img-responsive" alt="">
              </div>
              <div>
              <a href="<?php echo e(URL::asset('upload/menu/'.$menu->image.'-s.jpg')); ?>" class="btn btn-default fancybox-button">Zoom</a>
              </div>
            </div>  
          </div>          
        </div> 
        <div class="pi-img-wrapper">
          <img src="<?php echo e(URL::asset('upload/menu/'.$menu->image.'-s.jpg')); ?>" class="img-responsive" alt="">
        </div>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
</div>

<div id="search-part" hidden>
  <div class="row" style="display:flex; margin-top:30px;">
    <div class="col-md-4">
      <div class="row">
          <p class="new_title_left">都道府県</p>
          <div class="col-md-12">
            <select id="prefecture" class="form-control">
              <option  value="1">都道府県1</option>
              <option  value="2">都道府県2</option>
              <option  value="2">都道府県3</option>
              <option  value="2">都道府県4</option>
            </select>
          </div>
      </div>
      <div class="row">
          <p class="new_title_left">施設名検索</p>
          <div class="col-md-12">
            <input type="text" class="form-control" id="facilityname">
        </div>
      </div>
      <div class="row">
        <div class="new_title button-item">
          <button type="button" class="btn btn-default searchbtn" onclick="javascript:showSearch()">検索する</button>
        </div>
      </div>
    </div>
    <div class="col-md-8">
          <div class="row">
          <div class="col-md-6">
            <div class="new_title_sm">オプション</div>
          </div>                
          </div>
          <div class="row">
          <div class="col-md-12">
            <div class="col-md-12 option_div">
              <div class="row">
                      <div class="col-md-6 checkbox-list">
                        <label class="search-option">
                          <input type="checkbox" id="fea_openair" > 露天風呂
                        </label>
                        <label class="search-option">
                          <input type="checkbox" id="fea_towelrental"> タオル（レンタル）
                        </label>
                        <label class="search-option">
                          <input type="checkbox" id="fea_bedrock"> 岩盤浴
                        </label>
                        <label class="search-option">
                          <input type="checkbox" id="fea_family"> 家族風呂
                        </label>
                        <label class="search-option">
                          <input type="checkbox" id="fea_massage"> マッサージ
                        </label>
                        <label class="search-option">
                          <input type="checkbox" id="fea_rinse"> リンス
                        </label>
                        <label class="search-option">
                          <input type="checkbox" id="fea_amenity"> アメニティ
                        </label>
                        <label class="search-option">
                          <input type="checkbox" id="fea_parkinglot"> 駐車場
                        </label>                     
                    </div>
                    <div class="col-md-6 checkbox-list">
                        <label class="search-option">
                          <input type="checkbox" id="fea_sauna"> サウナ
                        </label>
                        <label class="search-option">
                          <input type="checkbox" id="fea_towelpurchas"> タオル（購入）
                        </label>
                        <label class="search-option">
                          <input type="checkbox" id="fea_private"> 貸切風呂
                        </label>
                        <label class="search-option">
                          <input type="checkbox" id="fea_restaurant"> 食事処
                        </label>
                        <label class="search-option">
                          <input type="checkbox" id="fea_shampoo"> シャンプー
                        </label>
                        <label class="search-option">
                          <input type="checkbox" id="fea_bodysoap"> ボディソープ
                        </label>
                        <label class="search-option">
                          <input type="checkbox" id="fea_restarea"> 休憩所
                        </label>                  
                    </div>
              </div>
            </div>
          </div>                
          </div>
        </div>
    </div>
  <div class="row margin-bottom-10">
    <div id="product_list" class="row product-list">              
    </div>
  </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
        <!-- Load javascripts at bottom, this will reduce page load time -->
    <!-- BEGIN CORE PLUGINS (REQUIRED FOR ALL PAGES) -->
    <!--[if lt IE 9]>
    <script src="<?php echo e(asset('assets/global/plugins/respond.min.js')); ?>"></script>  
    <![endif]-->
    <script src="<?php echo e(asset('assets/global/plugins/jquery.min.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('assets/global/plugins/jquery-migrate.min.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('assets/global/plugins/bootstrap/js/bootstrap.min.js')); ?>" type="text/javascript"></script>      
    <script src="<?php echo e(asset('assets/frontend/layout/scripts/back-to-top.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js')); ?>" type="text/javascript"></script>
    <!-- END CORE PLUGINS -->

    <!-- BEGIN PAGE LEVEL JAVASCRIPTS (REQUIRED ONLY FOR CURRENT PAGE) -->
    <script src="<?php echo e(asset('assets/global/plugins/fancybox/source/jquery.fancybox.pack.js')); ?>" type="text/javascript"></script><!-- pop up -->
    <script src="<?php echo e(asset('assets/global/plugins/carousel-owl-carousel/owl-carousel/owl.carousel.min.js')); ?>" type="text/javascript"></script><!-- slider for products -->
    <script src="<?php echo e(asset('assets/global/plugins/zoom/jquery.zoom.min.js')); ?>" type="text/javascript"></script><!-- product zoom -->
    <script src="<?php echo e(asset('assets/global/plugins/bootstrap-touchspin/bootstrap.touchspin.js')); ?>" type="text/javascript"></script><!-- Quantity -->

    <!-- BEGIN LayerSlider -->
    <script src="<?php echo e(asset('assets/global/plugins/slider-layer-slider/js/greensock.js')); ?>" type="text/javascript"></script><!-- External libraries: GreenSock -->
    <script src="<?php echo e(asset('assets/global/plugins/slider-layer-slider/js/layerslider.transitions.js')); ?>" type="text/javascript"></script><!-- LayerSlider script files -->
    <script src="<?php echo e(asset('assets/global/plugins/slider-layer-slider/js/layerslider.kreaturamedia.jquery.js')); ?>" type="text/javascript"></script><!-- LayerSlider script files -->
    <script src="<?php echo e(asset('assets/frontend/pages/scripts/layerslider-init.js')); ?>" type="text/javascript"></script>
    <!-- END LayerSlider -->

    <script src="<?php echo e(asset('assets/frontend/layout/scripts/layout.js')); ?>" type="text/javascript"></script> 
    <script src="<?php echo e(asset('assets/frontend/layout/scripts/jquery.bxslider.min.js.download')); ?>"></script>
    <link href="<?php echo e(asset('assets/frontend/layout/css/custom/font-awesome.min.css')); ?>" rel="stylesheet">
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
        case 'new':
            $('.mix-filter li:eq(0)').addClass("active");
            $('.mix-filter li:eq(1)').removeClass("active");
            $('.mix-filter li:eq(2)').removeClass("active");
            $('#mainpart').html( $('#new-part').html() );
        break;
        case 'review':
            $('.mix-filter li:eq(1)').addClass("active");
            $('.mix-filter li:eq(0)').removeClass("active");
            $('.mix-filter li:eq(2)').removeClass("active");
            $('#mainpart').html( $('#review-part').html() );
        break;
        case 'search':
            $('.mix-filter li:eq(2)').addClass("active");
            $('.mix-filter li:eq(0)').removeClass("active");
            $('.mix-filter li:eq(1)').removeClass("active");
            $('#mainpart').addClass("active");
            $('#mainpart').html( $('#search-part').html() );
        break;
    }
}

function showSearch(){

    $.ajax({
        url: "<?php echo e(URL::to('searchmenu')); ?>",
        method: 'post',
        data: {
            _token: "<?php echo e(csrf_token()); ?>",
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
                strProducts += '<div class="row" style="padding-top:5px;"><p class="new_title_left">検索されたアイテム：' + menus.length + '</p></div>';
                for(p in menus){
                    strProducts += '<div class="col-sm-4">';
                    strProducts += '<div class="col-sm-6">';
                    strProducts += '<p style="font-size:18px; margin-bottom: 0px;">' + menus[p].name + '</p>';
                    strProducts += '</div>';
                    strProducts += '<div class="row">';
                    strProducts += '<div class="col-sm-6">';
                    strProducts += '<p style="text-align: left; font-size:16px; ">' + menus[p].hotspring_id + '</p>';
                    var starcount = menus[p].menu_cat;
                    if(starcount!= null || starcount > 0){
                      for(var i=0; i<starcount; i++)
                      {
                        strProducts += '<img src="assets/frontend/layout/img/star.png" class="img-star" alt="">';
                      }
                    }
                    strProducts += '</div>';
                    strProducts += '</div>';
                    strProducts += '<div class="product-item">';
                    strProducts += '<div class="pi-img-wrapper">';
                    strProducts += '<img src="upload/menu/' + menus[p].image + '-s.jpg" class="img-responsive" alt="">';
                    strProducts += '<div>';
                    strProducts += '<a href="upload/menu/' + menus[p].image + '-s.jpg" class="btn btn-default fancybox-button">Zoom</a>';
                    strProducts += '</div>';
                    strProducts += '</div>';
                    //strProducts += '<h3><a href="' + menus[p].urlname + '">' + menus[p].name + '</a></h3>';
                    //strProducts += '<div class="pi-price">' + menus[p].grownprice + '</div>';
                    
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make("app", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>