<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Barangay extends Model
{
    use HasFactory;

    protected $fillable = ['municipality_id','name'];

    // ==============================Relationship==================================================
    
    public function municipality():BelongsTo
    {
        return $this->belongsTo(Municipality::class);
    }
}