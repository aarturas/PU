@extends('layouts.app')
@section('content')
                       <h6 class="text-center">show.blade.studentoGrupe</h6>
                       <h4 class="text-center">Informacijos pateikimas. studentoGrupe.Kortelėje.</h4>
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
<div class="card-header" style="color:blue">Paskaitos - {{$studentoGrupe->pavadinimas}}  informacija :</div>
<div class="card-body">
<div class="list-group">

{{--             Nuoroda i kelią, jeigu pasirenkame 'edit', nukreipiami i 'studentoGrupe.edit' kelią               --}}
        <div><a href="{{route('studentoGrupe.edit', $studentoGrupe)}}">Redaguoti</a></div>

{{--  ----------------------------------  1.  Grupės-studentoGrupes pavadinimas ------------------------------     --}}
        <div><b> Grupės pavadinimas : </b> {{$studentoGrupe->pavadinimas}} </div>

{{--  ---------------------------------  2.  Paskaitos data - Data :  -------------------------------------   --}}
        <div><b> Data :</b> {{$studentoGrupe->data}} </div>

{{--  ---------------------------------  3.  Paskaitos id - Data : ----------------------------------------   --}}
        <div><b> Paskaitos id :</b> {{$studentoGrupe->id}} </div>

{{--  ---------------------------------  4.  Pastabos apie kažką... ----------------------------------------- --}}
        <h3><b> Aprašas: </b></h3>
        
{{--  --------------------------  Turi būti 'šauktukai', kitaip nerodys pastabų  ---------------------------- --}}
       {!!$studentoGrupe->aprasas!!}
</div>
</div>
</div>
</div>
</div>







@endsection