<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
class origen extends Model
{
    use HasFactory;

    public function clientes():BelongsTo{
        return $this->belongsTo(clientes::class);
    }
    public function pagos():HasMany{
        return $this->hasMany(pagos::class);
    }
}
