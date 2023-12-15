<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Uf extends Model
{
    use HasFactory;

    protected $fillable = [
        'num_uf',
        'nom_uf',
        'hores_uf',
        'mp_id',
    ];
}
