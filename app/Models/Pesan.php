<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pesan extends Model
{
    use HasFactory;

    public function grooming(): HasMany{
        return $this->hasMany(Grooming::class);
    }
}
