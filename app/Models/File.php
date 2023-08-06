<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class File extends Model
{
    use HasFactory;

    protected $fillable =[
        'name'
    ];

    public static function booted()
    {
        static::creating(function($model){
            $model->uuid = Str::uuid(); //creating uuid wth v4
        });
    }
}
