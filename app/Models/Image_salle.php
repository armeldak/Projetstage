<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image_salle extends Model
{
    use HasFactory;

    public function salle(){

        return $this->belongsTo(salle::class);
    }
}
