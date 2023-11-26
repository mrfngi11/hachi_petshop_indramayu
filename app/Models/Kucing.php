<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Kucing extends Model
{
    use HasFactory;

    public function kamar() : BelongsTo {
        return $this->belongsTo(Kamar::class);
    }

    public function grooming() : BelongsTo {
        return $this->belongsTo(Grooming::class);
    }
}
