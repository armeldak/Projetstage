<?php

namespace App\Http\Controllers\BackOffice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;
use App\Models\evenement;




class EvenementController extends Controller
{
    public function creer(Request $request){

        if($request->isMethod("post"))
        {
            $_validator =  Validator::make($request->all(), [
                "nom_ev"=>"required",
                "description_ev"=>"required  ",
                "date_ev"=>"required | date",
                "duree_ev"=>"required ",

            ],

            [


            ],
            [
                'nom_ev' => 'nom de evenement  ',
                'description_ev' => 'description evenement',
                'date_ev' => 'date de evenement',
                'duree_ev' => 'duree evenement',



            ]);

                if($_validator->fails())
                {

                    return redirect()->back()
                            ->withErrors($_validator)
                            ->withInput();

                }
            $nom_ev = $request->input('nom_ev');
            $description_ev = $request->input('description_ev');
            $date_ev = $request->input('date_ev');
            $duree_ev = $request->input('duree_ev');

        $succes = false;
        $messageErreur = "L'enregistrement de evenement a échoué";

        try
        {

            $nom_ev = $request-> input('nom_ev');
            $description_ev = $request->input('description_ev');
            $date_ev = $request->input('date_ev');
            $duree_ev = $request->input('duree_ev');


         Evenement::create([


                'nom_ev' => $nom_ev,
                'description_ev' =>  $description_ev,
                'date_ev' => $date_ev,
                'duree_ev'=> $duree_ev,


            ])->save();

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
        return view('backOffice.evenement.creer');
    }


    public function afficher(){
        $evenements = DB::table('evenements')
                    ->get();
        return view('backOffice.evenement.afficher', compact('evenements'));
    }
}
