@extends('layouts.app')
@section('content')
                    <h6 class="text-center">show.blade.user</h6>
                    <h4 class="text-center">User.Informacijos pateikimas.Kortelėje.</h4>
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
<div class="card-header" style="color:blue">User {{$user->name}} informacija :</div>
<div class="card-body">
<div class="list-group">
{{--                             SHOW kortelė su informacija apie USERi                              --}}
{{--             Nuoroda i kelia, jeigu pasirenkame 'edit', nukreipiami i 'user.edit' kelia          --}}
        <div><a href="{{route('user.edit', $user)}}">Editas</a></div>


{{--                                1.  Tipas:    Dėstytojas-1 arba studentas-2                      --}}
<div><b> User tipas: id :</b> {{$user->tipa}}</div>

{{--                                2.  Dėstytojo / studento vardas                                  --}}
<div><b> User vardas :</b> {{$user->name}} </div>

{{--                                3.  Destytojo / studento pavardė                                 --}}
<div><b>User pavarde :</b> {{$user->surname}}</div>
<div>
{{--                                4.  Dėstytojo / studento el.paštas                               --}}
<div><b> User el.paštas :</b> {{$user->email}} </div>

{{--                                5.  Dėstytojo / studento telefonas                               --}}
<div><b> User telefonas :</b> {{$user->phone}} </div>


{{-- <div><b> User telefonas :</b> {{$user->paskaito_id->pavadinimas}} </div> --}}






                    
 
</div>
</div>
</div>
</div>
</div>
</div>

@endsection