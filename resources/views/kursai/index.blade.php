@extends('layouts.app')
@section('content')
                       <h6 class="text-center">index.blade.kursai</h6>
                       <h3 class="text-center">Kursų redagavimas</h3>
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
<div class="card-header" style="color:blue">Kursų sąrašas</div>
<div class="card-body">
<div class="list-group">
                                              @foreach ($collection as $kursai)


{{-- in_array -   php funcija ieško masyve reikšmių
     Auth::user()->id -   yra to userio kuris šiuo metu prisijungęs id
     $kursai->GrupeStudentoGrupe->pluck('studento_id')->toArray() -   yra masyvas su visais studentu id, kurie dalyvauja šioje kursaije --}}

{{-- @if(in_array(Auth::user()->id, $kursai->GrupeStudentoGrupe->pluck('studento_id')->toArray()))  //                                               is grupes --}}
{{-- @if(in_array(Auth::user()->id, $kursai->StudentoGrupe->pluck('studento_id')->toArray()))  //                                     sitas nesigauna is kursu? --}}

{{-- @if(in_array(Auth::user()->id, App\Grupe::where('id',$paskaito->grupe_id)->first()->GrupeStudentoGrupe->pluck('studento_id')->toArray()))  //   is paskaitu --}}
{{-- @if(in_array(Auth::user()->id, App\Kursai::where('id',$kursai->grupe_id)->get()->GrupeStudentoGrupe->pluck('studento_id')->toArray())) --}}

{{--  --------------------------------- 1.  Rodo dėstytojui viską ir redagavimą, ir trinimą  ------------------------------------------------------------------------------ --}}

                                            @if(Auth::user()->tipa == 1 )

<div class="row" style="margin-bottom: 10px;">
<div class="col-sm-8">


    <a href="{{route('kursai.show', $kursai)}}" class="list-group-item list-group-item-action list-group-item-primary">{{ $kursai->id }}.{{ $kursai->name}}</a>
</div>
    <a href="{{route('kursai.edit', $kursai)}}" {{$kursai->name}} >
                                        <button type="submit" class="btn btn-primary">Redaguoti</button>
    </a>
    <form action="{{route('kursai.destroy', $kursai)}}" method="POST">
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
<div class="row" >
<div class="col-md-8">

        <p>Kursai id :  {{ $kursai->id }}. {{ $kursai->name}} </p>
          
</div>
</div>
</div>
</div>
</div>
                                             {{-- @endif --}}

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