<?php

namespace App\Http\Controllers\Admin;

use Auth;
use App\User;
use App\Restaurants;
use App\Categories;
use App\Menu;
use App\Order;
use App\Types;
use App\Review;

use App\Http\Requests;
use Illuminate\Http\Request;
use Session;
use Intervention\Image\Facades\Image; 


class RestaurantsController extends MainAdminController
{
	public function __construct()
    {
		 $this->middleware('auth');
		  
		parent::__construct(); 	
		  
    }

  

    public function restaurants()    { 
        
              
        $restaurants = Restaurants::orderBy('hotspring_name')->get();
        
        if(Auth::User()->usertype!="Admin"){

            \Session::flash('flash_message', 'Access denied!');

            return redirect('admin/dashboard');
            
        }
         
        return view('admin.pages.restaurants',compact('restaurants'));
    }



    
    public function addeditrestaurant()    { 
         
        if(Auth::User()->usertype!="Admin"){

            \Session::flash('flash_message', 'Access denied!');

            return redirect('admin/dashboard');
            
        }

        $types = Types::orderBy('type')->get();

        
        return view('admin.pages.addeditrestaurant',compact('types'));
    }
    
    public function addnew(Request $request)
    { 
    	
    	$data =  \Input::except(array('_token')) ;
	    
	    $rule=array(
		        'hotspring_type' => 'required',
                'hotspring_name' => 'required',
                'hotspring_logo' => 'mimes:jpg,jpeg,gif,png' 		         
		   		 );
	    
	   	 $validator = \Validator::make($data,$rule);
 
        if ($validator->fails())
        {
                return redirect()->back()->withErrors($validator->messages());
        } 
	    $inputs = $request->all();
		
		if(!empty($inputs['id'])){
           
            $hotspring_obj = HotSpring::findOrFail($inputs['id']);

        }else{

            $hotspring_obj = new HotSpring;

        }


        //Slug

        if($inputs['hotspring_slug']=="")
        {
            $hotspring_slug = str_slug($inputs['hotspring_name'], "-");
        }
        else
        {
            $hotspring_slug =str_slug($inputs['hotspring_slug'], "-"); 
        }

        //Logo image
        $hotspring_logo = $request->file('hotspring_logo');
         
        if($hotspring_logo){
            
             \File::delete(public_path() .'/upload/hotspring/'.$hotspring_obj->hotspring_logo.'-b.jpg');
            \File::delete(public_path() .'/upload/hotspring/'.$hotspring_obj->hotspring_logo.'-s.jpg');
            
            $tmpFilePath = 'upload/restaurants/';          
             
            $hardPath = substr($hotspring_slug,0,100).'_'.time();
            
            $img = Image::make($hotspring_logo);

            $img->fit(120, 120)->save($tmpFilePath.$hardPath.'-b.jpg');
            $img->fit(98, 98)->save($tmpFilePath.$hardPath. '-s.jpg');

            $hotspring_obj->hotspring_logo = $hardPath;
             
        }
		
        $user_id=Auth::User()->id;
		 
		$hotspring_obj->user_id = $user_id;
        $hotspring_obj->hotspring_type = $inputs['hotspring_type'];
        $hotspring_obj->hotspring_name = $inputs['hotspring_name']; 
		$hotspring_obj->hotspring_slug = $hotspring_slug;
        $hotspring_obj->restaurant_address = $inputs['restaurant_address']; 
        $hotspring_obj->restaurant_description = $inputs['restaurant_description']; 
        $hotspring_obj->delivery_charge = $inputs['shipping_price']; 
        

        $hotspring_obj->open_monday = $inputs['open_monday'];
        $hotspring_obj->open_tuesday = $inputs['open_tuesday'];
        // $hotspring_obj->open_wednesday = $inputs['open_wednesday'];
        // $hotspring_obj->open_thursday = $inputs['open_thursday'];
        // $hotspring_obj->open_friday = $inputs['open_friday'];
        // $hotspring_obj->open_saturday = $inputs['open_saturday'];
        // $hotspring_obj->open_sunday = $inputs['open_sunday']; 
		 
		
		 
	    $hotspring_obj->save();
		
		if(!empty($inputs['id'])){

            \Session::flash('flash_message', 'Changes Saved');

            return \Redirect::back();
        }else{

            \Session::flash('flash_message', 'Added');

            return \Redirect::back();

        }		     
        
         
    }     
    
    public function editrestaurant($id)    
    {     
    
    	  if(Auth::User()->usertype!="Admin"){

            \Session::flash('flash_message', 'Access denied!');

            return redirect('admin/dashboard');
            
        }

          $types = Types::orderBy('type')->get();   	     
          $restaurant= Restaurants::findOrFail($id);
          
          return view('admin.pages.addeditrestaurant',compact('restaurant','types'));
        
    }	 
    
    public function delete($id)
    {
    	if(Auth::User()->usertype!="Admin"){

            \Session::flash('flash_message', 'Access denied!');

            return redirect('admin/dashboard');
            
        }
        	
        $cat = Restaurants::findOrFail($id);
        $cat->delete();

        \Session::flash('flash_message', 'Deleted');

        return redirect()->back();

    }

    public function restaurantview($id)    
    {     
    
          if(Auth::User()->usertype!="Admin"){

            \Session::flash('flash_message', 'Access denied!');

            return redirect('admin/dashboard');
            
        }

           
          $restaurant= Restaurants::findOrFail($id);
          
          $categories_count = Categories::where(['hotspring_id' => $id])->count();

          $menu_count = Menu::where(['hotspring_id' => $id])->count();

          $order_count = Order::where(['hotspring_id' => $id])->count();

          $review_count = Review::where(['hotspring_id' => $id])->count();

          return view('admin.pages.restaurantview',compact('restaurant','categories_count','menu_count','order_count','review_count'));
        
    }   
    
    public function reviewlist($id)    { 
        
              
        $review_list = Review::where("hotspring_id", $id)->orderBy('date')->get();
        
        if(Auth::User()->usertype!="Admin"){

            \Session::flash('flash_message', 'Access denied!');

            return redirect('admin/dashboard');
            
        }
        
        $hotspring_id=$id; 
 

        return view('admin.pages.review_list',compact('review_list','hotspring_id'));
    } 


    public function my_restaurants()    
    {     
    
          if(Auth::User()->usertype!="Owner"){

            \Session::flash('flash_message', 'Access denied!');

            return redirect('admin/dashboard');
            
         }

         $user_id=Auth::User()->id;

         $restaurant= Restaurants::where('user_id',$user_id)->first();
         
          $types = Types::orderBy('type')->get();

         /* $restaurant= Restaurants::findOrFail($id);
          
          $categories_count = Categories::where(['hotspring_id' => $id])->count();

          $menu_count = Menu::where(['hotspring_id' => $id])->count();

          $order_count = Order::where(['hotspring_id' => $id])->count();

          $review_count = Review::where(['hotspring_id' => $id])->count();

          return view('admin.pages.restaurantview',compact('restaurant','categories_count','menu_count','order_count','review_count'));*/

          return view('admin.pages.owner_restaurantview',compact('restaurant','types'));
        
    } 

    public function owner_reviewlist()    { 
        
        
        if(Auth::User()->usertype!="Owner"){

            \Session::flash('flash_message', 'Access denied!');

            return redirect('admin/dashboard');
            
        }
        

        $user_id=Auth::User()->id;

        $restaurant= Restaurants::where('user_id',$user_id)->first();

        $hotspring_id=$restaurant['id'];

        $review_list = Review::where("hotspring_id", $hotspring_id)->orderBy('date')->get();
       

        return view('admin.pages.owner.review_list',compact('review_list','hotspring_id'));
    }   
    
    public function addeditcustom()    { 
         
        if(Auth::User()->usertype!="Admin"){

            \Session::flash('flash_message', 'Access denied!');

            return redirect('admin/dashboard');
            
        }

        $types = Types::orderBy('type')->get();
        $restaurant = Restaurants::orderBy('hotspring_name')->get()[0];
        
        return view('admin.pages.addeditcustom',compact('restaurant', 'types'));
    }
    
    public function savecustom(Request $request)
    { 
    	
    	$data =  \Input::except(array('_token')) ;
	    
	    $rule=array(
		        'hotspring_type' => 'required',
                'hotspring_name' => 'required',
                'hotspring_logo' => 'mimes:jpg,jpeg,gif,png' 		         
		   		 );
	    
	   	 $validator = \Validator::make($data,$rule);
 
        if ($validator->fails())
        {
                return redirect()->back()->withErrors($validator->messages());
        } 
	    $inputs = $request->all();
		
		if(!empty($inputs['id'])){
           
            $hotspring_obj = HotSpring::findOrFail($inputs['id']);

        }else{

            $hotspring_obj = new HotSpring;

        }

        //Slug

        if($inputs['hotspring_slug']=="")
        {
            $hotspring_slug = str_slug($inputs['hotspring_name'], "-");
        }
        else
        {
            $hotspring_slug =str_slug($inputs['hotspring_slug'], "-"); 
        }

        //Logo image
        $hotspring_logo = $request->file('hotspring_logo');
         
        if($hotspring_logo){
            
             \File::delete(public_path() .'/upload/hotspring/'.$hotspring_obj->hotspring_logo.'-b.jpg');
            \File::delete(public_path() .'/upload/hotspring/'.$hotspring_obj->hotspring_logo.'-s.jpg');
            
            $tmpFilePath = 'upload/hotspring/';          
             
            $hardPath = substr($hotspring_slug,0,100).'_'.time();
            
            $img = Image::make($hotspring_logo);

            $img->fit(120, 120)->save($tmpFilePath.$hardPath.'-b.jpg');
            $img->fit(98, 98)->save($tmpFilePath.$hardPath. '-s.jpg');

            $hotspring_obj->hotspring_logo = $hardPath;
             
        }
		
        $user_id=Auth::User()->id;
		 
		$hotspring_obj->user_id = $user_id;
        $hotspring_obj->hotspring_type = $inputs['hotspring_type'];
        $hotspring_obj->hotspring_name = $inputs['hotspring_name']; 
		$hotspring_obj->hotspring_slug = $hotspring_slug;
        $hotspring_obj->restaurant_address = $inputs['restaurant_address']; 
        $hotspring_obj->restaurant_description = $inputs['restaurant_description']; 
        $hotspring_obj->delivery_charge = $inputs['shipping_price']; 	
        $hotspring_obj->mwst = $inputs['restaurant_mwst']; 	
        $hotspring_obj->sitename = $inputs['restaurant_sitename']; 	
		 
	    $hotspring_obj->save();
		
		if(!empty($inputs['id'])){

            \Session::flash('flash_message', 'Changes Saved');

            return \Redirect::back();
        }else{

            \Session::flash('flash_message', 'Added');

            return \Redirect::back();

        }
    } 
}
