<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class pagos extends Model
{
    use HasFactory;
    
    public function tipodepago(): HasMany{
        return $this->hasMany(tipodepago::class);
    }
    public function origen(): BelongsTo{
        return $this->belongsTo(origen::class);
    }
    public function clientes(): BelongsTo{
        return $this->belongsTo(clientes::class);
    }
    
}
