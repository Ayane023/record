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

class ReviewController extends Controller
{
    public function index(Review $review)
{
    return view('reviews/index')->with(['reviews' => $review->getPaginateByLimit(3)]);
}

public function show(Review $review)
{
    return view('reviews/show')->with(['review' => $review]);
 //'review'はbladeファイルで使う変数。中身は$postはid=1のPostインスタンス。
}

public function create(Book $book)
{
    return view('reviews/create')->with(['books' => $book->get()]);
    
}
public function store(Request $request, Review $review)
{
    
    $input = $request['review'];
    $input['user_id'] = auth()->id();
    $review->fill($input)->save();
    return redirect('/reviews/' . $review->id);
}

public function edit(Review $review)
{
    return view('reviews/edit')->with(['review' => $review]);
    
}

public function update(Request $request, Review $review)
{
    $input_post = $request['review'];
    $review->fill($input_post)->save();

    return redirect('/reviews/' . $review->id);
}

public function delete(Review $review)
{
    $review->delete();
    return redirect('/index');
}


}
