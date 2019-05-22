@extends('layouts.app')
@section('content')
                                        <h6 style="padding-left:45%">edit.blade.grupes</h6>
                                        <h3 style="padding-left:40%">Grupes redagavimas</h3>
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
<div class="card-header">Edit grupę</div>
<div class="card-body">
    
                    <form action="{{route('grupe.update', [$grupe])}}" method="POST">  

 {{--                                                  Grupės paskaitų pradžia                                                 --}}
<div class="form-group">
        <label for="started_at">Grupės paskaitų pradžia</label>
        <input type="text" class="form-control" name="started_at" id="started_at" aria-describedby="emailHelp" placeholder="Grupė started_at" value="{{old('started_at', $grupe->started_at)}}">
        <small class="form-text text-muted">Grupės mokymų pradžia.</small>
</div>
  {{--                                                Grupės paskaitų pabaiga                                                         --}}
<div class="form-group">
        <label for="finished_at">Grupės paskaitų pabaiga</label>
        <input type="text" class="form-control" name="finished_at" id="finished_at" aria-describedby="emailHelp" placeholder="Grupė finished_at" value="{{old('finished_at', $grupe->finished_at)}}">
        <small class="form-text text-muted">Grupės mokymų pabaiga.</small>
</div>
 {{--                                                  Paskaitų pavadinimas                                                     --}}
<div class="form-group">
        <label for="pavadinimas">Paskaitų pavadinimas</label>
        <input type="text" class="form-control" name="pavadinimas" id="pavadinimas" aria-describedby="emailHelp" placeholder="Paskaitų pavadinimas" value="{{old('pavadinimas', $grupe->pavadinimas)}}">
        <small class="form-text text-muted">Paskaitų pavadinimas</small>
</div>
     {{--                                              Pridedame/pasirenkame kursus i grupe                                      --}}
<div class="form-group">
                                      <label for="kursai_id">Pridėti paskaitą grupei</label>
        <select class="form-control" id="kursai_id" name="kursai_id">
            @foreach (App\Kursai::all() as $item)
                <option value="{{$item->id}}" @if($item->id==$grupe->kursai_id) selected @endif>{{$item->name}} {{$item->surname}}</option>
            @endforeach
        </select>
                            <small class="form-text text-muted">Prašom pasirinkti paskaitą.</small>
</div>

   {{--                                             Renkamės destytoją pagal vardą, pavardę                                    --}}
<div class="form-group">
                                       <label for="destytoja_id">Pasirinkite dėstytoją</label>
        <select class="form-control" id="destytoja_id" name="destytoja_id">
                @foreach ($destytojai as $item)
                    <option value="{{$item->id}}">{{$item->name}} {{$item->surname}}</option>
                @endforeach
        </select>
</div>

 {{--                                Mokinio pavadinimo įrašymas                     --}}
 <div class="form-group">
        <label for="name">Įrašyti naują mokinį</label>
        <input type="text" class="form-control" name="name" id="name" placeholder="Įrašykite naują mokinį" value="{{old('name', '')}}">
        <small id="emailHelp" class="form-text text-muted">Įrašyti naują mokinį.</small>
</div>

        @csrf
                    <button type="submit" class="btn btn-primary">Enter</button>
                </form>

</div>
</div>
</div>
</div>
</div>



@endsection