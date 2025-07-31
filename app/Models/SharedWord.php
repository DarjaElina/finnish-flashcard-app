<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SharedWord extends Model
{
    protected $fillable = ['finnish', 'english', 'example', 'category'];
}
