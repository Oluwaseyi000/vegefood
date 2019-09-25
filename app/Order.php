<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Order extends Model
{

   use App\Traits\UsesUuid;

    protected $guarded = []; 

    public function user(){
      $this->belongsTo('App\User');
    }

    public function product(){
      $this->hasMany('App\User');
    }
}
