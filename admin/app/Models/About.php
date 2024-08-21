<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class About extends Authenticatable
{
    use HasFactory;
    use Notifiable;
    protected $guard = 'admin';
    protected $fillable = [
        'heading', 'sub_heading','name','our_history','our_mission','management','image','status','created_at','updated_at'
    ];
    protected $hidden = [
      'password', 'remember_token',
    ];
}