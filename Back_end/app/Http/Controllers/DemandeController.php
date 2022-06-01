<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\Demande;

class DemandeController extends Controller
{
    public function GetDemande ()
    {
        // return Demande::all();
        return Demande::with('user')->get();

    }

    public function AddDemande (Request $request)
    {
        if(Demande::create($request -> all())){
            return "Demande created";
        }else{
            return "Demande not created";
        }
    }

    public function GetOneDemande ($id)
    {
        return Demande::find($id);
    }

    public function UpdateDemande (Request $request, $id)
    {
        $Demande = Demande::find($id);
        $Demande->update($request->all());
        if($Demande){
            return $Demande;
        }
        else{
            return "Demande not updated";
        }
    }

    public function DeleteDemande ($id)
    {
        if(Demande::destroy($id)){
            return "Demande deleted";
        }
        else{
            return "Demande not deleted";
        }
    }
}
