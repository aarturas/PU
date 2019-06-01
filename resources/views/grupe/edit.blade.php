@extends('layouts.app')
@section('content')
                     <h6 class="text-center">edit.blade.grupes</h6>
                     <h3 class="text-center">Grupes redagavimas</h3>
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
<div class="card-header" style="color:blue">Edit grupę</div>
<div class="card-body">

                    <form action="{{route('grupe.update', [$grupe])}}" method="POST">  

{{--                                         Jei "tipa-1", tai bus matoma tik dėstytojui                                                  --}}
                                @if(Auth::user()->tipa == 1)

{{-- -----------------------------  1.  Pasirenkame grupę  ---------------------------------------------------------------                --}}

<div class="form-group">
        <label for="kursai_id">Pasirinkti grupę</label>
                <select class="form-control" id="kursai_id" name="kursai_id">
                     @foreach (App\Kursai::all() as $item)
                          <option value="{{$item->id}}" @if($item->id==$grupe->kursai_id) selected @endif>{{$item->name}} {{$item->surname}}</option>
                     @endforeach
                </select>
<small class="form-text text-muted">Prašom pasirinkti paskaitą.</small>
</div>

{{--    --------------------        2.  Pasirenkame dėstytoją (1) arba studentą (2) su select'u ir "where"  -----------------------         --}}

<div class="form-group">
        <label for="destytoja_id">Pasirinkti dėstytoją</label>
            <select class="form-control" id="destytoja_id" name="destytoja_id">
                @foreach (App\User::where('tipa', 1)->get() as $item)
                    <option value=" {{$item->id}}">{{$item->name}} {{$item->surname}} </option>
                @endforeach
            </select>
        <small class="form-text text-muted">Prašom pasirinkti user iš sąrašo.</small>
</div> 

 {{--  -------------------------    3.  Redaguojame paskaitas  ---------------------------------------------------------                       --}}

 <div class="form-group">
        <label for="pavadinimas">Paskaitų pavadinimas</label>
        <input type="text" class="form-control" name="pavadinimas" id="pavadinimas" aria-describedby="emailHelp" placeholder="Paskaitų pavadinimas" value="{{old('pavadinimas', $grupe->pavadinimas)}}">
        <small class="form-text text-muted">Paskaitų pavadinimas</small>
</div>

 {{-- ---------------------------   4.  Grupės paskaitų pradžia  --------------------------------------------------------                       --}}

<div class="form-group">
        <label for="started_at">Grupės paskaitų pradžia</label>
        <input type="text" class="form-control" name="started_at" id="started_at" aria-describedby="emailHelp" placeholder="Grupė started_at" value="{{old('started_at', $grupe->started_at)}}">
        <small class="form-text text-muted">Grupės mokymų pradžia.</small>
</div>

  {{-- -------------------------   5.  Grupės paskaitų pabaiga      ------------------------------------------------------                      --}}

<div class="form-group">
        <label for="finished_at">Grupės paskaitų pabaiga</label>
        <input type="text" class="form-control" name="finished_at" id="finished_at" aria-describedby="emailHelp" placeholder="Grupė finished_at" value="{{old('finished_at', $grupe->finished_at)}}">
        <small class="form-text text-muted">Grupės mokymų pabaiga.</small>
</div>

 {{-- ----------------------------   6.  Naujo mokinio įrašymas  -------------------------------------------------------                   --}}

 {{-- <div class="form-group">
        <label for="name">Įrašyti naują mokinį</label>
        <input type="text" class="form-control" name="name" id="name" placeholder="Įrašykite naują mokinį" value="{{old('name', '')}}">
        <small id="emailHelp" class="form-text text-muted">Įrašyti naują mokinį.</small>
</div> --}}
        @csrf
                    <button type="submit" class="btn btn-primary">Enter</button>
                </form>
@endif

</div>
</div>
</div>
</div>
</div>



@endsection