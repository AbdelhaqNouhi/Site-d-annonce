<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\Offre;

class OffreController extends Controller
{
    public function getOffre()
    {
        return Offre::all();
    }

    public function addOffre(Request $request)
    {
        if(Offre::create($request -> all())){
            return "Offre created";
        }else{
            return "Offre not created";
        }
    }

    public function updateOffre(Request $request, $id)
    {
        $Offre = Offre::find($id);
        $Offre->update($request->all());
        if($Offre){
            return $Offre;
        }
        else{
            return "Offre not updated";
        }
    }

    public function deleteOffre($id)
    {
        if(Offre::destroy($id)){
            return "Offre deleted";
        }
        else{
            return "Offre not deleted";
        }
    }
}
