<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Demande_reserv extends Model
{
    use HasFactory;

    public function user(){

        return $this->belongsTo(User::class);
    }
    public function salle(){

        return $this->belongsTo(salle::class);
    }

    public function reservation(){
        return $this->belongsTo(Reservation::class);
    }
}
