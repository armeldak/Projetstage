<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class salle extends Model
{
    use HasFactory;
    protected $fillable = [
        'libelle',
        'description',
        'capacite',
        'adresse',
        'prix_res',
        'image',
    ];
}
