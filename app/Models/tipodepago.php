<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class tipodepago extends Model
{
    use HasFactory;
    
    public function pagos(): BelongsTo{
        return $this->belongsTo(tipodepago::class);
    }
}
