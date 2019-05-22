<?php

namespace App\Http\Controllers;

use App\Failai;
use App\Paskaito;
use App\Grupe;
use App\Kursai;
use App\User;


use Illuminate\Http\Request;

class FailaiController extends Controller
{



    public function index()
    {
        return view('failai.index', ['collection' => Failai::all()]);
        // return view('failai.index', ['collection' => Paskaito::all()]);


    }





    public function create()
    {
        return view('failai.create');
    }





    public function store(Request $request)
    {

        
        $file = $request->file('photo') ?? false;
        if ($file) {
            $photo = basename($file->getClientOriginalName());    // failo vardas
            $file->move(public_path('/img'), $photo);  // eilutes numetimas i ta vieta
        }


        $failai = new Failai;
        $failai->paskaito_id = $request->paskaito_id;
        $failai->file = $photo;
        $failai->name = $request->name;
        $failai->save();

        return redirect()->route('failai.index');
    }






    public function show(Failai $failai)
    {
        //
    }






    public function edit(Failai $failai)
    {
                return view('failai.edit', ['failai' => $failai]);

    }





    public function update(Request $request, Failai $failai)
    {
        $failai->paskaito_id = $request->paskaito_id;
        $failai->file = $request->file;
        $failai->name = $request->name;
        $failai->save();


        return redirect()->route('failai.index');
    }





    public function destroy(Failai $failai)
    {
        $failai->delete();
        return redirect()->route('failai.index');
    }
}
