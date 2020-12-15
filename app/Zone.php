<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zone extends Model
{
    protected $table = 'zone';

    protected $fillable = ['code'];

    public $timestamps = false;
    
    public static function SearchByKeyword($keyword)
    {
        $query = Zone::where("postcode", "LIKE","%$keyword%")
                        ->orWhere("city", "LIKE", "%$keyword%");
        return $query;
    }
}
