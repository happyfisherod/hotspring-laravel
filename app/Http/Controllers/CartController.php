<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\HotSpring;
use App\Cart;
use App\Order;
use App\Menu;
use App\Types;
use App\Delihours;
use App\Zone;

use App\Http\Requests;
use Illuminate\Http\Request;
use Session;
use Intervention\Image\Facades\Image; 
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
	 
    public function add_cart_item($item_id)    
    { 

        $user_id=Auth::user()->id;

        $find_cart_item = Cart::where(['user_id'=>$user_id,'item_id'=>$item_id])->first();
        

       if($find_cart_item!="")
       {
          $singl_item_price= $find_cart_item->item_price/$find_cart_item->quantity;


          $find_cart_item->increment('quantity');

          $new_quantity=$find_cart_item->quantity;

          $new_price=$singl_item_price*$new_quantity;

          $find_cart_item->item_price=$new_price;
          

          $find_cart_item->save();
       }
       else
       {
          $menu = Menu::findOrFail($item_id);

          $cart = new Cart; 

          $cart->user_id = $user_id;
          $cart->hotspring_id =$menu->hotspring_id;
          $cart->item_id = $menu->id; 
          $cart->item_name = $menu->menu_name;       
          $cart->item_price = $menu->price;         
          $cart->quantity= '1';  
           
          $cart->save();
       } 
              
       

        return \Redirect::back();
    }

     
    
    public function delete_cart_item($id)
    {   
        $cart = Cart::findOrFail($id);        
          
        $cart->delete();
         
        return redirect()->back();

    }

    public function order_details()
    { 
        if(!Auth::check())
            return redirect('login');
        $user_id=Auth::user()->id;
        $user = User::findOrFail($user_id);

        $carts=Cart::where('user_id',$user_id)->orderBy('id')->get();
        if( isset($carts) && count($carts)>0){
            $user->delidate = $carts[0]['delidate'];
            $user->delitime = $carts[0]['delitime'];
            $user->kind = $carts[0]['kind'];
            $user->paykind = $carts[0]['paykind'];
            $user->notice = $carts[0]['notice'];
        }
        $err_msg='';
        $to_date = date('Y-m-d');
        $to_time = date('G:i:s');
        return view('pages.settlement',compact('user', 'to_date', 'to_time' , 'err_msg'));
    } 

    public function send_order(Request $request) 
    {
        $user_id=Auth::user()->id;
        $user = User::findOrFail($user_id);
        
        $inputs = $request->all();

        $conveni_code = "";
        $user_tel = "";
        $user_name_kana = "";
        $user_id = "";
        $user_name = "";
        $user_mail_add = "";
        $st = "";
        $consignee_pref = "";
        $consignee_postal = "";
        $consignee_name = "";
        $consignee_address = "";
        $consignee_tel = "";
        $orderer_pref = "";
        $orderer_postal = "";
        $orderer_name = "";
        $orderer_address = "";
        $orderer_tel = "";
        
        if(isset($_REQUEST['conveni_code']))
        {
            $conveni_code = $_REQUEST['conveni_code'];
        }
        if(isset($_REQUEST['user_tel']))
        {
            $user_tel = $_REQUEST['user_tel'];
        }
        if(isset($_REQUEST['user_name_kana']))
        {
            $user_name_kana = $_REQUEST['user_name_kana'];
        }

        if(isset($_REQUEST['user_id']))
        {
            $user_id = $_REQUEST['user_id'];
        }
        if(isset($_REQUEST['user_name']))
        {
            $user_name = $_REQUEST['user_name'];
        }
        if(isset($_REQUEST['user_mail_add']))
        {
            $user_mail_add = $_REQUEST['user_mail_add'];
        }
        if(isset($_REQUEST['st']))
        {
            $st = $_REQUEST['st'];
        }
        if(isset($_REQUEST['consignee_pref']))
        {
            $consignee_pref = $_REQUEST['consignee_pref'];
        }
        if(isset($_REQUEST['consignee_postal']))
        {
            $consignee_postal = $_REQUEST['consignee_postal'];
        }
        if(isset($_REQUEST['consignee_name']))
        {
            $consignee_name = $_REQUEST['consignee_name'];
        }
        if(isset($_REQUEST['consignee_address']))
        {
            $consignee_address = $_REQUEST['consignee_address'];
        }
        if(isset($_REQUEST['consignee_tel']))
        {
            $consignee_tel = $_REQUEST['consignee_tel'];
        }
        if(isset($_REQUEST['orderer_pref']))
        {
            $orderer_pref = $_REQUEST['orderer_pref'];
        }
        if(isset($_REQUEST['orderer_postal']))
        {
            $orderer_postal = $_REQUEST['orderer_postal'];
        }
        if(isset($_REQUEST['orderer_name']))
        {
            $orderer_name = $_REQUEST['orderer_name'];
        }
        if(isset($_REQUEST['orderer_address']))
        {
            $orderer_address = $_REQUEST['orderer_address'];
        }
        if(isset($_REQUEST['orderer_tel']))
        {
            $orderer_tel = $_REQUEST['orderer_tel'];
        }

        $err_msg = "";

        $come_from = $_REQUEST [ 'come_from'];
        if ($come_from == 'here'){
            if (empty($user_id)){
                $err_msg = "ユーザーIDを入力してください ";
            }
            elseif (empty($user_name)){
                $err_msg = "氏名を入力してください ";
            }
            elseif (empty($user_mail_add)){
                $err_msg = "メールアドレスを入力してください。 ";
            }

            //コンビニ決済のみかつ、コンビニコード指定時のみ処理
            if( $st == 'conveni' ){
              $process_code = 1;
              $mission_code = 1;
              if( $conveni_code ){
                  if( empty($user_tel) ){
                      $err_msg = "ユーザ電話番号が未指定です";
                  }elseif( empty($user_name_kana) ){
                      $err_msg = "ユーザー名(カナ)が未指定です";
                  }
              }
            }elseif( ( $st == 'normal' || $st == 'atobarai') 
                     && strlen($consignee_pref.$consignee_postal.$consignee_name.$consignee_address.$consignee_tel.
                               $orderer_pref.$orderer_postal.$orderer_name.$orderer_address.$orderer_tel) ){
                /* ここを直し中 */
                if ( !preg_match("/^\d+$/", $consignee_postal  )){
                    $err_msg = "送り先郵便番号の入力が異常です";
                }
                if ( !$consignee_name ) {
                    $err_msg = "送り先名が未入力です";
                }
                if ( !$pref_list[$consignee_pref] ) {
                    $err_msg = "送り先住所(都道府県)が異常です";
                }
                if ( !$consignee_address ) {
                    $err_msg = "送り先住所が未入力です";
                }
                if ( !preg_match("/^\d+$/", $consignee_tel  )){
                    $err_msg = "送り先電話番号が異常です";
                }
                if ( !preg_match("/^\d+$/", $orderer_postal  )){
                    $err_msg = "注文主郵便番号の入力が異常です";
                }
                if ( !$orderer_name ) {
                    $err_msg = "注文主名が未入力です";
                }
                if ( !$pref_list[$orderer_pref] ) {
                    $err_msg = "注文主住所(都道府県)が異常です";
                }
                if ( !$orderer_address ) {
                    $err_msg = "注文主住所が未入力です";
                }
                if ( !preg_match("/^\d+$/", $orderer_tel  )){
                    $err_msg = "注文主電話番号が異常です";
                }
            }
        }

        if($err_msg != "")
        {
            return view('pages.settlement', compact('user', 'err_msg'));
        }

        
            
        // オーダー情報送信先URL(試験用)
        // 本番環境でご利用の場合は契約時に弊社からお送りするURLに変更してください。
        $order_url = "https://beta.epsilon.jp/cgi-bin/order/receive_order3.cgi";
	
        //EPSILONに情報を送信します。

        // httpリクエスト用のオプションを指定
        $option = array(
            "timeout" => "20", // タイムアウトの秒数指定
        //    "allowRedirects" => true, // リダイレクトの許可設定(true/false)
        //    "maxRedirects" => 3, // リダイレクトの最大回数
        );

        // HTTP_Requestの初期化

        $request = new HTTP_Request2($order_url, HTTP_Request2::METHOD_POST, $option);
        $request->setConfig(array(
            'ssl_verify_peer' => false,
            #     'ssl_verify_peer' => true,
            #     'ssl_cafile' => '/etc/ssl/certs/ca-bundle.crt', //ルートCA証明書ファイルを指定
        ));  
        // HTTPのヘッダー設定
        //$http->addHeader("User-Agent", "xxxxx");
        //$http->addHeader("Referer", "xxxxxx");

            //set post data
            if ( $process_code == "1" || $process_code == "2" ){
                $request->addPostParameter('version', '2' );
                $request->addPostParameter('contract_code', $contract_code);
                $request->addPostParameter('user_id', $user_id);
                $request->addPostParameter('user_name', mb_convert_encoding($user_name, "UTF-8", "auto"));
                $request->addPostParameter('user_mail_add', $user_mail_add);
                $request->addPostParameter('order_number', $order_number);
                $request->addPostParameter('st_code', $st_code[$st]);
                $request->addPostParameter('mission_code', $mission_code);
                $request->addPostParameter('item_price', $item_price);
                $request->addPostParameter('process_code', $process_code);
                $request->addPostParameter('memo1', $memo1);
                $request->addPostParameter('memo2', $memo2);
                $request->addPostParameter('xml', '1');
                $request->addPostParameter('character_code', 'UTF8' );

                if ( $st == "conveni" && $conveni_code != 0 ){
                    $request->addPostParameter('conveni_code' , $conveni_code );
                    $request->addPostParameter('user_tel', $user_tel );
                    $request->addPostParameter('user_name_kana', mb_convert_encoding( $user_name_kana, "UTF-8", "auto" ) );
                }elseif( ( $st == "normal" || $st == "atobarai" ) && $consignee_postal ){
                    $request->addPostParameter('delivery_code',99);
                    $request->addPostParameter('consignee_postal',$consignee_postal);
                    $request->addPostParameter('consignee_name', $consignee_name);
                    $request->addPostParameter('consignee_address',sprintf( "%s%s", $pref_list[$consignee_pref], $consignee_address));
                    $request->addPostParameter('consignee_tel', $consignee_tel);
                    $request->addPostParameter('orderer_postal', $orderer_postal);
                    $request->addPostParameter('orderer_name',  $orderer_name );
                    $request->addPostParameter('orderer_address', sprintf( "%s%s", $pref_list[$orderer_pref], $orderer_address));
                    $request->addPostParameter('orderer_tel', $orderer_tel);
                }
            }

        // HTTPリクエスト実行
        $response = $request->send();

        // 応答内容(XML)の解析
        if (!PEAR::isError($response)) {

            
            $res_code = $response->getStatus();
            $res_content = $response->getBody();

                //xml unserializer
                $temp_xml_res = str_replace("x-sjis-cp932", "UTF-8", $res_content);
                $unserializer = new XML_Unserializer();
                $unserializer->setOption('parseAttributes', TRUE);
                $unseriliz_st = $unserializer->unserialize($temp_xml_res);
                if ($unseriliz_st === true) {
                    //xmlを解析
                    $res_array = $unserializer->getUnserializedData();
                    $is_xml_error = false;
                    $xml_redirect_url = "";
                    $xml_error_cd = "";
                    $xml_error_msg = "";
                    $xml_memo1_msg = "";
                    $xml_memo2_msg = "";
                    $result = "";
                    $trans_code = "";
                    foreach($res_array['result'] as $uns_k => $uns_v){
                        list($result_atr_key, $result_atr_val) = each($uns_v);

                        switch ($result_atr_key) {
                        case 'redirect':
                            $xml_redirect_url = rawurldecode($result_atr_val);
                            break;
                        case 'err_code':
                            $is_xml_error = true;
                            $xml_error_cd = $result_atr_val;
                            break;
                        case 'err_detail':
                            $xml_error_msg = mb_convert_encoding(urldecode($result_atr_val), "UTF-8" ,"auto");
                            break;
                        case 'memo1':
                            $xml_memo1_msg = mb_convert_encoding(urldecode($result_atr_val), "UTF-8" ,"auto");
                            break;
                        case 'memo2':
                            $xml_memo2_msg = mb_convert_encoding(urldecode($result_atr_val), "UTF-8" ,"auto");
                            break;
                        case 'result':
                            $result = mb_convert_encoding(urldecode($result_atr_val), "UTF-8" ,"auto");
                            break;
                        case 'trans_code':
                            $trans_code = mb_convert_encoding(urldecode($result_atr_val), "UTF-8" ,"auto");
                            break;
                        default:
                            break;
                        }
                    }
                    
                }else{
                    //xml parser error
                    $err_msg = "xml parser error<br><br>";
                    order_form();
                    exit(1);
                }
        }else{ //http error
            $err_msg = "データの送信に失敗しました<br><br>";
            $err_msg .= "<br />res_statusCd=" . $request->getResponseCode();
            $err_msg .= "<br />res_status=" . $request->getResponseHeader('Status');
            $err_msg .= "<br .>ErrorMessage" . $response->getMessage();
            
            order_form();
            exit(1);
            
        }

        if($is_xml_error){
            // データ送信結果が失敗だった場合、オーダー入力画面に戻し、エラーメッセージを表示します。
            $err_msg = "エラー : " . $xml_error_cd . $xml_error_msg;
            return view('pages.settlement', compact('user', 'err_msg'));
        }else{
            return view('pages.settlement_result', compact('result'));
        }

    }
     
    public function order_details_old()
    { 
        if(!Auth::check())
            return redirect('login');
        $user_id=Auth::user()->id;
        $user = User::findOrFail($user_id);

        $carts=Cart::where('user_id',$user_id)->orderBy('id')->get();
        if( isset($carts) && count($carts)>0){
            $user->delidate = $carts[0]['delidate'];
            $user->delitime = $carts[0]['delitime'];
            $user->kind = $carts[0]['kind'];
            $user->paykind = $carts[0]['paykind'];
            $user->notice = $carts[0]['notice'];
        }

        $to_date = date('Y-m-d');
        $to_time = date('G:i:s');
        return view('pages.cart_order_details',compact('user', 'to_date', 'to_time'));
    } 


    public function confirm_order_details_old(Request $request) 
    { 
        $data =  \Input::except(array('_token')) ;
        $user_id=Auth::user()->id;
        $user = User::findOrFail($user_id);
        
        $inputs = $request->all();
        
        $is_valsum = true;
        if($inputs['delikind'] == 1){
            $sumprice = Cart::where('user_id', Auth::id())->sum('item_price');
            $validzone = Zone::where('postcode',$inputs['postal_code'])
                                ->orWhere('city', $inputs['city'])
                                ->get();
            if($sumprice < $validzone[0]['amount']){
                $is_valsum = false;
            }
        }
        
        $carts = Cart::where('user_id', $user_id)->get();
        foreach($carts as $cart){
            $cartobj = Cart::findOrFail($cart->id);
            $cartobj->delidate = $inputs['dayinput'];
            $cartobj->delitime = $inputs['delitime'];
            if($is_valsum)
                $cartobj->kind = $inputs['delikind'];
            $cartobj->paykind = $inputs['paykind'];
            $cartobj->notice = $inputs['notice'];
            $cartobj->save();
        }
        if(!$is_valsum){
            return redirect()->back()->withErrors(trans("messages.miniumerror") . ' ' .trans("messages.minumum amount") . ' : ' . getcong('currency_symbol') . $validzone['amount']);
        }

        $rule=array(
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|max:75',
            'mobile' => 'required',
            'address' => 'required',
             );
        if($inputs['delikind'] == 1){
            $rule['postal_code'] = 'required';
            $rule['city'] = 'required';
        }
        
        $validator = \Validator::make($data,$rule);

        if ($validator->fails())
        {
            return redirect()->back()->withErrors($validator->messages());
        } 
           
        
        $user->first_name = $inputs['first_name']; 
        $user->last_name = $inputs['last_name'];
        $user->email = $inputs['email'];
        $user->mobile = $inputs['mobile'];
        $user->address = $inputs['address'];
        if($inputs['delikind'] == 1){
            $user->postal_code = $inputs['postal_code'];
            $user->city = $inputs['city'];
        }
         
        $user->save();

        $cart_res=Cart::where('user_id',$user_id)->orderBy('id')->get();

        $deli_fee = getcong('delifee');
        if($inputs['delikind'] == 2)
            $deli_fee = 0;
            
        $cur_date = strtotime(date('Y-m-d'));
        $m_cur_date = date('d.m.Y');
        $m_cur_time = date('G:i');
        
        foreach ($cart_res as $n => $cart_item) {
            
            $order = new Order; 
 
            $order->user_id = $user_id;
            $order->hotspring_id =$cart_item->hotspring_id;
            $order->item_id = $cart_item->item_id; 
            $order->item_name = $cart_item->item_name;       
            $order->item_price = $cart_item->item_price + $cart_item->quantity * $deli_fee;
            $order->quantity= $cart_item->quantity;  

            $order->created_date= $cur_date;

            $order->status= 'Pending';

            $order->delidate = $inputs['dayinput'];
            $order->delitime = $inputs['delitime'];
            $order->kind = $inputs['delikind'];
            $order->paykind = $inputs['paykind'];
            $order->notice = $inputs['notice'];
            $order->save();

        }

            $restaurant = HotSpring::get()->first();
            $order_list = Cart::where('user_id',$user_id)->orderBy('id')->get();
            foreach($order_list as $order){
                $order['item_price'] += $order['quantity'] * $deli_fee;
            }
            $data = array(
                'ufname' => $inputs['first_name'],
                'ulname' => $inputs['last_name'],
                'uaddress' => $inputs['address'],
                'ucity' => $inputs['city'],
                'upostalcode' => $inputs['postal_code'],
                'umobile' => $inputs['mobile'],
                'udelidate' => date("d.m.Y", strtotime($inputs['dayinput'])),
                'udelitime' => $inputs['delitime'],
                'delifee' => $deli_fee,
                'ukind' => $inputs['delikind'],
                'upayway' => $inputs['paykind'],
                'unotice' => $inputs['notice'],
                'curdate' => $m_cur_date,
                'curtime' => $m_cur_time,
                'order_list' => $order_list,
                'restaurant' => $restaurant,
             );
            $subject=getcong('site_name').' Order Confirmed';
            
            $uemail=$inputs['email'];
            
            //Admin/Owner Email

            $subject2='New Order Placed';
            
            //$owner_admin_order_email=[getcong('site_email')];
            
            // \Mail::send('emails.order_item_owner_admin', $data, function ($message) use ($subject2,$owner_admin_order_email){

            //     $message->from(getcong('site_email'), getcong('site_name'));

            //     $message->to($owner_admin_order_email)->subject($subject2);

            // });


            // \Mail::send('emails.order_item_owner_admin', $data, function ($message) use ($subject2, $uemail){

            //     $message->from(getcong('site_email'), getcong('site_name'));

            //     $message->to($uemail)->subject($subject2);

            // });
        return view('pages.cart_order_confirm_details');
    } 


     public function user_orderlist()
    { 
        if(!Auth::check())
            return redirect('login');
        $user_id=Auth::user()->id;
        $order_list = Order::where('user_id',$user_id)->orderBy('id','desc')->orderBy('created_date','desc')->get();

        return view('pages.my_order',compact('order_list'));
    }

     public function cancel_order($order_id)
    { 
        $order = Order::findOrFail($order_id);
        

        $order->status = 'Cancel'; 
        $order->save();
        
        
        \Session::flash('flash_message', 'Order has been cancel');

        return \Redirect::back();

        
    }

 

}
