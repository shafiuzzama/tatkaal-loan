<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Contact extends Authenticatable
{
    use HasFactory;
    use Notifiable;
    protected $guard = 'admin';
    protected $fillable = [
        'name', 'email','name','phone','subject','message','created_at','updated_at'
    ];
    protected $hidden = [
      'password', 'remember_token',
    ];
}