<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Season extends Model
{
    use HasFactory;

    protected $fillable = ['number'];

    // Uma temporada pertence a uma série
    public function series()
    {
        return $this->belongsTo(Serie::class); // Importando a classe Serie corretamente
    }

    public function episodes()
    {
        return $this->hasMany(Episode::class);
    }
}
