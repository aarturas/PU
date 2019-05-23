<?php

namespace App\Http\Controllers;

use App\Failai;
use App\Paskaito;
use App\Grupe;
use App\Kursai;
use App\User;
use Hash;


use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        return view('user.index', ['collection' => User::all()]);

    }




    public function create()
    {

    //  return view('user.edit', ['collection' => Grupe::all(),'User' => $user]);
    //  return view('user.create', ['user'=> User::all()]);
    //  return view('user.create',['user'=> $user]);

        return view('user.create');
    }




    public function store(Request $request)
    {
        $user = new User;
        $user->tipa = $request->tipa;
        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->email = $request->email;
        $user->phone = $request->phone;

        $user->password =  Hash::make($request->password);
    

        $user->save();

        return redirect()->route('user.index');
    }



    public function show(User $user)
    {
        return view('user.show', ['user' => $user]);
        
    }



    public function edit(User $user)
    {
        return view('user.edit', ['collection' => Grupe::all(),'user' => $user]);

    }


    
    public function update(Request $request, Vartotojai $user)
    {
        $user->tipa = $request->tipa;
        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->save();

        return redirect()->route('user.index');
    }



    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('user.index')->with('success_message', 'Vartotojai '.$user->name.' '.$user->surname.' was given to Kursai!');
    }

}
