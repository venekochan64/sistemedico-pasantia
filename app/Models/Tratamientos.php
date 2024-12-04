<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Tratamientos extends Model
{
    use HasFactory;
    protected $fillable = [
        'pacientes_id',
        'notes',
        'type',
    ];
    public function pacientes(): HasMany
    {
        return $this->HasMany(Paciente::class,'id','pacientes_id');
    }
}
