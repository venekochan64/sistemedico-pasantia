<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Municipality extends Model
{
    //
    public function state(): BelongsTo
    {
        return $this->belongsTo(State::class);
    }
}
