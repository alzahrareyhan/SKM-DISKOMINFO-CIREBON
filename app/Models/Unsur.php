<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Unsur extends Model
{
    use HasFactory;

    protected $fillable = ['unsur'];

    public function kuesioners(): HasMany
    {
        return $this->hasMany(Kuesioner::class);
    }
}
