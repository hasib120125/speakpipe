<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;
use Kirschbaum\PowerJoins\PowerJoins;

class Customer extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, PowerJoins, SoftDeletes;

    protected $fillable = [
        'id',
        'name',
        'email',
        'password',
        'account_id',
        'plan_id',
        'status',
        'receive_offers',
        'reset_token',
        'last_login',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $casts = [
        'last_login' => 'datetime',
    ];
}
