<?php

namespace App\Http\Controllers\BackOffice;

use App\Http\Controllers\Controller;
use App\Models\salle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;

class SalleController extends Controller
{
    public function creer(Request $request) {
        if($request->isMethod("post"))
        {
            $_validator =  Validator::make($request->all(), [
                "salle_libelle"=>"required",
                "salle_description"=>"required  ",
                "salle_capacite"=>"required | numeric",
                "salle_adresse"=>"required ",
                "salle_region"=>"required ",
                "salle_ville"=>"required ",
                "salle_localite"=>"required ",
                "salle_pays"=>"required ",
                "salle_prix"=>"required|numeric",
                "salle_image"=> "required|image|dimensions:max_width=1000,max_height=1000|max:2048 | mimes:jpeg,png,jpg,gif",
                 // Image requise, format d'image valide, et taille maximale de 2 Mo

            ],

            [


            ],
            [
                'salle_libelle' => 'libelle de la salle ',
                'salle_description' => 'description de la salle',
                'salle_capacite' => 'capacite de la salle',
                'salle_adresse' => 'adresse de la salle',
                'salle_region' => 'region de la salle',
                'salle_ville' => 'ville de la salle',
                'salle_localite' => 'localite de la salle',
                'salle_pays' => 'pays de la salle',
                'salle_prix' => 'prix de la salle',
                'salle_image' => 'image de la salle',


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
            $salle_adresse = $request->input('salle_region');
            $salle_region = $request->input('salle_adresse');
            $salle_ville = $request->input('salle_ville');
            $salle_localite = $request->input('salle_localite');
            $salle_pays = $request->input('salle_pays');
            $salle_prix = $request->input('salle_prix');
            $salle_image = $request->input('salle_image');



        $succes = false;
        $messageErreur = "L'enregistrement de la salle a échoué";

        try
        {

         $salle_libelle = $request->input('salle_libelle');
         $salle_description = $request->input('salle_description');
         $salle_capacite = $request->input('salle_capacite');
         $salle_adresse = $request->input('salle_adresse');
         $salle_region = $request->input('salle_adresse');
         $salle_ville = $request->input('salle_ville');
         $salle_localite = $request->input('salle_localite');
         $salle_pays = $request->input('salle_pays');
         $salle_prix = $request->input('salle_prix');


         $path = 'null';

                    if($request->hasFile('salle_image'))
                    {
                        $destination_path='public/images/Image_de_la_salle';
                        $salle_image=$request->file('salle_image');
                        $image_name =$salle_image->getClientOriginalName();
                        $path = $request->file('salle_image')->storeAs($destination_path,$image_name,'custom');
                        // return response()->json(['succes'=>$image_name]);
                    // $input['image']=$image_name;
                    }
         Salle::create([


                'libelle' => $salle_libelle,
                'description' => $salle_description,
                'capacite' => $salle_capacite,
                'adresse' => $salle_adresse,
                'region' => $salle_region,
                'ville' => $salle_ville,
                'localite' => $salle_localite,
                'pays' => $salle_pays,
                'prix_res' => $salle_prix,
                'image' => $path,

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




        return view('backOffice.salle.creer');

    }

    public function afficher(Request $request){

            $salles = DB::table('salles')
              ->get();
        return view('backOffice.salle.afficher', compact('salles'));
    }

    public function editer(salle $salle){

        return view('backOffice.salle.modifier',[
            'salle' => $salle]);


    }


    public function modifier( Request $request, salle $salle){


       $succes = false;
       $messageErreur = "Modification du role a échoué";

       try
       {
            $salle_libelle = $request->input('salle_libelle');
            $salle_description = $request->input('salle_description');
            $salle_capacite = $request->input('salle_capacite');
            $salle_adresse = $request->input('salle_adresse');
            $salle_prix = $request->input('salle_prix');
            $salle_image = $request->input('salle_image');
            $path = 'null';

            if($request->hasFile('salle_image'))
            {
                $destination_path='public/images/Image_de_la_salle';
                $salle_image=$request->file('salle_image');
                $image_name =$salle_image->getClientOriginalName();
                $path = $request->file('salle_image')->storeAs($destination_path,$image_name,'custom');
                // return response()->json(['succes'=>$image_name]);
            // $input['image']=$image_name;
            }


            $salle->save();

        // Domaine::table('domaines')->where( $domaine->domaine_libelle)->update(['domaine' => $domaine]);
            $succes=true;
       }
       catch(\Exception $e)
       {
          // echo 'VOICI VOTRE ERREUR',  $e->getMessage(), "\n";
          $messageErreur = $e->getMessage();
          Log::error($e);

       }

       if($succes)
       {

                //       return back()->with("succes", "domaine creé");
                //dd('bonjour');
                return redirect()->back()->with('succes', 'Enregistrement effectué avec succes');
        }


        else
        {
               return redirect()->back()->with("echec", $messageErreur)->withInput();
        }


       return redirect()->route("afficher-salle");


    }




    public function supprimer(){
        return view('backOffice.salle.afficher');
    }
}
