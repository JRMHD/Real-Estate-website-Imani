<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;

    // Specify the table name if it's not the plural form of the model name (optional)
    protected $table = 'subscriptions';

    // The attributes that are mass assignable
    protected $fillable = [
        'email',
    ];

    // The attributes that should be hidden for arrays (optional)
    protected $hidden = [];

    // The attributes that should be cast to native types (optional)
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}
