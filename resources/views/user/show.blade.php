@extends('layouts.app')
@section('content')
                          <h6 style="padding-left:35%">show.blade.user</h6>
                          <h4 style="padding-left:30%">Informacijos pateikimas.Kortelėje.</h4>
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
<div class="card-header" style="color:blue">User {{$user->name}} informacija :</div>
<div class="card-body">
<div class="list-group">

{{--             Nuoroda i kelia, jeigu pasirenkame 'edit', nukreipiami i 'user.edit' kelia     --}}
        <div><a href="{{route('user.edit', $user)}}">Editas</a></div>
        

{{--                           Dėstytojo id?                              --}}
<div><b> User vardas :</b> {{$user->name}} </div>



{{--                          Kursų id?                                 --}}
        <div><b>User pavarde :</b> {{$user->surname}}</div>

<div>
{{--                           Info lentelėje: kursų pradžia                      --}}
        <b>Kursų pradžia:</b>
            {{$user->started_at}} 
</div>

<div>
 {{--                          info lenteleje: kursų pabaiga                      --}}
         <b>Kursų pabaiga:</b>
              {{$user->finished_at}}
 </div>

{{--                           Pastabos apie kazka...                            --}}
        <h3>Notices:</h3>
<div>
{{--                           Turi buti šauktukai, kitaip nerodys pastabų       --}}
            {!!$user->aprasas!!}
                    
</div>  
</div>
</div>
</div>
</div>
</div>
</div>

@endsection