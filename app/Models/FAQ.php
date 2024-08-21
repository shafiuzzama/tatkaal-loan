<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FAQ extends Model
{
    use HasFactory;

    protected $fillable = [
    'id', 'questions', 'answers', 'created_at', 'updated_at'
    ];

}
