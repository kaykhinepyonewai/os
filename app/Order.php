<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
     protected $fillable = [
        'voucherno', 'orderdate', 'status', 'note', 'total', 'user_id'
    ];

      public function items($value='')     //appear object ->belongsTo
    {
    	return $this->belongsToMany('App\Item','order_detail')
    				->withPivot('qty')
    				->withTimestamps();


    }
}