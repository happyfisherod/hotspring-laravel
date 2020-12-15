<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\HotSpring;
use App\Categories;
use App\Menu;
use App\Types;
use App\Review;
use App\Zone;

use App\Http\Requests;
use Illuminate\Http\Request;
use Session;
use Intervention\Image\Facades\Image; 
use Illuminate\Support\Facades\DB;

class HotSpringController extends Controller
{
	 
    public function index(Request $request)    
    { 
        //$restaurants = Restaurants::orderBy('restaurant_name')->get();

        $hotspring = DB::table('hotspring')
                           ->leftJoin('hotspring_types', 'hotspring.hotspring_type', '=', 'hotspring_types.id')                           
                           ->select('hotspring.*','hotspring_types.type')
                           //->where('restaurants.cat_id', '=', $cat->id)
                           ->orderBy('id', 'desc')
                           ->paginate(10);
        
         $hotspring->setPath($request->url()); 

        $hotspring = $hotspring[0];
        $categories = Categories::where('hotspring_id',$hotspring->id)->get();
         
        return view('pages.hotspring_menu',compact('hotspring', 'categories'));
    }

    public function hotspring_type(Request $request,$type)    
    { 
        
              
        //$restaurants = Restaurants::orderBy('restaurant_name')->get();

        $hotspring = DB::table('hotspring')
                           ->leftJoin('hotspring_types', 'hotspring.hotspring_type', '=', 'hotspring_types.id')                           
                           ->select('hotspring.*','hotspring_types.type')
                           ->where('hotspring_types.id', '=', $type)
                           ->orderBy('id', 'desc')
                           ->paginate(10);
        
         $hotspring->setPath($request->url()); 

         
         
        return view('pages.hotspring',compact('hotspring'));
    }

    public function hotspring_rating(Request $request,$rating)    
    { 
        
              
        //$restaurants = Restaurants::orderBy('restaurant_name')->get();

        $hotspring = DB::table('hotspring')
                           ->leftJoin('hotspring_types', 'hotspring.hotspring_type', '=', 'hotspring_types.id')                           
                           ->select('hotspring.*','hotspring_types.type')
                           ->where('hotspring.review_avg', '=', $rating)
                           ->orderBy('id', 'desc')
                           ->paginate(10);
        
         $hotspring->setPath($request->url()); 

         
         
        return view('pages.hotspring',compact('hotspring'));
    }
    

    public function hotspring_search(Request $request)
    {
        //$restaurants = Restaurants::orderBy('restaurant_name')->get();
        $inputs = $request->all();

       $keyword = $inputs['search_keyword'];
       $searchlist = Zone::SearchByKeyword($keyword)->get();

       $total_res=count($searchlist);  
         
        return view('pages.hotspring_search',compact('searchlist','total_res','keyword'));
    }
     
    public function hotspring_menu($slug)    
    {     
          $restaurant = HotSpring::get()->first();
          $categories = Categories::where('hotspring_id',$restaurant->id)->where('id', $slug)->get();

           
          return view('pages.hotspring_menu',compact('hotspring', 'categories'));
          
        
    }  
    
    public function hotspring_details($slug, Request $request)    
    {     
          $hotspring = HotSpring::where("hotspring_slug", $slug)->first();
          
          $reviews = DB::table('hotspring_review')
                           ->Join('users', 'hotspring_review.user_id', '=', 'users.id')                              
                           ->select('hotspring_review.*')
                           ->where('hotspring_review.hotspring_id', '=', $hotspring->id)
                           ->orderBy('hotspring_review.id', 'desc')
                           ->paginate(10);
           $reviews->setPath($request->url()); 

           $total_review = null;//Review::where("hotspringt_id", $restaurant->id)->count();
          
          return view('pages.hotspring_details',compact('hotspring','reviews','total_review'));
        
    }	 
    
    public function hostspring_feedback($slug, Request $request)    
    {     
          $hotspring = HotSpring::where("hotspring_slug", $slug)->first();
          
          $reviews = DB::table('hotspring_review')
                           ->Join('users', 'hotspring_review.user_id', '=', 'users.id')                              
                           ->select('hotspring_review.*')
                           ->where('hotspring_review.hotspring_id', '=', $hotspring->id)
                           ->orderBy('hotspring_review.id', 'desc')
                           ->paginate(10);
           $reviews->setPath($request->url()); 

           $total_review = null;//Review::where("hotspringt_id", $restaurant->id)->count();
          
          return view('pages.hotspring_feedback_detail',compact('hotspring','reviews','total_review'));
        
    }	 
    
     public function hotspring_review(Request $request)    
    {     
         
        
        $inputs = $request->all();

        $user_id=Auth::user()->id;

        $review = new Review; 

        $review->hotspring_id = $inputs['hotspring_id']; 
        $review->user_id = $user_id;       
        $review->review_text = $inputs['review_text'];
        $review->food_quality = $inputs['food_quality'];
        $review->price = $inputs['price'];
        $review->punctuality = $inputs['punctuality'];
        $review->courtesy = $inputs['courtesy'];      
        $review->date= strtotime(date('Y-m-d'));  

        $review->save();

        $food_quality=round(DB::table('hotspring_review')->where('hotspring_id', $inputs['hotspring_id'])->avg('food_quality'));

        $price=round(DB::table('hotspring_review')->where('hotspring_id', $inputs['hotspring_id'])->avg('price'));

        $punctuality=round(DB::table('hotspring_review')->where('hotspring_id', $inputs['hotspring_id'])->avg('punctuality'));

        $courtesy=round(DB::table('hotspring_review')->where('hotspring_id', $inputs['hotspring_id'])->avg('courtesy'));

        $total_avg=round($food_quality+$price+$punctuality+$courtesy)/4;

        $restaurant_obj = HotSpring::findOrFail($inputs['hotspring_id']);

        $restaurant_obj->review_avg = $total_avg;  
        $restaurant_obj->save();  

          return \Redirect::back();
    }   
    	
}
