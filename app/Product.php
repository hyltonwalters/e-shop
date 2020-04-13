<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  protected $fillable = ['name', 'slug', 'description', 'price', 'image'];

  public function getRouteKeyName()
  {
    return 'slug';
  }
}
