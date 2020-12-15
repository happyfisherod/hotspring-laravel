<?php

namespace App\Http\Controllers\Admin;

use Auth;
use App\User;
use App\Types;
use App\HotSpring;
use App\Categories;
use App\Menu;
use App\Review;
use App\Order;
use App\Http\Requests;
use Illuminate\Http\Request;


class DashboardController extends MainAdminController
{
	public function __construct()
    {
		 $this->middleware('auth');	
         
    }
    public function index()
    { 
    	 if(Auth::user()->usertype=='Admin')	
          {  
        		$types = Types::count(); 
        		$hotspring_count = HotSpring::count(); 
            //$order = Order::count(); 
            $order = Order::Join('users', 'hotspring_order.user_id', '=', 'users.id')                           
                        ->select('hotspring_order.*')
                        ->orderBy('hotspring_order.id', 'desc')
                        ->orderBy('hotspring_order.created_date','desc')
                        ->count();
        	 	$users = User::where('usertype', 'User')->count(); 

            return view('admin.pages.dashboard',compact('types','hotspring_count','order','users'));

	      }

          if(Auth::user()->usertype=='Owner')
          {
            
            $user_id=Auth::User()->id;

            $hotspring= HotSpring::where('user_id',$user_id)->first();

            $hotspring_id=$hotspring['id'];

             

            $categories_count = Categories::where(['hotspring_id' => $hotspring_id])->count();

            $menu_count = Menu::where(['hotspring_id' => $hotspring_id])->count();

            //$order_count = Order::where(['hotspring_id' => $hotspring_id])->count();
            $order_count = Order::Join('users', 'hotspring_order.user_id', '=', 'users.id')                           
                        ->select('hotspring_order.*')
                        ->where(['hotspring_id' => $hotspring_id])
                        ->orderBy('hotspring_order.id', 'desc')
                        ->orderBy('hotspring_order.created_date','desc')
                        ->count();

            $review_count = Review::where(['hotspring_id' => $hotspring_id])->count();


            return view('admin.pages.owner_dashboard',compact('categories_count','menu_count','order_count','review_count')); 
          }
	    	  
    	
        
    }
	
	 
    	
}
