<?php

namespace App\Http\Controllers;

use App\Failai;
use App\Paskaito;
use App\Grupe;
use App\Kursai;
use App\User;



use Illuminate\Http\Request;

class GrupeController extends Controller
{
    
    public function index()
    {
        return view('grupe.index', ['collection' => Grupe::all()]);
    }



    public function create()
    {

        $destytojai = User::where('tipa', 1)->get();

        return view('grupe.create', ['destytojai'=> $destytojai] ) ;
    }


    
    public function store(Request $request)
    {
        $grupe = new Grupe;
        $grupe->kursai_id = $request->kursai_id;
        $grupe->destytoja_id = $request->destytoja_id;
        $grupe->name = $request->name;
        $grupe->started_at =  date('Y-m-d H:i:s', strtotime(str_replace('.', '-', $request->started_at)));
    //  $grupe->started_at =  date('Y-m-d H:i:s', strtotime($request->started_at));
        $grupe->finished_at =  date('Y-m-d H:i:s', strtotime(str_replace('.', '-', $request->finished_at)));
    //  $grupe->finished_at =  date('Y-m-d H:i:s', strtotime($request->finished_at));
        $grupe->save();

        // return redirect()->route('grupe.index');

        return redirect()->route('grupe.index')->with('success_message', ' Grupė: '.$grupe->name.' buvo sėkmingai įrašyta!');
    }


    
    public function show(Grupe $grupe)
    {
        return view('grupe.show', ['grupe' => $grupe]);
    }



    public function edit(Grupe $grupe)
    {
        $destytojai = User::where('tipa', 1)->get();

        return view('grupe.edit', ['grupe' => $grupe,'destytojai'=> $destytojai]);
    }



    public function update(Request $request, Grupe $grupe)
    {
        $grupe->kursai_id = $request->kursai_id;
        $grupe->destytoja_id = $request->destytoja_id;
        $grupe->name = $request->pavadinimas;
    //  $grupe->started_at =  date('Y-m-d H:i:s', strtotime($request->started_at));
        $grupe->started_at =  date('Y-m-d H:i:s', strtotime(str_replace('.', '-', $request->started_at)));
    //  $grupe->finished_at =  date('Y-m-d H:i:s', strtotime($request->finished_at));
        $grupe->finished_at =  date('Y-m-d H:i:s', strtotime(str_replace('.', '-', $request->finished_at)));
        $grupe->save();

     // return redirect()->route('grupe.index');
        return redirect()->route('grupe.index')->with('success_message', 'Grupę : '.$grupe->name.' pataisėme!');
    }



    public function destroy(Grupe $grupe)
    {
    //  $grupe->delete();
    //  return redirect()->route('grupe.index');

        $grupe->delete();
        return redirect()->route('grupe.index')->with('success_message', 'Grupė : '.$grupe->name.' buvo sėkmingai ištrinta iš sąrašo!');
    }
}
