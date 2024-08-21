<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;

    protected $fillable = [
       'id', 'name', 'review', 'image', 'designition', 'created_at', 'updated_at'
        ];
    
}
