<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use Response;
use App\Types;
use App\Menu;
use App\Order;
use App\Chat;
use App\HotSpring;
use Illuminate\Support\Facades\Hash;
//use App\Booking;
use Validator;
use DB;
use Mail;

class ApiController extends Controller {


    public function HotSpring(Request $request) {
        //  print_r($request->all());exit;
         // $latitude = $request->latitude;
         // $longitude = $request->longitude;
        //  $radius = $request->radius;
        //   $parkings =DB::select("SELECT parkings.*,(
        //                       3959 * acos (
        //                         cos ( radians($latitude) )
        //                         * cos( radians( latitude ) )
        //                         * cos( radians( longitude ) - radians($longitude) )
        //                         + sin ( radians($latitude) )
        //                         * sin( radians( latitude ) )
        //                       )
        //                     ) AS distance FROM parkings
        //                   HAVING distance < ".$radius."
        //                   ORDER BY distance");
          //print_r($parkings);exit;
          $Restaurents = HotSpring::orderBy("id", "DESC")->get();
          if ($Restaurents) {
              
              return Response::json(
                              array(
                          'status' => true,
                          'data' => $Restaurents
                              ), 200
              );
          } else {
              return Response::json(
                              array(
                          'error' => [
                              'message' => "Something wrong with your Information"
                          ]
                              ), 404
              );
          }
      }


      public function HotSpring_Type() {
          $HotSpring_Type = Types::orderBy("id", "DESC")->get();
          if ($HotSpring_Type) {
              
              return Response::json(
                              array(
                          'status' => true,
                          'data' => $HotSpring_Type
                              ), 200
              );
          } else {
              return Response::json(
                              array(
                          'error' => [
                              'message' => "Something wrong with your Information"
                          ]
                              ), 404
              );
          }
      }


      public function HotSpringById($id) {
        $HotSpring = HotSpring::where("id", $id)->first();
        if ($HotSpring) {
            return Response::json(
                            array(
                        'status' => true,
                        'data' => $HotSpring
                            ), 200
            );
        } else {
            return Response::json(
                            array(
                        'error' => [
                            'message' => "Something wrong with your Information"
                        ]
                            ), 404
            );
        }
    }


    public function HotSpringDishes($id) {
        $HotSpringsmenu = Menu::where("hotspring_id", $id)->get();
        if ($HotSpringmenu) {
            return Response::json(
                            array(
                        'status' => true,
                        'data' => $HotSpringsmenu
                            ), 200
            );
        } else {
            return Response::json(
                            array(
                        'error' => [
                            'message' => "Something wrong with your Information"
                        ]
                            ), 404
            );
        }
    }


    public function CreateOrder(Request $request){

        $validator = Validator::make($request->all(), [
            'user_id' => 'required',
            'hotspring_id' => 'required',
            'item_id' => 'required',
            'item_price' => 'required',
            'quantity' => 'required',
        ]);

        if ($validator->fails())
        {
            $errorString = implode(",",$validator->messages()->all());
            $valierror = $validator->errors();
            return response()->json([
                'ResponseCode' => '203',
                'ResponseMessage' => $errorString
            ]);

        }else{

            $user_id = $request->input('user_id');
            $hotspring = $request->input('hotspring_id');
            $item_id = $request->input('item_id');
            $item_price = $request->input('item_price');
            $quantity = $request->input('quantity');
            $item_name = $request->input('item_name');
            $payment_status = $request->input('payment_status');
            $payment_method = $request->input('payment_method');
            $order_notes = $request->input('order_notes');
            $ref_number = $request->input('Ref_number');
            
            $created_date=date('Y-m-d H:i:s');
            $query = Order::insert([
                'user_id' => $user_id,
                'hotspring_id' => $hotspring,
                'item_id' => $item_id,
                'item_price' => $item_price,
                'quantity' => $quantity,
                'item_name' => $item_name,
                'created_date' => $created_date,
                'payment_status' => $payment_status,
                'payment_method' => $payment_method,
                'order_notes' => $order_notes,
                'ref_number' => $ref_number,
                'status' => 'Pending'
            ]);
           // $last_id = Order::getPdo()->lastInsertId();


          //  $uInformation = Order::where("id", $last_id)->first();

            if($query == true)
            {   
                return response()->json([
                    'ResponseCode' => '200',
                    'ResponseMessage' => 'Order Placed Successfully',
                    //'Info' => $uInformation,
                ]);

            }else{

                return response()->json([
                    'ResponseCode' => '203',
                    'ResponseMessage' => 'Order Placed Failed',
                ]);
            }

        }

    }



    public function User_Orders($id) {
        $orders = Order::where("user_id", $id)->get();
        $bI = array();
        foreach ($orders as $key => $orders) {
            $orders->hotspring = DB::table('hotspring')->where("id", $orders->hotspring_id)->first();
            $bI[] = $orders;
        }
        if ($bI) {
            return Response::json(
                            array(
                        'status' => true,
                        'data' => $bI
                            ), 200
            );
        } else {
            return Response::json(
                            array(
                        'error' => [
                            'message' => "Something wrong with your Information"
                        ]
                            ), 404
            );
        }
    }


    public function User_Chats_Restrau(Request $request){
        $validator = Validator::make($request->all(), [
            'user_id' => 'required',
            'to_user_id' => 'required',
        ]);

        if ($validator->fails())
        {
            $errorString = implode(",",$validator->messages()->all());
            $valierror = $validator->errors();
            return response()->json([
                'ResponseCode' => '203',
                'ResponseMessage' => $errorString
            ]);

        }else{

            $user_id = $request->input('user_id');
            $to_user_id = $request->input('to_user_id');


        $matchThese = ['user_id' => $user_id, 'to_user_id' => $to_user_id];
        $matchthese_too = ['user_id' => $to_user_id, 'to_user_id' => $user_id];
        $chats =  DB::table('chat')->where($matchThese)->orWhere($matchthese_too)->get();
      
        if ($chats) {
            return Response::json(
                            array(
                        'status' => true,
                        'data' => $chats
                            ), 200
            );
        } else {
            return Response::json(
                            array(
                        'error' => [
                            'message' => "Something wrong with your Information"
                        ]
                            ), 404
            );
        }
    }
}


public function Send_msg(Request $request){

    $validator = Validator::make($request->all(), [
        'user_id' => 'required',
        'to_user_id' => 'required',
        'message' => 'required'
    ]);

    if ($validator->fails())
    {
        $errorString = implode(",",$validator->messages()->all());
        $valierror = $validator->errors();
        return response()->json([
            'ResponseCode' => '203',
            'ResponseMessage' => $errorString
        ]);

    }else{

        $user_id = $request->input('user_id');
        $to_user_id = $request->input('to_user_id');
        $message = $request->input('message');
        
        $created_date=date('Y-m-d H:i:s');
        $query = Chat::insert([
            'user_id' => $user_id,
            'to_user_id' => $to_user_id,
            'message' => $message,
            'message_time' => $created_date,
            'status' => 'Sent'
        ]);
       // $last_id = Order::getPdo()->lastInsertId();
       $last_id = DB::getPdo()->lastInsertId();
       $uInformation = DB::table('chat')->where("message_id", $last_id)->first();

      //  $uInformation = Order::where("id", $last_id)->first();

        if($query == true)
        {   
            return response()->json([
                'ResponseCode' => '200',
                'ResponseMessage' => 'Message Sent Successfully',
                'Chat' => $uInformation
                //'Info' => $uInformation,
            ]);

        }else{

            return response()->json([
                'ResponseCode' => '203',
                'ResponseMessage' => 'Order Placed Failed',
            ]);
        }

    }

}
   




    public function userLogin(Request $request){

        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required',
        ]);

        if ($validator->fails())
        {
            $errorString = implode(",",$validator->messages()->all());
            $valierror = $validator->errors();
            return response()->json([
                'ResponseCode' => '203',
                'ResponseMessage' => $errorString
            ]);

        }else{

            $email = $request->input('email');
            $password = $request->input('password');

            $uTable = 'users';
            $query = DB::table($uTable)->where('email', $email)->get();

            //$number_rows = $query->count();
            if(count($query) > 0)
            {
                 $user_id = $query[0]->id; 
                $dbpassword = $query[0]->password;
                if (Hash::check($password, $dbpassword))
                {
                    
                    $uInformation = DB::table('users')->where("id", $user_id)->first();
                    return response()->json([
                        'ResponseCode' => '200',
                        'ResponseMessage' => 'Login Successfully',
                        'Info' => $uInformation,

                    ]);
                }else{
                    return response()->json([
                        'ResponseCode' => '203',
                        'ResponseMessage' => 'Password is incorrect',
                    ]);
                }
            }else{

                return response()->json([
                    'ResponseCode' => '203',
                    'ResponseMessage' => 'Account with given email or phone number does not exist',
                ]);
            }
        }

    }


    public function userRegister(Request $request){

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'phone' => 'required'
        ]);

        if ($validator->fails())
        {
            $errorString = implode(",",$validator->messages()->all());
            $valierror = $validator->errors();
            return response()->json([
                'ResponseCode' => '203',
                'ResponseMessage' => $errorString
            ]);

        }else{

            $first_name = $request->input('name');
            $email = $request->input('email');
            $mobile = $request->input('phone');
            $password = $request->input('password');

            $hashPass = Hash::make($password);
            $address = $request->input('address');
            $chkqry = DB::table('users')->where('email', $email)->get();
            if(count($chkqry) > 0){
                return response()->json([
                    'ResponseCode' => '203',
                    'ResponseMessage' => 'Email ID already exist',
                ]);
            }
            $createddate=date('Y-m-d H:i:s');
            $query = DB::table('users')->insert([
                'first_name' => $first_name,
                'email' => $email,
                'mobile' => $mobile,
                'address' => $address,
                'password' => $hashPass,
                'usertype' => 'app',
                'created_at' => $createddate,
            ]);
            $last_id = DB::getPdo()->lastInsertId();


            $uInformation = DB::table('users')->where("id", $last_id)->first();

            if($query == true)
            {   
                return response()->json([
                    'ResponseCode' => '200',
                    'ResponseMessage' => 'Registered Successfully',
                    'Info' => $uInformation,
                ]);

            }else{

                return response()->json([
                    'ResponseCode' => '203',
                    'ResponseMessage' => 'Registration Failed',
                ]);
            }

        }

    }

    public function forgotPassword(Request $request) {
        $email = $request->input('email');
        $uInformation = DB::table('users')->where("email", $email)->first();
        
        if ($uInformation) {
            $user_value = array();

            $password = base64_encode(random_bytes(10));
            $user_value['password'] =Hash::make($password); 

            $uptquery = DB::table('users')->where('email', $email)->update($user_value);

            $txt = "Your new password is : $password.";

            $token = str_random(64);

            DB::table(config('auth.passwords.users.table'))->insert([
                'email' => $email, 
                'token' => $token
            ]);

            Mail::send('emails.password', ['email' => $email, 'token' => $token], function ($message) use ($email) {
                $message->from('fdo.pedidos@gmail.com','FDO Pedidos');
                $message->to($email);
                $message->subject("Your Password Reset Link");
            });

            return response()->json([
                        'ResponseCode' => '200',
                        'ResponseMessage' => 'Successfully',
                        'Info' => $email,

                    ]);
        } else {
            return Response::json(
                            array(
                        'error' => [
                            'message' => "There isn't a user with this email"
                        ]
                            ), 404
            );
        }
    }


    public function socialLogin(Request $request){

        $validator = Validator::make($request->all(), [
            'facebook_id' => 'required',
        ]);

        if ($validator->fails())
        {
            $errorString = implode(",",$validator->messages()->all());
            $valierror = $validator->errors();
            return response()->json([
                'ResponseCode' => '203',
                'ResponseMessage' => $errorString
            ]);

        }else{

            $name = $request->input('name');
            $email = $request->input('email');
            $facebook_id = $request->input('facebook_id');

            $uTable = 'users';
            $query = DB::table($uTable)->where('facebook_id', $facebook_id)->first();

            //$number_rows = $query->count();
            if($query)
            {
                    return response()->json([
                        'ResponseCode' => '200',
                        'ResponseMessage' => 'Login Successfully',
                        'Info' => $query,
                    ]);    
            }else{

                $query = DB::table('users')->insert([
                                                        'first_name' => $name,
                                                        'email' => $email,
                                                        'facebook_id' => $facebook_id,
                                                        'usertype' => 'app'
                                                    ]);
                $last_id = DB::getPdo()->lastInsertId();

                $uInformation = DB::table('users')->where("id", $last_id)->first();
                return response()->json([
                        'ResponseCode' => '200',
                        'ResponseMessage' => 'Login Successfully',
                        'Info' => $uInformation,
                    ]);
            }
        }

    }

    public function userbyid($id) {
        $uInformation = DB::table('users')->where("id", $id)->first();
        
        if ($uInformation) {
            return response()->json([
                        'ResponseCode' => '200',
                        'ResponseMessage' => 'Successfully',
                        'Info' => $uInformation,

                    ]);
        } else {
            return Response::json(
                            array(
                        'error' => [
                            'message' => "Something wrong with your Information"
                        ]
                            ), 404
            );
        }
    }

    public function Cancel_Order(Request $request){
        $validator = Validator::make($request->all(), [
            'status' => 'required',
            'order_id' => 'required',
        ]);

        if ($validator->fails())
        {
            $errorString = implode(",",$validator->messages()->all());
            $valierror = $validator->errors();
            return response()->json([
                'ResponseCode' => '203',
                'ResponseMessage' => $errorString
            ]);

        }else{
            $user_value = array();

            $id = $request->input('order_id');
            if($request->has('status')){
                $user_value['status'] =$request->input('status');                
            }
         
            $uptquery = DB::table('hotspring_order')->where('id', $id)->update($user_value);

            $uInformation = DB::table('hotspring_order')->where("id", $id)->first();

            if($uInformation)
            {   
                return response()->json([
                    'ResponseCode' => 200,
                    'ResponseMessage' => 'Updated Successfully',
                    'Info' => $uInformation,
                ]);

            }else{

                return response()->json([
                    'ResponseCode' => 203,
                    'ResponseMessage' => 'Update Failed',
                ]);
            }

        }
    }


    public function updateUser(Request $request){

        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'email' => 'required',
        ]);

        if ($validator->fails())
        {
            $errorString = implode(",",$validator->messages()->all());
            $valierror = $validator->errors();
            return response()->json([
                'ResponseCode' => '203',
                'ResponseMessage' => $errorString
            ]);

        }else{
            $user_value = array();

            $id = $request->input('id');
            if($request->has('first_name')){
                $user_value['first_name'] =$request->input('first_name');                
            }
            if($request->has('email')){
                $user_value['email'] =$request->input('email');                
            }
            if($request->has('mobile')){
                $user_value['mobile'] =$request->input('mobile');                
            }
            if($request->has('image')){
                $destinationPath ="upload/members";
                $img = $request->input('image');
                $img = str_replace('data:image/png;base64,', '', $img);
                $img = str_replace('data:image/jpeg;base64,', '', $img);
                $img = str_replace(' ', '+', $img);
                $data = base64_decode($img);
                $file =  $destinationPath . time() . '.png';
                $success = file_put_contents($file, $data);
                //$path = url("assets/images/profile/$file");
                $user_value['image_icon'] ="https://".$_SERVER['HTTP_HOST'].'/food_delivery/public/'.$file;                
            }
            if($request->has('password')){
                $password = $request->input('password');
                $user_value['password'] =Hash::make($password);                
            }
            $uptquery = DB::table('users')->where('id', $id)->update($user_value);

            $uInformation = DB::table('users')->where("id", $id)->first();

            if($uInformation)
            {   
                return response()->json([
                    'ResponseCode' => 200,
                    'ResponseMessage' => 'Updated Successfully',
                    'Info' => $uInformation,
                ]);

            }else{

                return response()->json([
                    'ResponseCode' => 203,
                    'ResponseMessage' => 'Update Failed',
                ]);
            }

        }

    }






}