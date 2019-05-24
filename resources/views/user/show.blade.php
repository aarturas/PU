@extends('layouts.app')
@section('content')
                          <h6 style="padding-left:45%">show.blade.user</h6>
                          <h4 style="padding-left:35%">User.Informacijos pateikimas.Kortelėje.</h4>
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
<div class="card-header" style="color:blue">User {{$user->name}} informacija :</div>
<div class="card-body">
<div class="list-group">

{{--             Nuoroda i kelia, jeigu pasirenkame 'edit', nukreipiami i 'user.edit' kelia     --}}
        <div><a href="{{route('user.edit', $user)}}">Editas</a></div>


        {{--                        Tipas:    Dėstytojas ar studentas                             --}}
<div><b> User tipas :</b> {{$user->tipa}} </div>
        

{{--                           Dėstytojo / studento vardas                              --}}
<div><b> User vardas :</b> {{$user->name}} </div>

{{--                          Destytojo / studento pavarde                                --}}
        <div><b>User pavarde :</b> {{$user->surname}}</div>
<div>


        {{--                           Dėstytojo / studento vardas                              --}}
<div><b> User el.paštas :</b> {{$user->email}} </div>


{{--                           Dėstytojo / studento vardas                              --}}
<div><b> User telefonas :</b> {{$user->phone}} </div>

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