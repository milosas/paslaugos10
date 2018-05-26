<?php
use App\Subcategory;

use Illuminate\Database\Seeder;

class SubcategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     protected $subcategory;
     public function __construct(Subcategory $subcategory){
     $this->subcategory = $subcategory;
   }
    public function run()
    {
      $this->subcategory->create([
        'title'=>'Daininkai',
        'category_id'=> 1,
      ]);
      $this->subcategory->create([
        'title'=>'Muzikantai',
        'category_id'=> 1,
      ]);
    }
}
