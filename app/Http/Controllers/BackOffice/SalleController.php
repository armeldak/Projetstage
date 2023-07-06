<?php

namespace App\Http\Controllers\BackOffice;

use App\Http\Controllers\Controller;
use App\Models\salle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;

class SalleController extends Controller
{
    public function creer(Request $request) {
        if($request->isMethod("post"))
        {
            $_validator =  Validator::make($request->all(), [
                "salle_libelle"=>"required|unique:libelle,salle_libelle",
                "salle_description"=>"required  ",
                "salle_capacite"=>"required | numeric",
                "salle_adresse"=>"required ",
                "salle_prix"=>"required|numeric",


            ],

            [


            ],
            [
                'salle_libelle' => 'libelle de la salle ',
                'salle_description' => 'description de la salle',
                'salle_capacite' => 'capacite de la salle',
                'salle_adresse' => 'adresse de la salle',
                'salle_prix' => 'prix de la salle',

            ]);

                if($_validator->fails())
                {

                    return redirect()->back()
                            ->withErrors($_validator)
                            ->withInput();

                }
            $salle_libelle = $request->input('salle_libelle');
            $salle_description = $request->input('salle_description');
            $salle_capacite = $request->input('salle_capacite');
            $salle_adresse = $request->input('salle_adresse');
            $salle_prix = $request->input('salle_prix');



        $succes = false;
        $messageErreur = "L'enregistrement de domaine a échoué";

        try
        {

         $salle_libelle = $request->input('domaine_libelle');
         $salle_description = $request->input('salle_description');
         $salle_capacite = $request->input('salle_capacite');
         $salle_adresse = $request->input('salle_adresse');
         $salle_prix = $request->input('salle_prix');

            salle::create([

                'salle_libelle' => ucwords($salle_libelle),
                'salle_description' => $salle_description,
                'salle_capacite' => $salle_capacite,
                'salle_adresse' => $salle_adresse,
                'salle_prix' => $salle_prix,

            ]);

            $succes=true;



        }

        catch(\Exception $e)
        {
           $messageErreur = $e->getMessage();
           Log::error($e);

        }



        if($succes){

            return redirect()->back()->with('succes', 'Enregistrement effectué avec succes');
            }


        else
        {
            return redirect()->back()->with("echec", $messageErreur)->withInput();
        }

    }




        return view('backOffice.salle.creer');

    }
}
