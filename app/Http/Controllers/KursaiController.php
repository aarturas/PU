<?php

namespace App\Http\Controllers;

use App\Failai;
use App\Paskaito;
use App\Grupe;
use App\Kursai;
use App\User;
use Auth;
use App\StudentoGrupe;



use Illuminate\Http\Request;

class KursaiController extends Controller
{

    // public function __construct() 
    // {
    
    // }

    // ------------------------------------------------  INDEX  -----------------------------------------


    public function index()

    {
    //                  INDEX  KursaiController: Jeigu bus ne dėstytojas,  "išmes" klaidą (403)!
        // if(Auth::user()->tipa != 1) {
        //     abort(403);
        // }

        

        return view('kursai.index', ['collection' => Kursai::all()]);
    }

    // ------------------------------------------------  CREATE  -----------------------------------------

   
    public function create()

    {
    //                CREATE  KursaiController: sukūriame "tipą", kur dėstytojui priskiriame skaičių (1)
        $destytojai = User::where('tipa', 1);
        return view('kursai.create', ['destytojai'=> $destytojai] ) ;
    }


    // ------------------------------------------------  STORE  -----------------------------------------


    public function store(Request $request)
    {

        $kursai = new Kursai;
        $kursai->name = $request->name;
        $kursai->save();

    //  return redirect()->route('kursai.index');
        return redirect()->route('kursai.index')->with('success_message', ' Paskaita '.$kursai->name.' buvo sėkmingai įrašyta!');
    }


    // ------------------------------------------------  SHOW  -----------------------------------------

   
    public function show(Kursai $kursai)
    {
        return view('kursai.show', ['kursai' => $kursai]);
        
    }

    // ------------------------------------------------  EDIT  -----------------------------------------


    
    public function edit(Kursai $kursai)
    {
        return view('kursai.edit', ['collection' => Kursai::all(),'kursai' => $kursai]);
    }


    // ------------------------------------------------  UPDATE  -----------------------------------------

    
    public function update(Request $request, Kursai $kursai)

    {
        $kursai->name = $request->name;
        $kursai->save();

        return redirect()->route('kursai.index');
    }


    // ------------------------------------------------  DELELE  -----------------------------------------

    
    public function destroy(Kursai $kursai)

    {
        if($kursai->kursaiGrupe->count() == 0)
        {
           $kursai->delete();
        }
//  return redirect()->route('kursai.index');

    $kursai->delete();
    return redirect()->route('kursai.index')->with('success_message', 'Paskaita : '.$kursai->name.' buvo sėkmingai ištrinta(s) iš sąrašo!');
    }
}
