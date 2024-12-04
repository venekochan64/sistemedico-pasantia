<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Citas extends Model
{
    use HasFactory;
    protected $fillable = [
        'pacientes_id',
        'type',
        'descripcion',
    ];
    public function pacientes(): HasMany
    {
        return $this->hasMany(Paciente::class,'id','pacientes_id');
    }
}
