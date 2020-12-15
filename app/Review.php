<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Review extends Model
{
    protected $table = 'hotspring_review';

    protected $fillable = ['review_text', 'food_quality', 'price', 'punctuality', 'courtesy','date'];


	public $timestamps = false;
 
	
	public static function getTotalReview($hotspring_id) 
    { 
		 $total_review = Review::where("hotspring_id", $hotspring_id)->count();

		 return $total_review;
	}

	public static function getUserAvgReview($user_id) 
    { 
		$food_quality=round(DB::table('hotspring_review')->where('user_id', $user_id)->avg('food_quality'));

        $price=round(DB::table('hotspring_review')->where('user_id', $user_id)->avg('price'));

        $punctuality=round(DB::table('hotspring_review')->where('user_id', $user_id)->avg('punctuality'));

        $courtesy=round(DB::table('hotspring_review')->where('user_id', $user_id)->avg('courtesy'));

        $total_avg=round($food_quality+$price+$punctuality+$courtesy)/4;

		 return $total_avg;
	} 

	public static function checkUserReview($user_id,$hotspring_id) 
    { 
		 $user_review = Review::where("user_id", $user_id)->where("hotspring_id", $hotspring_id)->first();

		 return $user_review;
	}	
	 
}
