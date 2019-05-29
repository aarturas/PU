@extends('layouts.app')
@section('content')
                          <h6 style="padding-left:40%">create.blade.failai</h6>
                          <h3 style="padding-left:30%">Naujų skaidrių įrašymas</h3>
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
<div class="card-header">Nauja skaidrė</div>
<div class="card-body">

{{--               ------   Naujos skaidrės-failo kūrimas   ------                                                       --}}
                                   <form action="{{route('failai.store')}}" method="POST" enctype="multipart/form-data">

{{--                                                         1. Renkamės (select'u) paskaitas / kursus is sąrašo                                      --}}
<div class="form-group">
            <select class="form-control"name="paskaito_id">
                    @foreach (App\Paskaito::all() as $item)
                        <option value="{{$item->id}}">{{$item->pavadinimas}}</option>
                    @endforeach
            </select>
</div>
{{--                                                         2.   Skaidrių pasirinkimas ir įkėlimas???                                        --}}
<div class="form-group">
       <label for="name">Skaidrės</label>
       <input type="file" class="form-control-file" name="photo" id="photo">
       <small id="emailHelp" class="form-text text-muted">Prašome įkelti naują skaidrę.</small>
</div>    
 
{{--                                                         3.  Paskaitos pavadinimas                                                        --}}
<div class="form-group">
       <label for="name">Grupės pavadinimas</label>
       <input type="text" class="form-control" name="name" id="name" placeholder="Įrašykite naują grupę" value="{{old('name', '')}}">
       <small id="emailHelp" class="form-text text-muted">Prašom įrašyti paskaitos pavadinimą.</small>
</div>
                                 <button type="submit" class="btn btn-primary">Įrašyti</button>
                          @csrf
                                 </form>
</div>
</div>
</div>
</div>
</div>
</div>



@endsection