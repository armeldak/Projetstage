<?php

namespace App\Http\Controllers\BackOffice;

use App\Http\Controllers\Controller;
use App\Models\role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;




class RoleController extends Controller
{
    public function creer(Request $request){

        if($request->isMethod("post"))
        {
            $_validator =  Validator::make($request->all(), [
                "nom_role"=>"required",
            ],

            [

            ],
            [
                'nom_role' => 'nom du role',
            ]);

                if($_validator->fails())
                {

                    return redirect()->back()
                            ->withErrors($_validator)
                            ->withInput();

                }
            $nom_role = $request->input('nom_role');

        $succes = false;
        $messageErreur = "L'enregistrement du role a échoué";

        try
        {

         $nom_role = $request->input('nom_role');
         Role::create([
            'nom_role' =>$nom_role,
         ])->save();

        //  Role::create([
        //         'nom_role' => $nom_role,
        //     ])->save();

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
        return view('backOffice.role.creer');
    }

    public function afficher(){
        $roles = DB::table('roles')
        ->get();
        return view('backOffice.role.afficher', compact('roles'));
    }

    public function editer(role $role){
        return view('backOffice.role.modifier',
        ['role' => $role]);
    }

    public function modifier(Request $request, role $role){
        $succes = false;
       $messageErreur = "L'enregistrement de domaine a échoué";
       try
       {
            $role->nom_role = $request->input('nom_role');
            $role->save();
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
                return redirect()->back()->with('succes', 'Enregistrement effectué avec succes');
        }
        else
        {
               return redirect()->back()->with("echec", $messageErreur)->withInput();
        }

        return redirect()->route("afficher-role");
    }


}
