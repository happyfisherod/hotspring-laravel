<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Openhour extends Model
{
    protected $table = 'openhour';

    protected $fillable = ['dayindex', 'fromtime','endtime'];

	public $timestamps = false;

    public static function get_daydata($dayindex){
        $daydata = Openhour::where("dayindex", $dayindex)->get()->first();
		return $daydata;
    }
}
