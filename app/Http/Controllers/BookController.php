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

class BookController extends Controller
{
    public function create(Category $category)
{
    return view('books/create')->with(['categories' => $category->get()]);
    
}

public function store(Request $request, Book $book)
{
    $input = $request['book'];
    $image_url = Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();
  
    $input += ['image_path' => $image_url];
    $book->fill($input)->save();
    
    return redirect('/index');
}

public function list(Review $review)
{
    return view('books/list')->with(['review' => $review]);
 //'review'はbladeファイルで使う変数。中身は$postはid=1のPostインスタンス。
}
}
