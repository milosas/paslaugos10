<?php

namespace App\Http\Controllers;
use App\Category;
use App\Subcategory;
use App\Service;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
{
    public function index()
    {
      $services = Service::all();
      $category = Category::all();
      $subcategory = Subcategory::all();
      return view ('subcategories.index', compact ('category', 'subcategory', 'services'));
    }
    public function show($id){
      $subcategories = Subcategory::findOrFail($id);
      return view ('services.index', compact ('subcategories')); 
    }
}
