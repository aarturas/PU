@extends('layouts.app')
@section('content')
                        <h6 class="text-center">index.blade.failai</h6>
                        <h3 class="text-center">Skaidrių sąrašas</h3>
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
<div class="card-header" style="color:blue">Failų sąrašas, redagavimas ir priskirimas paskaitoms</div>
<div class="card-body">
<div class="list-group">
                                            @foreach ($collection as $failai)
<div class="row" style="margin-bottom: 10px;">
<div class="col-md-5">
<div class="col-md-3">

        {{-- @if(Auth::user()->tipa == 1 || in_array(Auth::user()->id, $grupe->GrupeStudentoGrupe->pluck('failai')->toArray())) --}}
        {{-- @if(in_array(Auth::user()->id, App\Paskaito::where('id',$paskaito->failai)->first()->GrupeStudentoGrupe->pluck('studento_id')->toArray())) --}}



 {{--  --------------------   photo/skaidrės įkėlimas: rodo nuotraukas   --------------------------------------------------------------------    --}}

                 <img src="{{asset('img/'.$failai->file)}}" style="object-fit: contain; height: 100px;"> 

                 @if(Auth::user()->tipa == 1

</div>

</div>
</div>

<div class="row" style="margin-bottom: 10px;">

{{--  ------------------ Failu langelis su grupes pavadinimu ir nuoroda i show informacijos puslapi  --------------------------------------------    --}}


<div class="col-md-6">   
        <a href="{{route('failai.show', $failai)}}" class="list-group-item list-group-item-action list-group-item-primary" enctype="multipart/form-data">{{$failai->name}}</a>

</div>

                                @else 

{{--  ------------------  Failu redagavimas su mygtuku "Redaguoti"  ----------------------------------------------------------------------------   --}}

        <a href="{{route('failai.edit', $failai)}}" {{$failai->file}}>
                                                                       <button type="submit" class="btn btn-primary">Redaguoti</button></a>

{{--  -----------------  Failu trinimas su mygtuku  ---------------------------------------------------------------------------------------------  --}}

        <form action="{{route('failai.destroy', $failai)}}" method="POST">
@csrf
                                                                       <button type="submit" class="btn btn-danger">Trinti</button>
        </form>
           
<div class="form-group">
{{--  ------------------------  foto failų redagavimas  ---------------------------------------------------------------------------------------    --}}

        @if($failai->photo)
                <a href="{{route('failai.edit', $failai)}}">
                <img src="{{asset('img/'.$failai->photo)}}" style="object-fit: contain; height: 100px;">
                </a>


        @endif
           @endif

</div>
</div>
                                           @endforeach
</div>
</div>
</div>
</div>
</div>
</div>







@endsection