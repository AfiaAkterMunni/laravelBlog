<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    use HasFactory;

    /**
     * Get the user data for the Reply/(inverse)
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the comment data for the Reply/(inverse)
     */
    public function comment()
    {
        return $this->belongsTo(Comment::class);
    }
}
