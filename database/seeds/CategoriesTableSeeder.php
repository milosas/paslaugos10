<?php
use App\Category;
use Illuminate\Database\Seeder;


class CategoriesTableSeeder extends Seeder
{
  protected $category;
  public function __construct(Category $category){
  $this->category = $category;
}
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $this->category->create([
        'title'=>'Vestuvėms',
        'image_url'=>'https://sa.lt/wp-content/uploads/namas_statyba_160526.jpg'
      ]);
      $this->category->create([
        'title'=>'Statybai',
        'image_url'=>'https://sa.lt/wp-content/uploads/namas_statyba_160526.jpg'

      ]);
      $this->category->create([
        'title'=>'Butų remontui',
        'image_url'=>'https://sa.lt/wp-content/uploads/namas_statyba_160526.jpg'

      ]);
      $this->category->create([
        'title'=>'Auto/moto remontui',
        'image_url'=>'https://sa.lt/wp-content/uploads/namas_statyba_160526.jpg'

      ]);
      $this->category->create([
        'title'=>'Verslui',
        'image_url'=>'https://sa.lt/wp-content/uploads/namas_statyba_160526.jpg'
      ]);
      $this->category->create([
        'title'=>'Nuomos paslaugos',
        'image_url'=>'https://sa.lt/wp-content/uploads/namas_statyba_160526.jpg'
      ]);
      $this->category->create([
        'title'=>'Augintinio priežiūra',
        'image_url'=>'https://sa.lt/wp-content/uploads/namas_statyba_160526.jpg'
      ]);
      $this->category->create([
        'title'=>'Gerbūvio darbai',
        'image_url'=>'https://sa.lt/wp-content/uploads/namas_statyba_160526.jpg'
      ]);
      $this->category->create([
        'title'=>'Kiti smulkūs darbai',
        'image_url'=>'https://sa.lt/wp-content/uploads/namas_statyba_160526.jpg'
      ]);
    }
}
