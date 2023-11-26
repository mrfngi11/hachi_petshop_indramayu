<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Reservasi extends Model
{
    protected $table = 'reservasis';

    public function kamar(): HasMany {
        return $this->hasMany(Kamar::class);
    }
}
