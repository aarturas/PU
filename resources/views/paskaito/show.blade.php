@extends('layouts.app')
@section('content')
                          <h6 style="padding-left:40%">show.blade.paskaitos</h6>
                          <h4 style="padding-left:24%">Informacijos pateikimas. paskaito.Kortelėje.</h4>
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
<div class="card-header" style="color:blue">Paskaitos - {{$paskaito->pavadinimas}}  informacija :</div>
<div class="card-body">
<div class="list-group">

{{--             Nuoroda i kelia, jeigu pasirenkame 'edit', nukreipiami i 'paskaito.edit' kelia     --}}
        <div><a href="{{route('paskaito.edit', $paskaito)}}">Edit</a></div>

{{--                                 Grupes-paskaitos pavadinimas                                   --}}
{{--    <div><b>Kursu id :</b> {{$paskaito->kursai_id}}</div>                                       --}}
        <div><b> Grupės pavadinimas :</b> {{$paskaito->pavadinimas}} </div>

{{--                                 Paskaitos data - Data :                                        --}}
        <div><b> Data :</b> {{$paskaito->data}} </div>
<div>
{{--                           Pastabos apie kazka...                                               --}}
        <h3><b>Aprašas: </b></h3>
<div>
{{--                           Turi buti 'šauktukai', kitaip nerodys pastabų                        --}}
            {!!$paskaito->aprasas!!}
</div>  
</div>
</div>
</div>
</div>
</div>
</div>







@endsection