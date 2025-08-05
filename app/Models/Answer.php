<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Ramsey\Uuid\Uuid;

class Answer extends Model
{
    use HasFactory;

    protected $fillable = ['answer', 'kuesioner_id', 'responden_id'];

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

    public function responden(): BelongsTo
    {
        return $this->belongsTo(Responden::class);
    }

    public function kuesioner(): BelongsTo
    {
        return $this->belongsTo(Kuesioner::class);
    }
}
