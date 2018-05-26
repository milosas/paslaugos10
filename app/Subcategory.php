<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
  protected $fillable = ['title'];

  public function category()
  {
  return $this->belongsTo(Category::class);
  }
  public function services()
  {
    return $this->hasMany(Service::class);
  }
}
