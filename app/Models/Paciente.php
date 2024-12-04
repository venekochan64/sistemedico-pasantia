<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Paciente extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'date_of_birth',
        'cedula',
        'phone',
        'email',
        'state_id',
        'municipality_id',
    ];
    public function municipality(): BelongsTo
    {
        return $this->belongsTo(Municipality::class);
    }
    public function state(): BelongsTo
    {
        return $this->belongsTo(State::class);
    }
}
