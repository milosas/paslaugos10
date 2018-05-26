<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
  protected $fillable = [
  'title','description','price','subcategory_id','image_url',
];
public function subcategory(){
return $this->belongsTo(Subcategory::class);
}
public function user(){
  return $this->belongsTo(User::class);
}
}
