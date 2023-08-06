<?php

namespace App\Models;

use App\Models\Obj;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Obj extends Model
{
    use HasFactory;

    public $table = 'objects';

    protected $fillable =[
        'parent_id'
    ];

    public static function booted()
    {
        static::creating(function($model){
            $model->uuid = Str::uuid(); //creating uuid wth v4
        });
    }

    public function objectable()
    {
        return $this->morphTo(); 
    }

    public function children()
    {
        return $this->hasMany(Obj::class,'parent_id','id');
    }
    
}
