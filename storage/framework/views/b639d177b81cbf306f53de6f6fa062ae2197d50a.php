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
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="<?php echo e(URL::asset('site_assets/js/jquery-1.11.0.min.js')); ?>"></script>
<script src="https://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>

<div class="sub-banner" style="background:url(<?php echo e(URL::asset('upload/'.getcong('page_bg_image'))); ?>) no-repeat center top; width: 100%; height: 494px; margin: 0 auto;">
    <div class="overlay">
      <div class="container">
        <h1><?php echo e(trans('messages.Your Order Details')); ?></h1>
      </div>
    </div>
  </div>

 <div class="hotspring_list_detail">
    <div class="container">
      <div class="row">
        <div class="col-md-9 col-sm-7 col-xs-12">
          <div class="box_style_2" id="order_process">
          <h2 class="inner"><?php echo e(trans('messages.Your Order Details')); ?></h2>
          <?php echo Form::open(array('url' => 'order_details','class'=>'','id'=>'order_details','role'=>'form')); ?> 
            <div class="message">
                        <!--<?php echo Html::ul($errors->all(), array('class'=>'alert alert-danger errors')); ?>-->
                                    <?php if(count($errors) > 0): ?>
                          <div class="alert alert-danger">
                              <ul>
                                  <?php foreach($errors->all() as $error): ?>
                                      <li><?php echo e($error); ?></li>
                                  <?php endforeach; ?>
                              </ul>
                          </div>
                      <?php endif; ?>
                                    
        </div>
        <?php if(Session::has('flash_message')): ?>
            <div class="alert alert-success">             
                <?php echo e(Session::get('flash_message')); ?>

            </div>
        <?php endif; ?>
          <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="form-group">
                  <label><?php echo e(trans('messages.First name')); ?></label>
                  <input type="text" class="form-control" id="first_name" name="first_name" value="<?php echo e($user->first_name); ?>" placeholder="<?php echo e(trans('messages.First name')); ?>">
              </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="form-group">
                    <label><?php echo e(trans('messages.Last name')); ?></label>
                    <input type="text" class="form-control" id="last_name" value="<?php echo e($user->last_name); ?>" name="last_name" placeholder="<?php echo e(trans('messages.Last name')); ?>">
               </div>
            </div>
          </div> 
          <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="form-group">
                    <label><?php echo e(trans('messages.Telephone/mobile')); ?></label>
                    <input type="text" id="mobile" name="mobile" value="<?php echo e($user->mobile); ?>" class="form-control" placeholder="<?php echo e(trans('messages.Telephone/mobile')); ?>">
              </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="form-group">
                    <label><?php echo e(trans('messages.Email')); ?></label>
                    <input type="email" id="email" name="email" value="<?php echo e($user->email); ?>" class="form-control" placeholder="<?php echo e(trans('messages.Email')); ?>">
              </div>
            </div>
          </div>
          <div class="row form-group">
            <div class="col-md-12">
              <label><?php echo e(trans('messages.Street and House Nr')); ?></label>
              <input type="text" value="<?php echo e($user->address); ?>" class="form-control" placeholder="<?php echo e(trans('messages.Street and House Nr')); ?>" name="address" id="address" />
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 col-sm-6">
              <div class="form-group">
                <label><?php echo e(trans('messages.City')); ?></label>
                <input type="text" id="city" name="city" value="<?php echo e($user->city); ?>" class="form-control" placeholder="<?php echo e(trans('messages.City')); ?>" required>
              </div>
            </div>
            <div class="col-md-6 col-sm-6">
              <div class="form-group">
                <label><?php echo e(trans('messages.Postal code')); ?></label>
                <input type="text" id="postal_code" name="postal_code" value="<?php echo e($user->postal_code); ?>" class="form-control" placeholder="<?php echo e(trans('messages.Postal code')); ?>" required>
              </div>
            </div>
          </div>
          <div class="row form-group">
              <div class="col-sm-12 col-md-12">
              <label>Delivery Way</label>
              <div class="col-sm-12 col-md-12"  style="border:1px solid #ddd; padding:15px 0;">
                    <div class="col-md-3 col-sm-3">
                      <div class="form-check-inline">
                          <input value="1" type="radio" class="form-check-input" id="seldeli" name="delikind">
                          <label class="form-check-label" for="seldeli"><?php echo e(trans('messages.Delivery')); ?></label>
                      </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                      <div class="form-check-inline">
                          <input value="2" type="radio" class="form-check-input" id="selpick" name="delikind" checked >
                          <label class="form-check-label" for="selpick"><?php echo e(trans('messages.Pick up')); ?></label>
                      </div>
                    </div>
                    <div class="col-md-6 col-sm-6"></div>
              </div>
              </div>
          </div>
          <div class="row form-group">
              <div class="col-sm-12 col-md-12">
                  <label>Pay Way</label>
                  <div class="col-sm-12" style="border:1px solid #ddd; padding:15px 15px;">
                    <div class="form-check-inline">
                        <input value="1" type="radio" class="form-check-input" id="cashdeli" name="paykind" checked>
                        <label class="form-check-label" for="cashdeli"><?php echo e(trans('messages.Cash on Delievery')); ?></label>
                    </div>
                    <div class="form-check-inline">
                        <input value="2" type="radio" class="form-check-input" id="cashpick" name="paykind">
                        <label class="form-check-label" for="cashpick"><?php echo e(trans('messages.Cash on Pick up in Restaurant')); ?></label>
                    </div>
                    <div class="form-check-inline">
                        <input value="3" type="radio" class="form-check-input" id="paycard" name="paykind">
                        <label class="form-check-label" for="paycard"><?php echo e(trans('messages.Payment with Card on Delivery')); ?></label>
                    </div>
                  </div>
              </div>
          </div>
          <div class="row">
            <div class="col-md-6 col-sm-6">
              <div class="form-group">
                <label><?php echo e(trans('messages.Delivery Date')); ?></label>
                <input type="text" id="dayinput" name="dayinput" value="<?php echo e($user->delidate); ?>" class="form-control" placeholder="<?php echo e(trans('messages.Delivery Date')); ?>" required />
              </div>
            </div>
            <div class="col-md-6 col-sm-6">
              <div class="form-group">
                <label><?php echo e(trans('messages.Delivery Time')); ?></label>
               <select id="delitime" name="delitime" class="form-control" placeholder="<?php echo e(trans('messages.Delivery Time')); ?>" style="-webkit-appearance: menulist-button !important; line-height:38px !important;" required></select>
              </div>
            </div>
          </div>       
          <div class="row">
            <div class="col-md-12">
              <label><?php echo e(trans('messages.Your Notice')); ?></label>
              <textarea class="form-control" style="height:100px" placeholder="<?php echo e(trans('messages.Your Notice')); ?>" name="notice" id="notice"><?php echo e($user->notice); ?></textarea>
            </div>
          </div>
      
        </div>
        <!-- End box_style_1 --> 
        </div>
    <div class="col-md-3 col-sm-5 col-xs-12 side-bar">   
    <div id="cart_box">
          <h3><?php echo e(trans('messages.Your order')); ?> <i class="icon_cart_alt pull-right"></i></h3>
          
          <table id="tblitem" class="table table_summary">
            <tbody>
              <?php foreach(\App\Cart::where('user_id',Auth::id())->orderBy('id')->get() as $n=>$cart_item): ?>
              <tr>
                <td><a href="<?php echo e(URL::to('delete_item/'.$cart_item->id)); ?>" class="remove_item"><i class="fa fa-minus-circle"></i></a> <strong><span class="quan"><?php echo e($cart_item->quantity); ?></span>x</strong> <?php echo e($cart_item->item_name); ?> </td>
                <td><strong class="pull-right"><span class="symbol"><?php echo e(getcong('currency_symbol')); ?></span><span class="value"><?php echo e($cart_item->item_price); ?></span></strong></td>
              </tr>
              <?php endforeach; ?>
               
            </tbody>
          </table>
           
          <!-- Edn options 2 -->
          
          <hr>
          <?php if(DB::table('cart')->where('user_id', Auth::id())->sum('item_price')>0): ?>
          <table id="tbltotal" class="table table_summary">
            <tbody>
              
              <tr>
                <td class="total"> <?php echo e(trans('messages.TOTAL')); ?> <span class="pull-right"><span class="symbol"><?php echo e(getcong('currency_symbol')); ?></span><span class="value"><?php echo e($price = DB::table('cart')
                ->where('user_id', Auth::id())
                ->sum('item_price')); ?></span></span></td>
              </tr>
            </tbody>
          </table>
          <hr>
           
          <button type="submit" class="btn_full"><?php echo e(trans('messages.Confirm Your Order')); ?></button>
        </div>

          <?php echo Form::close(); ?> 
          <?php else: ?>
            <a class="btn_full" href="#"><?php echo e(trans('Empty Cart')); ?></a> </div>
          <?php endif; ?>
        <!-- End cart_box -->                                                                               
    <div id="help" class="box_style_2"> 
      <i class="fa fa-life-bouy"></i>
        <h4><?php echo e(getcong_widgets('need_help_title')); ?></h4>
        <a href="tel://<?php echo e(getcong('phone')); ?>" class="phone"><?php echo e(getcong('phone')); ?></a>
        <?php foreach(\App\Openhour::where('dayindex', date('w'))->orderBy('fromtime')->get() as $n=>$openhour): ?>
            <div><small><?php echo e(substr($openhour->fromtime, 0, 5)); ?> ~ <?php echo e(substr($openhour->endtime,0,5)); ?></small></div>
        <?php endforeach; ?>
      </div>
        </div>
                
      </div>
    </div>
  </div>
  
  <script>
    var to_date = new Date('<?php echo e($to_date); ?>');

    if(document.getElementById("dayinput").value == ''){
        document.getElementById("dayinput").value = "<?php echo e($to_date); ?>";
    }
    getdelihour(document.getElementById("dayinput").value);
    <?php if(isset($user->kind)): ?>
        if(<?php echo e($user->kind); ?> == 1){
            var objkind = document.getElementById('seldeli').setAttribute("checked", "checked");
            $('#city').removeAttr('disabled');
            $('#postal_code').removeAttr('disabled');
        }
        if(<?php echo e($user->kind); ?> == 2){
            var objkind = document.getElementById('selpick').setAttribute("checked", "checked");
            $('#city').attr('disabled', 'disabled');
            $('#postal_code').attr('disabled', 'disabled');
        }
    <?php endif; ?>

    <?php if(isset($user->paykind)): ?>
        if(<?php echo e($user->paykind); ?> == 1){
            var objkind = document.getElementById('cashdeli').setAttribute("checked", "checked");
        }
        if(<?php echo e($user->paykind); ?> == 2){
            var objkind = document.getElementById('cashpick').setAttribute("checked", "checked");
        }
        if(<?php echo e($user->paykind); ?> == 3){
            var objkind = document.getElementById('paycard').setAttribute("checked", "checked");
        }
    <?php endif; ?>
  
    document.getElementById("seldeli").addEventListener("change", function(e){
        $('#city').removeAttr('disabled');
        $('#postal_code').removeAttr('disabled'); 
        var items = $('#tblitem .value').get();
        
        var sum = 0;
        $("#tblitem tr").each(function(){
            var quan = $(this).find('td .quan').text();
            var objPrice = $(this).find('td .value')[0];
            objPrice.innerText = parseInt(objPrice.innerText) + quan * <?php echo e(getcong('delifee')); ?>;
            sum = sum + parseInt(objPrice.innerText);
        });
        $('#tbltotal .value').get(0).innerText = sum;
    });
      document.getElementById("selpick").addEventListener("change", function(e){
          $('#city').attr('disabled', "disabled");
          $('#postal_code').attr('disabled', "disabled"); 

          var sum = 0;
          $("#tblitem tr").each(function(){
              var quan = $(this).find('td .quan').text();
              var objPrice = $(this).find('td .value')[0];
              objPrice.innerText = parseInt(objPrice.innerText) - quan * <?php echo e(getcong('delifee')); ?>;
              sum = sum + parseInt(objPrice.innerText);
          });
          $('#tbltotal .value').get(0).innerText = sum;
      });
      document.getElementById("city").addEventListener("keyup", function(e){
            e.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('input[name="_token"]').val()
                }
            });
            jQuery.ajax({
                url: "<?php echo e(URL::to('admin/deliveryzone/validzone')); ?>",
                method: 'post',
                data: {
                  city: this.value,
                },
                success: function(result){
                    result = JSON.parse(result);
                    if(result.info){
                        $('#postal_code').val(result.data.postcode);
                    }else{
                        $('#postal_code').val('');
                    }
                }
              });
      });
      document.getElementById("postal_code").addEventListener("keyup", function(e){
          e.preventDefault();
          $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': $('input[name="_token"]').val()
              }
          });
          $.ajax({
              url: "<?php echo e(URL::to('admin/deliveryzone/validzone')); ?>",
              method: 'post',
              data: {
                postcode: this.value,
              },
              success: function(result){
                result = JSON.parse(result);
                if(result.info){
                      $('#city').val(result.data.city);
                }else
                    $('#city').val('');
              }
          });
      });

//     document.getElementById("dayinput").addEventListener("change", function(e){
//         if(to_date > new Date(this.value)){
//             document.getElementById('delitime').innerHTML = "";
//             document.getElementById('dayinput').style.color = "red";
//             return;
//         }else
//             document.getElementById('dayinput').style.color = "black";
//        getdelihour(document.getElementById("dayinput").value);
//    });
      
    function getdelihour(seldate){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('input[name="_token"]').val(),
            },
          });
        jQuery.ajax({
            url: "<?php echo e(URL::to('admin/deliveryhours/getdelitime')); ?>",
            method: 'post',
            data: {
              seldate: seldate,
            },
            success: function(result){
                result = JSON.parse(result);
                var strSelect = "<option></option>";
                for( op in result ){
                    if( "<?php echo e($user->delitime); ?>" == result[op] )
                        strSelect += "<option value='" + result[op] + "' selected>" + result[op] + "</option>";
                    else
                        strSelect += "<option value='" + result[op] + "'>" + result[op] + "</option>";
                }
                document.getElementById('delitime').innerHTML = strSelect;
            }
        });
      }

      function customtime(fromt, endt){
          
          fdate = new Date("2020-01-01 ");
          edate = new Date("2020-01-01 ");
          ftime = fdate.getTime();
          etime = edate.getTime();

          curtime = ftime;
          step = 30 * 60 * 1000;
          bequal = false;
          aryRTime = new Array();
          while(curtime <= etime){
              dt = new Date(curtime);
              hr = "0" + dt.getHours();
              m = "0" + dt.getMinutes();
              s = "0" + dt.getSeconds();
              aryRTime.push(hr.substr(-2) + ':' + m.substr(-2) + ':' + s.substr(-2));
              if(curtime == etime)
                  bequal = true;
              curtime = curtime + step;
          }
          if(!bequal)
              aryRTime.push(endt);
          var strT = new Array();
          for(p in aryRTime){
              if(p == 0)
                  continue;
              strT.push({'fromt': aryRTime[p-1], 'endt': aryRTime[p]})
          }
          return strT;
      }
      
      function ampmconvert(timestr){
          var hour = timestr.substr(0, 2);
          var ampm = "AM";
          if(parseInt(hour) > 12)
              ampm = "PM";
          hour = hour % 12 || 12;
          hour = ('' + 0 + hour).substr(-2);
          var minute = timestr.substr(3, 2);
          cvTime = hour + ':' + minute + ' ' + ampm;
          return cvTime;
      }

    $(document).ready(function() {
        $("#dayinput").datepicker({
            dateFormat: 'yy-mm-dd',
            onSelect: function(dateText) {
                $(this).change();
            }
        }).on("change", function() {
            if(to_date > new Date(this.value)){
                document.getElementById('delitime').innerHTML = "";
                document.getElementById('dayinput').style.color = "red";
                return;
            }else
                document.getElementById('dayinput').style.color = "black";
            getdelihour(document.getElementById("dayinput").value);
        });
      
    }); 
  </script>
 
<?php $__env->stopSection(); ?>

<?php echo $__env->make("app", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>