@extends('layouts.app')
@section('content')
                         <h6 class="text-center">create.blade.grupes</h6>
                         <h3 class="text-center">Naujos grupės sukūrimas</h3>
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
<div class="card-header" style="color:blue">Nauja grupė</div>
<div class="card-body">
    
                        <form action="{{route('grupe.store')}}" method="POST">

{{--                     1. Renkamės (select'u) paskaitas / kursus                                                            --}}
<div class="form-group">
                                             <label >Pasirinkti paskaitą</label>
        <select class="form-control"name="kursai_id"  name="kursai_id">
                @foreach (App\Kursai::all() as $item)
                        <option value="{{$item->id}}">{{$item->name}} </option>
                @endforeach
        </select>
</div>


 {{--                    2.   Renkamės (select'u) destytoją: vardą, pavardę                                                                 --}}

{{-- <div class="form-group">
        <label for="destytoja_id">Pasirinkti user</label> --}}
  
{{--    --------------------     Pasirenkame destytoja (1) arba studenta (2) su select'u ir "where" (įrašome rankiniu būdu)  ---------------  --}}

            <select class="form-control" id="destytoja_id" name="destytoja_id">
                @foreach (App\User::where('tipa', 2)->get() as $item)
                    <option value="{{$item->id}}">{{$item->name}} {{$item->surname}}</option>
                @endforeach
            </select>

        <small class="form-text text-muted">Prašom pasirinkti user iš sąrašo.</small>
</div> 



 {{--                    3.   Paskaitos pavadinimas                                                                                                --}}
<div class="form-group">
                                             <label for="name">Grupės pavadinimas</label>

    <input type="text" class="form-control" name="name" id="name" placeholder="Įrašykite naują grupę" value="{{old('name', '')}}">
    <small id="emailHelp" class="form-text text-muted">Prašom įrašyti grupės pavadinimą.</small>
</div>


  {{--                   4.   Pradzia  -- started_at                                                                                              --}}
<div class="form-group">   
                                            <label for="started_at">Paskaitų kursų pradžia</label>
            <input type="text" class="form-control" name="started_at" id="started_at" aria-describedby="emailHelp" placeholder="Paskaitų kursų pradžia" value="{{old('started_at', '')}}">
</div>


     {{--                5.    Pabaiga -- finished_at                                                                                             --}}
<div class="form-group">
                                            <label for="finished_at">Paskaitų kursų pabaiga</label>
            <input type="text" class="form-control" name="finished_at" id="finished_at" aria-describedby="emailHelp" placeholder="Paskaitų kursų pabaiga" value="{{old('finished_at', '')}}">
</div>
            @csrf
                                       <button type="submit" class="btn btn-primary">Įrašyti</button>
                    </form>
</div>
</div>
</div>
</div>
</div>

 




@endsection