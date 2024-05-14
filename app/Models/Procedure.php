<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Procedure extends Model
{
    use HasFactory;


    public function consultations(): BelongsToMany
    {
        return $this->belongsToMany(Consultation::class,'consultations_procedures','procedure_id','consultation_id');
    }
}
