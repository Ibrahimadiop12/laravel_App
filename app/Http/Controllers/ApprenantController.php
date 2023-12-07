<?php

namespace App\Http\Controllers;

use App\Models\Apprenant;
use Illuminate\Http\Request;

class ApprenantController extends Controller
{
    public function index(){
    //    return Apprenant::all();
         $liste=Apprenant::all();
       return view('liste_apprenants',['liste'=>$liste]);
    }
}
