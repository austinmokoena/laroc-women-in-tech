<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramRegistration extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'full_names',
        'surname',
        'cell_number',
        'id_number',
        'age',
        'address',
        'id_document',
        'proof_of_address',
        'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}