<?php
use App\Service;

use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     protected $service;
     public function __construct(Service $service)
     {
     $this->service = $service;
    }
    public function run()
    {
      $this->service->create([
        'title'=>'Daininkai',
        'description'=>'SUPER NAUJAS DAININKAS',
        'price'=>10,
        'image_url'=>'http://www.music.lt/images/groups/2/1125/Radzi/33d.jpg',
        'subcategory_id'=> 1,
      ]);
      $this->service->create([
        'title'=>'Muzikantai',
        'description'=>'SUPER NAUJAS MUZIKANTAS',
        'price'=>10,
        'image_url'=>'http://www.music.lt/images/groups/2/1125/Radzi/33d.jpg',
        'subcategory_id'=> 1,
      ]);
    }
}
