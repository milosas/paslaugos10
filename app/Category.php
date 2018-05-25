<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  protected $fillable = [
    'title','image_url',
];

public function categories(){
  return $this->hasMany(Service::class);
}
}
