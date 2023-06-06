<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Cor;
use App\Models\Marca;
use App\Models\Modelo;

class Carro extends Model
{
    protected $fillable = ['placa', 'marca_id', 'modelo_id', 'cor_id'];

    public function marca()
    {
        return $this->belongsTo(Marca::class);
    }

    public function modelo()
    {
        return $this->belongsTo(Modelo::class);
    }

    public function cor()
    {
        return $this->belongsTo(Cor::class);
    }
}
