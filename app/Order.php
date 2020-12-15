<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'hotspring_order';

    protected $fillable = ['item_name', 'item_price','quantity','created_date'];


	public $timestamps = false;
 
	 
}
