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

{{-- @if(Auth::user()->tipa == 1 || in_array(Auth::user()->id, $grupe->GrupeStudentoGrupe->pluck('failai')->toArray()))        --}}
{{-- @if(in_array(Auth::user()->id, App\Paskaito::where('id',$paskaito->failai)->first()->GrupeStudentoGrupe->pluck('studento_id')->toArray())) --}}
{{-- {{$failai->FailaiPaskaito->GrupePaskaito->GrupeStudentoGrupe->pluck('studento_id')->toArray()}} --}}
{{-- {{dd($failai->FailaiPaskaito->PaskaitoGrupe->GrupeStudentoGrupe->pluck('studento_id')->toArray())}} --}}


{{-- @if(in_array(Auth::user()->id, $failai->FailaiPaskaito->PaskaitoGrupe->GrupeStudentoGrupe->pluck('studento_id')->toArray())) --}}

 {{--  --------------------   photo/skaidrės įkėlimas: rodo nuotraukas   --------------------------------------------------------------------    --}}

                 <img src="{{asset('img/'.$failai->file)}}" style="object-fit: contain; height: 100px;"> 
                
</div>
</div>
</div>
{{--  ------------------------------  Mato tik destytojas   --------------------------------------------------------------  --}}
                            @if(Auth::user()->tipa == 1)

<div class="row" style="margin-bottom: 10px;">

{{--  ------------------ 1.  Failu langelis su grupes pavadinimu ir nuoroda i show informacijos puslapi  --------------------------------------------    --}}

<div class="col-sm-6">   
        <a href="{{route('failai.show', $failai)}}" class="list-group-item list-group-item-action list-group-item-primary" enctype="multipart/form-data">{{$failai->name}}</a>
</div>

{{--  ------------------ 2.  Failu redagavimas su mygtuku "Redaguoti"  ----------------------------------------------------------------------------   --}}

        <a href="{{route('failai.edit', $failai)}}" {{$failai->file}}>
                                                            <button type="submit" class="btn btn-primary">Redaguoti</button></a>

{{--  ------------------ 3.  Failu trinimas su mygtuku "Trinti"  ------------------------------------------------------------------------------------  --}}

        <form action="{{route('failai.destroy', $failai)}}" method="POST">
@csrf
                                                            <button type="submit" class="btn btn-danger">Trinti</button>
        </form>
           
<div class="form-group">
{{--  ------------------ 4.  Foto failų redagavimas  ---------------------------------------------------------------------------------------    --}}

        @if($failai->photo)
                <a href="{{route('failai.edit', $failai)}}">
                <img src="{{asset('img/'.$failai->photo)}}" style="object-fit: contain; height: 100px;">
                </a>
        @else  

        @if(in_array(Auth::user()->id, $failai->FailaiPaskaito->PaskaitoGrupe->GrupeStudentoGrupe->pluck('studento_id')->toArray()))
        

                <p> Failai : {{$failai->id}} {{ $failai->file }} | {{ $failai->name}} </p>
                {{-- <p>Failai{{$failai->name}}</p> --}}

        @endif
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
</div>







@endsection