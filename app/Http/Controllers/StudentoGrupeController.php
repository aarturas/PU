<?php

namespace App\Http\Controllers;

use App\StudentoGrupe;
use Illuminate\Http\Request;


use App\Failai;
use App\Paskaito;
use App\Grupe;
use App\Kursai;
use App\User;
use Validator;

class StudentoGrupeController extends Controller
{
   
//                          Susikūriame naują funkciją: ADD, (su requestu ir useriu)
    public function add(Request $request, User $user)
    {
        //   tikriname StudentoGrupę
        //   tikriname pagal grupės_id ir studento_id: Jeigu grupės_id ir studento_id jau yra DB -  grąžins tos eilutės modelį
        //   jeigu nėra grąžins NULL

        $_studentoGrupe = StudentoGrupe::where('grupe_id', $request->grupe_id)->where('studento_id', $user->id)->first();

        if ($_studentoGrupe) {                    // jeigu grąžintas NULL, sąlyga yra: FALSE ir nevykdoma
            return redirect()->route('user.edit',[$user])->with('info_message', 'Studentas į šią grupę jau irašytas');
        }

        $studentoGrupe = new StudentoGrupe;       // sukūria DB naują eilutę, tuščią
        $studentoGrupe->studento_id = $user->id;
        $studentoGrupe->grupe_id = $request->grupe_id;
        $studentoGrupe->save();

        return redirect()->route('user.edit',[$user])->with('success_message', 'Studento : '.$studentoGrupe->studento_id.' informaciją atnaujinome!');
    }


    public function show(studentoGrupe $studentoGrupe)
    {
        return view('studentoGrupe.show', ['studentoGrupe' => $studentoGrupe]);
    }
    

   
    public function destroy(Request $request)
    {
        //  iš request pasiimu studento grupės id : $request->grupe_id
        //  ir pagal tos grupės id susirandu studento grupę

        $studentoGrupe = StudentoGrupe::where('id', $request->grupe_id)->first();



        //  $user reikalingas redirectui, kad žinotume kurį user dabar redaguojame

        $user_id = $studentoGrupe->studento_id;
        $user = User::where('id', $user_id)->first();
    


        $studentoGrupe->delete();
    //  return redirect()->route('user.index');
    
        return redirect()->route('user.edit',[$user])->with('success_message', 'Studentas : '.$studentoGrupe->name.' buvo sėkmingai ištrintas iš sąrašo!');
    }
}
