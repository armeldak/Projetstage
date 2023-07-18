<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class evenement extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom_ev',
        'description_ev',
        'date_ev',
        'duree_ev',
    ];
}
