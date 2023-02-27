<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Category;
use App\Models\Like;
use App\Models\Reply;
use App\Models\Review;
use App\Models\User;
use Cloudinary;

class CategoryController extends Controller
{
public function create(){
    return view('categories/create');
    
}
public function store(Request $request, Category $category)
{
    
    $input = $request['category'];
    $category->timestamps = false;
    $category->fill($input)->save();
    return redirect('/categories/create');
}
}
