<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = 'menu';

    protected $fillable = ['hotspring_id','menu_cat','menu_name', 'description','price','menu_image'];


	public $timestamps = false; 


	public static function getMenunfo($id) 
    { 
		$row = Menu::find($id);
		if(!isset($row->id)){
			$row = new Menu;
			$row->hotspring_id = '';
			$row->menu_cat = '';
			$row->menu_name = '';
			$row->description = '';
			$row->price = '';
			$row->menu_image = '';
			$row->recommended = '';
		}
		return $row;
	}
	 
}
