<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    use HasFactory;
    // precisamos informar quais campos vamos permitir a atribuição em massa
    protected $fillable = ['nome'];
}
