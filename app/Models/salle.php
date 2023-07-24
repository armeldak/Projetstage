<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class salle extends Model
{
    use HasFactory;
  /*  protected $fillable = [
        'libelle',
        'description',
        'capacite',
        'adresse',
        'region',
        'ville',

        'pays',
        'prix_res',
        'image',
    ];*/

    public function user(){

        return $this->belongsTo(User::class);
    }

    public function image_salles(){

        return $this->hasMany(Image_salle::class);
    }

    public function demande_reservs(){

        return $this->hasMany(Demande_reserv::class);
    }

    public function evenements(){

        return $this->hasMany(evenement::class);
    }

}
