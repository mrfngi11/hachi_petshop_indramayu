<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Kamar extends Model
{
    use HasFactory;

    public function kucing() : HasMany {
        return $this->hasMany(Kucing::class);
    }

    public function reservasi(): BelongsTo {
        return $this->belongsTo(Reservasi::class);
    }
}
