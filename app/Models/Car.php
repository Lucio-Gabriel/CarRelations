<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
        'marca',
        'modelo',
        'ano',
        'placa',
        'cor',
        'tipo_veiculo',
    ];
    use HasFactory;
}
