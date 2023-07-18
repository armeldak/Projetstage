<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


//  <///////////////////////////////////////////////////////////////////////////////////////////////////

//                                           ROUTE DE L'AUTHENTIFICATION

// <////////////////////////////////////////////////////////////////////////////////////////////////////>


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



//  <///////////////////////////////////////////////////////////////////////////////////////////////////

//                                           ROUTE DU FRONTOFFICE

// <////////////////////////////////////////////////////////////////////////////////////////////////////>


Route::group(["namespace"=>"App\Http\Controllers\FrontOffice"],function(){

    Route::match(['get', 'post'], "/",[
        "as" => "accueil",
        "uses" => "AccueilController@accueil"
    ]);

});



//  <///////////////////////////////////////////////////////////////////////////////////////////////////

//                                           ROUTE DU BACKOFFICE

// <////////////////////////////////////////////////////////////////////////////////////////////////////>

Route::group(["namespace"=>"App\Http\Controllers\BackOffice"],function(){

    Route::match(['get', 'post'], "/dashboard",[
        "as" => "tableau-de-bord",
        "uses" => "DashboardController@accueil"
    ]);

    Route::match(['get', 'post'], "/creer-salle",[
        "as" => "creer-salle",
        "uses" => "SalleController@creer"
    ]);

    Route::match(['get', 'post'], "/afficher-salle",[
        "as" => "afficher-salle",
        "uses" => "SalleController@afficher"
    ]);

    Route::post("/modfier-salle/{salle?}",[
        "as" => "modifier-salle",
        "uses" => "SalleController@modifier"
    ]);

    Route::get("/editer-salle/{salle?}",[
        "as" => "editer-salle",
        "uses" => "SalleController@editer"
    ]);

    Route::match(['get', 'post'], "/supprimer-salle",[
        "as" => "supprimer-salle",
        "uses" => "SalleController@supprimer"
    ]);


    Route::match(['get', 'post'], "/creer-evenement",[
        "as" => "creer-evenement",
        "uses" => "EvenementController@creer"
    ]);

    Route::match(['get', 'post'], "/afficher-evenement",[
        "as" => "afficher-evenement",
        "uses" => "EvenementController@afficher"
    ]);



});




