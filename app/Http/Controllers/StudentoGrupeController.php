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
   
 
    public function add(Request $request, User $user)
    {
        //   tikrinimo grupe
        //   tikriname pagal grupės_id ir studento_id. Jeigu grupės_id ir studento_id jau yra DB,  grąžins tos eilutės modelį
        //   jeigu nera grazins NULL

        $_studentoGrupe = StudentoGrupe::where('grupe_id', $request->grupe_id)->where('studento_id', $user->id)->first();

        if ($_studentoGrupe) {                    // jeigu grazintas NULL sakyga FALSE ir nevykdoma
            return redirect()->route('user.edit',[$user])->with('info_message', 'Studenta(s) / dėstytoja(s) į šią grupę jau irašytas');
        }

        $studentoGrupe = new StudentoGrupe;       // sukuria db nauja eilute tuscia
        $studentoGrupe->studento_id = $user->id;
        $studentoGrupe->grupe_id = $request->grupe_id;
        $studentoGrupe->save();

        return redirect()->route('user.edit',[$user])->with('success_message', 'Userį : '.$studentoGrupe->studento_id.' informaciją atnaujinome!');
    }

   
    public function destroy(Request $request)
    {
        //  is request pasiimu studento grupes id $request->grupe_id
        //  ir pagal ta grupes id susirandu studento grupe

        $studentoGrupe = StudentoGrupe::where('id', $request->grupe_id)->first();



        //  $user reikalingas redirectui, kad žinotume kuri user dabar regauojame

        $user_id = $studentoGrupe->studento_id;
        $user = User::where('id', $user_id)->first();
    


        $studentoGrupe->delete();
    //  return redirect()->route('user.index');
    
        return redirect()->route('user.edit',[$user])->with('success_message', 'Useris : '.$studentoGrupe->name.' buvo sėkmingai ištrintas iš sąrašo!');
    }
}
