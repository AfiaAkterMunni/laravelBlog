<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'description',
        'image',
        'user_id',
        'category_id'
    ];

    /**
     * Get the comment data for the Blog.
     */
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    /**
     * Get the category data for the Blog/(inverse)
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Get the user data for the Blog/(inverse)
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}


