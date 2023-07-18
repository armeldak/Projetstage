<?php

namespace App\Http\Controllers\BackOffice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function accueil() {
        return view('backOffice.tableau de board.accueil');
    }
}
