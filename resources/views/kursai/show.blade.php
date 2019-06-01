@extends('layouts.app')
@section('content')
                       <h6 class="text-center">show.blade.kursai</h6>
                       <h4 class="text-center">Informacijos pateikimas.Kursai.Kortelėje.</h4>
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
<div class="card-header" style="color:blue"> Kursų - {{$kursai->pavadinimas}}  informacija :</div>
<div class="card-body">
<div class="list-group">

{{--             Nuoroda i kelią, jeigu pasirenkame 'edit', nukreipiami i 'paskaito.edit' kelią     --}}
             <div><a href="{{route('kursai.edit', $kursai)}}">Redaguoti</a></div>

{{--                              1.  Kursų ID numeris                                                 --}}
             <div><b>Kursu id :</b> {{$kursai->id}}</div>    
        
{{--                              2.  Kursų pavadinimas                                                --}}
             <div><b> Kursų pavadinimas : </b> {{$kursai->name}} </div>
<div>
</div>  
</div>
</div>
</div>
</div>
</div>
</div>







@endsection