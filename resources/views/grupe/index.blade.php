@extends('layouts.app')
@section('content')
                       <h6 class="text-center">index.blade.grupes</h6>
                       <h3 class="text-center">Grupių sąrašas ir redagavimas</h3>
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
<div class="card-header" style="color:blue">Grupių sąrašas</div>
<div class="card-body">
<div class="list-group">
                                              @foreach ($collection as $grupe)

{{-- in_array -   php funcija iesko masyve reiksmiu
     Auth::user()->id -   yra to userio kuris siuo metu prisijunges id
     $grupe->GrupeStudentoGrupe->pluck('studento_id')->toArray() -   yra masyvas su visais studentu id, kurie dalyvauja sioje grupeje                                 --}}
{{-- Pridedame į pradžia  - @if(Auth::user()->tipa == 1 ||, kad būtų galima pasirinkti tik dėstytoją                                                                  --}}

                @if(Auth::user()->tipa == 1 || in_array(Auth::user()->id, $grupe->GrupeStudentoGrupe->pluck('studento_id')->toArray()))

{{--  -------------------------------- Rodo dėstytojui viską ir redagavimą, ir trinimą  ------------------------------------------------------------------------------ --}}

                                    @if(Auth::user()->tipa == 1 )

<div class="row" style="margin-bottom: 10px;">
<div class="col-sm-8">

    <a href="{{route('grupe.show', $grupe)}}" class="list-group-item list-group-item-action list-group-item-primary" > Grupės id : {{ $grupe->id }} | {{ $grupe->name}} | pradžia: {{$grupe->started_at}}</a>
</div>
    <a href="{{route('grupe.edit', $grupe)}}" {{$grupe->name}}  {{$grupe->started_at}} {{$grupe->finished_at}}>

                                                      <button type="submit" class="btn btn-primary">Redaguoti</button>
    </a>
                <form action="{{route('grupe.destroy', $grupe)}}" method="POST">
        @csrf
                                                      <button type="submit" class="btn btn-danger">Trinti</button>
                </form>
</div>



                                     @else
{{--  --------------------------------  Rodo studentui tik sąrašą be redagavimo ir trinimo  ----------------------------------------------------------------------- --}}
<div class="row" >
<div class="col-md-12">
<div class="card">
<div class="card-body">
<div class="list-group">
<div class="row" style="margin-bottom: 12px;">
<div class="col-md-8">
    
         <p>Grupės id : {{ $grupe->id }} | {{ $grupe->name}} | pradžia: {{$grupe->started_at}}</p>
</div>
</div>
</div>
</div>
</div>

                                    @endif

                                    @endif

                                    @endforeach
</div>
</div>
</div>
</div>
</div>
</div>
</div>
                                    @endsection