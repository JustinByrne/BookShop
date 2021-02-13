<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Book extends Model
{
    use HasFactory;
    protected $fillable = [
       'review_id', 'user_id', 'report_id' ,'title', 'description','price', 'discount', 'author_id', 'picture','approved',
    ];

    public function reviews()
    {
        return $this->hasMany(Review::class)->latest();
    }
    public function genres()
    {
        return $this->belongsToMany(Genre::class);
    }
    public function authors()
    {
        return $this->belongsToMany(Author::class);
    }
    public function reports()
    {
        return $this->hasMany(Report::class);
    }
}
