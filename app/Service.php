<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
  protected $fillable = [
  'title','description','image_url','price'
];
public function services(){
return $this->belongsTo(Category::class);
}
public function services(){
  return $this->belongsTo(User::class);
}
}
