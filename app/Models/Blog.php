<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'id','heading', 'sub_heading','name','short_description','description','image','status','created_at','updated_at'
    ];
    protected $hidden = [
      'password', 'remember_token',
    ];
    
}

