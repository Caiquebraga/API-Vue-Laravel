<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Carro;

class Cor extends Model
{
    protected $fillable = ['nome'];

    public function carros()

    {
            return $this->hasMany(Carro::class);

    }
}
