<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obj extends Model
{
    use HasFactory;

    public $table = 'objects';

    protected $fillable = [
        'parent_id'
    ];

    public static function booted(): void
    {
        static::creating(function ($model) {
            $model->uuid = Str::uuid();
        });

        static::deleting(function ($model) {
            optional($model->objectable)->delete();
            $model->descendants->each->delete();
        });
    }

    public function objectable(): MorphTo
    {
        return $this->morphTo();
    }
    
}
