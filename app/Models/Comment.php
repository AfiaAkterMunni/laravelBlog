<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['comment', 'user_id', 'blog_id'];

    /**
     * Get the reply data for the Comment.
     */
    public function replies()
    {
        return $this->hasMany(Reply::class);
    }

    /**
     * Get the user data for the Comment/(inverse)
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the blog data for the Comment/(inverse)
     */
    public function blog()
    {
        return $this->belongsTo(Blog::class);
    }

}
