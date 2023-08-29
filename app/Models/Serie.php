<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder; // Importe a classe Builder

class Serie extends Model
{
    use HasFactory;
    protected $fillable = ['nome'];
    // sempre que eu buscar uma série, trago junto todas as suas temporadas
    // protected $with = ['seasons'];
    // protected $with = ['temporadas'];

    public function seasons()
    {
        return $this->hasMany(Season::class, 'series_id');
    }

    protected static function booted()
    {
        // parent::booted();
        // nome para o escopo
        self::addGlobalScope('ordered', function (Builder $queryBuilder) {
            $queryBuilder->orderBy('nome');
        });
    }

    // public function scopeActive(Builder $query)
    // {
    //     return $query->where('active', true);
    // }
}
