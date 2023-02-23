<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    
    public function book()
{
    return $this->belongsTo(Book::class);
}


public function users()   
{
    return $this->hasMany(User::class, likes);  
    
}

public function user()
{
    return $this->belongsTo(User::class);
}


public function replies()   
{
    return $this->hasMany(Reply::class);  
}

protected $fillable = [
    'user_id',
    'book_id',
    'Finished_date',
    'comment',
    'body',
];

// 8－2　ページネーション取得件数制限    
    public function getPaginateByLimit(int $limit_count = 10)
{
    // updated_atで降順に並べたあと、limitで件数制限をかける
    return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
}

}
