@extends('layouts.app')
@section('content')
                       <h6 class="text-center">show.blade.paskaitos</h6>
                       <h4 class="text-center">Informacijos pateikimas. paskaito.Kortelėje.</h4>
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
<div class="card-header" style="color:blue">Paskaitos - {{$paskaito->pavadinimas}}  informacija :</div>
<div class="card-body">
<div class="list-group">

{{--             Nuoroda i kelią, jeigu pasirenkame 'edit', nukreipiami i 'paskaito.edit' kelią               --}}
        <div><a href="{{route('paskaito.edit', $paskaito)}}">Redaguoti</a></div>

{{--  ----------------------------------  1.  Grupės-paskaitos pavadinimas ------------------------------     --}}
        <div><b> Grupės pavadinimas : </b> {{$paskaito->pavadinimas}} </div>

{{--  ---------------------------------  2.  Paskaitos data - Data :  -------------------------------------   --}}
        <div><b> Data :</b> {{$paskaito->data}} </div>

{{--  ---------------------------------  3.  Paskaitos id - Data : ----------------------------------------   --}}
        <div><b> Paskaitos id :</b> {{$paskaito->id}} </div>

{{--  ---------------------------------  4.  Pastabos apie kažką... ----------------------------------------- --}}
        <h3><b> Aprašas: </b></h3>
        
{{--  --------------------------  Turi būti 'šauktukai', kitaip nerodys pastabų  ---------------------------- --}}
       {!!$paskaito->aprasas!!}
</div>
</div>
</div>
</div>
</div>







@endsection