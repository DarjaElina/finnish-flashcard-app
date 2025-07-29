<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Word extends Model
{
    protected $fillable = ['finnish', 'english', 'example'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
