<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     protected $user;
     public function __construct(User $user)
     {
     $this->user = $user;
    }
    public function run()
    {
      $this->user->create([
        'name'=>'admin',
        'surname'=>'admin',
        'date_of_birth'=>'1989-08-14',
        'phone_number'=>123,
        'city'=> 'vilnius',
        'email'=> 'admin@admin.com',
        'password' => bcrypt('123123'),
        'role'=> 'admin',
      ]);
      $this->user->create([
        'name'=>'user',
        'surname'=>'user',
        'date_of_birth'=>'1989-08-14',
        'phone_number'=>123,
        'city'=> 'vilnius',
        'email'=> 'user@user.com',
        'password' => bcrypt('123123'),
        'role'=> 'default',
      ]);
    }
}
