<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    
    public function category()
{
    return $this->belongsTo(Category::class);
}

public function reviews()   
{
    return $this->hasMany(Review::class);  
}

protected $fillable = [
    'name',
    'author',
    'publisher',
    'image_path',
    'category_id',
];
}


