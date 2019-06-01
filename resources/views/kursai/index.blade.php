@extends('layouts.app')
@section('content')
                       <h6 class="text-center">index.blade.kursai</h6>
                       <h3 class="text-center">Kursų redagavimas</h3>
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
<div class="card-header" style="color:blue">Grupių sąrašas</div>
<div class="card-body">
<div class="list-group">
                                              @foreach ($collection as $kursai)


{{-- in_array -   php funcija iesko masyve reiksmiu
     Auth::user()->id -   yra to userio kuris siuo metu prisijunges id
     $kursai->GrupeStudentoGrupe->pluck('studento_id')->toArray() -   yra masyvas su visais studentu id, kurie dalyvauja sioje kursaije --}}

{{-- @if(in_array(Auth::user()->id, $kursai->GrupeStudentoGrupe->pluck('studento_id')->toArray())) --}}



<div class="row" style="margin-bottom: 10px;">

<div class="col-sm-5">

    <a href="{{route('kursai.show', $kursai)}}" class="list-group-item list-group-item-action list-group-item-primary">{{ $kursai->id }}. {{ $kursai->name}}</a>
</div>
    <a href="{{route('kursai.edit', $kursai)}}" {{$kursai->name}} >
                                        <button type="submit" class="btn btn-primary">Redaguoti</button>
    </a>
    <form action="{{route('kursai.destroy', $kursai)}}" method="POST">
            @csrf
                                        <button type="submit" class="btn btn-danger">Trinti</button>
    </form>
</div>
{{-- @endif --}}
                                             @endforeach
</div>
</div>
</div>
</div>
</div>


                                             @endsection