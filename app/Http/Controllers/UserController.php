<?php

namespace App\Http\Controllers;

use App\Failai;
use App\Paskaito;
use App\Grupe;
use App\Kursai;
use App\User;
use Hash;
use App\StudentoGrupe;



use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        return view('user.index', ['collection' => User::all()]);

    }




    public function create()
    {
        return view('user.create', ['user'=> User::all()]);

    //  return view('user.edit', ['collection' => Grupe::all(),'User' => $user]);
    //  return view('user.create',['user'=> $user]);
    //  return view('user.create');
    }




    public function store(Request $request)
    {
        $user = new User;
        $user->tipa = $request->tipa;
        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->email = $request->email;
        $user->phone = $request->phone;
//                                                į slaptažodžio 'laukelį' įrašome, kad slaptažodis yra privalomas
        $user->password =  Hash::make($request->password);

        $user->save();

//      return redirect()->route('user.index');
//                                             sukūriame "pasirodančią" žinutę, kad /'user'is/ yra sėkmingai sukurtas
        return redirect()->route('user.index')->with('success_message', 'User '.$user->name.' '.$user->surname.' buvo sėkmingai įrašyta(s)!');

    }



    public function show(User $user)
    {
        return view('user.show', ['user' => $user]);
        
    }



    public function edit(User $user)
    {
        return view('user.edit', ['collection' => Grupe::all(),'user' => $user, 'collection' => StudentoGrupe::all()]);

    }


    
    public function update(Request $request, User $user)
    {
        $user->tipa = $request->tipa;
        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->save();

        // return redirect()->route('user.index');

        return redirect()->route('user.index')->with('success_message', 'Userį : '.$user->name.' informaciją atnaujinome!');

    }



    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('user.index')->with('success_message', 'User : '.$user->name.' '.$user->surname.' buvo sėkmingai ištrinta(s) is sąrašo!');
        
    }

}
