@extends('layouts.app')
@section('content')
                       <h6 class="text-center">index.blade.paskaitos</h6>
                       <h3 class="text-center">Paskaitų sąrašas ir redagavimas</h3>
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
<div class="card-header" style="color:blue">Paskaitų sąrašas</div>
<div class="card-body">
<div class="list-group">
                                              @foreach ($collection as $paskaito)

{{-- in_array -   php funcija iesko masyve reiksmiu
     Auth::user()->id -   yra to userio kuris siuo metu prisijunges id
     $paskaito->GrupeStudentoGrupe->pluck('studento_id')->toArray() -   yra masyvas su visais studentu id, kurie dalyvauja sioje paskaitoje    --}}

{{--    @if(in_array(Auth::user()->id, $paskaito->GrupeStudentoGrupe->pluck('studento_id')->toArray()))                                        --}}

        @if(in_array(Auth::user()->id, App\Grupe::where('id',$paskaito->grupe_id)->first()->GrupeStudentoGrupe->pluck('studento_id')->toArray()))

{{--  --------------------------------- 1.  Rodo dėstytojui viską ir redagavimą, ir trinimą  ------------------------------------------------------------------------------ --}}

                                                       @if(Auth::user()->tipa == 1 )

<div class="row" >
<div class="col-sm-8">

    <a href="{{route('paskaito.show', $paskaito)}}" class="list-group-item list-group-item-action list-group-item-primary" > Paskaitos id : {{ $paskaito->id }} . {{ $paskaito->pavadinimas}} | data : {{$paskaito->data}}</a>
</div>
    <a href="{{route('paskaito.edit', $paskaito)}}" {{$paskaito->name}}  {{$paskaito->data}} {{$paskaito->finished_at}}>
                                               <button type="submit" class="btn btn-primary">Redaguoti</button>
    </a>
                                        <form action="{{route('paskaito.destroy', $paskaito)}}" method="POST">
        @csrf
                                               <button type="submit" class="btn btn-danger">Trinti</button>
                                        </form>
</div>


@else
{{--  -------------------------------- 2.  Rodo studentui tik sąrašą be redagavimo ir trinimo  ----------------------------------------------------------------------- --}}


<div class="row" >
<div class="col-md-12">
<div class="card">
<div class="card-body">
<div class="list-group">
<div class="row" style="margin-bottom: 12px;">
<div class="col-md-8">

            <p>Paskaitos id : {{ $paskaito->id }} | {{ $paskaito->pavadinimas}} | data : {{$paskaito->data}}</p>
       
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