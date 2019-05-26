<?php

namespace App\Http\Controllers;

use App\Failai;
use App\Paskaito;
use App\Grupe;
use App\Kursai;
use App\User;
use Validator;


use Illuminate\Http\Request;

class FailaiController extends Controller
{


// ---------------------------------------------- INDEX --------------------------------------------------------------


    public function index()
    {
        return view('failai.index', ['collection' => Failai::all()]);
        // return view('failai.index', ['collection' => Paskaito::all()]);


    }


// ---------------------------------------------- CREATE --------------------------------------------------------------



    public function create()
    {
        $destytojai = User::where('tipa', 1)->get();

        return view('failai.create', ['destytojai'=> $destytojai] ) ;
    }


// ---------------------------------------------- STORE --------------------------------------------------------------


    public function store(Request $request)
    {


        $validator = Validator::make($request->all(), 
        [
            'name' => ['required', 'min:3', 'max:64'],
            'photo' => ['sometimes','required','max:20000','mimes:jpg,png,jpeg']
        ],
        [
            'name.required' => 'Name is required',
        ]
        );
        if ($validator->fails()) {
            $request->flash();
            return redirect()->route('failai.create')->withErrors($validator);
        }




    //                                 Failų  controlleryje į "store" įkeliame photo failą
        $file = $request->file('photo') ?? false;
        if ($file) {
            $photo = basename($file->getClientOriginalName());    // failo vardas
            $file->move(public_path('/img'), $photo);             // eilutės 'numetimas' i tą vietą
        }


        $failai = new Failai;
        $failai->paskaito_id = $request->paskaito_id;
    //                  $photo, neprisimenu kodėl yra be $request'o
        $failai->file = $photo;
        $failai->name = $request->name;
        $failai->save();

        // return redirect()->route('failai.index');
        return redirect()->route('failai.index')->with('success_message', ' Failai: '.$failai->name.' buvo sėkmingai įkelti!');

    }


// ---------------------------------------------- SHOW --------------------------------------------------------------




    public function show(Failai $failai)
    {
        return view('failai.show', ['failai' => $failai]);
    }


// ---------------------------------------------- EDIT --------------------------------------------------------------




    public function edit(Failai $failai)
    {
                return view('failai.edit', ['failai' => $failai]);

    }


// ---------------------------------------------- UPDATE --------------------------------------------------------------



    public function update(Request $request, Failai $failai)
    {

//                                                    validatorius

        $validator = Validator::make($request->all(), 
        [
            'name' => ['required', 'min:3', 'max:64'],
        ],
        [
            'name.required' => 'Name is required',
        ]
        );
        if ($validator->fails()) {
            $request->flash();
            return redirect()->route('failai.edit')->withErrors($validator);
        }

        //                                          photo ikelimas
        $file = $request->file('photo') ?? false;
            if ($file) {
        $photo = basename($file->getClientOriginalName());          // failo pavadinimas
        $file->move(public_path('/img'), $photo);
        }

        
        $failai->name = $request->name;
        $failai->surname = $request->surname;
            if ($file) {
        $failai->photo = $photo;
        }



        $file = $request->file('photo') ?? false;
        if ($file) {
            $photo = basename($file->getClientOriginalName());    // failo vardas
            $file->move(public_path('/img'), $photo);             // eilutes numetimas i ta vieta
        }

        // $failai->paskaito_id = $request->paskaito_id;
        $failai->file = $photo;
        $failai->name = $request->name;
        $failai->save();

        // return redirect()->route('failai.index');
        return redirect()->route('failai.index')->with('success_message', 'Failo : '.$failai->name.' informaciją sėkmingai atnaujinome!');
    }


// ---------------------------------------------- DELETE --------------------------------------------------------------



    public function destroy(Failai $failai)
    {
        $failai->delete();
        // return redirect()->route('failai.index');
        return redirect()->route('failai.index')->with('success_message', 'Failas : '.$failai->name.' buvo sėkmingai ištrintas iš sąrašo!');
    }
}
