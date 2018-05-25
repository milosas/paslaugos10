<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Validator;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     protected $fillable = [
     'name','surname','email','date_of_birth','phone_number','city','password',
 ];
 public function users(){
   return $this->hasMany(Service::class);
 }
 const ADMIN_TYPE = 'admin';
 const DEFAULT_TYPE = 'default';
 public function isAdmin()    {
     return $this->type === self::ADMIN_TYPE;
 }
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
