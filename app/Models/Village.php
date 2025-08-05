<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Ramsey\Uuid\Uuid;

class Village extends Model
{
    use HasFactory;

    protected $fillable = ['village', 'allowDelete','name', 'category'];

    public function getRouteKeyName(): string
    {
        return 'uuid';
    }

    protected static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->uuid = (string) Uuid::uuid4();
        });
    }

    public function villages(): HasMany
    {
        return $this->hasMany(Village::class);
    }
}

