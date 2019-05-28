<?php

namespace App\Http\Controllers;

use App\Failai;
use App\Paskaito;
use App\Grupe;
use App\Kursai;
use App\User;
use Auth;


use Illuminate\Http\Request;

class KursaiController extends Controller
{



    public function __construct()
    {
       

    }



    public function index()

    {

        if(Auth::user()->tipa != 1) {
            abort(403);
        }

        

        return view('kursai.index', ['collection' => Kursai::all()]);
    }




   
    public function create()

    {
        $destytojai = User::where('tipa', 1);
        
        return view('kursai.create', ['destytojai'=> $destytojai] ) ;
    }





    public function store(Request $request)
    {

        $kursai = new Kursai;
        $kursai->name = $request->name;
        $kursai->save();

    //  return redirect()->route('kursai.index');

        return redirect()->route('kursai.index')->with('success_message', ' Paskaita '.$kursai->name.' buvo sėkmingai įrašyta!');
    }




   
    public function show(Kursai $kursai)
    {
        //
    }




    
    public function edit(Kursai $kursai)
    {
        return view('kursai.edit', ['collection' => Kursai::all(),'kursai' => $kursai]);
    }





    
    public function update(Request $request, Kursai $kursai)

    {
        $kursai->name = $request->name;
        $kursai->save();

        return redirect()->route('kursai.index');
    }




    
    public function destroy(Kursai $kursai)

    {
        if($kursai->kursaiGrupe->count() == 0)
        {
           $kursai->delete();
        }
//  return redirect()->route('kursai.index');

    $kursai->delete();
    return redirect()->route('kursai.index')->with('success_message', 'Paskaita : '.$kursai->name.' buvo sėkmingai ištrinta iš sąrašo!');
    }
}
