<?php

namespace App\Http\Controllers\Admin;

use Auth;
use App\User;
use App\Order;
use App\Categories;
use App\Restaurants;

use App\Http\Requests;
use Illuminate\Http\Request;
use Session;
use Intervention\Image\Facades\Image; 
use Illuminate\Support\Facades\DB;


class OrderController extends MainAdminController
{
	public function __construct()
    {
		 $this->middleware('auth');
		  
		parent::__construct(); 	
		  
    }
    public function orderlist($id)    { 
        
              
        $order_list = Order::where("hotspring_id", $id)->orderBy('id','desc')->orderBy('created_date','desc')->get();
        
        if(Auth::User()->usertype!="Admin"){

            \Session::flash('flash_message', 'Access denied!');

            return redirect('admin/dashboard');
            
        }
        
        $hotspring_id=$id; 

        return view('admin.pages.order_list',compact('order_list','hotspring_id'));
    }
    
    public function alluser_order()    { 
        
        $order_list = DB::table('hotspring_order')
                           ->Join('users', 'hotspring_order.user_id', '=', 'users.id')                           
                           ->select('hotspring_order.*')
                           ->orderBy('hotspring_order.id', 'desc')
                           ->orderBy('hotspring_order.created_date','desc')
                           ->get();
        
        if(Auth::User()->usertype!="Admin"){

            \Session::flash('flash_message', 'Access denied!');

            return redirect('admin/dashboard');
            
        }
        
        return view('admin.pages.order_list_for_all',compact('order_list'));
    }

    public function order_status($id,$order_id,$status)   
    { 
        $order = Order::findOrFail($order_id);
        if($order->status == $status){
            return \Redirect::back();
        }
        $order->status = $status; 
        $order->save();
        
        if($status == "Processing"){
            $sel_order = DB::table('hotspring_order')
                               ->leftJoin('users', 'hotspring_order.user_id', '=', 'users.id')                           
                               ->select('hotspring_order.*','users.email')
                               ->where('hotspring_order.id', '=', $order_id)
                               ->first();
            $data = array(
                'order_name' => $sel_order->item_name,
            );
            $subject = getcong('site_name').' Order Confirmed';
            $user_order_email = $sel_order->email;
            \Mail::send('emails.accept_order', $data, function ($message) use ($subject,$user_order_email){
                $message->from(getcong('site_email'), getcong('site_name'));
                $message->to($user_order_email)->subject($subject);
            });    
        }
        
        \Session::flash('flash_message', 'Status change');

        return \Redirect::back();
        
    } 
     
    public function delete($id,$order_id)
    {
        if(Auth::User()->usertype!="Admin"){

            \Session::flash('flash_message', 'Access denied!');

            return redirect('admin/dashboard');
            
        }
            
        $order = Order::findOrFail($order_id);
        $order->delete();

        \Session::flash('flash_message', 'Deleted');

        return redirect()->back();

    } 
    

    public function owner_orderlist()    { 
        
         $user_id=Auth::User()->id;

         $hotspring= HotSpring::where('user_id',$user_id)->first();

         $hotspring_id=$hotspring['id'];
 

        $order_list = Order::where("hotspring_id", $hotspring_id)->orderBy('created_date')->get();
        
        if(Auth::User()->usertype!="Owner"){

            \Session::flash('flash_message', 'Access denied!');

            return redirect('admin/dashboard');
            
        }
        
         

        return view('admin.pages.owner.order_list',compact('order_list','hotspring_id'));
    }

    public function owner_order_status($order_id,$status)   
    { 
         
        $order = Order::findOrFail($order_id);

        

        $order->status = $status; 
         
        
         
        $order->save();
        
        
            \Session::flash('flash_message', 'Status change');

            return \Redirect::back();
        
    } 

    public function owner_delete($order_id)
    {
        if(Auth::User()->usertype!="Owner"){

            \Session::flash('flash_message', 'Access denied!');

            return redirect('admin/dashboard');
            
        }
            
        $order = Order::findOrFail($order_id);
        $order->delete();

        \Session::flash('flash_message', 'Deleted');

        return redirect()->back();

    } 

}
