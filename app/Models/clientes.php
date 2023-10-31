<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class clientes extends Model
{
    use HasFactory;
    
    public function pagos(): HasMany  {
        return $this->hasMany(pagos::class);
    }

    public function origen(): BelongsTo{
        return $this->belongsTo(origen::class);
    }
}
