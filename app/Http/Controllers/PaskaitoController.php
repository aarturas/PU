<?php

namespace App\Http\Controllers;

use App\Failai;
use App\Paskaito;
use App\Grupe;
use App\Kursai;
use App\Destytoja;
use App\User;


use Illuminate\Http\Request;

class PaskaitoController extends Controller
{


    public function index()
    {
        return view('paskaito.index', ['collection' => Paskaito::all()]);
    }

    



    public function create()
    {
        return view('paskaito.create', ['paskaito'=> Paskaito::all()]);
    }
    
 



    public function store(Request $request)
    {
        $paskaito = new Paskaito;
        $paskaito->grupe_id = $request->grupe_id;
    //  $paskaito->data = $request->data;
        // $paskaito->data =  date('Y-m-d H:i:s', strtotime($request->data));
        $paskaito->data =  date('d/m/Y', strtotime($request->data));

        $paskaito->pavadinimas = $request->pavadinimas;
        $paskaito->aprasas = $request->aprasas;
        $paskaito->save();

     // return redirect()->route('paskaito.index');
        return redirect()->route('paskaito.index')->with('success_message', ' Paskaita :'.$paskaito->pavadinimas.' buvo sėkmingai įrašyta!');
    }





    public function show(Paskaito $paskaito)
    {
        return view('paskaito.show', ['paskaito' => $paskaito]);
    }





    public function edit(Paskaito $paskaito)
    {
        return view('paskaito.edit', ['collection' => Paskaito::all(),'paskaito' => $paskaito]);
    }




    public function update(Request $request, Paskaito $paskaito)
    {

        $paskaito->grupe_id = $request->grupe_id;
    //  pataiso datos formata - funkcija:strtotime
        $paskaito->data =  date('Y-m-d H:i:s', strtotime($request->data));
    //  $paskaito->data = $request->data;
        $paskaito->pavadinimas = $request->pavadinimas;
        $paskaito->aprasas = $request->aprasas;
        $paskaito->save();

     // return redirect()->route('paskaito.index');
        return redirect()->route('paskaito.index')->with('success_message', 'Paskaitos '.$paskaito->name.' informaciją atnaujinome!');
    }




    public function destroy(Paskaito $paskaito)
    {
        // if ($paskaito->PaskaitoGrupe->count() == 0)
        // {                                            
        //     $paskaito->delete();                       // galima trinti
        //     return redirect()->route('paskaito.index')->with('success_message', 'Paskaito '.$paskaito->name.' was deleted!');
        // }
        // else
        // {
        //     return redirect()->route('paskaito.index')->with('info_message', 'Cannot delete. Assign these Paskaito(s) to a different paskaito first.');
        // }

    //  $paskaito->delete();
    //  return redirect()->route('paskaito.index');

        $paskaito->delete();
        return redirect()->route('paskaito.index')->with('success_message', 'Paskaita : '.$paskaito->name.' buvo sėkmingai ištrinta iš sąrašo!');


    }
}
