<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Blog extends Authenticatable
{
    use HasFactory;
    use Notifiable;
    protected $guard = 'admin';
    protected $fillable = [
        'id','heading', 'sub_heading','name','short_description','description','image','status','created_at','updated_at'
    ];
    protected $hidden = [
      'password', 'remember_token',
    ];
}