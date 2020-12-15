<?php

namespace App;

use App\Categories;
use App\Menu;
use App\Order;
use Illuminate\Database\Eloquent\Model;

class HotSpring extends Model
{
    protected $table = 'hotspring';

    protected $fillable = ['type', 'hotspring_name','hotspring_slug','hotspring_description','hotspring_address','delivery_charge','hotspring_logo, mwsf, sitename'];

	public $timestamps = false;
 
	public function hotspring()
    {
        return $this->hasMany('App\HotSpring', 'id');
    }
	
	public static function getHotspringInfo($id) 
    { 
		return HotSpring::find($id);
	}

	public static function getUserHotspring($id) 
    { 
		return HotSpring::where('user_id',$id)->count(); 
	}


	public static function getMenuCategories($id) 
    { 
		return Categories::where('hotspring_id',$id)->count(); 
	}

	public static function getMenuItems($id) 
    { 
		return Menu::where('hotspring_id',$id)->count(); 
	}

	public static function getOrders($id) 
    { 
		return Order::where('hotspring_id',$id)->count(); 
	}

	public static function getTotalHotSpring() 
    { 
		return HotSpring::count(); 
	} 


	public function scopeSearchByKeyword($query, $keyword)
    {
        if ($keyword!='') {
            $query->where(function ($query) use ($keyword) {
                $query->where("hotspring_address", "LIKE","%$keyword%")
                    ->orWhere("hotspring_name", "LIKE", "%$keyword%");                     
            });
        }
        return $query;
	}
	
	public static function SearchByKeyword($keyword)
    {
			$query = HotSpring::where("hotspring_address", "LIKE","%$keyword%")
			->orWhere("hotspring_name", "LIKE", "%$keyword%");
        return $query;
    }

    public static function getHotspringOwnerInfo() 
    { 
		$rest= HotSpring::find($id);

		return User::find($rest->user_id);
	}

}
