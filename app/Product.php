<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  use App\Traits\UsesUuid;

  protected $guarded = [];

}
