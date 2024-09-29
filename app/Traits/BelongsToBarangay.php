<?php 

namespace App\Traits;

use App\Models\Barangay;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

trait BelongsToBarangay {

    /**
     * model belongs to barangay
     *
     * @return BelongsTo
     */
    public function barangay():BelongsTo
    {
        return $this->belongsTo(Barangay::class);
    }
}