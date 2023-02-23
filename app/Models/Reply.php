<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    use HasFactory;
    
    // Userテーブルについて
    public function user()
{
    return $this->belongsTo(User::class);
}
    
    public function review()   
{
    return $this->hasMany(Review::class);  
}
    
    protected $fillable = [
    'user_id',
    'review_id',
    'title',
    'body',
];
}
