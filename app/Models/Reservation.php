<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function demande_reserv(){
        return $this->belongsTo(Demande_reserv::class);
    }

    public function paiements(){
        return $this->hasMany(Paiement::class);
    }

    public function evenement(){
        return $this->belongsTo(evenement::class);
    }
}
